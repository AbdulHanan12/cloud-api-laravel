@extends('layouts.app', ['title' => __('Send new campaign')])
@section('head')
@endsection

@section('content')
@include('companies.partials.modals')
<div class="header  pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <h1 class="mb-3 mt--3">📢 {{__('Send new campaign')}}</h1>
            <div class="row align-items-center pt-2">
            </div>
        </div>
    </div>
</div>

<form method="POST" action="{{ route('campaigns.store') }}" id="campign" enctype="multipart/form-data">
    @csrf
<div class="container-fluid mt--7" id="campign_managment">
    <div class="row">
        <!--Main info-->
        <div class="col-xl-4">
            <div class="card shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{__('Campaign')}}</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('wpbox::campaigns.new.campaign')
                </div>
            </div>
        </div>

        @if (isset($_GET['template_id']))
            <!--Variables-->
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{__('Variables')}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('wpbox::campaigns.new.variables')
                    </div>
                </div>
            </div>

            <!--Preview and send-->
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{__('Preview')}}</h3>
                            </div>
                        </div>
                    </div>
                    @include('wpbox::campaigns.new.preview')
                </div>

                <div class="card shadow mt-4">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{__('Send campaing')}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (!isset($_GET['contact_id']))
                            @if($selectedContacts!="")
                                @if ($selectedContacts==1)
                                    <p>{{__('Send to')}}:{{$selectedContacts}} {{__('contact')}}</p>
                                @else
                                    <p>{{__('Send to')}}:{{$selectedContacts}} {{__('contacts')}}</p>
                                @endif
                            @endif

                             
                        @endif
                       
                        @if (!isset($_GET['contact_id'])&&$selectedContacts>0)
                            <button  class="btn btn-success mt-4" type="submit">{{ __('Send campaign')}}</button>
                        @elseif(isset($_GET['contact_id']))
                            <button  class="btn btn-success mt-4" type="submit">{{ __('Send campaign')}}</button>
                        @endif
                        
                    </div>
                </div>

            </div>
        @endif

        
        
        
    </div>
</div>
</form>
@endsection


<script>

    var vuec=null;
    var component=@json($selectedTemplateComponents);
    

    function submitJustCampign(){
        event.preventDefault();
    
    
        // Get form data
        const formData = new FormData(document.getElementById("campign"));
    
        // Build URL with GET parameters
        const url = window.location.protocol + "//" + window.location.host + window.location.pathname + "?" + new URLSearchParams(formData).toString();
    
        // Redirect to the URL (or use for AJAX request)
        window.location.href = url;
    
       
    }

    
    
    window.onload = function () {

        $(".form-control").on("input", function() {
            alert("Change");
        });

     
        $("#paramvalues[header][1]").on("input", function() {
            alert($(this).val()); 
        });
                
        vuec = new Vue({
            el: '#campign_managment',
            data: {
                body_1:"",
                body_2:"",
                body_3:"",
                body_4:"",
                body_5:"",
                body_6:"",
                header_1:"",
                imagePreview:null,
                videoPreview:null
            },
            methods: {
                setPreviewValue: function () {

                   
                    this.body_1=this.$refs['paramvalues[body][1]']?this.$refs['paramvalues[body][1]'].value:"";
                    this.body_2=this.$refs['paramvalues[body][2]']?this.$refs['paramvalues[body][2]'].value:"";
                    this.body_3=this.$refs['paramvalues[body][3]']?this.$refs['paramvalues[body][3]'].value:"";
                    this.body_4=this.$refs['paramvalues[body][4]']?this.$refs['paramvalues[body][4]'].value:"";
                    this.body_5=this.$refs['paramvalues[body][5]']?this.$refs['paramvalues[body][5]'].value:"";
                    this.body_6=this.$refs['paramvalues[body][6]']?this.$refs['paramvalues[body][6]'].value:"";
                    this.header_1=this.$refs['paramvalues[header][1]']?this.$refs['paramvalues[header][1]'].value:"";
                
                },
                handleImageUpload(event) {


                    
                    const selectedFile = event.target.files[0];

                    if (selectedFile) {
                       
                        const reader = new FileReader();

                        reader.onload = () => {
                            this.imagePreview = reader.result;
                        };

                        reader.readAsDataURL(selectedFile);
                    } else {
                        // Handle the case when no file is selected or an error occurs.
                        this.imagePreview = "default-image.jpg";
                    }
                },
                handleImageUpload(event) {


                    
                    const selectedFile = event.target.files[0];

                    if (selectedFile) {
                       
                        const reader = new FileReader();

                        reader.onload = () => {
                            this.imagePreview = reader.result;
                        };

                        reader.readAsDataURL(selectedFile);
                    } else {
                        // Handle the case when no file is selected or an error occurs.
                        this.imagePreview = "default-image.jpg";
                    }
                },
                handleVideoUpload(event) {
                    console.log("Ip");
                    const selectedFile = event.target.files[0];

                    if (selectedFile) {
                    
                        const reader = new FileReader();

                        reader.onload = () => {
                            this.videoPreview = reader.result;
                        };

                        reader.readAsDataURL(selectedFile);
                    } else {
                        // Handle the case when no file is selected or an error occurs.
                        this.videoPreview = "default-image.jpg";
                    }
                },

            }
         });
         vuec.setPreviewValue();

    }
    
</script>

