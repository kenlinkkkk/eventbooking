<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="{{ asset('assets/css/main.cba69814a806ecc7945a.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link href="{{ asset('assets/css/ficon.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/icon-picker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar fixed-footer">
    <!-- header -->
    @include('admin.layout.header');
    <!-- end header -->
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow bg-dark sidebar-text-light">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
									<span class="hamburger-box">
										<span class="hamburger-inner"></span>
									</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
					<span>
						<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
							<span class="btn-icon-wrapper">
								<i class="fa fa-ellipsis-v fa-w-6"></i>
							</span>
						</button>
					</span>
            </div>
            <!-- sidebar -->
        @include('admin.layout.nav');
        <!-- end sidebar -->
        </div>

        <div class="app-main__outer">
            <div class="app-main__inner">
                @yield('content')
            </div>
            <div class="app-wrapper-footer">
                @include('admin.layout.footer')
            </div>
        </div>
    </div>
</div>

<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script	src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('assets/scripts/main.cba69814a806ecc7945a.js') }}"></script>
<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script src="{{ asset('assets/scripts/iconPicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/scripts/js.js') }}"></script>
<script src="{{ asset('assets/ckeditor5/ckeditor.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script>
    @if (session('success'))
    swal('{{ session('success') }}', '', 'success');
    @endif
    @if (session('error'))
    swal('{{ session('error') }}', '', 'error');
    @endif
    function numberWithCommas(number) {
        let parts = number.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        return parts.join(".");
    }
</script>
@yield('script')
</body>
</html>
