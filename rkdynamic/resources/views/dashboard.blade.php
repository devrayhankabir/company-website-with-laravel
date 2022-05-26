<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi...{{ Auth::User()->name }}
        </h2>
        <h5>Total Users <span class="badge bg-secondary">{{count($users_data)}}</span></h5>
        </div>
    </x-slot>

    <div class="py-12">


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">SL No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        </tr>
                    </thead>

                    <tbody>

                        @php

                        $serial = 1;

                        @endphp
                        
                        @foreach($users_data as $user_data)

                        <tr>
                        <th scope="row">{{$serial}}</th>
                        <td>{{ $user_data->name }}</td>
                        <td>{{ $user_data->email }}</td>
                        <td>{{ $user_data->created_at->diffForHumans() }} </td>
                        </tr>
                        
                        @php

                        $serial++;

                        @endphp
                        @endforeach



                    </tbody>

                    </table>

                    
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
