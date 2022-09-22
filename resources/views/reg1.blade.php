@extends('register')

@section('regist')
    <form method="post" action="{{ route('register') }}">
        @if(session()->has('success'))
        <h3>успех</h3>
        @endif
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
        </div>
        @error('email')<p>{{$message}}</p>@enderror
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
            <input type="text" name="name" class="form-control" id="fullname" placeholder="Fullname">
        </div>
        @error('name')<p>{{$message}}</p>@enderror
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" id="age" placeholder="Age">
        </div>
        @error('age')<p>{{$message}}</p>@enderror
        <div class="form-group">
            <label for="size">size</label>
            <input type="number" name="size" class="form-control" id="size" placeholder="size">
        </div>
        @error('size')<p>{{$message}}</p>@enderror
            <div class="form-group">
                <label for="color">color</label>
                <input type="text" name="color" class="form-control" id="color" placeholder="color">
            </div>
            @error('color')<p>{{$message}}</p>@enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
