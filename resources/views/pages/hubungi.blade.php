@extends('main')

@include('partition.header')

<!-- Main Content-->
<div class="container mt-5">

    <div class="card shadow p-3 mb-5  bg-body-tertiary rounded">

        <div class="card-body">
            <h2 class="card-title">
                Hubungi Kami
            </h2>

            <div class="row">
                <div class="col-6">
                    <div class="custom-horizontal-list">
                        <li>
                            <p class="d-flex align-items-center"><i class="bi bi-person mx-2"></i> irban1</p>
                        </li>

                        <li>
                            <p class="d-flex align-items-center"><i class="bi bi-clock mx-2"></i> 30 Des 2024,
                                05:55:33 WIB</p>
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


                <div class="map-border">
                    <div class="google-maps">
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.7027858075503!2d110.00376251539971!3d-7.715005478574118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aebc92135c807%3A0xe158abc40cd4e22a!2sInspektorat%20Kabupaten%20Purworejo!5e0!3m2!1sid!2sid!4v1610599083831!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" "=""></iframe>
                </div>
            </div>

            <div class=" card-text">
                            <p>Alamat : Jl. Mayjend. Sutoyo No. 59, Purworejo, 54113</p>
                            <p>No. Telp : (0275) 321603</p>
                            <p>E-mail : inspektorat@purworejokab.go.id</p>
                    </div>

                    <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded border border-4 border-primary">

                        <form action="">

                            <h4>Form Pesan</h4>

                            <div class="row mb-4">
                                <div class="col-sm-6  form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name*">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input name="email" type="text" class="form-control" placeholder="Your Email*">
                                </div>
                            </div>


                            <div class="col form-group">
                                <textarea name="comment" class="form-control" rows="5"
                                    placeholder="Your Comment*"></textarea>
                            </div>

                            <div class="form-group d-flex justify-content-end my-4">


                                <div class="mx-2">
                                    <label for="c_message" class="">
                                        <img class="img-fluid" src="../src/assets/captcha.jpg" style="border: 0;"
                                            alt=" "><br></label>
                                </div>
                                <div class="mx-2 d-flex align-items-center">

                                    <input type="text" class="form-control" placeholder="Masukan kode dikiri"
                                        required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>


            @include('partition.sidebar_beritaterbaru')


            
        </div>
    </div>

</div>