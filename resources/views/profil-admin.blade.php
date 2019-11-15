@extends('layout/master')


<!-- judul halaman -->
@section('judul-halaman','Profil Admin')










@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Admin</h4>
            
            <!--PROFIL ADMIN TABLE PROFIL ADMIN TABLE PROFIL ADMIN TABLE PROFIL ADMIN TABLE-->
            <div class="card col-xs-12">
                <div class="card-header">
                    <div class="card-title">Daftar Profil Admin</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <!-- <table class="table table-hover"> -->
                    <div id="admin_wrapper" class="dataTables_wrapper no-footer">
                        <table id="admin" class="table mb-3 table-hover table-striped table-admin table-setting dataTable no-footer" style="width:100%" role="grid" aria-describedby="admin_info">
                        <thead  class="thead-dark">
                            <tr role="row">
                                <th scope="col" class="sorting_asc" tabindex="0" aria-controls="admin" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">
                                    #
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="admin" rowspan="1" colspan="1" aria-label="First: activate to sort column ascending">
                                    Username
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="admin" rowspan="1" colspan="1" aria-label="Last: activate to sort column ascending">
                                    Password
                                </th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="admin" rowspan="1" colspan="1" aria-label="Handle: activate to sort column ascending">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            
                        <tr role="row" class="odd">
                            <td class="sorting_1">1</td>
                            <td>Pyke SP</td>
                            <td>******************</td>
                            <td>
                                <a href="{{route('update-admin')}}" class="btn-primary btn btn-sm">Update Profil</a>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">2</td>
                            <td>Ninja Zed</td>
                            <td>******************</td>
                            <td>
                                <a href="{{route('update-admin')}}" class="btn-primary btn btn-sm">Update Profil</a>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">3</td>
                            <td>Miss Fortune</td>
                            <td>******************</td>
                            <td>
                                <a href="{{route('update-admin')}}" class="btn-primary btn btn-sm">Update Profil</a>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">4</td>
                            <td>Master Yi</td>
                            <td>******************</td>
                            <td>
                                <a href="{{route('update-admin')}}" class="btn-primary btn btn-sm">Update Profil</a>
                            </td>
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
@endsection