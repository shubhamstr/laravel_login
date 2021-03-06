@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <h1>Login</h1>
                @if (Session::has('error'))
                    <p class="text-danger">{{ Session::get('error') }}</p>
                @endif
                @if (Session::has('success'))
                    <p class="text-success">{{ Session::get('success') }}</p>
                @endif
                <form action="{{ route('login') }}" method="POST">
                    @csrf <!-- {{ csrf_field() }} -->
                    @method('post')
                    <div class="mb-3 mt-3">
                      <label for="email" class="form-label">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}">
                      @if ($errors->has('email'))
                          <p class="text-danger">{{ $errors->first('email') }}</p>
                      @endif
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password:</label>
                      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="{{old('password')}}">
                      @if ($errors->has('password'))
                          <p class="text-danger">{{ $errors->first('password') }}</p>
                      @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>
            </div>
        </div>
    </div>
    
@endsection