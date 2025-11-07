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
                            <div class="form-group flex bg2 dc_col2 right tgian_don"> <label for="pickuptime_tif">Thời gian đón</label> <input type="text"
                                    class="form-control tgian_don" id="pickuptime_tif" placeholder="Thời gian đón"
                                    data-toggle="tooltip" data-placement="top" title="Xin vui lòng nhập Thời Gian Đón">
                            </div>
                            <div class="form-group flex bg2 dc_col2 left"> <label for="customer_phone_tf">SỐ ĐIỆN THOẠI</label> <input type="text" maxlength="10"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                    class="form-control" id="customer_phone_tf"
                                    placeholder="Số điện thoại" aria-label="Số điện thoại"
                                    data-toggle="tooltip" data-placement="top"
                                    title="Xin vui lòng nhập Số điện thoại"></div>
                            <div class="form-group flex bg2 dc_col2 right"> <label for="customer_name_tf">HỌ VÀ TÊN</label> <input type="text" class="form-control"
                                    id="customer_name_tf" placeholder="Họ và tên"
                                    aria-label="Họ và tên"></div>
                            <div class="form-group flex"> <button type="button" class="btn btn_datxe"
                                    id="bookNow_btn">ĐẶT XE <i class="fa-arrow-circle-right"></i></button>
                            </div>
                        </form>
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
                                        <h4 class="mb-3">Vui lòng xác nhận thông tin đặt xe</h4>

                                        <div class="booking-info-summary mb-3">
                                            <div class="info-row mb-2">
                                                <strong>Điểm đi:</strong> <span id="confirm_start_place">-</span>
                                            </div>
                                            <div class="info-row mb-2">
                                                <strong>Điểm đến:</strong> <span id="confirm_end_place">-</span>
                                            </div>
                                            <div class="info-row mb-2">
                                                <strong>Loại xe:</strong> <span id="confirm_num_seats">-</span>
                                            </div>
                                            <div class="info-row mb-2">
                                                <strong>Thời gian đón:</strong> <span id="confirm_pickup_time">-</span>
                                            </div>
                                            <div class="info-row mb-2">
                                                <strong>Số điện thoại:</strong> <span id="confirm_phone">-</span>
                                            </div>
                                            <div class="info-row mb-2">
                                                <strong>Họ và tên:</strong> <span id="confirm_name">-</span>
                                            </div>
                                            <div class="info-row mb-2" id="confirm_round_trip_row" style="display: none;">
                                                <strong>Hai chiều:</strong> <span>Có</span>
                                            </div>
                                            <div class="info-row mb-2" id="confirm_vat_row" style="display: none;">
                                                <strong>Hoá đơn:</strong> <span>Có</span>
                                            </div>
                                        </div>

                                        <div class="price-section mb-3" style="display: none !important;">
                                            <hr>
                                            <h5>Giá cước:</h5>
                                            <div><span class="h3 price">0<sup>&#8363;</sup></span><span
                                                    class="h5 old-price" style="display: none;">0<sup>&#8363;</sup></span></div>
                                            <div class="vat-info" style="display: none;">(đã bao gồm Hoá đơn tài chính VAT)</div>
                                            <p class="text-muted small mt-2">Giá cước đã bao gồm phí ra, vào sân bay và phí cầu đường khác</p>
                                        </div>

                                        <div class="alert alert-info mt-3">
                                            <i class="fas fa-info-circle"></i> Vui lòng đặt xe 45 phút trước giờ đón để đảm bảo dịch vụ tốt nhất!
                                        </div>

                                        <form id="bookingForm" style="display: none;">
                                            <div class="input-group mb-3"> <input type="text" maxlength="10"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                    class="form-control" id="customer_phone_tf_modal"
                                                    placeholder="Điện thoại" aria-label="Điện thoại"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Xin vui lòng nhập Số điện thoại"></div>
                                            <div class="input-group mb-3"> <input type="text" class="form-control"
                                                    id="customer_name_tf_modal" placeholder="Họ và tên"
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
<script>
    // Wait for jQuery to be available
    (function() {
        function initWhenReady() {
            // Check if jQuery is available
            if (typeof jQuery === 'undefined' || typeof $ === 'undefined') {
                setTimeout(initWhenReady, 100);
                return;
            }

            var $ = jQuery;

            // Validate and handle form fields moved from modal to main form
            // Use both document.ready and window.load to ensure code runs after all scripts
            $(document).ready(function() {
                initBookingValidation();
            });

            $(window).on('load', function() {
                // Re-initialize in case other scripts override
                setTimeout(function() {
                    initBookingValidation();
                }, 500);
            });

        }

        // Start initialization
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initWhenReady);
        } else {
            initWhenReady();
        }
    })();

    function initBookingValidation() {
        // Ensure jQuery is available
        if (typeof jQuery === 'undefined' || typeof $ === 'undefined') {
            console.error('jQuery is not available');
            return;
        }

        var $ = jQuery;
        // Validation function
        function validatePhone(phone) {
            // Remove all non-digit characters
            var cleanPhone = phone.replace(/[^0-9]/g, '');
            // Check if phone is 10 or 11 digits
            return /^[0-9]{10,11}$/.test(cleanPhone);
        }

        function validateName(name) {
            var trimmed = name.trim();
            return trimmed.length >= 2 && trimmed.length <= 100;
        }

        function validatePlace(place) {
            return place.trim().length >= 3;
        }

        function showFieldError(fieldId, message) {
            var $field = $(fieldId);
            $field.addClass('is-invalid');
            if (!$field.data('bs.tooltip')) {
                $field.tooltip({title: message, placement: 'top'});
            } else {
                $field.attr('data-original-title', message);
            }
            $field.tooltip('show');
        }

        function clearFieldError(fieldId) {
            var $field = $(fieldId);
            $field.removeClass('is-invalid');
            $field.tooltip('dispose');
        }

        // Add validation before the existing bookNow_btn handler runs
        $('#bookNow_btn').on('click', function(e) {
            var isValid = true;

            // Validate start place
            var startPlace = $('#startPoint_tf').val().trim();
            if (!validatePlace(startPlace)) {
                e.preventDefault();
                e.stopImmediatePropagation();
                showFieldError('#startPoint_tf', 'Vui lòng nhập điểm đi (ít nhất 3 ký tự)');
                isValid = false;
            } else {
                clearFieldError('#startPoint_tf');
            }

            // Validate end place
            var endPlace = $('#endPoint_tf').val().trim();
            if (!validatePlace(endPlace)) {
                e.preventDefault();
                e.stopImmediatePropagation();
                showFieldError('#endPoint_tf', 'Vui lòng nhập điểm đến (ít nhất 3 ký tự)');
                isValid = false;
            } else {
                clearFieldError('#endPoint_tf');
            }

            // Validate phone number
            var phone = $('#customer_phone_tf').val().trim();
            // Clean phone number (remove non-digit characters)
            var cleanPhone = phone.replace(/[^0-9]/g, '');
            if (phone === '') {
                e.preventDefault();
                e.stopImmediatePropagation();
                showFieldError('#customer_phone_tf', 'Vui lòng nhập số điện thoại');
                isValid = false;
            } else if (!validatePhone(phone)) {
                e.preventDefault();
                e.stopImmediatePropagation();
                showFieldError('#customer_phone_tf', 'Số điện thoại không hợp lệ (10-11 chữ số)');
                isValid = false;
            } else {
                // Update field with cleaned phone number
                if (cleanPhone !== phone) {
                    $('#customer_phone_tf').val(cleanPhone);
                }
                clearFieldError('#customer_phone_tf');
            }

            // Validate name
            var name = $('#customer_name_tf').val().trim();
            if (name === '') {
                e.preventDefault();
                e.stopImmediatePropagation();
                showFieldError('#customer_name_tf', 'Vui lòng nhập họ và tên');
                isValid = false;
            } else if (!validateName(name)) {
                e.preventDefault();
                e.stopImmediatePropagation();
                showFieldError('#customer_name_tf', 'Họ và tên phải có từ 2 đến 100 ký tự');
                isValid = false;
            } else {
                clearFieldError('#customer_name_tf');
            }

            if (!isValid) {
                return false;
            }

            // Populate modal BEFORE it opens (in case other code opens it)
            // Use setTimeout to ensure it runs after validation
            setTimeout(function() {
                populateBookingModal();
            }, 50);

            // Copy values to modal fields for backward compatibility with existing JS
            $('#customer_phone_tf_modal').val(phone);
            $('#customer_name_tf_modal').val(name);
        });

        // Remove validation errors on focus
        $('#customer_phone_tf').on('focus input', function() {
            clearFieldError('#customer_phone_tf');
        });

        $('#customer_name_tf').on('focus input', function() {
            clearFieldError('#customer_name_tf');
        });

        $('#startPoint_tf').on('focus input', function() {
            clearFieldError('#startPoint_tf');
        });

        $('#endPoint_tf').on('focus input', function() {
            clearFieldError('#endPoint_tf');
        });

        // Validate confirm button click
        $('#confirm_btn').on('click', function(e) {
            // Re-validate all fields before submitting
            var isValid = true;

            var startPlace = $('#startPoint_tf').val().trim();
            if (!validatePlace(startPlace)) {
                isValid = false;
                showFieldError('#startPoint_tf', 'Vui lòng nhập điểm đi (ít nhất 3 ký tự)');
            }

            var endPlace = $('#endPoint_tf').val().trim();
            if (!validatePlace(endPlace)) {
                isValid = false;
                showFieldError('#endPoint_tf', 'Vui lòng nhập điểm đến (ít nhất 3 ký tự)');
            }

            var phone = $('#customer_phone_tf').val().trim();
            var cleanPhone = phone.replace(/[^0-9]/g, '');
            if (!phone || !validatePhone(phone)) {
                isValid = false;
                showFieldError('#customer_phone_tf', 'Số điện thoại không hợp lệ (10-11 chữ số)');
            } else if (cleanPhone !== phone) {
                // Update field with cleaned phone number
                $('#customer_phone_tf').val(cleanPhone);
            }

            var name = $('#customer_name_tf').val().trim();
            if (!name || !validateName(name)) {
                isValid = false;
                showFieldError('#customer_name_tf', 'Họ và tên phải có từ 2 đến 100 ký tự');
            }

            if (!isValid) {
                e.preventDefault();
                e.stopImmediatePropagation();
                $('#bookingModal').modal('hide');
                // Scroll to first error
                $('html, body').animate({
                    scrollTop: $('.is-invalid').first().offset().top - 100
                }, 500);
                return false;
            }
        });

        // Function to populate modal_xacnhan with form data
        function populateBookingModal() {
            try {
                console.log('populateBookingModal called');

                // Get form values using both jQuery and native JS for reliability
                var phoneEl = document.getElementById('customer_phone_tf');
                var nameEl = document.getElementById('customer_name_tf');
                var startPlaceEl = document.getElementById('startPoint_tf');
                var endPlaceEl = document.getElementById('endPoint_tf');
                var numSeatsEl = document.getElementById('numseats_sf');
                var pickupTimeEl = document.getElementById('pickuptime_tif');
                var roundTripEl = document.getElementById('roundtrip_cf');
                var vatEl = document.getElementById('vat_cf');

                var phone = '';
                var name = '';
                var startPlace = '';
                var endPlace = '';
                var numSeats = '5';
                var pickupTime = '';
                var roundTrip = false;
                var vat = false;

                // Get values with fallback
                if (phoneEl) {
                    phone = phoneEl.value || '';
                } else if ($('#customer_phone_tf').length) {
                    phone = $('#customer_phone_tf').val() || '';
                }

                if (nameEl) {
                    name = nameEl.value || '';
                } else if ($('#customer_name_tf').length) {
                    name = $('#customer_name_tf').val() || '';
                }

                if (startPlaceEl) {
                    startPlace = startPlaceEl.value || '';
                } else if ($('#startPoint_tf').length) {
                    startPlace = $('#startPoint_tf').val() || '';
                }

                if (endPlaceEl) {
                    endPlace = endPlaceEl.value || '';
                } else if ($('#endPoint_tf').length) {
                    endPlace = $('#endPoint_tf').val() || '';
                }

                if (numSeatsEl) {
                    numSeats = numSeatsEl.value || '5';
                } else if ($('#numseats_sf').length) {
                    numSeats = $('#numseats_sf').val() || '5';
                }

                if (pickupTimeEl) {
                    pickupTime = pickupTimeEl.value || '';
                } else if ($('#pickuptime_tif').length) {
                    pickupTime = $('#pickuptime_tif').val() || '';
                }

                if (roundTripEl) {
                    roundTrip = roundTripEl.checked;
                } else if ($('#roundtrip_cf').length) {
                    roundTrip = $('#roundtrip_cf').is(':checked');
                }

                if (vatEl) {
                    vat = vatEl.checked;
                } else if ($('#vat_cf').length) {
                    vat = $('#vat_cf').is(':checked');
                }

                // Trim values
                phone = String(phone).trim();
                name = String(name).trim();
                startPlace = String(startPlace).trim();
                endPlace = String(endPlace).trim();
                pickupTime = String(pickupTime).trim();
                numSeats = String(numSeats).trim() || '5';

                console.log('Form values:', {
                    phone: phone,
                    name: name,
                    startPlace: startPlace,
                    endPlace: endPlace,
                    numSeats: numSeats,
                    pickupTime: pickupTime,
                    roundTrip: roundTrip,
                    vat: vat
                });

                // Map seat number to text
                var seatText = numSeats == '5' ? 'Xe 5 chỗ' : (numSeats == '7' ? 'Xe 7 chỗ' : 'Xe 5 chỗ');

                // Check if modal elements exist
                var confirmStartPlace = $('#confirm_start_place');
                var confirmEndPlace = $('#confirm_end_place');
                var confirmNumSeats = $('#confirm_num_seats');
                var confirmPickupTime = $('#confirm_pickup_time');
                var confirmPhone = $('#confirm_phone');
                var confirmName = $('#confirm_name');

                console.log('Modal elements found:', {
                    confirmStartPlace: confirmStartPlace.length,
                    confirmEndPlace: confirmEndPlace.length,
                    confirmNumSeats: confirmNumSeats.length,
                    confirmPickupTime: confirmPickupTime.length,
                    confirmPhone: confirmPhone.length,
                    confirmName: confirmName.length
                });

                // Populate confirmation modal using jQuery for reliability
                if (confirmStartPlace.length) {
                    confirmStartPlace.text(startPlace || '-');
                    console.log('Set startPlace to:', startPlace || '-');
                }
                if (confirmEndPlace.length) {
                    confirmEndPlace.text(endPlace || '-');
                    console.log('Set endPlace to:', endPlace || '-');
                }
                if (confirmNumSeats.length) {
                    confirmNumSeats.text(seatText);
                    console.log('Set numSeats to:', seatText);
                }
                if (confirmPickupTime.length) {
                    confirmPickupTime.text(pickupTime || '-');
                    console.log('Set pickupTime to:', pickupTime || '-');
                }
                if (confirmPhone.length) {
                    confirmPhone.text(phone || '-');
                    console.log('Set phone to:', phone || '-');
                }
                if (confirmName.length) {
                    confirmName.text(name || '-');
                    console.log('Set name to:', name || '-');
                }

                // Show/hide round trip and VAT rows
                if (roundTrip) {
                    $('#confirm_round_trip_row').show();
                } else {
                    $('#confirm_round_trip_row').hide();
                }
                if (vat) {
                    $('#confirm_vat_row').show();
                } else {
                    $('#confirm_vat_row').hide();
                }

                // Copy values to hidden modal fields
                $('#customer_phone_tf_modal').val(phone);
                $('#customer_name_tf_modal').val(name);

                // Hide price section
                $('#bookingModal .price-section').hide();

                console.log('populateBookingModal completed');
            } catch (e) {
                console.error('Error populating booking modal:', e);
            }
        }

        // Make function globally available
        window.populateBookingModal = populateBookingModal;

        // Set up modal_xacnhan event handlers - only once
        // Use setTimeout to ensure this runs after other scripts
        setTimeout(function() {
            if (!window.bookingModalHandlersSetup) {
                window.bookingModalHandlersSetup = true;

                // Remove any existing handlers first
                $('#bookingModal').off('show.bs.modal shown.bs.modal');
                $(document).off('show.bs.modal shown.bs.modal', '#bookingModal');

                // Add event handlers for modal_xacnhan with namespace to avoid conflicts
                $('#bookingModal').on('show.bs.modal.populate', function() {
                    populateBookingModal();
                });

                $('#bookingModal').on('shown.bs.modal.populate', function() {
                    populateBookingModal();
                });

                // Also trigger on standard events
                $('#bookingModal').on('show.bs.modal', function() {
                    console.log('show.bs.modal event triggered');
                    populateBookingModal();
                    setTimeout(function() {
                        populateBookingModal();
                    }, 50);
                    setTimeout(function() {
                        populateBookingModal();
                    }, 200);
                });

                $('#bookingModal').on('shown.bs.modal', function() {
                    console.log('shown.bs.modal event triggered');
                    populateBookingModal();
                    setTimeout(function() {
                        populateBookingModal();
                    }, 50);
                    setTimeout(function() {
                        populateBookingModal();
                    }, 200);
                    setTimeout(function() {
                        populateBookingModal();
                    }, 500);
                });

                // Use interval to continuously populate when modal is visible
                var populateInterval = null;
                $('#bookingModal').on('show.bs.modal', function() {
                    if (populateInterval) {
                        clearInterval(populateInterval);
                    }
                    populateInterval = setInterval(function() {
                        if ($('#bookingModal').hasClass('show') || $('#bookingModal').hasClass('in')) {
                            populateBookingModal();
                        } else {
                            clearInterval(populateInterval);
                            populateInterval = null;
                        }
                    }, 200);
                });

                $('#bookingModal').on('hide.bs.modal', function() {
                    if (populateInterval) {
                        clearInterval(populateInterval);
                        populateInterval = null;
                    }
                });
            }
        }, 1000);

        // Intercept AJAX errors to handle validation errors from backend
        $(document).ajaxError(function(event, xhr, settings) {
            // Only handle errors from map.php
            if (settings.url && settings.url.indexOf('map.php') !== -1) {
                if (xhr.status === 422) {
                    // Validation error
                    try {
                        var response = JSON.parse(xhr.responseText);
                        if (response.messages) {
                            var errorMessages = [];

                            // Handle validation errors
                            if (response.messages.customer_name) {
                                showFieldError('#customer_name_tf', response.messages.customer_name[0]);
                                errorMessages.push(response.messages.customer_name[0]);
                            }
                            if (response.messages.customer_phone) {
                                showFieldError('#customer_phone_tf', response.messages.customer_phone[0]);
                                errorMessages.push(response.messages.customer_phone[0]);
                            }
                            if (response.messages.start_place) {
                                showFieldError('#startPoint_tf', response.messages.start_place[0]);
                                errorMessages.push(response.messages.start_place[0]);
                            }
                            if (response.messages.end_place) {
                                showFieldError('#endPoint_tf', response.messages.end_place[0]);
                                errorMessages.push(response.messages.end_place[0]);
                            }

                            // Show error modal if there are errors
                            if (errorMessages.length > 0) {
                                $('#bookingModal').modal('hide');
                                $('#errorContentModal').html('Vui lòng kiểm tra lại thông tin:<br>' + errorMessages.join('<br>'));
                                $('#errorModal').modal('show');

                                // Scroll to first error
                                setTimeout(function() {
                                    $('html, body').animate({
                                        scrollTop: $('.is-invalid').first().offset().top - 100
                                    }, 500);
                                }, 300);
                            }
                        } else if (response.error) {
                            $('#errorContentModal').html(response.error);
                            $('#errorModal').modal('show');
                        }
                    } catch (e) {
                        console.error('Error parsing validation response:', e);
                    }
                }
            }
        });
    }
</script>
