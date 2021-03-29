@extends('layouts.app', ['title'=>'Update Post'])
@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-6">
     <div class="card">
                <div class="card-header">Edit PPDB</div>
                <div class="card-body">
                    <form action="/posts/id/update" method="post" autocomplete="off" enctype="multipart/form-data">
                    @method('patch')
                        @csrf
                        
                        @include('daftar.partials.data')
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection