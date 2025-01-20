@extends('main')

@include('partition.header')

<!-- Main Content-->
<div class="container mt-5">



    <div class="card shadow p-3 mb-5  bg-body-tertiary rounded">

        <div class="card-body">
            <h2 class="card-title">
                Survey Kepuasan Mitra Pengawasan Tahun 2025 Semester 1
            </h2>





        </div>


    </div>


    <div class="row">

        <div class="col-lg-8">
            <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">

                <div class="card-body">
                    <h5 class="card-title"> Validasi Instansi</h5>
                </div>

                <div class="d-flex justify-content-center">
                    <form action="">
                        <table class="table">
                            <tr>
                                <td><label for="kode" class="col-form-label">Kode Token</label></td>
                                <td><input type="text" id="kode" name="kode" class="form-control" placeholder="Masukkan Kode Token"></td>
                            </tr>
                            <tr>
                                <td><label for="captcha" class="col-form-label"><img src="../src/assets/captcha.jpg" alt=""></label></td>
                                <td><input type="text" id="captcha" name="captcha" class="form-control" placeholder="Masukkan Kode disamping"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button type="submit" class="btn btn-primary">Validasi</button></td>
                            </tr>
                        </table>
                    </form>
                </div>

            </div>
        </div>

        @include('partition.sidebar_beritaterbaru')
    </div>
</div>