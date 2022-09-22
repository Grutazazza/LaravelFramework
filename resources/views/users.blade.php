@extends('cabinet')

@section('info')
<table>
    <thead>
        <tr>
            <th scope="col">Email</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Size</th>
            <th scope="col">Color</th>
        </tr>
    </thead>
    <tbody>
        @foreach(\App\Models\User::all() as $user)
            <tr>
                <th scope="col">{{$user->email}}</th>
                <th scope="col">{{$user->name}}</th>
                <th scope="col">{{$user->age}}</th>
                <th scope="col">{{$user->size}}</th>
                <th style="color: {{'#'.$user->color}}" scope="col">{{$user->color}}</th>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
