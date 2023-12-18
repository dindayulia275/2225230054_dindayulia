@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" nama="id" id="id" value="{{$students->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" nama="nama" id="nama" value="{{$students->nama}}" class="form-control"></br>
        <label>NIM</label>
        <input type="text" nama="nim" id="nim" value="{{$students->nim}}" class="form-control"></br>
        <label>Jurusan</label>
        <input type="text" nama="jurusan" id="jurusan" value="{{$students->jurusan}}" class="form-control"></br>
        <label>Hobi</label>
        <input type="text" nama="hobi" id="hobi" value="{{$students->hobi}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

@stop
