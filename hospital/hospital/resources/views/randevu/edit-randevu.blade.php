@extends('layout.master')
@section('content')
<div class="col" style="padding: 36px;">
 <div class="col">
  <div class="card">
    <h4 class="card-title"><strong>Edit Randevu</strong></h4>

    <div class="card-body">
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
@endsection