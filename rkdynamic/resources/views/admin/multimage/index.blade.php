<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           All Brand
        </h2>
    </x-slot>

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
                        <div class="card-header">All Images</div>

                            <div class="card-body">

                                <div class="row">
                                @foreach($all_images as $image)
                                <div class="col-lg-4">
                                    <img height="300" width="300" src="{{asset('storage/uploads/'.$image->image)}}" alt="">
                                    </div>   
                                @endforeach
                                </div>



                            </div>

                    
                </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">Add Images</div>
                        <div class="card-body">


                            <form action="{{route('store.images')}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                            <div class="mb-3">
                                <label for="images" class="form-label">Upload Images</label>
                                
                                <input type="file" name="images" class="form-control" id="images" multiple>
                                
                                @error('images')
                                    <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Add Images</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>



        






    </div>
</x-app-layout>
