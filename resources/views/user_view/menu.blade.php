<span class="menu"></span>
			<div class="menu-strip">
					<ul style="width: 100%; margin: 0; padding: 0; display: table">
                    <li style="display: table-cell; text-align: center">
                        <a href="/WebGiaoThong/public">Trang Chủ</a>
                    </li>
                    <li style="display: table-cell; text-align: center">
                        <a href="/WebGiaoThong/public/pages/news/news">Tin Tức Giao Thông</a>
                    </li>
					<li style="display: table-cell; text-align: center">
                        <a href="/WebGiaoThong/public/multiplechoice">Thi Thử Bằng Lái</a>
                    </li>
					<li style="display: table-cell; text-align: center">
                        <a href="/WebGiaoThong/public/pages/maps">Bản Đồ Thành Phố</a>
                    </li>
                    </li>
                    @if (Auth::check() && Auth::user()->level == '1')
                    <li style="display: table-cell; text-align: center">
                        <a href="/WebGiaoThong/public/admin/">Đến trang quản trị</a>
                    </li>
                    @endif
					 </ul>
			</div>
<div class="clearfix"></div>
