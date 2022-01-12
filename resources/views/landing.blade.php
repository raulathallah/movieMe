@extends('layouts.app')

@section('content')

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
            <li class="breadcrumb-item"></li>
        </ol>
    </nav>

    <div class="py-3 my-3">
        <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" width="100%" height="550px" class="my-3">
        <div class="d-flex flex-column justify-content-center align-items-start py-2 my-2">
            <p class="fs-1 text-dark fw-bold my-2">movieMe</p>
            <p class="text-muted my-2">Your best movie website.</p>
            <a href="{{url('/movies')}}" class="btn btn-primary my-2">View Movies</a>
        </div>
    </div>
</div>






@endsection