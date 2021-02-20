@extends('layouts.app')

@section('title', $collection->name)

@section('content')
  <div class="container my-6">
    <p class="title">{{ $collection->name }}</p>
    <a class="button" href="{{ url('/') }}">Back</a>
    <a class="button is-primary" href="{{ url($collection->id . '/add') }}">
      Add
    </a>
    <hr>
    <ul class="my-6">
      @foreach ($collectables as $collectable)
        @component('show.collectable-box', [
          'modal_id' => "modal-delete-$collectable->id",
          'collection' => $collection,
          'collectable' => $collectable
        ])
        @endcomponent
      @endforeach
    </ul>
  </div>
@endsection
