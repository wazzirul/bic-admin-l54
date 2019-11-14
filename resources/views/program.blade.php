<!-- Menyambungkan dengan master layout  -->
@extends('layout/master')


<!-- judul halaman -->
@section('judul-halaman','Program')





<!--  -->
<!-- section content -->
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">Program</h4>
                
                <!--PROGRAM TABLE PROGRAM TABLE PROGRAM TABLE PROGRAM TABLE-->
                <div class="card col-xs-12">
                    <div class="card-header">
                        <div class="card-title">Daftar Program</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <!-- <table class="table table-hover"> -->
                        <div id="program_wrapper" class="dataTables_wrapper no-footer">
                            <a class="btn btn-primary mb-3" href="{{ route('tambah-program')}}">Tambah Program Baru</a>
                            <table id="program" class="table table-striped mb-3 table-hover table-setting table-program dataTable no-footer" style="width:100%" role="grid" aria-describedby="program_info">
                            <thead class="thead-dark">
                                <tr role="row">
                                    <th scope="col" class="sorting_asc" tabindex="0" aria-controls="program" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">
                                        #
                                    </th>
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="program" rowspan="1" colspan="1" aria-label="First: activate to sort column ascending">
                                        Judul
                                    </th>
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="program" rowspan="1" colspan="1" aria-label="Last: activate to sort column ascending">
                                        Deskripsi
                                    </th>
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="program" rowspan="1" colspan="1" aria-label="Handle: activate to sort column ascending">
                                        Harga
                                    </th>
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="program" rowspan="1" colspan="1" aria-label="Handle: activate to sort column ascending">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                             @php $i=1; @endphp   
                             @foreach($program as $p)   
                            <tr role="row" class="data-row">
                                <td>{{ $i++ }}</td>
                                <td class="title">{{ $p->judul}}</td>
                                <td class="table-deskripsi description">{{ $p->deskripsi }}</td>
                                <td class="price">{{ $p->harga }}</td>
                                <input type="hidden" value="{{ $p->id }}" class="id">
                                <input type="hidden" value="{{ $p->dp }}" class="dp">
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" id="detail-item" data-item-id="1">Detail</button>
                                    <a class="btn btn-warning btn-sm" href="/bic-admin/edit-program/{{$p->id}}">Edit</a>
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
                    <h5 class="modal-title" id="detail-modal-label">Detail Program</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body" id="attachment-body-content">
                        <div class="card">
                        <div class="card-body">
                            
                        <div class="table-responsive">
                            <table id="program" class="table mb-3 table-striped table-program dataTable no-footer" style="width:100%" role="grid" aria-describedby="program_info">
                                <tbody>
                                <tr role="row" class="odd">
                                    <td>Judul</td>
                                    <td class="" id="modal-title"></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>Deskripsi</td>					
                                    <td class="" id="modal-description"></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>Harga</td>			
                                    <td class="" id="modal-price"></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>DP</td>			
                                    <td class=""  id="modal-dp"> </td>
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
                            <p class="my-3 text-center">Apakah anda yakin akan menghapus program ini ?</p>
                            <div class="delete-confrimation">
                                <form action="/bic-admin/hapus-program" method="post" id="delete-form">
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