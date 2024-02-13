@extends('layout.navbar')

@section('content')

<div class="container">
    <div class="card">
        <table class="table table-stripped table-hover">
            <div class="card-header d-flex justify-content-end">
                <a href="{{ url('/users/create') }}" class="btn btn-outline-info">Add New</a>
            </div>
            <div class="card-body">

                @if(session()->get('success'))

                <p class="alert alert-info">{{ session()->get('success') }}</p>
                    
                @endif
                
                <thead>
                    <tr>
                        <th>Serial No.</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Phone_number</th>
                        <th>Email</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $users as $db_table )
                    {{-- {{ dd($db_table['email']) }} --}}
        
                    {{-- laravel er method .. --}}
                    {{-- {{ dd($db_table->age) }} --}}
                    <tr>
                        <td>{{ $db_table->id }} </td>
                        <td>{{ $db_table->name }} </td>
                        <td>{{ $db_table->age }} </td>
                        <td>{{ $db_table->phone_number }} </td>
                        <td>{{ $db_table->email }} </td>
                        <td>{{ $db_table->created_at }} </td>
                        <td>{{ $db_table->updated_at }} </td>
                        <td>
                            <a href="{{ url("/user_details/$db_table->id/show") }}" class="btn btn-outline-secondary">Show</a>
                            <a href="{{ url("/user_details/$db_table->id/edit") }}" class="btn btn-outline-primary">Edit</a>

                            <a href="#" class="btn btn-outline-danger"
                            onclick="
                                document.getElementById('form_delete-{{ $db_table->id }}').submit();
                            "
                            > Delete </a>

                            <form class="d-none" id="form_delete-{{ $db_table->id }}" action="{{ url("/users/$db_table->id/delete") }}" method="post">
                            @csrf
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </div>
        </table>
    </div>
</div> 

{{-- {{ dd($users) }} --}}

@endsection