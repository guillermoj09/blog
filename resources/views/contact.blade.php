@extends('layouts.layout')

@section('contenido')
    <div class="row">
    <div class="col-lg-9">
        <div class="contact-box">
            <a class="row" href="profile.html">
            <div class="col-4">
                <div class="text-center">
                    <img alt="image" class="rounded-circle m-t-xs img-fluid" src="img/a2.jpg">
                    <div class="m-t-xs font-bold">Graphics designer</div>
                </div>
            </div>
            <div class="col-8">
                <h3><strong>John Smith</strong></h3>
                <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                <address>
                    <strong>Twitter, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
                </a>
        </div>
    </div>
</div>
@endsection
