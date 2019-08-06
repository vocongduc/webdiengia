
	@extends('master-layout')
	@section('content')

    <!-- Liên Hệ -->
    <div id="lienHe">
        <div class="container">
            <div class="row">
            <div class="col-md-8">
                <h2>LIÊN HỆ</h2>
                <p>Để lại thông tin bên dưới để gửi liên hệ tới Mr Why – Phạm Ngọc Anh</p>
                <form action="/action_page.php">
                <div class="form-group">
                    <label for="name">Họ tên</label>
                    <input type="name" class="form-control" id="name" placeholder="Họ tên *">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email *">
                </div>
                <div class="form-group">
                    <label for="comment">Nội dung</label>
                    <textarea class="form-control" rows="5" id="comment" placeholder="Nội dung liên hệ"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">Gửi</button>
                </form>
            </div>
            <div class="col-md-4">
                <div class="panel">
                <ul class="list-group">
                    <li class="list-group-item"></li>
                    <li class="list-group-item">
                    <img src="https://2.bp.blogspot.com/-vAphBVsJieE/XQtAlavdXKI/AAAAAAAAGks/oCJqTc3mz6cxtNjSN53gMunwHTN56PccACLcBGAs/s1600/Banner-right.jpg" width="100%" height="297px">
                    </li>
                </ul>
                </div>
            
                <div class="panel">
                <ul class="list-group">
                    <li class="list-group-item">DANH MỤC</li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Phát triển cá nhân<a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Bài học cuộc sống<a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Kiến thức kinh doanh<a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Gương thành công<a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Chia sẻ cuối tuần<a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Video<a></li>
                </ul>
                </div>
            
                <div class="panel">
                <ul class="list-group">
                    <li class="list-group-item">NỔI BẬT</li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Làm quản lý đừng ngại khắt khe, bởi đó chính là liều thuốc để “nhào nặn” nên nhân viên giỏi</a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Vợ, chính là sự đầu tư khôn ngoan và tốt nhất của người đàn ông</a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Khi gặp chuyện khó khăn, hãy nhớ những điều sau đây</a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Ông tôi kể chuyện rất hay (P.1): Bất kể xã hội thế nào vẫn phải sống thật thà, đó mới là khôn ngoan thực sự</a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">3 bức ảnh phản ánh chân thực nhất cuộc sống của đa số đàn ông: Càng khó khăn, chúng ta càng cần phải phấn đấu</a></li>
                </ul>
                </div>

                <div class="panel">
                <ul class="list-group">
                    <li class="list-group-item">BÀI VIẾT MỚI</li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Ông tôi kể chuyện rất hay (P.3): Nhớ mãi kỉ niệm cháu dẫn bạn gái về ‘ra mắt’ ông</a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Ông tôi kể chuyện rất hay (P.2): Ma chay, cưới hỏi nếp cũ làng quê bây giờ khác lắm…</a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Làm quản lý đừng ngại khắt khe, bởi đó chính là liều thuốc để “nhào nặn” nên nhân viên giỏi</a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Sau tuổi 40 có những việc không thể làm và những điều không được đợi</a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Sếp nhắn nhân viên làm mãi vẫn không được thăng tiến: Hãy trở thành “tinh phẩm” trước khi giở trò khôn lỏi và phải nhận lời chia buồn từ đồng nghiệp</a></li>
                </ul>
                </div>

                <div class="panel">
                <ul class="list-group">
                    <li class="list-group-item">VIDEO</li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Đôi khi trong cuộc sống…</a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">
                    <img src="http://phamngocanh.com/wp-content/uploads/2014/01/maxresdefault1.jpg" height="170px"></a>
                    </li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Khóa học NGHĨ GIÀU LÀM GIÀU</a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">
                    <img src="http://phamngocanh.com/wp-content/uploads/2014/05/maxresdefault.jpg" height="170px"></a>
                    </li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Khởi Nghiệp Với Số Vốn 0 Đồng</a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">
                    <img src="http://phamngocanh.com/wp-content/uploads/2016/03/khoi-nghiep-voi-0-dong.jpg" height="158px"></a>
                    </li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Gia đình là số 1</a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">
                    <img src="http://phamngocanh.com/wp-content/uploads/2015/04/gia-dinh-hanh-phucn.jpg" height="230px"></a>
                    </li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">Ý tưởng và hiện thực ý tưởng kinh doanh</a></li>
                    <li class="list-group-item"><a href="{{ route('bai-viet') }}">
                    <img src="http://phamngocanh.com/wp-content/uploads/2016/03/mot-y-tuong-kinh-doanh.jpg" height="160px" ></a>
                    </li>
                </ul>
                </div>

            </div>
            </div>
        </div>
    </div>
	@endsection