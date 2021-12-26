@extends('layouts.dashboard')

@section('style')
    @livewireStyles
@endsection

@section('title', 'Accounting')

@section('content')
<div>
    <a href="{{ route('accounting.create') }}" class="btn btn-success">{{ __('blades.Add Data') }}</a>
    <div class="mt-2">
        <livewire:accounting />
    </div>
</div>
@endsection

@section('script')
    @livewireScripts
@endsection
