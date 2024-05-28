@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
        @include('partials.card')
        @endforeach
    </div>
</div>
@endsection