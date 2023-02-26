@extends('layouts.app')

@section('content')
<main>
    <div class="detail_comic container-fluid">
        <div class="row thumb_row">
            <div class="col thumb_container">
                <div class="thumb">
                    <img src="{{ $comic['thumb']}}" alt="{{ $comic['thumb']}}">
                </div>
            </div>
        </div>
        <div class="main_container">
            <div class="row primary_section">
                <div class="col py-5">
                    <div class="row center">
                        <div class="col-8">
                            <div class="row">
                                <div class="col p-0">
                                    <h1 class="comic_title">{{ $comic['title']}}</h1>
                                </div>
                            </div>
                            <div class="row price_row mt-2">
                                <div class="col-8 py-3 px-4 price_border_bottom price_border_right d-flex justify-content-between align-items-center">
                                    <h5 class="m-0">US. Price: <span class="price">{{ $comic['price']}}</span></h5>
                                    <h5 class="m-0">AVAILABLE</h5>
                                </div>
                                <div class="col-4 py-3 price_border_bottom text-center">
                                    <h5 class="m-0 price">Check Availability <i class="fa-solid fa-sort-down"></i></h5>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col p-0">
                                    <p class="comic_description">{{ $comic['description']}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <h5 class="comic_description">ADVERTISMENT</h5>
                            <img src="{{ Vite::asset('resources/img/adv.jpg')}}" alt="{{ Vite::asset('resources/img/adv.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row secondary_section">
                <div class="col py-5">
                    <div class="row gx-5 center">
                        <div class="col ps-0">
                            <div class="row pb-3 border_bottom">
                                <div class="col-12">
                                    <h3>Talent</h3>
                                </div>
                            </div>
                            <div class="row mt-3 border_bottom">
                                <div class="col-4">
                                    <h5>Art by:</h5>
                                </div>
                                <div class="col-8">
                                    <p>{{$comic['artists']}}</p>
                                </div>
                            </div>
                            <div class="row mt-3 border_bottom">
                                <div class="col-4">
                                    <h5>Written by:</h5>
                                </div>
                                <div class="col-8">
                                    <p>{{$comic['writers']}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="row pb-3 border_bottom">
                                <div class="col-12">
                                    <h3>Specs</h3>
                                </div>
                            </div>
                            <div class="row pb-2 mt-3 border_bottom">
                                <div class="col-4">
                                    <h5>Series:</h5>
                                </div>
                                <div class="col-8">
                                    <h5 class="action">{{$comic['series']}}</h5>
                                </div>
                            </div>
                            <div class="row pb-2 mt-3 border_bottom">
                                <div class="col-4">
                                    <h5>U.S. Price:</h5>
                                </div>
                                <div class="col-8">
                                    <h5 class="comic_description">{{$comic['price']}}</h5>
                                </div>
                            </div>
                            <div class="row pb-2 mt-3 border_bottom">
                                <div class="col-4">
                                    <h5>On Sale Date:</h5>
                                </div>
                                <div class="col-8">
                                    <h5 class="comic_description">{{$comic['sale_date']}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center delete_section border-0 py-4">
                <div class="col-10">
                    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger border_radius_0">DELETE COMIC</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection