@extends('layouts.user')

@section('title', 'Halaman Utama')

@section('breadcrumb')
<li>
    <a href="#">Rsport</a>
</li>
<li class="active">
    Beranda
</li>
@endsection

@section('content')
<div class="col-lg-12">
    <div class="panel panel-border panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Selamat Datang, {{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</h3>
        </div>
        <div class="panel-body">
            <p>
                @if(Auth::user()->id == 1)
                  Titi jahat
                @else
                  {{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }} Baik
                @endif
            </p>
        </div>
    </div>
</div>
@endsection
