<?php

namespace App\Http\Livewire;

use App\Models\Accounting as ModelsAccounting;
use Livewire\Component;
use Livewire\WithPagination;

class Accounting extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        // TODO: tambah fitur search
        return view('livewire.accounting', [
            'accountings' => $this->accountingPaginate10(),
        ]);
    }

    private function accountingPaginate10()
    {
        return ModelsAccounting::where('deleted_at', null)
            ->where('user_id', auth()->user()->id)
            ->orderBy('date', 'desc')
            ->paginate(10);
    }
}
