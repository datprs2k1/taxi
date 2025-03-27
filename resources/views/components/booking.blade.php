<section class="kc-elm kc-css-268160 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-340647 kc_col-sm-6 kc-animated kc-animate-eff-fadeInLeft kc_column kc_col-sm-6">
                <div class="home_datxe kc-col-container">
                    <div id="form_datxe" class="form_main">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" id="airport-tab" data-toggle="pill"
                                    href="#" role="tab"> <i class="fas fa-plane"></i>&nbsp;Sân bay </a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" id="long-distance-tab" data-toggle="pill"
                                    href="#" role="tab"> <i class="fas fa-road"></i>&nbsp;Đường dài
                                </a></li>
                        </ul>
                        <form class="info_form">
                            <div class="kc-elm diem_dd">
                                <div class="form-group flex bg1 dc_diemdi"> <label for="startPoint_tf">Điểm
                                        đi</label> <input type="text" class="form-control" id="startPoint_tf"
                                        placeholder="Điểm đi" data-toggle="tooltip" data-placement="top"
                                        title="Xin vui lòng nhập Điểm Đi"> <input type="hidden" id="startPoint_tf_loc">
                                </div>
                                <div class="form-group flex bg1 dc_diemden"> <label
                                        for="endPoint_tf">&nbsp;&nbsp;&nbsp;Điểm đến</label> <input type="text"
                                        class="form-control" id="endPoint_tf" placeholder="Điểm đến"
                                        data-toggle="tooltip" data-placement="top" title="Xin vui lòng nhập Điểm Đến">
                                    <input type="hidden" id="endPoint_tf_loc">
                                </div> <button type="button" class="btn btn-warning" id="rotate_btn" rel="tooltip"
                                    data-placement="top" title="Đảo chiều"><i class="fa fa-refresh"
                                        aria-hidden="true"></i></button>
                            </div>
                            <div class="kc-elm form_dcdd">
                                <div class="form-group hai_chieu"> <input type="checkbox" class="form-check-input"
                                        id="roundtrip_cf"> <label class="form-check-label" for="roundtrip_cf">Hai
                                        chiều</label></div>
                                <div class="form-group vat"> <input type="checkbox" class="form-check-input"
                                        id="vat_cf"> <label class="form-check-label" for="vat_cf">Hoá
                                        đơn</label></div>
                                <div class="form-group promocode"> <input type="text" class="form-control"
                                        id="promocode_tf" placeholder="Mã giảm giá"></div>
                            </div>
                            <div class="form-group flex bg2 dc_col2 left"> <label for="numseats_sf">Loại
                                    xe</label> <select class="form-control loai_xe" id="numseats_sf">
                                    <option value="5">Xe 5 chỗ</option>
                                    <option value="7">Xe 7 chỗ</option>
                                </select></div>
                            <div class="form-group flex bg2 dc_col2 right"> <label for="stopPointsCounter">Điểm
                                    dừng</label> <button type="button" class="btn diem_dung" rel="tooltip"
                                    data-toggle="modal" data-placement="top" title="Thêm điểm dừng"
                                    data-target="#stopPointModal"><span class=""
                                        id="stopPointsCounter">0</span></button></div>
                            <div class="form-group flex bg2 dc_col2 left tgian_don"> <input type="text"
                                    class="form-control tgian_don" id="pickuptime_tif" placeholder="Thời gian đón"
                                    data-toggle="tooltip" data-placement="top" title="Xin vui lòng nhập Thời Gian Đón">
                            </div>
                            <div class="form-group flex bg2 dc_col2 right tgian_cho"> <input type="number"
                                    class="form-control tgian_cho" id="waittime_nf" placeholder="Thời gian chờ"
                                    aria-describedby="waittime_help" rel="tooltip" data-placement="top"
                                    title="Số giờ chờ, ví dụ 2 giờ, 3 giờ..."></div>
                            <div class="form-group flex"> <button type="button" class="btn btn_datxe"
                                    id="bookNow_btn">Kiểm Tra Giá <i class="fa-arrow-circle-right"></i></button>
                            </div>
                        </form>
                        <div class="modal modal_xacnhan fade" id="stopPointModal" tabindex="-1" role="dialog"
                            aria-labelledby="stopPointModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="stopPointModalLabel"><i
                                                class="fas fa-map-marked-alt"></i>&nbsp;Thêm
                                            điểm dừng</h5> <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="stopPointForm"></form>
                                    </div>
                                    <div class="modal-footer"> <button type="button" class="btn btn-danger"
                                            id="stopPoint_reset">Xóa Tất Cả Điểm Dừng</button> <button type="button"
                                            class="btn btn-secondary" data-dismiss="modal">Hủy</button> <button
                                            type="button" class="btn btn-primary" id="stopPoint_submit">Đồng
                                            Ý</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal modal_xacnhan fade" id="bookingModal" tabindex="-1" role="dialog"
                            aria-labelledby="bookingModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="bookingModalLabel"><i
                                                class="fas fa-info-circle"></i>&nbsp;Xác Nhận
                                            Thông Tin</h5> <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                    </div>
                                    <div class="modal-body">
                                        <h4>Giá cước đã bao gồm phí ra, vào sân bay và phí cầu
                                            đường khác</h4>
                                        <div><span class="h3 price">0<sup>&#8363;</sup></span><span
                                                class="h5 old-price">0<sup>&#8363;</sup></span></div>
                                        <div class="vat-info">(đã bao gồm Hoá đơn tài chính VAT)</div> <span>Vui
                                            lòng đặt xe 45 phút trước giờ đón để đảm bảo giá này!</span>
                                        <hr> <span>Để lại số điện thoại của Quý khách, chúng tôi sẽ liên lạc lại
                                            ngay!</span>
                                        <form id="bookingForm">
                                            <div class="input-group mb-3"> <input type="text" maxlength="10"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                    class="form-control" id="customer_phone_tf"
                                                    placeholder="Điện thoại" aria-label="Điện thoại"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Xin vui lòng nhập Số điện thoại"></div>
                                            <div class="input-group mb-3"> <input type="text" class="form-control"
                                                    id="customer_name_tf" placeholder="Họ và tên"
                                                    aria-label="Họ và tên"></div>
                                        </form>
                                        <div class="success-promo-div" style="display: none;">Quý khách đã áp dụng
                                            mã khuyến mại thành công.</div>
                                    </div>
                                    <div class="modal-footer"> <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Hủy</button> <button type="button" id="confirm_btn"
                                            class="btn btn-primary gclick-signup">Xác Nhận Đặt
                                            Chuyến</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal modal_xacnhan fade" id="errorModal" tabindex="-1" role="dialog"
                        aria-labelledby="errorModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header error-modal-header">
                                    <h5 class="modal-title" id="errorModalLabel"><i
                                            class="fas fa-exclamation-circle"></i>&nbsp;Thông báo</h5> <button
                                        type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="modal-body">
                                    <p id="errorContentModal"></p>
                                </div>
                                <div class="modal-footer"> <button type="button" class="btn btn-danger"
                                        data-dismiss="modal">Đóng</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal modal_xacnhan fade" id="successModal" tabindex="-1" role="dialog"
                        aria-labelledby="successModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header success-modal-header">
                                    <h5 class="modal-title" id="successModalLabel"><i
                                            class="fas fa-exclamation-circle"></i>&nbsp;Đặt Xe Thành Công</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="modal-body">
                                    <p>Quý Khách đã đặt xe thành công. Tổng đài sẽ liên hệ với quý
                                        khách sau ít phút nữa!</p>
                                </div>
                                <div class="modal-footer"> <button type="button" class="btn btn-success"
                                        data-dismiss="modal">Đóng</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kc-elm kc-css-698619 kc_col-sm-6 kc-animated kc-animate-eff-fadeInRight kc_column kc_col-sm-6">
                <div class="home_slider kc-col-container">
                    <div class="kc-elm kc-css-19381">
                        <div class="kc-carousel_images kc-elm kc-css-19381">
                            <div class="kc-carousel-images owl-carousel-images kc-sync1 dc_home_slider"
                                data-owl-i-options='{"items":"1","tablet":"1","mobile":"1","speed":"500","navigation":"","pagination":"yes","autoheight":"","progressbar":"","delay":"8","autoplay":"yes","showthumb":"","num_thumb":"5"}'>
                                <div class="item"> <a href="#" target="_self"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                            alt=""
                                            data-lazy-src="{{ asset('uploads/2018/11/slider-1_tiny.jpg') }}" /><noscript><img
                                                src="{{ asset('uploads/2018/11/slider-1_tiny.jpg') }}"
                                                alt="" /></noscript></a></div>
                                <div class="item"> <a href="#" target="_self"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                            alt=""
                                            data-lazy-src="{{ asset('uploads/2018/11/slider-3_tiny.png') }}" /><noscript><img
                                                src="{{ asset('uploads/2018/11/slider-3_tiny.png') }}"
                                                alt="" /></noscript></a></div>
                                <div class="item"> <a href="#" target="_self"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                            alt=""
                                            data-lazy-src="{{ asset('uploads/2018/07/slider-2.png') }}" /><noscript><img
                                                src="{{ asset('uploads/2018/07/slider-2.png') }}"
                                                alt="" /></noscript></a></div>
                            </div>
                        </div>
                    </div>
                    <ul class="dc_datxe">
                        @foreach ($orders as $order)
                            @php
                                $maskedPhone = Str::mask($order->phone, 'x', 4, 3);
                                $formattedPhone = substr_replace($maskedPhone, '.', 4, 0);
                                $formattedPhone = substr_replace($formattedPhone, '.', 8, 0);

                            @endphp
                            <li>
                                <p>Khách hàng: <span
                                        style="color: #104282;"><strong>{{ $order->name }}</strong></span> vừa đặt
                                    xe {{ $order->long_trip ? 'đường dài' : 'sân bay' }} ({{ $formattedPhone }})</p>
                                <span class="gia">{{ number_format($order->price, 0, ',', '.') }}đ</span>
                            </li>
                        @endforeach
                        <li>
                            <p>Khách hàng: <span style="color: #104282;"><strong>Quang Hiếu</strong></span> vừa đặt
                                xe sân bay (0902.xxx.328)</p> <span class="gia">130.000đ</span>
                        </li>
                        <li>
                            <p>Khách hàng: <strong><span style="color: #104282;">Quỳnh Hương</span></strong> vừa
                                đặt xe đi tỉnh (092.xxx.668)</p> <span class="gia">830.000đ</span>
                        </li>
                        <li>
                            <p>Khách hàng: <span style="color: #104282;"><strong>Hoàng Chiến</strong></span> vừa
                                đặt xe đi tỉnh (0981.xxx.228)</p> <span class="gia">2.230.000đ</span>
                        </li>
                        <li>
                            <p>Khách hàng: <strong><span style="color: #104282;">Đạt Mạnh</span></strong> vừa đặt
                                xe đi tỉnh (0922.xxx.122)</p> <span class="gia">840.000đ</span>
                        </li>
                        <li>
                            <p>Khách hàng: <strong><span style="color: #104282;">Nguyễn Trang</span></strong> vừa
                                đặt xe sân bay (083.xxx.655)</p> <span class="gia">130.000đ</span>
                        </li>
                        <li>
                            <p>Khách hàng: <span style="color: #104282;"><strong>Hương Trương</strong></span> vừa
                                đặt xe đi tỉnh (0934.xxx.555)</p> <span class="gia">1.120.000đ</span>
                        </li>
                        <li>
                            <p>Khách hàng: <span style="color: #104282;"><strong>Lê Thắng</strong></span> vừa đặt
                                xe đi tỉnh (0988.xxx.124)</p> <span class="gia">1.180.000đ</span>
                        </li>
                        <li>
                            <p>Khách hàng: <span style="color: #104282;"><strong>Ng Trang</strong></span> vừa đặt
                                xe đi tỉnh (039.xxx.199)</p> <span class="gia">780.000đ</span>
                        </li>
                        <li>
                            <p>Khách hàng: <span style="color: #104282;"><strong>Phượng</strong></span> vừa đặt xe
                                đi tỉnh (0912.xxx.652)</p> <span class="gia">1.210.000đ</span>
                        </li>
                        <li>
                            <p>Khách hàng: <span style="color: #104282;"><strong>Đinh Uyên</strong></span> vừa đặt
                                xe đi tỉnh (035.xxx.122)</p> <span class="gia">2.230.000đ</span>
                        </li>
                        <li>
                            <p>Khách hàng: <span style="color: #104282;"><strong>Linh Chi</strong></span> vừa đặt
                                xe đi tỉnh (035.xxx.096)</p> <span class="gia">1.100.000đ</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
