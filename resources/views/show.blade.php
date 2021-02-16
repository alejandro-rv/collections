@extends('layouts.app')

@section('title', $collection->name)

@section('content')
  <div class="container my-6">
    <p class="title">{{ $collection->name }}</p>
    <a class="button" href="javascript:history.back()">Back</a>
    <a class="button is-primary" href="{{ url($collection->id . '/add') }}">
      Add
    </a>
    <hr>
  </div>
@endsection
