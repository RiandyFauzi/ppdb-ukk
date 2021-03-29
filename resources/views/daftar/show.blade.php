@extends('layouts.app')

@section('content')


<div class="container">
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Selamat Datang {{Auth::user()->name}}</h1>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Buat Tugas</h4>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="card">
                                        <div class="section-title">Table Tugas</div>
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">id</th>
                                                        <th scope="col">nis</th>
                                                        <th scope="col">nama</th>
                                                        <th scope="col">jenis_kelamin</th>
                                                        <th scope="col">tempat_lahir</th>
                                                        <th scope="col">tgl_lahir</th>
                                                        <th scope="col">alamat</th>
                                                        <th scope="col">asal_sekolah</th>
                                                        <th scope="col">kelas</th>
                                                        <th scope="col">jurusan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($daftar as $daftar)
                                                    <tr>
                                                        <td>{{$daftar->id}}</td>
                                                        <td>{{$daftar->nis}}</td>
                                                        <td>{{$daftar->nama}}</td>
                                                        <td>{{$daftar->jenis_kelamin}}</td>
                                                        <td>{{$daftar->tempat_lahir}}</td>
                                                        <td>{{$daftar->tgl_lahir}}</td>
                                                        <td>{{$daftar->alamat}}</td>
                                                        <td>{{$daftar->asal_sekolah}}</td>
                                                        <td>{{$daftar->kelas}}</td>
                                                        <td>{{$daftar->jurusan}}</td>
                                                        <td>
                                                            <a class="btn btn-primary" href="/daftar/edit/{{ $daftar->id }}">Edit</a>
                                                            <form action="/daftar/delete/{{ $daftar->id }}" method="post">
                                                                @csrf
                                                                @method("delete")
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <canvas id="myChart" height="158"></canvas>
</div>
</div>
</div>
</div>

@endsection