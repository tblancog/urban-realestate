@push('styles')
<style>
    .classynav a:hover,
    .classynav a:focus {
        color: #dddddd;
    }

</style>
@endpush

<!-- ##### Front Header Area Start ##### -->
<header class="header-area">
    @switch( request()->segment(1) )

    @case('developers')
        {{-- Developers Menu--}}
        <!-- Front Header Area -->
        @include('developers.top-menu')
    @break
    @case('houses')
        {{-- Houses --}}
        <!-- Front Header Area Menu-->
        @include('houses.top-menu')
    @break
    @default
        {{-- Real state Menu --}}
        <!-- Front Header Area -->
        @include('real-estate.top-menu')
    @endswitch

</header>
<!-- ##### Front Header Area End ##### -->
