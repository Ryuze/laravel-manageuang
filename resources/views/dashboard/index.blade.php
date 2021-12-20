@extends('layouts.dashboard')

@section('title', 'Home')

@section('content')
<a href="{{ route('accounting.index') }}" class="btn btn-success">Account</a>
    rencananya disini ada graphical data pengeluaran dalam satu bulan ini
@endsection