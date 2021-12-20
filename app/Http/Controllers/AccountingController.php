<?php

namespace App\Http\Controllers;

use App\Http\Requests\Accounting\AccountingCreateRequest;
use App\Models\Accounting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AccountingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO: bikin tampilan table view nya
        return view('accounting.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accounting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountingCreateRequest $request)
    {
        $userId = Auth::user()->id;
        $total = $this->toNumber($request->total);

        $accounting = Accounting::create([
            'user_id' => $userId,
            'description' => $request->description,
            'date' => $request->date,
            'total' => $total
        ]);

        Session::flash('status', 'Data berhasil ditambahkan');
        return redirect()->route('accounting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function show(Accounting $accounting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function edit(Accounting $accounting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accounting $accounting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accounting $accounting)
    {
        //
    }

    private function toNumber($total)
    {
        return (int)str_replace('.', '', substr($total, 4));
    }
}