@extends('layout/master')


<!-- judul halaman -->
@section('judul-halaman','Edit Program')






@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Program</h4>
            
            <!--FORM TAMBAH FORM TAMBAH FORM TAMBAH FORM TAMBAH FORM TAMBAH-->
            <div class="col-xs-12" id="tambah-program form-program">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Program</div>
                    </div>
                    <div class="card-body">
                        <form action="/bic-admin/update-program/{{$program->id}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="judul">Judul Program</label>
                            <input type="text" class="form-control" required id="judul" placeholder="Judul Program" name="judul" value="{{$program->judul}}">
                        </div>
                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi</label>
                            <textarea class="form-control deskripsi-program description" id="deskripsi" name="deskripsi" rows="5">{{$program->deskripsi}}</textarea>
                       
                            @if($errors->has('deskripsi'))
                                <div class="text-danger">
                                    {{ $errors->first('deskripsi')}}
                                </div>
                            @endif  
                       
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Program</label>
                            <input type="type" required class="form-control" id="harga" name="harga" placeholder="Harga Program" value="{{$program->harga}}">
                        
                            @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif
                        
                        </div>
                        <div class="form-group">
                            <label for="judul">DP Program</label>
                            <input type="type" required class="form-control" id="dp-program" name="dp" placeholder="DP Program" value="{{$program->dp}}">
                            
                            @if($errors->has('dp'))
                                <div class="text-danger">
                                    {{ $errors->first('dp')}}
                                </div>
                            @endif 
                        
                        </div>
                        <div class="card-action btn-form-submit">
                            <button class="btn btn-primary mr-3" type="submit">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            
    </div>
</div>
</div>
@endsection
