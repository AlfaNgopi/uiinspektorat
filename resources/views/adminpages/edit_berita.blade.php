@extends('admin')

@section('content')



<section class="content">
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
    <div class="container-fluid">
        <div class="card">
            <div class="card-header with-border">
                <h3 class="card-title">Edit Berita Baru </h3>
            </div>
            <div class="card-body">

                <form action="{{route('actionEditBerita')}}" class="form-horizontal" role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    <table class="table table-sm table-borderless">
                        <tbody>
                            <tr>
                                <th width="120px" scope="row">Judul</th>
                                <td><input type="text" class="form-control" name="title" required="" value="{{$berita['title']}}"></td>
                            </tr>
                            <tr>
                                <th scope="row">Sub Judul</th>
                                <td><input type="text" class="form-control" name="subtitle" value="{{$berita['subtitle']}}"></td>
                            </tr>
                            <!-- <tr>
                                <th scope="row">Video Youtube</th>
                                <td><input type="text" class="form-control" name="d" placeholder="Contoh link: http://www.youtube.com/embed/xbuEmoRWQHU"></td>
                            </tr> -->
                            <tr>
                                <th scope="row">Kategori</th>
                                <td><select name="category" class="form-control" required="">
                                        <option value="" {{ $berita['category'] == '' ? 'selected' : '' }}>- Pilih Kategori -</option>
                                        <option value="1" {{ $berita['category'] == '1' ? 'selected' : '' }}>Sekretariat</option>
                                        <option value="2" {{ $berita['category'] == '2' ? 'selected' : '' }}>irban1</option>
                                        <option value="3" {{ $berita['category'] == '3' ? 'selected' : '' }}>irban2</option>
                                        <option value="4" {{ $berita['category'] == '4' ? 'selected' : '' }}>irban3</option>
                                        <option value="5" {{ $berita['category'] == '5' ? 'selected' : '' }}>irban4</option>
                                        <option value="6" {{ $berita['category'] == '6' ? 'selected' : '' }}>Irban5</option>
                                    </select></td>
                            </tr>

                            <tr>
                                <th scope="row">Pilihan </th>
                                @if($berita['is_redaksi'] == 1)
                                <td><input type="radio" name="is_redaksi" value="1"> Ya &nbsp; <input type="radio" name="is_redaksi" value="0" checked=""> Tidak</td>
                                @else
                                <td><input type="radio" name="is_redaksi" value="1"> Ya &nbsp; <input type="radio" name="is_redaksi" value="0" checked=""> Tidak</td>
                                @endif
                            </tr>

                            <tr>
                                <th scope="row">Isi Berita</th>
                                <td>
                                    <textarea name="context" id="content1" class="form-control" rows="10" value="{{$berita['context']}}"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Ganti Gambar</th>
                                <td><input type="file" class="form-control" name="img"><small><i>* max Upload <b style="color:red">3MB</b></i></small></td>
                            </tr>
                            <tr>
                                <th scope="row">Ket. Gambar</th>
                                <td><input type="text" class="form-control" name="img_caption" value="{{$berita['img_caption']}}"></td>
                            </tr>

                            <tr>
                                <th scope="row">Waktu Posting</th>
                                <td><input type="text" id="datetimepicker1" data-date-format="YYYY-MM-DD HH:mm:ss" class="form-control" name="date" value="{{$berita['date']}}"></td>
                            </tr>
                        </tbody>
                    </table>

                    <input type="hidden" name="id" value="{{$berita['id']}}">

                    <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-info">Edit</button>
                        <a href="{{route('admin.berita')}}"><button type="button" class="btn btn-default pull-right">Cancel</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/. container-fluid -->
</section>
@endsection