@extends('master')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="card mt-5">
        <img class="userimg mx-auto mt-5 mb-2" src="{{ URL::to('/') }}/images/user.png" alt="John">
        <h1 style="text-transform: uppercase;">{{ Session::get('user')['name'] }}</h1>

        <p>{{ Session::get('user')['email'] }}</p>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <p><button><a href="mailto:{{ Session::get('user')['email'] }}" style="color: #fff">Contact</a></button></p>
    </div>
@endsection
