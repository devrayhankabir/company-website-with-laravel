@extends('admin.Layout.app')
@section('title', 'Sliders')

@section('content')


    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <h2>All Sliders</h2>
                <a href="{{route('add.slider')}}" type="button" class="mb-1 btn btn-success">
                    Add <i class=" mdi mdi-plus mr-1"></i>
                </a>
            </div>
            <div class="card-body">

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Title</th>
                        <th scope="col">Desciption</th>
                        <th scope="col">Image</th>
                        <th scope="col">Button Link</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @php
                        $serial = 1;
                    @endphp

                    @foreach($sliders_data as $slider_data)

                    <tr>
                        <td scope="row">{{$serial++}}</td>
                        <td>{{$slider_data->slider_title}}</td>
                        <td>{{$slider_data->slider_desc}}</td>
                        <td><img height="100" width="100" src="{{asset('storage/images/sliders/'.$slider_data->slider_bg)}}" alt=""></td>
                        <td>{{$slider_data->slider_btn_link}}</td>
                        <td>

                            <div class="dropdown d-inline-block mb-1">
                                <button class="btn btn-primary dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    Edit / Delete
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>

                        </td>

                    </tr>

                    @endforeach





                    </tbody>
                </table>
            </div>
        </div>

    </div>


@endsection


