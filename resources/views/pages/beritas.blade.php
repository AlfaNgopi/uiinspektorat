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
                        <li>
                            <div class="btn btn-current">Sekretariat</div>
                        </li>
                        <li>
                            <div class="btn btn-current">Irban 1</div>
                        </li>
                        <li>
                            <div class="btn btn-current">Irban 2</div>
                        </li>
                        <li>
                            <div class="btn btn-current">Irban 3</div>
                        </li>
                        <li>
                            <div class="btn btn-current">Irban 4</div>
                        </li>
                        <li>
                            <div class="btn btn-current">Irban 5</div>
                        </li>




                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="input-group mb-3" style="min-width: 200px;">
                        <input type="text" class="form-control" placeholder="Cari Berita"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="button" id="button-addon2">Cari</button>
                    </div>
                </div>
            </div>



        </div>


    </div>


    <div class="row">

        <div class="col-lg-8">
            <div class="card shadow-lg p-4 mb-5 bg-body-tertiary rounded">


                @foreach($beritas as $berita)
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
                <hr>
                @endforeach
                

            </div>



        </div>


        @include('partition.sidebar_beritaterbaru')


    </div>
</div>