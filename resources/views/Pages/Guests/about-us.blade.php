@push('script')
<script src="{{asset('assets/libs/ckeditor5/build/ckeditor.js')}}"></script>

@endpush

<x-app>
    <img src="{{ asset('assets/images/hero_1.jpg') }}" alt="" class="w-100 mb-3" height="350">
    <div class="container">
        <div class="ck-content text-black">
            {!! $about_us->content !!}
        </div>
    </div>
</x-app>
