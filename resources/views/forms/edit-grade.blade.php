@extends('layout/master')


<!-- judul halaman -->
@section('judul-halaman','Edit Grade')








@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Grade</h4>
            
            <!--FORM TAMBAH FORM TAMBAH FORM TAMBAH FORM TAMBAH FORM TAMBAH-->
            <div class="col-xs-12" id="tambah-grade form-grade">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Grade Kampus</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama-kampus">Nama Kampus</label>
                            <input type="text" class="form-control" required id="nama-kampus" placeholder="Nama Kampus" value="Universitas Brawijaya">
                        </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" required id="jurusan" placeholder="Jurusan" value="Kedokteran">
                    </div>
                    <div class="form-group">
                        <label for="grade-kampus">Grade</label>
                        <input type="number" class="form-control" min="0" required id="grade-kampus" placeholder="Grade Kampus" value="90">
                    </div>
                </div>
                    <div class="card-action btn-form-submit">
                        <button class="btn btn-primary mr-3">Submit</button>
                    </div>
                </div>
            </div>
            
    </div>
</div>
</div>
@endsection