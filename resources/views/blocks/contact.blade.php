<!--- contact --->

<section
	data-gsap-anim="section"
	@if(!empty($section_id)) id="{{ $section_id }}" @endif
	@class([ 'b-contact overflow-hidden relative pt-30 pb-30' ,
	$sectionClass=> filled($sectionClass),
	$section_class => filled($section_class),
	$background => filled($background) && $background !== 'none',
	])>

	<div class="__wrapper c-main relative z-2">

		<div class="relative grid items-center gap-10 z-10">
			<!-- <div class="__content w-full lg:w-11/12 flex flex-col justify-between">
				<h2 data-gsap-element="header" class="m-header">{!! $g_contact_1['header'] !!}</h2>
				<p>{!! $g_contact_1['txt'] !!}</p>

				<div class="mt-6">
					<b class="!text-primary">Numer telefonu</b>
					<a data-gsap-element="txt" class="__phone flex items-center text-white w-max" href="tel:{{ $g_contact_1['phone'] }}">{{ $g_contact_1['phone'] }}</a>
				</div>
				<div class="mt-2">
					<b class="!text-primary">Adres e-mail</b>
					<a data-gsap-element="txt" class="__mail flex items-center text-white w-max" href="mailto:{{ $g_contact_1['mail'] }}">{{ $g_contact_1['mail'] }}</a>
				</div>
			</div>
 -->
			<div data-gsap-element="form" class="">
				<h4 class="!text-primary mb-4">{!! $g_contact_2['title'] !!}</h4>
				{!! do_shortcode($g_contact_2['shortcode']) !!}
			</div>
		</div>
	</div>

	@if(!empty($g_contact_1['image']['url']))
    <img class="absolute opacity-10 bottom-0 left-0 -translate-x-3/4 translate-y-2/3" src="{{ $g_contact_1['image']['url'] }}" alt="{{ $g_contact_1['image']['alt'] ?? '' }}">
    @endif
</section>