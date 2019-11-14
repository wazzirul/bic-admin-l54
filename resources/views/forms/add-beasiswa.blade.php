@extends('layout/master')


<!-- judul halaman -->
@section('judul-halaman','Tambah Beasiswa')







@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Beasiswa</h4>
            
            <!--FORM TAMBAH FORM TAMBAH FORM TAMBAH FORM TAMBAH FORM TAMBAH-->
            <div class="col-xs-12" id="tambah-beasiswa form-beasiswa">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Beasiswa Baru</div>
                    </div>
                    <div class="card-body">
                    <form action="/bic-admin/store-beasiswa" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="judul">Judul Beasiswa</label>
                            <input type="text" class="form-control" name="judul" required id="judul" placeholder="Judul Beasiswa">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Subtitle Beasiswa</label>
                            <input type="text" class="form-control" name="subtitle" required id="subtitle" placeholder="Subtitle Beasiswa">
                        </div>
                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi Beasiswa</label>
                            <textarea class="form-control deskripsi-beasiswa" name="deskripsi" required id="deskripsi" rows="5" placeholder="Deskripsi Beasiswa"></textarea>
                        </div>
                        <div class="card-action btn-form-submit">
                            <button class="btn btn-primary mr-3">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            
    </div>
</div>
</div>
@endsection