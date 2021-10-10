@extends('layouts.admin')

@section('title')
    Crypto Transactions
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
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
