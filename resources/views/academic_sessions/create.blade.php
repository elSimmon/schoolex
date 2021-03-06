@extends('layouts.app')

@section('content')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('Add Academic Session') }}</div>

                    <div class="card-body">
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
                </div>
            </div>
@endsection
