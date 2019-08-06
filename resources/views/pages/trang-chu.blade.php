@extends('master-layout')
@section('content')

<link rel="stylesheet" type="text/css" href="css/home.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript" src="js/home.js"></script>
<script src="https://kit.fontawesome.com/40e36cd30a.js"></script>

<section class="home-wrap">
	<div class="h-banner">
		<div class="h-banner-top">
			<div class="h-banner-top-black"></div>
			<div class="h-banner-top-text">
				<div>Mr Coach - Trần Hồng Hải</div>
				<div>Giám đốc đào tạo S-Coach</div>
			</div>
		</div>
		<div class="h-banner-bottom">
			<div class="h-banner-bottom-connect">
				Kết nối với Mr Coach
			</div>
			<div class="h-banner-bottom-text">
				<div>
					<a href="">
						<div class="h-banner-bottom-text-member">
							<div>
								<i class="fas fa-envelope"></i>
							</div>
							<div>
								<span class="h-banner-bottom-text-member-number">50.688</span>
								<br>Subscribers
							</div>
						</div>
					</a>
				</div>
				<div>
					<a href="">
						<div class="h-banner-bottom-text-member">
							<div>
								<i class="fab fa-facebook-f"></i>
							</div>
							<div>
								<span class="h-banner-bottom-text-member-number">6.799</span>
								<br>Fans
							</div>
						</div>
					</a>
				</div>
				<div>
					<a href="">
						<div class="h-banner-bottom-text-member">
							<div>
								<i class="fab fa-google-plus-g"></i>
							</div>
							<div>
								<span class="h-banner-bottom-text-member-number">539</span>
								<br>Followers
							</div>
						</div>
					</a>
				</div>
				<div>
					<a href="">
						<div class="h-banner-bottom-text-member">
							<div>
								<i class="fab fa-youtube"></i>
							</div>
							<div>
								<span class="h-banner-bottom-text-member-number">2,603</span>
								<br>Viewers
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="h-category">
		<div class="container">
			<div class="h-category-title">
				Bạn muốn cải thiện lại gì?
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 text-center offset-md-2">
					<div class="h-category-member">
						<div class="h-category-member-img">
							<img src="images/icon-personal.jpg">
						</div>
						<div class="h-category-member-title text-center">
							Tư duy làm giàu
						</div>
						<div class="h-category-member-content text-center">
							Công thức tạo dựng Thành công bền vững và cuộc sống Hạnh phúc viên mãn
						</div>
						<div class="h-category-member-more">
							<a href="" class="btn btn-warning">Tìm hiểu thêm</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 text-center">
					<div class="h-category-member">
						<div class="h-category-member-img">
							<img src="images/icon-sales.jpg">
						</div>
						<div class="h-category-member-title text-center">
							Kỹ năng bán hàng
						</div>
						<div class="h-category-member-content text-center">
							Công thức đơn giản để bán bất kỳ sản phẩm nào với bất kỳ giá nào bạn muốn
						</div>
						<div class="h-category-member-more">
							<a href="" class="btn btn-warning">Tìm hiểu thêm</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 text-center">
					<div class="h-category-member">
						<div class="h-category-member-img">
							<img src="images/icon-business.jpg">
						</div>
						<div class="h-category-member-title text-center">
							Phát triển kinh doanh
						</div>
						<div class="h-category-member-content text-center">
							Sở hữu công ty Triệu đô từ con số 0
						</div>
						<div class="h-category-member-more">
							<a href="" class="btn btn-warning">Tìm hiểu thêm</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 text-center">
					<div class="h-category-member">
						<div class="h-category-member-img">
							<img src="images/icon-leadership.jpg">
						</div>
						<div class="h-category-member-title text-center">
							Kỹ năng lãnh đạo
						</div>
						<div class="h-category-member-content text-center">
							Công thức để dẫn dắt những người xuất chúng hơn bạn
						</div>
						<div class="h-category-member-more">
							<a href="" class="btn btn-warning">Tìm hiểu thêm</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 text-center">
					<div class="h-category-member">
						<div class="h-category-member-img">
							<img src="images/icon-speaking.jpg">
						</div>
						<div class="h-category-member-title text-center">
							Thuyết trình trên sân khấu
						</div>
						<div class="h-category-member-content text-center">
							Làm chủ sân khấu ngay từ giây đầu tiên bạn xuất hiện
						</div>
						<div class="h-category-member-more">
							<a href="" class="btn btn-warning">Tìm hiểu thêm</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="h-blog">
		<div class="container">
			<div class="h-blog-title text-center">
				Bài viết gần đây
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="h-blog-member">
						<a href="">
							<div>
								<div class="h-blog-member-img">
									<img src="images/ông-tôi-2.jpg" class="img-fluid">
								</div>
								<div class="h-blog-member-content">
									Ông tôi kể chuyện rất hay (P.2): Nhớ mãi kỉ niệm cháu dẫn bạn gái về ‘ra mắt’ ông
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="h-blog-member">
						<a href="">
							<div>
								<div class="h-blog-member-img">
									<img src="images/ông-tôi-2.jpg" class="img-fluid">
								</div>
								<div class="h-blog-member-content">
									Ông tôi kể chuyện rất hay (P.3): Nhớ mãi kỉ niệm cháu dẫn bạn gái về ‘ra mắt’ ông
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="h-blog-member">
						<a href="">
							<div>
								<div class="h-blog-member-img">
									<img src="images/1-12.jpg" class="img-fluid">
								</div>
								<div class="h-blog-member-content">
									Làm quản lý đừng ngại khắt khe, bởi đó chính là liều thuốc để “nhào nặn” nên nhân viên giỏi
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="h-blog-member">
						<a href="">
							<div>
								<div class="h-blog-member-img">
									<img src="images/sau-tuoi-40.jpg" class="img-fluid">
								</div>
								<div class="h-blog-member-content">
									Sau tuổi 40 có những việc không thể làm và những điều không được đợi
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="h-blog-more text-center">
				<a href="">Xem các bài viết khác</a>
			</div>
		</div>
	</div>
	<div class="h-sign-in">
		<div class="container">
			<div class="h-sign-in-title">
				Nhận những chia sẻ hay từ MrCoach - Trần Hồng Hải
			</div>
			<div class="h-sign-in-form">
				<form>
					<div class="row">
						<div class="col-md-4">
							<input type="text" placeholder="Tên của bạn">
						</div>
						<div class="col-md-4">
							<input type="email" placeholder="Email bạn hay sử dụng">
						</div>
						<div class="col-md-4">
							<button class="btn btn-warning">Tham gia cùng 50.688 người</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="h-about">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="h-about-youtube">
						<iframe style="max-width: 511px; width: 100%; height: 290px;" src="https://www.youtube.com/embed/T_QX6HMLYrs" frameborder="0" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="col-md-6">
					<div class="h-about-content">
						<div>Về Trần Hồng Hải</div>
						<div>Doanh nhân, chuyên gia huấn luyện phát triển cá nhân.</div>
						<div>Mr Coach – Trần Hồng Hải hiện là Giám đốc đào tạo S-Coach, tổ chức đào tạo hàng đầu về Phát triển cá nhân, Kinh doanh, hỗ trợ kỹ năng cho doanh nghiệp. Mục tiêu của doanh nhân – diễn giả Phạm Ngọc Anh là xây dựng cộng đồng 50.000 doanh nhân thế hệ mới để góp phần định vị lại Việt Nam trên bản đồ kinh tế thế giới vào năm 2020. Với kinh nghiệm 15 năm giảng dạy trong lĩnh vực đào tạo, diễn giả Phạm Ngọc Anh mong muốn truyền đạt những bài học, kiến thức giúp các học viên khám phá sức mạnh tiềm ẩn của bản thân và tự tin phát triển sự nghiệp của mình.</div>
						<div>
							<a href="" class="btn btn-warning">Đọc tiếp</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="h-speak">
		<div class="container">
			<div class="h-speak-title">
				Đào tạo - Huấn luyện
			</div>
			<div class="h-speak-about text-white">
				Mr Coach – Trần Hồng Hải là một trong những doanh nhân – diễn giả hàng đầu tại Việt Nam với 15 năm kinh nghiệm trong lĩnh vực Đào tạo phát triển cá nhân.
			</div>
			<div class="h-speak-ul">
				<ul>
					<li>
						<a href="">Trực tiếp huấn luyện hơn 15.000 người với các chủ đề như Khởi nghiệp, Làm giàu, Bán hàng, Nghệ thuật lãnh đạo, Kỹ năng huấn luyện và Nói trước công chúng…</a>
					</li>
					<li>
						<a href="">Cố vấn chuyên môn về phương pháp đào tạo cho bộ Giáo dục và Đào tạo.</a>
					</li>
					<li>
						<a href="">Cố vấn đào tạo phát triển cá nhân cho các tập đoàn (Vingroup, HD bank, Bảo hiểm bưu điện,vv...)</a>
					</li>
					<li>
						<a href="">Cố vấn cấp cao về Bán hàng – Marketing cho nhiều tổ chức, doanh nghiệp vừa và nhỏ.</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="h-feel">
		<div class="container">
			<div class="h-feel-title">
				Cảm nhận của những học viên
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="h-feel-member">
						<div>
							<img src="images/nguyenhonghai.jpg" class="rounded-circle">
						</div>
						<div>
							Cảm ơn thầy Hồng Hải và cộng sự. Nhờ khóa học của thầy tôi thấy quý hơn bản thân mình, quý hơn cuộc sống này, quý hơn từng đồng tiền tôi kiếm được. Tôi hiểu được sâu sắc giá trị của việc cho và nhận, hiểu được hơn tiếng nói nhỏ trong đầu mình. Tôi cũng biết cách quản lý tiền bạc, biết cách điều tiết cảm xúc của mình tốt hơn.
							<br><i>Trương Hoài Nam</i>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="h-feel-member">
						<div>
							<img src="images/nguyenhonghai.jpg" class="rounded-circle">
						</div>
						<div>
							Xin cảm ơn thầy Hồng Hải đã giúp mình hiểu được cách để đạt được tự do tài chính! Mình đã có 1 cái nhìn rõ ràng hơn và chắc chắn sẽ đem kiến thức được học để áp dụng và chia sẻ với những người thân xung quanh! Được gặp anh Hồng Hải cũng là 1 vinh hạnh với mình, một người đầy nhiệt tình, nhiệt huyết, tạo cảm hứng và thổi lửa cho anh em! Chân thành cám ơn!
							<br><i>Nguyễn Hồng Hải</i>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="h-feel-member">
						<div>
							<img src="images/nguyenthithuyvinh.png" class="rounded-circle">
						</div>
						<div>
							Cảm nhận của tôi về anh Hồng Hải gói gọn trọng mấy chữ ngắn gọn thôi: RẤT THỰC TẾ, RẤT Ý NGHĨA. QUAN TRỌNG NHẤT LÀ DỄ HIỂU – ÁP DỤNG ĐƯỢC NGAY VÀO CUỘC SỐNG HÀNG NGÀY. VÀ TÔI THÍCH CÁI CHẤT “BỤI – HÀI HƯỚC – ĐỜI THƯỜNG” TRONG CÁCH CHIA SẺ CỦA THẦY. Tôi sẽ tiếp tục có mặt ở các khóa học của anh Hồng Hải.
							<br><i>Nguyễn Thúy Vinh</i>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="h-feel-member">
						<div>
							<img src="images/nguyenluong.jpg" class="rounded-circle">
						</div>
						<div>
							Cám ơn anh Hồng Hải đã cho em những bài học tuyệt vời, em cũng đang từng bước áp dụng những thứ học được từ anh vào cuộc sống. Những khóa học thật sự bổ ích, em mong là sẽ được học tất cả những khóa học mà anh đào tạo trong thời gian tới.
							<br><i>Nguyễn Lương</i>
						</div>
					</div>
				</div>
			</div>
			<div class="h-feel-more">
				<a href="">Xem thêm mọi người nói gì về Mr Coach</a>
			</div>
		</div>
	</div>
</section>

@endsection
