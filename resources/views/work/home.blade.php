@extends('work.base')

@section('content')
@parent
    <div class="container-fluid mt-4">
        @foreach ($genres as $g)
        
        <div class="row">
            <div class="col-12">
                <h4>{{$g->title}}</h4>
            <div id="slide{{$loop->index}}" class="carousel  slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item  active">
                          <div class="row">
                                @foreach($g->books as $b)
                                <div class="col-2">
                                    <a href="{{ route('book',['book'=>$b->id]) }}" class=" nav-link text-muted p-0 m-0">
                                    <div class="card">
                                    <img src="{{asset('cover.jpg')}}" alt="" class="img-fluid">
                                        <div class="card-body">
                                        <h2 class="h6">{{$b->name}}</h2>
                                            <h5>{{$b->price}}/- <del>{{$b->mrp}}</del></h5>
                                            <p class="small">{{$g->title}}</p>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                @if ($loop->iteration%6==0)
                            </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                            @endif
                                @endforeach
                            </div>    
                        </div>    
                    </div>
                    <a class="carousel-control-prev" href="#slide{{$loop->index}}" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#slide{{$loop->index}}" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                  </div>
            
                    <a href="{{ route('genres.index',['id'=>$g->id]) }}" class="btn btn-primary bg-gradient float-end mt-2">>> View all</a>
                </div>
        </div>
        @endforeach
    </div>
@endsection