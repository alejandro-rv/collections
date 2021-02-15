@extends('layouts.app')

@section('title', 'Collections')

@section('content')
  <div class="container my-6">
    <p class="title">Collections</p>
    <a class="button is-primary" href="{{ url('/create') }}">Create</a>

    <ul class="my-6">
      @foreach ($collections as $collection)
        <li class="box">
          <p class="subtitle">{{ $collection->name }}</p>
          <hr>
          <a class="mr-3" href="{{ url($collection->id) }}">
            Show
          </a>
          <a href="{{ url($collection->id . '/edit') }}">
            Edit
          </a>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
