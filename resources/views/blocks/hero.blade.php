@php
$sectionClass = '';
$sectionClass .= $nomt ? ' !mt-0' : '';
@endphp

<!-- hero --->

<section
    data-gsap-anim="section"
    @if(!empty($section_id)) id="{{ $section_id }}" @endif
    class="b-hero relative bg-cover bg-right overflow-hidden {{ $sectionClass }} {{ $section_class }}"
    @if (!empty($g_hero['image']['url'])) style="background-image: url('{{ $g_hero['image']['url'] }}')" @endif>

    <div class="absolute inset-0 bg-gradient-to-r from-white to-transparent"></div>

    <div class="__wrapper c-main relative z-20 py-30">
        <div class="__col grid grid-cols-1 lg:grid-cols-2 items-center gap-8 lg:gap-20 mt-30 md:mt-0 ">

            <div class="__hero order2 lg:py-10">
                <h1 data-gsap-element="header" class="">{{ $g_hero['title'] }}</h1>

                <div data-gsap-element="txt" class="__txt mt-4">
                    {!! $g_hero['txt'] !!}
                </div>

                @if (!empty($g_hero['hint']))
                <div data-gsap-element="box" class="__hint flex items-center radius bg-primary-lighter border border-dashed border-primary p-6 gap-4 mt-6">
                    @if (!empty($g_hero['image_hint']['url']))
                    <img
                        class="max-w-10 aspect-square"
                        src="{{ $g_hero['image_hint']['url'] }}"
                        alt="{{ $g_hero['image_hint']['alt'] ?? '' }}">
                    @endif

                    @if (!empty($g_hero['header_hint']))
                    <div class="">
                        {{ $g_hero['header_hint'] }}
                    </div>
                    @endif
                </div>
                @endif

                <div class="inline-buttons mt-6">
                    @if (!empty($g_hero['button1']))
                    <x-button
                        :href="$g_hero['button1']['url']"
                        variant="secondary"
                        class=""
                        data-gsap-element="btn">
                        {{ $g_hero['button1']['title'] }}
                    </x-button>
                    @endif
                    @if (!empty($g_hero['button2']))
                    <x-button
                        :href="$g_hero['button2']['url']"
                        variant="primary"
                        class=""
                        data-gsap-element="btn">
                        {{ $g_hero['button2']['title'] }}
                    </x-button>
                    @endif
                </div>

                <a data-gsap-element="polmed" target="_blank" class="block mt-10" href="/wp-content/uploads/2026/03/POLMEDTECH_Certyfikat_2996.pdf"><img class="w-[240px] rounded-full" src="/wp-content/uploads/2026/03/polmed.jpg"/></a>

            </div>

            

        </div>
    </div>

    <img class="absolute opacity-20 top-0 left-0 -translate-x-3/4 -translate-y-1/3 pointer-events-none" src="/wp-content/uploads/2026/02/shape.svg" />

   <!--  <img class="absolute opacity-30 top-1/4 right-0 translate-x-2/4 -translate-y-1/3 pointer-events-none" src="/wp-content/uploads/2026/02/shape.svg" /> -->

    <img class="absolute opacity-20 top-5/12 -right-40 translate-x-1/10 -translate-y-2/3 pointer-events-none" src="/wp-content/uploads/2026/02/shape.svg" />

</section>