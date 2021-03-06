@extends('master')
@section('content')
<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<div class="bannercontainer" >
			<div class="banner" >
				<ul>
					@foreach($slide as $sl)
					<!-- THE FIRST SLIDE -->
						<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
							<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
								<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl -> image}}" data-src="source/image/slide/{{$sl -> image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl -> image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
								</div>
							</div>
						</li>
					@endforeach				
				</ul>				
			</div>

			<div class="tp-bannertimer"></div>
		</div>
	</div>
</div>
<div class="container" style="margin: auto">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space20">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<h4>Sản phẩm mới</h4>
						<div class="beta-products-details">
							{{-- <p class="pull-left">Tìm thấy {{count($new_product)}} sản phẩm</p> --}}
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($new_product as $new)
								<div class="col-sm-3">
									<div class="single-item">
										@if($new -> promotion_price != 0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{route('product-details', $new -> id)}}"><img src="source/image/product/{{$new -> image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<a class="single-item-title" href="{{route('product-details', $new -> id)}}">{{$new -> name}}</a>
											<p class="single-item-price" style="font-size: 15px">
												@if($new -> promotion_price == 0)
													<span class="flash-sale">{{number_format($new -> unit_price, 0, ',', '.')}} &#x20ab;</span>
												@else
													<span class="flash-del">{{number_format($new -> unit_price, 0, ',', '.')}} &#x20ab;</span>
													<span class="flash-sale">{{number_format($new -> promotion_price, 0, ',', '.')}} &#x20ab;</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('add-to-cart', $new -> id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('product-details', $new -> id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
										<div class="space20">&nbsp;</div>										
									</div>
								</div>
							@endforeach	
						</div>						
						<div class="row">{{$new_product -> links()}}</div>
					</div> <!-- .beta-products-list -->

					<div class="space20">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm khuyến mãi</h4>
						<div class="beta-products-details">
							{{-- <p class="pull-left">Tìm thấy {{count($top_product)}} sản phẩm</p> --}}
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($top_product as $top)
								<div class="col-sm-3">
									<div class="single-item">
										@if($top -> promotion_price != 0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
											<div class="single-item-header">
												<a href="{{route('product-details', $top -> id)}}"><img src="source/image/product/{{$top -> image}}" alt="" height="250px"></a>
											</div>
											<div class="single-item-body">
												<a class="single-item-title" href="{{route('product-details', $top -> id)}}">{{$top -> name}}</a>
												<p class="single-item-price" style="font-size: 15px">
													<span class="flash-del">{{number_format($top -> unit_price, 0, ',', '.')}} &#x20ab;</span>
													<span class="flash-sale">{{number_format($top -> promotion_price, 0, ',', '.')}} &#x20ab;</span>
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="{{route('add-to-cart', $top -> id)}}"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="{{route('product-details', $top -> id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
											<div class="space20">&nbsp;</div>
										@endif
									</div>
								</div>
							@endforeach
						</div>
						<div class="row">{{$top_product -> links()}}</div>				
					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->
		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!--slider-->
@endsection

