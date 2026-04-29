@php
$sectionClass = '';
$sectionClass .= $nomt ? ' !mt-0' : '';
@endphp

<!--- what -->

<section data-gsap-anim="section" @if(!empty($section_id)) id="{{ $section_id }}" @endif class="b-what -smt relative overflow-hidden {{ $sectionClass }} {{ $section_class }}">

	<div class="bg-gradient-light rounded-4xl overflow-hidden mx-6 sm:mx-6 md:mx-10 lg:mx-20">

		<div class="__wrapper c-main relative z-20 py-30">

			<div class="relative w-full z-10 md:w-2/3 mx-auto">
				@if ($what['header'])
				<h3 data-gsap-element="header" class=" m-header !text-white">{{ $what['header'] }}</h3>
				@endif
				@if ($what['txt'])
				<div data-gsap-element="txt" class="text-white">{!! $what['txt'] !!}</div>
				@endif
				@if (!empty($what['button']))
				<x-button
					:href="$what['button']['url']"
					variant="white"
					class="mt-6"
					data-gsap-element="btn" target="_blank">
					{{ $what['button']['title'] }}
				</x-button>
				@endif
			</div>


			<img class="absolute opacity-20 top-0 right-0 -translate-x-1/10 -translate-y-2/3 pointer-events-none" src="/wp-content/uploads/2026/04/circle.svg" />
		</div>
	</div>
</section>