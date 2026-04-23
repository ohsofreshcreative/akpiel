@php
$sectionClass = '';
$sectionClass .= $nomt ? ' !mt-0' : '';
@endphp

<!--- what -->

<section data-gsap-anim="section" @if(!empty($section_id)) id="{{ $section_id }}" @endif class="b-what -smt relative overflow-hidden {{ $sectionClass }} {{ $section_class }}">

	<div class="bg-gradient-light rounded-4xl overflow-hidden mx-6 sm:mx-6 md:mx-10 lg:mx-20">

		<div class="__wrapper c-main text-center relative z-20 py-40">
			<img src="{{ $what['image']['url'] }}" alt="{{ $what['image']['alt'] }}" class="__img1 absolute bottom-6 md:bottom-20 left-2/12 w-30 pointer-events-none z-10" />

			<img src="{{ $what['image2']['url'] }}" alt="{{ $what['image2']['alt'] }}" class="__img1 absolute top-6 md:-top-20 right-1/12 w-130 pointer-events-none z-10" />

			<div class="relative w-full z-10 md:w-1/2 mx-auto">
				@if ($what['header'])
				<h3 data-gsap-element="header" class=" m-header">{{ $what['header'] }}</h3>
				@endif
				@if ($what['txt'])
				<div data-gsap-element="txt" class="">{!! $what['txt'] !!}</div>
				@endif
				@if (!empty($what['button']))
				<x-button
					:href="$what['button']['url']"
					variant="secondary"
					class="mt-6"
					data-gsap-element="btn" target="_blank">
					{{ $what['button']['title'] }}
				</x-button>
				@endif
			</div>


			<img class="absolute opacity-20 top-0 right-0 -translate-x-1/10 -translate-y-2/3 pointer-events-none" src="/wp-content/uploads/2026/02/shape.svg" />
		</div>
	</div>
</section>