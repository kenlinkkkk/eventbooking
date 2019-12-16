@extends('home.index')
@section('title'){{ 'Trang chủ' }}@endsection

@section('box')
    <section id="search_container">
        <div id="search">
            <ul class="nav nav-tabs">
                <li><a href="#tours" data-toggle="tab" class="active show">Events</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active show" id="tours">
                    <h3>Tổ chức sự kiện</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Địa điểm</label>
                                <select class="ddslick" name="category">
                                    <option value="0" data-imagesrc="{{ asset('assets/img/icons_search/all_tours.png') }}" selected>Hà Nội</option>
                                    <option value="1" data-imagesrc="{{ asset('assets/img/icons_search/sightseeing.png') }}">Hồ Chí Minh</option>
                                    <option value="2" data-imagesrc="{{ asset('assets/img/icons_search/museums.png') }}">Đà Nẵng</option>
                                    <option value="3" data-imagesrc="{{ asset('assets/img/icons_search/historic.png') }}">Nha Trang</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Quận</label>
                                <select class="ddslick" name="category">
                                    <option value="0" data-imagesrc="{{ asset('assets/img/icons_search/all_tours.png') }}" selected>Đống Đa</option>
                                    <option value="1" data-imagesrc="{{ asset('assets/img/icons_search/sightseeing.png') }}">Ba Đình</option>
                                    <option value="2" data-imagesrc="{{ asset('assets/img/icons_search/museums.png') }}">Hoàn Kiếm</option>
                                    <option value="3" data-imagesrc="{{ asset('assets/img/icons_search/historic.png') }}">Tây Hồ</option>
                                    <option value="4" data-imagesrc="{{ asset('assets/img/icons_search/all_tours.png') }}" selected>Hai Bà Trưng</option>
                                    <option value="5" data-imagesrc="{{ asset('assets/img/icons_search/sightseeing.png') }}">Long Biên</option>
                                    <option value="6" data-imagesrc="{{ asset('assets/img/icons_search/historic.png') }}">Hoàng Mai</option>
                                    <option value="7" data-imagesrc="{{ asset('assets/img/icons_search/all_tours.png') }}" selected>Bắc Từ Liêm</option>
                                    <option value="8" data-imagesrc="{{ asset('assets/img/icons_search/sightseeing.png') }}">Nam Từ Liêm</option>
                                    <option value="9" data-imagesrc="{{ asset('assets/img/icons_search/museums.png') }}">Hà Đông</option>
                                    <option value="10" data-imagesrc="{{ asset('assets/img/icons_search/historic.png') }}">Thanh Xuân</option>
                                    <option value="11" data-imagesrc="{{ asset('assets/img/icons_search/all_tours.png') }}" selected>Cầu Giấy</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i> Ngày tổ chức</label>
                                <input class="date-pick form-control" data-date-format="M d, D" type="text">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><i class=" icon-clock"></i> Thời gian</label>
                                <select class="ddslick" name="time">
                                    <option value="0" data-imagesrc="{{ asset('assets/img/icons_search/all_tours.png') }}" selected>Cả ngày</option>
                                    <option value="1" data-imagesrc="{{ asset('assets/img/icons_search/sightseeing.png') }}">Sáng</option>
                                    <option value="2" data-imagesrc="{{ asset('assets/img/icons_search/museums.png') }}">Chiều</option>
                                    <option value="3" data-imagesrc="{{ asset('assets/img/icons_search/historic.png') }}">Tối</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Số lượng người</label>
                                <div class="numbers-row">
                                    <input type="text" value="6" id="adults" class="qty2 form-control" name="adults">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End row -->
                    <hr>
                    <button class="btn_1 green"><i class="icon-search"></i>Tìm kiếm</button>
                </div>
                <!-- End rab -->
            </div>
        </div>
    </section>
@endsection

