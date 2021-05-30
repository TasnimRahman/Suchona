@extends('frontend.master')

@section('title')
    Suchona
@endsection

@section('content')

<!-- Carousel Start -->
<section class="slider">
        <div class="row">
            <div class="col-auto pre">
                <a class="indicator" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span >&lt;</span></a>
            </div>
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row align-items-center">
                                <div class="col column_title">
                                    <p class="animated fadeInRight">সূচনা এখন এক্সসাইটিং কোর্স নিয়ে... </p>
                                    <h1 class="animated fadeInLeft">এখন ঘরে বসেই স্কিল ডেভেলপ করুন আরো সহজে</h1>
                                    <a class="btn animated fadeInUp" href="#">Enroll now!</a>
                                </div>
                                <div class="col animated fadeInRight column_image">
                                    <img class="d-block img-fluid" src="{{asset('frontend/assets/images/banner_slider-1.jpg')}}" alt="First slide">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col column_title">
                                    <p class="animated fadeInRight">সূচনা এখন এক্সসাইটিং কোর্স নিয়ে... </p>
                                    <h1 class="animated fadeInLeft">এখন ঘরে বসেই স্কিল ডেভেলপ করুন আরো সহজে</h1>
                                    <a class="btn animated fadeInUp" href="#">Enroll now!</a>
                                </div>
                                <div class="col animated fadeInRight column_image">
                                    <img class="d-block img-fluid" src="{{asset('frontend/assets/images/banner_slider-2.jpg')}}" alt="2nd slide">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col column_title">
                                    <p class="animated fadeInRight">সূচনা এখন এক্সসাইটিং কোর্স নিয়ে... </p>
                                    <h1 class="animated fadeInLeft">এখন ঘরে বসেই স্কিল ডেভেলপ করুন আরো সহজে</h1>
                                    <a class="btn animated fadeInUp" href="#">Enroll now!</a>
                                </div>
                                <div class="col animated fadeInRight column_image">
                                    <img class="d-block img-fluid" src="{{asset('frontend/assets/images/banner_slider-3.jpg')}}" alt="2nd slide">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col column_title">
                                    <p class="animated fadeInRight">সূচনা এখন এক্সসাইটিং কোর্স নিয়ে... </p>
                                    <h1 class="animated fadeInLeft">এখন ঘরে বসেই স্কিল ডেভেলপ করুন আরো সহজে</h1>
                                    <a class="btn animated fadeInUp" href="#">Enroll now!</a>
                                </div>
                                <div class="col animated fadeInRight column_image">
                                    <img class="d-block img-fluid" src="{{asset('frontend/assets/images/banner_slider-4.jpg')}}" alt="3rd slide">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto pre">
                <a class="indicator" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="pre">&gt;</span>
                </a>
            </div>
        </div>

