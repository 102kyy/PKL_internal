@extends('layouts.front')

@section('content')
<div class="container-fluid bg-primary hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">About Us</h1>

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
                    <a class="btn btn-primary py-2 px-4" href="{{url('login')}}">Try Now!!!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Newsletter Start -->
    <div class="container-fluid newsletter bg-primary py-5 my-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-white mb-3"><span class="fw-light text-dark">With</span> DailyHabits</h1>
                <p class="text-white mb-4">turn your daily actions into lasting success and watch your goals come to life!</p>
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
    </div>
    <!-- Newsletter End -->
    @endsection