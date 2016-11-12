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
<div class="row">
  <div class="col-sm-12">
    <div class="card-box">
    <h4 class="m-t-0 header-title"><b>Input Types</b></h4>
    <p class="text-muted m-b-30 font-13">
    Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
    </p>
    <div class="row">
      <div class="col-md-6">
          <form class="form-horizontal" role="form">
              <div class="form-group">
                  <label class="col-md-2 control-label">Text</label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" value="Some text value...">
                  </div>
              </div>
          <div class="form-group">
              <label class="col-md-2 control-label" for="example-email">Email</label>
              <div class="col-md-10">
                  <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-2 control-label">Password</label>
              <div class="col-md-10">
                  <input type="password" class="form-control" value="password">
              </div>
          </div>

          <div class="form-group">
              <label class="col-md-2 control-label">Placeholder</label>
              <div class="col-md-10">
                  <input type="text" class="form-control" placeholder="placeholder">
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-2 control-label">Text area</label>
              <div class="col-md-10">
                  <textarea class="form-control" rows="5"></textarea>
              </div>
          </div>




@endsection
