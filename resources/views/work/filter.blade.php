@extends('work.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <h6>Filter</h6>
                <div class="list-group">
                    @foreach ($genres as $genre)
                        <a href="{{ route('genres.index',['id'=>$genre->id]) }}" class="list-group-item list-group-item-action">{{ $genre->title }} <span class="float-end text-muted">({{ $genre->books->count() }})</span></a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    @foreach($book->books as $b)
                    <div class="col-3">
                        <div class="card">
                        <img src="{{asset('cover.jpg')}}" alt="" class="img-fluid">
                            <div class="card-body">
                            <h2 class="h6">{{$b->name}}</h2>
                                <h5>{{$b->price}}/- <del>{{$b->mrp}}</del></h5>
                                <p class="small">{{$b->title}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                </div>
            
            </div>
        </div>
    </div>
    
@endsection