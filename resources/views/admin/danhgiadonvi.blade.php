@extends("admin.master")
@section('title','Đánh giá đơn vị')
@section("content")
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
                    <h3 class="box-title">Bảng tự đánh giá chấm điểm các đơn vị</h3>

                    <div class="table-responsive">
                        <form class="form-horizontal" action="{{route('score-faculty.store')}}" method="post">
                            {{csrf_field()}}
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nội dung đánh giá</th>
                                <th>Điểm tối đa</th>
                                <th>Điểm đạt</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>I</td>
                                <td>Tính đoàn kết</td>
                                <td>10</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nội bộ đoàn kết, tích cực hưởng hứng các hoạt động trong nhà trường.</td>
                                <td>10</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="i1" value="10"></td>

                            </tr>
                            <tr>
                                <td>II</td>
                                <td>Chấp hành chủ trường của Đảng, chính sách pháp luật của Nhà nước, các quy định của Ngành và Nhà trường.</td>
                                <td>10</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Không có CCVC vi phạm đường lối chủ trường của Đảng, chính sách pháp luật của Nhà nước, các quy định của trường như đảm bảo ngày công, giờ công, làm việc đúng giờ, không vi phạm các tệ nạn xã hội.</td>
                                <td>5</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="ii1" value="5"></td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tham gia hưởng ứng tích cực các phong trào thi đua, các cuộc vận động của Ngành và Nhà trường, các hoạt động xã hội, từ thiện.</td>
                                <td>5</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="ii2" value="5"></td>
                            </tr>
                            <tr>
                                <td>III</td>
                                <td>Công tác xây dựng kế hoạch và tổ chức kế hoạch năm học</td>
                                <td>20</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Có kế hoạch công tác cụ thể, kế hoạch phát triển đơn vị trong năm học.</td>
                                <td>5</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="iii1" value="5"></td>


                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Phân công cụ thể nhiệm vụ cho các thành viên trong đơn vị, theo dõi, kiểm tra, đánh giá đúng chất lượng công việc của từng cán bộ, giảng viên trong năm học.</td>
                                <td>5</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="iii2" value="5"></td>


                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tổ chức triển khai hiệu quả đúng kế hoạch đề ra trong năm học, hoàn thành tốt các nhiệm vụ của đơn vị.</td>
                                <td>5</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="iii3" value="5"></td>


                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Thực hiện nghĩa vụ tài chính.</td>
                                <td>5</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="iii4" value="5"></td>


                            </tr>
                            <tr>
                                <td>IV</td>
                                <td>Công tác xây dựng phát triển đội ngũ</td>
                                <td>20</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Có kế hoạch và giải pháp cụ thể đào tạo, bồi dưỡng nâng cao trình độ mọi mặt đội ngũ cán bộ.</td>
                                <td>5</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="iv1" value="5"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tổ chức sinh hoạt chuyên môn nghiệp vụ, trao đổi kinh nghiệm công tác ở đơn vị, cán bộ tận tụy với công việc, thái độ giao tiếp văn minh, lịch sự.</td>
                                <td>10</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="iv2" value="10"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Trong năm học có cán bộ tham gia học tập bồi dưỡng chuyên môn nghiệp vụ.</td>
                                <td>5</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="iv3" value="5"></td>
                            </tr>
                            <tr>
                                <td>V</td>
                                <td>Công tác nghiên cứu khoa học, xây dựng giáo trình, đổi mới phương pháp giảng dạy, kiểm tra đánh giá, quản lí và sử dụng tài sản.</td>
                                <td>30</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Có giáo trình giảng dạy, tài liệu học tập, có kế hoạch đổi mới phương pháp giảng dạy, kiểm tra, đánh giá.</td>
                                <td>6</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="v1" value="6"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Quản lí và sử dụng tài sản đúng quy định.</td>
                                <td>6</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="v2" value="6"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Thường xuyên cập nhật thông tin, đảm bảo thông tin khoa học được phổ biến và đăng trong trang web của đơn vị.</td>
                                <td>6</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="v3" value="6"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tổ chức thường xuyên Hội nghị, Hội thảo, Seminar khoa học, có kế hoạch quản lí, thực hiện kiểm tra NCKH.</td>
                                <td>6</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="v4" value="6"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Có công trình bài báo được đăng tải trên tạp chí khoa học, đề tài NCKH các cấp phục vụ giảng dạy, đào tạo, quản lí phục vụ ngành - xã hội.</td>
                                <td>6</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="v5" value="6"></td>
                            </tr>
                            <tr>
                                <td>VI</td>
                                <td>Công tác soạn thảo văn bản đổi mới phương pháp làm việc, quản lí và sử dụng tài sản.</td>
                                <td>30</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Soạn thảo đủ hệ thống các văn bản trong lĩnh vực quản lí, có kế hoạch đổi mới phương pháp công tác.</td>
                                <td>10</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="vi1" value="10"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kiểm tra theo dõi việc thực hiện các văn bản, quy định đã ban hành.</td>
                                <td>10</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="vi2" value="10"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sử dụng đúng mục đích có hiệu quả, cơ sở vật chất, công cụ và trang thiết bị làm việc.</td>
                                <td>10</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="vi3" value="10"></td>
                            </tr>
                            <tr>
                                <td>VII</td>
                                <td>Tổ chức và thực hiện tốt công tác văn thư lưu trữ, ứng dụng công nghệ thông tin trong quản lí.</td>
                                <td>5</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Thực hiện đúng quy trình tiếp nhận văn bản đi và đến của đơn vị. Ứng dụng CNTT trong công tác văn thư lưu trữ và quản lí đơn vị đảm bảo hoạt động quản lí được khoa học và hiệu quả.</td>
                                <td>5</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="vii1" value="5"></td>
                            </tr>
                            <tr>
                                <td>VIII</td>
                                <td>Chế độ thông tin, báo cáo, hội họp.</td>
                                <td>5</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Thực hiện tốt chế độ thông tin báo cáo, hội họp định kì và đột xuất.</td>
                                <td>5</td>
                                <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="vii2" value="5"></td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-success">Success</button>
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
