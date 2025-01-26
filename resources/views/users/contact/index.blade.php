@extends('layouts.app')
@section('title',' Travel | Contacts')
@section('content')
<body>
    {{-- <div class="wrapper"> --}}
          <!-- Main-content -->
          <div class="main-content">
            <div class="tf-container tf-spacing-10">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- Section-info -->
                        <section class="section-info">
                            <div class="heading-section pb-24">
                                <div class="title fs-36 lh-44 fw-6 wow fadeInUp">
                                    We’d love to help
                                </div>
                                <div class="sub-title text-body-3 wow fadeInUp">
                                    Crafting Unforgettable Adventures Together
                                </div>
                            </div>
                            <div class="details-section">
                                <div class="phone details-content pb-16">
                                    <div class="title text-body-3 fw-6 wow fadeInUp">
                                        Phone:
                                    </div>
                                    <div class="sub-title text-body-3 numberphone wow fadeInUp">
                                        +1 666 234 8888
                                    </div>
                                </div>
                                <div class="email details-content pb-16">
                                    <div class="title text-body-3 fw-6 wow fadeInUp">
                                        Email:
                                    </div>
                                    <div class="sub-title text-body-3 address-email wow fadeInUp">
                                        themeflat@gmail.com
                                    </div>
                                </div>
                                <div class="address details-content pb-16">
                                    <div class="title text-body-3 fw-6 wow fadeInUp">
                                        Address:
                                    </div>
                                    <div class="sub-title text-body-3 wow fadeInUp">
                                        2163 Phillips Gap Rd, West Jefferson, North Carolina, United States
                                    </div>
                                </div>
                                <div class="open-time details-content pb-16">
                                    <div class="title text-body-3 fw-6 wow fadeInUp">
                                        Open Time:
                                    </div>
                                    <ul>
                                        <li class="open-time-item text-body-3 wow fadeInUp">Mon - Sat: &nbsp;
                                            &nbsp;<span>7:30am - 8:00pm
                                                PST</span></li>
                                        <li class="open-time-item text-body-3 wow fadeInUp">Sunday: &nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span>9:00am - 5:00pm PST</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section><!-- /.section-info -->
                    </div>
                    <div class="col-lg-7">
                        <!-- Section-form -->
                        <div class="section-form">
                            <div class="heading-section pb-24">
                                <div class="title fw-6 fs-36 lh-44 wow fadeInUp" data-wow-delay="0.1s">
                                    Get In Touch
                                </div>
                                <div class="sub-title text-body-3 wow fadeInUp" data-wow-delay="0.1s">
                                    Connect with Us to Embark on a Journey to Create Your Dream Epictrip Experience
                                </div>
                            </div>
                            <form id="contactform" method="post" action="https://themesflat.co/html/epictrips/contact/contact-process.php">
                                <div>
                                    <div class="cols pb-20">
                                        <fieldset>
                                            <input type="text" name="name" id="name" required="" placeholder="Your Name*">
                                        </fieldset>
                                        <fieldset>
                                            <input type="email" name="mail" id="mail" required="" placeholder="Your Email*">
                                        </fieldset>
                                    </div>
                                    <fieldset class="pb-24">
                                        <textarea placeholder="Message" class="h-204"name="message" id="message" required="" cols="30" rows="10"></textarea>
                                    </fieldset>
                                    <button type="submit" class="tf-btn color-primary">Send message</button>
                                </div>
                            </form>
                        </div><!-- /.section-form -->
                    </div>
                </div>
            </div>
            <!-- Box-map2 -->
            <div class="box-map2">
                <div id="map2"></div>
            </div><!-- /.box-map2 -->
            
        </div><!-- /.main-content -->
              <!-- Go-top -->
      <div class="progress-wrap">
        <svg
          class="progress-circle svg-content"
          width="100%"
          height="100%"
          viewBox="-1 -1 102 102"
        >
          <path
            d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="
              transition: stroke-dashoffset 10ms linear;
              stroke-dasharray: 307.919, 307.919;
              stroke-dashoffset: 277.672;
            "
          ></path>
        </svg>
      </div>
      <!-- /.go-top -->
    </div>
</body>
@endsection    

