@extends('layouts.user')

@section('title', 'Konfirmasi Pembayaran')

@section('breadcrumb')
<li>
    <a href="{{url('/')}}">Rsport</a>
</li>
<li class="active">
  Konfirmasi Pembayaran
</li>
@endsection

@section('content')
<div class="col-sm-12">
  <div class="card-box">
  <h4 class="m-t-0 header-title"><b>Konfirmasi Pembayaran/b></h4>
  <p class="text-muted m-b-30 font-13">
  Form ini digunakan untuk konfirmasi pembayaran saldo Anda
  </p>
  <div class="row">
    <div class="col-md-6">
        <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/paymentconfirmation') }}">
          {{ csrf_field() }}
          <div class="form-group">
              <label class="col-md-2 control-label">Nama Pengirim</label>
              <div class="col-md-10">
                  <input name="sender_name" type="text" class="form-control" placeholder="Masukkan nama pengirim">
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-2 control-label">Nama Bank</label>
              <div class="col-md-10">
                  <input name="bank" type="text" class="form-control" placeholder="Masukkan nama bank">
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-2 control-label">Jumlah Saldo</label>
              <div class="col-md-10">
                  <input name="amount" type="text" class="form-control" placeholder="Masukkan jumlah saldo yang diinginkan">
              </div>
          </div>
          <div class="form-group m-b-0">
              <label class="col-md-2 control-label">Bukti transfer</label>
              <div class="col-md-10">
                  <input name="proof" type="file" class="filestyle" data-placeholder="No file">
              </div>
          </div>
            <div class="button-list pull-right">
              <button type="submit" class="btn btn-default waves-effect waves-light">Konfirmasi</button>
            </div>
          </form>
          </div>
          <div class="col-md-6">
            @if(Session::has('success'))
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Upload berhasil</h3>
                </div>
                <div class="panel-body">
                    <p>
                        Silahkan tunggu admin kami melakukan verifikasi terhadap permintaan anda. Permintaan anda akan diproses dalam waktu maks 1x24 jam.
                    </p>
                </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>

@endsection
