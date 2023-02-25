@extends('layouts.app')

@section('content')
<main>
    <div class="comics_content">
        <div class="main_container">
            <div class="current_series_label">
                <h2 class="m-0">CURRENT SERIES</h2>
            </div>
            <div class="card_container mt-3">
                @foreach($comics as $comic)
                <a href="{{ route('comics.show', ['comic' => $comic['id']])}}">
                    <div class="my_card">
                        <div class="thumb">
                            <img src="{{ $comic['thumb']}}" alt="">
                        </div>
                        <h4>{{ $comic['title']}}</h4>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="button_container">
                <a href="{{ route('comics.create')}}">
                    <button class="my_button">ADD COMIC</button>
                </a>
            </div>
        </div>
    </div>
</main>
@endsection