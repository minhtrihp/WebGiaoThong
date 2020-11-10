@extends("layouts.main")

@section('content')
<div class="main-content">
		<div class="col-md-9 total-news" style="margin-top: 15px;">
			 <form role ="search" method="get" id="searchform" action="{{route('search')}}">
					<input type="text" class="form-control" value="" name="key" id="s" placeholder="Tìm kiếm..." style=" width: 38%; padding:5px 3px 5px 13px; margin: 8px 16px 0px 0px; border: 1px solid black; font-size: 17px; float: right;" />
					<button type="submit" class="btn btn-link search-btn" style="position: absolute; right: 30px; top: 5px;  color: #aaa;  border-radius: 3px;  font-size: 21px;  padding: 5px 10px 1px;  -webkit-transition: all 200ms ease-in-out;  -moz-transition: all 200ms ease-in-out;  transition: all 200ms ease-in-out;">
							<i class=" fas fa-search" style="color: darkred;"></i> </button>
				</form>
				<div class="posts">
						<div class="latest-articles" style="margin-bottom:50px; font-size:16px; font-family: Times News Roman; margin-top: 0px;">
								<div class="main-title-head" >
									<h3 style="margin-top: 13px;"><strong style="color:black; font-size: 23.5px;">TIN TỨC GIAO THÔNG TRONG NƯỚC</strong></h3>
									<div class="clearfix"></div>
								</div>

								@foreach($newss as $ns)
								<div class="grids">
									<div class="grid box">
										<div class="grid-header">
											<a class="gotosingle" href="{{$ns->contents}}">
												<p style="text-transform: capitalize; margin-left:10px; color:darkred;font-size: 22px;"><strong>{{$ns->name}} </strong></p>
											</a>
											<ul>
												<span style="color:gray !important; margin-left:10px"><i style="color: black;">{!! $ns->date !!}</i></span>
											</ul>
										</div>
										<div class="grid-img-content">
											<a href="{{$ns->contents}}">
												<img width="350px" src="/WebGiaoThong/public/getnews/{{$ns->picture}}" /></a>
											<p style="padding-left:370px; text-align:justify; font-size:22px; font-family: Times News Roman">
												<strong>{!! $ns->description !!}</strong></p>
											<div class="clearfix"> </div>
										</div>
										<div class="comments" style="padding-bottom:50px">
											<ul>
												<li>
													<a class="readmore" style="font-size:18px; font-family: Times News Roman" href="{{$ns->contents}}">
														<strong>Read More</strong>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								@endforeach
								<div style="float: right; margin: 30px 50px 0 0;">
                 {{ $newss->links() }}
                </div>
							</div>
						</div>
				</div>

				<div class="col-md-3 side-bar" style="margin-top:50px">
						<div class="clearfix"></div>
						<div class="subscribe-now">
						<a href="#">
								<div class="discount">
										<div class="save">
												<p>Save</p>
												<p>up to</p>
										</div>
										<div class="percent">
												<h2>50%</h2>
										</div>
										<div class="clearfix"></div>
								</div>
								<h3 class="sn">Subscribe     Now</h3>
						</a>
					</div>
						<div class="subscribe-now">
						<a href="#">
								<div class="discount">
										<div class="save">
												<p>Save</p>
												<p>up to</p>
										</div>
										<div class="percent">
												<h2>50%</h2>
										</div>
										<div class="clearfix"></div>
								</div>
								<h3 class="sn">Subscribe     Now</h3>
						</a>
					</div>
						<div class="subscribe-now">
						<a href="#">
								<div class="discount">
										<div class="save">
												<p>Save</p>
												<p>up to</p>
										</div>
										<div class="percent">
												<h2>50%</h2>
										</div>
										<div class="clearfix"></div>
								</div>
								<h3 class="sn">Subscribe     Now</h3>
						</a>
					</div>
						<div class="clearfix"></div>
				</div>

				<div class="clearfix"></div>
				<div class="clearfix"></div>
</div>

@endsection
