@extends('frontend.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Profile page</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <!-- <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> -->
                <ol class="breadcrumb">
                    <li class="active">Profile page</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <!-- .row -->
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="white-box">
                    <div class="user-bg"><img width="100%" alt="user" src="../plugins/images/large/img1.jpg">
                        <div class="overlay-box">
                            <div class="user-content">
                                <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" class="thumb-lg img-circle" alt="img"></a>
                                <h4 class="text-white">PAPAYA</h4>
                                <h5 class="text-white">info@gmail.com</h5> </div>
                        </div>
                    </div>
                    <div class="user-btm-box">
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-purple"><i class="ti-facebook"></i></p>
                            <h1>90</h1> </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-blue"><i class="ti-twitter"></i></p>
                            <h1>90</h1> </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-danger"><i class="ti-dribbble"></i></p>
                            <h1>A</h1> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="white-box">
                    <ul class="list-group">
                        <li class="list-group-item"><b>Họ và tên: Nguyễn Thị B</b></li>
                        <li class="list-group-item"><b>Số điện thoại: 0522879884</b></li>
                        <li class="list-group-item"><b>Email: infor@gmail.com</b></li>
                        <li class="list-group-item"><b>Bộ môn: Công nghệ phần mềm</b></li>
                        <li class="list-group-item"><b>Chức vụ: Giảng viên</b></li>
                        <li class="list-group-item"><b>Điểm trung bình: 90</b></li>
                        <li class="list-group-item"><b>Điểm tự đánh giá: 90</b></li>
                        <li class="list-group-item"><b>Điểm do đơn vị đánh giá: 90</b></li>
                        <li class="list-group-item"><b>Xếp loại: A - Hoàn thành nhiệm vụ</b></li>
                    </ul>
                    <h3>Các công trình nghiên cứu khoa học: </h3>
                    <ul>
                        <li>Phát triển phần mềm đánh giá viên chức.</li>
                    </ul>

                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success">Update Profile</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2020 &copy; Admin</footer>
        <!-- /#page-wrapper -->
</div>
@endsection
