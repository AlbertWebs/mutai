@extends('seo.master-conveyancing-and-banking-and-financ')

@section('content')
@foreach($Blog as $ser)
<div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .55), rgba(0, 0, 0, 0.55) 101.02%), url('{{url('/')}}/uploads/{{$ser->image}}');">
    <div class="company-name">Mutai Advocates</div>
    <div class="container-fluid one pl--95">
       <div class="row">
          <div class="col-lg-12">
             <div class="banner-content">
                <h1>{{$ser->title}}:</h1>
                <ul class="breadcrumb-list">
                   <li><a href="{{url('/')}}">Home</a></li>
                   <li><a href="{{url('/')}}">Articles</a></li>
                   <li>{{$ser->title}}:</li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </div>


 <div class="case-study-details-wrapper pt-130 mb-130">
    <div class="container-fluid one pl--95">
       <div class="case-study-details-top mb-70">
          <div class="row g-lg-4 gy-5">
             <div class="col-lg-8">
                <div class="details-page-content">
                   <h2>{{$ser->title}}:</h2>
                   <p class="first-para">
                   {!! $ser->description !!}
                   </p>
                </div>
             </div>
             <div class="col-lg-4 pl--95">
                <div class="case-study-details-info-wrap">
                    <img src="{{asset('uploads/')}}/{{$ser->image}}" alt>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

@endforeach
@endsection
