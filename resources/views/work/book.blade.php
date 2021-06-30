@extends('work.base')

@section('contant')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
              <img src="{{ assect('cover.jpg') }}" alt="" class="w-100"> 
            </div>
            <div class="col-lg-9">
                <h1>{{ $book->name }}</h1>
                <h6> {{ $book->genres->title }}</h6>
                <p class="small"> {{ $book->description }}</p>
                <p class="small"> {{ $book->author->fullname }}</p>
                <h1> {{ $book->price }}</h1>
                <del> {{ $book->mrp }}/-</del>
            </div>
        </div>
    </div>
@endsection