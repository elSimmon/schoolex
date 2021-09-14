@extends('layouts.app')

@section('content')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-primary text-light">{{ __('Welcome to SchooLex Student Portal') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-img">
                                    <img class="img-fluid" src="{{asset('images/learning.jpg')}}" alt="SchooLex" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card bg-primary text-light border-light">
                                        <div class="card-header">
                                            <p>Admitted Students</p>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="font-weight-bold">
                                                 {{number_format(1200)}}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-primary text-light">
                                        <div class="card-header">
                                            <p>Students who Paid</p>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="font-weight-bold">
                                                {{number_format(1200)}}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card bg-primary text-light">
                                        <div class="card-header">
                                            <p>Total Tuition paid</p>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="font-italic font-weight-bold">
                                                <span style="text-decoration: line-through;">N</span>{{number_format(1200855)}}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-primary text-light">
                                        <div class="card-header">
                                            <p>Current Tuition</p>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="font-italic font-weight-bold">
                                                <span style="text-decoration: line-through;">N</span>{{number_format(12500)}}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
