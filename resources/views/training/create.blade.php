@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create</div>

                    <div class="card-body">

                        <form action="{{route('store.training')}}" method="POST">

                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="title">Training Title</label>
                                <input type="text" id="title" name="title" class="form-control" title="Training Title">
                            </div>

                            <div class="form-group">
                                <label for="description">Training Description</label>
                                <input type="text" id="description" name="description" class="form-control"
                                       title="Training Description">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
