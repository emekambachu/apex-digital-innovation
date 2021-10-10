@extends('layouts.admin')

@section('title')
    Edit Crypto Wallet Address
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12 col-lg-6" style="margin: 0 auto;">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title"> Add New Crypto Wallet Address</h4>
                            </div>
                        </div>
                        @include('includes.alerts')
                        <div class="iq-card-body">
                            <form method="post"
                                  action="{{ route('admin.giveaway.crypto-wallet-address.update', $address->id) }}"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault01">Name</label>
                                        <input name="name" type="text" class="form-control"
                                               id="validationDefault01" value="{{ $address->name }}"
                                               required="">
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label for="validationDefault01">Wallet Address</label>
                                        <input name="address" type="text" class="form-control"
                                               id="validationDefault01" value="{{ $address->address }}"
                                               required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Remaining</label>
                                        <input name="remaining" type="number" class="form-control"
                                               id="validationDefault01" value="{{ $address->remaining }}"
                                               required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Barcode</label>
                                        <input name="barcode" type="file" class="form-control"
                                               id="validationDefault01" required="">
                                        @if(!empty($address->barcode))
                                            <img width="200"
                                                 src="{{ asset('photos/crypto-wallet-barcode/'.$address->barcode) }}">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn brand-color" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
