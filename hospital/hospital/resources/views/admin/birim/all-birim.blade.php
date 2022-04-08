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
            <th>Birim Adı</th>
            <th class="text-center w-100px">İşlemler</th>
          </tr>
        </thead>
        <tbody>
          @foreach($birim as $v)
          <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->adi}}</td>

            <td class="text-right table-actions">
              <a class="table-action hover-primary" href="{{route('getEditBirim',array('id'=>$v->id))}}"><i class="ti-pencil"></i></a>
              <a class="table-action hover-danger" href="{{route('getDeleteBirim',array('id'=>$v->id))}}"><i class="ti-trash"></i></a>
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