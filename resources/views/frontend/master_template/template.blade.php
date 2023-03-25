<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('frontend.includes.head')

</head>

<body>
    <div class="main-wrapper">
        <!-- <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div> -->
        <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                        <span title="Light Mode">Light</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                        <span title="Dark Mode">Dark</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Start Header -->
        @include('frontend.includes.header')
        <!-- Start Header -->

        <!-- Start Mobile Menu Area  -->
       @include('frontend.includes.navbar')
        <!-- End Mobile Menu Area  -->

        <h1 class="d-none">Home Tech Blog</h1>
        <div class="axil-tech-post-banner pt--30 bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-12 col-12">
                        <!-- Start Post Grid  -->
                        <div class="content-block post-grid post-grid-transparent">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="{{asset('frontend/assets/images/post-images/post-tect-01.jpg')}}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-grid-content">
                                <div class="post-content">
                                    <div class="post-cat">
                                        <div class="post-cat-list">
                                            <a class="hover-flip-item-wrapper" href="#">
                                                <span class="hover-flip-item">
                                                    <span data-text="FEATURED POST">FEATURED POST</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="post-details.html">Beauty of deep space. Billions of
                                            galaxies in the universe.</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Start Post Grid  -->
                    </div>

                    <div class="col-xl-3 col-md-6 mt_lg--30 mt_md--30 mt_sm--30 col-12">
                        <!-- Start Single Post  -->
                        <div class="content-block image-rounded">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="{{asset('frontend/assets/images/post-images/post-tect-02.jpg')}}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content pt--20">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="LEADERSHIP">LEADERSHIP</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h5 class="title"><a href="post-details.html">Rocket Lab mission fails shortly after
                                        launch</a></h5>
                            </div>
                        </div>
                        <!-- End Single Post  -->
                        <!-- Start Single Post  -->
                        <div class="content-block image-rounded mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="{{asset('frontend/assets/images/post-images/post-tect-03.jpg')}}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content pt--20">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="TECHNOLOGY">TECHNOLOGY</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h5 class="title"><a href="post-details.html">Virtual Reality or Artificial
                                        Intelligence Technology</a></h5>
                            </div>
                        </div>
                        <!-- End Single Post  -->
                    </div>

                    <div class="col-xl-3 col-md-6 mt_lg--30 mt_md--30 mt_sm--30 col-12">
                        <!-- Start Single Post  -->
                        <div class="content-block image-rounded">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="{{asset('frontend/assets/images/post-images/post-tect-04.jpg')}}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content pt--20">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="PRODUCT UPDATES">PRODUCT UPDATES</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h5 class="title"><a href="post-details.html">The Morning After: Uber sets its
                                        sights on Postmates</a></h5>
                            </div>
                        </div>
                        <!-- End Single Post  -->
                        <!-- Start Single Post  -->
                        <div class="content-block image-rounded mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="{{asset('frontend/assets/images/post-images/post-tect-05.jpg')}}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content pt--20">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="GADGET">GADGET</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h5 class="title"><a href="post-details.html">Air Pods Pro with Wireless Charging
                                        Case.</a></h5>
                            </div>
                        </div>
                        <!-- End Single Post  -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Categories List  -->
        @include('frontend.includes.trending')
        <!-- Start Categories List  -->

        @yield('main')

        <!-- Start Footer Area  -->
        @include('frontend.includes.footer')
        <!-- End Footer Area  -->

        <!-- Start Back To Top  -->
        <a id="backto-top"></a>
        <!-- End Back To Top  -->

    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
  @include('frontend.includes.script')

</body>


<!-- Mirrored from new.axilthemes.com/demo/template/blogar/home-tech-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 06:36:48 GMT -->
</html>