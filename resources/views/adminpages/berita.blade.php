@extends('admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title">Semua Berita</h3>
                <div class="card-tools">
                    <a class="btn btn-primary btn-sm" href="{{route('admin.berita.tambah')}}">Tambahkan Data</a>
                </div>
            </div><!-- /.card-header -->
            <div class="card-body ">
                <div class="table w-100">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer ">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-striped table-sm dataTable no-footer" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th style="width:40px" class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th>
                                            <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Judul Berita: activate to sort column ascending" style="width: 790.825px;">Judul Berita</th>
                                            <th style="width:100px" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tanggal: activate to sort column ascending" style="width: 59.4125px;">Tanggal</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 70.5625px;">Status</th>
                                            <th style="width:75px" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">1</td>
                                            <td>Pegawai Inspektorat Daerah Kabupaten Purworejo Antusias Ikuti Sosialisasi Mapping SKP</td>
                                            <td>22 Jan 2025</td>
                                            <td><span style="color:green">Published</span></td>
                                            <td>
                                                <center>
                                                    <a class="btn btn-primary btn-xs" title="Publish Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/publish_listberita/1324/Y"><span class="nav-icon fas fa-check-double"></span></a>
                                                    <a class="btn btn-success btn-xs" title="Edit Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_listberita/1324"><span class="nav-icon fas fa-edit"></span></a>
                                                    <a class="btn btn-danger btn-xs" title="Delete Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_listberita/1324" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class="nav-icon fas fa-trash-alt"></span></a>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">2</td>
                                            <td>REVIU LAPORAN KEUANGAN BLUD PUSKESMAS PADA BLUD PUSKESMAS SEMAWUNG DALEMAN</td>
                                            <td>22 Jan 2025</td>
                                            <td><span style="color:green">Published</span></td>
                                            <td>
                                                <center>
                                                    <a class="btn btn-primary btn-xs" title="Publish Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/publish_listberita/1323/Y"><span class="nav-icon fas fa-check-double"></span></a>
                                                    <a class="btn btn-success btn-xs" title="Edit Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_listberita/1323"><span class="nav-icon fas fa-edit"></span></a>
                                                    <a class="btn btn-danger btn-xs" title="Delete Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_listberita/1323" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class="nav-icon fas fa-trash-alt"></span></a>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">3</td>
                                            <td>REVIU LAPORAN KEUANGAN BLUD PUSKESMAS PADA BLUD PUSKESMAS BAGELEN</td>
                                            <td>22 Jan 2025</td>
                                            <td><span style="color:green">Published</span></td>
                                            <td>
                                                <center>
                                                    <a class="btn btn-primary btn-xs" title="Publish Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/publish_listberita/1322/Y"><span class="nav-icon fas fa-check-double"></span></a>
                                                    <a class="btn btn-success btn-xs" title="Edit Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_listberita/1322"><span class="nav-icon fas fa-edit"></span></a>
                                                    <a class="btn btn-danger btn-xs" title="Delete Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_listberita/1322" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class="nav-icon fas fa-trash-alt"></span></a>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">4</td>
                                            <td>Inspektorat Daerah Kabupaten Purworejo Gelar Rapat Koordinasi Mingguan, Evaluasi Kinerja dan Rencanakan Kegiatan</td>
                                            <td>21 Jan 2025</td>
                                            <td><span style="color:green">Published</span></td>
                                            <td>
                                                <center>
                                                    <a class="btn btn-primary btn-xs" title="Publish Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/publish_listberita/1321/Y"><span class="nav-icon fas fa-check-double"></span></a>
                                                    <a class="btn btn-success btn-xs" title="Edit Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_listberita/1321"><span class="nav-icon fas fa-edit"></span></a>
                                                    <a class="btn btn-danger btn-xs" title="Delete Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_listberita/1321" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class="nav-icon fas fa-trash-alt"></span></a>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">5</td>
                                            <td>Pemeriksaan Kegiatan Tera Timbangan Jembatan di CV New Cakti.</td>
                                            <td>21 Jan 2025</td>
                                            <td><span style="color:green">Published</span></td>
                                            <td>
                                                <center>
                                                    <a class="btn btn-primary btn-xs" title="Publish Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/publish_listberita/1320/Y"><span class="nav-icon fas fa-check-double"></span></a>
                                                    <a class="btn btn-success btn-xs" title="Edit Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_listberita/1320"><span class="nav-icon fas fa-edit"></span></a>
                                                    <a class="btn btn-danger btn-xs" title="Delete Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_listberita/1320" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class="nav-icon fas fa-trash-alt"></span></a>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">6</td>
                                            <td>Pendampingan Desk Pembuatan LPPD Tahun Anggaran 2024.</td>
                                            <td>21 Jan 2025</td>
                                            <td><span style="color:green">Published</span></td>
                                            <td>
                                                <center>
                                                    <a class="btn btn-primary btn-xs" title="Publish Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/publish_listberita/1319/Y"><span class="nav-icon fas fa-check-double"></span></a>
                                                    <a class="btn btn-success btn-xs" title="Edit Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_listberita/1319"><span class="nav-icon fas fa-edit"></span></a>
                                                    <a class="btn btn-danger btn-xs" title="Delete Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_listberita/1319" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class="nav-icon fas fa-trash-alt"></span></a>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">7</td>
                                            <td>Reviu Laporan Keuangan Puskesmas Gebang</td>
                                            <td>21 Jan 2025</td>
                                            <td><span style="color:green">Published</span></td>
                                            <td>
                                                <center>
                                                    <a class="btn btn-primary btn-xs" title="Publish Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/publish_listberita/1318/Y"><span class="nav-icon fas fa-check-double"></span></a>
                                                    <a class="btn btn-success btn-xs" title="Edit Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_listberita/1318"><span class="nav-icon fas fa-edit"></span></a>
                                                    <a class="btn btn-danger btn-xs" title="Delete Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_listberita/1318" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class="nav-icon fas fa-trash-alt"></span></a>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">8</td>
                                            <td>REVIU LAPORAN KEUANGAN BLUD PUSKESMAS PADA BLUD PUSKESMAS BANYUASIN</td>
                                            <td>20 Jan 2025</td>
                                            <td><span style="color:green">Published</span></td>
                                            <td>
                                                <center>
                                                    <a class="btn btn-primary btn-xs" title="Publish Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/publish_listberita/1317/Y"><span class="nav-icon fas fa-check-double"></span></a>
                                                    <a class="btn btn-success btn-xs" title="Edit Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_listberita/1317"><span class="nav-icon fas fa-edit"></span></a>
                                                    <a class="btn btn-danger btn-xs" title="Delete Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_listberita/1317" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class="nav-icon fas fa-trash-alt"></span></a>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">9</td>
                                            <td>Konfirmasi Urusan Perdagangan di Kabupaten Purworejo.</td>
                                            <td>19 Jan 2025</td>
                                            <td><span style="color:green">Published</span></td>
                                            <td>
                                                <center>
                                                    <a class="btn btn-primary btn-xs" title="Publish Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/publish_listberita/1316/Y"><span class="nav-icon fas fa-check-double"></span></a>
                                                    <a class="btn btn-success btn-xs" title="Edit Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_listberita/1316"><span class="nav-icon fas fa-edit"></span></a>
                                                    <a class="btn btn-danger btn-xs" title="Delete Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_listberita/1316" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class="nav-icon fas fa-trash-alt"></span></a>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr role="row" class="">
                                            <td class="sorting_1">10</td>
                                            <td>REVIU LAPORAN KEUANGAN BLUD PUSKESMAS CANGKREP TAHUN 2024</td>
                                            <td>18 Jan 2025</td>
                                            <td><span style="color:green">Published</span></td>
                                            <td>
                                                <center>
                                                    <a class="btn btn-primary btn-xs" title="Publish Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/publish_listberita/1315/Y"><span class="nav-icon fas fa-check-double"></span></a>
                                                    <a class="btn btn-success btn-xs" title="Edit Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_listberita/1315"><span class="nav-icon fas fa-edit"></span></a>
                                                    <a class="btn btn-danger btn-xs" title="Delete Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_listberita/1315" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class="nav-icon fas fa-trash-alt"></span></a>
                                                </center>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 1,305 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                        <li class="paginate_button page-item disabled" id="example1_ellipsis"><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">…</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">131</a></li>
                                        <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/. container-fluid -->
</section>
@endsection