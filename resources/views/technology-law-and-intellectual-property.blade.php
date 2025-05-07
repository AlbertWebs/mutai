@extends('seo.master-technology-law-and-intellectual-property')

@section('content')
<div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .55), rgba(0, 0, 0, 0.55) 101.02%), url('{{url('/')}}/uploads/mercy.jpg');">
    <div class="company-name">Mutai Advocates</div>
    <div class="container-fluid one pl--95">
       <div class="row">
          <div class="col-lg-12">
             <div class="banner-content">
                <h1>Technology Law and Intellectual Property (IP)</h1>
                <ul class="breadcrumb-list">
                   <li><a href="{{url('/')}}">Home</a></li>
                   <li>Technology Law and Intellectual Property (IP)</li>
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
                   <h2>Technology Law and Intellectual Property (IP)</h2>
                   <p class="first-para">
                    The Firm advises on technology transactions and licensing, handles patent,
                    trademark, and copyright registrations, and provides IP litigation and protection
                    strategies to safeguard clients' valuable innovations and creative assets.
                    Mutai Advocates LLP is dedicated to delivering exceptional legal services across
                    these key areas, combining industry knowledge and practical expertise to support
                    clients in achieving their business and legal objectives.
                   </p>
                </div>
             </div>
             <div class="col-lg-4 pl--95">
                <div class="case-study-details-info-wrap">
                    <img src="{{asset('uploads/interlectual.jpg')}}" alt>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>


@endsection
