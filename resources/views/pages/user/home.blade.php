@extends('layout.homelayout')
@section('content')
    <x-booking :orders="$orders" />
    <section class="kc-elm kc-css-121359 kc_row">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-830723 kc_col-sm-6 kc-animated kc-animate-eff-fadeInLeft kc_column kc_col-sm-6">
                    <div class="kc-col-container">
                        <div class="kc-elm kc-css-238438 kc-title-wrap ">
                            <div class="kc_title bold home_title_dat_xe">CÁC HÌNH THỨC ĐẶT XE</div>
                        </div>
                        <div class="kc-elm kc-css-5099 divider_line">
                            <div class="divider_inner divider_line1"></div>
                        </div>
                        <div class="kc-elm kc-css-724720 kc_text_block home_hinh_thuc_item">
                            <p><img class="size-full alignleft" src="{{ asset('uploads/2018/03/1.png') }}" alt="Số 1"
                                    width="52" height="61" /></p>
                            <h3><span style="color: #104282; font-size: 20px;">Gọi điện trực tiếp (24/7)<br /> </span>
                            </h3>
                            <p><span style="color: #ff9000;">Tổng đài</span> <span style="color: #104282;"><strong><span
                                            style="font-size: 24px;"><a class="tdhotline" title=""
                                                href="tel:{{ $config->where('key', 'phone')->first()->value }}"><br />
                                                {{ $config->where('key', 'phone')->first()->value }} </a>
                                        </span></strong></span> <span style="color: #ff9000;">Hotline</span> <span
                                    style="color: #104282;"><strong><span style="font-size: 24px;"><a class="tdhotline"
                                                href="tel:{{ $config->where('key', 'phone')->first()->value }}">{{ $config->where('key', 'phone')->first()->value }}</a></span></strong></span>
                            </p>
                        </div>
                        <div class="kc-elm kc-css-208875 kc_text_block home_hinh_thuc_item">
                            <p><img class="size-full alignleft" src="{{ asset('uploads/2018/03/2.png') }}" alt="Số 2"
                                    width="52" height="61" /></p>
                            <h3><span style="color: #104282; font-size: 20px;">Đăng ký trên website</span></h3>
                            <p><span style="font-family: 'Bebeboo';">Truy cập <a href="{{ url('/') }}">
                                        {{ $config->where('key', 'title')->first()->value }} </a> và nhập số điện thoại
                                    và địa chỉ của quý khách, <strong>chúng tôi</strong> sẽ liên lạc lại ngay trong ít
                                    phút.</span></p>
                        </div>
                        <div class="kc-elm kc-css-528428 kc_text_block home_hinh_thuc_item">
                            <p><img class="size-full alignleft" src="{{ asset('uploads/2018/03/3.png') }}" alt=""
                                    width="52" height="61" /></p>
                            <h3><span style="color: #104282; font-size: 20px;">Chat Online – </span><span
                                    style="font-size: 20px; color: #104282;">084.790.4444</span></h3>
                            <p>
                                <a href="{{ $config->where('key', 'facebook')->first()->value }}"><img
                                        class="alignnone size-full wp-image-1716"
                                        src="{{ asset('uploads/2018/08/icon-f.png') }}" alt="" width="40"
                                        height="40" /></a>
                                <a href="{{ $config->where('key', 'messenger')->first()->value }}"><img
                                        class="alignnone wp-image-1718 size-full"
                                        src="{{ asset('uploads/2018/08/icon-mess-face.png') }}" alt=""
                                        width="40" height="40" /></a>
                                <a href="{{ $config->where('key', 'zalo')->first()->value }}"><img
                                        class="alignnone size-medium" src="{{ asset('uploads/2018/09/icon-line.png') }}"
                                        alt="" width="40" height="40" /></a>
                                <a href="viber://chat?number=84847904444"><img class="alignnone"
                                        src="{{ asset('uploads/2018/08/icon-viber.png') }}" alt="" width="40"
                                        height="40" /></a>
                                <a href="{{ $config->where('key', 'zalo')->first()->value }}"><img
                                        class="alignnone wp-image-1979 size-full"
                                        src="{{ asset('uploads/2018/09/icon-zalo.png') }}" alt="" width="40"
                                        height="40" /></a>
                                <a href="https://api.whatsapp.com/send?phone=0847904444"><img
                                        class="alignnone wp-image-1984 size-full"
                                        src="{{ asset('uploads/2018/09/icon-whatapp.png') }}" alt="" width="40"
                                        height="40" /></a>
                                <a href="{{ $config->where('key', 'zalo')->first()->value }}"><img
                                        class="alignnone size-medium"
                                        src="{{ asset('uploads/2018/09/icon-telegram.png') }}" alt=""
                                        width="40" height="40" /></a>
                            </p>
                        </div>
                        <div class="kc-elm kc-css-653593 kc_text_block home_hinh_thuc_item">
                            <p><img class="size-full alignleft" src="{{ asset('uploads/2018/03/4.png') }}" alt=""
                                    width="52" height="61" /></p>
                            <h3><span style="color: #104282; font-size: 20px;">Đến văn phòng công ty</span></h3>
                            <p><img class="alignnone"
                                    src="{{ asset('uploads/2019/08/Screen-Shot-2019-08-14-at-16.43.51.png') }}"
                                    alt="" width="310" height="131" /></p>
                        </div>
                    </div>
                </div>
                <div class="kc-elm kc-css-606785 kc_col-sm-6 kc-animated kc-animate-eff-fadeInRight kc_column kc_col-sm-6">
                    <div class="kc-col-container">
                        <div class="kc-elm kc-css-247956 kc-title-wrap ">
                            <div class="kc_title bold home_title_dat_xe">CÁC HÌNH THỨC THANH TOÁN</div>
                        </div>
                        <div class="kc-elm kc-css-726804 divider_line">
                            <div class="divider_inner divider_line1"></div>
                        </div>
                        <div class="kc-elm kc-css-559676 kc_text_block home_hinh_thuc_item">
                            <p><img class="size-full alignleft" src="{{ asset('uploads/2018/03/tien_mat.png') }}"
                                    alt="" width="52" height="61" /></p>
                            <h3><span style="color: #104282; font-size: 20px;">Tiền mặt</span></h3>
                            <p>Sau khi kết thúc hành trình, Quý khách vui lòng thanh toán trực tiếp cho lái xe chi phí
                                của chuyến đi bằng tiền mặt.</p>
                        </div>
                        <div class="kc-elm kc-css-261565 kc_text_block home_hinh_thuc_item">
                            <p><img class="size-full alignleft" src="{{ asset('uploads/2018/03/chuyen_khoan.png') }}"
                                    alt="" width="52" height="61" /></p>
                            <h3><span style="color: #104282; font-size: 20px;">Chuyển khoản</span></h3>
                            <p>Quý khách có thể thanh toán bằng cách chuyển khoản vào một trong các tài khoản do công ty
                                chỉ định:
                            </p>
                        </div>
                        <div class="kc-elm kc-css-844510 kc_text_block home_hinh_thuc_item">
                            <p><img class="size-full alignleft" src="{{ asset('uploads/2018/03/van_phong.png') }}"
                                    alt="" width="52" height="61" /></p>
                            <h3><span style="color: #104282; font-size: 20px;">Trực tiếp tại văn phòng</span></h3>
                            <p>Quý khách vui lòng đến văn phòng công ty tại địa chỉ tại
                                {{ $config->where('key', 'address')->first()->value }}</p>
                        </div>
                        <div class="kc-elm kc-css-790555 kc_text_block home_hinh_thuc_item">
                            <p><img class="size-full alignleft" src="{{ asset('uploads/2018/03/tra_sau.png') }}"
                                    alt="" width="52" height="61" /></p>
                            <h3><span style="color: #104282; font-size: 20px;">Trả sau</span></h3>
                            <p>Chỉ áp dụng cho doanh nghiệp có hợp đồng với chúng tôi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="kc-elm kc-css-196933 kc_row">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div
                    class="kc-elm kc-css-861037 kc_col-sm-12 kc-animated kc-animate-eff-fadeIn kc-animate-delay-200 kc_column kc_col-sm-12">
                    <div class="kc-col-container">
                        <div class="kc-elm kc-css-947078 kc_row kc_row_inner">
                            <div class="kc-elm kc-css-812800 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                                <div class="kc_wrapper kc-col-inner-container">
                                    <h3 class="dc_dgdt_title"
                                        style="color: #104282; font-size: 20px; text-transform: uppercase; margin: 0; padding-bottom: 10px; margin-bottom: 20px; border-bottom: 1px solid #104282">
                                        Khách hàng nói về chúng tôi</h3>
                                    <div class="dc_home_danh_gia_box">
                                        <div class="danhgia_prev"></div>
                                        <div class="danhgia_next"></div>
                                        <div class="swiper-container dc_home_danh_gia">
                                            <div class="swiper-wrapper">
                                                @foreach ([
            ['img' => 'https://www.taxinoibai.net/wp-content/uploads/2018/03/1-2.png', 'name' => 'Hoàng Chiến (chiends***6@gmail.com)', 'comment' => 'Chúng tôi đã đặt xe bên bạn và khá là hài lòng về cách phục vụ. Sẽ tiếp tục ủng hộ các bạn trong thời gian dài'],
            ['img' => 'https://www.taxinoibai.net/wp-content/uploads/2018/03/2-2.png', 'name' => 'Khánh (Khanhakita***a@gmail.com)', 'comment' => 'Công ty tôi đã có chuyến đi vui vẻ và an toàn khi đi xe bên Taxi Nội Bài. Cảm ơn các bạn đã đưa chúng tôi đi an toàn tuyệt đối'],
            ['img' => 'https://www.taxinoibai.net/wp-content/uploads/2018/07/14.png', 'name' => 'Thùy Dung (dungnt***1@gmail.com)', 'comment' => 'Vì lịch công tác dày đặc nhưng chỉ có bên hãng bạn là đáp ứng được đúng giờ giấc cho mọi người trong công ty tôi. Cảm ơn các bạn'],
            ['img' => 'https://www.taxinoibai.net/wp-content/uploads/2018/07/11.png', 'name' => 'Hoàng Thiên Nam (omegakenzo***z@gmail.com)', 'comment' => 'Đúng với tiêu chí Trọn Gói - An Toàn - Đúng Hẹn. Sử dụng dịch vụ của kết nối Nội Bài chúng tôi vô cùng an tâm. Chúc Taxi Nội Bài ngày càng thành công!'],
            ['img' => 'https://www.taxinoibai.net/wp-content/uploads/2018/07/8.png', 'name' => 'Trương Thị Việt Hương (huongtruong***1@gmail.com)', 'comment' => 'Nếu có ra Hà Nội chơi lần nữa. Nhất định công ty tôi sẽ sử dụng dịch vụ bên ban. Đội ngũ và nhân viên tận tâm và tuyệt vời!'],
            ['img' => 'https://www.taxinoibai.net/wp-content/uploads/2018/07/9.png', 'name' => 'Hương Quế (miumiu***e@gmail.com)', 'comment' => 'Công ty tôi đã tin tưởng và sử dụng dịch vụ bên taxi Nội Bài từ lâu và đến giờ vẫn thường xuyên gọi các bạn vì giá tốt'],
        ] as $testimonial)
                                                    <div class="swiper-slide">
                                                        <img class="size-full alignleft" alt=""
                                                            src="{{ $testimonial['img'] }}">
                                                        <p><strong>{{ $testimonial['name'] }}<br /></strong><em>{{ $testimonial['comment'] }}</em><strong><br /></strong>
                                                        </p>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kc-elm kc-css-108502 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                                <div class="kc_wrapper kc-col-inner-container">
                                    <h3 style="font-size:20px; color:#104282; text-transform: uppercase; margin: 0; padding-bottom: 10px; margin-bottom: 20px; border-bottom: 1px solid"
                                        class="dc_dgdt_title">Đối tác</h3>
                                    <div class="dc_home_danh_gia_box">
                                        <div class="danhgia_prev"></div>
                                        <div class="danhgia_next"></div>
                                        <div class="swiper-container dc_home_doitac">
                                            <div class="swiper-wrapper">
                                                @foreach (range(1, 10) as $index)
                                                    <div class="swiper-slide">
                                                        <img alt="Đối tác"
                                                            src="{{ asset('uploads/2018/03/logo-' . $index . 'a.png') }}">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal modal_xacnhan fade" id="quickBookModal" tabindex="-1" role="dialog"
        aria-labelledby="quickBookModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="quickBookModalLabel"><i class="fas fa-info-circle"></i>&nbsp;Gọi
                        điện</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>
                            <div>Yêu cầu gọi lại ngay</div>
                            <div class="input-group"> <input type="text" maxlength="10"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                    class="form-control" id="quickbook_phone_tf" placeholder="Nhập mobi của quý khách"
                                    aria-label="Điện thoại" data-toggle="tooltip" data-placement="top"
                                    title="Xin vui lòng nhập Số điện thoại">
                                <div class="input-group-append"> <button class="btn btn-success" type="button"
                                        id="quickCall_btn"><i class="fa-phone"></i>&nbsp;Gọi Lại</button></div>
                            </div>
                        </li>
                        <li>
                            <div>Gọi trực tiếp:&nbsp;<a class="tdhotline" href="tel:0833110000">08.3311.0000</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Hủy</button></div>
            </div>
        </div>
    </div>
@endsection
