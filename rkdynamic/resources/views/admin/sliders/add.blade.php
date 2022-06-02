@extends('admin.Layout.app')

@section('title', 'Add Slider')

@section('content')

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Add Slider</h2>
            </div>
            <div class="card-body">
                <form action="{{route('store.sliders')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="slider-title">Slider Title</label>
                        <input type="text" class="form-control" id="slider-title" name="slider_title">
                        @error('slider_title')
                        <span class="text text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="slider-desc">Slider Description</label>
                        <textarea class="form-control" id="slider-desc" rows="3" name="slider_desc"></textarea>
                        @error('slider_desc')
                        <span class="text text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="slider-image">Slider Image</label>
                        <input type="file" class="form-control" id="slider-image" name="slider_image">
                        @error('slider_image')
                        <span class="text text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="slider-btn">Button Link</label>
                        <input type="text" class="form-control" id="slider-btn" name="slider_btn">
                        @error('slider_btn')
                        <span class="text text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary btn-default">Add</button>
                    </div>



                </form>
            </div>
        </div>

</div>


@endsection
