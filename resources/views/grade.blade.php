@extends('layout/master')


<!-- judul halaman -->
@section('judul-halaman','Grade')







@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Grade</h4>
            
            <!--GRADE TABLE GRADE TABLE GRADE TABLE GRADE TABLE-->
            <div class="card col-xs-12">
                <div class="card-header">
                    <div class="card-title">Daftar Grade</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <!-- <table class="table table-hover"> -->
                    <div id="grade_wrapper" class="dataTables_wrapper no-footer">
                        <a class="btn btn-primary mb-3" href="{{ route('tambah-grade') }}">Tambah Grade Kampus Baru</a>
                        <table id="grade" class="table mb-3 table-striped table-hover table-grade  table-setting dataTable no-footer" style="width:100%" role="grid" aria-describedby="grade_info">
                        <thead  class="thead-dark">
                            <tr role="row">
                                <th scope="col" class="sorting_asc" tabindex="0" aria-controls="grade" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">
                                    #
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="grade" rowspan="1" colspan="1" aria-label="First: activate to sort column ascending">
                                    Kampus
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="grade" rowspan="1" colspan="1" aria-label="Last: activate to sort column ascending">
                                    Jurusan
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="grade" rowspan="1" colspan="1" aria-label="Last: activate to sort column ascending">
                                    Grade
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="grade" rowspan="1" colspan="1" aria-label="Handle: activate to sort column ascending">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            
                        <tr role="row" class="odd">
                            <td class="sorting_1">1</td>
                            <td>Universitas Brawijaya</td>
                            <td>Kedokteran</td>
                            <td>90</td>
                            <td>
                                <a href="{{ route('edit-grade') }}" class="btn-warning btn btn-sm">Edit</a>
                                <a href="#delete" class="open-popup-delete btn-danger btn btn-sm">Hapus</a>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">2</td>
                            <td>Universitas Brawijaya</td>
                            <td>Teknik Informatika</td>
                            <td>85</td>
                            <td>
                                <a href="{{ route('edit-grade') }}" class="btn-warning btn btn-sm">Edit</a>
                                <a href="#delete" class="open-popup-delete btn-danger btn btn-sm">Hapus</a>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">3</td>
                            <td>Universitas Negri Malang</td>
                            <td>Sastra Inggris</td>
                            <td>85</td>
                            <td>
                                <a href="{{ route('edit-grade') }}" class="btn-warning btn btn-sm">Edit</a>
                                <a href="#delete" class="open-popup-delete btn-danger btn btn-sm">Hapus</a>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">4</td>
                            <td>Universitas Negri Malang</td>
                            <td>Teknik Informatika</td>
                            <td>80</td>
                            <td>
                                <a href="{{ route('edit-grade') }}" class="btn-warning btn btn-sm">Edit</a>
                                <a href="#delete" class="open-popup-delete btn-danger btn btn-sm">Hapus</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div> 
                </div>
            </div>
        </div>





            <!--
                /////////////////////////////////////////////////////////////////////////////////////
                POPUP POPUP POPUP POPUP POPUP POPUP POPUP POPUP POPUP POPUP POPUP POPUP
            -->
            <div id="delete" class="delete-popup mfp-hide">
            <div class="delete-confrimation mt-3">
                <button class="btn btn-danger mr-3">Yes, Delete</button>
                <button class="btn btn-default btn-close">Cancel</button>
            </div>
            </div>





    </div>
</div>
</div>
@endsection