@extends('include.master')


@section('title','Inventory | Dashboard')


@section('page-title','Dashboard')


@section('content')
            <info-box></info-box>

@endsection


@push('script')

<script type="text/javascript" src="{{ asset('/js/dashboard.js') }}"></script>

@endpush