@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/municipals/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($municipals as $municipal)
    <tr>
      <td><?= $municipal->id ?></td>
      <td><?= $municipal->municipal_name ?></td>
      <td><?= $municipal->county->county_name ?></td>
      <td><a href="/municipals/delete/{{ $municipal->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection