@extends('layouts.app')
@section('content')
    <div class="modal fade bg-primary text-primary" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Academic Session</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('add-session')}}">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" name="name" placeholder="e.g: 2021/2022" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Start:</label>
                            <input type="date"  name="start" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Finish:</label>
                            <input type="date" name="finish" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tuition Fee:</label>
                            <input type="text" name="tuition_fee" placeholder="30,000" class="form-control" required>
                        </div>
                        <div class="form-group float-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Session</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-primary">

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-primary text-light text-capitalize">
                        {{ __('Academic Sessions') }} <a href="{{route('new-session')}}" class="btn btn-outline-light btn-sm float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>
                             Add new Session</a>
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
                                        @case(1)
                                        <span class="badge badge-success">                   {{__('Current Session')}}</span>
                                        @break
                                        @case(0)
                                        <span class="badge badge-secondary">                   {{__('Inactive Session')}}</span>
                                        @break
                                        @default
                                        <span class="badge badge-secondary">                   {{__('Inactive Session')}}</span>
                                    @endswitch
                                </td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success"><i class="far fa-eye"></i> </a>
                                </td>
                                <td>
                                    <a href="{{route('edit-session', [$item->id])}}" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
