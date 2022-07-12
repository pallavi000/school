@extends('layouts.header')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<section class="home-section">
    <div class="row">
        <div class=" col-sm-12 col-lg-4 col-md-12 mit-sidebar fixed">
            <div class="sidebar-search-section">
                <div class="mit-search-title">Explore websites, people, and locations
                </div>
                <div class="mit-search">
                    <input type="text" placeholder="What are you looking for?">
                    <svg class="site-nav__search-icon site-nav__search-icon--open" width="26" viewBox="0 0 23 22">
                        <g stroke="currentColor" stroke-width="1.5" fill="none">
                            <circle cx="9.20757329" cy="8.99160695" r="8.50646589"></circle>
                            <path d="M14.8522097,14.6362434 L20.7140392,20.4980728"></path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="join-us-section">
                <div class="join-us-box">
                    Join us in a building a better world
                </div>
                <div class="join-us-detail">
                    <div class="title">Massachusetts Institute of Technology</div>
                    <div class="para">77 Massachusetts Avenue, Cambridge, MA, USA
                        VisitMapEventsPeopleCareersContactPrivacyAccessibility
                        Social Media Hub <i class="fa-brands fa-facebook-f"></i> <i class="fa-brands fa-twitter"></i><i
                            class="fa-brands fa-youtube"></i><i class="fa-brands fa-instagram"></i></div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-4 ">
            <div class="home-feature">
                <div class="home-feature-img">
                    <video width="320" height="240" controls>
                        <source src=" https://www.mit.edu/files/images/202207/MIT_Electron-Vortex-Ani2.mp4">
                    </video>
                </div>
                <div class="home-feature-para">
                    <p class="">In most materials, electrons flow with the electric field. Now, physicists
                        have found that under certain conditions, the particles reverse direction and swirl like a
                        liquid.
                        This fluid-like electron behavior might someday enable low-power next-generation electronics.
                    </p>

                    <div class="d-flex align-items-center mt-4 feature-date">
                        <p class="date mr-4">jun 9, 2022</p> <a href="#" class="date mr-4">Full story</a>
                        <p class="date mr-5">Share:</p>
                        <a class="date ml-2" href="#">Explore more spotlights</a>
                    </div>
                </div>


            </div>
            <div class="more-mit-section">
                <div class="more-mit">MORE FROM THE MIT COMMUNITY</div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="more-img">
                            <img src="https://www.mit.edu/files/images/202207/MIT_Electron-Vortex-sub.jpg"
                                class="img-fluid" />
                        </div>
                        <div class="more-mit-detail">
                            <div class="more-heading">RESEARCH NEWS</div>
                            <div class="more-para">
                                Media Lab researchers have produced textiles that conform to the body and sense the
                                wearer’s posture and motions. Their “smart” shoes and mats could be used in applications
                                ranging from health care to prosthetics to modern dance.
                                hands with vitiligo surrounded by illustrations of doctors with patients
                                ALUMNI IN ACTION
                                Before co-founding Piction Health, Susan Conover SM ’15 experienced a long, anxious wait
                                to see a dermatologist. Now, her startup uses machine learning to help doctors classify
                                certain skin conditions so patients can “get the care they need at the right time,” she
                                says.


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="more-img">
                            <img src="https://www.mit.edu/files/images/202207/MIT_3D-Knits-sub.jpg" class="img-fluid" />
                        </div>
                        <div class="more-mit-detail">
                            <div class="more-heading">RESEARCH NEWS</div>
                            <div class="more-para">
                                Media Lab researchers have produced textiles that conform to the body and sense the
                                wearer’s posture and motions. Their “smart” shoes and mats could be used in applications
                                ranging from health care to prosthetics to modern dance.
                                hands with vitiligo surrounded by illustrations of doctors with patients
                                ALUMNI IN ACTION
                                Before co-founding Piction Health, Susan Conover SM ’15 experienced a long, anxious wait
                                to see a dermatologist. Now, her startup uses machine learning to help doctors classify
                                certain skin conditions so patients can “get the care they need at the right time,” she
                                says.


                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="more-img">
                            <img src="https://www.mit.edu/files/images/202207/MIT_Electron-Vortex-sub.jpg"
                                class="img-fluid" />
                        </div>
                        <div class="more-mit-detail">
                            <div class="more-heading">RESEARCH NEWS</div>
                            <div class="more-para">
                                Media Lab researchers have produced textiles that conform to the body and sense the
                                wearer’s posture and motions. Their “smart” shoes and mats could be used in applications
                                ranging from health care to prosthetics to modern dance.
                                hands with vitiligo surrounded by illustrations of doctors with patients
                                ALUMNI IN ACTION
                                Before co-founding Piction Health, Susan Conover SM ’15 experienced a long, anxious wait
                                to see a dermatologist. Now, her startup uses machine learning to help doctors classify
                                certain skin conditions so patients can “get the care they need at the right time,” she
                                says.


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="more-img">
                            <img src="https://www.mit.edu/files/images/202207/MIT_3D-Knits-sub.jpg" class="img-fluid" />
                        </div>
                        <div class="more-mit-detail">
                            <div class="more-heading">RESEARCH NEWS</div>
                            <div class="more-para">
                                Media Lab researchers have produced textiles that conform to the body and sense the
                                wearer’s posture and motions. Their “smart” shoes and mats could be used in applications
                                ranging from health care to prosthetics to modern dance.
                                hands with vitiligo surrounded by illustrations of doctors with patients
                                ALUMNI IN ACTION
                                Before co-founding Piction Health, Susan Conover SM ’15 experienced a long, anxious wait
                                to see a dermatologist. Now, her startup uses machine learning to help doctors classify
                                certain skin conditions so patients can “get the care they need at the right time,” she
                                says.


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mit-footer-section row">
                <div class="col-md-8">
                    <div class="what-mit mb-3">What more about MIT?</div>
                    <div class="what-mit">
                        Explore more spotlights, or subscribe to receive daily or weekly doses of MIT in your inbox.
                    </div>
                </div>
                <div class="col-md-4">
                    <button class="subscribe">Subscribe</button>
                </div>

            </div>
        </div>
    </div>
    @include('layouts.home_footer')
</section>


<script>
    $('.navbar-brand').addClass('fixed')
</script>
@endsection