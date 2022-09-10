@extends('frontend.layout.app')

@section('title')
EPS | Easy Payment System
@endsection

@section('maincontent')


<!-- // Start Code From Here -->
  <!-- // Main section Start -->


  <section>
    <div class="container" id="topcontent">
      <div class="row">
        <!--main-content-->
        <div class=" main-content col-md-7 col-sm-12 mt-3">
          <a class=" btn-1 btn-lg " href="">
            <span class="text" style="font-size: 14px; padding: 15px 0px;"> Easy solution for all transaction</span>
          </a>
          <h6 class="easy">Easy</h6>
          <h6 class="payment">Payment</h6>
          <h6 class="system">System</h6>
          <p>Easy Payment System (EPS) is an innovative payment solution to make digital transactions effortless. EPS eases the transaction by providing services including Money Transfer, Merchant Payment, Bill Payment, Balance Enquiry, Mobile Recharge, etc ... <a href="{{ route('frontend.aboutus') }}" class="readmore" style="color:#0e694b; font-weight:600">Read More </a>
          </p>

        </div>
        <!--main-content end!-->


        <!--Slider start!-->
        <div class="mobile-slider  col-md-5  mt-2 " data-interval="false">
          <!-- slider -->
          <div class="slider-main" id="slider-main">
            <div class="slides">
              <!-- slide -->
              <ul style="z-index:-1;">
                <li class="active">

                </li>
                <li>

                </li>
                <li>


                </li>
                <li>


                </li>
              </ul>
            </div>
          </div>
          <!--mobile slider end!-->
          <div id="phases"></div>
        </div>
      </div>
      <!--row!-->
    </div>
  </section>


  <div class="container">
    <div class="col-md-6 slider-popup-top">
      <!-- slide -->
      <ul>
        <li class="sendmoney active ">
          <img src="{{ URL::to('') }}/frontend/img/slider/fund-transfer.jpg" alt="">
        </li>
        <li class="billpay">
          <img src="{{ URL::to('') }}/frontend/img/slider/billpay.jpg" alt="">
        </li>
        <li class="corporate">
          <img src="{{ URL::to('') }}/frontend/img/slider/Corporate_T.jpg" alt="">
        </li>
        <li class="marchent">
          <img src="{{ URL::to('') }}/frontend/img/slider/mobile-recharge.jpg" alt="">
        </li>
      </ul>
      <!-- controll -->
    </div>
  </div>



  <div class="container">
    <div class="col-md-6 slider-popup-bottom">
      <ul>
        <li class="billpayb active">
          <img src="{{ URL::to('') }}/frontend/img/slider/fundtransfer-b.png" alt="">
        </li>
        <li class="sendmoneyb">
          <img src="{{ URL::to('') }}/frontend/img/slider/Bill_Pay.jpg" alt="">
        </li>
        <li class="marchentb">
          <img src="{{ URL::to('') }}/frontend/img/slider/Corporate_B.png" alt="">
        </li>
        <li class="corporateb">
          <img src="{{ URL::to('') }}/frontend/img/slider/mobilerecharge-b.jpg" alt="">
        </li>
      </ul>
      <span class="bottom-controll active" style="display: none;"></span>
      <span class="bottom-controll" style="display: none;"></span>
    </div>
    <div id="phases"></div>
  </div>







  <div class="container">
    <div class="row">
      <div class="slider-main">
        <!-- slide -->

        <ol class="">
          <!-- point -->
          <li class="active">
            <a href="service_single.html" class="auto-btn btn" class="hoverhand"  onmouseover="changePhase()"
              onmouseout="sendMonyout()">
              <i class="fa fa-square"></i>Fund Transfer</a>
          </li>
          <li class="">
            <a href="" class="auto-btn btn " class="hoverhand" id="title2" onmouseover="changePhase()"
              onmouseout="billpayout()">
              <i class="fa fa-square"></i>Bill Pay </a>
          </li>
          <li class=" ">
            <a href="" class="auto-btn btn" class="hoverhand" id="title3" onmouseover="changePhase()"
              onmouseout="corporateout()">
              <i class="fa fa-square"></i>Corporate </a>
          </li>
          <li class="">
            <a href="" class="auto-btn btn" class="hoverhand" id="title4" onmouseover="changePhase()"
              onmouseout="marchentout()">
              <i class="fa fa-square"></i>Mobile Recharge </a>
          </li>


          <!-- playpause -->
          <!-- <i class="fa fa-circle" title="pause"></i> -->
        </ol>
        <!-- controll -->
        <span class="controll active" style="display: none;"></span>
        <span class="controll" style="display: none;"></span>
        <span class="top-controll active" style="display: none;"></span>
        <span class="top-controll" style="display: none;"></span>
        <span class="bottom-controll active" style="display: none;"></span>
        <span class="bottom-controll" style="display: none;"></span>
      </div>
    </div>
  </div>

  <!-- // Main section End -->

  <!-- // Start Social Icon -->

