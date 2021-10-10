@extends('layouts.admin')

@section('title')
    Crypto Wallet Address
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
                                    No Current Investments
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
