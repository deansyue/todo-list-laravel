@extends('layouts.main')

@section('content')
  <a class="btn btn-info mb-3" href="/todos">Home</a>

  <form class="d-inline" action="/todos" method="POST">
    <div class="input-group">
      <input class="form-control" type="text" placeholder="pleace enter todo name" name="name"
        value="{{ old('name') }}" />

      <div class="input-group-append">
        <button class="btn btn-success" type="submit">Save</button>
      </div>
    </div>
  </form>
@endsection
