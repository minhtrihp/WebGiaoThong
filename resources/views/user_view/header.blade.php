<div class="header">
		<div class="header-left">
					<div class="logo" style="margin-left: 30px; font-size: 18px">
							<a href="">
									<strong><h1>Giao Thông <span>VIỆT NAM</span></h1></strong>
							</a>
					</div>
		</div>
		<div class="clearfix"></div>
		<div class="header-right">
			<div class="top-menu" style="margin-left: 350px; font-size: 16px">
					<ul>
						@guest
              <li>
								<a id="modal_trigger" href="{{ route('login') }}" class="btn1">Đăng Nhập</a>
							</li> |
							@if (Route::has('register'))
									<li><a id="modal_trigger" href="{{ route('register') }}" class="btn1">Đăng Ký</a></li>
							@endif
						@else
								<li class="nav-item dropdown">
										<a id="modal_trigger" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
												Chào,  <a style="color: blue; text-transform: uppercase; ">{{ Auth::user()->name }}</a>
										</a>
								</li> |

								<li>
										<a id="modal_trigger" href="{{ route('logout') }}" onclick="event.preventDefault();
																				 document.getElementById('logout-form').submit();">
														{{ __('Đăng xuất') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
										</form>
								</li>
						@endguest
					</ul>
      </div>
		</div>
		<div class="clearfix"></div>
</div>