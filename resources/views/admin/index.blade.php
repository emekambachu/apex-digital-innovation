@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title" style="display: inline-block;">
                                <h4 style="float: left;" class="card-title mr-2">
                                    Timer</h4>
                            </div>
                            @include('includes.alerts')
                        </div>
                        <div class="iq-card-body">
                            <p>Timer</p>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Days</th>
{{--                                        <th scope="col">Hours</th>--}}
{{--                                        <th scope="col">Minutes</th>--}}
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ $timer->days }}</td>
{{--                                        <td>{{ $timer->hours }}</td>--}}
{{--                                        <td>{{ $timer->minutes }}</td>--}}
                                        <td>
                                            <a href="{{ route('admin.giveaway.timer.edit') }}">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-pencil"></i> Edit</button>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th scope="col">Days</th>
{{--                                        <th scope="col">Hours</th>--}}
{{--                                        <th scope="col">Minutes</th>--}}
                                        <th scope="col">Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title" style="display: inline-block;">
                                <h4 style="float: left;" class="card-title mr-2">
                                    Crypto Wallet Address</h4>
                                <a style="float: left;"
                                   href="{{ route('admin.giveaway.crypto-wallet-address.create') }}">
                                    <button class="btn btn-sm btn-info">Add new</button>
                                </a>
                            </div>
                            @include('includes.alerts')
                        </div>
                        <div class="iq-card-body">
                            <p>Crypto Wallet Address</p>
                            <div class="table-responsive">
                                @if($address->count() > 0)
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Remaining</th>
                                            <th scope="col">Barcode</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($address as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->address }}</td>
                                                <td>{{ $item->remaining }}</td>
                                                <td>
                                                    <img width="150" src="{{ asset('photos/crypto-wallet-barcode/'.$item->barcode) }}"/></td>
                                                <td>
                                                    <a href="{{ route('admin.giveaway.crypto-wallet-address.edit', $item->id) }}">
                                                        <button class="btn btn-info btn-sm">
                                                            <i class="fa fa-pencil"></i> Edit</button>
                                                    </a>
                                                    <form method="POST" action="{{ route('admin.giveaway.crypto-wallet-address.delete', $item->id) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-danger" type="submit">
                                                            <i class="fa fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Remaining</th>
                                            <th scope="col">Barcode</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    No Wallet Address
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title" style="display: inline-block;">
                                <h4 style="float: left;" class="card-title mr-2">Crypto Transactions</h4>
                                <a style="float: left;" href="{{ route('admin.giveaway.transaction.create') }}">
                                    <button class="btn btn-sm btn-info">Add new</button>
                                </a>
                            </div>
                            @include('includes.alerts')
                        </div>
                        <div class="iq-card-body">
                            <p>Crypto Transactions</p>
                            <div class="table-responsive">
                                @if($transactions->count() > 0)
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Txhash</th>
                                            <th scope="col">Block</th>
                                            <th scope="col">From</th>
                                            <th scope="col">To</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">Value</th>
                                            <th scope="col">Txfee</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($transactions as $item)
                                            <tr>
                                                <td>{{ $item->txhash }}</td>
                                                <td>{{ $item->block }}</td>
                                                <td>{{ $item->from }}</td>
                                                <td>{{ $item->from }}</td>
                                                <td>{{ $item->to }}</td>
                                                <td>{{ $item->age }}</td>
                                                <td>{{ $item->value }}</td>
                                                <td>
                                                    <a href="{{ route('admin.giveaway.transaction.edit', $item->id) }}">
                                                        <button class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</button>
                                                    </a>
                                                    <form method="POST" action="{{ route('admin.giveaway.transaction.delete', $item->id) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-danger" type="submit">
                                                            <i class="fa fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th scope="col">Txhash</th>
                                            <th scope="col">Block</th>
                                            <th scope="col">From</th>
                                            <th scope="col">To</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">Value</th>
                                            <th scope="col">Txfee</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    No Transactions
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title" style="display: inline-block;">
                                <h4 style="float: left;" class="card-title mr-2">
                                    Testimonies</h4>
                                <a style="float: left;"
                                   href="{{ route('admin.giveaway.testimony.create') }}">
                                    <button class="btn btn-sm btn-info">Add new</button>
                                </a>
                            </div>
                            @include('includes.alerts')
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                @if($testimonies->count() > 0)
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Occupation</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Testimony</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($testimonies as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->occupation }}</td>
                                                <td>
                                                    <img src="{{ asset('photos/testimonies/'.$item->image) }}"/>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.giveaway.testimony.edit', $item->id) }}">
                                                        <button class="btn btn-info btn-sm">
                                                            <i class="fa fa-pencil"></i> Edit</button>
                                                    </a>
                                                    <form method="POST" action="{{ route('admin.giveaway.testimony.delete', $item->id) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-danger" type="submit">
                                                            <i class="fa fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Occupation</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Testimony</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    No testimonies
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
    </div>
@endsection
