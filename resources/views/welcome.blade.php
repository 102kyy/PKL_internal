@extends('layouts.front')

@section('content')
<div class="container-fluid bg-primary hero-header mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h3 class="fw-light text-white animated slideInRight">New & Fun</h3>
                    <h1 class="display-4 text-white animated slideInRight">Daily <span class="fw-light text-dark">Habits</span> For You!</h1>
                    <p class="text-white mb-4 animated slideInRight">Transform your routine with DailyHabits, the ultimate habit tracker app that empowers you to build positive habits, stay consistent, and achieve your long-term goals.</p>
                @if(auth()->check())
                 @if(auth()->user()->is_admin)
                 <a href="{{ url('/admin') }}" class="btn btn-dark py-2 px-4 me-3 animated slideInRight">Admin Dashboard</a>
                 @else
                 <a href="{{ url('userHabit') }}" class="btn btn-dark py-2 px-4 me-3 animated slideInRight">See More!!</a>
                 @endif
                 @else
                 <a href="{{ url('login') }}" class="btn btn-dark py-2 px-4 me-3 animated slideInRight">See More!!</a>
                 @endif


                </div>
                <div class="col-lg-6">
                    <img class="img-fluid animated pulse infinite" src="{{asset('ui/img/moree.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Feature Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="feature-item position-relative bg-primary text-center p-3">
                    <div class="border py-5 px-3">
                        <i class="fa fa-trophy fa-3x text-dark mb-4"></i>
                        <h5 class="text-white mb-0">Stay on Track, Reach Your Goals</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature-item position-relative bg-primary text-center p-3">
                    <div class="border py-5 px-3">
                        <i class="fa fa-calendar-check fa-3x text-dark mb-4"></i>
                        <h5 class="text-white mb-0">Daily Progress, Lasting Results</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="feature-item position-relative bg-primary text-center p-3">
                    <div class="border py-5 px-3">
                        <i class="fa fa-seedling fa-3x text-dark mb-4"></i>
                        <h5 class="text-white mb-0">Build Better Habits, Empower Your Journey</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Feature End -->


    <!-- About Start -->
     <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                  <img class="img-fluid animated pulse infinite" src="ui/img/the-truth-about-habits.png">


                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="text-primary mb-4">Healthy Life Style <span class="fw-light text-dark">Is A Symbol Of Our
                            Personality</span></h1>
                    <p class="mb-4">Transform your routine with DailyHabits, the ultimate habit tracker app that empowers you to build positive habits, stay consistent, and achieve your long-term goals. Start small, track your progress daily, and witness remarkable changes in your life!</p>
                    <p class="mb-4">Embrace a healthier, more productive lifestyle with DailyHabits!"</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Deal Start -->
    {{-- <div class="container-fluid deal bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="{{asset('ui/img/shampoo-2.png')}}">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white text-center p-4">
                        <div class="border p-4">
                            <p class="mb-2">Natural & Organic Shampoo</p>
                            <h2 class="fw-bold text-uppercase mb-4">Deals of the Day</h2>
                            <h1 class="display-4 text-primary mb-4">$99.99</h1>
                            <h5>Fresh Organic Shampoo</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Etiam feugiat rutrum lectus sed auctor.</p>
                            <div class="row g-0 cdt mb-4">
                                <div class="col-3">
                                    <h1 class="display-6" id="cdt-days"></h1>
                                </div>
                                <div class="col-3">
                                    <h1 class="display-6" id="cdt-hours"></h1>
                                </div>
                                <div class="col-3">
                                    <h1 class="display-6" id="cdt-minutes"></h1>
                                </div>
                                <div class="col-3">
                                    <h1 class="display-6" id="cdt-seconds"></h1>
                                </div>
                            </div>
                            <a class="btn btn-primary py-2 px-4" href="">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Deal End -->


    <!-- Feature Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3"><span class="fw-light text-dark">Best Benefits Of Our</span> Habit Trackers</h1>
                <p class="mb-5">Seeing your progress visually can be highly motivating. Habit trackers provide a sense of accountability, encouraging you to stay consistent and committed to your goals.</p>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="row g-5">
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5>Increased Self-Awareness</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>Become more aware of your daily actions and behaviors.</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5>Goal Achievement</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>Breaking down goals into smaller, manageable habits makes it easier to achieve long-term objectives.</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5>Improved Time Management</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>Tracking your habits allows you to better manage your time and prioritize activities that contribute to your personal and professional growth.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="{{asset('ui/img/check.png')}}">
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-5">
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5>Personal Growth</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>Habit trackers support continuous self-improvement by helping you adopt new, positive habits and eliminate negative ones.</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5>Balanced Lifestyle</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>By keeping track of various habits, you can ensure a balanced approach to different areas of your life, such as work, health, and leisure.</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5>Stress Reduction</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>Establishing and maintaining positive habits can lead to a more organized and less stressful life. </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- How To Use Start -->
<div class="container-fluid how-to-use bg-primary my-5 py-5">
    <div class="container text-white py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h2 class="text-white mb-3"><span class="fw-light text-dark"><h1>How To Use Our</h1></span>Habit Trackers</h2>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                    <i class="fa fa-user-plus fa-3x text-dark"></i>
                </div>
                <h5 class="text-white">Set Up Your Account</h5>
                <hr class="w-25 bg-light my-2 mx-auto">
                <span>Create an account by signing up with your email.</span>
            </div>
            <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.3s">
                <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                    <i class="fa fa-bullseye fa-3x text-dark"></i>
                </div>
                <h5 class="text-white">Define Your Goals</h5>
                <hr class="w-25 bg-light my-2 mx-auto">
                <span>Identify the habits you want to track. These could be related to health, productivity, personal growth, or any other area of your life.</span>
            </div>
            <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.5s">
                <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                    <i class="fa fa-plus-circle fa-3x text-dark"></i>
                </div>
                <h5 class="text-white">Add Your Habits</h5>
                <hr class="w-25 bg-light my-2 mx-auto">
                <span>Open the app and navigate to the section where you can add new habits.</span>
            </div>
        </div>
    </div>
</div>


    <!-- How To Use End -->


    <!-- Product Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3"><span class="fw-light text-dark">Our Several</span> Habit Categories</h1>
                <p class="mb-5">Some Category You can Add to Your Habit Trackers</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="product-item text-center border h-100 p-4">
                        <img class="img-fluid mb-4" src="{{asset('ui/img/jogging.png')}}" alt="">
                        {{-- <div class="mb-2">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(99)</small>
                        </div> --}}
                        <a href="" class="h6 d-inline-block mb-2">Jogging</a>
                        <h5 class="text-primary mb-3">Exercise</h5>
                        <a href="" class="btn btn-outline-primary px-3">Add To Your Habit</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="product-item text-center border h-100 p-4">
                        <img class="img-fluid mb-4" src="{{asset('ui/img/book.png')}}" alt="">
                        {{-- <div class="mb-2">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(99)</small>
                        </div> --}}
                        <a href="" class="h6 d-inline-block mb-2">Reading</a>
                        <h5 class="text-primary mb-3">Study/Relax</h5>
                        <a href="" class="btn btn-outline-primary px-3">Add To Your Habit</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="product-item text-center border h-100 p-4">
                        <img class="img-fluid mb-4" src="{{asset('ui/img/nap.png')}}" alt="">
                        {{-- <div class="mb-2">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(99)</small>
                        </div> --}}
                        <a href="" class="h6 d-inline-block mb-2">Nap</a>
                        <h5 class="text-primary mb-3">Relax</h5>
                        <a href="" class="btn btn-outline-primary px-3">Add To Your Habit</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="product-item text-center border h-100 p-4">
                        <img class="img-fluid mb-4" src="{{asset('ui/img/code.png')}}" alt="">
                        {{-- <div class="mb-2">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(99)</small>
                        </div> --}}
                        <a href="" class="h6 d-inline-block mb-2">Coding</a>
                        <h5 class="text-primary mb-3">Programming</h5>
                        <a href="" class="btn btn-outline-primary px-3">Add To Your Habit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial bg-primary my-5 py-5">
        <div class="container text-white py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-white mb-3">Explanation of some of <span class="fw-light text-dark">The Habits Above</span></h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                        <div class="testimonial-item text-center" data-dot="1">
                            <img class="img-fluid border p-2" src="{{asset('ui/img/jogging.png')}}" alt="">
                            <h5 class="fw-light lh-base text-white">Jogging is a form of physical exercise that involves running at a slow, steady pace. It's often done at a pace that allows you to maintain a conversation comfortably, making it a relatively low-intensity cardiovascular workout. Jogging is commonly used to improve overall fitness, cardiovascular health, and endurance.</h5>
                            <h5 class="mb-1">Jogging</h5>
                            <h6 class="fw-light text-white fst-italic mb-0">Exercise</h6>
                        </div>
                        <div class="testimonial-item text-center" data-dot="2">
                            <img class="img-fluid border p-2" src="{{asset('ui/img/book.png')}}" alt="">
                            <h5 class="fw-light lh-base text-white">Reading is a cognitive activity that involves interpreting and understanding written text. It can be done for various purposes, such as gaining knowledge, enjoyment, relaxation, or intellectual stimulation.</h5>
                            <h5 class="mb-1">Reading</h5>
                            <h6 class="fw-light text-white fst-italic mb-0">Study/Relax</h6>
                        </div>
                        <div class="testimonial-item text-center" data-dot="3">
                            <img class="img-fluid border p-2" src="{{asset('ui/img/nap.png')}}" alt="">
                            <h5 class="fw-light lh-base text-white">A nap is a short period of sleep taken during the day, typically lasting from a few minutes to a couple of hours. Napping is often used to alleviate fatigue, improve alertness, and boost overall energy levels.</h5>
                            <h5 class="mb-1">Nap</h5>
                            <h6 class="fw-light text-white fst-italic mb-0">Relax</h6>
                        </div>
                        <div class="testimonial-item text-center" data-dot="4">
                            <img class="img-fluid border p-2" src="{{asset('ui/img/code.png')}}" alt="">
                            <h5 class="fw-light lh-base text-white">Coding, also known as programming, is the process of writing instructions for a computer to perform specific tasks or solve problems. These instructions are written in a programming language, which provides a set of syntax rules and commands that the computer can understand and execute.</h5>
                            <h5 class="mb-1">Coding</h5>
                            <h6 class="fw-light text-white fst-italic mb-0">Programming</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3"><span class="fw-light text-dark">From Our</span> Blog Articles</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="blog-item border h-100 p-4">
                        <img class="img-fluid mb-4" src="{{asset('ui/img/blog-1.jpg')}}" alt="">
                        <a href="" class="h5 lh-base d-inline-block">Foods that are good for your hair growing</a>
                        <div class="d-flex text-black-50 mb-2">
                            <div class="pe-3">
                                <small class="fa fa-eye me-1"></small>
                                <small>9999 Views</small>
                            </div>
                            <div class="pe-3">
                                <small class="fa fa-comments me-1"></small>
                                <small>9999 Comments</small>
                            </div>
                        </div>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat.</p>
                        <a href="" class="btn btn-outline-primary px-3">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="blog-item border h-100 p-4">
                        <img class="img-fluid mb-4" src="{{asset('ui/img/blog-2.jpg')}}" alt="">
                        <a href="" class="h5 lh-base d-inline-block">How to take care of hair naturally</a>
                        <div class="d-flex text-black-50 mb-2">
                            <div class="pe-3">
                                <small class="fa fa-eye me-1"></small>
                                <small>9999 Views</small>
                            </div>
                            <div class="pe-3">
                                <small class="fa fa-comments me-1"></small>
                                <small>9999 Comments</small>
                            </div>
                        </div>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat.</p>
                        <a href="" class="btn btn-outline-primary px-3">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="blog-item border h-100 p-4">
                        <img class="img-fluid mb-4" src="{{asset('ui/img/blog-3.jpg')}}" alt="">
                        <a href="" class="h5 lh-base d-inline-block">How to use our natural & organic shampoo</a>
                        <div class="d-flex text-black-50 mb-2">
                            <div class="pe-3">
                                <small class="fa fa-eye me-1"></small>
                                <small>9999 Views</small>
                            </div>
                            <div class="pe-3">
                                <small class="fa fa-comments me-1"></small>
                                <small>9999 Comments</small>
                            </div>
                        </div>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat.</p>
                        <a href="" class="btn btn-outline-primary px-3">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->


    <!-- Newsletter Start -->
    {{-- <div class="container-fluid newsletter bg-primary py-5 my-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-white mb-3"><span class="fw-light text-dark">Let's Subscribe</span> The Newsletter</h1>
                <p class="text-white mb-4">Subscribe now to get 30% discount on any of our products</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="position-relative w-100 mt-3 mb-2">
                        <input class="form-control w-100 py-4 ps-4 pe-5" type="text" placeholder="Enter Your Email"
                            style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-white fs-4"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @endsection