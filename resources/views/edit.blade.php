@extends('layouts.main')

@section('content')
  <a class="btn btn-info mb-3" href="/todos">Home</a>

  <form class="d-lnline" action="/todos/{{ $todo->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <input type="checkbox" name="isDone" @if ($todo->is_done == true) checked @endif />
        </div>
      </div>

      <input class="form-control" type="text" placeholder="pleace enter todo name" name="name"
        value="{{ old('name') ? old('name') : $todo->name }}" />

      <div class="input-group-append">
        <button class="btn btn-success" type="submit">Save</button>
      </div>

    </div>
  </form>
@endsection
