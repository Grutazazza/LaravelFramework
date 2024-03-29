@extends('register')

@section('regist')
    <form method="Post" action="{{route('login')}}">
        @if(session()->has('errorSuccess'))
            <h3>{{session()->get('errorSuccess')}}</h3>
            @endif
        @csrf<div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        @error('email')<p>{{$message}}</p>@enderror
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        @error('password')<p>{{$message}}</p>@enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
