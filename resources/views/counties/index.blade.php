@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/counties/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Continent</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($counties as $county)
    <tr>
      <td><?= $county->id ?></td>
      <td><?= $county->county_name ?></td>
      <td><?= $county->continent->continent_name?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection