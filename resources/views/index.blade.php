@extends('layouts.main')

@section('content')
  <a href="/todos/create" class="btn btn-info mb-3">Create</a>
  <ul class="list-group">
    @foreach ($todos as $todo)
      <li class="list-group-item">
        <div class="row">
          <div class="col-auto mr-auto">
            <input type="checkbox" class="align-middle" name="isDone" @if ($todo->is_done == true) checked @endif disabled />
            <h4 class="d-inline align-middle">{{ $todo->name }}</h4>
          </div>

          <div class="col-auto">
            <a href="/todos/{{ $todo->id }}" class="btn btn-secondary">detail</a>
            <a href="/todos/{{ $todo->id }}/edit" class="btn btn-success">edit</a>
            <form action="/todos/{{ $todo->id }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">delete</button>
            </form>
          </div>
        </div>
      </li>
    @endforeach
  </ul>
@endsection
