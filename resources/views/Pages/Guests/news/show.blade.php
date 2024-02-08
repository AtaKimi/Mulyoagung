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
                            <span>&nbsp;-&nbsp; February 10, 2019</span>
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

                    <div class="post-content-body">
                        {!! $news->content !!}

                    </div>


                    <div class="pt-5">
                        <p>Categories: <a href="#">Food</a>, <a href="#">Travel</a> Tags: <a
                                href="#">#manila</a>, <a href="#">#asia</a></p>
                    </div>


                    <div class="pt-5 comment-wrap">
                        <h3 class="mb-5 heading">6 Comments</h3>
                        <ul class="comment-list">
                            <li class="comment">
                                <div class="vcard">
                                    <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>Jean Doe</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                                        sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply rounded">Reply</a></p>
                                </div>
                            </li>

                            <li class="comment">
                                <div class="vcard">
                                    <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>Jean Doe</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                                        sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply rounded">Reply</a></p>
                                </div>

                                <ul class="children">
                                    <li class="comment">
                                        <div class="vcard">
                                            <img src="{{ asset('assets/images/person_1.jpg') }}"
                                                alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>Jean Doe</h3>
                                            <div class="meta">January 9, 2018 at 2:21pm</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                                laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat
                                                saepe enim sapiente iste iure! Quam voluptas earum impedit
                                                necessitatibus, nihil?</p>
                                            <p><a href="#" class="reply rounded">Reply</a></p>
                                        </div>


                                        <ul class="children">
                                            <li class="comment">
                                                <div class="vcard">
                                                    <img src="{{ asset('assets/images/person_1.jpg') }}"
                                                        alt="Image placeholder">
                                                </div>
                                                <div class="comment-body">
                                                    <h3>Jean Doe</h3>
                                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                                                        autem, eum officia, fugiat saepe enim sapiente iste iure! Quam
                                                        voluptas earum impedit necessitatibus, nihil?</p>
                                                    <p><a href="#" class="reply rounded">Reply</a></p>
                                                </div>

                                                <ul class="children">
                                                    <li class="comment">
                                                        <div class="vcard">
                                                            <img src="{{ asset('assets/images/person_1.jpg') }}"
                                                                alt="Image placeholder">
                                                        </div>
                                                        <div class="comment-body">
                                                            <h3>Jean Doe</h3>
                                                            <div class="meta">January 9, 2018 at 2:21pm</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Pariatur quidem laborum necessitatibus, ipsam impedit
                                                                vitae autem, eum officia, fugiat saepe enim sapiente
                                                                iste iure! Quam voluptas earum impedit necessitatibus,
                                                                nihil?</p>
                                                            <p><a href="#" class="reply rounded">Reply</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="comment">
                                <div class="vcard">
                                    <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>Jean Doe</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                                        sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply rounded">Reply</a></p>
                                </div>
                            </li>
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="#" class="p-5 bg-light">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
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
