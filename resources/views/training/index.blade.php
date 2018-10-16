@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Trainings <span><a class="float-right" href="{{route('create.training')}}">Add Training</a></span></div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Training title</th>
                                    <th>Training description</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($trainings as $training)
                                <tr>
                                    <td>{{$training->title}}</td>
                                    <td>{{$training->description}}</td>
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
