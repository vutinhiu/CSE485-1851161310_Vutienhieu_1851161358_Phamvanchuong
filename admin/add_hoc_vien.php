<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/styles.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
	  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Trường dạy lái xe </span>Thống Nhất</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> Admin
							<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user">
										<use xlink:href="#stroked-male-user"></use>
									</svg> Hồ sơ</a></li>
							<li><a href="#"><svg class="glyph stroked cancel">
										<use xlink:href="#stroked-cancel"></use>
									</svg> Đăng xuất</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li ><a href="admin.html"><i class="fas fa-columns"></i> Dashboard</a></li>
			<li class="active"><a href="admin/hoc_vien.php"><i class="fas fa-user-graduate"></i>Quản lý học viên</a></li>
			<li><a href="admin/admin1.php"><i class="fas fa-users"></i> Quản lý người dùng </a></li>
			<li><a href="setting.html"><i class="fas fa-cogs"></i> Cấu hình</a></li>
		</ul>

	</div>
	<!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><i class="fas fa-home"></i></a></li>
				<li><a href="hoc_vien.html">Quản lý sinh viên</a></li>
				<li class="active">Thêm sinh viên</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm sinh viên</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-8">
							<!-- <div class="alert alert-danger">Email đã tồn tại !</div> -->
							<form role="form" method="post">
								<div class="form-group">
									<label>Họ & Tên</label>
									<input type="text" name="stu_full" required class="form-control"  placeholder="">
								</div>
								<div class="form-group">
									<label>Số điện thoại</label>
									<input type="text" name="stu_num" required class="form-control">
								</div>
								<div class="form-group">
									<label> Khóa học</label>
									<select name="course_id" class="form-control">
										<option selected value=1>Bằng A1</option>
										<option value=2>Bằng A2</option>
										<option value=3>Bằng B1</option>
										<option value=4>Bằng B2</option>
									</select>
								</div>
								<div class="form-group">
									<label>Lớp học</label>
									<input type="text" name="stu_class" required class="form-control">
								</div>
								<div class="form-group">
									<label> lịch học</label>
									<select name="
                                    course_id" class="form-control">
										<option selected value=1>Từ 18h-20h, Thứ 2,4,6</option>
										<option value=2>Từ 7h-9h, Thứ 2,4,6</option>
										<option value=3>Từ 18h-20h, Thứ 3,5,7</option>
										<option value=4>Từ 7h-9h, Thứ 3,5,7</option>
									</select>
								</div>
								<button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
								<button type="reset" class="btn btn-default">Làm mới</button>
						</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->

	</div>
	<!--/.main-->
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>