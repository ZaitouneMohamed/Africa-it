@extends('landing.layouts.master')

@section('content')
    <h1 class="error_text">403 , {{ $exception->getMessage() ?: 'Forbidden' }}</h1>
@endsection
