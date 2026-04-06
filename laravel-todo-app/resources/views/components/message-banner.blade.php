{{-- Old simple version (commented for reference) --}}
{{--
<div>
    <span class="{{ $class ?? 'success' }}">{{ $msg }}</span>
</div>
--}}

{{-- New dynamic version (5 types) --}}
@props([
    'type' => $type ?? 'success',
    'title' => $title ?? null,
    'message' => $message ?? null,
])

@php
    // Styles for 5 types
    $styles = [
        'success' => [
                        'wrap' => 'border-emerald-200 bg-emerald-50 text-emerald-900', 
                        'dot' => 'bg-emerald-500'
                    ],
        'error' => [
                        'wrap' => 'border-rose-200 bg-rose-50 text-rose-900', 
                         'dot' => 'bg-rose-500'
                    ],
        'warning' => [
                        'wrap' => 'border-amber-200 bg-amber-50 text-amber-900', 
                        'dot' => 'bg-amber-500'
                    ],
        'info' => [
                        'wrap' => 'border-sky-200 bg-sky-50 text-sky-900', 
                        'dot' => 'bg-sky-500'
                    ],
        'notice' => [
                        'wrap' => 'border-slate-200 bg-slate-50 text-slate-900', 
                        'dot' => 'bg-slate-500'
                    ],
    ];

    // Default titles for 5 types
    $titles = [
        'success' => 'Success',
        'error' => 'Error',
        'warning' => 'Warning',
        'info' => 'Info',
        'notice' => 'Notice',
    ];

    $type = array_key_exists($type, $styles) ? $type : 'success';
    $titleText = $title ?? $titles[$type];
@endphp

<div {{ $attributes->merge(['class' => 'flex gap-3 rounded-md border px-4 py-3 shadow-sm ' . $styles[$type]['wrap']]) }}>
    <span class="mt-2 h-2 w-2 shrink-0 rounded-full {{ $styles[$type]['dot'] }}"></span>
    <div class="leading-6">
        <div class="text-sm font-semibold">{{ $titleText }}</div>
        <div class="text-sm">
            {{ $message ?? $slot }}
        </div>
    </div>
</div>
