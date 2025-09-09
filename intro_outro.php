

<?php
$pageTitle = "VisionTech | Intro & Outro";
$pageDescription = "Welcome to VisionTech, your trusted partner for innovative web solutions.";
$pageKeywords = "web development, IT services, software solutions";
include 'header.php';
?>

<!-- First Section Start -->
<section class="HomeHeader CreativeDesignHeader">
	<div class="headerimagezoom uk-visible@m" style="background-image: url(images/creativedesign/i.jpg);"></div>
	<div class="headerimagezoom uk-hidden@m" style="background-image: url(images/creativedesign/e.jpg);"></div>
	<div class="colageSliderBox">
		<div class="colageSlide" style="background-image: url(images/creativedesign/colage/a.jpg);"></div>
		<div class="colageSlide" style="background-image: url(images/creativedesign/colage/b.jpg);"></div>
		<div class="colageSlide" style="background-image: url(images/creativedesign/colage/c.jpg);"></div>
		<div class="colageSlide" style="background-image: url(images/creativedesign/colage/d.jpg);"></div>
		<div class="colageSlide" style="background-image: url(images/creativedesign/colage/e.jpg);"></div>
		<div class="colageSlide" style="background-image: url(images/creativedesign/colage/f.jpg);"></div>
		<div class="colageSlide" style="background-image: url(images/creativedesign/colage/h.jpg);"></div>
		<div class="colageSlide" style="background-image: url(images/creativedesign/colage/i.jpg);"></div>
		<div class="colageSlide" style="background-image: url(images/creativedesign/colage/j.jpg);"></div>
		
	</div>
	
	<div class="mdl">
		<div class="mdl_inner">
			<div class="uk-container ContainerCustom opacitytoggle">
				<p uk-scrollspy="cls:uk-animation-fade; delay: 500">Intro & Outro</p>
				<h1 class="heading" uk-scrollspy="cls:uk-animation-fade; delay: 1000">
				The intros and outros <br> that you actually remember.
				</h1>
				<div class="" uk-grid="">
					<div class="uk-width-auto" uk-scrollspy="cls:uk-animation-fade; delay: 1300">
						<a class="BtnWithArrow showcontactformbtn" href="#ContactSec" uk-scroll>Let's Talk <img src="images/arrow_forward.svg" uk-svg="" /></a>
					</div>
					<!-- <div class="uk-width-auto" uk-scrollspy="cls:uk-animation-fade; delay: 1500">
						<a class="BtnWithIcon" href="case-studies/lush-crush.html"><img src="images/playicon.svg" uk-svg="" /> <span>Customer Stories</span></a>
					</div> -->
				</div>

			</div>
		</div>
	</div>
	<div class="uk-container ContainerCustom">
		<div class="HomeBtm" uk-scrollspy="cls:uk-animation-fade; delay: 1500">
		
			<a href="javascript:;" class="ColageBtnDesktop"><span class="point_anim"></span> <span class="heading_anim">SEE IN MOTION</span> </a>
			<a href="javascript:;" class="ColageBtnMobile"><span class="point_anim"></span> <span class="heading_anim">SEE IN MOTION</span> </a>
			
		</div>
		
	</div>
</section>
<!-- First Section End -->
<div class="FadeContainer" uk-scrollspy="cls: uk-animation-fade; target: .AnimFade; delay: 250">
	<div class="AboutPage CreativeDesignPage" uk-scrollspy="cls: uk-animation-slide-bottom-medium; target: .AnimSlide; delay: 250">
		<!-- 2nd Section Start -->
		<section class="TechCompanySec uk-text-center">
			<div class="uk-container ContainerCustom">
				<h6 class="sec1heading AnimFade">Openings and Endings into Memorable Moments</h6>
				<h2 class="sec2heading AnimFade">Intros & Outros for Streamers and Creators</h2>
				<div class="toggleBtnBox">
					<button class="toggleBtn"><img src="images/explorermore.svg" uk-svg="" /></button>
				</div>
				<div class="toggleBox">
					<div class="pmdm"><p>
We produce intros and outros that fit your channel's style. This includes cool animated intros, end screens with call-to-action features, and a few visually awesome transitions to hook your audience.
</p></div>

				<div class="pmdm"><p>
We help streamers make an awesome first impression with amazing, top-notch graphics. Our designs give your channel that crisp, lively vibe and keep it consistent across all videos.
</p></div>

				<div class="pmdm"><p>
All our intros and outros are designed for a reason, marketing your brand and entertaining your audience. Whether you're streaming small or running big channels, our designs get your content to flow much more smoothly.
</p></div>
					
					
				</div>

			</div>
		</section>
		<!-- 2nd Section End -->
		<!-- 3rd Section Start -->
		<section class="AboutGameChangeSec uk-text-center">
			<div class="uk-container ContainerCustom">
				<span class="borderTop"></span>
				<div class="AboutGameChangeBox">
					<h2 class="AnimFade">Why Our Gaming Intros & Outros Work</h2>
					<p class="AnimFade">We create designs that do more than just look good. They grab viewers' attention, generate familiarity, and engage viewers. Every design is unique to your channel's look and feel, a professional, unified brand presence.</p>
					
				</div>
			</div>
		</section>
		<!-- 3rd Section End -->
	<?php include 'form.php'; ?>
		<!-- 10th Section End -->
	</div>
	<script type="text/javascript">
		// colage btn 
		$(document).ready(function() {
				$('.ColageBtnDesktop').on('mouseenter mouseleave', function() {
					$('.colageSliderBox').toggleClass('active');
					$('.opacitytoggle').toggleClass('active');

				});

				$('.ColageBtnMobile').click(function(){
					$('.colageSliderBox').toggleClass('active');
				});

			});
	</script>


<?php include 'footer.php'; ?>