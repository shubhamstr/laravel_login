@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    @method('post')
                    <div class="mb-3 mt-3">
                      <label for="name" class="form-label">Name:</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="email" class="form-label">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password:</label>
                      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                    </div>
                    <div class="mb-3">
                      <label for="cpassword" class="form-label">Password:</label>
                      <input type="password" class="form-control" id="cpassword" placeholder="Enter password" name="cpassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    
@endsection