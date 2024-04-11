@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="col-md-12 row mt-4">
                        <div class="col-md-6">
                            <a href="{{ url('news') }}" class="btn btn-dark">get articles of news website</a>
                        </div>
                        <div class="col-md-6">
                            <a  href="{{ url('guardian') }}"  class="btn btn-dark">get articles of  Guardian</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
