@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        {{-- <h2 class="content-header-title float-left mb-0">Edit Carousel</h2> --}}
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{url('carousels/index') }}">Carousels</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Edit Carousel</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="content-body">
         
            <!-- // Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                {{-- <h4 class="card-title">Multiple Column</h4> --}}
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form" action="{{ url('/carousels/update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <!-- <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="hidden" class="form-control"  name="id" value={{ $carousel->id }}>
                                                        <input type="text" id="category-title" class="form-control"  name="title" value={{ $carousel->category_title }}>
                                                        <label for="category-title">First Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <textarea id="category-description"   class="form-control" name="description">
                                                            {{ $carousel->category_description }}
                                                        </textarea>
                                                        <label for="category-description">Carousel Description</label>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="hidden" name="id" value="{{$carousel->id}}">
                                                        <input type="file" id="image" class="form-control" name="image">
                                                        <label for="city-column">Carousel Image</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <span>Selected Image:</span>
                                                    <div class="form-label-group">
                                                        <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                        alt="" style="max-height: 100px;max-width: 100px;">
                                                        <img width="100px" height="100px" src="{{ url('/storage/carousel/' . $carousel->image); }}" alt="">
                                                        <!-- <a
                                                                href="{{ url('/carousels/delete_image/' . $carousel->id) }}">
                                                                <i class="fa fa-times cross" aria-hidden="true"></i></a> -->
                                                    </div>
                                                </div>
                                                <div class="col-12" style="margin-left: 39%">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                    <button type="submit" class="btn btn-outline-warning mr-1 mb-1">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic Floating Label Form section end -->

        </div>
    </div>
</div>
<script>
    $(document).ready(function (e) {
     
     
     $('#image').change(function(){
             
     let reader = new FileReader();

     reader.onload = (e) => { 

         $('#preview-image-before-upload').attr('src', e.target.result); 
     }

     reader.readAsDataURL(this.files[0]); 
     
     });
     
     });
</script>
@endsection