<section class="flex flex-col gap-5">
	<div class=" relative">
		<img class="border-2 border-carousel-border rounded-lg" src=" {{ asset('images/product_img.svg') }} " alt="">
		<x-discount/>
	</div>
	<div class="flex gap-1">
		<img class="border-2 border-carousel-border rounded-lg w-20 h-20" src="{{ asset('images/product_img.svg') }}" alt="">
		<img class="border-2 border-carousel-border rounded-lg w-20 h-20" src="{{ asset('images/product_img.svg') }}" alt="">
	</div>
</section>