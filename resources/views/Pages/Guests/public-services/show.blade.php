<x-app>
    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('{{ $public_service->getFirstMediaUrl('default') }}');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">{{ $public_service->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">

            <div class="row blog-entries element-animate">

                <div class="col-md-12 col-lg-12 main-content">

                    <div class="post-content-body ck-content text-black mb-5">
                        {!! $public_service->content !!}
                    </div>

                    <div class="text-black mt-5">
                        <h5 class="font-monospace">File File</h5>
                        <div class="d-flex flex-column gap-3">
                            @foreach ($public_service->getMedia('files') as $media)
                                <div class="d-flex align-items-center gap-4">
                                    <p>Nama file: {{ $media->file_name }}</p>
                                    <a href="{{route('download', $media)}}" class="btn btn-primary py-2">Download</a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="pt-5 comment-wrap">
                        <h3 class="heading">6 Comments</h3>
                        <ul class="comment-list">
                            @foreach ($public_service->comments as $comment)
                                <li class="comment">
                                    <div class="vcard">
                                        <img src="{{ $comment->user->getFirstMediaUrl('default') }}"
                                            alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>{{ $comment->user->name }}</h3>
                                        <div class="meta">{{ $comment->created_at->format('F d, Y, H:m') }}</div>

                                        <p>{{ $comment->content }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3>Leave a comment</h3>
                            <form action="{{ route('comment-public-service', $public_service) }}" class="p-5 bg-light"
                                method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="content">Pesan</label>
                                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END main-content -->
            </div>
        </div>
    </section>
</x-app>
