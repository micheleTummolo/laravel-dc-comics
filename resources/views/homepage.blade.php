@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center bg-light">
        <div class="col-10 mt-5 mb-3">
            <h2 class="title">NEWS FROM AROUND THE MULTIVERSE</h2>
        </div>
        <div class="col-10 d-flex justify-content-between">

            <div class="card border-0 bg-light" style="width: 18rem;">
                <img src="{{ Vite::asset('resources/img/news_01.jpg')}}" alt="news_01.jpg">
                <div class="card-body px-0 text-center">
                    <h5 class="text-secondary">WEEKEND ESCAPE</h5>
                    <h2 class="card-title">The American Way Challenges Our Conceptions of Truth and Justice</h2>
                </div>
            </div>

            <div class="card border-0 bg-light" style="width: 18rem;">
            <img src="{{ Vite::asset('resources/img/news_02.jpg')}}" alt="news_02.jpg">
                <div class="card-body px-0 text-center">
                    <h5 class="text-secondary">EXCLUSIVE INTERVIEW</h5>
                    <h2 class="card-title">The Man of Steel and Lex Team Up (?!?) in Superman #1</h2>
                </div>
            </div>
            
            <div class="card border-0 bg-light" style="width: 18rem;">
            <img src="{{ Vite::asset('resources/img/news_03.jpg')}}" alt="news_03.jpg">
                <div class="card-body px-0 text-center">
                    <h5 class="text-secondary">DC HOUSE OF LIST-ERY</h5>
                    <h2 class="card-title">Power on Page: Six DC Comics by Black Creators</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col p-0">
            <div class="welcome_container d-flex align-items-center justify-content-between">
                <div class="text-center welcome_text">
                    <h1>Welcome to the DC universe!</h1>
                </div>
                <div class="welcome_img">
                    <img src="{{ Vite::asset('resources/img/welcome_home.png')}}" alt="welcome_home.png">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection