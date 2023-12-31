<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
</body>
</html>
@extends('layout.base')

@section('content')
{{-- <link rel="stylesheet" href="style2.css"> --}}
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000"> <!-- Set interval to 3000 milliseconds (3 seconds) -->
    <div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/b1.jpeg" alt="Slide 1">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/b2.jpg" alt="Slide 2">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/b3.jpg" alt="Slide 3">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
    
            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                {{-- <span class="sr-only">Previous</span> --}}
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                {{-- <span class="sr-only">Next</span> --}}
            </a>
        </div>
    </div>



</div>
@endsection