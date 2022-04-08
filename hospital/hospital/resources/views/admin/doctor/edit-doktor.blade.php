@extends('layout.admin-master')
@section('content')
<div class="main-content">
	<div class="row">
		<div class="col-md-12 col-lg-12">
			<div class="card card-outline-secondary">
				<h4 class="card-title"><strong>Araç Ekle </strong></h4>
				<div class="card-body">
					{!!BootForm::open([ 'method' => 'POST', 'route' => 'postEditDoktor' ])->enctype("multipart/form-data")!!}
					{!!BootForm::bind($doktor)!!}
					{!!BootForm::hidden('id')!!}
					{!!BootForm::text('Doktor Adı', 'ad_soyad', null, ['required' => '', 'placeholder' => 'Doktor Adı'])!!}
					<label>Birim Adı</label>
					<select name="birim_id" class="form-control"  data-provide="selectpicker" data-live-search="true" data-size="5">
						<option value="">Seçiniz</option>
						@foreach($birim as $br)
						<option value="{{$br->id}}">{{$br->adi}}</option>
						@endforeach
					</select>

					<input type="submit" name="Kaydet" value="Kaydet" class="btn btn-success" style="float: right;">
					{!!BootForm::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

