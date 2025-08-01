<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CopyTrader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CopyTraderController extends Controller
{
    public function index()
    {
        $traders = CopyTrader::all();
        return view('admin.crud.copy-trader', compact('traders'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'min_amount' => 'required|numeric|min:0',
//            'max_amount' => 'nullable|numeric|min:0',
            'win_rate' => 'nullable|string',
            'profit_share' => 'nullable|string',
            'win' => 'nullable|string',
            'loss' => 'nullable|string',
        ]);

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('files', 'public');
            $validatedData['avatar'] = $avatarPath;
        }

        CopyTrader::create($validatedData);

        return redirect()->back()->with('success', "Trader Created Successfully");
    }

     public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'min_amount' => 'nullable|numeric|min:0',
            'max_amount' => 'nullable|numeric|min:0',
            'win_rate' => 'nullable|string',
            'profit_share' => 'nullable|string',
            'win' => 'nullable|string',
            'loss' => 'nullable|string',
        ]);

        $trader = CopyTrader::findOrFail($id);
        if ($request->hasFile('avatar')) {
            if ($trader->avatar) {
                Storage::delete('public/' . $trader->avatar);
            }

            $avatarPath = $request->file('avatar')->store('files', 'public');
            $validatedData['avatar'] = $avatarPath;
        }

        $trader->update($validatedData);

//        $trader->name = $validatedData['name'];
//        $trader->avatar = $validatedData['avatar'] ?? $trader->avatar;
//        $trader->amount = $validatedData['amount'];
//        $trader->win_rate = $validatedData['win_rate'];
//        $trader->profit_share = $validatedData['profit_share'];
//        $trader->win = $validatedData['win'];
//        $trader->loss = $validatedData['loss'];
//        $trader->save();

        return redirect()->back()->with('success', "Trader Updated Successfully");
    }

    public function destroy($id)
    {
        $trader = CopyTrader::findOrFail($id);
        if ($trader->avatar) {
                Storage::delete('public/' . $trader->avatar);
            }
        $trader->delete();
        return redirect()->back()->with('success', "Trader Deleted Successfully");
    }

}
