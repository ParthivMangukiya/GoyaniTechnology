@extends('layout.master')

@section('events')
<br>
@endsection

@section('content')

<section class="banner_area banner_area-event">
    <div class="container">
        <div class="banner_text_inner">
            <h4>Payment Report</h4>
        </div>
    </div>
</section>

<!--================Static Area =================-->
<section class="pt-2">
    <payment-report></payment-report>
</section>
    
@endsection