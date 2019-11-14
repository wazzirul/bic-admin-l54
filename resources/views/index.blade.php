<!-- Menyambungkan dengan master layout  -->
@extends('layout/master')


<!-- judul halaman -->
@section('judul-halaman','Dashboard')





<!--  -->
<!-- section content -->
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">DASHBOARD</h4>
                
                <!--DASHBOARD   DASHBOARD   DASHBOARD   DASHBOARD   DASHBOARD   DASHBOARD   -->
                <div class="card col-xs-12">
                    <div class="card-header">
                        <div class="card-title">DASHBOARD...</div>
                    </div>
                    <div class="card-body">
                            @if($message = Session::get('sukses'))
                            <div class="alert alert-success alert-block">
                                <button class="close" type="button" data-dismiss="alert">x</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            <br/>
                            @endif
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection