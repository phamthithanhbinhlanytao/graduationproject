@extends('admin_layout')
@section('admin_content')
<h3>Chào mừng bạn đến với Admin</h3>
<div class="col-xs-12 col-md-4 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$slhang}}</div>
							<div class="text-muted">Số lượng hàng đã bán</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{number_format($tthang,0,',','.')}}</div>
							<div class="text-muted">Tổng tiền hàng đã bán</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$tdh}}</div>
							<div class="text-muted">Sản phẩm có trên website</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$th}}</div>
							<div class="text-muted">Thương  hiệu sản phẩm</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$sldh}}</div>
							<div class="text-muted">Khách đã hoàn thành đơn hàng</div>
						</div>
					</div>
				</div>
			</div>
@endsection