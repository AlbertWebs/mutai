@extends('master')

@section('content')
<div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .55), rgba(0, 0, 0, 0.55) 101.02%), url('{{url('/')}}/uploads/mercy.jpg');">
    <div class="company-name">Mutai Advocates</div>
    <div class="container-fluid one pl--95">
       <div class="row">
          <div class="col-lg-12">
             <div class="banner-content">
                <h1>Commercial and Corporate Law</h1>
                <ul class="breadcrumb-list">
                   <li><a href="{{url('/')}}">Home</a></li>
                   <li>Commercial and Corporate Law</li>
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
                   <h2>Commercial and Corporate Law</h2>
                   <p class="first-para">
                    The Firm excels in contract negotiation and drafting, business structuring and
compliance, mergers and acquisitions, and transaction structuring, ensuring that
clients receive strategic legal guidance to navigate the complexities of business
operations and corporate transactions
                   </p>
                </div>
             </div>
             <div class="col-lg-4 pl--95">
                <div class="case-study-details-info-wrap">
                    <img src="{{asset('uploads/cormercial.jpg')}}" alt>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>


@endsection
