@extends('layout/master')


<!-- judul halaman -->
@section('judul-halaman','Profil User')










@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Profil User</h4>
            
            <!--PROFIL USER  TABLE PROFIL USER  TABLE PROFIL USER  TABLE PROFIL USER  TABLE-->
            <div class="card col-xs-12">
                <div class="card-header">
                    <div class="card-title">Daftar Profil User</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <!-- <table class="table table-hover"> -->
                    <div id="profil-user_wrapper" class="dataTables_wrapper no-footer">
                        <table id="profil-user" class="table mb-3 table-striped table-hover table-profil-user table-setting dataTable no-footer" style="width:100%" role="grid" aria-describedby="profil-user_info">
                        <thead  class="thead-dark">
                            <tr role="row">
                                <th scope="col" class="sorting_asc" tabindex="0" aria-controls="profil-user" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">
                                    #
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="profil-user" rowspan="1" colspan="1" aria-label="First: activate to sort column ascending">
                                    Nama Lengkap
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="profil-user" rowspan="1" colspan="1" aria-label="Last: activate to sort column ascending">
                                    Username
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="profil-user" rowspan="1" colspan="1" aria-label="Last: activate to sort column ascending">
                                    Email
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="profil-user" rowspan="1" colspan="1" aria-label="Handle: activate to sort column ascending">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @php $i=1; @endphp
                            @foreach($profiluser as $pu)
                        <tr role="row">
                            <td>{{$i++}}</td>
                            <td>{{ $pu->name }}</td>
                            <td>{{ $pu->username }}</td>
                            <td>{{ $pu->email }}</td>
                            <td>
                               <a class="open-popup-resetpw btn-sm btn btn-warning" href="#reset-password">Reset Password</a>
                            </td>
                        </tr>
                            @endforeach
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
            <div id="active" class="user-popup mfp-hide">
                    <p class="text-center">Apakah anda ingin mengaktifkan user ini ? </p>
            <div class="action-confrimation mt-3">
                <button class="btn btn-danger mr-3">Yes</button>
                <button class="btn btn-default btn-close">Cancel</button>
            </div>
            </div>


            <div id="inactive" class="user-popup mfp-hide">
                    <p class="text-center">Apakah anda ingin menonaktifkan user ini ?</p>
            <div class="action-confrimation mt-3">
                <button class="btn btn-danger mr-3">Yes</button>
                <button class="btn btn-default btn-close">Cancel</button>
            </div>
            </div>
            

            <div id="reset-password" class="user-popup mfp-hide">
                    <p class="text-center">Apakah anda ingin mereset password user ini ?</p>
            <div class="action-confrimation mt-3">
                <button class="btn btn-danger mr-3">Yes</button>
                <button class="btn btn-default btn-close">Cancel</button>
            </div>
            </div>





    </div>
</div>
</div>
@endsection