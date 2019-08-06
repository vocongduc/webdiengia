	<header class="header container-fluid">

	</header>

	<nav class="nav-horizontal container-fluid">
		<div class="nav-horizontal-container container">

			<div class="nav-horizontal-content d-flex justify-content-between">
                <div class="logo" >
                    <img style="width : 60px ; height : 60px ; object-fit : contain ; border : 3px solid white ;
                    border-radius : 10px; width : 100px;
                    " src="images/logo.png" alt="">
                    {{--  <span>Trần Hồng Hải</span>  --}}
                </div>
				<ul class="nav-ul-lv-1">
                        <li><a href="{{ url('/') }}">Trang chủ</a></li>
                        <li>
							<a href="{{ url('gioi-thieu') }}">Giới thiệu</a>

                        </li>
                       <li>
							<a href="{{ url('blog') }}">Blog<i class="fas fa-plus"></i></a>
							<ul class="nav-ul-lv-2">
								<li>
									<a href="{{ url('bai_hoc_cuoc_song') }}">Phát triển cá nhân</a>
									<a href="{{ url('chia_se_cuoi_tuan') }}">Kiến thức kinh doanh</a>
								</li>
							</ul>
                        </li>
                        <li class="lienhe-led"><a href="{{ url('e-magazine') }}">E-magazine</a></li>
                        <li class="lienhe-led"><a href="{{ url('chuyengiadaotao') }}">Khóa học<i class="fas fa-plus"></i></a>
                            <ul class="nav-ul-lv-2">
								<li>
									<a href="{{ url('chuyengiadaotao') }}">Khóa học đào tạo</a>
                                    <a href="{{ url('banhang') }}">Khóa học bán hàng</a>
                                    <a href="{{ url('kinhdoanh') }}">Phát triển bản thân</a>
								</li>
							</ul>
                        </li>
                        <li class="lienhe-led"><a href="{{ route('lien-he') }}">liên hệ</a></li>
                        <li class="lienhe-led"><a href="{{ route('qua-tang') }}">Quà tặng</a></li>
					</ul>
				<div class="menu-mobile-button"><i class="fas fa-bars"></i></div>
			</div>
		</div>
	</nav>
	<script type="text/javascript" src="js/nav-horizontal.js"></script>

	<section class="menu-mobile">
		<div class="menu-mobile-bg"></div>
		<div class="menu-mobile-box">
			<div class="menu-mobile-info">

			</div>
			<div class="menu-mobile-content">
				<div class="menu-left">
					<div class="menu-left-title"><h3>Menu</h3></div>
					<div class="menu-left-content">

						<ul class="menu-left-ul-lv-1">
                        <li><a href="{{ url('/') }}">Trang chủ</a></li>
                        <li><a href="{{ url('gioi-thieu') }}">Giới thiệu</a></li>
                        <li>
							<a href="{{ url('blog') }}">Blog</a>
							<i class="fas fa-plus"></i>
							<ul class="menu-left-ul-lv-child">
								<li><a href="{{ url('bai_hoc_cuoc_song') }}">Bài học cuộc sống</a></li>
								<li><a href="{{ url('chia_se_cuoi_tuan') }}">Chia sẻ cuối tuần</a></li>
								<li><a href="{{ url('guong_thanh_cong') }}">Gương thành công</a></li>
							</ul>
                        </li>
                        <li><a href="{{ url('e-magazine') }}">E-Magazine</a>

                        </li>
                        <li><a href="{{ url('wakeup') }}">Khóa Học</a>
                            <i class="fas fa-plus"></i>
							<ul class="menu-left-ul-lv-child">
								<li><a href="{{ url('chuyengiadaotao') }}">Đào tạo</a></li>
								<li><a href="{{ url('banhang') }}">Bán hàng</a></li>
								<li><a href="{{ url('kinhdoanh') }}">Kinh doanh</a></li>
							</ul></li>
                        <li><a href="{{ route('lien-he') }}">liên hệ</a></li>
                        <li><a href="{{ route('qua-tang') }}">Quà tặng</a></li>

					</ul>

					</div> <!-- menu-left-content -->
				</div> <!-- menu-left -->
				<script type="text/javascript" src="js/menu-left-js.js"></script>
			</div>
		</div>
		<script type="text/javascript" src="js/menu-mobile.js"></script>
	</section>

