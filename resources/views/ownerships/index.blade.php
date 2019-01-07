@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/ownerships/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($ownerships as $ownership)
    <tr>
      <td><?= $ownership->id ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection