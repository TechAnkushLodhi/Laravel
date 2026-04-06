@include('commen.header',[
    'title' => 'Home Page'
])
<div>
    <h1>This is a subview example</h1>
    <p>This is the content of the subview example.</p>
</div>
{{-- @include('commen.footer',[
    'title' => 'Footer Page'
]) --}}

{{-- Not found sub view commen file --}}
{{-- @include('commen.commen',[
    'title' => $footerTitle
]) --}}
 {{-- Check sub view file exist or not --}}
 {{-- @includeif('commen.commen',[
    'title' => $footerTitle
]) --}}

@includeif('commen.footer',[
    'title' => $footerTitle
])