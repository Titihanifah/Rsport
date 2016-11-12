@extends('layouts.user')

@section('title', 'Isi Saldo')

@section('breadcrumb')
<li>
    <a href="{{url('/')}}">Rsport</a>
</li>
<li class="active">
    Isi Saldo
</li>
@endsection

@section('content')
  <div class="col-sm-12">
    <div class="card-box">
    <h4 class="m-t-0 header-title"><b>Tambah Saldo</b></h4>
    <p class="text-muted m-b-30 font-13">
    Form ini digunakan untuk menambah deposit saldo Anda
    </p>
    <div class="row">
      <div class="col-md-6">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/balance') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-md-2 control-label">Jumlah Saldo</label>
                <div class="col-md-10">
                    <input name="amount" type="text" class="form-control" placeholder="Masukkan jumlah saldo yang diinginkan">
                </div>
            </div>
            <div class="button-list pull-right">
              <button type="submit" class="btn btn-default waves-effect waves-light">Tambah Saldo</button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          @if($tenggang->count() >= 1)
          <div class="panel panel-border panel-primary">
              <div class="panel-heading">
                  <h3 class="panel-title">Lorem ipsum</h3>
              </div>
              <div class="panel-body">
                  <p>
                      Dah selesai nich! Silahkan transfer ke rekening xxx-xxx-xxx sebesar Rp. {{ $tenggang[0]->amount }} dan lakukan konfirmasi pembayaran secepatnya!
                  </p>
              </div>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>




@endsection
