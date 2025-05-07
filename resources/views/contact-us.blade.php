@extends('master')

@section('content')
<div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .55), rgba(0, 0, 0, 0.55) 101.02%), url('{{url('/')}}/uploads/mercy.jpg');">
    <div class="company-name">Mutai Advocates</div>
    <div class="container-fluid one pl--95">
       <div class="row">
          <div class="col-lg-12">
             <div class="banner-content">
                <h1>Contact Us</h1>
                <ul class="breadcrumb-list">
                   <li><a href="{{url('/')}}">Home</a></li>
                   <li>Contact Us</li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </div>
<div class="contect-section6">
    <div class="container-fluid one pl--95">
       <div class="row g-lg-4 gy-5">
          <div class="col-lg-5">
             <div class="section-title1 two">
                <h2>If Your Need Any Consult,
                   How can We Help You?
                </h2>
                <p>These problems can range from operational inefficiencies to strategic planning issues.</p>
             </div>
          </div>
          <div class="col-lg-7">
             <div class="contact-form-area two">
                <form>
                   <div class="row">
                      <div class="col-lg-6 mb-30">
                         <div class="form-inner">
                            <label>Name*</label>
                            <input type="text" placeholder="Daniel Scoot">
                         </div>
                      </div>
                      <div class="col-lg-6 mb-30">
                         <div class="form-inner">
                            <label>Work Email*</label>
                            <input type="email" placeholder="infoexample@gmail.com">
                         </div>
                      </div>
                      <div class="col-lg-6 mb-30">
                         <div class="form-inner">
                            <label>Company Name*</label>
                            <input type="text" placeholder="Consult Pro">
                         </div>
                      </div>
                      <div class="col-lg-6 mb-30">
                         <div class="form-inner">
                            <label>Consulting Area*</label>
                            <input type="text" placeholder="Dealership">
                         </div>
                      </div>
                      <div class="col-lg-12 mb-15">
                         <div class="form-inner">
                            <label>Write Your Massage*</label>
                            <textarea placeholder="What’s on your mind"></textarea>
                         </div>
                      </div>
                      <div class="col-lg-12 mb-50">
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value id="contactCheck">
                            <label class="form-check-label" for="contactCheck">
                            Please save my name, email address for the next time I message with aploxn.
                            </label>
                         </div>
                      </div>
                      <div class="col-lg-12">
                         <div class="form-inner">
                            <button class="primary-btn1 btn-hover" type="submit">
                               Submit Now
                               <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1865 1.06237L0 11.2484L0.751627 12L10.9376 1.81347V8.85645H12V0H3.14355V1.06237H10.1865Z"></path>
                               </svg>
                               <span></span>
                            </button>
                         </div>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
