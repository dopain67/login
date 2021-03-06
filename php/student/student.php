<?php
include_once '../login/session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Student</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/student.css">
</head>
<body>
</body>
<?php
// include_once '../config/connect_student.php';
// include_once '../student/create.php';
?>

<div class="container">
  <h1 style="font-size: 40px;padding: 20px 0;" class="row-row-col-8">Thêm mới sinh viên</h1>
  <div class="col-sm-3">
    <h2 id="kiemtra">Thông tin cá nhân</h2>
  </div>
  <form class="row g-3 needs-validation" novalidate id="newData" method="POST" action="" enctype="multipart/form-data">
    <div class="col-md-3">
      <label for="validationCustom01" class="form-label">Mã hồ sơ</label>
      <input type="text" name="profile_code" class="form-control" id="profile" aria-describedby="inputGroupPrepend" required>
      <span class="float-left" id="profile_error"></span>
    <div class="invalid-feedback"></div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom01" class="form-label">Mã sinh viên</label>
    <input type="text" name="student_code" class="form-control" id="student" aria-describedby="inputGroupPrepend" required>
    <span class="float-left" id="student_error"></span>
    <div class="invalid-feedback"></div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom01" class="form-label">Họ đệm</label>
    <div class="input-group has-validation">
      <input type="text" name="firstname" class="form-control" id="surname" aria-describedby="inputGroupPrepend" required>
      <span class="float-left" id="surname-error"></span>
      <div class="invalid-feedback"></div>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom01" class="form-label">Tên</label>
    <input type="text" name="lastname" class="form-control" id="name" aria-describedby="inputGroupPrepend" required>
    <span class="float-left" id="name_error"></span>
    <div class="invalid-feedback"></div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom01" class="form-label">Giới tính</label>
    <select class="form-select" id="check" name="gender" required>
      <option selected disabled value="">Chọn giới tính</option>
      <option>Nam</option>
      <option>Nữ</option>
    </select>
    <span class="float-left" id="checkgender_error"></span>
    <div class="invalid-feedback"></div>
  </div>
  <div class="col-md-3">
    <label for="validationCustomUsername" class="form-label">Ngày sinh</label>
    <div class="input-group has-validation">
      <input type="date" name="date_of_birth" class="form-control" id="birthday" aria-describedby="inputGroupPrepend" required>
      <span class="float-left" id="birthday_error"></span>
      <div class="invalid-feedback"></div>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom01" class="form-label">Nơi sinh</label>
    <input type="text" name="place_of_birth" class="form-control" id="birthPlace" aria-describedby="inputGroupPrepend" required>
    <span class="float-left" id="birthPlace_error"></span>
    <div class="invalid-feedback"></div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom01" class="form-label">Dân tộc</label>
    <input type="text" name="race" class="form-control" id="validationCustom01" aria-describedby="inputGroupPrepend">
    <div class="invalid-feedback"></div>
  </div>
  <div class="col-md-3">
    <label for="validationCustomUsername" class="form-label">Tôn giáo</label>
    <div class="input-group has-validation">
      <input type="text" name="religion" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend">
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom01" class="form-label">Số CMND/CCCD</label>
    <input type="number" name="identity_number" class="form-control" id="validationCustom01" aria-describedby="inputGroupPrepend">
  </div>
  <div class="col-md-3">
    <label for="validationCustom01" class="form-label">Ngày cấp</label>
    <input type="date" name="" class="form-control" id="validationCustom01" aria-describedby="inputGroupPrepend">
  </div>
  <div class="col-md-3">
    <label for="validationCustomUsername" class="form-label">Nơi cấp</label>
    <div class="input-group has-validation">
      <input type="text" name="address" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend">
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom02" class="form-label">Điện thoại</label>
    <input type="number" class="form-control" name="phone" id="phone" aria-describedby="inputGroupPrepend" required>
    <span class="float-left" id="phone-error"></span>
    <div class="invalid-feedback"></div>
  </div>
  <div class="col-md-3">
    <label for="validationCustomUsername" class="form-label">Email cá nhân</label>
    <div class="input-group has-validation">
      <input type="email" name="email" class="form-control" id="email" aria-describedby="inputGroupPrepend" required>
      <span class="float-left" id="email-error"></span>
      <div class="invalid-feedback"></div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Địa chỉ liên hệ</label>
    <input type="text" name="personal_email" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback"></div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Ghi chú</label>
    <input type="text" name="note" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback"></div>
  </div>
  <div class="col-md-2">
    <label for="validationCustom04" class="form-label">Trạng thái sinh viên</label>
    <select class="form-select" name="student_status" id="validationCustom04" required>
      <option selected disabled value="">Chọn trạng thái</option>
      <option>Hoàn thành</option>
      <option>Chưa hoàn thành</option>
    </select>
    <div class="invalid-feedback"></div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Đồng ý với điều khoản và điều kiện.
      </label>
      <div class="invalid-feedback"></div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" value="add_Data" name="subcreate">Thêm</button>
    <button class="btn btn-primary" type="submit" value="cancel_data" name="subdelete">Hủy</button>
    <a href="../login/logout.php" class="btn btn-primary float-right" style="margin-left: 30px;">Logout</a>
  </div>
</form>
</div>
</body>
</html>