</section>
<!-- Carousel End -->

    <!-- Notice Start -->
    <section class="notice" style="margin-top:-40px;">
        <div class="container">
            <div class="col-md-10 mx-auto notice-wrapper py-4 pb-3 py-sm-5 p-md-5">
                <h4 class="notice-title text-center" style="color: tomato;">Upcoming</h4>
                <h2 class="notice-title text-center">Web Development batch</h2>
                <div class="row py-4">
                    <div class="col-lg-6">
                        <h5>
                            <i class="far fa-calendar-alt one"></i>
                            Registration opens: June 10, 2021 (Thursday)
                        </h5>
                        <h5>
                            <i class="far fa-bookmark two"></i>
                            Registration Closed: June 24, 2021 (Thursday)
                        </h5>
                    </div>
                    <div class="col-lg-6">
                        <h5>
                            <i class="far fa-bell three"></i>
                            Batch Orientation: June 28, 2021 (Monday)
                        </h5>
                        <h5>
                            <i class="fas fa-tv four"></i>
                            Classes start: July 1, 2021 (Thursday)
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Notice  End -->

    <!-- Module Start -->
    <div class="module">
        <div class="container">
            <div class="section-header text-center">
                <p>Course module</p>
                <h2>Web Design & Development Course</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="accordion-1">
                        <div class="card wow ">
                            <div >
                                <img src="{{asset('frontend/assets/images/module-banner.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="card wow ">
                            <div>
                                <a class="btn" id="enroll" href="#">Enroll now!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div id="accordion-2">
                        <div class="card wow ">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                    Module-1: HTML
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow ">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                    Module-2: CSS
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow ">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                    Module-3: Bootstrap
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow ">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                    Module-4: JavaScript
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow ">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                    Module-5: jQuery
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow " >
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                    Module-6: Wordpress
                                </a>
                            </div>
                            <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                    Module-7: Theme customization
                                </a>
                            </div>
                            <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                    Module-8: Framework
                                </a>
                            </div>
                            <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow ">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseNine">
                                    Module-9: Laravel
                                </a>
                            </div>
                            <div id="collapseNine" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
                                    Module-10: Marketplace
                                </a>
                            </div>
                            <div id="collapseTen" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Module End -->

    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="{{asset('frontend/assets/images/about.jpg')}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <h2>Welcome to Suchona</h2>
                        <p>Learn from your space</p>
                    </div>
                    <div class="about-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Fact Start -->
    <div class="fact">
        <div class="container-fluid">
            <div class="row counters">
                <div class="col-md-6 fact-left wow slideInLeft">
                    <div class="row">
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="fas fa-chalkboard-teacher fa-4x "></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">19</h2>
                                <p>Expert Trainers</p>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="fas fa-user-friends fa-4x"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">485</h2>
                                <p>Running students</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 fact-right wow slideInRight">
                    <div class="row">
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="fas fa-tasks fa-4x"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">8</h2>
                                <p>Running courses</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="fab fa-angellist fa-4x"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">10</h2>
                                <p>Completed Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <h2>Our Courses</h2>
                <h4>We Provide courses on</h4>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{asset('frontend/assets/images/programming-for-kids.jpg')}}" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Programming for kids</h3>

                            <!--
                            <a href="#" class="btn">More...</a>-->
                            <a class="btn" href="{{asset('frontend/assets/images/programming-for-kids.jpg')}}" data-lightbox="service">+</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{asset('frontend/assets/images/spoken-english.jpg')}}" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Spoken English</h3>
                            <a class="btn" href="{{asset('frontend/assets/images/spoken-english.jpg')}}" data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{asset('frontend/assets/images/bangla-course.jpg')}}" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Bengali course</h3>
                            <a class="btn" href="{{asset('frontend/assets/images/bangla-course.jpg')}}" data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{asset('frontend/assets/images/spoken-english.jpg')}}" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Spoken English</h3>
                            <a class="btn" href="{{asset('frontend/assets/images/spoken-english.jpg')}}" data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{asset('frontend/assets/images/programming-for-kids.jpg')}}" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Programming for kids</h3>
                            <a class="btn" href="{{asset('frontend/assets/images/programming-for-kids.jpg')}}" data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{asset('frontend/assets/images/bangla-course.jpg')}}" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Bengali course</h3>
                            <a class="btn" href="{{asset('frontend/assets/images/bangla-course.jpg')}}" data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center align-items-center col-md-12">
                <a class="btn" id="courses" href="{{route('course')}}">See More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!--Course Learning Start -->
    <div class="container learnings ">
        <h2 class="text-center ">Things you learn from this course</h2>
        <div class="row p-2">
            <div class="col-md-6 p-3 webcourseImg">
                <img src="{{asset('frontend/assets/images/web_course.png')}}" alt="" />
                <div class="p-4 ">
                    <div class="video-icon">
                        <a href="https://www.youtube.com/embed/DWRcNpR6Kdc" target="_blank"><i class="far fa-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="enroll_sp p-3">
                    <button onclick="document.getElementById('id01').style.display='block'">Enroll Now</button>

                    <div id="id01" class="modal">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <form class="modal-content" action=" ">
                            <div class="container enrollment_form_sm">
                                <h1>Enrollment Form </h1>
                                <p>Please fill in this form to create an account.</p>
                                <hr>
                                <label for="email"><b>Email</b></label>
                                <input type="text" placeholder="Enter Email" name="email" required>

                                <label for="phone"><b>Phone</b></label>
                                <input type="number" placeholder="Enter Phone" name="phone" required>

                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" required>

                                <label for="psw-repeat"><b>Repeat Password</b></label>
                                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                                <label>
                                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                                </label>

                                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                                <div class="clearfix">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                    <button type="submit" class="signupbtn">Confirm</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('id01');

                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                            if (event.target === modal) {
                                modal.style.display = "none";
                            }
                        }
                    </script>

                </div>

                <div class="row course_enroll pt-2 pb-2">
                    <div class="col-md-5 col-sm-4 text-center">
                        <p><i class="far fa-calendar-alt"></i></p>
                        <h6>4 Months</h6>
                        <strong>Course Duration</strong>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p><i class="fas fa-users"></i></p>
                        <h6>1287</h6>
                        <strong>Total Enrolled</strong>
                    </div>
                    <div class="col-md-3 col-sm-4 text-center">
                        <p><i class="fas fa-star-half-alt"></i></p>
                        <h6>887</h6>
                        <strong>Total Confirm</strong>
                    </div>
                </div>
                <div class="row course_videos col-sm-12 pt-2 pb-2">
                    <div class="col-md-4 col-sm-4 text-center ">
                        <strong><i class="fas fa-play-circle"></i> 492 Videos</strong>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center ">
                        <strong><i class="fas fa-question-circle"></i> 152 Quizes</strong>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <strong><i class="fas fa-pen-square"></i> 75 Assignment</strong>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 whtLearn">
                        <p class="text-justify"><i class="fas fa-check-square"></i> Yorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>

                        <p class="text-justify"><i class="fas fa-check-square"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>

                        <p class="text-justify"><i class="fas fa-check-square"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                    </div>
                    <div class="col-md-6 whtLearn">
                        <p class="text-justify"><i class="fas fa-check-square"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>

                        <p class="text-justify"><i class="fas fa-check-square"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>

                        <p class="text-justify"><i class="fas fa-check-square"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Course Learning End -->

    <!--Course Speciality Start-->
    <div class="speciality mt-5 mb-2">
        <div class="row border">
            <div class="col-md-6 p-3" id="btn_1">
                <div class="commonButton first-border mb-2 text-center col-sm-6" id="first-border-bottom">
                    <div class="icon-star">
                        <i class="fas fa-star"></i>
                    </div>
                    <div>
                        <h4>Speciality of this course ?</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 p-3" id="btn_2">
                <div class="commonButton mb-2 text-center col-sm-6" id="second-border-bottom">
                    <div class="icon-pen">
                        <i class="fas fa-pen-square"></i>
                    </div>
                    <div>
                        <h4>How perform this course ?</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div id="sp_1" class="col-md-12 col-sm-6">
                <div class="row speciality_icon text-justify">
                    <div class="text-justify col-md-6 p-3">
                        <p><i class="fas fa-laptop-code"></i> Morem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p><i class="fas fa-hands-helping"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="text-justify col-md-6 p-3">
                        <p><i class="fas fa-users"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p><i class="fas fa-laptop-code"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
            <div class="next-Sp col-md-12 col-sm-6" id="sp_2">
                <div class="row speciality_icon text-justify">
                    <div class=" text-justify col-md-6 p-3">
                        <p>
                            <strong>1. </strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <p>
                            <strong>2. </strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <p>
                            <strong>3. </strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>

                    <div class=" text-justify col-md-6 p-3">
                        <p>
                            <strong>4. </strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <p>
                            <strong>5. </strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <p>
                            <strong>6. </strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Course Speciality End-->

    <!--Prospectus of Trainer Start--
    <div class="container">
        <div class="row pt-5 pb-4">
            <div class="col-md-4 col-sm-12 p-3 trainerImgWeb">
                <img src="{{asset('frontend/assets/images/instructor1.jpg')}}" alt="" class="trainerProspects" />
                <h6 class="pt-1"><em>Senior Web Developer</em></h6>
            </div>
            <div class="col-md-8 col-sm-12 p-3">
                <h2>MD Ariful Islam</h2>
                <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
    </div>
    !--Prospectus of Trainer End-->


    <!-- Video Start -->
    <div class="video wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                <span></span>
            </button>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->

    <!-- Fluid Section One -->
    <!-- Upcoming events Start -->

    <!-- Upcoming events End -->

    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Team</p>
                <h2>Meet Our Trainers</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('frontend/assets/images/instructor1.jpg')}}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Ariful Islam Arif</h2>
                            <p>Web developer</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('frontend/assets/images/instructor2.jpg')}}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Afia Naoshin</h2>
                            <p>Spoken English expert</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('frontend/assets/images/instructor3.jpg')}}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Anowar Hossain</h2>
                            <p>Web developer</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('frontend/assets/images/instructor1.jpg')}}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Ariful Islam Arif</h2>
                            <p>Web developer</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- FAQs Start -->
    <div class="faqs">
        <div class="container">
            <div class="section-header text-center">
                <p>Frequently Asked Question</p>
                <h2>You May Ask</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="accordion-1">
                        <div class="card wow fadeInLeft" data-wow-delay="0.05s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.10s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.15s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.20s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.25s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="accordion-2">
                        <div class="card wow fadeInRight" data-wow-delay="0.05s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.10s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.15s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.20s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseNine">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseNine" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.25s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseTen" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


    <!-- Testimonial Start -->
    <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider-nav">
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-1.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-2.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-3.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-4.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-1.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-2.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-3.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-4.jpg')}}" alt="Testimonial"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">
                        <div class="slider-item">
                            <h3>Jarin</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Tasnim</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Oroni</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Maisha</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Mueed</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Abid</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Ayan</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Farhan</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start-->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <h2>Our Latest Blogs</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/images/blog-1.jpg')}}" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta text-dark">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Digital Marketing</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/images/blog-2.jpg')}}" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta text-dark">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Graphics Design</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/images/blog-3.jpg')}}" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta text-dark">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Web development</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->



@endsection
