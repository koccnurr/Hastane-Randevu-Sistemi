@extends('layout.admin-master')
@section('content')
<div class="main-content">
    <div class="row">
    <div class="col-md-12 col-lg-12">
      <div class="card card-outline-secondary">
        <h4 class="card-title"><strong>Doktor Ekle </strong></h4>
        <div class="card-body">
          {!!BootForm::open([ 'method' => 'POST', 'route' => 'postCreateDoktor' ])->enctype("multipart/form-data")!!}
          {!!BootForm::text('Birim Adı', 'adi', null, ['required' => '', 'placeholder' => 'Birim Adı'])!!}
          <input type="submit" name="Kaydet" value="Kaydet" class="btn btn-success" style="float: right;">
          {!!BootForm::close()!!}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

