<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\DepositCoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DepositController extends Controller
{
    //index of all deposits
    public function index(Request $request)
    {
        $page_title = 'My Deposits';

        if ($request->s) {
            $deposits = user()
                ->deposits()
                ->with('depositCoin') 
                ->where('ref', 'LIKE', '%' . $request->s . '%')
                ->orderBy('id', 'DESC')
                ->paginate(site('pagination'));
        } else {
            $deposits = user()
                ->deposits()
                ->with('depositCoin') 
                ->orderBy('id', 'DESC')
                ->paginate(site('pagination'));
        }
        

        $coins = DepositCoin::where('status', '1')->get();

        return view('user.deposits.index', compact(
            'page_title',
            'deposits',
            'coins'
        ));
    }


    //show only a single deposit
    public function deposit(Request $request)
    {
        $deposit = user()->deposits()->where('ref', $request->route('ref'))->first();
        if (!$deposit) {
            abort(404);
        }


        $depositData = [
            'amount' => $deposit->amount,
            'fee' => $deposit->fee,
            'currency' => $deposit->currency,
            'converted_amount' => $deposit->converted_amount,
            'ref' => $deposit->ref,
            'network' => $deposit->network,
            'valid_until' => $deposit->valid_until,
            'payment_id' => $deposit->payment_id,
            'payment_wallet' => $deposit->payment_wallet,
            'status' => $deposit->status,
        ];
        
        return response()->json(['deposit' => $depositData]);
    }


    //new deposit 
    public function newDeposit(Request $request)
    {

        $request->validate([
            'amount' => 'required|numeric',
            'currency_code' => 'required',
        ]);

        //check min and max
        $amount_before_fee = $request->amount;
        $currency = $request->currency_code;
        $fee = site('deposit_fee') / 100 * $amount_before_fee;
        $amount = $fee + $amount_before_fee;
        if ($amount_before_fee < site('min_deposit') || $amount_before_fee > site('max_deposit')) {
            return response()->json(validationError('Min or max deposit amount not met'), 422);
        }

        $coin = DepositCoin::where('code', $currency)->where('status', 1)->first();
        if (!$coin) {
            return response()->json(validationError('The Payment method you have selected is not allowed'), 422);
        }

        $coin_id = $coin->id;
        //initiate deposit
       
        $depodepo = rand();
        
        $deposit = new Deposit();
        $deposit->user_id = user()->id;
        $deposit->amount = $amount_before_fee;
        $deposit->fee = $fee;
        $deposit->currency = $currency;
        $deposit->converted_amount = $amount;
        $deposit->ref = $depodepo;
        $deposit->network = $coin->network;
        $deposit->valid_until = 'active';
        $deposit->payment_id = $depodepo;
        $deposit->payment_wallet = $coin->wallet_address;
        $deposit->status = 'waiting';
        $deposit->deposit_coin_id = $coin_id;
        $deposit->save();
        
        sendDepositEmail($deposit);
        adminDepositEmail($deposit);

        $depositData = [
            'amount' => $deposit->amount,
            'fee' => $deposit->fee,
            'currency' => $deposit->currency,
            'converted_amount' => $deposit->converted_amount,
            'ref' => $deposit->ref,
            'network' => $deposit->network,
            'valid_until' => $deposit->valid_until,
            'payment_id' => $deposit->payment_id,
            'payment_wallet' => $deposit->payment_wallet,
            'status' => $deposit->status,
        ];
        
        return response()->json(['deposit' => $depositData]);
    }
    
    
    public function newScreenshot(Request $request)
    {
        $screenshot = user()->deposits()->where('ref', $request->ref)->first();
        //initiate deposit
        $file = $request->file('screenshot');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('assets/images/deposits', $filename);
            $bestfilename = $filename;
            $screenshot->screenshot = $bestfilename;
        
        $screenshot->save();
        
        return back();
        
        
    }




    public function depositCallback()
    {
        return depositCallback();
    }

    public function depositCallbackCoinpayment()
    {
        return depositCallbackCoinpayment();
    }
}
