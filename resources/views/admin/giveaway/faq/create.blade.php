@extends('layouts.admin')

@section('title')
    Add Faq's
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12 col-lg-6" style="margin: 0 auto;">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title"> Add Faq's</h4>
                            </div>
                        </div>
                        @include('includes.alerts')
                        <div class="iq-card-body">
                            <form method="post"
                                  action="{{ route('admin.giveaway.faq.store') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault01">Question</label>
                                        <input name="question" type="text" class="form-control"
                                               id="validationDefault01" required="">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault01">Answer</label>
                                        <textarea name="answer" class="form-control"></textarea>
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
