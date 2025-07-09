@props(['color', 'bgColor'])



<div {{ $attributes->merge(['lang' => 'ka'])->class("card card-text-$color card-bg-$bgColor") }}>
    <div {{ $title->attributes->class('card-title') }}> {{ $title }} </div>
    {{ $slot }}
    <div class="card-footer"> {{ $footer }} </div>
</div>
