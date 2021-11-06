<?php

namespace App\Http\Controllers;

use App\CryptoTransaction;
use App\CryptoWalletAddress;
use App\Faq;
use App\Testimony;
use App\Timer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as InterventionImage;

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
            'name' => 'required|min:2|string|unique:crypto_wallet_addresses,name',
            'address' => 'required|min:2|string|unique:crypto_wallet_addresses,address',
            'remaining' => 'required',
            'barcode'  => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
        ]);

        $input = $request->all();

        if($request->hasFile('barcode') && $file = $request->file('barcode')) {
            $converted_path = 'photos/crypto-wallet-barcode';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();

            // create canvas background to hold the image (Must install Image Intervention Package first)
            $background = InterventionImage::canvas(500, 500);
            // start image conversion (Must install Image Intervention Package first)
            $convert_image = InterventionImage::make($file->path());
            // resize image and save to converted path
            // resize and fit width
            $convert_image->resize(500, 500, static function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // insert image to canvas
            $background->insert($convert_image, 'center');
            $background->save($converted_path . '/' . $name);
            $input['barcode'] = $name;
        }else{
            $input['barcode'] = null;
        }

        CryptoWalletAddress::create($input);

        Session::flash('success', 'Created');
        return redirect()->back();
    }

    public function getWalletAddressId($id){
        return CryptoWalletAddress::findOrFail($id);
    }

    public function editCryptoAddress($id){

        $address = $this->getWalletAddressId($id);

        return view('admin.giveaway.crypto-wallet-address.edit', compact('address'));
    }

    public function updateCryptoAddress(Request $request, $id){

        $address = $this->getWalletAddressId($id);

        $request->validate([
            'name' => 'required|min:2|string|unique:crypto_wallet_addresses,name,'.$id,
            'address' => 'required|min:2|string|unique:crypto_wallet_addresses,address,'.$id,
            'remaining' => 'required',
            'barcode'  => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
        ]);

        $input = $request->except('_method', '_token');

        if($request->hasFile('barcode') && $file = $request->file('barcode')) {
            $converted_path = 'photos/crypto-wallet-barcode';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();

            // create canvas background to hold the image (Must install Image Intervention Package first)
            $background = InterventionImage::canvas(500, 500);
            // start image conversion (Must install Image Intervention Package first)
            $convert_image = InterventionImage::make($file->path());
            // resize image and save to converted path
            // resize and fit width
            $convert_image->resize(500, 500, static function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // insert image to canvas
            $background->insert($convert_image, 'center');
            $background->save($converted_path . '/' . $name);
            $input['barcode'] = $name;
        }else{
            $input['barcode'] = $address->barcode;
        }

        $address->update($input);

        Session::flash('success', 'Updated');
        return redirect()->back();
    }

    public function deleteCryptoAddress($id){
        $address = $this->getWalletAddressId($id);

        $address->delete();

        Session::flash('warning', 'Deleted');
        return redirect()->back();
    }


    public function indexTransactions(){

        $transactions = CryptoTransaction::all();

        return view('admin.giveaway.crypto-transactions.index', compact('transactions'));
    }

    public function createTransaction(){

        return view('admin.giveaway.crypto-transactions.create');
    }

    public function storeTransaction(Request $request){

        $request->validate([
            'txhash' => 'required|min:2',
            'block' => 'required|min:2',
            'from' => 'required|min:2',
            'to'  => 'required|min:2',
            'age'  => 'required|min:2',
            'value'  => 'required|min:2',
            'txfee'  => 'required|min:2',
        ]);

        $input = $request->all();

        CryptoTransaction::create($input);

        Session::flash('success', 'Created');
        return redirect()->back();
    }

    public function getTransactionId($id){
        return CryptoTransaction::findOrFail($id);
    }

    public function editTransaction($id){
        $transaction = $this->getTransactionId($id);

        return view('admin.giveaway.crypto-transactions.edit', compact('transaction'));
    }

    public function updateTransaction(Request $request, $id){

        $transaction = $this->getTransactionId($id);

        $request->validate([
            'txhash' => 'required|min:2',
            'block' => 'required|min:2',
            'from' => 'required|min:2',
            'to'  => 'required|min:2',
            'age'  => 'required|min:2',
            'value'  => 'required|min:2',
            'txfee'  => 'required|min:2',
        ]);

        $input = $request->except('_method', '_token');

        $transaction->update($input);

        Session::flash('success', 'Created');
        return redirect()->back();
    }

    public function deleteTransaction($id){

        $transaction = $this->getTransactionId($id);
        $transaction->delete();

        Session::flash('warning', 'Deleted');
        return redirect()->back();
    }


    public function indexTestimonies(){

        $testimonies = Testimony::all();
        return view('admin.giveaway.testimonies.index', compact('testimonies'));
    }

    public function createTestimony(){

        return view('admin.giveaway.testimonies.create');
    }

    public function storeTestimony(Request $request){

        $request->validate([
            'name' => 'required|min:2|string|unique:testimonies,name',
            'occupation' => 'required|min:2|string',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
            'testimony' => 'required'
        ]);

        $input = $request->all();

        if($request->hasFile('image') && $file = $request->file('image')) {
            $converted_path = 'photos/testimonies';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();

            // create canvas background to hold the image (Must install Image Intervention Package first)
            $background = InterventionImage::canvas(500, 500);
            // start image conversion (Must install Image Intervention Package first)
            $convert_image = InterventionImage::make($file->path());
            // resize image and save to converted path
            // resize and fit width
            $convert_image->resize(500, 500, static function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // insert image to canvas
            $background->insert($convert_image, 'center');
            $background->save($converted_path . '/' . $name);
            $input['image'] = $name;
        }else{
            $input['image'] = null;
        }

        Testimony::create($input);

        Session::flash('success', 'Created');
        return redirect()->back();
    }

    public function getTestimonyId($id){
        return Testimony::findOrFail($id);
    }

    public function editTestimony($id){

        $testimony = $this->getTestimonyId($id);

        return view('admin.giveaway.testimonies.edit', compact('testimony'));
    }

    public function updateTestimony(Request $request, $id){

        $testimony = $this->getTestimonyId($id);

        $request->validate([
            'name' => 'required|min:2|string|unique:testimonies,name,'.$id,
            'occupation' => 'required|min:2|string',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
            'testimony' => 'required'
        ]);

        $input = $request->all();

        if($request->hasFile('image') && $file = $request->file('image')) {
            $converted_path = 'photos/testimonies';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();

            // create canvas background to hold the image (Must install Image Intervention Package first)
            $background = InterventionImage::canvas(500, 500);
            // start image conversion (Must install Image Intervention Package first)
            $convert_image = InterventionImage::make($file->path());
            // resize image and save to converted path
            // resize and fit width
            $convert_image->resize(500, 500, static function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // insert image to canvas
            $background->insert($convert_image, 'center');
            $background->save($converted_path . '/' . $name);
            $input['image'] = $name;
        }else{
            $input['image'] = null;
        }

        $testimony->update($input);

        Session::flash('success', 'Updated');
        return redirect()->back();
    }

    public function deleteTestimony($id){

        $testimony = $this->getTestimonyId($id);
        $testimony->delete();

        Session::flash('warning', 'Deleted');
        return redirect()->back();
    }


    public function indexFaq(){

        $faqs = Faq::all();
        return view('admin.giveaway.faq.index', compact('faqs'));
    }

    public function createFaq(){

        return view('admin.giveaway.faq.create');
    }

    public function storeFaq(Request $request){

        $request->validate([
            'question' => 'required|min:2|string|unique:faqs,question',
            'answer' => 'required|min:2|string',
        ]);

        $input = $request->all();

        Faq::create($input);

        Session::flash('success', 'Created');
        return redirect()->back();
    }

    public function getFaqId($id){
        return Faq::findOrFail($id);
    }

    public function editFaq($id){

        $faq = $this->getFaqId($id);

        return view('admin.giveaway.faq.edit', compact('faq'));
    }

    public function updateFaq(Request $request, $id){

        $faq = $this->getFaqId($id);

        $request->validate([
            'question' => 'required|min:2|string|unique:faqs,question,'.$id,
            'answer' => 'required|min:2|string',
        ]);

        $input = $request->all();
        $faq->update($input);

        Session::flash('success', 'Updated');
        return redirect()->back();
    }

    public function deleteFaq($id){

        $faq = $this->getFaqId($id);
        $faq->delete();
        Session::flash('warning', 'Deleted');
    }


    public function indexTimer(){

        $timer = Timer::all();
        return view('admin.giveaway.timer.index', compact('timer'));
    }

    public function editTimer(){

        $timer = Timer::where('id', 1)->first();
        return view('admin.giveaway.timer.edit', compact('timer'));
    }

    public function updateTimer(Request $request){

        $input = $request->all();
        $timer = Timer::where('id', 1)->first();

        $input['days'] = date("M j, G:i:s Y", strtotime($input['days']));

        $timer->update($input);
        Session::flash('success', 'Updated');

        return redirect()->back();
    }
}
