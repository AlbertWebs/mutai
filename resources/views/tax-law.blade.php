@extends('master')

@section('content')
<div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .55), rgba(0, 0, 0, 0.55) 101.02%), url('{{url('/')}}/uploads/mercy.jpg');">
    <div class="company-name">Mutai Advocates</div>
    <div class="container-fluid one pl--95">
       <div class="row">
          <div class="col-lg-12">
             <div class="banner-content">
                <h1>Tax Law</h1>
                <ul class="breadcrumb-list">
                   <li><a href="{{url('/')}}">Home</a></li>
                   <li>Tax Law</li>
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
                   <h2>Tax Law</h2>
                   <p class="first-para">
                    The Firm also offers robust tax litigation and dispute resolution services, tax
                    advisory, and assistance in correspondence with the Kenya Revenue Authority
                    (KRA), ensuring clients remain compliant while minimizing exposure to tax-related
                    risks.
                   </p>
                </div>
             </div>
             <div class="col-lg-4 pl--95">
                <div class="case-study-details-info-wrap">
                    <img src="{{asset('uploads/tax.jpg')}}" alt>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>


@endsection
