<x-app>
    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('{{ $facility->getFirstMediaUrl('default') }}');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">{{ $facility->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row blog-entries element-animate">
                <div class="col-md-12 col-lg-12 main-content">
                    <div class="post-content-body ck-content text-black">
                        {!! $facility->content !!}
                    </div>
                </div>
                <!-- END main-content -->
            </div>
        </div>
    </section>
</x-app>
