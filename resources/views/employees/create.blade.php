@extends('layouts.app')
@section('employees','active')
@section('content')
<form action="{{route('employees.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label>Jobs</label>
    <select name="job" class="form-control">
      @foreach($jobs as $data)
        <option value="{{$data->id_jobs}}">{{$data->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>Nama Pegawai</label>
    <input type="text" name="name" class="form-control" placeholder="...">
  </div>
  <div class="form-group">
    <label>E-Mail</label>
    <input type="email" name="email" class="form-control" placeholder="...">
  </div>
  <div class="form-group">
    <label>Kontak</label>
    <input type="text" name="phone" class="form-control" placeholder="...">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea name="address" class="form-control" placeholder="..."></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection