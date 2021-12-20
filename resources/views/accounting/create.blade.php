@extends('layouts.dashboard')

@section('title', 'Accounting')

@section('content')
    <div class="container-fluid d-flex flex-column ps-0">
        <div class="content-header">
            <h1>Tambah data keuangan</h1>
        </div>
        <div class="content-body">
            <form action="{{ route('accounting.store') }}" method="post">
                @csrf
                <div class="pb-2">
                    <label for="description">Deskripsi</label>
                    <input type="text" class="form-control" style="max-width: 25rem" name="description" id="description"
                        placeholder="Contoh: Belanja bulanan...">
                </div>
                @error('description')
                    <p class="validation-invalid-label">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
                <div class="pb-2">
                    <label for="date">Tanggal</label>
                    <input type="date" class="form-control" style="max-width: 25rem" name="date" id="date">
                </div>
                <div class="pb-2">
                    <label for="total">Total pengeluaran</label>
                    <input type="text" class="form-control" style="max-width: 25rem" name="total" id="total">
                </div>

                <button class="btn btn-primary" type="submit">Save</button>
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
