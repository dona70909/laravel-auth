@extends('layouts.app')

@section('header-content')
    @include('partials.header.header_nav')
@endsection

@section('content')
    @include('partials.main.insert_post_edit')
@endsection