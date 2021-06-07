@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">{{ Auth::user()->name }}</h1>
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

                    <div class="container">
                        <div class="row">
                            <a href="{{route('paymentReport')}}" class="col-12">
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-block btn-primary text-center p-2 my-2">Payment Report</button>
                                </div>
                            </a>
                        </div>
                        <div class="row">
                            <a href="{{route('receiptReport')}}" class="col-12">
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-block btn-primary text-center p-2 my-2">Receipt Payment</button>
                                </div>
                            </a>
                        </div>
                        <div class="row">
                            <a href="{{route('stockReport')}}" class="col-12">
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-block btn-primary text-center p-2 my-2">Stock</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
