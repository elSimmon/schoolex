@extends('layouts.app')

@section('content')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-primary text-light">{{ __('Edit Academic Session') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('update-session', [$academic_session->id])}}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Name:</label>
                                <input type="text" name="name" placeholder="e.g: 2021/2022" class="form-control" value="{{$academic_session->name}}" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Start:</label>
                                <input type="date"  name="start" class="form-control" value="{{$academic_session->start}}" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Finish:</label>
                                <input type="date" name="finish" class="form-control" value="{{$academic_session->finish}}" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tuition Fee:</label>
                                <input type="text" name="tuition_fee" placeholder="30,000" class="form-control" value="{{$academic_session->tuition_fee}}" required>
                            </div>
                            <div class="form-group float-right">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Session</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection
