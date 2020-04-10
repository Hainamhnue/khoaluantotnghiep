@extends("frontend.master")
@section("content");
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"></h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <!-- <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> -->
                <ol class="breadcrumb">
                    <li class="active">Tự đánh giá.</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Phiếu tự đánh giá chấm điểm cho công chức, viên chức.</h3>
                    <h3>Bảng điểm vi phạm</h3>
                    <form action="{{route('diem-vi-pham.store')}}" method="POST">
                        {{csrf_field()}}
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nội dung vi phạm</th>
                                    <th>Điểm trừ tối đa</th>
                                    <th>Điểm trừ</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Gây mất đoàn kết.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="tras1" value="0"></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Vi phạm trong sử dụng các thiết bị điện, nước vệ sinh môi trường.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="tras2" value="0"></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Thiếu trung thực trong công việc.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="tras3" value="0"></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Đến làm việc muôn, về sớm trước 15 phút.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="tras4" value="0"></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Vắng mặt bỏ vị trí làm việc không có lí do.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="tras5" value="0"></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Không dự họp không có lí do.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="tras6" value="0"></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Thực hiện nhiệm vụ chậm tiến độ.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="tras7" value="0"></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Vi phạm quy chế đào tạo.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="tras8" value="0"></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Gây mất quy định, trị an trong Nhà trường.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="tras9" value="0"></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Không tích cực trong phối hợp với đồng nghiệp.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="tras10" value="0"></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Thái độ phục vụ thiếu lịch sự, không hòa nhã.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="tras11" value="0"></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Chậm thanh quyết toán từ 15 ngày trở lên.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="tras12" value="0"></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Không kiểm tra theo dõi việc thực hiện các văn bản, quy định đã ban hành</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="tras13" value="0"></td>
                                </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-success">Hoàn thành</button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2020 &copy; Admin  </footer>
</div>
<!-- /#page-wrapper -->
@endsection

