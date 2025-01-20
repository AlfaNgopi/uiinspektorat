@extends('main')

@include('partition.header')

<!-- Main Content-->
<div class="container mt-5">


    <div class="row">

        <div class="col-lg-8">
            <div class="card shadow-lg p-4 mb-5 bg-body-tertiary rounded">


                <div class="custom-gallery-grid justify-content-around">
                    <a style="text-decoration: none;" href="/gallerys/no-gratifikasi">
                        <div class="card mb-3 gallery-item" style="width: 15rem;">

                            <img src="{{asset('assets/gratifikasi2.png')}}" class="card-img-top img-fluid w-100"
                                alt="...">
                            <div class="card-body">
                                <p class="mb-1" style="font-size: small; color: grey; ">Ada 2 foto</p>
                                <h5 class="card-title hover-primary">Gratifikasi</h5>
                            </div>


                        </div>
                    </a>

                </div>



            </div>
        </div>



        @include('partition.sidebar_beritaterbaru')


    </div>
</div>