@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/landregisters/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">City Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($land_registers as $land_register)
    <tr>
      <td><?= $land_register->id ?></td>
      <td><?= $land_register->name ?></td>
      <td><?= $land_register->city->city_name ?></td>
      <td><a href="/landregisters/delete/{{ $land_register->id }}" class="btn btn-sm btn-danger">X</a></td>

    </tr>
  @endforeach
  </tbody>
</table>

@endsection