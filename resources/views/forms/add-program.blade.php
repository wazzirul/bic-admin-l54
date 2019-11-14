@extends('layout/master')


<!-- judul halaman -->
@section('judul-halaman','Tambah Program Baru')






@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Tambah Program Baru</h4>
            
            <!--FORM TAMBAH FORM TAMBAH FORM TAMBAH FORM TAMBAH FORM TAMBAH-->
            <div class="col-xs-12" id="tambah-program form-program">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Program Baru</div>
                    </div>
                    <div class="card-body">
                        <form action="/bic-admin/tambah-program-proses" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="judul">Judul Program</label>
                                <input type="text" class="form-control" required id="judul" name="judul" placeholder="Judul Program">
                            </div>
                            <div class="form-group">
                                <label for="Deskripsi">Deskripsi</label>
                                <textarea class="form-control deskripsi-program" required id="deskripsi" name="deskripsi" rows="5" placeholder="Deksripsi Program..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga Program</label>
                                <input type="text" required class="form-control" id="harga" name="harga" placeholder="Harga Program">

                                @if($errors->has('harga'))
                                    <div class="text-danger">
                                        {{ $errors->first('harga')}}
                                    </div>
                                @endif  

                            </div>
                            <div class="form-group">
                                <label for="judul">DP Program</label>
                                <input type="text" required class="form-control" id="dp-program" name="dp" placeholder="DP Program">
                            
                                @if($errors->has('dp'))
                                    <div class="text-danger">
                                        {{ $errors->first('dp')}}
                                    </div>
                                @endif 
                            
                            </div>
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