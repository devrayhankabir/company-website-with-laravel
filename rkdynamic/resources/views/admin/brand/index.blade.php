@extends('admin.Layout.app')
@section('title', 'Brands')

@section('content')

    <div class="py-12">


        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">All Brands</div>

                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">SL No</th>
                                        <th scope="col">Brand Name</th>
                                        <th scope="col">Brand Image</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php($serial = 1)
                                        @foreach($brand_data as $data)
                                        <tr>
                                        <th scope="row">{{$serial++}}</th>
                                        <td>{{ $data->brand_name }}</td>
                                        <td><img height="100" width="100" src="{{asset('storage/images/brands/'.$data->brand_image)}}" alt=""></td>
                                        <td>{{ $data->created_at->diffForHumans() }}</td>
                                        <td><a class="btn btn-secondary" href="{{url('brand/edit')}}/{{ $data->id }}">Edit</a><a class="btn btn-danger ml-2" href="{{url('brand/delete')}}/{{ $data->id }}" onclick="return confirm('Are You Sure to Delete?')">Delete</a></td>
                                        </tr>
                                        @endforeach

                                    </tbody>



                                 </table>

                                 {{$brand_data->links()}}
                            </div>


                </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">Add Brand</div>
                        <div class="card-body">


                            <form action="{{route('store.brand')}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                            <div class="mb-3">
                                <label for="brand-name" class="form-label">Brand Name</label>
                                <input type="text" name="brand_name" class="form-control" id="brand-name">

                                @error('brand_name')
                                    <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="brand-image" class="form-label">Brand Name</label>

                                <input type="file" name="brand_image" class="form-control" id="brand-image">

                                @error('brand_image')
                                    <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Add Brand</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>










    </div>

@endsection

