@extends('admin.layout.index')

@section('content')
<script src="admin_asset/dist/js/extra.js"></script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
				<h1>Chào {{ Auth::user()->name }}</h1>
				<div class="col-md-6">
					<div class="panel panel-default calen">
	                    <div class="panel-heading">
	                        <strong style="font-size: 20px;">Lịch</strong>
	                   	</div>
	                    <div class="panel-body">
	                        <p>Hôm nay là: {{ getWeekDay() }}, Ngày {{ date('d/m/Y') }}.</p>
	                        <p>Thời gian hiện tại: <span id="timestamp"></span></p>
	                    </div>
	                </div>
				</div>

				<div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>
@endsection

