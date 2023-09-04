@include('frontend.body.header')

<body>

<!-- WRAPPER ALL -->
<div class="iknow_tm_all_wrap" data-magic-cursor="show"> <!-- If you want disable magic cursor change value to "hide" -->

	<!-- MODALBOX -->
	<div class="iknow_tm_modalbox">
		<div class="box_inner">
			<div class="close">
				<a href="#"><img class="svg" src="{{ asset('frontend') }}/img/svg/cancel.svg" alt="" /></a>
			</div>
			<div class="description_wrap"></div>
		</div>
	</div>
	<!-- /MODALBOX -->

	<!-- TOPBAR -->
    @include('frontend.other_page.topbar')
	<!-- /TOPBAR -->

	<!-- HERO -->
    @include('frontend.other_page.hero_section')
	<!-- /HERO -->

	<!-- EXTRA MENU -->
	<div class="iknow_tm_extra_menu">
		<div class="container">
			<div class="menu_list">
				<ul class="unordered">
					<li class="unorderest_li">
						<div class="list_in">
							<div class="list_icon">
								<img class="svg" src="{{ asset('frontend') }}/img/svg/archive.svg" alt="" />
							</div>
							<div class="center">
								<span>About Me</span>
							</div>
							<div class="down_icon">
								<img class="svg" src="{{ asset('frontend') }}/img/svg/down.svg" alt="" />
							</div>
							<a class="iknow_tm_full_link" href="#about"></a>
						</div>
					</li>
					<li class="unorderest_li">
						<div class="list_in">
							<div class="list_icon">
								<img class="svg" src="{{ asset('frontend') }}/img/svg/contacs.svg" alt="" />
							</div>
							<div class="center">
								<span>Resume</span>
							</div>
							<div class="down_icon">
								<img class="svg" src="{{ asset('frontend') }}/img/svg/down.svg" alt="" />
							</div>
							<a class="iknow_tm_full_link" href="#resume"></a>
						</div>
					</li>
					<li class="unorderest_li">
						<div class="list_in">
							<div class="list_icon">
								<img class="svg" src="{{ asset('frontend') }}/img/svg/briefcase.svg" alt="" />
							</div>
							<div class="center">
								<span>Portfolio</span>
							</div>
							<div class="down_icon">
								<img class="svg" src="{{ asset('frontend') }}/img/svg/down.svg" alt="" />
							</div>
							<a class="iknow_tm_full_link" href="#portfolio"></a>
						</div>
					</li>
					<li class="unorderest_li">
						<div class="list_in">
							<div class="list_icon">
								<img class="svg" src="{{ asset('frontend') }}/img/svg/gear.svg" alt="" />
							</div>
							<div class="center">
								<span>Service</span>
							</div>
							<div class="down_icon">
								<img class="svg" src="{{ asset('frontend') }}/img/svg/down.svg" alt="" />
							</div>
							<a class="iknow_tm_full_link" href="#service"></a>
						</div>
					</li>
					<li class="unorderest_li">
						<div class="list_in">
							<div class="list_icon">
								<img class="svg" src="{{ asset('frontend') }}/img/svg/message.svg" alt="" />
							</div>
							<div class="center">
								<span>Testimonials</span>
							</div>
							<div class="down_icon">
								<img class="svg" src="{{ asset('frontend') }}/img/svg/down.svg" alt="" />
							</div>
							<a class="iknow_tm_full_link" href="#testimonials"></a>
						</div>
					</li>
					<li class="unorderest_li">
						<div class="list_in">
							<div class="list_icon">
								<img class="svg" src="{{ asset('frontend') }}/img/svg/writing.svg" alt="" />
							</div>
							<div class="center">
								<span>Blog</span>
							</div>
							<div class="down_icon">
								<img class="svg" src="{{ asset('frontend') }}/img/svg/down.svg" alt="" />
							</div>
							<a class="iknow_tm_full_link" href="#news"></a>
						</div>
					</li>
					<li class="unorderest_li">
						<div class="list_in">
							<div class="list_icon">
								<img class="svg" src="{{ asset('frontend') }}/img/svg/letter.svg" alt="" />
							</div>
							<div class="center">
								<span>Contact</span>
							</div>
							<div class="down_icon">
								<img class="svg" src="{{ asset('frontend') }}/img/svg/down.svg" alt="" />
							</div>
							<a class="iknow_tm_full_link" href="#contact"></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /EXTRA MENU -->

	<!-- MAINPART -->
	<div class="container">

		<!-- ABOUT -->
        @include('frontend.other_page.about')
		<!-- /ABOUT -->

		<!-- RESUME -->
        @include('frontend.other_page.resume')
		<!-- /RESUME -->

		<!-- PORTFOLIO -->
        @include('frontend.other_page.portfolio')
		<!-- /PORTFOLIO -->

		<!-- SERVICES -->
        @include('frontend.other_page.service')
		<!-- /SERVICES -->

		<!-- TESTIMONIALS -->
        @include('frontend.other_page.testimonial')
		<!-- /TESTIMONIALS -->

		<!-- NEWS -->
        @include('frontend.other_page.blog')
		<!-- /NEWS -->


		<!-- CONTACT -->
        @include('frontend.other_page.contact')
		<!-- /CONTACT -->

	</div>
	<!-- /MAINPART -->

	<!-- COPYRIGHT -->
	<div class="iknow_tm_copyright">
		<div class="container">
			<div class="inner">
				<div class="left">
					<p>Designed with love &copy; <a href="https://themeforest.net/user/marketify" target="_blank">Marketify</a></p>
				</div>
				<div class="right">
					<ul>
						<li><a href="#">Terms &amp; Condition</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /COPYRIGHT -->

	<!-- MAGIC CURSOR -->
	<div class="mouse-cursor cursor-outer"></div>
	<div class="mouse-cursor cursor-inner"></div>
	<!-- /MAGIC CURSOR -->

</div>
<!-- / WRAPPER ALL -->

@include('frontend.body.script')

</body>
</html>
