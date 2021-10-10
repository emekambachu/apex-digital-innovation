@extends('layouts.admin')

@section('title')
    Add Crypto Transaction
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12 col-lg-6" style="margin: 0 auto;">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title"> Add Crypto Transaction</h4>
                            </div>
                        </div>
                        @include('includes.alerts')
                        <div class="iq-card-body">
                            <form method="post"
                                  action="{{ route('admin.giveaway.transaction.store') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault01">Txhash</label>
                                        <input name="txhash" type="text" class="form-control"
                                               id="validationDefault01" required="">
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label for="validationDefault01">Block</label>
                                        <input name="block" type="text" class="form-control"
                                               id="validationDefault01" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">From</label>
                                        <input name="from" type="text" class="form-control"
                                               id="validationDefault01" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">To</label>
                                        <input name="to" type="text" class="form-control"
                                               id="validationDefault01" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Age</label>
                                        <input name="age" type="text" class="form-control"
                                               id="validationDefault01" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Value</label>
                                        <input name="value" type="text" class="form-control"
                                               id="validationDefault01" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Txfee</label>
                                        <input name="txfee" type="text" class="form-control"
                                               id="validationDefault01" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn brand-color" type="submit">Add</button>
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
