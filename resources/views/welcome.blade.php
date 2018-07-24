@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ setting('site.title') }}
                            </div>
                        @endif
                        <var>y</var> = <var>m</var><var>x</var> + <var>b</var>
                            {{ setting('site.title') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
