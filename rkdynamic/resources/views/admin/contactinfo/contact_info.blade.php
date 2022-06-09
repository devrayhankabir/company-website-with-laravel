@extends('admin.Layout.app')

@section('title', 'Contact Us')

@section('content')

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Contact Info</h2>
            </div>
            <div class="card-body">


                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input value="" type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="sub-title">Sub Title</label>
                        <input value="" type="text" class="form-control" id="sub-title" name="sub_title">
                    </div>

                    <div class="form-group">
                        <label for="long-desc">Long Description</label>
                        <textarea class="form-control" id="long-desc" rows="3" name="long_desc"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="list-desc">List Description</label>
                        <textarea class="form-control" id="list-desc" rows="3" name="list_desc"></textarea>
                        <span>Keep Your Lines Seperated by Pipe Lines( | )</span>
                    </div>

                    <div class="form-group">
                        <label for="short-desc">Short Description</label>
                        <textarea class="form-control" id="short-desc" rows="3" name="short_desc"></textarea>
                    </div>




                    <div class="form-group">

                        <button type="submit" class="btn btn-primary btn-default">Save Changes</button>
                    </div>



                </form>
            </div>
        </div>

    </div>


@endsection
