@extends('index')

@section('content')
    <div class="card-deck" style="flex-wrap: wrap;">
        @for($i = 0; $i < 6; $i++)
            <div class="card text-center mt-8" style="width: 300px; flex: 1 0 30%;">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="news" class="btn btn-outline-success">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
        @endfor
    </div>
@endsection

