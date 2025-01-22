@extends('admin')

@section('content')


@if (session('success'))
<div class="alert alert-success mt-3" role="alert">
    {{ session('success') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger mt-3" role="alert">
    {{ session('error') }}
</div>
@endif


<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header with-border">
                <h3 class="card-title">Tambah Berita Baru </h3>
            </div>
            <div class="card-body">

                <form action="{{route('actionTambahBerita')}}" class="form-horizontal" role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    <table class="table table-sm table-borderless">
                        <tbody>
                            <tr>
                                <th width="120px" scope="row">Judul</th>
                                <td><input type="text" class="form-control" name="title" required=""></td>
                            </tr>
                            <tr>
                                <th scope="row">Sub Judul</th>
                                <td><input type="text" class="form-control" name="subtitle"></td>
                            </tr>
                            <!-- <tr>
                                <th scope="row">Video Youtube</th>
                                <td><input type="text" class="form-control" name="d" placeholder="Contoh link: http://www.youtube.com/embed/xbuEmoRWQHU"></td>
                            </tr> -->
                            <tr>
                                <th scope="row">Kategori</th>
                                <td><select name="category" class="form-control" required="">
                                        <option value="" selected="">- Pilih Kategori -</option>
                                        <option value="1">Sekretariat</option>
                                        <option value="2">irban1</option>
                                        <option value="3">irban2</option>
                                        <option value="4">irban3</option>
                                        <option value="5">irban4</option>
                                        <option value="6">Irban5</option>
                                    </select></td>
                            </tr>

                            <tr>
                                <th scope="row">Pilihan </th>
                                <td><input type="radio" name="is_redaksi" value="1"> Ya &nbsp; <input type="radio" name="is_redaksi" value="0" checked=""> Tidak</td>
                            </tr>

                            <tr>
                                <th scope="row">Isi Berita</th>
                                <td>
                                    <textarea name="context" id="content1" class="form-control" rows="10"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Gambar</th>
                                <td><input type="file" class="form-control" name="img"><small><i>* max Upload <b style="color:red">3MB</b></i></small></td>
                            </tr>
                            <tr>
                                <th scope="row">Ket. Gambar</th>
                                <td><input type="text" class="form-control" name="img_caption"></td>
                            </tr>

                            <tr>
                                <th scope="row">Waktu Posting</th>
                                <td><input type="text" id="datetimepicker1" data-date-format="YYYY-MM-DD HH:mm:ss" class="form-control" name="date"></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-info">Tambahkan</button>
                        <a href="https://inspektorat.purworejokab.go.id/baru/administrator/listberita"><button type="button" class="btn btn-default pull-right">Cancel</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/. container-fluid -->
</section>
<!-- /.content -->
@endsection