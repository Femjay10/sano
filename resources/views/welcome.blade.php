@extends("layouts.frontend")


@section("title")

{{ config("app.name") }} | homepage

@endsection


@section("slider")

   @includeIf("layouts.slider")

@endsection


@section("main_content")

    <!-- Section: home-box -->
    <section>
      <div class="container pb-0">
        <div class="section-content">
          <div class="row equal-height-inner" data-margin-top="-150px">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto bg-theme-colored_1">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-blood8 text-theme-colored"></i> </a>
                    <h3 class="text-white">Free Consultation</h3>
                    <p class="text-white">Eleifend lobortis bibendum volutpat est senectus duis convallis</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored2">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-medical45 text-theme-colored"></i> </a>
                    <h3 class="text-white">Quality Brackets</h3>
                    <p class="text-white">Eleifend lobortis bibendum volutpat est senectus duis convallis</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto bg-theme-colored_1">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-pill text-theme-colored"></i> </a>
                    <h3 class="text-white">Latest Technology</h3>
                    <p class="text-white">Eleifend lobortis bibendum volutpat est senectus duis convallis</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto bg-theme-colored2">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-heart254  text-theme-colored"></i> </a>
                    <h3 class="text-white">Excellent Services</h3>
                    <p class="text-white">Eleifend lobortis bibendum volutpat est senectus duis convallis</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: about -->
    <section class="">
      <div class="container pb-0">
        <div class="row">
          <div class="col-md-8">
            <h4 class="text-uppercase text-theme-colored2 mt-sm-10">Welcome to dental pro</h4>
            <h2 class="mt-0">A dentist, also known as a dental surgeon, The dentist's supporting team aids in providing oral health services.</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque commodi molestiae autem fugit consectetur dolor ullam illo ipsa numquam, quod iusto enim ipsum amet iusto amet consec Lorem ipsum dolor sit amet</p>
            <h3 class="text-theme-colored mb-0">Dr. Corvin Adams</h3>
            <p><span>Doctor of Dental Surgery (DDS)</span></p>

            <p class="mt-20"><img src="images/signature.png" alt=""></p>
          </div>
          <div class="col-md-4">
            <img src="http://placehold.it/340x464" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services -->
    <section id="services">
      <div class="container pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">Our Services</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon.png" alt="">
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-30 p-10">
                <i class="fa fa-medkit text-theme-colored font-38"></i>
                <h3 class="mt-20">Root Canal</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-30 p-10">
                <i class="flaticon-medical-brush18 text-theme-colored font-38"></i>
                <h3 class="mt-20">Teeth Whitening</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-30 p-10">
                <i class="flaticon-medical-hospital17 text-theme-colored font-38"></i>
                <h3 class="mt-20">Wisdom Teeth</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-30 p-10">
                <i class="flaticon-medical-dentist text-theme-colored font-38"></i>
                <h3 class="mt-20">Crowns Bridges</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-30 p-10">
                <i class="flaticon-medical-hospital35 text-theme-colored font-38"></i>
                <h3 class="mt-20">Cosmetic Dentis</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-sm-30 p-10">
                <i class="flaticon-medical-teeth2 text-theme-colored font-38"></i>
                <h3 class="mt-20">Dental Implants</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   @includeIf('layouts.contact')

		<!--start gallary Section-->
		<section class="">
			<div class="container">
				<div class="section-title text-center mt-0">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="mt-0 line-height-1">Our <span class="text-theme-colored">Gallery</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
						</div>
					</div>
				</div>
				<div class="section-content">
					<div class="row">
						<div class="col-md-12">
							<!-- Portfolio Filter -->
							<div class="portfolio-filter text-center">
								<a href="#" class="active" data-filter="*">All</a>
								<a href="#branding" class="" data-filter=".branding">Checkup</a>
								<a href="#design" class="" data-filter=".design">Whitening</a>
								<a href="#photography" class="" data-filter=".photography">Whitening</a>
							</div>
							<!-- End Portfolio Filter -->
							
							<!-- Portfolio Gallery Grid -->
							<div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix" data-lightbox="gallery">
								<!-- Portfolio Item Start -->
								<div class="gallery-item design">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding photography">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/2.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item design">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/3.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/4.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item design photography">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/5.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item photography">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/6.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/7.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item photography">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/8.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/9.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
							</div>
							<!-- End Portfolio Gallery Grid -->
						</div>
					</div>
				</div>
			</div>
		</section>

  @endsection