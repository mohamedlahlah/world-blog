@include('layouts.new.index.header')

<body>
@include('layouts.new.index.navbar')
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url({{asset('frontend/img/blog-img/bg4.jpg')}});"></div>
    <!-- ********** Hero Area End ********** -->

    <section class="contact-area section-padding-50">
        <div class="container">
            <div class="row justify-content-center">

            <div class="site-section top-image-in-about-us">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <img src="{{asset('frontend/img/blog-img/img_1.jpg')}}" alt="Image" class="img-fluid contact-images ">
                  </div>
                  <div class="col-md-5 ml-auto">
                    <h2>About Us</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea voluptate odit corrupti vitae cupiditate explicabo, soluta quibusdam necessitatibus, provident reprehenderit, dolorem saepe non eligendi possimus autem repellendus nesciunt, est deleniti libero recusandae officiis. Voluptatibus quisquam voluptatum expedita recusandae architecto quibusdam.</p>
                    
                    <ul class="ul-check list-unstyled success">
                      <li>Onsectetur adipisicing elit</li>
                      <li>Dolorem saepe non eligendi possimus</li>
                      <li>Voluptate odit corrupti vitae</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="site-section">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 order-md-2">
                    <img src="{{asset('frontend/img/blog-img/img_1.jpg')}}" alt="Image" class="img-fluid contact-images">
                  </div>
                  <div class="col-md-5 mr-auto order-md-1">
                    <h2>We Love To Explore</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea voluptate odit corrupti vitae cupiditate explicabo, soluta quibusdam necessitatibus, provident reprehenderit, dolorem saepe non eligendi possimus autem repellendus nesciunt, est deleniti libero recusandae officiis. Voluptatibus quisquam voluptatum expedita recusandae architecto quibusdam.</p>
                    <ul class="ul-check list-unstyled success">
                      <li>Onsectetur adipisicing elit</li>
                      <li>Dolorem saepe non eligendi possimus</li>
                      <li>Voluptate odit corrupti vitae</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="site-section">
              <div class="container">
                <div class="row mb-5 justify-content-center">
                  <div class="col-md-5 text-center">
                    <h2>Our Editors</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus commodi blanditiis, soluta magnam atque laborum ex qui recusandae</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-lg-4 mb-5 text-center">
                    <img src="{{asset('frontend/img/blog-img/person_1.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
                    <h2 class="mb-3">Kate Hampton</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum neque nobis eos quam necessitatibus rerum aliquid est tempore, cupiditate iure at voluptatum dolore, voluptates. Debitis accusamus, beatae ipsam excepturi mollitia.</p>
                  </div>

                  <div class="col-md-6 col-lg-4 mb-5 text-center">
                    <img src="{{asset('frontend/img/blog-img/person_2.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
                    <h2 class="mb-3">Richard Cook</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum neque nobis eos quam necessitatibus rerum aliquid est tempore, cupiditate iure at voluptatum dolore, voluptates. Debitis accusamus, beatae ipsam excepturi mollitia.</p>
                  </div>

                  <div class="col-md-6 col-lg-4 mb-5 text-center">
                    <img src="{{asset('frontend/img/blog-img/person_3.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
                    <h2 class="mb-3">Kevin Peters</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum neque nobis eos quam necessitatibus rerum aliquid est tempore, cupiditate iure at voluptatum dolore, voluptates. Debitis accusamus, beatae ipsam excepturi mollitia.</p>
                  </div>
                </div>
              </div>
            </div>
    

                <!-- Contact Form Area -->
               {{--  <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact-form">
                        <h5>Get in Touch</h5>
                        <!-- Contact Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn world-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
 --}}
                
            </div>
        </div>
    </section>

    <!-- Google Maps: If you want to google map, just uncomment below codes -->
   {{--  
    <div class="map-area">
        <div id="googleMap" class="googleMap"></div>
    </div> --}}
    
@include('layouts.new.index.footer')