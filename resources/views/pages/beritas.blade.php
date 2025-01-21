@extends('main')

@include('partition.header')


<!-- Main Content-->
<div class="container mt-5">



    <div class="card shadow p-3 mb-5  bg-body-tertiary rounded">

        <div class="card-body">
            <h2 class="card-title">
                Daftar Berita
            </h2>

            <div class="row">
                <div class="col-lg-8">
                    <div>
                        Kategori :
                    </div>
                    <div class="custom-horizontal-list" style="max-width: 80%;">
                        @foreach($kategoris as $kategori)
                        <li>
                            @if($currentKategori == $kategori['name'])
                            <div class="btn btn-current">{{$kategori['name']}}</div>
                            @else
                            <a href="/berita/kategori/{{$kategori['name']}}" class="btn btn-outline-primary">{{$kategori['name']}}</a>
                            @endif
                        </li>
                        @endforeach





                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="{{ route('berita.cari')}}" method="GET" class="input-group mb-3" style="min-width: 200px;">
                        <input type="text" name="keyword" class="form-control" placeholder="Cari Berita"
                            aria-label="Search" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                    </form>
                </div>
            </div>



        </div>


    </div>


    <div class="row">

        <div class="col-lg-8">
            <div class="card shadow-lg p-4 mb-5 bg-body-tertiary rounded">


                @foreach($beritas as $berita)
                <a style="all: unset; cursor:pointer" href="/berita/{{$berita['link']}}">

                    <div class="row news-card custom-init-animation">
                        <div class="col-md-4 news-card-img p-0">
                            <img src="{{asset($berita['img'])}}" class="img-fluid asprat-4-3 rounded-start " alt="...">
                        </div>
                        <div class="col-8">
                            <div class="" style="border-width: 0;">
                                <h5 class="card-title text-truncate-2">{{$berita['title']}}</h5>
                                <div class="custom-horizontal-list sub-info">
                                    <li style="padding: 0; margin: 0;">
                                        <p class="d-flex " style="margin: 0"><i class="bi bi-person mx-2"></i> {{$berita['author']}}</p>
                                        </p>
                                    </li>

                                    <li style="padding: 0; margin: 0;">
                                        <p class="d-flex" style="margin: 0"><i class="bi bi-clock mx-2"></i> {{$berita['date']}} </p>
                                    </li>
                                    <li style="padding: 0; margin: 0;">
                                        <div class="news-tags">{{$berita['kategori']}}</div>
                                    </li>



                                </div>
                                <p class="card-text text-truncate-4">{{$berita['text']}}</p>

                            </div>
                        </div>
                    </div>
                </a>

                <hr>
                @endforeach


                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        @if ($pagination['current_page'] > 1)
                        <li class="page-item">
                            <a class="page-link" href="{{ url()->current() }}?page={{ $pagination['current_page'] - 1 }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        @endif

                        @for ($i = 1; $i <= $pagination['last_page']; $i++)
                            <li class="page-item {{ $i == $pagination['current_page'] ? 'active' : '' }}">
                            <a class="page-link" href="{{ url()->current() }}?page={{ $i }}">{{ $i }}</a>
                            </li>
                            @endfor

                            @if ($pagination['current_page'] < $pagination['last_page'])
                                <li class="page-item">
                                <a class="page-link" href="{{ url()->current() }}?page={{ $pagination['current_page'] + 1 }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                                </li>
                                @endif
                    </ul>
                </nav>



            </div>



        </div>


        @include('partition.sidebar_beritaterbaru')


    </div>
</div>