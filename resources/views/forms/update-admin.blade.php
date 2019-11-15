@extends('layout/master')


<!-- judul halaman -->
@section('judul-halaman','Update Profil Admin')










@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Profil Admin</h4>
            
            <!--FORM PROFIL ADMIN FORM PROFIL ADMIN FORM PROFIL ADMIN FORM PROFIL ADMIN FORM PROFIL ADMIN-->
            <div class="col-xs-12" id="form-admin">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Update Data Admin</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" required id="username-admin" placeholder="Username" value="Pyke SP">
                        </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" class="form-control" required id="password-admin" placeholder="Password" value="******************">
                    </div>
                </div>
                    <div class="card-action btn-form-submit">
                        <button type="submit" class="btn btn-primary mr-3">Submit</button>
                    </div>
                </div>
            </div>
            
    </div>
</div>
</div>
@endsection
