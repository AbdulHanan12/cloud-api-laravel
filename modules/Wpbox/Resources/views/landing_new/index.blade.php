<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('global.site_name','WhatsBox') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
   
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('head')
    
    <!-- RTL and Commmon ( Phone ) -->
    @include('layouts.rtl')

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <!-- Custom CSS defined by admin -->
    <link type="text/css" href="{{ asset('byadmin') }}/front.css" rel="stylesheet">
    
</head>
<body class="landing-page">
    @include('wpbox::landing.partials.nav')
    @include('wpbox::landing.partials.header')
    @include('wpbox::landing.partials.product')
    @include('wpbox::landing.partials.demo')

    @include('wpbox::landing.partials.pricing')
    @include('wpbox::landing.partials.testimonials')
    @include('wpbox::landing.partials.faq')
    @include('wpbox::landing.partials.footer')

    <!-- AlpineJS Library -->
    <script src="{{ asset('vendor') }}/alpine/alpine.js"></script>
    
    <!--   Core JS Files   -->
    <script src="{{ asset('vendor') }}/jquery/jquery.min.js" type="text/javascript"></script>
 

    <!-- All in one -->
    <script src="{{ asset('custom') }}/js/js.js?id={{ config('version.version')}}s"></script>

    <!-- Custom JS defined by admin -->
    <?php echo file_get_contents(base_path('public/byadmin/front.js')) ?>

    <script>
        window.onload = function () {
    
        $('#termsCheckBox').on('click',function () {
            $('#submitRegister').prop("disabled", !$("#termsCheckBox").prop("checked"));
            if(this.checked){
                $('#submitRegister').addClass('opacity-100');
            }else{
                $('#submitRegister').removeClass('opacity-100');
                 
            }
           
        })
    }
    </script>

</body>
</html>