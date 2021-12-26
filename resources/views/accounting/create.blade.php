@extends('layouts.dashboard')

@section('title', 'Accounting')

@section('content')
    <div class="container-fluid d-flex flex-column ps-0">
        <div class="content-header">
            <h1>{{ __('blades.Add Accounting Data') }}</h1>
        </div>
        <div class="content-body">
            <form action="{{ route('accounting.store') }}" method="post">
                @csrf
                <div class="pb-2">
                    <label for="description">{{ __('blades.Description') }}</label>
                    <input type="text" class="form-control" style="max-width: 25rem" name="description" id="description"
                        value="{{ old('description') }}" placeholder="{{ __('blades.Ex: Monthly shopping') }}">
                </div>
                @error('description')
                    <p class="validation-invalid-label">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
                <div class="pb-2">
                    <label for="date">{{ __('blades.Date') }}</label>
                    <input type="date" class="form-control" style="max-width: 25rem" name="date" id="date"
                        value="{{ old('date') ?: Carbon\Carbon::now()->toDateString() }}">
                </div>
                @error('date')
                    <p class="validation-invalid-label">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
                <div class="pb-2">
                    <label for="total">{{ __('blades.Total Price') }}</label>
                    <input type="text" class="form-control" style="max-width: 25rem" name="total" id="total">
                </div>
                @error('total')
                    <p class="validation-invalid-label">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror

                <button class="btn btn-primary" type="submit">{{ __('blades.Save') }}</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var total = IMask(document.getElementById('total'), {
            mask: 'Rp. num',
            blocks: {
                num: {
                    mask: Number,
                    thousandsSeparator: '.'
                }
            }
        })
    </script>
@endsection
