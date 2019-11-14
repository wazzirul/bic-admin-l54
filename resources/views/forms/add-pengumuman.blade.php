@extends('layout/master')


<!-- judul halaman -->
@section('judul-halaman','Tambah Pengumuman')










@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Pengumuman</h4>
            
            <!--FORM TAMBAH FORM TAMBAH FORM TAMBAH FORM TAMBAH FORM TAMBAH-->
            <div class="col-xs-12" id="tambah-pengumuman form-pengumuman">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Pengumuman Baru</div>
                    </div>
                    <div class="card-body">
                    <form action="/bic-admin/store-pengumuman" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="judul">Judul Pengumuman</label>
                            <input type="text" class="form-control" required id="judul" name="judul" placeholder="Judul pengumuman">
                        </div>
                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi Pengumuman</label>
                            <textarea class="form-control deskripsi-pengumuman" required id="deskripsi" rows="5" placeholder="Deskripsi Pengumuman..." name="pesan"></textarea>
                        </div>
                    
                        <div class="card-action btn-form-submit">
                            <button type="submit" class="btn btn-primary mr-3">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            
    </div>
</div>
</div>
@endsection