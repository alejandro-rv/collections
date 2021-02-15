@extends('layouts.app')

@section('title', 'Edit ' . $collection->name)

@section('content')
  <div class="container my-6">
    <p class="title">Edit collection</p>
    <a class="button" href="javascript:history.back()">Back</a>

    @if ($errors->any())
      <article class="my-5 message is-warning">
        <div class="message-header">
          <p>Validation error</p>
          <button class="delete"></button>
        </div>
        <div class="message-body">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      </article>
    @endif

    <form class="my-5" method="post" action="{{ url($collection->id) }}">
      @method('put')
      @csrf

      <div class="field">
        <label class="label">Name</label>
        <div class="control">
          <input
            class="input"
            name="name"
            value="{{ $collection->name }}"
            placeholder="Type a new name for the collection"
            required
          >
        </div>
      </div>

      <div class="my-5 field is-grouped">
        <div class="control">
          <button class="button is-primary">Save</button>
        </div>
      </div>
    </form>
  </div>
@endsection
