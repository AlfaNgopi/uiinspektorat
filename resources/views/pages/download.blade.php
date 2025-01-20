@extends('main')

@include('partition.header')

<!-- Main Content-->
<div class="container mt-5">


    <div class="row">

        <div class="col-lg-8">
            <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">


                <table class="custom-table-download" style="font-weight:bold; border:1px solid #e3e3e3;"
                    width="100%">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama File</th>
                            <th>Hits</th>
                            <th style="width:70px"></th>
                        </tr>
                        @foreach ($downloads as $download)
                        <tr bgcolor="{{ $loop->iteration % 2 == 0 ? '#E1E1E1' : '#FFFFFF' }}">
                            <td>{{$download['id']}}</td>
                            <td>{{$download['name']}}</td>
                            <td>{{$download['traffic']}} Kali</td>
                            <td><a class="download-button"
                                    href="{{$download['link']}}">Download</a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>

                <nav aria-label="Page navigation example" class=" mt-2">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>

            </div>

            <!-- comment section -->


            <!-- comment form section -->



        </div>

        @include('partition/sidebar_beritaterbaru')
    </div>
</div>