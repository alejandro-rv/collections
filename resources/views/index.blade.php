@extends('layouts.app')

@section('title', 'Collections')

@section('content')
  <div class="container my-6">
    <p class="title">Collections</p>
    <a class="button is-primary" href="{{ url('/create') }}">Create</a>

    <ul class="my-6">
      @foreach ($collections as $collection)
        @component('index.collection-box', [
          'modal_id' => "modal-delete-$collection->id",
          'collection' => $collection
        ])
        @endcomponent
      @endforeach
    </ul>
  </div>
@endsection
