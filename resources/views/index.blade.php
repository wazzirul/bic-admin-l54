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
                    <div class="card-body">
                            @if($message = Session::get('sukses'))
                            <div class="alert alert-success alert-block">
                                <button class="close" type="button" data-dismiss="alert">x</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            <br/>
                            @endif

                            @foreach($pengumuman as $p)
                            <div class="table-responsive">
                                    <table id="pengumuman" class="table mb-5 table-striped table-bordered" style="width:100%" role="grid" aria-describedby="pengumuman_info">
                                        <thead class="bg-danger">
                                            <tr>
                                            <td colspan="2" class="text-center text-white updated">Pengumuman Terakhir Update</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <tr role="row" class="odd">
                                            <td>Judul</td>
                                            <td> {{ $p->judul}} </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>Pesan Pengumuman</td>					
                                            <td> {{ $p->pesan}} </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            
                            @endforeach

                                <!-------------------------------------------------------------------------------------->
                                <!-- BEASISWA BEASISWA BEASISWA BEASISWA BEASISWA BEASISWA BEASISWA BEASISWA -->
                            @foreach($beasiswa as $b)
                            <div class="table-responsive">
                                    <table id="beasiswa" class="table mb-5 table-striped table-bordered" style="width:100%" role="grid" aria-describedby="beasiswa_info">
                                        <thead class="bg-primary">
                                            <tr>
                                            <td colspan="2" class="text-center updated text-white">Beasiswa Terakhir Update</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <tr role="row" class="odd">
                                            <td>Judul</td>
                                            <td> {{ $b->judul}} </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>Subtitle</td>					
                                            <td> {{ $b->subtitle}} </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>Deskripsi</td>			
                                            <td> {{ $b->deskripsi}} </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            
                            @endforeach

                            <!-------------------------------------------------------------------------------------->
                                <!-- PROGRAM PROGRAM PROGRAM PROGRAM PROGRAM PROGRAM PROGRAM PROGRAM -->
                                @foreach($program as $pg)
                                <div class="table-responsive">
                                        <table id="program" class="table mb-5 table-striped table-bordered" style="width:100%" role="grid" aria-describedby="program_info">
                                            <thead class="bg-warning">
                                                <tr>
                                                <td colspan="2" class="text-center updated text-white">Program Terakhir Update</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            <tr role="row" class="odd">
                                                <td>Judul</td>
                                                <td> {{ $pg->judul}} </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>Deskripsi</td>					
                                                <td> {{ $pg->deskripsi}} </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>Harga</td>			
                                                <td> {{ $pg->harga}} </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                
                                @endforeach
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection