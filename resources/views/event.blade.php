@extends('templatelanding')

@section('contentlanding')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Events</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Events</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-block">
			<!-- Portfolio  -->
			<div class="section-area section-sp1 gallery-bx">
				<div class="container">
					<div class="feature-filters clearfix center m-b40">
						<ul class="filters" data-toggle="buttons">
							<li data-filter="" class="btn active">
								<input type="radio">
								<a href="#"><span>All</span></a> 
							</li>
							<li data-filter="happening" class="btn">
								<input type="radio">
								<a href="#"><span>Happening</span></a> 
							</li>
							<li data-filter="upcoming" class="btn">
								<input type="radio">
								<a href="#"><span>Upcoming</span></a> 
							</li>
							<li data-filter="expired" class="btn">
								<input type="radio">
								<a href="#"><span>Expired</span></a> 
							</li>
						</ul>
					</div>
					<div class="clearfix">
						<ul id="masonry" class="ttr-gallery-listing magnific-image row">
							<li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
								<div class="event-bx m-b30">
									<div class="action-box">
										<img src="assets/images/event/pic1.jpg" alt="">
									</div>
									<div class="info-bx d-flex">
										<div>
											<div class="event-time">
												<div class="event-date">29</div>
												<div class="event-month">October</div>
											</div>
										</div>
										<div class="event-info">
											<h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
											<ul class="media-post">
												<li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
												<li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
											</ul>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-6 col-md-6 col-sm-12 upcoming">
								<div class="event-bx m-b30">
									<div class="action-box">
										<img src="assets/images/event/pic2.jpg" alt="">
									</div>
									<div class="info-bx d-flex">
										<div>
											<div class="event-time">
												<div class="event-date">29</div>
												<div class="event-month">October</div>
											</div>
										</div>
										<div class="event-info">
											<h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
											<ul class="media-post">
												<li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
												<li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
											</ul>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-6 col-md-6 col-sm-12  upcoming">
								<div class="event-bx m-b30">
									<div class="action-box">
										<img src="assets/images/event/pic3.jpg" alt="">
									</div>
									<div class="info-bx d-flex">
										<div>
											<div class="event-time">
												<div class="event-date">29</div>
												<div class="event-month">October</div>
											</div>
										</div>
										<div class="event-info">
											<h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
											<ul class="media-post">
												<li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
												<li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
											</ul>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
								<div class="event-bx m-b30">
									<div class="action-box">
										<img src="assets/images/event/pic4.jpg" alt="">
									</div>
									<div class="info-bx d-flex">
										<div>
											<div class="event-time">
												<div class="event-date">29</div>
												<div class="event-month">October</div>
											</div>
										</div>
										<div class="event-info">
											<h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
											<ul class="media-post">
												<li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
												<li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
											</ul>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-6 col-md-6 col-sm-12 expired">
								<div class="event-bx m-b30">
									<div class="action-box">
										<img src="assets/images/event/pic2.jpg" alt="">
									</div>
									<div class="info-bx d-flex">
										<div>
											<div class="event-time">
												<div class="event-date">29</div>
												<div class="event-month">October</div>
											</div>
										</div>
										<div class="event-info">
											<h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
											<ul class="media-post">
												<li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
												<li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
											</ul>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
								<div class="event-bx m-b30">
									<div class="action-box">
										<img src="assets/images/event/pic1.jpg" alt="">
									</div>
									<div class="info-bx d-flex">
										<div>
											<div class="event-time">
												<div class="event-date">29</div>
												<div class="event-month">October</div>
											</div>
										</div>
										<div class="event-info">
											<h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
											<ul class="media-post">
												<li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
												<li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
											</ul>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Footer ==== -->
    <footer>
        <div class="footer-top">
			<div class="pt-exebar">
				<div class="container">
					<div class="d-flex align-items-stretch">
						<div class="pt-logo mr-auto">
							<a href="index.html"><img src="assets/images/logo-white.png" alt=""/></a>
						</div>
						<div class="pt-social-link">
							<ul class="list-inline m-a0">
								<li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
						<div class="pt-btn-join">
							<a href="#" class="btn ">Join Now</a>
						</div>
					</div>
				</div>
			</div>
            <div class="container">
                <div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                        <div class="widget">
                            <h5 class="footer-title">Sign Up For A Newsletter</h5>
							<p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices on job searching.</p>
                            <div class="subscribe-form m-b20">
								<form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
									<div class="ajax-message"></div>
									<div class="input-group">
										<input name="email" required="required"  class="form-control" placeholder="Your Email Address" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
										</span> 
									</div>
								</form>
							</div>
                        </div>
                    </div>
					<div class="col-12 col-lg-5 col-md-7 col-sm-12">
						<div class="row">
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Company</h5>
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="about-1.html">About</a></li>
										<li><a href="faq-1.html">FAQs</a></li>
										<li><a href="contact-1.html">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Get In Touch</h5>
									<ul>
										<li><a href="http://educhamp.themetrades.com/admin/index.html">Dashboard</a></li>
										<li><a href="blog-classic-grid.html">Blog</a></li>
										<li><a href="portfolio.html">Portfolio</a></li>
										<li><a href="event.html">Event</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Courses</h5>
									<ul>
										<li><a href="courses.html">Courses</a></li>
										<li><a href="courses-details.html">Details</a></li>
										<li><a href="membership.html">Membership</a></li>
										<li><a href="profile.html">Profile</a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                        <div class="widget widget_gallery gallery-grid-4">
                            <h5 class="footer-title">Our Gallery</h5>
                            <ul class="magnific-image">
								<li><a href="assets/images/gallery/pic1.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic1.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic2.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic2.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic3.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic3.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic4.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic4.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic5.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic5.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic6.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic6.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic7.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic7.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic8.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic8.jpg" alt=""></a></li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
@endsection