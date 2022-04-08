@extends('layout.master')
@section('content')

<div class="container-fluid">
		
	<div class="row">
		<div class="col-sm-4">
			<form action="{{route('getRandevu')}}" method="GET">
				@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Randevu Tarihi:</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="randevu_tarihi" value="{{@$request->randevu_tarihi}}" required="required">
  </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Bölüm:</label>
    <select class="form-control" name="bolum">
     <option value="1">Kardiyoloji</option>

    </select>
  </div>
  
 
  <button type="submit" class="btn btn-primary">Randevu Al</button>
</form>
		</div>

		<div class="col-sm-8">

			@if(isset($request->randevu_tarihi))

			@if($pazar == FALSE)

@if($cumartesi == TRUE)
@for ($i = $baslangictarihi; $i < $cumartesibitis; $i->addMinutes(20))
    Cumartesi {{ $i }} </br>

@endfor


@else




<select>
	<option value="">Seç </option>
	@for($i = $baslangictarihi; $i < $bitistarihi; $i->addMinutes(20))
	@if($i < $oglearasibaslangic or $i > $oglearasibitis)
		<option value="{{$i}}">{{$i}}</option>


	@endif
	@endfor



</select>


@for ($i = $baslangictarihi; $i < $bitistarihi; $i->addMinutes(20))

@if($i < $oglearasibaslangic or $i > $oglearasibitis )


   Diğer günler {{ $i }} </br>

@endif



@endfor

@endif


			@else
			Pazar günü kapalıyız. 
			@endif



			@endif
			
		</div>
	</div>
</div>

@endsection