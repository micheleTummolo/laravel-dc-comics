@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-light relative">
        <div class="row d-flex justify-content-center py-4">
            <div class="col-8">
                <div class="row">
                    <div class="col-12 text-center main_lable">
                        <div class="label">
                            <h2 class="m-0">ADD A NEW COMIC</h2>
                        </div>
                    </div> 
                    <div class="col-12 mt-5">
                        <h1>Errori</h1>
                    </div>
                    <!-- Form -->
                    <div class="col-12">
                        <form action="{{ route('comics.store') }}" method="POST" class="row g-3">
                            @csrf
            
                            <div class="col-md-6">
                                <label class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control border_radius_0" placeholder="the-joker-vol-3">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control border_radius_0" placeholder="The Joker Vol. 3">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea class="form-control border_radius_0" name="description" rows="8"></textarea>
                            </div>
                            <div class="col-12>
                                <label class="form-label">Thumb</label>
                                <input type="text" name="thumb" class="form-control border_radius_0" placeholder="https://......">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Price</label>
                                <input type="text" name="price" class="form-control border_radius_0" placeholder="29.99">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Series</label>
                                <input type="text" name="series" class="form-control border_radius_0" placeholder="Action Comics">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Sale date</label>
                                <input type="text" name="sale_date" class="form-control border_radius_0" placeholder="2023-02-21">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Type</label>
                                <input type="text" name="type" class="form-control border_radius_0" placeholder="comic book">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Artists</label>
                                <input type="text" name="artists" class="form-control border_radius_0" placeholder="Giuseppe Camuncoli, ...">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Writers</label>
                                <input type="text" name="writers" class="form-control border_radius_0" placeholder="James Tynion IV, ...">
                            </div>
                            
                            <div class="col-12 mt-5">
                                <div class="button_container">
                                    <button type="submit" class="btn btn-primary border_radius_0 my_button hover_bg_light">Add comic</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection