@extends('layouts.main')
@section('content')

<div class="container">
  <h2><center>To do list</center></h2>

  <a href="{{url('create')}}"><button type="button" class="btn btn-primary right action_create">Create</button></a>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Target</th>
      <th>Rank</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach($targets as $target)
    <tr>
      <td>{{ $target->target }}</td>
      <td>{{ $target->ranking }}</td>
      <td class="action_td">
          <a href="/edit/{{$target->id}}"><button type="button" class="btn btn-info fa fa-edit"> Edit</button></a>
          <a href="/delete/{{$target->id}}"><button type="button" class="btn btn-danger fa fa-trash" onclick="return confirm('Are You Sure You Want To Delete!');"> Delete</button></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$targets->links()}} <!--For Pagination-->

</div>

@endsection
