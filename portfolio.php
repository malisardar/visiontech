
<?php
$pageTitle = "VisionTech | Portfolio";
$pageDescription = "Welcome to VisionTech, your trusted partner for innovative web solutions.";
$pageKeywords = "web development, IT services, software solutions";
include 'header.php';
?>

<!-- First Section Start -->
<section class="PortfolioHeader uk-text-center">
	<div class="headerimagezoom nozoom uk-visible@m" style="background-image: url(images/portfolio/img-portfolio-hero-image.jpg);"></div>
	<div class="headerimagezoom nozoom uk-hidden@m" style="background-image: url(images/portfolio/img-portfolio-hero-image-mobile.jpg);"></div>
	<div class="mdl">
		<div class="mdl_inner">
			<div class="uk-container ContainerCustom">
				<h1 uk-scrollspy="cls:uk-animation-fade; delay: 500">GET INSPIRED BY <br> OUR Portfolio</h1>
				<p uk-scrollspy="cls:uk-animation-fade; delay: 1000">Full of inspiration and work we made for our clients.</p>
				<div id="filters" class="FilterBtn">
				  <button class="filter active" data-filter="all">All</button>
				  <button class="filter" data-rel="mobile-adverting" data-filter=".mobile-adverting">Mobile Advertising</button>
				  <button class="filter" data-rel="creatives" data-filter=".creatives">Creatives</button>
				  <button class="filter" data-rel="mobileapps" data-filter=".mobileapps">Mobile Apps</button> 
				  <button class="filter" data-rel="websites" data-filter=".websites">Websites</button>
				  <button class="filter" data-rel="games" data-filter=".games">Games</button>
				  <button class="filter" data-rel="branding" data-filter=".branding">Branding</button>
				  <button class="filter" data-rel="production" data-filter=".production">Production</button>
				  <!-- <button class="filter" data-rel="value-added-services" data-filter=".value-added-services">Value Added Services</button> -->
			</div>	
			<div class="mobFilterBtn">
				<p>All</p>
            	<ul class="UlFilterBtns">
				    <li><a class="filter active" data-filter="all">All</a></li>
				    <li><a class="filter" data-rel="mobile-adverting" data-filter=".mobile-adverting">Mobile Advertising</a></li>
				    <li><a class="filter" data-rel="creatives" data-filter=".creatives">Creatives</a></li>
				    <li><a class="filter" data-rel="mobileapps" data-filter=".mobileapps">Mobile Apps</a></li>
				    <li><a class="filter" data-rel="websites" data-filter=".websites">Websites</a></li>
				    <li><a class="filter" data-rel="games" data-filter=".games">Games</a></li>
				    <li><a class="filter" data-rel="branding" data-filter=".branding">Branding</a></li>
				    <li><a class="filter" data-rel="production" data-filter=".production">Production</a></li>
				    <!-- <li><a class="filter" data-rel="value-added-services" data-filter=".value-added-services">Value Added Services</a></li> -->
				</ul>
        	</div>  
			<div style="clear:both;"></div>
			</div>
		</div>
	</div>