@include('frontend.layout.social')
  <!-- // End Social Icon -->

  <!-- // Home Popup section Start -->
  <section>
    <div class="container" id="cookieNotice">
      <div class="row">
        <div class="col-md-12">
          <div class="popup animate__animated animate__fadeInUp animate_slower" id="popup">
            <a id="close" onclick="toggle()"> &times;</a>
            <p class="card-text">This website uses cookies to ensure you get the best experience on our website. We'll assume you're ok with this, but you can opt out if you wish. <a href="{{ route('frontend.cookie') }}" class="cookie-link" style="text-decoration:underline">Cookie Policy</a>
            </p>
            <div class="button">
              <a  id="accept" class="btn btn-sm accept" onclick="acceptCookieConsent()">Accept</a>
              <a id="deny"  class="btn btn-sm deny"  onclick="toggle()" >Deny</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- // Home Popup section End -->

<!-- Subscription section start -->

  <div class="subcription animate__animated animate__fadeIn animate__slow" id="subscrip">
    <button class="btn text-white rs "  onclick="subscription()" id="sbt" data-aos="fade-left" data-aos-duration="3000"
      style="transform: rotate(-90deg); background:#0e694b;font-size: 14px;">Let's Make a Connection</button>
    <a id="arw" onclick="subscription()">
      <span class="subscribeicon">
        <i class="fa-solid fa-angle-left animate__animated animate__fadeIn animate__slow" style="margin-bottom: 50px;"></i>
      </span>
      <a id="arw2" onclick="subscriptionclose()" class="close"></a>
      <div id="sub" style="margin-top: -50%;"></div>
  </div>



<!-- Subscription section END -->

<div class="subform animate__animated animate__fadeIn animate__slow" id="sbtn"  >
    <img src="frontend/img/subimg.png" width="158px" height="129px" alt="">
    <p class="btn btn-sm text-white lbtn "  style="">Let's Make a Connection</p>
    <svg class="crsbtn" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg"  onclick="subscriptionclose()">
        <path d="M15.1824 0.34152L9.33255 6.1824C9.11085 6.4159 9 6.68849 9 6.99998C9 7.31749 9.11082 7.58703 9.33255 7.80876L15.1824 13.6586C15.41 13.8862 15.6826 14 16.0001 14C16.3237 14 16.5932 13.8861 16.8088 13.6586L17.4827 12.9847C17.7103 12.769 17.8243 12.4994 17.8243 12.1759C17.8243 11.8524 17.7103 11.5829 17.4827 11.3671L13.1245 6.99998L17.4826 2.63279C17.7101 2.41726 17.8242 2.14769 17.8242 1.82392C17.8242 1.5066 17.7101 1.23389 17.4826 1.0064L16.8087 0.332581C16.587 0.110913 16.3175 6.33818e-07 16 6.47692e-07C15.6825 6.61574e-07 15.4099 0.113746 15.1824 0.34152Z" fill="#EE2D43"/>
        <path d="M2.64179 13.6585L8.49167 7.8176C8.71337 7.5841 8.82422 7.31151 8.82422 7.00002C8.82422 6.68251 8.7134 6.41297 8.49167 6.19124L2.64179 0.341424C2.41424 0.113776 2.14161 -2.92106e-07 1.82411 -3.05985e-07C1.50056 -3.20127e-07 1.23105 0.113902 1.01546 0.341424L0.341517 1.0153C0.113964 1.23102 -3.24905e-05 1.50062 -3.25047e-05 1.82408C-3.25188e-05 2.14756 0.113933 2.4171 0.341517 2.63285L4.69971 7.00002L0.341612 11.3672C0.114122 11.5827 6.14707e-05 11.8523 6.14566e-05 12.1761C6.14427e-05 12.4934 0.114122 12.7661 0.341612 12.9936L1.01552 13.6674C1.23719 13.8891 1.50676 14 1.82417 14C2.14174 14 2.41433 13.8863 2.64179 13.6585Z" fill="#006B4F"/>
        </svg>

    <p style="">Subscribe and get our exclusive offers delivered directly to your inbox</p>
    <form action="" class="from-group">
        <input type="text" placeholder="Email / Phone Number" class="form-control">
        <input style=" background:#006B4F; color:white;" type="submit" value="Submit"  class="form-control">
    </form>
    <img src="frontend/img/Ellipse.png" id="cornerimg"/>

