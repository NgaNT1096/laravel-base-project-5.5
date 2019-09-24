@extends('admin.layout.index')

@section('content')
<script src="admin_asset/dist/js/extra.js"></script>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">TOUR 360
                            <small>> Danh Sách</small>
                        </h1>
                    </div>
                    <div class="clearfix"></div>
                    <!-- /.col-lg-12 -->
                    @if(session('message'))
                        <div class="alert alert-success">
                            <strong>{{session('message')}}</strong>
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th class="text-center">ID</th>
                                <th class="text-center">Hình</th>
                                <th class="text-center">Tên dự án</th>
                                <th class="text-center">Tên chủ đâu tư</th>
                                <th class="text-center">link</th>
                                <th class="text-center">Ngày tạo</th>
                                <th class="text-center">Nổi Bật</th>
                                <th class="text-center">Sửa</th>
                                <th class="text-center">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tour360 as $tour)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $tour->id }}</td>
                                <td>
                                    <img width="100px" src="upload/tour/{{ $tour->img_thumb }}">
                                </td>
                                <td>{{ $tour->name_project }}</td>
                                <td>{{ $tour->name_investor }}</td>
                                <td><a href="{{ $tour->link }}" target="_blank" >{{ $tour->link }}</a></td>
                                <td>{{ $tour->created_at}}</td>
                                <td>
                                    @if($tour->status == 0)
                                        {{ 'private' }}
                                    @else
                                        {{ 'public' }}
                                    @endif
                                </td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tour/sua/{{ $tour->id }}">Sửa</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i> <a href="admin/tour/xoa/{{ $tour->id }}">Xoá</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection