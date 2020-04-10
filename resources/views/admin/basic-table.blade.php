@extends("admin.master")
@section('title','Quản lí User')
@section("content");
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"></h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <!-- <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> -->
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Quản lí CB, GV</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Quản lí công chức, viên chức.</h3>
                        <span><a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Thêm User</a></span>
                        <span><button type="button" class="btn btn-success"><i class="fa fa-file-excel-o"></i></button></span>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Họ và tên</th>
                                    <th>Bộ môn</th>
                                    <th>Điểm tự đánh giá</th>
                                    <th>Điểm đơn vị đánh giá</th>
                                    <th>Xếp loại</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count = 1 ?>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->bomon}}</td>
                                        <td>{{$user->sum}}</td>
                                        <td>{{$user->sum_f}}</td>
                                        <td>{{$user->disgest}}</td>
                                        <td>
                                            <span><a href="" class="btn btn-warning">Đánh giá</a></span>
                                            <span><a href="" class="btn btn-info">Sửa</a></span>
                                            <span>
                                                 <button data-toggle="modal" data-target="#confirm-delete" data-href="{{route('quan-ly.destroy',$user->id)}}" class="btn btn-danger" id="delete-btn">Xóa</button>
                                            </span>

                                        </td>
                                    </tr>
                                 @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal form-material" action="{{url('admin/quan-ly')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="validationServer01">Họ và tên:</label>
                                <input type="text" class="form-control is-valid" id="validationServer01" value="" placeholder="VD: Nguyễn Văn A" required name="name">
                            </div>
                            <div class="form-group">
                                <label for="validationServer02">Email</label>
                                <input type="email" class="form-control is-valid" id="validationServer02" placeholder="VD: infor@gmail.com" value="" required name="email">
                            </div>
                            <div class="form-group">
                                <label for="validationServer04">Bộ môn: </label>
                                <input type="text" class="form-control is-valid" id="validationServer04" placeholder="Ví dụ:CNPM"  value="" name="bomon">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- ---- Confirm Delete ----- --}}
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        Xác nhận trước khi xóa
                    </div>
                    <div class="modal-body">
                        Bạn chắc chắn muốn xóa dữ liệu này ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                        <a class="btn btn-danger btn-ok">Có</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2020 &copy; Admin  </footer>
    </div>
    <!-- /#page-wrapper -->
@endsection
