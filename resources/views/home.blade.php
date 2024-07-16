@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    {{-- @include('partials.register') --}}
    @include('cong-viec.list')
@endsection
