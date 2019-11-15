@extends('layout/master')


<!-- judul halaman -->
@section('judul-halaman','Edit Pengumuman')











@section('content')

<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Pengumuman</h4>
            
            <!--FORM TAMBAH FORM TAMBAH FORM TAMBAH FORM TAMBAH FORM TAMBAH-->
            <div class="col-xs-12" id="edit-pengumuman form-pengumuman">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Pengumuman</div>
                    </div>
                    <div class="card-body">
                    <form action="/bic-admin/update-pengumuman/{{$pengumuman->id}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="judul">Judul Pengumuman</label>
                            <input type="text" class="form-control" required id="judul" name="judul" value="{{$pengumuman->judul}}" placeholder="Judul pengumuman">
                        </div>
                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi Pengumuman</label>
                            <textarea class="form-control deskripsi-pengumuman description" id="deskripsi" name="pesan" rows="5">{{$pengumuman->pesan}}</textarea>
                        
                        
                            @if($errors->has('pesan'))
                                <div class="text-danger">
                                    {{ $errors->first('pesan')}}
                                </div>
                            @endif 

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
