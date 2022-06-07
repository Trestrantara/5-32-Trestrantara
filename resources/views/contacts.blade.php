@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-blod">Contacts Us</h2>
</div>
<form method="post" action="{{route('contacts.store')}}">
  {{csrf_field()}}
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
  <label for="floatingInput">Nama</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
  <label for="inputemail" class="form-label">Email</label>
</div>
  <div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Tinggalkan pesan disini" id="floatingTextarea" style="height: 100px" name="pesan"></textarea>
  <label for="floatingTextarea">Pesan</label>
</div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
@endsection