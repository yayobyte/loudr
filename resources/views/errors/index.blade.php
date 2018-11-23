@extends('layouts.error')

@section('content')
    <div class="container">
        <div class="row vertical-center">
            <div class="col-md-4 align-middle offset-2">
                <img src="{{ asset('img/404-yayo.jpg') }}" height="300px"/>
            </div>
            <div class="col-md-4">
                <div class="display-1 text-danger ">{{ $errorCode }}</div>
                <div class="lead text-danger">Error! this guy is guilty</div>
                <br>
                <div class="lead">Report to human resources to have this guy fired!</div>
                <br>
                <div class="lead">
                    <a href="#" class="btn btn-lg btn-secondary">Report to HR!</a>
                </div>
            </div>
            <br>
        </div>
    </div>
@endsection
