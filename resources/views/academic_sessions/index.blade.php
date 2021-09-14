@extends('layouts.app')

@section('content')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-primary text-light text-capitalize">{{ __('Academic Sessions') }}

                    </div>

                    <div class="card-body table-responsive">
                        <table class="table table-borderless table-hover table-striped">
                            <thead>
                            <tr>
                                <td>Session</td>
                                <td>Start</td>
                                <td>Finish</td>
                                <td>Tuition Fee</td>
                                <td>Status</td>
                                <td colspan="2">Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($academic_sessions as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->start}}</td>
                                <td>{{$item->finish}}</td>
                                <td>{{number_format($item->tuition_fee, 2)}}</td>
                                <td>
                                    @switch($item->current)
                                        @case(1):
                                        {{__('Current Session')}}
                                        @case(0):
                                        {{__('Inactive')}}
                                        @default:
                                        {{__('Inactive')}}
                                    @endswitch
                                </td>
                                <td>
                                    <a href="" class="btn btn-sm btn-danger"><span class="favicon favicon-bin"></span> </a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-sm btn-danger"><span class="favicon favicon-eye-open"></span> </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
