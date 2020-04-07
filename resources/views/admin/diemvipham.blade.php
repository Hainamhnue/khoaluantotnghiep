@extends("admin.master")
@section("content");
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Bảng tự đánh giá cho điểm đơn vị.</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <!-- <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> -->
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Đánh giá đơn vị.</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3>Bảng điểm vi phạm</h3>
                        <div class="table-responsive">
                            <form class="form-horizontal" action="{{url('admin/score-transgress')}}" method="POST">
                                {{csrf_field()}}
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
                                    <td>Kế hoạch công tác thiếu khoa học.</td>
                                    <td>10</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="trans1" value="0"></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Triển khai không đúng nội dung, kế hoạch đặt ra</td>
                                    <td>10</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" name="trans2"></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Chậm thanh quyết toán từ 5 ngày trở lên.</td>
                                    <td>10</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" name="trans3"></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Quá trình tổ chức triển khai thường xuyên bị động và thay đổi.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" name="trans4"></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Không giao việc cụ thể cho từng cán bộ.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" name="trans5"></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Thiếu theo dõi kiểm tra, đánh giá công việc của các thành viên trong đơn vị.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" name="trans6"></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Giáo trình, tài liệu chưa đầy đủ, không cập nhật kịp thời.</td>
                                    <td>10</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" name="trans7"></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Không kiểm tra tiến độ đề tài NCKH.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="trans8" value="0"></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Không nghiệm thu đề tài đúng hạn đã đăng kí.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="trans9" value="0"></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Không tổ chức hội nghị hội thảo, Seminar.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="trans10" value="0" ></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Sử dụng cơ sở vật chất, trang thiết bị không đúng mục đích, lãng phí.</td>
                                    <td>10</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" name="trans11"></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Tham mưu chưa kịp thời trong việc xây dựng văn bản quản lí.</td>
                                    <td>10</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" name="trans12"></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Không kiểm tra theo dõi việc thực hiện các văn bản, quy định đã ban hành</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="trans13" value="0"></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Sai sót về thể thức và kỹ thuật trình bày văn bản.</td>
                                    <td>3</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" name="trans14"></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Tiếp nhận và giải quyết văn bản đến hoặc văn bản đi không kịp thời, thiếu chính xác.</td>
                                    <td>3</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" name="trans15"></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Tổ chức lưu trữ văn bản thiếu khoa học.</td>
                                    <td>3</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" name="trans16"></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Chậm trễ trong việc báo cáo thống kê.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="trans17" value="0"></td>
                                </tr>

                                <tr>
                                    <td>18</td>
                                    <td>Nội dung báo cáo, thống kế không chính xác, đầy đủ.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" name="trans18"></td>
                                </tr>

                                <tr>
                                    <td>19</td>
                                    <td>Đơn vị thường xuyên có viên chức tham gia hội họp không đúng giờ hoặc vắng mặt.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" name="trans19"></td>
                                </tr>



                                </tbody>
                            </table>
                                <button type="submit" class="btn btn-success">Hoàn thành</button>
                            </form>
                        </div>
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
