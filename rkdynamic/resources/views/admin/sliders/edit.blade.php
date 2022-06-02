@extends('admin.Layout.app')

@section('title', 'Edit Slider')

@section('content')

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Edit Slider</h2>
            </div>
            <div class="card-body">
                <form action="{{url('sliders/update/'.$slider_id->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="slider-title">Slider Title</label>
                        <input value="{{$slider_id->slider_title}}" type="text" class="form-control" id="slider-title" name="slider_title">
                    </div>

                    <div class="form-group">
                        <label for="slider-desc">Slider Description</label>
                        <textarea class="form-control" id="slider-desc" rows="3" name="slider_desc"> {{$slider_id->slider_desc}} </textarea>
                    </div>

                    <div class="form-group">
                        <label for="slider-image">Slider Image</label>
                        <input type="file" class="form-control" id="slider-image" name="slider_image">
                        @error('slider_image')
                        <span class="text text-danger">{{$message}}</span>
                        @enderror

                        <input type="hidden" value="{{$slider_id->slider_bg}}" name="old_img">
                    </div>

                    <div class="slider-image mb-4">
                        <img height="300" width="300" src="{{asset('storage/images/sliders/'.$slider_id->slider_bg)}}" alt="">
                    </div>

                    <div class="form-group">
                        <label for="slider-btn">Button Link</label>
                        <input value="{{$slider_id->slider_btn_link}}" type="text" class="form-control" id="slider-btn" name="slider_btn">
                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary btn-default">Add</button>
                    </div>



                </form>
            </div>
        </div>

    </div>


@endsection
