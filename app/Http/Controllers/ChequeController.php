<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChequeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->view('cheque.index', [
            'cheques' => Cheque::orderBy('cheque_id', 'desc')->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cheque.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'account_id' => ['required', 'string', 'max:255'],
			'bank'       => ['required', 'string', 'max:255'],
			'name'       => ['required', 'string', 'max:255'],
            'amount'     => ['required', 'string', 'max:255'],
        ]);

        $cheque = Cheque::create([
            'cheque_account_id'   => $validatedData['account_id'],
            'cheque_bank'         => $validatedData['bank'],
            'cheque_name'         => $validatedData['name'],
			'cheque_amount'       => $validatedData['amount'],
        ]);

        return response()->view('cheque.show', ['cheque' => $cheque]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->view('cheque.show', [
            'cheque' => Cheque::findOrfail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->view('cheque.edit', [
            'cheque' => Cheque::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cheque = Cheque::findOrFail($id);

        $validatedData = $request->validate([
            'account_id' => ['required', 'string', 'max:255'],
			'bank'       => ['required', 'string', 'max:255'],
			'name'       => ['required', 'string', 'max:255'],
            'amount'     => ['required', 'string', 'max:255'],
        ]);

        $cheque->update([
            'cheque_account_id'   => $validatedData['account_id'],
            'cheque_bank'         => $validatedData['bank'],
            'cheque_name'         => $validatedData['name'],
			'cheque_amount'       => $validatedData['amount'],
        ]);

        return response()->view('cheque.show', ['cheque' => $cheque]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cheque = Cheque::findOrFail($id);
        $cheque->delete();

        session()->flash('status', [
            'alert-success',
            "$cheque->name $cheque->amount cheque (#$cheque->id) has been deleted.",
        ]);

        return redirect()->route('cheques.index');
    }
}
