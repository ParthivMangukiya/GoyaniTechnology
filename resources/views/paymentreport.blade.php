@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <a href="{{route('home')}}" class="col-12">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-block btn-primary text-center p-2 my-2">Home</button>
            </div>
        </a>
    </div>
    <div class="row text-center">
        <h4>Payment Report</h4>
    </div>
</div>

<!--================Static Area =================-->
<section class="pt-2">
    <payment-report></payment-report>
</section>
    
@endsection