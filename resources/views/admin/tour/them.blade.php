@extends('admin.layout.index')

@section('content')
<script src="admin_asset/dist/js/extra.js"></script>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tour 360
                            <small>> Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    <strong>{{$err}}</strong><br>
                                @endforeach
                            </div>
                        @endif
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                <strong>{{session('error')}}</strong>
                            </div>
                        @endif

                        @if(session('message'))
                            <div class="alert alert-success">
                                <strong>{{session('message')}}</strong>
                            </div>
                        @endif
                        <form action="admin/tour/them" method="POST" enctype="multipart/form-data"> <!-- Form bắt buộc phải có thuộc tính enctype thì mới up được file lên -->
                            {{ csrf_field() }}
    <!-- language : viet nam  -->
                                <div class="form-group">
                                    <p><label>Tên dự án</label></p>
                                    <input type="text" class="form-control input-width" name="name_project" placeholder="Nhập tên dự án" value="{{ old('name_project') }}" />
                                </div>

                                <div class="form-group">
                                    <p><label>Tên chủ đầu tư</label></p>
                                    <input type="text" class="form-control input-width" name="name_investor" placeholder="Nhập tên chủ đầu tư" value="{{ old('name_investor') }}" />
                                </div>
                                <div class="form-group">
                                    <p><label>Link 360</label></p>
                                    <input type="text" class="form-control input-width" name="link" placeholder="Nhập link 360" value="{{ old('link') }}" />
                                </div>
                                <div class="form-group">
                                    <p><label>Hình ảnh thumb</label></p>
                                    <input type="file" class="form-control" name="img_thumb">
                                </div>
                                <div class="form-group">
                                    <p><label>Mô tả dự án</label></p>
                                    <textarea name="description"  class="form-control" rows="3">
                                        {{ old('description') }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <p><label>Public link</label></p>
                                    <label class="radio-inline">
                                        <input name="status" value="1" checked="" type="radio">Có
                                    </label>
                                    <label class="radio-inline">
                                        <input name="status" value="0" type="radio">Không
                                    </label>
                            </div>

                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default btn-mleft">Nhập Lại</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection