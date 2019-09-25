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

    {{-- Developers Menu--}}
    @if( request()->segment(1) ==='developers' ||
         request()->input('section') === 'developers')
        @include('developers.top-menu')

    {{-- Houses menu--}}
    @elseif( request()->segment(1) ==='houses' ||
         request()->input('section') === 'houses')
        @include('houses.top-menu')

    {{-- Real estate menu--}}
    @else
        @include('real-estate.top-menu')
    @endif

</header>
<!-- ##### Front Header Area End ##### -->
