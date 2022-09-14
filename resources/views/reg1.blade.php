@extends('register')

@section('regist')
    <form method="post" action="{{ route('register') }}">
        @if(session()->has('success'))
        <h3>успех</h3>
        @endif
        @csrf
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" name="login" class="form-control" id="login" aria-describedby="emailHelp" placeholder="Enter login">
        </div>
        @error('login')<p>{{$message}}</p>@enderror
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        @error('password')<p>{{$message}}</p>@enderror
        <div class="form-group">
            <label for="password1">Password repeat</label>
            <input type="password" name="password_confirmation" class="form-control" id="password1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="fullname">Fullname</label>
            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Fullname">
        </div>
        @error('fullname')<p>{{$message}}</p>@enderror
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" id="age" placeholder="Age">
        </div>
        @error('age')<p>{{$message}}</p>@enderror
        <div class="form-group">
            <label for="address">address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="address">
        </div>
        @error('address')<p>{{$message}}</p>@enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
