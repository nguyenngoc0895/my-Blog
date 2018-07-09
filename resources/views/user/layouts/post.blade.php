@extends('user.layouts.app')

@section('content')
    {!! htmlspecialchars_decode($post->body) !!}
@endsection

