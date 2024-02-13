@extends('layout.navbar')

@section('content')

<div class="container">
    <div class="row py-5">
        <div class="card col-8 m-auto">
            <div class="card-header">
                <h3>Edit - <span class="text-secondary fw-bold">{{ $user_details->name }}</span></h3>
            </div>
            <div class="card-body">
                <table class="table table-hover table-secondary">
                    <form action="{{ url("users/update/$user_details->id") }}" method="post">
                        @csrf
                        <div class="mb-3 ">
                            <label for="name" class="form-label"> Enter your name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user_details->name ?? old('name') }}">

                            @error('name')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        <div class="mb-3 ">
                            <label for="age" class="form-label"> Enter your age</label>
                            <input type="text" class="form-control" id="age" name="age" value="{{ $user_details->age ?? old('age') }}">

                            @error('age')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        <div class="mb-3 ">
                            <label for="phone_number" class="form-label"> Enter your phone number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $user_details->phone_number ?? old('phone_number') }}">

                            @error('phone_number')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        <div class="mb-3 ">
                            <label for="email" class="form-label"> Enter your E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user_details->email ?? old('email') }}">

                            @error('email')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        <div class="mb-3 ">
                            <label for="password" class="form-label"> Enter your Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            
                            @error('password')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        <div class="mb-3 ">
                            <label class="form-label"> Confirm Password</label>
                            <input type="password" class="form-control" id="password" name="password_confirmation">
                          </div>

                          <button class="btn btn-primary" name="submit">Update</button>
                          <a href="{{ url('/users') }}" class="btn btn-outline-success ms-3">Back To Lists</a>
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection