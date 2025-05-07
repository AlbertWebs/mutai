@extends('seo.master-conveyancing-and-banking-and-financ')

@section('content')
<div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .55), rgba(0, 0, 0, 0.55) 101.02%), url('{{url('/')}}/uploads/mercy.jpg');">
    <div class="company-name">Mutai Advocates</div>
    <div class="container-fluid one pl--95">
       <div class="row">
          <div class="col-lg-12">
             <div class="banner-content">
                <h1>Conveyancing and Banking & Finance:</h1>
                <ul class="breadcrumb-list">
                   <li><a href="{{url('/')}}">Home</a></li>
                   <li>Conveyancing and Banking & Finance:</li>
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
                   <h2>Conveyancing and Banking & Finance:</h2>
                   <p class="first-para">
                    The Firm provides expert advice and services for both residential and commercial
                    property transactions. The firm also conducts thorough title searches and due
                    diligence, manages securities perfection and registration, and handles lease
                    agreements, offering clients peace of mind in property dealings and financial
                    matters.
                   </p>
                </div>
             </div>
             <div class="col-lg-4 pl--95">
                <div class="case-study-details-info-wrap">
                    <img src="{{asset('uploads/conveyancing.jpg')}}" alt>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>


@endsection
