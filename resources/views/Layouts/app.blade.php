<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>
    @include('includes.nav')
    
    {{ $slot }}

    @include('includes.footer')
    @include('includes.scripts')
    @slot('script')
</body>

</html>
