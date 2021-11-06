@extends('layouts.admin')

@section('title')
    Edit Timer
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12 col-lg-6" style="margin: 0 auto;">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title"> Edit Timer</h4>
                            </div>
                        </div>
                        @include('includes.alerts')
                        <div class="iq-card-body">
                            <form method="post"
                                  action="{{ route('admin.giveaway.timer.update') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault01">Days ( {{ $timer->days }} )</label>
                                        <input name="days" type="date" class="form-control"
                                               id="validationDefault01" value="{{ $timer->days }}"
                                               required="">
                                    </div>
{{--                                    <div class="col-md-4 mb-3">--}}
{{--                                        <label for="validationDefault01">Hours</label>--}}
{{--                                        <input name="hours" type="number" class="form-control"--}}
{{--                                               id="validationDefault01" value="{{ $timer->hours }}"--}}
{{--                                               required="">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-8 mb-3">--}}
{{--                                        <label for="validationDefault01">Minutes</label>--}}
{{--                                        <input name="minutes" type="number" class="form-control"--}}
{{--                                               id="validationDefault01" value="{{ $timer->minutes }}"--}}
{{--                                               required="">--}}
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
