@extends('layouts.layout')

@section('contenido')
    <div class="row">
    <div class="col-lg-9">
        <div class="contact-box">
            <a class="row" href="https://www.facebook.com/geraldineangelica.alarconrojas">
            <div class="col-4">
                <div class="text-center">
                    <img alt="image" class="rounded-circle m-t-xs img-fluid" src="img/contacto/foto.jpg" height="250" width="250">
                    <div class="m-t-xs font-bold">Candidata Concejal</div>
                </div>
            </div>
            <div class="col-8">
                <h3><strong>Geraldine Alarcón Rojas</strong></h3>
                <p><i class="fa fa-map-marker"></i> Arica, Chile</p>
                <address>
                    <strong>Facebook, Inc.</strong><br>
                        Codpa, #2882<br>
                    <abbr title="Phone">Teléfono:</abbr> (+56) 9 5673-7076
                </address>
            </div>
                </a>
        </div>
    </div>
    
</div>





<div class="wrapper wrapper-content">
    <div class="row">
        
        
        <div class="col-lg-9 animated fadeInRight">
        <div class="mail-box-header">
            <div class="float-right tooltip-demo">
                <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Draft</a>
                <a href="mailbox.html" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Discard</a>
            </div>
            <h2>
                Compse mail
            </h2>
        </div>
            <div class="mail-box">


            <div class="mail-body">

                <form method="get">
                    <div class="form-group row"><label class="col-sm-2 col-form-label">To:</label>

                        <div class="col-sm-10"><input type="text" class="form-control" value="alex.smith@corporat.com"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Subject:</label>

                        <div class="col-sm-10"><input type="text" class="form-control" value=""></div>
                    </div>
                    </form>

            </div>

                <div class="mail-text h-200">

                    <div class="summernote">
                        <h3>Hello Jonathan! </h3>
                        dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        <br/>
                        <br/>

                    </div>
<div class="clearfix"></div>
                    </div>
                <div class="mail-body text-right tooltip-demo">
                    <a href="mailbox.html" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Send"><i class="fa fa-reply"></i> Send</a>
                    <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Discard</a>
                    <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Draft</a>
                </div>
                <div class="clearfix"></div>



            </div>
        </div>
    </div>
    </div>
@endsection