@section('content')
    <main>
        <div class="container margin_60">

            <div class="main_title">
                <h2>Top <span>Sự kiện</span> sắp diễn ra</h2>
                <p>Tìm hiểu và tham gia các sự kiện quanh bạn</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>Popular</span></div>
                        <div class="img_container">
                            <a href="single_tour.html">
                                <img src="{{ asset('assets/img/lamita.jpg') }}" width="800" height="533" class="img-fluid" alt="Image">
                                <div class="short_info">
                                    Hội thảo hợp tác đầu tư<strong> Mô hình nhượng quyền</strong><span class="price">17/11</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3>Lamita talk</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div><!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div><!-- End wish list-->
                        </div>
                    </div><!-- End box tour -->
                </div><!-- End col -->

                <div class="col-lg-4 col-md-6 zoomOut" data-wow-delay="0.2s">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>Popular</span></div>
                        <div class="img_container">
                            <a href="single_tour.html">
                                <img src="{{ asset('assets/img/sto.jpg') }}" width="800" height="533" class="img-fluid" alt="Image">
                                <div class="badge_save">Save<strong>30%</strong></div>
                                <div class="short_info">
                                    <i class="icon_set_1_icon-43"></i>Churches<span class="price"><sup>$</sup>45</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>Notredame</strong> tour</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div><!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div><!-- End wish list-->
                        </div>
                    </div><!-- End box tour -->
                </div><!-- End col -->

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>Popular</span></div>
                        <div class="img_container">
                            <a href="single_tour.html">
                                <img src="{{ asset('assets/img/up.jpg') }}" width="800" height="533" class="img-fluid" alt="Image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>Historic Buildings<span class="price"><sup>$</sup>48</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>Versailles</strong> tour</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div><!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div><!-- End wish list-->
                        </div>
                    </div><!-- End box tour -->
                </div><!-- End col -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>Popular</span></div>
                        <div class="img_container">
                            <a href="single_tour.html">
                                <img src="{{ asset('assets/img/lamita.jpg') }}" width="800" height="533" class="img-fluid" alt="Image">
                                <div class="short_info">
                                    Hội thảo hợp tác đầu tư<strong> Mô hình nhượng quyền</strong><span class="price">17/11</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3>Lamita talk</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div><!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div><!-- End wish list-->
                        </div>
                    </div><!-- End box tour -->
                </div><!-- End col -->

                <div class="col-lg-4 col-md-6 zoomOut" data-wow-delay="0.2s">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>Popular</span></div>
                        <div class="img_container">
                            <a href="single_tour.html">
                                <img src="{{ asset('assets/img/sto.jpg') }}" width="800" height="533" class="img-fluid" alt="Image">
                                <div class="badge_save">Save<strong>30%</strong></div>
                                <div class="short_info">
                                    <i class="icon_set_1_icon-43"></i>Churches<span class="price"><sup>$</sup>45</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>Notredame</strong> tour</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div><!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div><!-- End wish list-->
                        </div>
                    </div><!-- End box tour -->
                </div><!-- End col -->

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>Popular</span></div>
                        <div class="img_container">
                            <a href="single_tour.html">
                                <img src="{{ asset('assets/img/up.jpg') }}" width="800" height="533" class="img-fluid" alt="Image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>Historic Buildings<span class="price"><sup>$</sup>48</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>Versailles</strong> tour</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div><!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div><!-- End wish list-->
                        </div>
                    </div><!-- End box tour -->
                </div><!-- End col -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>Popular</span></div>
                        <div class="img_container">
                            <a href="single_tour.html">
                                <img src="{{ asset('assets/img/lamita.jpg') }}" width="800" height="533" class="img-fluid" alt="Image">
                                <div class="short_info">
                                    Hội thảo hợp tác đầu tư<strong> Mô hình nhượng quyền</strong><span class="price">17/11</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3>Lamita talk</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div><!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div><!-- End wish list-->
                        </div>
                    </div><!-- End box tour -->
                </div><!-- End col -->

                <div class="col-lg-4 col-md-6 zoomOut" data-wow-delay="0.2s">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>Popular</span></div>
                        <div class="img_container">
                            <a href="single_tour.html">
                                <img src="{{ asset('assets/img/sto.jpg') }}" width="800" height="533" class="img-fluid" alt="Image">
                                <div class="badge_save">Save<strong>30%</strong></div>
                                <div class="short_info">
                                    <i class="icon_set_1_icon-43"></i>Churches<span class="price"><sup>$</sup>45</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>Notredame</strong> tour</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div><!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div><!-- End wish list-->
                        </div>
                    </div><!-- End box tour -->
                </div><!-- End col -->

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>Popular</span></div>
                        <div class="img_container">
                            <a href="single_tour.html">
                                <img src="{{ asset('assets/img/up.jpg') }}" width="800" height="533" class="img-fluid" alt="Image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>Historic Buildings<span class="price"><sup>$</sup>48</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>Versailles</strong> tour</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div><!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div><!-- End wish list-->
                        </div>
                    </div><!-- End box tour -->
                </div><!-- End col -->


            </div><!-- End row -->

            <p class="text-center nopadding">
                <a href="#" class="btn_1 medium"><i class="icon-eye-7"></i>Xem tất cả</a>
            </p>
        </div><!-- End container -->

        <div class="white_bg">
            <div class="container margin_60">
                <div class="main_title">
                    <h2>Những <span>tin tức & Tri thức</span> mới nhất</h2>
                    <p>
                        Tất cả những gì bạn cần biết để tổ chức một sự kiện hoàn hảo
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <p>
                            <a href="#"><img src="{{ asset('assets/img/bus.jpg') }}" alt="Pic" class="img-fluid"></a>
                        </p>
                        <h4><span>Sightseen tour</span> booking</h4>
                        <p>
                            Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <p>
                            <a href="#"><img src="{{ asset('assets/img/transfer.jpg') }}" alt="Pic" class="img-fluid"></a>
                        </p>
                        <h4><span>Transfer</span> booking</h4>
                        <p>
                            Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <p>
                            <a href="#"><img src="{{ asset('assets/img/guide.jpg') }}" alt="Pic" class="img-fluid"></a>
                        </p>
                        <h4><span>Tour guide</span> booking</h4>
                        <p>
                            Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <p>
                            <a href="#"><img src="{{ asset('assets/img/hotel.jpg') }}" alt="Pic" class="img-fluid"></a>
                        </p>
                        <h4><span>Hotel</span> booking</h4>
                        <p>
                            Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                        </p>
                    </div>
                </div>
                <!-- End row -->

            </div>
            <!-- End container -->
        </div>
        <!-- End white_bg -->

        <section class="promo_full">
            <div class="promo_full_wp magnific">
                <div>
                    <h3>BELONG ANYWHERE</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                    <a href="https://www.youtube.com/watch?v=Zz5cu72Gv5Y" class="video"><i class="icon-play-circled2-1"></i></a>
                </div>
            </div>
        </section>
        <!-- End section -->

        <div class="container margin_60">

            <div class="main_title">
                <h2>Lý do <span>chọn</span> chúng tôi</h2>
                <p>
                    Chúng tôi cung cấp trải nghiệm tốt nhất cho cả người tổ chức sự kiện và người tham gia sự kiện
                </p>
            </div>

            <div class="row">

                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.2s">
                    <div class="feature_home">
                        <i class="icon_set_1_icon-41"></i>
                        <h3><span>+120</span> Địa điểm tổ chức</h3>
                        <p>
                        </p>
                        <a href="about.html" class="btn_1 outline">Read more</a>
                    </div>
                </div>

                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.4s">
                    <div class="feature_home">
                        <i class="icon_set_1_icon-30"></i>
                        <h3><span>+1000</span> Customers</h3>
                        <p>
                            Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                        </p>
                        <a href="about.html" class="btn_1 outline">Read more</a>
                    </div>
                </div>

                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="feature_home">
                        <i class="icon_set_1_icon-57"></i>
                        <h3><span>H24 </span> Support</h3>
                        <p>
                            Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                        </p>
                        <a href="about.html" class="btn_1 outline">Read more</a>
                    </div>
                </div>

            </div>
            <!--End row -->

            <hr>


        </div>
        <!-- End container -->
    </main>
@endsection
