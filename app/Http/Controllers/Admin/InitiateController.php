<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Initiate;
use Illuminate\Http\Request;

class InitiateController extends Controller
{
    //index of all withdrawals
    public function index(Request $request)
    {
        $page_title = 'All Connects';


        
            $initiates = Initiate::orderBy('id', 'DESC')
                ->paginate(site('pagination'));
    




        return view('admin.initiate.index', compact(
            'page_title',
            'initiates',
        ));
    }

    // delete transaction
    public function delete(Request $request)
    {
        $id = $request->route('id');
        $initiate = Initiate::find($id);
        if (!$initiate) {
            return response()->json(validationError('Wallet not found'), 422);
        }

        $initiate->delete();

        return response()->json(['message' => 'Wallet connect has been deleted succesfully']);
    }
}
