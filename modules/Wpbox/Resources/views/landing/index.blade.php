<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name','Site') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <!-- Google Analitics -->
    @include('components.ga')
    @yield('head')
    
    <!-- RTL and Commmon ( Phone ) -->
    @include('layouts.rtl')

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <!-- Custom CSS defined by admin -->
    <link type="text/css" href="{{ asset('byadmin') }}/front.css" rel="stylesheet">



   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.cdnfonts.com/css/general-sans?styles=135312,135310,135313,135303" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased bg-body text-body font-body">
    <div class="">
                
      @include('wpbox::landing.partials.header')
         
      @include('wpbox::landing.partials.counter') 
      @include('wpbox::landing.partials.feautures') 
      @include('wpbox::landing.partials.demo') 

      @if ($hasAIBots)
        @include('flowiseai::landing')   
      @endif
      

      @include('wpbox::landing.partials.pricing')
      @include('wpbox::landing.partials.testimonials')
      @include('wpbox::landing.partials.faq')
      @include('wpbox::landing.partials.footer')
      @include('wpbox::landing.partials.script')
    </div>

    <!-- Custom JS defined by admin -->
    <?php 
      echo file_get_contents(base_path('public/byadmin/front.js')) 
    ?>
</body>
</html>

