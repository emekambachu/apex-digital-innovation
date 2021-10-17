@extends('layouts.admin')

@section('title')
    FAQs
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
                                    FAQs</h4>
                                <a style="float: left;"
                                   href="{{ route('admin.giveaway.faq.create') }}">
                                    <button class="btn btn-sm btn-info">Add new</button>
                                </a>
                            </div>
                            @include('includes.alerts')
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                @if($faqs->count() > 0)
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Question</th>
                                            <th scope="col">Answer</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($faqs as $item)
                                            <tr>
                                                <td>{{ $item->question }}</td>
                                                <td>{{ $item->answer }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th scope="col">Question</th>
                                            <th scope="col">Answer</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    No Faqs
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
