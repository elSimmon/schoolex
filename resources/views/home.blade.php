@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-0">
            @include('partials.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-info text-light">{{ __('Welcome to SchooLex Student Portal') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-img">
                                    <img class="img-fluid" src="{{asset('images/schoolexlogo.jpg')}}" alt="SchooLex" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
