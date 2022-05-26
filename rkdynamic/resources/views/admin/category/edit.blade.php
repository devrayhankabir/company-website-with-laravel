<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Update Category
        </h2>
    </x-slot>

    <div class="py-12">


        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">Update Category</div>
                        <div class="card-body">


                            <form action="{{url('category/update')}}/{{$cat_data->id}}" method="POST">
                                @csrf
                            <div class="mb-3">
                                <label for="category-name" class="form-label">Category Name</label>
                                <input type="text" value="{{$cat_data->category_name}}" name="category_name" class="form-control" id="category-name">
                                
                                @error('category_name')
                                    <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update Category</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
