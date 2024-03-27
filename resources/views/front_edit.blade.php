@extends('front_master')
@section('content')
    <div class="row">
        <div class="col-1 p-0">
            @include('partials.sidebar')
        </div>
        <div class="col-11 p-0">
            @include('partials.navbar')
            @include('partials.edit')
        </div>
    </div>
@endsection
