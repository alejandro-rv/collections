@extends('layouts.app')

@section('title', 'Collections')

@section('content')
  <div class="container my-6">
    <p class="title">Collections</p>
    <a class="button is-primary" href="{{ url('/create') }}">Create</a>

    <ul class="my-6">
      @foreach ($collections as $collection)
        @component('index.collection-box', [ 'collection' => $collection ])
        @endcomponent
      @endforeach
    </ul>
  </div>

  <script>
    function openDeleteModal(id) {
      $(`#modal-delete-${id}`).addClass('is-active')
    }

    function closeDeleteModal(id) {
      $(`#modal-delete-${id}`).removeClass('is-active')
    }
  </script>
@endsection
