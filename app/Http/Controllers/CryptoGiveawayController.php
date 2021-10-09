<?php

namespace App\Http\Controllers;

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

    }

    public function createCryptoAddress(){

    }

    public function storeCryptoAddress(Request $request){

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
