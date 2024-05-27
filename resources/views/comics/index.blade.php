@extends('layouts.app')

<div class="row">
    @foreach ($comics as $card)
    @include('partials.card')
    @endforeach
</div>