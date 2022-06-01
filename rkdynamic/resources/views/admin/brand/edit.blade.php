@extends('admin.Layout.app')
@section('title', 'Edit Brand')

@section('content')

    <div class="py-12">


        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">Add Brand</div>
                        <div class="card-body">


                            <form action="{{url('brand/update'.'/'.$edit_data->id)}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                            <div class="mb-3">
                                <label for="brand-name" class="form-label">Brand Name</label>
                                <input value="{{$edit_data->brand_name}}" type="text" name="brand_name" class="form-control" id="brand-name">
                                <input type="hidden" value="{{$edit_data->brand_image}}" name="old_image" class="form-control">

                                @error('brand_name')
                                    <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="brand-image" class="form-label">Brand Image</label>

                                <input type="file" name="brand_image" class="form-control" id="brand-image">

                                @error('brand_image')
                                    <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="show-image" class="form-label d-block">Current Image</label>

                                <img height="100" width="200" src="{{asset('storage/images/brands/'.$edit_data->brand_image)}}" alt="">

                            </div>

                            <button type="submit" class="btn btn-primary">Update Brand</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>










    </div>
@endsection
