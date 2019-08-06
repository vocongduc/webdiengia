@extends('master-layout')
	@section('content')

    <!-- Qùa Tặng -->
    <div id="quaTang">
        <div class="container">
            <h2>EBOOK LẬP MỤC TIÊU</h2>
            <h3 style="color: red">12 nguyên tắc vàng để hiện thực hóa THÀNH CÔNG & SỰ GIÀU CÓ</h3>
            <div class="row">
            <div class="col-md-3">
                <img src="http://phamngocanh.com/wp-content/uploads/2017/03/lapmuctieu.png" height="300px">
            </div>
            <div class="col-md-9">
                <div class="content">
                <p>Nhiều người cứ hỏi tại sao mà tôi chẳng thể thành công hay đạt được những gì mình mong muốn, mặc dù đã rất cố gắng, kiên trì... Câu trả lời không khó là bạn chưa có một kế hoạch mô tả Mục tiêu hành động cụ thể, mọi thứ chung chung, không rõ ràng khiến bạn không biết làm gì đi hết con đường.</p>
                <p>Trong mỗi chúng ta hiểu rằng cần có rất nhiều mục tiêu trong cuộc sống đôi lúc hoàn thành việc đó thật khó khăn và...</p>
                <p>Ebook <strong>"LẬP MỤC TIÊU - 12 nguyên tắc vàng để hiện thực hóa thành công & sự giàu có"</strong> sẽ là món quà hữu ích mà chúng tôi muốn dành cho bạn để đạt được những mục tiêu đó.</p>
                <h5>BẠN SẼ NGẠC NHIÊN KHÁM PHÁ:</h5>
                <ul>
                    <li>Khám phá 12 bước cực kỳ đơn giản và hiệu quả đã được chứng minh bởi hàng triệu người đã đạt được Mục tiêu của họ</li>
                    <li>Làm thế nào để hoàn thành <strong>“Danh sách đầu việc”</strong> mỗi ngày theo cách hiệu quả nhất</li>
                    <li>Trải nghiệm kỹ thuật <strong>“Đạt mục tiêu ngay từ khi thiết lập”</strong> hiệu quả đến kinh ngạc…</li>
                </ul>
                </div>
                <form class="form-inline" action="/action_page.php">
                <input type="name" class="form-control form-control-sm" id="name" placeholder="Họ tên">&nbsp; 
                <input type="email" class="form-control form-control-sm" id="email" placeholder="Địa chỉ email">&nbsp;
                
                <button type="submit" class="btn btn-success btn-sm">Gửi cho tôi</button>
                </form>
            </div>
            </div>
        </div>
    </div>

	@endsection