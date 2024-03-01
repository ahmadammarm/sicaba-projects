@extends('layout.master')
@section('content')
@section('menuVoucher', 'active')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
         <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Hotel <i class="fa fa-chevron-right"></i></span></p>
         <h1 class="mb-0 bread">Hotel</h1>
       </div>
     </div>
   </div>
  </section>
  
  <section class="ftco-section ftco-no-pb">
   <div class="container">
    <div class="row">
     <div class="col-md-12">
      <div class="search-wrap-1 ftco-animate">
       <form action="#" class="search-property-1">
        <div class="row no-gutters">
         <div class="col-lg d-flex">
          <div class="form-group p-4 border-0">
           <label for="#">Destination</label>
           <div class="form-field">
             <div class="icon"><span class="fa fa-search"></span></div>
             <input type="text" class="form-control" placeholder="Search place">
           </div>
         </div>
       </div>
       <div class="col-lg d-flex">
        <div class="form-group p-4">
         <label for="#">Check-in date</label>
         <div class="form-field">
           <div class="icon"><span class="fa fa-calendar"></span></div>
           <input type="text" class="form-control checkin_date" placeholder="Check In Date">
         </div>
       </div>
     </div>
     <div class="col-lg d-flex">
      <div class="form-group p-4">
       <label for="#">Check-out date</label>
       <div class="form-field">
         <div class="icon"><span class="fa fa-calendar"></span></div>
         <input type="text" class="form-control checkout_date" placeholder="Check Out Date">
       </div>
     </div>
   </div>
   <div class="col-lg d-flex">
    <div class="form-group p-4">
     <label for="#">Price Limit</label>
     <div class="form-field">
       <div class="select-wrap">
        <div class="icon"><span class="fa fa-chevron-down"></span></div>
        <select name="" id="" class="form-control">
          <option value="">$5,000</option>
          <option value="">$10,000</option>
          <option value="">$50,000</option>
          <option value="">$100,000</option>
          <option value="">$200,000</option>
          <option value="">$300,000</option>
          <option value="">$400,000</option>
          <option value="">$500,000</option>
          <option value="">$600,000</option>
          <option value="">$700,000</option>
          <option value="">$800,000</option>
          <option value="">$900,000</option>
          <option value="">$1,000,000</option>
          <option value="">$2,000,000</option>
        </select>
      </div>
    </div>
  </div>
  </div>
  <div class="col-lg d-flex">
    <div class="form-group d-flex w-100 border-0">
     <div class="form-field w-100 align-items-center d-flex">
      <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
    </div>
  </div>
  </div>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  </section>
  
  <section class="ftco-section">
   <div class="container">
    <div class="row">
     <div class="col-md-4 ftco-animate">
      <div class="project-wrap hotel">
       <a href="#" class="img" style="background-image: url(images/hotel-resto-1.jpg);">
        <span class="price">$200/person</span>
      </a>
      <div class="text p-4">
        <p class="star mb-2">
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </p>
        <span class="days">8 Days Tour</span>
        <h3><a href="#">Manila Hotel</a></h3>
        <p class="location"><span class="fa fa-map-marker"></span> Manila, Philippines</p>
        <ul>
         <li><span class="flaticon-shower"></span>2</li>
         <li><span class="flaticon-king-size"></span>3</li>
         <li><span class="flaticon-mountains"></span>Near Mountain</li>
       </ul>
     </div>
   </div>
  </div>
  <div class="col-md-4 ftco-animate">
    <div class="project-wrap hotel">
     <a href="#" class="img" style="background-image: url(images/hotel-resto-2.jpg);">
      <span class="price">$200/person</span>
    </a>
    <div class="text p-4">
      <p class="star mb-2">
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </p>
      <span class="days">10 Days Tour</span>
      <h3><a href="#">Manila Hotel</a></h3>
      <p class="location"><span class="fa fa-map-marker"></span> Manila, Philippines</p>
      <ul>
       <li><span class="flaticon-shower"></span>2</li>
       <li><span class="flaticon-king-size"></span>3</li>
       <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
     </ul>
   </div>
  </div>
  </div>
  <div class="col-md-4 ftco-animate">
    <div class="project-wrap hotel">
     <a href="#" class="img" style="background-image: url(images/hotel-resto-3.jpg);">
      <span class="price">$200/person</span>
    </a>
    <div class="text p-4">
      <p class="star mb-2">
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </p>
      <span class="days">7 Days Tour</span>
      <h3><a href="#">Manila Hotel</a></h3>
      <p class="location"><span class="fa fa-map-marker"></span> Manila, Philippines</p>
      <ul>
       <li><span class="flaticon-shower"></span>2</li>
       <li><span class="flaticon-king-size"></span>3</li>
       <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
     </ul>
   </div>
  </div>
  </div>
  
  <div class="col-md-4 ftco-animate">
    <div class="project-wrap hotel">
     <a href="#" class="img" style="background-image: url(images/hotel-resto-4.jpg);">
      <span class="price">$200/person</span>
    </a>
    <div class="text p-4">
      <p class="star mb-2">
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </p>
      <span class="days">8 Days Tour</span>
      <h3><a href="#">Manila Hotel</a></h3>
      <p class="location"><span class="fa fa-map-marker"></span> Manila, Philippines</p>
      <ul>
       <li><span class="flaticon-shower"></span>2</li>
       <li><span class="flaticon-king-size"></span>3</li>
       <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
     </ul>
   </div>
  </div>
  </div>
  <div class="col-md-4 ftco-animate">
    <div class="project-wrap hotel">
     <a href="#" class="img" style="background-image: url(images/hotel-resto-5.jpg);">
      <span class="price">$200/person</span>
    </a>
    <div class="text p-4">
      <p class="star mb-2">
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </p>
      <span class="days">10 Days Tour</span>
      <h3><a href="#">Manila Hotel</a></h3>
      <p class="location"><span class="fa fa-map-marker"></span> Manila, Philippines</p>
      <ul>
       <li><span class="flaticon-shower"></span>2</li>
       <li><span class="flaticon-king-size"></span>3</li>
       <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
     </ul>
   </div>
  </div>
  </div>
  <div class="col-md-4 ftco-animate">
    <div class="project-wrap hotel">
     <a href="#" class="img" style="background-image: url(images/hotel-resto-6.jpg);">
      <span class="price">$200/person</span>
    </a>
    <div class="text p-4">
      <p class="star mb-2">
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </p>
      <span class="days">7 Days Tour</span>
      <h3><a href="#">Manila Hotel</a></h3>
      <p class="location"><span class="fa fa-map-marker"></span> Manila, Philippines</p>
      <ul>
       <li><span class="flaticon-shower"></span>2</li>
       <li><span class="flaticon-king-size"></span>3</li>
       <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
     </ul>
   </div>
  </div>
  </div>
  <div class="col-md-4 ftco-animate">
    <div class="project-wrap hotel">
     <a href="#" class="img" style="background-image: url(images/hotel-resto-7.jpg);">
      <span class="price">$200/person</span>
    </a>
    <div class="text p-4">
      <p class="star mb-2">
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </p>
      <span class="days">7 Days Tour</span>
      <h3><a href="#">Manila Hotel</a></h3>
      <p class="location"><span class="fa fa-map-marker"></span> Manila, Philippines</p>
      <ul>
       <li><span class="flaticon-shower"></span>2</li>
       <li><span class="flaticon-king-size"></span>3</li>
       <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
     </ul>
   </div>
  </div>
  </div>
  <div class="col-md-4 ftco-animate">
    <div class="project-wrap hotel">
     <a href="#" class="img" style="background-image: url(images/hotel-resto-8.jpg);">
      <span class="price">$200/person</span>
    </a>
    <div class="text p-4">
      <p class="star mb-2">
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </p>
      <span class="days">7 Days Tour</span>
      <h3><a href="#">Manila Hotel</a></h3>
      <p class="location"><span class="fa fa-map-marker"></span> Manila, Philippines</p>
      <ul>
       <li><span class="flaticon-shower"></span>2</li>
       <li><span class="flaticon-king-size"></span>3</li>
       <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
     </ul>
   </div>
  </div>
  </div>
  <div class="col-md-4 ftco-animate">
    <div class="project-wrap hotel">
     <a href="#" class="img" style="background-image: url(images/hotel-resto-9.jpg);">
      <span class="price">$200/night</span>
    </a>
    <div class="text p-4">
      <p class="star mb-2">
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </p>
      <span class="days">3 Days Tour</span>
      <h3><a href="#">Manila Hotel</a></h3>
      <p class="location"><span class="fa fa-map-marker"></span> Manila, Philippines</p>
      <ul>
       <li><span class="flaticon-shower"></span>2</li>
       <li><span class="flaticon-king-size"></span>3</li>
       <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
     </ul>
   </div>
  </div>
  </div>
  </div>
  <div class="row mt-5">
    <div class="col text-center">
      <div class="block-27">
        <ul>
          <li><a href="#">&lt;</a></li>
          <li class="active"><span>1</span></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&gt;</a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>
  </section>
  
  
  
  <section class="ftco-intro ftco-section ftco-no-pt">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-md-12 text-center">
      <div class="img"  style="background-image: url(images/bg_2.jpg);">
       <div class="overlay"></div>
       <h2>We Are Pacific A Travel Agency</h2>
       <p>We can manage your dream building A small river named Duden flows by their place</p>
       <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
     </div>
   </div>
  </div>
  </div>
  </section>

@endsection