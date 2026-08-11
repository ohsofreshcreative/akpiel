@props([
'href' => null,
'variant' => 'primary',
'tag' => null,
'target' => null
])

@php
$tag = $tag ?? ($href ? 'a' : 'button');
$classes = 'btn btn-' . $variant;
@endphp

@if ($tag === 'a')
<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }} @if(!empty($target)) target="{{ $target }}" @endif>
	{{ $slot }}
</a>
@else
<button {{ $attributes->merge(['class' => $classes]) }}>
	{{ $slot }}
</button>
@endif

<!---
@if (!empty($what['button']))
				<x-button
					:href="$what['button']['url']"
					variant="secondary"
					class="mt-6"
					data-gsap-element="btn">
					{{ $what['button']['title'] }}
				</x-button>
				@endif
				--->