@extends('cabinet')

@section('info')
    @auth()
        @php($user = \Illuminate\Support\Facades\Auth::user())
    <div class="container rounded bg-white mt-5 mb-5 " >
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{$user->name}}</span><span class="text-black-50">{{$user->email}}</span><span> </span></div>
            </div>

            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input  type="text" class="form-control" placeholder="" value="{{$user->name}}" disabled></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname" disabled></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Age</label><input type="text" class="form-control" placeholder="enter phone number" value="{{$user->age}}" disabled></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter email id" value="{{$user->email}}" disabled></div>
                        <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" placeholder="education" value="{{$user->password}}" disabled></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Size</label><input type="text" class="form-control" placeholder="experience" value="{{$user->size}}" disabled></div> <br>
                    <div class="col-md-12"><label class="labels">Color</label><input type="text" class="form-control" placeholder="additional details" value="{{$user->color}}" disabled></div>
                </div>
            </div>
        </div>
    </div>

    @endauth
@endsection
