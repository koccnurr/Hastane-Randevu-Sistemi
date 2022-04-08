
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive admin dashboard and web application ui kit. ">
	<meta name="keywords" content="login, signin">

	<title>Login Page 3 &mdash; TheAdmin</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

	<!-- Styles -->
	<link href="../assets/css/core.min.css" rel="stylesheet">
	<link href="../assets/css/app.min.css" rel="stylesheet">
	<link href="../assets/css/style.min.css" rel="stylesheet">

	<!-- Favicons -->
	<link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
	<link rel="icon" href="../assets/img/favicon.png">
</head>



<body>



	<div class="main-content">

        <div class="topbar-right">
            <ul class="topbar-btns">
                <!-- Notifications -->
                <li class="dropdown d-none d-md-block">
                    <span class="topbar-btn " data-toggle="dropdown"><i class="ti-user"></i> {{Sentinel::getUser()->first_name}} {{Sentinel::getUser()->last_name}}</span>
                    
                </li>
                <!-- END Notifications -->
            </ul>
            <div class="topbar-divider"></div>
        </div>

		<div class="row">  

			<div class="col-md-6 col-lg-6">
				<div class="card card-outline-secondary">
					<h4 class="card-title"><strong>Randevu Sorgula </strong></h4>
					<div class="card-body">
						<br>

						<form class="form-type-material" action="{{route('getRandevu')}}" method="GET">
							@csrf
							<div class="form-group">
								<label  class="form-label">Randevu Tarihi:</label>
								<input type="date" class="form-control"  name="randevu_tarihi" value="{{@$request->randevu_tarihi}}" required="required">
							</div>

							<div class="form-group">
								<label>Birim Adı</label>
								<select name="birim_id" class="form-control" id="birim"  data-provide="selectpicker" data-live-search="true" data-size="5" onchange="DoktorGetir(this.value)">
									<option value="">Seçiniz</option>
									@foreach($birim as $br)
									<option value="{{$br->id}}" > {{$br->adi}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>Doktor Adı</label>
								<select name="doktor_id" class="form-control" id="doktor"  data-provide="selectpicker" data-live-search="true" data-size="5">
									<option value="">Seçiniz</option>
									@foreach($birim as $br)
									@foreach($br->doktor as $dr)
									<option data-option ="{{$br->id}}" value="{{$dr->id}}" style="text-transform: uppercase;">
										{{$dr->ad_soyad}}

									</option>
								<!--	@foreach($doktor as $dr)
									<option value="{{$dr->id}}" @if($request->doktor_id == $dr->id) selected="selected" @endif > {{$dr->ad_soyad}}</option>
									@endforeach-->
									@endforeach
									@endforeach

								</select>
							</div>

							<div class="form-group">
								<button class="btn btn-bold btn-block btn-primary" type="submit">Randevu Al</button>
							</div>
						</form>


						<hr class="w-30px">



					</div>
				</div>

			</div>
			<div class="col-sm-6 col-lg-6">
				<div class="card card-outline-secondary">
					<h4 class="card-title"><strong>Lütfen Saat Seçiniz </strong></h4>
					<div class="card-body">
						<form action="{{route('postRandevu')}}" method="POST">
							@csrf
							<input type="hidden" name="birim_id" value="{{$request->birim_id}}">
							<div class="form-group">
								<label>Randevu Tarihi Seçiniz</label>


								@if(isset($request->randevu_tarihi))

								@if($pazar == FALSE)	
									<input type="hidden" name="ad_soyad" value="{{$onuser->id}}"> 


								<select name="randevu_tarihi" class="form-control"  data-provide="selectpicker" data-live-search="true" data-size="5">
									<option value="">Seç </option>

									@if($cumartesi == TRUE)
									@for ($i = $baslangictarihi; $i < $cumartesibitis; $i->addMinutes(20))

									@if($randevular->where('randevu_tarihi',$i)->first() == FALSE)
									<option value="{{$i}}">{{$i}}</option>
									@endif

									@endfor


									@else





									@for($i = $baslangictarihi; $i < $bitistarihi; $i->addMinutes(20))
									@if($i < $oglearasibaslangic or $i > $oglearasibitis)
									@if($randevular->where('randevu_tarihi',$i)->first() == FALSE)
									<option value="{{$i}}">{{$i}}</option>
									@endif

									@endif
									@endfor






									@for ($i = $baslangictarihi; $i < $bitistarihi; $i->addMinutes(20))

									@if($i < $oglearasibaslangic or $i > $oglearasibitis )


									@if($randevular->where('randevu_tarihi',$i)->first() == FALSE)
									<option value="{{$i}}">{{$i}}</option>
									@endif

									@endif



									@endfor

									@endif


								</select>

							</div>


							@else
							Pazar günü kapalıyız. 
							@endif



							@endif
							<div class="form-group">
								<button class="btn btn-bold btn-block btn-primary" type="submit">Randevu Al</button>
							</div>

						</form>
					</div>
					 <table class="table table-separated">
        <thead>
          <tr>
            <th>#</th>
            <th>Doktor Adı</th>
            <th>Birim Adı</th>
            <th>Randevu Tarihi</th>
          
      

            <th class="text-center w-100px">İşlemler</th>
          </tr>
        </thead>
        <tbody>
          @foreach($hastarandevu as $d)
          <tr>
            <td>{{$d->id}}</td>

            <td>{{@$d->doktor_id}}</td>
            <td>{{@$d->birim_id}}</td>
            <td>{{@$d->randevu_tarihi}}</td>





          </tr>
        </tbody>
        @endforeach

      </table>
				</div>

			</div>
		</div>
	</div>
	<script type="text/javascript">


		var sel1 = document.querySelector('#birim');
		var sel2 = document.querySelector('#doktor');
		var options2 = sel2.querySelectorAll('option');


		function DoktorGetir(selValue) {

			sel2.innerHTML = ' ';
			for(var i = 0; i < options2.length; i++) {
				if(options2[i].dataset.option === selValue) {
					sel2.appendChild(options2[i]);
				}
			}
		}
		DoktorGetir(sel1.value);
	</script>



	<!-- Scripts -->
	<script src="../assets/js/core.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
	<script src="../assets/js/script.min.js"></script>

</body>
</html>

