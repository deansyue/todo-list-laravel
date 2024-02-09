@extends('layouts.main')

@section('content')
  <a class="btn btn-info mb-3" href="/todos">home</a>
  <form class="d-inline" action="/todos/{{ $todo->id }}" method="POST">
    @csrf
    @method('DELETE')
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <input type="checkbox"name="isDone" @if ($todo->is_done) checked @endif disabled />
        </div>
      </div>
      <input class="form-control" type="text" placeholder="todoName" name="name" value="{{ $todo->name }}"
        disabled />
      <div class="input-group-prepend">
        <a class="btn btn-success" href="/todos/{{ $todo->id }}/edit">edit</a>
        <button class="btn btn-danger" type="submit">delete</button>
      </div>
    </div>
  </form>
@endsection
