@extends('layout/master')


<!-- judul halaman -->
@section('judul-halaman','Edit Beasiswa')







@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Beasiswa</h4>
            
            <!--FORM TAMBAH FORM TAMBAH FORM TAMBAH FORM TAMBAH FORM TAMBAH-->
            <div class="col-xs-12" id="tambah-beasiswa form-beasiswa">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Beasiswa</div>
                    </div>
                    <div class="card-body">
                    <form action="/bic-admin/update-beasiswa/{{$beasiswa->id}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="judul">Judul Beasiswa</label>
                            <input type="text" class="form-control" required id="judul" name="judul" placeholder="Judul Beasiswa" value="{{$beasiswa->judul}}">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Subtitle Beasiswa</label>
                            <input type="text" class="form-control" name="subtitle" required id="subtitle" value="{{ $beasiswa->subtitle }}" placeholder="Subtitle Beasiswa">
                        </div>
                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi Beasiswa</label>
                            <textarea class="form-control deskripsi-beasiswa" required name="deskripsi" id="deskripsi" rows="5">{{$beasiswa->deskripsi}}</textarea>
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