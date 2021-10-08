@extends('layouts.master')

@section('title', $cloth->name)

@section('content')
<br><br><br>
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="{{asset ('assets/img/portfolio/portfolio-details-1.jpg')}}" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Cloth information</h3>
            <ul>
              <li><strong>Designer: </strong>#</li>
              <li><strong>Name: </strong>{{ $cloth->name}}</li>
              <li><strong>Details: </strong>{{ $cloth->details}}</li>
              <li><strong>Price: </strong>{{ $cloth->price }} </li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <br>
          <p>
            {{$cloth->description }}
          </p>
        </div> 

      </div>
    </section><!-- End Portfolio Details Section -->

    @endsection


  
