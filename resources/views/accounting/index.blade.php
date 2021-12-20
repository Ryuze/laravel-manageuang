@extends('layouts.dashboard')

@section('style')
    @livewireStyles
@endsection

@section('title', 'Accounting')

@section('content')
    <a href="{{ route('accounting.create') }}" class="btn btn-success">Add data</a>
    disini bagian index accounting
@endsection

@section('script')
    @livewireScripts
@endsection
