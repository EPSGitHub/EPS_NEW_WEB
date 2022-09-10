@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<section id="">
	<div class="container ">
		<div class="row">

			<div class="col-md-12  front_banner  ">
				<h1>Details View of </h1>
				<h5>Team<span> Member</span> </h5>
			</div>

		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 sin_img">
			 <img  class="single_img" src="{{ URL::to('') }}/frontend/img/team/single_image/nasir-uddin.png" alt="">
			<div class="sing_text">
				<h4>Md. Nasir Uddin </h4>
				<span>Director</span>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 sin_des">
			<p class="full_des">With an extensive grasp of garments manufacturing, marketing, planning, and policymaking, Md. Nasir Uddin holds an experience of 11+ years in this competitive industry. </p>

            <ol style="margin-bottom: 50px;margin-top:20px">
                <li>•	Director – Optimum Solution and Services Ltd.</li>
                <li>•	Vice-president – BGMEA </li>
                <li>•	Chairman – N.K. Sweaters Limited.</li>
                <li>•	Managing Director – Sadma Fashion Wear Limited.</li>
                <li>•	Managing Director – Mouchak Knit Composite Limited.</li>
                <li>•	Managing Director – Mahadi International Limited.</li>
                <li>•	Director – Mouchak Knit Composite Limited.</li>
                <li>•	Director – Nupami BD Limited. </li>

            </ol>

		</div>
		</div>


		<div class="col-md-3"></div>
	</div>
</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