</div>















<!-- partner section start -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="partner col-md-9" id="partner">
          <h2 class="partnertitle">Our Partners</h2>

<!--test  partner section start -->
<div class="container">
    <div class="brand-wheel">
      <div class="brand-slide">
        <div class="logo-div">
            <a href="https://eps.com.bd" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Robi.png" alt="" />
           </a>
        </div>
        <div class="logo-div">
            <a href="https://eps.com.bd" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Islami_Bank.png" alt="" />
              </a>
        </div>

        <div class="logo-div">
            <a href="https://eps.com.bd" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Airtel.png" alt="" />
           </a>
        </div>
        <div class="logo-div">
            <a href="https://eps.com.bd" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Master_Card.png" alt="" />
              </a>
        </div>
        <div class="logo-div">
            <a href="https://eps.com.bd" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/nagad.png" alt="" />
              </a>
        </div>
        <div class="logo-div">
            <a href="https://eps.com.bd" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Visa.png" alt="" />
           </a>
        </div>
        <div class="logo-div">
            <a href="https://eps.com.bd" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Southeast Bank Limited.png" alt="" />
               </a>
        </div>

      </div>
      <div class="brand-slide delay">
        <div class="logo-div">
            <a href="https://eps.com.bd" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Robi.png" alt="" />
           </a>
        </div>
        <div class="logo-div">
            <a href="https://eps.com.bd" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Islami_Bank.png" alt="" />
              </a>
        </div>

        <div class="logo-div">
            <a href="https://eps.com.bd" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Airtel.png" alt="" />
           </a>
        </div>
        <div class="logo-div">
            <a href="https://eps.com.bd" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Master_Card.png" alt="" />
              </a>
        </div>
        <div class="logo-div">
            <a href="https://eps.com.bd" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/nagad.png" alt="" />
              </a>
        </div>
        <div class="logo-div">
            <a href="https://eps.com.bd" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Visa.png" alt="" />
           </a>
        </div>
        <div class="logo-div">
            <a href="https://eps.com.bd" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Southeast Bank Limited.png" alt="" />
               </a>
        </div>
      </div>
    </div>
  </div>

<!-- test partner section start -->
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>





<!-- partner section END -->

<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade  " id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  onclick="setTimeout(subscription,2000); setTimeout(subscriptionclose,8000)" >
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content ">

            <div class="modal-body adpop ">
                <div class="container col-md-12">
                    <div class="row">



                        <div class="col-md-12">


                            <img style="width: 100%;" src="{{ URL::to('') }}/frontend/img/launch.png" alt="">



                        </div>

                        <div class="col-md-12">



                            <a  class=" close adpopclsa  animate__animated animate__fadeInRight animate__slow" onclick="setTimeout(subscription,2000); setTimeout(subscriptionclose,8000)"  style="cursor: pointer;" data-bs-dismiss="modal">&times;</a>


                           </div>
                        <div class="col-md-12" style="">



                            <a href="#" class=" adpopbtn btn btn-lg">Full Details</a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>



@endsection

