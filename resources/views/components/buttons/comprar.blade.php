@props(['href' => '#'])

<a 
  href="{{ $href }}"
  {{ $attributes->merge(['class' => 'flex items-center justify-center rounded-full w-28 h-10 text-xs font-semibold']) }}
>
  Comprar ahora
</a>