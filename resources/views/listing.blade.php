@extends('layout')

@section('content')
@include('partials._search')
<h2 class="font-bold">
  {{$listing['title']}}
</h2>
<p>
  {{$listing['description']}}
</p>
@endsection