<x-app>
    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('{{ $news->getFirstMediaUrl('default') }}');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">{{ $news->title }}</h1>
                        <div class="post-meta align-items-center text-center">
                            <figure class="author-figure mb-0 me-3 d-inline-block"><img
                                    src="{{ $news->user->getFirstMediaUrl('default') }}" alt="Image"
                                    class="img-fluid"></figure>
                            <span class="d-inline-block mt-1">By {{ $news->user->name }}</span>
                            <span>&nbsp;-&nbsp; {{ $news->created_at->format('F d, Y') }}</span>
                        </div>
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
                        {!! $news->content !!}
                    </div>
                    <div class="pt-5 comment-wrap">
                        <h3 class="heading">6 Comments</h3>
                        <ul class="comment-list">
                            @foreach ($news->comments as $comment)
                                <li class="comment">
                                    <div class="vcard">
                                        <img src="{{$comment->user->getFirstMediaUrl('default')}}" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>{{$comment->user->name}}</h3>
                                       <div class="meta">{{$comment->created_at->format('F d, Y, H:m')}}</div>

                                        <p>{{$comment->content}}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3>Leave a comment</h3>
                            <form action="{{route('comment-news', $news)}}" class="p-5 bg-light" method="POST">
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
