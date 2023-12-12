@extends('welcome')
@section('content')


<main id="main">

	<!-- Hero Section - Home Page -->
    <section id="hero" class="hero" style="min-height: 80vh !important;">

      <img src="{{asset('assets/img/job-post.webp')}}" alt="" data-aos="fade-in">

      <div class="container">
        
      </div>

    </section>




<!-- Contact Section - Home Page -->
    <section id="" class="contact">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Add Post</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <form action="{{route('submit-post')}}" method="post" enctype="multipart/form-data">
            	@csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="title" class="form-control" placeholder="Enter Title" required>
                </div>

                <div class="col-md-6">
                  <input type="file" class="form-control" name="post_image" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="describe" rows="6" placeholder="Describe Your Post" required></textarea>
                </div>

                <div class="col-md-12 text-center">
           
                  <button type="submit" class="btn-submit">Send Message</button>
                </div>

              </div>
            </form>
          </div>
           <div class="col-lg-2"></div>

        </div>

      </div>

    </section>
    <style type="text/css">
    	.btn-submit{
    background: var(--primary-color);
    color: var(--contrast-color);
    border: 0;
    padding: 10px 30px;
    transition: 0.4s;
    border-radius: 4px;
    	}
    </style>

</main>


@endsection