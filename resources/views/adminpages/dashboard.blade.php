@extends('admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">List Berita</span>
                        <span class="info-box-number">
                            1302 </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Halaman</span>
                        <span class="info-box-number">24</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Agenda</span>
                        <span class="info-box-number">0</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Users</span>
                        <span class="info-box-number">12</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Komentar Terbaru</h3>
                        <div class="card-tools">
                            <a href="https://inspektorat.purworejokab.go.id/baru/administrator/komentarberita">Lihat Semua</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div style="background:#fef7f1; padding:3px 8px; border-bottom:1px solid #e3e3e3">
                            <a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/berita/detail/pemeriksaan-pengelolaan-keuangan-desa-tahun-2023-di-desa-gunungcondong-kecamatan-bruno-">PEMERIKSAAN PENGELOLAAN KEUANGAN DESA TAHUN 2023 DI DESA GUNUNGCONDONG KECAMATAN BRUNO </a><br>
                            <span style="color:orange; font-weight:800"><i class="fas fa-user"></i> MARTHEN SAIRDEKUT</span>, <i class="text-success">5 Bulan Lalu</i><br>
                            <a href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_komentarberita/1170"><i class="fas fa-edit"></i></a>
                            <a href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_komentarberita/1170" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><i class="fas fa-trash-alt"></i></a>
                            mohon sisampaikan,..
                        </div>
                        <div style="background:#fef7f1; padding:3px 8px; border-bottom:1px solid #e3e3e3">
                            <a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/berita/detail/probity-audit-pembangunan-gedung-iccu-rsud-dr-tjitrowardojo-tahap-pelaksanaan-kontrak-pada-rsud-dr-tjitrowardojo-kabupaten-purworejo">PROBITY AUDIT PEMBANGUNAN GEDUNG ICCU RSUD dr. TJITROWARDOJO TAHAP PELAKSANAAN KONTRAK PADA RSUD dr. TJITROWARDOJO KABUPATEN PURWOREJO</a><br>
                            <span style="color:orange; font-weight:800"><i class="fas fa-user"></i> Elita Yanti Hutapea,SKM</span>, <i class="text-success">7 Bulan Lalu</i><br>
                            <a href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_komentarberita/1169"><i class="fas fa-edit"></i></a>
                            <a href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_komentarberita/1169" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><i class="fas fa-trash-alt"></i></a>
                            Bisa tolong krim filenya Pak sebab saat ini kami dari Inspektorat Kabupaten Lima Puluh Kota akan melakukan Probity,..
                        </div>
                        <div style="background:#fef7f1; padding:3px 8px; border-bottom:1px solid #e3e3e3">
                            <a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/berita/detail/reviu-tata-kelola-pajak-daerah-pada-badan-pengelolaan-keuangan-pendapatan-dan-aset-daerah-kabupaten-purworejo">REVIU TATA KELOLA PAJAK DAERAH PADA BADAN PENGELOLAAN KEUANGAN, PENDAPATAN, DAN ASET DAERAH KABUPATEN PURWOREJO</a><br>
                            <span style="color:orange; font-weight:800"><i class="fas fa-user"></i> Akui Sapius</span>, <i class="text-success">1 Tahun Lalu</i><br>
                            <a href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_komentarberita/1168"><i class="fas fa-edit"></i></a>
                            <a href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_komentarberita/1168" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><i class="fas fa-trash-alt"></i></a>
                            Selamat pagi bpk/ibu, mhn kiranya dapat mengirimkan kepada kami contoh pelaporan Reviu Tata Kelola Pajak Daerah,,..
                        </div>
                        <div style="background:#fef7f1; padding:3px 8px; border-bottom:1px solid #e3e3e3">
                            <a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/berita/detail/reviu-atas-pengelolaan-barang-milik-daerah-tahap-perencanaan-dan-penganggaran-tahun-2022-pada-bpkpad-kabupaten-purworejo">REVIU ATAS PENGELOLAAN BARANG MILIK DAERAH TAHAP PERENCANAAN DAN PENGANGGARAN TAHUN 2022 PADA BPKPAD KABUPATEN PURWOREJO</a><br>
                            <span style="color:orange; font-weight:800"><i class="fas fa-user"></i> Yafet</span>, <i class="text-success">1 Tahun Lalu</i><br>
                            <a href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_komentarberita/1167"><i class="fas fa-edit"></i></a>
                            <a href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_komentarberita/1167" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><i class="fas fa-trash-alt"></i></a>
                            Reviu tata kelole,..
                        </div>
                        <div style="background:#fef7f1; padding:3px 8px; border-bottom:1px solid #e3e3e3">
                            <a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/berita/detail/reviu-atas-pengelolaan-barang-milik-daerah-tahap-perencanaan-dan-penganggaran-tahun-2022-pada-bpkpad-kabupaten-purworejo">REVIU ATAS PENGELOLAAN BARANG MILIK DAERAH TAHAP PERENCANAAN DAN PENGANGGARAN TAHUN 2022 PADA BPKPAD KABUPATEN PURWOREJO</a><br>
                            <span style="color:orange; font-weight:800"><i class="fas fa-user"></i> Yafet</span>, <i class="text-success">1 Tahun Lalu</i><br>
                            <a href="https://inspektorat.purworejokab.go.id/baru/administrator/edit_komentarberita/1166"><i class="fas fa-edit"></i></a>
                            <a href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_komentarberita/1166" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><i class="fas fa-trash-alt"></i></a>
                            Reviu tata kelola,..
                        </div>
                    </div>
                </div>
            </div><!-- /.Left col -->

            <div class="col-lg-6">
                <div class="card">
                    <script type="text/javascript" src="https://inspektorat.purworejokab.go.id/baru/asset/admin/plugins/jQuery/jquery.min.js"></script>
                    <script type="text/javascript">
                        $(function() {
                            $('#container').highcharts({
                                data: {
                                    table: 'datatable'
                                },
                                chart: {
                                    type: 'column'
                                },
                                title: {
                                    text: ''
                                },
                                yAxis: {
                                    allowDecimals: false,
                                    title: {
                                        text: ''
                                    }
                                },
                                tooltip: {
                                    formatter: function() {
                                        return '<b>' + this.series.name + '</b><br/>' +
                                            'Ada ' + this.point.y + ' Orang';
                                    }
                                }
                            });
                        });
                    </script>

                    <div class="card-header">
                        <h3 class="card-title">Grafik Kunjungan</h3>
                    </div>

                    <div class="card-body chat" id="chat-card">
                        <div id="container" style="min-width: 310px; height: 205px; margin: 0 auto"></div>
                        <table id="datatable" style="display:none">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Jumlah Kunjungan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>22_Jan</th>
                                    <td>88</td>
                                </tr>
                                <tr>
                                    <th>21_Jan</th>
                                    <td>359</td>
                                </tr>
                                <tr>
                                    <th>20_Jan</th>
                                    <td>189</td>
                                </tr>
                                <tr>
                                    <th>19_Jan</th>
                                    <td>226</td>
                                </tr>
                                <tr>
                                    <th>18_Jan</th>
                                    <td>216</td>
                                </tr>
                                <tr>
                                    <th>17_Jan</th>
                                    <td>280</td>
                                </tr>
                                <tr>
                                    <th>16_Jan</th>
                                    <td>376</td>
                                </tr>
                                <tr>
                                    <th>15_Jan</th>
                                    <td>401</td>
                                </tr>
                                <tr>
                                    <th>14_Jan</th>
                                    <td>312</td>
                                </tr>
                                <tr>
                                    <th>13_Jan</th>
                                    <td>282</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="card-header">
                            <h3 class="card-title">10 Artikel Teratas</h3>
                        </div>
                        <ul>
                            <li><a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/reviu-analisis-standar-harga-belanja-asb-dan-harga-satuan-pokok-kegiatan-hspk-">REVIU ANALISIS STANDAR HARGA BELANJA (ASB) DAN HARGA SATUAN POKOK KEGIATAN (HSPK) </a> <small style="color:red"><i>(9209)</i></small></li>
                            <li><a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/reviu-tata-kelola-pajak-daerah-pada-badan-pengelolaan-keuangan-pendapatan-dan-aset-daerah-kabupaten-purworejo">REVIU TATA KELOLA PAJAK DAERAH PADA BADAN PENGELOLAAN KEUANGAN, PENDAPATAN, DAN ASET DAERAH KABUPATEN PURWOREJO</a> <small style="color:red"><i>(5619)</i></small></li>
                            <li><a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/evaluasi-manajemen-risiko-mr-tahun-2021-">EVALUASI MANAJEMEN RISIKO (MR) TAHUN 2021 </a> <small style="color:red"><i>(4427)</i></small></li>
                            <li><a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/reviu-standar-harga-satuan-shs-tahun-2023-pada-bpkpad-kabupaten-purworejo">REVIU STANDAR HARGA SATUAN (SHS) TAHUN 2023 PADA BPKPAD KABUPATEN PURWOREJO</a> <small style="color:red"><i>(4221)</i></small></li>
                            <li><a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/reviu-tata-kelola-perizinan-dan-nonperizinan-tahun-2022-pada-dpmptsp-">Reviu Tata Kelola Perizinan dan Nonperizinan Tahun 2022 pada DPMPTSP </a> <small style="color:red"><i>(3534)</i></small></li>
                            <li><a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/reviu-dau-yang-ditentukan-penggunaannya-atas-bagian-dau-bidang-kesehatan-tahun-2023-tahap-penganggaran-pada-bpkpad-kabupaten-purworejo">REVIU DAU YANG DITENTUKAN PENGGUNAANNYA ATAS BAGIAN DAU BIDANG KESEHATAN TAHUN 2023 TAHAP PENGANGGARAN PADA BPKPAD KABUPATEN PURWOREJO</a> <small style="color:red"><i>(3288)</i></small></li>
                            <li><a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/bimtek-perencanaan-pengawasan-berbasis-risiko-ppbr">BIMTEK PERENCANAAN PENGAWASAN BERBASIS RISIKO (PPBR)</a> <small style="color:red"><i>(3054)</i></small></li>
                            <li><a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/reviu-standar-harga-satuan-shs-tahun-2024-pada-bpkpad-kabupaten-purworejo">REVIU STANDAR HARGA SATUAN (SHS) TAHUN 2024 PADA BPKPAD KABUPATEN PURWOREJO</a> <small style="color:red"><i>(3023)</i></small></li>
                            <li><a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/reviu-atas-pengelolaan-barang-milik-daerah-tahap-perencanaan-dan-penganggaran-tahun-2022-pada-bpkpad-kabupaten-purworejo">REVIU ATAS PENGELOLAAN BARANG MILIK DAERAH TAHAP PERENCANAAN DAN PENGANGGARAN TAHUN 2022 PADA BPKPAD KABUPATEN PURWOREJO</a> <small style="color:red"><i>(2935)</i></small></li>
                            <li><a target="_BLANK" href="https://inspektorat.purworejokab.go.id/baru/reviu-kepatuhan-tata-kelola-pajak-daerah-tahun-2023-pada-bpkpad-kabupaten-purworejo">REVIU KEPATUHAN TATA KELOLA PAJAK DAERAH TAHUN 2023 PADA BPKPAD KABUPATEN PURWOREJO</a> <small style="color:red"><i>(2651)</i></small></li>
                        </ul>
                    </div><!-- /.card (chat card) -->

                </div>
            </div><!-- right col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-12 col-sm-6 col-md-3"><a href="https://inspektorat.purworejokab.go.id/ppid/admin/adminsuper_login.php">
                </a>
                <div class="info-box"><a href="https://inspektorat.purworejokab.go.id/ppid/admin/adminsuper_login.php">
                        <img src="https://inspektorat.purworejokab.go.id/baru/asset/foto_banner_admin/logo_ppid.png" height="50px" width="250px">
                    </a>
                    <div class="info-box-content"><a href="https://inspektorat.purworejokab.go.id/ppid/admin/adminsuper_login.php">
                            <span class="info-box-text"><b>Login Admin<br>PPID Pembantu</b></span></a>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3"><a href="https://aduanv2.purworejokab.go.id/cms/loginsso">
                </a>
                <div class="info-box"><a href="https://aduanv2.purworejokab.go.id/cms/loginsso">
                        <img src="https://inspektorat.purworejokab.go.id/baru/asset/foto_banner_admin/PORJO.png" height="60px" width="60px">
                    </a>
                    <div class="info-box-content"><a href="https://aduanv2.purworejokab.go.id/cms/loginsso">
                            <center><span class="info-box-text"><b>Login Admin Pengaduan PORJO</b></span></center>
                        </a>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>

    </div><!--/. container-fluid -->
</section>
@endsection