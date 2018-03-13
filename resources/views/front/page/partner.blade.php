@extends('front.layouts.app')

@section('meta_title')
    Partners
@endsection

@section('content')
<main>
	<section class="container" id="pozadina">

	<div class="container">
		<ul class="b-crumbs">
            <li>
                <a href="http://kaffe.test:8000">
                    Home
                </a>
            </li>
            <li>
                <a href="http://kaffe.test:8000/shop">
                    Shop
                </a>
            </li>
                                        <li>
                <span>Lavazza</span>
            </li>
                                </ul>
		<h1 class="main-ttl" style="margin: 0;"><span>Partners</span></h1>
		<div class="partners_wrap">
			<div class="section_items">
			<div class="partners_item">
				<div class="partners_img">
					<img class="partners_img_inner" src="/front/assets/img/mpsoft_logo.jpg" alt="">
				</div>
					<div class="partners_caption">
						<h3><a href="">Company name</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia illum perspiciatis, minus debitis, ipsam sed possimus modi deleniti, nihil odit molestias dolor. Ad vero beatae, maxime, similique delectus soluta saepe.</p>
					</div>
			</div>

			<div class="partners_item">
				<div class="partners_img">
					<img class="partners_img_inner" src="/front/assets/img/mpsoft_logo.jpg" alt="">
				</div>
					<div class="partners_caption">
						<h3><a href="">Company name</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia illum perspiciatis, minus debitis, ipsam sed possimus modi deleniti, nihil odit molestias dolor. Ad vero beatae, maxime, similique delectus soluta saepe.</p>
					</div>
			</div>

			<div class="partners_item">
				<div class="partners_img">
					<img class="partners_img_inner" src="/front/assets/img/mpsoft_logo.jpg" alt="">
				</div>
					<div class="partners_caption">
						<h3><a href="">Company name</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia illum perspiciatis, minus debitis, ipsam sed possimus modi deleniti, nihil odit molestias dolor. Ad vero beatae, maxime, similique delectus soluta saepe.</p>
					</div>
			</div>

			<div class="partners_item">
				<div class="partners_img">
					<img class="partners_img_inner" src="/front/assets/img/mpsoft_logo.jpg" alt="">
				</div>
					<div class="partners_caption">
						<h3><a href="">Company name</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia illum perspiciatis, minus debitis, ipsam sed possimus modi deleniti, nihil odit molestias dolor. Ad vero beatae, maxime, similique delectus soluta saepe.</p>
					</div>
			</div>
			</div>

			<div class="section_items">
			<div class="partners_item">
				<div class="partners_img">
					<img class="partners_img_inner" src="/front/assets/img/mpsoft_logo.jpg" alt="">
				</div>
					<div class="partners_caption">
						<h3><a href="">Company name</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia illum perspiciatis, minus debitis, ipsam sed possimus modi deleniti, nihil odit molestias dolor. Ad vero beatae, maxime, similique delectus soluta saepe.</p>
					</div>
			</div>

			<div class="partners_item">
				<div class="partners_img">
					<img class="partners_img_inner" src="/front/assets/img/mpsoft_logo.jpg" alt="">
				</div>
					<div class="partners_caption">
						<h3><a href="">Company name</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia illum perspiciatis, minus debitis, ipsam sed possimus modi deleniti, nihil odit molestias dolor. Ad vero beatae, maxime, similique delectus soluta saepe.</p>
					</div>
			</div>

			<div class="partners_item">
				<div class="partners_img">
					<img class="partners_img_inner" src="/front/assets/img/mpsoft_logo.jpg" alt="">
				</div>
					<div class="partners_caption">
						<h3><a href="">Company name</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia illum perspiciatis, minus debitis, ipsam sed possimus modi deleniti, nihil odit molestias dolor. Ad vero beatae, maxime, similique delectus soluta saepe.</p>
					</div>
			</div>

			<div class="partners_item">
				<div class="partners_img">
					<img class="partners_img_inner" src="/front/assets/img/mpsoft_logo.jpg" alt="">
				</div>
					<div class="partners_caption">
						<h3><a href="">Company name</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia illum perspiciatis, minus debitis, ipsam sed possimus modi deleniti, nihil odit molestias dolor. Ad vero beatae, maxime, similique delectus soluta saepe.</p>
					</div>
			</div>
			</div>
		</div>
	</div>
	</section>
</main>

	<style>
		.partners_wrap {
			display: flex;
    		flex-direction: column;
    		justify-content: center;
    		align-items: center;
		}

		.partners_item {
			display: block;
			width: 270px;
			height: auto;
			background-color: #fff;
			margin: 50px 0;
		}

		.partners_img {
			position: relative;
		}

		.partners_img:after {
			content: '';
    		display: block;
    		position: absolute;
    		bottom: -1px;
    		height: 3px;
    		background: #583520;
    		left: -1px;
    		right: -1px;
    		opacity: 1;
    		transition: all 0.3s;
    		z-index: 5000;
		}

		.partners_img_inner {
			height: 200px;
			width: 270px;
		}

		.partners_caption > h3 {
			text-align: center;
			color: #583520;
			font-size: 25px;
			margin: 10px 0;
		}

		.partners_caption > p {
			text-align: center;
			color: #373d54;
			margin: 10px 0;
			padding: 0 15px 10px;
		}

		@media (min-width: 992px) {

			.partners_wrap {

			}

			.section_items {
				display: flex;
				flex-direction: row;
				justify-content: space-between;
				width: 100%;
			}
		}
	</style>

@endsection




















