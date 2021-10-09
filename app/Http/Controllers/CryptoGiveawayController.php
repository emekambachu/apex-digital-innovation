<?php

namespace App\Http\Controllers;

use App\CryptoWalletAddress;
use Illuminate\Http\Request;

class CryptoGiveawayController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function indexCryptoAddress(){

        $address = CryptoWalletAddress::all();

        return view('admin.giveaway.crypto-wallet-address.index', compact('address'));
    }

    public function createCryptoAddress(){

        return view('admin.giveaway.crypto-wallet-address.create');
    }

    public function storeCryptoAddress(Request $request){

        $request->validate([
            'name' => 'required|min:2|string|unique:crypto_wallet_address,name',
            'address' => 'required|min:2|string|unique:crypto_wallet_address,address',
            'remaining' => 'required',
            'barcode'  => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
        ]);

        $input = $request->all();

    }

    public function editCryptoAddress($id){

    }

    public function updateCryptoAddress(Request $request, $id){

    }

    public function deleteCryptoAddress($id){

    }


    public function indexTransactions(){

    }

    public function createTransaction(){

    }

    public function storeTransaction(Request $request){

    }

    public function editTransaction($id){

    }

    public function updateTransaction(Request $request, $id){

    }

    public function deleteTransaction($id){

    }


    public function indexTestimonies(){

    }

    public function createTestimony(){

    }

    public function storeTestimony(Request $request){

    }

    public function editTestimony($id){

    }

    public function updateTestimony(Request $request, $id){

    }

    public function deleteTestimony($id){

    }
}
