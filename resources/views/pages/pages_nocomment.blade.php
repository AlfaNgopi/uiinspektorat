@extends('main')

@include('partition.header')

<!-- Main Content-->
<div class="container mt-5">



    <div class="card shadow p-3 mb-5  bg-body-tertiary rounded">

        <div class="card-body">
            <h2 class="card-title">
                {{$document['title']}}
            </h2>
            <p class="subjudul"> {{$document['subtitle']}} </p>
            <div class="row">
                <div class="col-6">
                    <div class="custom-horizontal-list">
                        <li>
                            <p class="d-flex align-items-center"><i class="bi bi-person mx-2"></i> {{$document['author']}}</p>
                        </li>

                        <li>
                            <p class="d-flex align-items-center"><i class="bi bi-clock mx-2"></i> {{$document['date']}}</p>
                        </li>




                    </div>
                </div>
                <div class="col-6">
                    <div class="custom-horizontal-list justify-content-end">
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://inspektorat.semarangkota.go.id/berita/235"
                                target="_blank">
                                <i class="fa-brands fa-facebook-f" style="color: #3b5998"></i>
                            </a>
                        </li>

                        <li>
                            <a href="http://twitter.com/share?text=Rapat Penilaian Kinerja Organisasi Triwulan 3&amp;url=https://inspektorat.semarangkota.go.id/berita/235"
                                target="_blank">
                                <i class="fa-brands fa-twitter" style="color: #00acee"></i>
                            </a>
                        </li>

                        <li>
                            <a href="whatsapp://send?text=https://inspektorat.semarangkota.go.id/berita/235"
                                target="_blank">
                                <i class="fa-brands fa-whatsapp" style="color: #075e54"></i>
                            </a>
                        </li>


                    </div>
                </div>
            </div>



        </div>


    </div>


    <div class="row">

        <div class="col-lg-8">
            <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">

                @if($document['img'] != null)
                <img src="{{ asset($document['img'])}}" class="card-img-top" alt="...">


                <div class="ket-gambar text-center">
                    <b>Keterangan Gambar :</b> {{$document['img_caption']}}
                </div>
                @endif
                <div class="card-body">
                    <p class="card-text">
                        {!! $formatted  !!}
                    </p>
                </div>
            </div>
        </div>

        @include('partition.sidebar_beritaterbaru')

    </div>
</div>
