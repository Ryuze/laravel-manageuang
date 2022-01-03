<?php

namespace App\Http\Controllers;

use App\Http\Requests\Accounting\AccountingRequest;
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
    public function store(AccountingRequest $request)
    {
        $userId = Auth::user()->id;

        Accounting::create($request->validated() + [
            'user_id' => $userId,
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
        return view('accounting.edit', compact('accounting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function update(AccountingRequest $request, Accounting $accounting)
    {
        Accounting::where('id', $accounting->id)
            ->update($request->except(['_token', '_method']));

        Session::flash('status', 'Data berhasil diubah');
        return redirect()->route('accounting.index');
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
}
