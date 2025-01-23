@extends('admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title">Semua Berita</h3>
                <div class="card-tools">
                    <a class="btn btn-primary btn-sm" href="{{route($routetambah)}}">Tambahkan Data</a>
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
                                <table id="example1" class="table" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            @foreach($columns as $column)
                                            <th  class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending">{{$column}}</th>
                                            @endforeach
                                            <th  class="sorting_asc" style="width: 100px;" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending">action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($items as $item)
                                        <tr role="row" class="odd">
                                            @foreach($columns as $column)
                                            <td class="">{{$item[$column]}}</td>
                                            @endforeach
                                            <td>
                                                
                                                    <a class="btn btn-primary btn-xs" title="Publish Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/publish_listberita/1324/Y"><span class="nav-icon fas fa-check-double"></span></a>
                                                    <a class="btn btn-success btn-xs" title="Edit Data" href="../admin/berita/edit/1"><span class="nav-icon fas fa-edit"></span></a>
                                                    <a class="btn btn-danger btn-xs" title="Delete Data" href="https://inspektorat.purworejokab.go.id/baru/administrator/delete_listberita/1324" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class="nav-icon fas fa-trash-alt"></span></a>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        to do pagination
                    </div>
                </div>
            </div>
        </div>
    </div><!--/. container-fluid -->
</section>
@endsection