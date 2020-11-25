@extends('layouts.layout')

@section('contenido')
<h1>"Dignificando el camino"</h1>
<div class="col-lg-7">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>Imágenes</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#" class="dropdown-item">Config option 1</a>
                    </li>
                    <li><a href="#" class="dropdown-item">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/p_big1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <p>This is simple caption 1</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/p_big3.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <p>This is simple caption 2</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/p_big2.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <p>This is simple caption 3</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>
</div>
    
@endsection