</section>
<!-- First Section End -->
<div class="PortfolioPage">
	<!--2nd Section Start -->
	<section class="CasestudiesSec PortfolioPageSec">
			<div class="filterSec">
				<div class="filterGrid uk-grid-collapse uk-child-width-1-3@m uk-child-width-1-2@s" id="portfolio" uk-grid="masonry: true">
					<!-- box Start -->
					<div class="filterhide scale-anm mobileapps" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/apps/tamasha.jpg">
							<img src="images/portfolio/portfoliopage/apps/tamasha.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm mobileapps" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/apps/ssgc.jpg">
							<img src="images/portfolio/portfoliopage/apps/ssgc.jpg" />
						</a>
					</div>
					<!-- box End -->

					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/psowebsite5e1f.jpg?v=2" data-caption="<a target='_blank' href='https://psopk.com/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/psowebsite5e1f.jpg?v=2" />
						</a>
						<a href="images/portfolio/portfoliopage/websites/psowebsite1.jpg" data-caption="<a target='_blank' href='https://psopk.com/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/psowebsite2.jpg" data-caption="<a target='_blank' href='https://psopk.com/'>Visit Website</a>"></a>
					</div>

					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/kitchen.jpg" data-caption="<a target='_blank' href='https://cadburypakistan.com/kitchen'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/kitchen.jpg" />
						</a>
					</div>


					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/new/cococola.jpg" data-caption="<a target='_blank' href='#'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/new/cococola.jpg" />
						</a>
					</div>


					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/new/adamjeeFinal.png" data-caption="<a target='_blank' href='https://www.adamjeelife.com/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/new/adamjeeFinal.png" />
						</a>
					</div>
					<!-- box End -->

					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/new/airwick.jpg" data-caption="<a target='_blank' href='https://www.airwick.ca/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/new/airwick.jpg" />
						</a>
					</div>

					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/new/jojo.jpg" data-caption="<a target='_blank' href='https://jojo.com.pk/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/new/jojo.jpg" />
						</a>
					</div>
					
					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/new/jublee.png" data-caption="<a target='_blank' href='#'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/new/jublee.png" />
						</a>
					</div>

					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/new/karachiCircket.jpg" data-caption="<a target='_blank' href='https://cadburypakistan.com/cricketworldcup'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/new/karachiCircket.jpg" />
						</a>
					</div>

					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/new/ocac.jpg" data-caption="<a target='_blank' href='https://www.ocac.org.pk/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/new/ocac.jpg" />
						</a>
					</div>

					<!-- box Start -->
					<div class="filterhide scale-anm mobileapps" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/new/socialApp.jpg" data-caption="<a target='_blank' href='https://socialpigeon.io/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/new/socialApp.jpg" />
						</a>
					</div>


					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/new/socialWeb.jpg" data-caption="<a target='_blank' href='https://socialpigeon.io/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/new/socialWeb.jpg" />
						</a>
					</div>
					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/nippon.jpg" data-caption="<a target='_blank' href='https://nipponpaint.com.pk/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/nippon.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm mobileapps" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/apps/pakcable.jpg">
							<img src="images/portfolio/portfoliopage/apps/pakcable.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm mobileapps" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/large/zong/01.png">
							<img src="images/portfolio/portfoliopage/large/zong/01.png" />
						</a>
						<a href="images/portfolio/portfoliopage/large/zong/02.png"></a>
						<a href="images/portfolio/portfoliopage/large/zong/03.png"></a>
						<a href="images/portfolio/portfoliopage/large/zong/04.png"></a>
						<a href="images/portfolio/portfoliopage/large/zong/05.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/1.png">
							<img src="images/portfolio/portfoliopage/mobadvert/1.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/alpacco/01.jpg">
							<img src="images/portfolio/portfoliopage/branding/alpacco/01.jpg" />
						</a>
			        	<a href="images/portfolio/portfoliopage/branding/alpacco/02.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/psosocial.png">
							<img src="images/portfolio/portfoliopage/psosocial.png" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
						<a href="images/portfolio/home/pso/pso-post02.mp4"></a>
			        	<a href="images/portfolio/home/pso/pso-post03.mp4"></a>
			        	<a href="images/portfolio/home/pso/pso-post04.mp4"></a>
			        	<a href="images/portfolio/home/pso/pso-post05.mp4"></a>
			        	<a href="images/portfolio/home/pso/pso-post06.mp4"></a>
			        	<a href="images/portfolio/home/pso/pso-post07.mp4"></a>
			        	<a href="images/portfolio/home/pso/pso-post08.mp4"></a>
			        	<a href="images/portfolio/home/pso/pso-post09.mp4"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/01.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/02.png"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/03.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/04.png"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/05.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/06.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/07.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/08.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/09.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/10.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/11.png"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/12.mp4"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/13.png"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/14.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/large/pso/15.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/2.png">
							<img src="images/portfolio/portfoliopage/mobadvert/2.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/cricket-pakistan-01.png" data-caption="<a target='_blank' href='https://cricketpakistan.com.pk/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/cricket-pakistan-01.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/websites/cricket-pakistan-02.png" data-caption="<a target='_blank' href='https://cricketpakistan.com.pk/'>Visit Website</a>"></a>
			        	<a href="images/portfolio/portfoliopage/websites/cricket-pakistan-03.png" data-caption="<a target='_blank' href='https://cricketpakistan.com.pk/'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm games" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/princegame.jpg">
							<img src="images/portfolio/portfoliopage/websites/princegame.jpg" />
						</a>
			        	<a href="images/portfolio/portfoliopage/websites/princegame.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm games" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/games/nandos-01.png">
							<img src="images/portfolio/portfoliopage/games/nandos-01.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/games/nandos-02.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/02.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/02.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/3.png">
							<img src="images/portfolio/portfoliopage/mobadvert/3.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/3NnoO-WJUic?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/new/Jubilee-My-Jubilee-App-Tap-Karo-Insure-Karo.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>Jubilee App DVC</span>
								<h5>Jubilee My Jubilee App Tap Karo Insure Karo</h5>
							</div>
						</a>
					</div>
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/S53f_NETJnw?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/new/PSO-46th-Anniversary-Flight-to-Glory.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>PSO DVC</span>
								<h5>PSO | 46th Anniversary -| Flight to Glory</h5>
							</div>
						</a>
					</div>
					<!-- box End -->

					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/_mQpT7IB5Lg?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/new/PSO-Carient-Fully-Synthetic-Motor-Oil.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>PSO DVC</span>
								<h5>PSO | Carient Fully Synthetic Motor Oil</h5>
							</div>
						</a>
					</div>
					<!-- box End -->

					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/gWSpHeLKK2Q?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/new/PSO-Father%27s-Day-Zid-Ho-Tou-Aesi.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>PSO DVC</span>
								<h5>PSO | Father's Day - Zid Ho Tou Aesi</h5>
							</div>
						</a>
					</div>
					<!-- box End -->

					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/CE3wANGkiLU?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/new/PSO-Quaid-Day-Tribute-to-Quaid.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>PSO DVC</span>
								<h5>PSO | Quaid Day - Tribute to Quaid</h5>
							</div>
						</a>
					</div>
					<!-- box End -->

					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/iO7TlgkpWZ8?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/new/PSO-Women%27s-Day-Mera-Safar-Mera-Azm.png" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>PSO DVC</span>
								<h5>PSO | Women's Day - Mera Safar, Mera Azm</h5>
							</div>
						</a>
					</div>
					<!-- box End -->

					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/EAtNeam4X1Q?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/new/PSO-World-Environment-Day-Hara-Bhara-Pakistan.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>PSO DVC</span>
								<h5>PSO | World Environment Day - Hara Bhara Pakistan</h5>
							</div>
						</a>
					</div>
				

					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/UoHHl71KkF4?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/anthem_pso.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>PSO DVC</span>
								<h5>The Sounds of Freedom</h5>
							</div>
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/rapid.png">
							<img src="images/portfolio/portfoliopage/rapid.png" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/4.png">
							<img src="images/portfolio/portfoliopage/mobadvert/4.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/portfolio-stormfiber.jpg" data-caption="<a target='_blank' href='https://www.stormfiber.com/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/portfolio-stormfiber.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/12.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/12.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/5.png">
							<img src="images/portfolio/portfoliopage/mobadvert/5.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobileapps" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/apps/bussines-recorder.png">
							<img src="images/portfolio/portfoliopage/apps/bussines-recorder.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/apps/bussines-recorder-1.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/bussines-recorder-2.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/bussines-recorder-3.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/DquW1YkrNGw?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/burger_beef_optp.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>OPTP DVC</span>
								<h5>Double Stack Loaded Beef Burgers</h5>
							</div>
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/home/optp/optp-post03.jpg">
							<img src="images/portfolio/home/optp/optp-post03.jpg" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
						<a href="images/portfolio/home/optp/optp-post02.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post04.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post05.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post06.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post07.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post08.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post09.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post10.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post11.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post12.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post13.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post14.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post15.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post16.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post17.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post19.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post20.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post21.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post22.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post23.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post24.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post25.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post26.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post27.jpg"></a>
			        	<a href="images/portfolio/home/optp/optp-post28.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/clothing/01.jpg">
							<img src="images/portfolio/portfoliopage/branding/clothing/01.jpg" />
						</a>
			        	<a href="images/portfolio/portfoliopage/branding/clothing/02.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/branding/clothing/03.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/6.png">
							<img src="images/portfolio/portfoliopage/mobadvert/6.png" />
						</a>
					</div>
					<!-- box End -->
				
					<!-- box start -->
					<div class="filterhide scale-anm games" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/games/dettol-01.png">
							<img src="images/portfolio/portfoliopage/games/dettol-01.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/WqRQ1GR2HZE?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/mechanic_carient_pso.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>PSO DVC</span>
								<h5>Carient Fully Synthetic Mechanic Testimonial</h5>
							</div>
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/7.png">
							<img src="images/portfolio/portfoliopage/mobadvert/7.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/03.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/03.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/HD2eekGobrs?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/womens_day_lemon_max.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>Lemon Max DVC</span>
								<h5>Happy Women's Day</h5>
							</div>
						</a>
					</div>
					<!-- box End -->
					
					<!-- box start -->
					<div class="filterhide scale-anm mobileapps" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/apps/sukhchan.png">
							<img src="images/portfolio/portfoliopage/apps/sukhchan.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/apps/sukhchan-1.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/sukhchan-2.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/sukhchan-3.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/13.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/13.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/8.png">
							<img src="images/portfolio/portfoliopage/mobadvert/8.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/large/mehranmasala/01.mp4">
							<img src="images/portfolio/portfoliopage/large/mehranmasala/01.png" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
						<a href="images/portfolio/portfoliopage/large/mehranmasala/02.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/mehranmasala/03.mp4"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/pepsi-01.png">
							<img src="images/portfolio/portfoliopage/websites/pepsi-01.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/websites/pepsi-02.png"></a>
			        	<a href="images/portfolio/portfoliopage/websites/pepsi-03.png"></a>
			        	<a href="images/portfolio/portfoliopage/websites/pepsi-04.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm games" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/games/colgate-01.png">
							<img src="images/portfolio/portfoliopage/games/colgate-01.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/games/colgate-02.png"></a>
			        	<a href="images/portfolio/portfoliopage/games/colgate-03.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/9.png">
							<img src="images/portfolio/portfoliopage/mobadvert/9.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/beauty/01.jpg">
							<img src="images/portfolio/portfoliopage/branding/beauty/01.jpg" />
						</a>
			        	<a href="images/portfolio/portfoliopage/branding/beauty/02.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/gzbXJzjeiDs?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/seekh_kabab_kenwood.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>Kenwood DVC</span>
								<h5>Seekh Kabab Recipe Kenwood Food Processor FP</h5>
							</div>
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/large/jazz/13.jpg">
							<img src="images/portfolio/portfoliopage/large/jazz/13.jpg" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
						<a href="images/portfolio/portfoliopage/large/jazz/01.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/jazz/02.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/jazz/03.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/jazz/04.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/jazz/05.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/jazz/06.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/jazz/07.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/jazz/08.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/jazz/09.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/jazz/10.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/jazz/11.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/jazz/12.mp4"></a>
					</div>
					<!-- box End -->
					
					
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/10.png">
							<img src="images/portfolio/portfoliopage/mobadvert/10.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/04.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/04.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/ab0iGzdcjLQ?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/shot_gun_optp.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>OPTP DVC</span>
								<h5>ShotGun Burger</h5>
							</div>
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobileapps" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/apps/mjunoon-1.png">
							<img src="images/portfolio/portfoliopage/apps/mjunoon-1.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/apps/mjunoon-2.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/mjunoon-3.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/mjunoon-4.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/mjunoon-5.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/mjunoon-6.png"></a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/kenwood.png">
							<img src="images/portfolio/portfoliopage/kenwood.png" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/14.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/14.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/11.png">
							<img src="images/portfolio/portfoliopage/mobadvert/11.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/hilton.png" data-caption="<a target='_blank' href='https://hiltonpharma.com/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/hilton.png" />
						</a>
						<a href="images/portfolio/portfoliopage/websites/hilton-1.png" data-caption="<a target='_blank' href='https://hiltonpharma.com/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/hilton-2.png" data-caption="<a target='_blank' href='https://hiltonpharma.com/'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm games" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/games/lemonmax-dishwash-01.png">
							<img src="images/portfolio/portfoliopage/games/lemonmax-dishwash-01.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/games/lemonmax-dishwash-02.png"></a>
			        	<a href="images/portfolio/portfoliopage/games/lemonmax-dishwash-03.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/tVrxZUb_PL0?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/burger_chicken_optp.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>OPTP DVC</span>
								<h5>Chicken Supremo Loaded Crispy Burgers</h5>
							</div>
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/12.png">
							<img src="images/portfolio/portfoliopage/mobadvert/12.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/fitness/01.jpg">
							<img src="images/portfolio/portfoliopage/branding/fitness/01.jpg" />
						</a>
			        	<a href="images/portfolio/portfoliopage/branding/fitness/02.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/branding/fitness/03.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/large/convo/01.mp4">
							<img src="images/portfolio/portfoliopage/large/convo/01.png" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
						<a href="images/portfolio/portfoliopage/large/convo/02.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/convo/03.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/convo/04.mp4"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/martindow.png" data-caption="<a target='_blank' href='https://martindow.fr/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/martindow.png" />
						</a>
						<a href="images/portfolio/portfoliopage/websites/martindow-1.png" data-caption="<a target='_blank' href='https://martindow.fr/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/martindow-2.png" data-caption="<a target='_blank' href='https://martindow.fr/'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/3d5O-HF4zvo?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/imran_ashraf_carient_pso.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>PSO DVC</span>
								<h5>Imran Ashraf About PSO Carient</h5>
							</div>
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/05.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/05.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm mobileapps" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/large/jazztv/01.png">
							<img src="images/portfolio/portfoliopage/large/jazztv/01.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/13.png">
							<img src="images/portfolio/portfoliopage/mobadvert/13.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mjunoonpost.png">
							<img src="images/portfolio/portfoliopage/mjunoonpost.png" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/pak-qatar-01.png" data-caption="<a target='_blank' href='https://www.pakqatar.com.pk/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/pak-qatar-01.png" />
						</a>
						<a href="images/portfolio/portfoliopage/websites/pak-qatar-02.png" data-caption="<a target='_blank' href='https://www.pakqatar.com.pk/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/pak-qatar-03.png" data-caption="<a target='_blank' href='https://www.pakqatar.com.pk/'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/15.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/15.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm games" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/games/brite-01.png">
							<img src="images/portfolio/portfoliopage/games/brite-01.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/games/brite-02.png"></a>
			        	<a href="images/portfolio/portfoliopage/games/brite-03.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/kenwood-01.png" data-caption="<a target='_blank' href='https://www.kenwoodpakistan.com/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/kenwood-01.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/websites/kenwood-02.png" data-caption="<a target='_blank' href='https://www.kenwoodpakistan.com/'>Visit Website</a>"></a>
			        	<a href="images/portfolio/portfoliopage/websites/kenwood-03.png" data-caption="<a target='_blank' href='https://www.kenwoodpakistan.com/'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/home/pediasure/pediasure-post01.mp4">
							<img src="images/portfolio/home/pediasure/pediasure-post01.jpg" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
						<a href="images/portfolio/home/pediasure/pediasure-post02.mp4"></a>
						<a href="images/portfolio/home/pediasure/pediasure-post03.jpg"></a>
						<a href="images/portfolio/home/pediasure/pediasure-post04.jpg"></a>
						<a href="images/portfolio/home/pediasure/pediasure-post05.jpg"></a>
						<a href="images/portfolio/home/pediasure/pediasure-post06.jpg"></a>
						<a href="images/portfolio/home/pediasure/pediasure-post07.jpg"></a>
						<a href="images/portfolio/home/pediasure/pediasure-post08.jpg"></a>
						<a href="images/portfolio/home/pediasure/pediasure-post09.jpg"></a>
						<a href="images/portfolio/home/pediasure/pediasure-post10.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/pediasure/01.mp4"></a>
						<a href="images/portfolio/home/pediasure/pediasure-post11.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/pediasure/02.mp4"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/14.png">
							<img src="images/portfolio/portfoliopage/mobadvert/14.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/food/01.jpg">
							<img src="images/portfolio/portfoliopage/branding/food/01.jpg" />
						</a>
			        	<a href="images/portfolio/portfoliopage/branding/food/02.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/branding/food/03.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/branding/food/04.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/Y9F_fAYKD90?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/beef_qeema_samosa_kenwood.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>Kenwood DVC</span>
								<h5>Beef Qeema Samosa Recipe Kenwood Chopper CH - 250</h5>
							</div>
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/mjunoon.jpg" data-caption="<a target='_blank' href='https://www.mjunoon.tv/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/mjunoon.jpg" />
						</a>
						<a href="images/portfolio/portfoliopage/websites/mjunoon-1.png" data-caption="<a target='_blank' href='https://www.mjunoon.tv/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/mjunoon-2.png" data-caption="<a target='_blank' href='https://www.mjunoon.tv/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/mjunoon-3.png" data-caption="<a target='_blank' href='https://www.mjunoon.tv/'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/total-parco-01.png" data-caption="<a target='_blank' href='https://www.parco.com.pk/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/total-parco-01.png" />
						</a>
						<a href="images/portfolio/portfoliopage/websites/total-parco-02.png" data-caption="<a target='_blank' href='https://www.parco.com.pk/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/total-parco-03.png" data-caption="<a target='_blank' href='https://www.parco.com.pk/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/total-parco-04.png" data-caption="<a target='_blank' href='https://www.parco.com.pk/'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/large/instum/04.jpg">
							<img src="images/portfolio/portfoliopage/large/instum/04.jpg" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
						<a href="images/portfolio/portfoliopage/large/instum/02.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/instum/03.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/instum/01.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobileapps games" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/apps/nurpur.png">
							<img src="images/portfolio/portfoliopage/apps/nurpur.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/apps/nurpur-1.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/nurpur-2.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/nurpur-3.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/nurpur-4.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/nurpur-5.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/nurpur-6.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/15.png">
							<img src="images/portfolio/portfoliopage/mobadvert/15.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/06.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/06.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/efu-01.png" data-caption="<a target='_blank' href='https://www.efulife.com/buynow/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/efu-01.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/websites/efu-02.png" data-caption="<a target='_blank' href='https://www.efulife.com/buynow/'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm games" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/games/lemonmax-01.png">
							<img src="images/portfolio/portfoliopage/games/lemonmax-01.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/games/lemonmax-02.png"></a>
			        	<a href="images/portfolio/portfoliopage/games/lemonmax-03.png"></a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/home/brite/brite-post01.mp4">
							<img src="images/portfolio/home/brite/brite-post01.jpg" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
						<a href="images/portfolio/home/brite/brite-post02.mp4"></a>
			        	<a href="images/portfolio/home/brite/brite-post03.png"></a>
			        	<a href="images/portfolio/home/brite/brite-post04.png"></a>
			        	<a href="images/portfolio/home/brite/brite-post05.png"></a>
			        	<a href="images/portfolio/home/brite/brite-post06.mp4"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/16.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/16.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/hinucon.png" data-caption="<a target='_blank' href='https://www.hinucon.com/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/hinucon.png" />
						</a>
						<a href="images/portfolio/portfoliopage/websites/hinucon-1.png" data-caption="<a target='_blank' href='https://www.hinucon.com/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/hinucon-2.png" data-caption="<a target='_blank' href='https://www.hinucon.com/'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/16.png">
							<img src="images/portfolio/portfoliopage/mobadvert/16.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/PDxlnPmLE8s?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/smoothie_kenwood.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>Kenwood DVC</span>
								<h5>Banana & Date Smoothie Recipe Kenwood Smoothie Maker SB - 255</h5>
							</div>
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/k9_krush/01.jpg">
							<img src="images/portfolio/portfoliopage/branding/k9_krush/01.jpg" />
						</a>
			        	<a href="images/portfolio/portfoliopage/branding/k9_krush/02.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/zongpost.png">
							<img src="images/portfolio/portfoliopage/zongpost.png" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobileapps" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/apps/nccpl.png">
							<img src="images/portfolio/portfoliopage/apps/nccpl.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/apps/nccpl-1.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/nccpl-2.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/nccpl-3.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/nccpl-4.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/mehranclub-01.png">
							<img src="images/portfolio/portfoliopage/websites/mehranclub-01.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/websites/mehranclub-02.png"></a>
			        	<a href="images/portfolio/portfoliopage/websites/mehranclub-03.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm games" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/games/colgate-scholarship-01.png">
							<img src="images/portfolio/portfoliopage/games/colgate-scholarship-01.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/games/colgate-scholarship-02.png"></a>
			        	<a href="images/portfolio/portfoliopage/games/colgate-scholarship-03.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/4-EoB8qdPwk?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/pizza_dvc_optp.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>OPTP DVC</span>
								<h5>OPTP Introduces Pizza!</h5>
							</div>
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/07.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/07.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/large/lemonmax/02.jpg">
							<img src="images/portfolio/portfoliopage/large/lemonmax/02.jpg" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
						<a href="images/portfolio/portfoliopage/large/lemonmax/01.png"></a>
						<a href="images/portfolio/portfoliopage/large/lemonmax/03.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/lemonmax/04.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/17.png">
							<img src="images/portfolio/portfoliopage/mobadvert/17.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/nccpl-01.png" data-caption="<a target='_blank' href='https://nccpl.com.pk/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/nccpl-01.png" />
						</a>
						<a href="images/portfolio/portfoliopage/websites/nccpl-02.png" data-caption="<a target='_blank' href='https://nccpl.com.pk/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/nccpl-03.png" data-caption="<a target='_blank' href='https://nccpl.com.pk/'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/6RUnNbv9GoA?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/bihari_boti_kenwood.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>Kenwood DVC</span>
								<h5>Beef Bihari Boti Recipe Kenwood Chopper Ch - 250</h5>
							</div>
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/17.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/17.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/lalani-01.png">
							<img src="images/portfolio/portfoliopage/websites/lalani-01.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/websites/lalani-02.png"></a>
			        	<a href="images/portfolio/portfoliopage/websites/lalani-03.png"></a>
			        	<a href="images/portfolio/portfoliopage/websites/lalani-04.png"></a>
			        	<a href="images/portfolio/portfoliopage/websites/lalani-05.png"></a>
			        	<a href="images/portfolio/portfoliopage/websites/lalani-06.png"></a>
			        	<a href="images/portfolio/portfoliopage/websites/lalani-07.png"></a>
			        	<a href="images/portfolio/portfoliopage/websites/lalani-08.png"></a>
			        	<a href="images/portfolio/portfoliopage/websites/lalani-09.png"></a>
			        	<a href="images/portfolio/portfoliopage/websites/lalani-10.png"></a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/large/homeage/01.mp4">
							<img src="images/portfolio/portfoliopage/large/homeage/01.png" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
						<a href="images/portfolio/portfoliopage/large/homeage/02.png"></a>
						<a href="images/portfolio/portfoliopage/large/homeage/03.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/homeage/04.png"></a>
						<a href="images/portfolio/portfoliopage/large/homeage/05.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/homeage/06.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/homeage/07.png"></a>
						<a href="images/portfolio/portfoliopage/large/homeage/08.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/homeage/09.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/18.png">
							<img src="images/portfolio/portfoliopage/mobadvert/18.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/oG151-HWsQ0?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/celebrity_shout_out_pso.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>PSO DVC</span>
								<h5>Celebrity Shoutout PSO Hi-Octane 97 Euro 5</h5>
							</div>
						</a>
			        	<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/0jG8M95CvTo?autoplay=1&amp;mute=1&amp;showinfo=0"></a>
			        	<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/6rlHrLi2Wzo?autoplay=1&amp;mute=1&amp;showinfo=0"></a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm mobileapps" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/movietime.png">
							<img src="images/portfolio/portfoliopage/movietime.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/social_atache/01.jpg">
							<img src="images/portfolio/portfoliopage/branding/social_atache/01.jpg" />
						</a>
			        	<a href="images/portfolio/portfoliopage/branding/social_atache/02.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/branding/social_atache/03.jpg"></a>
			        	<a href="images/portfolio/portfoliopage/branding/social_atache/04.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/sngpl-01.png" data-caption="<a target='_blank' href='https://www.sngpl.com.pk/web/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/sngpl-01.png" />
						</a>
						<a href="images/portfolio/portfoliopage/websites/sngpl-02.png" data-caption="<a target='_blank' href='https://www.sngpl.com.pk/web/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/sngpl-03.png" data-caption="<a target='_blank' href='https://www.sngpl.com.pk/web/'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/large/mrwhite/01.jpg">
							<img src="images/portfolio/portfoliopage/large/mrwhite/01.jpg" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
						<a href="images/portfolio/portfoliopage/large/mrwhite/02.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/mrwhite/03.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/isgs.png" data-caption="<a target='_blank' href='https://isgs.com.pk/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/isgs.png" />
						</a>
						<a href="images/portfolio/portfoliopage/websites/isgs-1.png" data-caption="<a target='_blank' href='https://isgs.com.pk/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/isgs-2.png" data-caption="<a target='_blank' href='https://isgs.com.pk/'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/xmen-01.png">
							<img src="images/portfolio/portfoliopage/websites/xmen-01.png" />
						</a>
						<a href="images/portfolio/portfoliopage/websites/xmen-02.png"></a>
						<a href="images/portfolio/portfoliopage/websites/xmen-03.png"></a>
						<a href="images/portfolio/portfoliopage/websites/xmen-04.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/tea/01.jpg">
							<img src="images/portfolio/portfoliopage/branding/tea/01.jpg" />
						</a>
			        	<a href="images/portfolio/portfoliopage/branding/tea/02.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm games" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/games/colgate-max-01.png">
							<img src="images/portfolio/portfoliopage/games/colgate-max-01.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/games/colgate-max-02.png"></a>
			        	<a href="images/portfolio/portfoliopage/games/colgate-max-03.png"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/19.png">
							<img src="images/portfolio/portfoliopage/mobadvert/19.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/lushcrush.png" data-caption="<a target='_blank' href='http://lushcrushpops.com/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/lushcrush.png" />
						</a>
						<a href="images/portfolio/portfoliopage/websites/lushcrush-1.png" data-caption="<a target='_blank' href='http://lushcrushpops.com/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/lushcrush-2.png" data-caption="<a target='_blank' href='http://lushcrushpops.com/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/lushcrush-3.png" data-caption="<a target='_blank' href='http://lushcrushpops.com/'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/large/dostea/01.png">
							<img src="images/portfolio/portfoliopage/large/dostea/01.png" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
						<a href="images/portfolio/portfoliopage/large/dostea/02.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/dostea/03.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/dostea/04.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/dostea/05.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/dostea/06.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/dostea/07.png"></a>
						<a href="images/portfolio/portfoliopage/large/dostea/08.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/dostea/09.jpg"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/08.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/08.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/pakistan-banao-01.png" data-caption="<a target='_blank' href='https://pakistanbanaocertificates.gov.pk/index'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/pakistan-banao-01.png" />
						</a>
						<a href="images/portfolio/portfoliopage/websites/pakistan-banao-02.png" data-caption="<a target='_blank' href='https://pakistanbanaocertificates.gov.pk/index'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/pakistan-banao-03.png" data-caption="<a target='_blank' href='https://pakistanbanaocertificates.gov.pk/index'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobile-adverting" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/mobadvert/20.png">
							<img src="images/portfolio/portfoliopage/mobadvert/20.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm mobileapps games" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/apps/getz-internal.png">
							<img src="images/portfolio/portfoliopage/apps/getz-internal.png" />
						</a>
			        	<a href="images/portfolio/portfoliopage/apps/getz-internal-1.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/getz-internal-2.png"></a>
			        	<a href="images/portfolio/portfoliopage/apps/getz-internal-3.png"></a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/candyland.png" data-caption="<a target='_blank' href='https://candyland.com.pk/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/candyland.png" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/18.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/18.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/home/lushcrush/lushcrush-post02.jpg">
							<img src="images/portfolio/home/lushcrush/lushcrush-post02.jpg" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
						<a href="images/portfolio/home/lushcrush/lushcrush-post01.mp4"></a>
						<a href="images/portfolio/home/lushcrush/lushcrush-post03.jpg"></a>
						<a href="images/portfolio/home/lushcrush/lushcrush-post04.mp4"></a>
						<a href="images/portfolio/home/lushcrush/lushcrush-post05.jpg"></a>
						<a href="images/portfolio/home/lushcrush/lushcrush-post06.jpg"></a>
						<a href="images/portfolio/home/lushcrush/lushcrush-post07.jpg"></a>
						<a href="images/portfolio/home/lushcrush/lushcrush-post08.jpg"></a>
						<a href="images/portfolio/home/lushcrush/lushcrush-post09.jpg"></a>
						<a href="images/portfolio/home/lushcrush/lushcrush-post10.jpg"></a>
						<a href="images/portfolio/home/lushcrush/lushcrush-post11.jpg"></a>
						<a href="images/portfolio/home/lushcrush/lushcrush-post12.mp4"></a>
						<a href="images/portfolio/home/lushcrush/lushcrush-post13.mp4"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/01.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/01.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm websites" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/websites/triangle-01.png" data-caption="<a target='_blank' href='http://tri-angels.com.pk/html/'>Visit Website</a>">
							<img src="images/portfolio/portfoliopage/websites/triangle-01.png" />
						</a>
						<a href="images/portfolio/portfoliopage/websites/triangle-02.png" data-caption="<a target='_blank' href='http://tri-angels.com.pk/html/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/triangle-03.png" data-caption="<a target='_blank' href='http://tri-angels.com.pk/html/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/triangle-04.png" data-caption="<a target='_blank' href='http://tri-angels.com.pk/html/'>Visit Website</a>"></a>
						<a href="images/portfolio/portfoliopage/websites/triangle-05.png" data-caption="<a target='_blank' href='http://tri-angels.com.pk/html/'>Visit Website</a>"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/10.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/10.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/kaybees.png">
							<img src="images/portfolio/portfoliopage/kaybees.png" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/19.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/19.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/dxxZovomI6I?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/beef_seekh_kabab_kenwood.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>Kenwood DVC</span>
								<h5>Beef Seekh Kabab Recipe Kenwood Food Processor FDM - 307</h5>
							</div>
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/home/optp/optp-post01.mp4">
			        		<img src="images/products/9.jpg" alt="">
			        		<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
			        	</a>
			        	<a href="images/portfolio/home/optp/optp-post02.mp4"></a>
			        	<a href="images/portfolio/home/optp/optp-post03.mp4"></a>
			        	<a href="images/portfolio/home/optp/optp-post04.mp4"></a>
			        	<a href="images/portfolio/home/optp/optp-post05.mp4"></a>
			        	<a href="images/portfolio/home/optp/optp-post06.mp4"></a>
			        	<a href="images/portfolio/home/optp/optp-post07.mp4"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/11.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/11.jpg" />
						</a>
					</div>
					<!-- box End -->
					<!-- box Start -->
					<div class="filterhide scale-anm creatives fbicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/large/ensure/05.jpg">
							<img src="images/portfolio/portfoliopage/large/ensure/05.jpg" />
							<ul class="protSocial">
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="facebook"></span></li>
								<li><span class="uk-icon-button uk-box-shadow-medium" uk-icon="instagram"></span></li>
							</ul>
						</a>
						<a href="images/portfolio/portfoliopage/large/ensure/02.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/ensure/03.jpg"></a>
						<a href="images/portfolio/portfoliopage/large/ensure/04.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/ensure/01.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/ensure/06.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/ensure/07.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/ensure/08.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/ensure/09.mp4"></a>
						<a href="images/portfolio/portfoliopage/large/ensure/10.mp4"></a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm production videoicon" uk-lightbox="animation: slide; video-autoplay: true;">
						<a data-type="iframe" href="https://www.youtube-nocookie.com/embed/VRzCcCQpWx0?autoplay=1&amp;mute=1&amp;showinfo=0">
							<img src="images/portfolio/portfoliopage/production/roti_wrap_optp.jpg" />
							<div class="videoprodbox">
								<img src="images/playicon2.svg" uk-svg="">
								<span>OPTP DVC</span>
								<h5>Roti Wrap OPTP Pakistan</h5>
							</div>
						</a>
					</div>
					<!-- box End -->
					<!-- box start -->
					<div class="filterhide scale-anm branding" uk-lightbox="animation: slide; video-autoplay: true;">
						<a href="images/portfolio/portfoliopage/branding/logos/20.jpg">
							<img src="images/portfolio/portfoliopage/branding/logos/20.jpg" />
						</a>
					</div>
					<!-- box End -->
				</div>   
				<div style="clear:both;"></div>
			</div>
	</section>
</div>
<script src='cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js'></script>
<script>
jQuery('#portfolio').mixItUp({  
	selectors: {
		target: '.filterhide',
		filter: '.filter',
		sort: '.sort-btn'
	},
  
	animation: {
		animateResizeContainer: false,
		effects: 'fade scale'
	}
});
</script>


<?php include 'footer.php'; ?>