<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BankController extends Controller
{
    public function accountIndex()
    {
        return view('account.index', ['accounts' => Account::latest()->paginate(10)]);
    }

    public function transaction(Request $request)
    {
        $formField = $request->validate([
            'from' => ['required', 'int'],
            'to' => ['required', 'int'],
            'amount' => ['required', 'int'],
            'description' => ['required', 'string']
        ]);
        // dd($formField);
        $from = $formField['from'];
        $to = $formField['to'];
        $amount = $formField['amount'];
        $description = $formField['description'];

        $balance = DB::select('select * from account where account_balance > ? AND account_number = ?', [$amount, $from]);
        if (count($balance) > 0) {
                DB::beginTransaction();
                try {
                    DB::update('update account set account_balance = account_balance - ? where account_number = ?', [$amount, $from]);
                        DB::update('update account set account_balance = account_balance + ? where account_number = ?', [$amount, $to]);
                        DB::insert('insert into transaction(transaction_from, transaction_to, transaction_amount, transaction_description,created_at) values (?,?,?,?,?)', [$from, $to, $amount, $description, now()]);
                    DB::commit();
                } catch (\Exception $e) {
                    DB::rollback();
                }
            } else {
                return redirect()->back()->withErrors('Дансны үлдэгдэл хүрэлцэхгүй байна.');
            }
        return back();
    }

    public function getById(Request $request)
    {
        $id = $request->id;
        return view('account.transactionlist', ['transactions' => Transaction::where('transaction_from', $id)->orwhere('transaction_to', $id)->get()]);
    }
}
