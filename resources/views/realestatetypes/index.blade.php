@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/realestatetypes/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Rbr</th>
      <th scope="col">Type name</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($realestatetypes as $realestate_type)
    <tr>
      <td><?= $realestate_type->id ?></td>
      <td><?= $realestate_type->name ?></td>
      <td><a href="/realestatetypes/delete/{{ $realestate_type->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection