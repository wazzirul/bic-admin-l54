@extends('layout/master')


<!-- judul halaman -->
@section('judul-halaman','Beasiswa')






@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Beasiswa</h4>
            
            <!--BEASISWA TABLE BEASISWA TABLE BEASISWA TABLE BEASISWA TABLE-->
            <div class="card col-xs-12">
                <div class="card-header">
                    <div class="card-title">Daftar Beasiswa</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <!-- <table class="table table-hover"> -->
                    <div id="beasiswa_wrapper" class="dataTables_wrapper no-footer">
                        <a class="btn btn-primary mb-3" href="{{ route('tambah-beasiswa') }}">Tambah Beasiswa Baru</a>
                        <table id="beasiswa" class="table mb-3 table-striped table-hover table-beasiswa table-setting dataTable no-footer" style="width:100%" role="grid" aria-describedby="beasiswa_info">
                        <thead class="thead-dark">
                            <tr role="row">
                                <th scope="col" class="sorting_asc" tabindex="0" aria-controls="beasiswa" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">
                                    #
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="beasiswa" rowspan="1" colspan="1" aria-label="First: activate to sort column ascending">
                                    Judul
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="beasiswa" rowspan="1" colspan="1" aria-label="First: activate to sort column ascending">
                                    Subtitle
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="beasiswa" rowspan="1" colspan="1" aria-label="Last: activate to sort column ascending">
                                    Deskripsi Beasiswa
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="beasiswa" rowspan="1" colspan="1" aria-label="Handle: activate to sort column ascending">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                           @php $i=1; @endphp 
                           @foreach($beasiswa as $b) 
                        <tr role="row" class="data-row">
                            <td>{{$i++}}</td>
                            <td class="title">{{$b->judul}}</td>
                            <td class="table-subtitle subtitle">{{$b->subtitle}}</td>
                            <td class="table-deskripsi description">{{$b->deskripsi}}</td>
                            <input type="hidden" value="{{ $b->id }}" class="id">
                            
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" id="detail-item" data-item-id="1">Detail</button>
                                <a href="/bic-admin/edit-beasiswa/{{$b->id}}" class="btn btn-warning btn-sm">Edit</a>
                                <button type="button" class="btn btn-danger btn-sm" id="delete-item" data-item-id="1">Hapus</button>
                            </td>
                        </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div> 
                </div>
            </div>
        </div>




        



    <!--POP UP DETAIL POP UP DETAIL POP UP DETAIL POP UP DETAIL-->
    <!-- Attachment Modal -->
    <div class="modal fade" id="detail-modal" tabindex="-1" role="dialog" aria-labelledby="detail-modal-label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="detail-modal-label">Detail Beasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body" id="attachment-body-content">
                    <div class="card">
                    <div class="card-body">
                        
                    <div class="table-responsive">
                        <table id="beasiswa" class="table mb-3 table-striped table-beasiswa dataTable no-footer" style="width:100%" role="grid" aria-describedby="program_info">
                            <tbody>
                            <tr role="row" class="odd">
                                <td>Judul</td>
                                <td class="" id="modal-title"></td>
                            </tr>
                            <tr role="row" class="even">
                                <td>Subtitle</td>					
                                <td class="" id="modal-subtitle"></td>
                            </tr>
                            <tr role="row" class="even">
                                <td>Deskripsi</td>					
                                <td class="" id="modal-description"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- /Attachment Modal -->



        

        <!--POP UP DELETE POP UP DELETE POP UP DELETE POP UP DELETE-->
        <!-- Attachment Modal -->
        <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modal-label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body" id="attachment-body-content">
                    <div class="card">
                    <div class="card-body">
                        <p class="my-3 text-center">Apakah anda yakin akan menghapus beasiswa ini ?</p>
                        <div class="delete-confrimation">
                            <form action="/bic-admin/hapus-beasiswa" method="post" id="delete-form">
                                {{ csrf_field() }}
                                    <input type="hidden" id="modal-delete-id" name="id">
                                    <button type="submit" class="btn btn-danger mr-3">Delete</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
            </div>
            </div>
        </div>
        <!-- /Attachment Modal -->
    
    
                    





    </div>
</div>
</div>
@endsection