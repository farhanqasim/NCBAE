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
<main id="main">

  <!-- Hero Section - Home Page -->
  <section id="hero" class="hero">

    <img src="{{asset('assets/img/slider-img-1.jpg')}}" alt="" data-aos="fade-in">

    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <h2 data-aos="fade-up" data-aos-delay="100">We Are Proud</h2>
          <h3 data-aos="fade-up" data-aos-delay="100" class="text-white">Student Of <span style="color: blue;">NCABE University</span></h3>
          <p data-aos="fade-up" data-aos-delay="200">Alumni Needs enables you to harness the power of your alumni network. Whatever may be the
            need (academic, relocation, career, projects, mentorship, etc. you can ask the community
            and get responses in three.</p>
        </div>
        <div class="col-xl-5 content">
          <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>

  </section><!-- End Hero Section -->

  <!-- About Section - Home Page -->
  <div class="container section-title mt-4" data-aos="fade-up">
    <h2>About Us</h2>
    <p>You can include personal interests, stories, and photos that convey the unique story of your business</p>
  </div><!-- End Section Title -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-xl-center gy-5">

        <div class="col-xl-5 content">
          <h3>About Us</h3>
          <h2>ESTD of This Alumni Assotitation</h2>
          <p>Aenean viverra rhoncus sspede. Phasellssus leo dolor, tempus non, auctor endrerit quis, nisi. Fusce neque. Donec vitae orci sed dolor rutrum ausssctor. Sed fringilla mauris sit amet nibh.Etiam rhoncus. Ut lddffdfqwqeo. Morbi mollis tellus ac sapien. Fusce fermentum oo nec arcu. Quisque manisl idUt leo. Morbi mollis tellus ac sapien. Fusce fermentum oo nec ante tempus hendrerit. </p>
          <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="col-xl-7">
          <div class="row gy-4 icon-boxes">

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <i class="bi bi-buildings"></i>
                <h3>Scholarship</h3>
                <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <i class="bi bi-clipboard-pulse"></i>
                <h3>Help Current Students</h3>
                <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <i class="bi bi-command"></i>
                <h3>Help Our University</h3>
                <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500" style="padding-top: 30px;">
              <div class="icon-box">
                <i class="bi bi-graph-up-arrow"></i>
                <h3>Build Our Community</h3>
                <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </section><!-- End About Section -->

  <!-- Stats Section - Home Page -->
  <section id="stats" class="stats">

    <img src="{{asset('assets/img/event-img-1.jpg')}}" alt="" data-aos="fade-in">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

      </div>

    </div>

  </section><!-- End Stats Section -->

  <!-- Services Section - Home Page -->
  <section id="posts" class="recent-posts">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Posts</h2>
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
                <a href="{{route('apply-post', $post)}}" class="btn-submit mt-4">Apply Now!</a>

              </div>
            </div>

          </article>
        </div>
        @endforeach

      </div>

    </div>

  </section>

  <!-- Features Section - Home Page -->
  <section id="events" class="features">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Events</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container ">

        @php
        $events = App\Models\Event::latest()->take(6)->get();
        @endphp

        @foreach($events as $event)

      <div class="row gy-4  align-items-stretch justify-content-between features-item ">
        <div class="col-lg-4 d-flex align-items-center features-img-bg" data-aos="zoom-out">
          <img src="{{asset('storage/Events')}}/{{$event->profile}}" class="img-fluid" style="" alt="">
        </div>
        <div class="col-lg-8 " data-aos="fade-up" data-aos-delay="100">
          <h3>{{$event->title}}</h3>
          <p>
            {{$event->describe}}
          </p>
          <h4>{{$event->date}} / {{$event->time}}</h4>
          <!-- <a href="#" class="btn btn-get-started">Get Started</a> -->
        </div>

      </div>

      @endforeach

     

    </div>

  </section>

  <section id="faq" class="faq">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="content px-xl-5">
            <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
          </div>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

          <div class="faq-container">
            <div class="faq-item faq-active">
              <h3><span class="num">1.</span> <span>Non consectetur a erat nam at lectus urna duis?</span></h3>
              <div class="faq-content">
                <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">2.</span> <span>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</span></h3>
              <div class="faq-content">
                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">3.</span> <span>Dolor sit amet consectetur adipiscing elit pellentesque?</span></h3>
              <div class="faq-content">
                <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">4.</span> <span>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</span></h3>
              <div class="faq-content">
                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">5.</span> <span>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</span></h3>
              <div class="faq-content">
                <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

          </div>

        </div>
      </div>

    </div>

  </section><!-- End Faq Section -->

  <!-- Team Section - Home Page -->

  <!-- Call-to-action Section - Home Page -->
  <section id="call-to-action" class="call-to-action">

    <img src="assets/img/cta-bg.jpg" alt="">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Call To Action</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Call-to-action Section -->

  <!-- Testimonials Section - Home Page -->

  <!-- Recent-posts Section - Home Page -->

  <!-- Contact Section - Home Page -->
  <section id="contact" class="contact">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>A108 Adam Street</p>
                <p>New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
                <p>+1 6678 254445 41</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com</p>
                <p>contact@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="500">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday</p>
                <p>9:00AM - 05:00PM</p>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- End Contact Section -->

</main>
@endsection