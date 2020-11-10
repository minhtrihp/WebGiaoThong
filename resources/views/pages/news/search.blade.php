@extends("layouts.main")

@section('content')
	<div class="main-content">
		<div class="main-title-head" >
			<h3 style="margin-top: 13px;"><strong style="color:black; font-size: 23.5px;">TIN TỨC GIAO THÔNG TRONG NƯỚC</strong></h3>
			<div class="clearfix"></div>
		</div>

 		@foreach($news as $ns)
    <div class="grids">
      <div class="grid box">
					<div class="grid-header">
						<a class="gotosingle" href="{{$ns->contents}}">
							<p style="text-transform: capitalize; margin-left:10px; color:darkred;font-size: 22px;"><strong>{{$ns->name}} </strong></p>
						</a>
						<ul>
							<span style="color:gray !important; margin-left:10px"><i style="color: black;">
								{!! $ns->date !!}</i>
							</span>
						</ul>
					</div>
				<div class="grid-img-content">
						<a href="{{$ns->contents}}">
							<img width="350px" src="/WebGiaoThong/public/getnews/{{$ns->picture}}" />\
						</a>
						<p style="padding-left:370px; padding-right:30px; text-align:justify; font-size:22px; font-family: Times News Roman">
												<strong>{!! $ns->description !!}</strong>
						</p>
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
	</div>
@endsection
