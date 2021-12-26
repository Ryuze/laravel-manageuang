<div class="me-3">
    <div class="d-flex flex-row-reverse bd-highlight">
        <div>{{ __('blades.Search here') }}</div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">{{ __('blades.Description') }}</th>
                <th scope="col">{{ __('blades.Date') }}</th>
                <th scope="col">{{ __('blades.Total Price') }}</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($accountings as $accounting)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <p class="text-truncate" style="max-width: 20em;">
                            {{ $accounting->description }}
                        </p>
                    </td>
                    <td>{{ \Carbon\Carbon::parse($accounting->date, 'Asia/Jakarta')->isoFormat('dddd, D MMM YYYY') }}</td>
                    <td>Rp. {{ number_format($accounting->total, 0, '', '.') }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('accounting.edit', $accounting->id) }}">{{ __('blades.Edit') }}</a>
                        <a class="btn btn-danger" href="{{ route('accounting.destroy', $accounting->id) }}">{{ __('blades.Delete') }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $accountings->links() }}
</div>
