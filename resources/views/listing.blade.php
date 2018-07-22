@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listing</div>

                <div class="card-body">
                    @foreach ($products as $product)
                        <p>This is user {{ $product->title }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
