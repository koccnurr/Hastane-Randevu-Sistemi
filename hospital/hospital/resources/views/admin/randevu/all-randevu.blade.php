@extends('layout.admin-master')
@section('content')
<div class="col" style="padding: 36px;">
 <div class="col">
  <div class="card">
    <h4 class="card-title"><strong>Row actions</strong></h4>

    <div class="card-body">
      <table class="table table-separated">
        <thead>
          <tr>
            <th>#</th>
              <th>Hasta Adı Soyadı</th>
            <th>Doktor Adı</th>
            <th>Birim Adı</th>
            <th>Randevu Tarihi</th>
          
      

            <th class="text-center w-100px">İşlemler</th>
          </tr>
        </thead>
        <tbody>
          @foreach($yenirandevu as $d)
          <tr>
            <td>{{$d->id}}</td>
            <td>{{@$d->user->first_name}} {{@$d->user->last_name}}</td>

            <td>{{@$d->doktor->ad_soyad}}</td>
            <td>{{@$d->birim->adi}}</td>
            <td>{{@$d->randevu_tarihi}}</td>
<td>
  <a href="{{route('getEditRandevu',array('id'=>$d->id))}}" class="btn btn-sm btn-warning">Düzenle</a>
</td>




          </tr>
        </tbody>
        @endforeach

      </table>
    </div>
  </div>
</div>
</div>
@endsection