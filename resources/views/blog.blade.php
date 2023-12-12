@extends('welcome')
@section('content')

<style type="text/css">
  .btn-submit {
    background: var(--primary-color);
    color: var(--contrast-color);
    border: 0;
    padding: 10px 30px;
    transition: 0.4s;
    border-radius: 4px;
  }
</style>

<div id="hero" class="hero">
    <img src="{{ asset('assets/img/slider-img-1.jpg') }}" alt="" data-aos="fade-in" class="aos-init aos-animate">
</div>

<section id="recent-posts" class="  recent-posts" >

    <!--  Section Title -->

    <div class="container section-title" data-aos="fade-up" >
        <h2>All Posts</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->
    <div class="container">

      <div class="row gy-4">
        @php
        $posts = App\Models\Post::latest()->take(6)->get();
        @endphp

        @foreach($posts as $post)

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <article>

            <div class="post-img">
              <img src="{{asset('storage/Posts')}}/{{$post->post_image}}" alt="" class="img-fluid">
            </div>

            <h2 class="title">
              <a href="blog-details.html">{{$post->title}}</a>
            </h2>
            <p class="post-category">{{$post->describe}}</p>

            <div class="d-flex align-items-center">
              <div class="post-meta">
                <a href="#" class="btn-submit mt-4">Apply Now!</a>

              </div>
            </div>

          </article>
        </div>
        @endforeach

      </div>

    </div>

  </section><!-- End Recent-posts Section -->
@endsection
