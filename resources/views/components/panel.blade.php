@php
    $classes =
        'p-4 bg-white/5 rounded-xl border border-transparent hover:border-red-800 group cursor-pointer transition-colors duration-300 hover:shadow-[rgba(255,60,0,0.5)_5px_1px_1px_0px]';
@endphp
<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
