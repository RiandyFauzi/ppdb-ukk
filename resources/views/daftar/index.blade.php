@extends('layouts.app', ['title'=>'Update Post'])
@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar PPDB </div>
              
                <div class="card-body">
                    <form action="{{ route('daftar.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        @include('daftar.partials.data', ['submit' => 'Create'])

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection