@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/continents/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ime</th>
      <th scope="col">Broj država</th>
      <th scope="col">Naziv države nativno</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($continents as $continent)
    <tr>
      <td><?= $continent->id ?></td>
      <td><?= $continent->continent_name ?></td>
      <td><?= $continent->number_of_countries ?></td>
      <td><?= $continent->native_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection