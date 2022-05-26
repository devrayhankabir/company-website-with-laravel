<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           All Category
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
                        <div class="card-header">All Category</div>

                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">SL No</th>
                                        <th scope="col">Created By</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php($serial = 1)
                                        @foreach($category_data as $cat_data)
                                        <tr>
                                        <th scope="row">{{$serial++}}</th>
                                        <td>{{ $cat_data->userName->name }}</td>
                                        <td>{{ $cat_data->category_name }}</td>
                                        <td>{{ $cat_data->created_at->diffForHumans() }}</td>
                                        <td><a class="btn btn-secondary" href="{{url('category/edit')}}/{{ $cat_data->id }}">Edit</a><a class="btn btn-danger ml-2" href="{{url('category/softdelete')}}/{{ $cat_data->id }}">Delete</a></td>
                                        </tr>
                                        @endforeach

                                    </tbody>

                                   

                                 </table>

                                 {{$category_data->links()}}
                            </div>

                    
                </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">Add Category</div>
                        <div class="card-body">


                            <form action="{{route('store.category')}}" method="POST">
                                @csrf
                            <div class="mb-3">
                                <label for="category-name" class="form-label">Category Name</label>
                                <input type="text" name="category_name" class="form-control" id="category-name">
                                
                                @error('category_name')
                                    <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>



       

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">Trashed Category</div>

                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">SL No</th>
                                        <th scope="col">Created By</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php($serial = 1)
                                        @foreach($trashed_category as $trash_cat)
                                        <tr>
                                        <th scope="row">{{$serial++}}</th>
                                        <td>{{ $trash_cat->userName->name }}</td>
                                        <td>{{ $trash_cat->category_name }}</td>
                                        <td>{{ $trash_cat->created_at->diffForHumans() }}</td>
                                        <td><a class="btn btn-success" href="{{url('category/restore')}}/{{ $trash_cat->id }}">Restore</a><a class="btn btn-danger ml-2" href="{{url('category/delete')}}/{{ $trash_cat->id }}">Permanet Delete</a></td>
                                        </tr>
                                        @endforeach

                                    </tbody>

                                   

                                 </table>

                                 {{$trashed_category->links()}}
                            </div>

                    
                </div>
                </div>

            </div>
        </div>


        






    </div>
</x-app-layout>
