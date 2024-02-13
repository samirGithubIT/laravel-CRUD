@extends('layout.navbar')

@section('content')

{{-- {{ dd($user_details) }} --}}

<div class="container">
    <div class="row py-5">
        <div class="card">
            <div class="card-header">
                <h3>Details of - <span class="text-info">{{ $user_details->name }}</span></h3>
            </div>
            <div class="card-body">

                <table class="table table-hover table-secondary">
                    <tr>
                        <th>Serial No.</th>
                        <td>{{ $user_details->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $user_details->name }}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>{{ $user_details->age }}</td>
                    </tr>
                    <tr>
                        <th>Phone_number</th>
                        <td>{{ $user_details->phone_number }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user_details->email }}</td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>{{ $user_details->password }}</td>
                    </tr>
                    <tr>
                        <th>Created_at</th>
                        <td>{{ date('d-F-Y h:i a', strtotime($user_details->created_at)) }}</td>
                    </tr>
                    <tr>
                        <th>Updated_at</th>
                        <td>{{ $user_details->updated_at }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection