@extends('main')

@include('partition.header')

<!-- Main Content-->
<div class="container mt-5">



    <div class="card shadow p-3 mb-5  bg-body-tertiary rounded">

        <div class="card-body">
            <h2 class="card-title">
                {{$berita['title']}}
            </h2>
            <p class="subjudul"> {{$berita['subtitle']}} </p>
            <div class="row">
                <div class="col-6">
                    <div class="custom-horizontal-list">
                        <li>
                            <p class="d-flex align-items-center"><i class="bi bi-person mx-2"></i> {{$berita['author']}}</p>
                        </li>

                        <li>
                            <p class="d-flex align-items-center"><i class="bi bi-clock mx-2"></i> {{$berita['date']}}</p>
                        </li>

                        <li>
                            <p class="d-flex align-items-center"><i class="bi bi-chat-dots mx-2"></i> 0 comments</p>
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


                <img src="{{ asset($berita['img'])}}" class="card-img-top" alt="...">
                <div class="ket-gambar text-center">
                    <b>Keterangan Gambar :</b> {{$berita['img_caption']}}
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{ $berita['text'] }}
                    </p>
                </div>
            </div>

            <section class="p-0">

                <div class="container">

                    <h4 class="comments-count">8 Comments</h4>

                    <div id="comment-1" class="comment">
                        <div class="d-flex">

                            <div>

                                <h5><i class="bi bi-person"></i>Georgia Reade</h5>
                                <span class="sub">13 Januari, 2025</span>
                                <p>
                                    Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut
                                    sapiente quis molestiae est qui cum soluta.
                                    Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                                </p>
                            </div>
                        </div>
                    </div><!-- End comment #1 -->

                    <div id="comment-1" class="comment">
                        <div class="d-flex">

                            <div>

                                <h5><i class="bi bi-person"></i>George Sam</h5>
                                <span class="sub">13 Januari, 2025</span>
                                <p>
                                    Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut
                                    sapiente quis molestiae est qui cum soluta.
                                    Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                                </p>
                            </div>
                        </div>
                    </div>





                </div>

            </section>


            <section class="comment-form section">
                <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">

                    <form action="">

                        <h4>Post Comment</h4>
                        <p>Your email address will not be published. Required fields are marked * </p>
                        <div class="row mb-4">
                            <div class="col-sm-6  form-group">
                                <input name="name" type="text" class="form-control" placeholder="Your Name*">
                            </div>
                            <div class="col-sm-6 form-group">
                                <input name="email" type="text" class="form-control" placeholder="Your Email*">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col form-group">
                                <input name="website" type="text" class="form-control" placeholder="Your Website">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col form-group">
                                <textarea name="comment" class="form-control" rows="5"
                                    placeholder="Your Comment*"></textarea>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Post Comment</button>
                        </div>

                    </form>

                </div>
            </section>


        </div>



        @include('partition.sidebar_beritaterbaru')

        
    </div>
</div>