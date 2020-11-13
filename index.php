<!doctype html>
<html lang="en">

<head>
    <title>Khoa kinh tế và quản lý trường đại học thủy lợi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/javascript/BTL.js"></script>
</head>

<body>
    
    <div class="container">
       
       <?php require_once("includes/connect.php"); ?>
<?php include("includes/header.php" );?>
<?php
	// Lấy 16 bài viết mới nhất đã được phép public ra ngoài từ bảng posts
	$sql = "select * from posts where is_public = 1 order by createdate desc limit 16";
	// Thực hiện truy vấn data thông qua hàm mysqli_query
	$query = mysqli_query($conn,$sql);
?>
			<div class="innertube">
				<table width="100%" border="1">
					<tr>
					<?php
						// Khởi tạo biến đếm $i = 0
						$i = 0;
						// Lặp dữ liệu lấy data từ cơ sở dữ liệu
						while ( $data = mysqli_fetch_array($query) ) {
							// Nếu biến đếm $i = 4, tức là vòng lặp chạy tới bài viết thứ tư thì ta thực hiện xuống hàng cho bài viết kế tiếp
							// Vì mỗi dòng hiển thị, ta chỉ hiển thị 4 bài viết
							if ($i == 4) {
								echo "</tr>";
								$i = 0;
							}
					?>
						<td >
							<b><?php echo $data["title"];// In ra title bài viết ?></b>
							<p><?php echo substr($data["content"], 0, 100)." ...";// In ra nội dung bài viết lấy chỉ 100 ký tự ?></p>
							<a href="display.php?id=<?php echo $data["id"]; // Tạo liên kết đến trang display.php và truyền vào id bài viết ?>"> Xem thêm</a>
						</td>
					
					<?php
							$i++;
						}
					?>
				</table>	
			</div>
		</main>
        </nav>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner-3thumb.jpg" class="d-block w-100" alt="index.php">
                </div>
                <div class="carousel-item">
                    <img src="img/banner-2thumb.jpg" class="d-block w-100" alt="index.php">
                </div>
                <div class="carousel-item">
                    <img src="img/banner-6thumb.jpg" class="d-block w-100" alt="index.php">
                </div>
                <div class="carousel-item">
                    <img src="img/banner-4thumb.jpg" class="d-block w-100" alt="index.php">
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
            </div>

        </div>

        <div class="content-box">
            <div class="container">

                <div class="row dnnpane">
                    <div id="dnn_P1_33_1" class="col-md-4 spacingTop">
                        <div class="DnnModule DnnModule-CMSView DnnModule-516"><a name="516"></a>
                            <div class="DNNContainer_noTitle">
                                <div id="dnn_ctr516_ContentPane">
                                    <!-- Start_Module_516 -->
                                    <div id="dnn_ctr516_ModuleContent" class="DNNModuleContent ModCMSViewC">
                                        <span id="dnn_ctr516_ViewCMSView_lblInform"></span>

                                        <div class="board3">
                                            <article class="type-post">
                                                <header>
                                                    <h3 class="title title-type--5"><a
                                                            href="http://fem.tlu.edu.vn/tin-tuc-khoa">Tin
                                                            tức</a></h3>
                                                </header>




                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/tin-tuc-khoa/nganh-quan-tri-kinh-doanh-quoc-te-khac-gi-so-voi-770'>
                                                            Ngành Quản trị kinh doanh quốc tế khác gì so với
                                                            ngành Quản...

                                                            <img id="dnn_ctr516_ViewCMSView_ctl00_rptNews_Image2_0"
                                                                src="img/icon-media-comment.gif" />


                                                            <span id="dnn_ctr516_ViewCMSView_ctl00_rptNews_hitLabel_0"
                                                                class="hit"> Hit : 5</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/top-truong-dao-tao-nganh.jpg"
                                                                    width="96" height="86" alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr516_ViewCMSView_ctl00_rptNews_sumLabel_0"
                                                                class="ChannelTeaserDesc">Để phân biệt được 3
                                                                ngành học Quản trị kinh doanh, Kinh...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/tin-tuc-khoa/nganh-quan-tri-kinh-doanh-quoc-te-khac-gi-so-voi-770'>Xem
                                                        chi tiết...</a>
                                                </div>


                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/tin-tuc-khoa/website-hay-ve-marketing-768'>
                                                            Website hay về Marketing

                                                            <img id="dnn_ctr516_ViewCMSView_ctl00_rptNews_Image2_1"
                                                                src="img/icon-media-comment.gif" />


                                                            <span id="dnn_ctr516_ViewCMSView_ctl00_rptNews_hitLabel_1"
                                                                class="hit"> Hit : 16</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/tai-xuong-5-.jpg" width="96"
                                                                    height="86" alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr516_ViewCMSView_ctl00_rptNews_sumLabel_1"
                                                                class="ChannelTeaserDesc">Bài viết giới thiệu
                                                                một số trang web hữu ích dành cho sinh...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/tin-tuc-khoa/website-hay-ve-marketing-768'>Xem
                                                        chi tiết...</a>
                                                </div>


                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/tin-tuc-khoa/lich-bao-ve-khoa-luan-tot-nghiep-nganh-quan-tri-763'>
                                                            Lịch bảo vệ khoá luận tốt nghiệp ngành Quản trị kinh
                                                            doanh...

                                                            <img id="dnn_ctr516_ViewCMSView_ctl00_rptNews_Image2_2"
                                                                src="img/icon-media-comment.gif" />


                                                            <span id="dnn_ctr516_ViewCMSView_ctl00_rptNews_hitLabel_2"
                                                                class="hit"> Hit : 588</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/thong-bao-tuyen-dung.jpg"
                                                                    width="96" height="86" alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr516_ViewCMSView_ctl00_rptNews_sumLabel_2"
                                                                class="ChannelTeaserDesc">Lịch bảo vệ khoá luận
                                                                tốt nghiệp ngành Quản trị kinh doanh...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/tin-tuc-khoa/lich-bao-ve-khoa-luan-tot-nghiep-nganh-quan-tri-763'>Xem
                                                        chi tiết...</a>
                                                </div>



                                                <!--More news-->

                                            </article>
                                        </div>

                                    </div><!-- End_Module_516 -->
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div id="dnn_P1_33_2" class="col-md-4 spacingTop">
                        <div class="DnnModule DnnModule-CMSView DnnModule-514"><a name="514"></a>
                            <div class="DNNContainer_noTitle">
                                <div id="dnn_ctr514_ContentPane">
                                    <!-- Start_Module_514 -->
                                    <div id="dnn_ctr514_ModuleContent" class="DNNModuleContent ModCMSViewC">
                                        <span id="dnn_ctr514_ViewCMSView_lblInform"></span>

                                        <div class="board3">
                                            <article class="type-post">
                                                <header>
                                                    <h3 class="title title-type--5"><a
                                                            href="http://fem.tlu.edu.vn/dao-tao">Đại học chính
                                                            quy</a></h3>
                                                </header>




                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/dao-tao/vi-sao-nen-hoc-nganh-quan-ly-xay-dung-kinh-te-xay-656'>
                                                            Vì sao nên học ngành Quản lý xây dựng/Kinh tế xây
                                                            dựng -...

                                                            <img id="dnn_ctr514_ViewCMSView_ctl00_rptNews_Image2_0"
                                                                src="img/icon-media-comment.gif" />


                                                            <span id="dnn_ctr514_ViewCMSView_ctl00_rptNews_hitLabel_0"
                                                                class="hit"> Hit : 861</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/ktxdthumb.png" width="96"
                                                                    height="86" alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr514_ViewCMSView_ctl00_rptNews_sumLabel_0"
                                                                class="ChannelTeaserDesc">Ngành xây dựng đang
                                                                phát triển mạnh mẽ, các tổ chức từ cơ...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/dao-tao/vi-sao-nen-hoc-nganh-quan-ly-xay-dung-kinh-te-xay-656'>Xem
                                                        chi tiết...</a>
                                                </div>


                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/dao-tao/hoc-quan-tri-kinh-doanh-ra-truong-lam-gi-698'>
                                                            Học Quản trị kinh doanh ra trường làm gì ?

                                                            <img id="dnn_ctr514_ViewCMSView_ctl00_rptNews_Image2_1"
                                                                src="img/icon-media-comment.gif" />

                                                            <img id="dnn_ctr514_ViewCMSView_ctl00_rptNews_Image4_1"
                                                                src="img/icon-media-watch.gif" />
                                                            <span id="dnn_ctr514_ViewCMSView_ctl00_rptNews_hitLabel_1"
                                                                class="hit"> Hit : 156</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/qtkd.jpg" width="96" height="86"
                                                                    alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr514_ViewCMSView_ctl00_rptNews_sumLabel_1"
                                                                class="ChannelTeaserDesc">Ngành Quản trị kinh
                                                                doanh - Đại học Thủy lợi bắt đầu tuyển...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/dao-tao/hoc-quan-tri-kinh-doanh-ra-truong-lam-gi-698'>Xem
                                                        chi tiết...</a>
                                                </div>


                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/dao-tao/co-nen-hoc-kinh-te-tai-truong-dai-hoc-thuy-loi-680'>
                                                            Có nên học Kinh tế tại Trường Đại học Thủy lợi?




                                                            <span id="dnn_ctr514_ViewCMSView_ctl00_rptNews_hitLabel_2"
                                                                class="hit"> Hit : 445</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/chon-nghe.jpeg" width="96"
                                                                    height="86" alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr514_ViewCMSView_ctl00_rptNews_sumLabel_2"
                                                                class="ChannelTeaserDesc">Có nên lựa chọn học
                                                                Kinh tế tại Trường Đại học Thủy lợi
                                                                hay...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/dao-tao/co-nen-hoc-kinh-te-tai-truong-dai-hoc-thuy-loi-680'>Xem
                                                        chi tiết...</a>
                                                </div>



                                                <!--More news-->

                                            </article>
                                        </div>

                                    </div><!-- End_Module_514 -->
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div id="dnn_P1_33_3" class="col-md-4 spacingTop">
                        <div class="DnnModule DnnModule-CMSView DnnModule-517"><a name="517"></a>
                            <div class="DNNContainer_noTitle">
                                <div id="dnn_ctr517_ContentPane">
                                    <!-- Start_Module_517 -->
                                    <div id="dnn_ctr517_ModuleContent" class="DNNModuleContent ModCMSViewC">
                                        <span id="dnn_ctr517_ViewCMSView_lblInform"></span>

                                        <div class="board3">
                                            <article class="type-post">
                                                <header>
                                                    <h3 class="title title-type--5"><a
                                                            href="http://fem.tlu.edu.vn/quy-che-quy-dinh-sinh-vien">Hoạt
                                                            động sinh viên</a></h3>
                                                </header>




                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/quy-che-quy-dinh-sinh-vien/co-gai-het-minh-voi-phong-trao-doan-the--nguyen-767'>
                                                            Cô gái hết mình với phong trào đoàn thể - Nguyễn Thị
                                                            Kim...




                                                            <span id="dnn_ctr517_ViewCMSView_ctl00_rptNews_hitLabel_0"
                                                                class="hit"> Hit : 97</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/kc2thumb.jpg" width="96"
                                                                    height="86" alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr517_ViewCMSView_ctl00_rptNews_sumLabel_0"
                                                                class="ChannelTeaserDesc">Để nhắc đến một người
                                                                tiền bối mà tôi có ấn tượng nhất,...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/quy-che-quy-dinh-sinh-vien/co-gai-het-minh-voi-phong-trao-doan-the--nguyen-767'>Xem
                                                        chi tiết...</a>
                                                </div>


                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/quy-che-quy-dinh-sinh-vien/buoi-bao-cao-y-tuong-cua-cac-nhom-du-an-tham-gia-762'>
                                                            Buổi báo cáo ý tưởng của các nhóm dự án tham gia
                                                            cuộc thi...




                                                            <span id="dnn_ctr517_ViewCMSView_ctl00_rptNews_hitLabel_1"
                                                                class="hit"> Hit : 72</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/anh-hop-lop-1thumb.jpg" width="96"
                                                                    height="86" alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr517_ViewCMSView_ctl00_rptNews_sumLabel_1"
                                                                class="ChannelTeaserDesc">4 nhóm dự án của khoa
                                                                KT&QL tham gia báo cáo trước BGH và...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/quy-che-quy-dinh-sinh-vien/buoi-bao-cao-y-tuong-cua-cac-nhom-du-an-tham-gia-762'>Xem
                                                        chi tiết...</a>
                                                </div>


                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/quy-che-quy-dinh-sinh-vien/buoi-trao-doi-voi-cac-nhom-sinh-vien-tham-gia-756'>
                                                            Buổi trao đổi với các nhóm sinh viên tham gia cuộc
                                                            thi...




                                                            <span id="dnn_ctr517_ViewCMSView_ctl00_rptNews_hitLabel_2"
                                                                class="hit"> Hit : 103</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/startup-1thumb.jpg" width="96"
                                                                    height="86" alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr517_ViewCMSView_ctl00_rptNews_sumLabel_2"
                                                                class="ChannelTeaserDesc">Ngày 16/7/2020, tại
                                                                phòng 211 nhà A5, các nhóm dự án tham...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/quy-che-quy-dinh-sinh-vien/buoi-trao-doi-voi-cac-nhom-sinh-vien-tham-gia-756'>Xem
                                                        chi tiết...</a>
                                                </div>



                                                <!--More news-->

                                            </article>
                                        </div>

                                    </div><!-- End_Module_517 -->
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row dnnpane">
                    <div id="dnn_P2_33_1" class="col-md-4 spacingTop">
                        <div class="DnnModule DnnModule-CMSView DnnModule-817"><a name="817"></a>
                            <div id="dnn_ctr817_ContentPane">
                                <!-- Start_Module_817 -->
                                <div id="dnn_ctr817_ModuleContent" class="DNNModuleContent ModCMSViewC">
                                    <span id="dnn_ctr817_ViewCMSView_lblInform"></span>

                                    <div class="board3">
                                        <article class="type-post">
                                            <header>
                                                <h3 class="title title-type--5"><a
                                                        href="http://fem.tlu.edu.vn/Học-liệu/Bài-giảng-điện-tử">Bài
                                                        giảng điện tử</a></h3>
                                            </header>




                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a
                                                        href='http://fem.tlu.edu.vn/Học-liệu/Bài-giảng-điện-tử/bai-giang-hoc-phan-kinh-te-xay-dung-1-765'>
                                                        Bài giảng học phần Kinh tế xây dựng 1




                                                        <span id="dnn_ctr817_ViewCMSView_ctl00_rptNews_hitLabel_0"
                                                            class="hit"> Hit : 54</span>
                                                    </a>
                                                </h3>

                                                <div class="post-details">
                                                    <div class="post-thumb">
                                                        <a href="#"><img src="img/ktxd1-1.jpg" width="96" height="86"
                                                                alt="Image"></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <span id="dnn_ctr817_ViewCMSView_ctl00_rptNews_sumLabel_0"
                                                            class="ChannelTeaserDesc">Bộ môn QLXD gửi sinh viên
                                                            bài giảng học phần Kinh tế xây...</span>
                                                    </div>
                                                </div>
                                                <a style="display:none"
                                                    href='http://fem.tlu.edu.vn/Học-liệu/Bài-giảng-điện-tử/bai-giang-hoc-phan-kinh-te-xay-dung-1-765'>Xem
                                                    chi tiết...</a>
                                            </div>


                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a
                                                        href='http://fem.tlu.edu.vn/Học-liệu/Bài-giảng-điện-tử/bai-giang-hoc-phan-thuong-mai-dien-tu-699'>
                                                        Bài giảng Học phần Thương mại điện tử




                                                        <span id="dnn_ctr817_ViewCMSView_ctl00_rptNews_hitLabel_1"
                                                            class="hit"> Hit : 182</span>
                                                    </a>
                                                </h3>

                                                <div class="post-details">
                                                    <div class="post-thumb">
                                                        <a href="#"><img src="img/e-commerce.jpg" width="96" height="86"
                                                                alt="Image"></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <span id="dnn_ctr817_ViewCMSView_ctl00_rptNews_sumLabel_1"
                                                            class="ChannelTeaserDesc">Thương mại điện tử là học
                                                            phần cơ sở ngành Quản trị kinh...</span>
                                                    </div>
                                                </div>
                                                <a style="display:none"
                                                    href='http://fem.tlu.edu.vn/Học-liệu/Bài-giảng-điện-tử/bai-giang-hoc-phan-thuong-mai-dien-tu-699'>Xem
                                                    chi tiết...</a>
                                            </div>


                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a
                                                        href='http://fem.tlu.edu.vn/Học-liệu/Bài-giảng-điện-tử/bai-giang-hoc-phan-quan-tri-marketing-697'>
                                                        Bài giảng học phần Quản trị marketing

                                                        <img id="dnn_ctr817_ViewCMSView_ctl00_rptNews_Image2_2"
                                                            src="img/icon-media-comment.gif" />


                                                        <span id="dnn_ctr817_ViewCMSView_ctl00_rptNews_hitLabel_2"
                                                            class="hit"> Hit : 182</span>
                                                    </a>
                                                </h3>

                                                <div class="post-details">
                                                    <div class="post-thumb">
                                                        <a href="#"><img src="img/marketingm.jpg" width="96" height="86"
                                                                alt="Image"></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <span id="dnn_ctr817_ViewCMSView_ctl00_rptNews_sumLabel_2"
                                                            class="ChannelTeaserDesc">Học phần Quản trị
                                                            Marketing có thời lượng 2 tín chỉ thuộc...</span>
                                                    </div>
                                                </div>
                                                <a style="display:none"
                                                    href='http://fem.tlu.edu.vn/Học-liệu/Bài-giảng-điện-tử/bai-giang-hoc-phan-quan-tri-marketing-697'>Xem
                                                    chi tiết...</a>
                                            </div>



                                            <!--More news-->

                                        </article>
                                    </div>

                                </div><!-- End_Module_817 -->
                            </div>
                        </div>
                    </div>
                    <div id="dnn_P2_33_2" class="col-md-4 spacingTop">
                        <div class="DnnModule DnnModule-CMSView DnnModule-414"><a name="414"></a>
                            <div class="DNNContainer_noTitle">
                                <div id="dnn_ctr414_ContentPane">
                                    <!-- Start_Module_414 -->
                                    <div id="dnn_ctr414_ModuleContent" class="DNNModuleContent ModCMSViewC">
                                        <span id="dnn_ctr414_ViewCMSView_lblInform"></span>

                                        <div class="board3">
                                            <article class="type-post">
                                                <header>
                                                    <h3 class="title title-type--5"><a
                                                            href="http://fem.tlu.edu.vn/Người-học/Cẩm-nang-người-học">Cẩm
                                                            nang người học</a></h3>
                                                </header>




                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/Người-học/Cẩm-nang-người-học/giai-phap-thao-go-kho-khan-trong-quan-ly-chi-phi-766'>
                                                            Giải pháp tháo gỡ khó khăn trong quản lý chi phí đầu
                                                            tư xây...




                                                            <span id="dnn_ctr414_ViewCMSView_ctl00_rptNews_hitLabel_0"
                                                                class="hit"> Hit : 31</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/qlcp1.jpg" width="96" height="86"
                                                                    alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr414_ViewCMSView_ctl00_rptNews_sumLabel_0"
                                                                class="ChannelTeaserDesc">Chính phủ vừa ban hành
                                                                Nghị quyết số 108/NQ-CP về một số...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/Người-học/Cẩm-nang-người-học/giai-phap-thao-go-kho-khan-trong-quan-ly-chi-phi-766'>Xem
                                                        chi tiết...</a>
                                                </div>


                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/Người-học/Cẩm-nang-người-học/hoc-moi-thu-trong-vong-20-gio-voi-4-buoc-phuong-760'>
                                                            Học mọi thứ trong vòng 20 giờ với 4 bước: Phương
                                                            pháp cực...

                                                            <img id="dnn_ctr414_ViewCMSView_ctl00_rptNews_Image2_1"
                                                                src="img/icon-media-comment.gif" />


                                                            <span id="dnn_ctr414_ViewCMSView_ctl00_rptNews_hitLabel_1"
                                                                class="hit"> Hit : 27</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/11272851-concept-successthumb.jpg"
                                                                    width="96" height="86" alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr414_ViewCMSView_ctl00_rptNews_sumLabel_1"
                                                                class="ChannelTeaserDesc">Kĩ năng, khả năng hay
                                                                kiến thức không phải là thứ kéo lùi...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/Người-học/Cẩm-nang-người-học/hoc-moi-thu-trong-vong-20-gio-voi-4-buoc-phuong-760'>Xem
                                                        chi tiết...</a>
                                                </div>


                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/Người-học/Cẩm-nang-người-học/9-ky-nang-can-thiet-cho-sinh-vien-759'>
                                                            9 kỹ năng cần thiết cho sinh viên

                                                            <img id="dnn_ctr414_ViewCMSView_ctl00_rptNews_Image2_2"
                                                                src="img/icon-media-comment.gif" />


                                                            <span id="dnn_ctr414_ViewCMSView_ctl00_rptNews_hitLabel_2"
                                                                class="hit"> Hit : 21</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/20131130090306-9-ki-nang.jpg"
                                                                    width="96" height="86" alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr414_ViewCMSView_ctl00_rptNews_sumLabel_2"
                                                                class="ChannelTeaserDesc">Đối với sinh viên,
                                                                trình độ kiến thức là điều kiện cần...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/Người-học/Cẩm-nang-người-học/9-ky-nang-can-thiet-cho-sinh-vien-759'>Xem
                                                        chi tiết...</a>
                                                </div>



                                                <!--More news-->

                                            </article>
                                        </div>

                                    </div><!-- End_Module_414 -->
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div id="dnn_P2_33_3" class="col-md-4 spacingTop">
                        <div class="DnnModule DnnModule-CMSView DnnModule-518"><a name="518"></a>
                            <div class="DNNContainer_noTitle">
                                <div id="dnn_ctr518_ContentPane">
                                    <!-- Start_Module_518 -->
                                    <div id="dnn_ctr518_ModuleContent" class="DNNModuleContent ModCMSViewC">
                                        <span id="dnn_ctr518_ViewCMSView_lblInform"></span>

                                        <div class="board3">
                                            <article class="type-post">
                                                <header>
                                                    <h3 class="title title-type--5"><a
                                                            href="http://fem.tlu.edu.vn/cac-thao-thuan-hop-tac">Hợp
                                                            tác - Tuyển dụng</a></h3>
                                                </header>




                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/cac-thao-thuan-hop-tac/tap-doan-fenghua-tuyen-dung-706'>
                                                            Tập đoàn Fenghua tuyển dụng




                                                            <span id="dnn_ctr518_ViewCMSView_ctl00_rptNews_hitLabel_0"
                                                                class="hit"> Hit : 70</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/thong-bao-tuyen-dung.jpg"
                                                                    width="96" height="86" alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr518_ViewCMSView_ctl00_rptNews_sumLabel_0"
                                                                class="ChannelTeaserDesc">Đại lý chính thức Tập
                                                                đoàn Fenghua, chuyên về linh kiện...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/cac-thao-thuan-hop-tac/tap-doan-fenghua-tuyen-dung-706'>Xem
                                                        chi tiết...</a>
                                                </div>


                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/cac-thao-thuan-hop-tac/thong-bao-tuyen-dung-cua-cong-ty-tnhh-tu-van-atc-704'>
                                                            Thông báo tuyển dụng của Công ty TNHH Tư vấn ATC
                                                            Việt Nam

                                                            <img id="dnn_ctr518_ViewCMSView_ctl00_rptNews_Image2_1"
                                                                src="img/icon-media-comment.gif" />


                                                            <span id="dnn_ctr518_ViewCMSView_ctl00_rptNews_hitLabel_1"
                                                                class="hit"> Hit : 109</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/screenshot-2020-05-22-11.png"
                                                                    width="96" height="86" alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr518_ViewCMSView_ctl00_rptNews_sumLabel_1"
                                                                class="ChannelTeaserDesc">Công ty TNHH Tư vấn
                                                                ATC Việt Nam thông báo tuyển dụng thực...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/cac-thao-thuan-hop-tac/thong-bao-tuyen-dung-cua-cong-ty-tnhh-tu-van-atc-704'>Xem
                                                        chi tiết...</a>
                                                </div>


                                                <div class="post-content">
                                                    <h3 class="post-title">
                                                        <a
                                                            href='http://fem.tlu.edu.vn/cac-thao-thuan-hop-tac/cong-ty-tnhh-hang-kiem-toan-aasc-thanh-vien-hlb-691'>
                                                            Công ty TNHH Hãng kiểm toán AASC thành viên HLB Quốc
                                                            tế tại...




                                                            <span id="dnn_ctr518_ViewCMSView_ctl00_rptNews_hitLabel_2"
                                                                class="hit"> Hit : 167</span>
                                                        </a>
                                                    </h3>

                                                    <div class="post-details">
                                                        <div class="post-thumb">
                                                            <a href="#"><img src="img/thong-bao-tuyen-dung.jpg"
                                                                    width="96" height="86" alt="Image"></a>
                                                        </div>
                                                        <div class="post-text">
                                                            <span id="dnn_ctr518_ViewCMSView_ctl00_rptNews_sumLabel_2"
                                                                class="ChannelTeaserDesc">Công ty TNHH Hãng kiểm
                                                                toán AASC thành viên HLB Quốc tế tại...</span>
                                                        </div>
                                                    </div>
                                                    <a style="display:none"
                                                        href='http://fem.tlu.edu.vn/cac-thao-thuan-hop-tac/cong-ty-tnhh-hang-kiem-toan-aasc-thanh-vien-hlb-691'>Xem
                                                        chi tiết...</a>
                                                </div>



                                                <!--More news-->

                                            </article>
                                        </div>

                                    </div><!-- End_Module_518 -->
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- //.content-box -->
            <div id="dnn_ContentPane" class="col-md-12 contentPane DNNEmptyPane"></div>
        </div>
        <div class="row dnnpane news">
            <div class="container">
                <div class="wrap-news">
                    <div id="dnn_NewsPane" class="col-md-12 contentPane">
                        <div class="DnnModule DnnModule-DNN_HTML DnnModule-358"><a name="358"></a>
                            <div id="dnn_ctr358_ContentPane">
                                <!-- Start_Module_358 -->
                                <div id="dnn_ctr358_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
                                    <div id="dnn_ctr358_HtmlModule_lblContent" class="Normal">
                                        <h2 class="title title-type--2">Tin tức</h2>
                                    </div>

                                </div><!-- End_Module_358 -->
                            </div>
                        </div>
                        <div class="DnnModule DnnModule-CMSView DnnModule-826"><a name="826"></a>
                            <div id="dnn_ctr826_ContentPane">
                                <!-- Start_Module_826 -->
                                <div id="dnn_ctr826_ModuleContent" class="DNNModuleContent ModCMSViewC">
                                    <span id="dnn_ctr826_ViewCMSView_lblInform"></span>

                                    <div class="box-news">
                                        <ul class="list-data--2">

                                            <li>
                                                <article class="news-entry">
                                                    <div class="entry-thumb">
                                                        <a href="#"><img src="img/screen-shot-2020-08-08.png"
                                                                width="190" height="134" alt="Image"></a>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-title">
                                                            <h3>
                                                                <a
                                                                    href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/thong-tin-ve-giao-trinh-kinh-te-xay-dung-771'>
                                                                    Thông tin về Giáo trình Kinh tế xây dựng




                                                                    <span
                                                                        id="dnn_ctr826_ViewCMSView_ctl00_rptNews_hitLabel_0"
                                                                        class="hit"> Hit : 11</span>
                                                                </a>
                                                            </h3>

                                                        </div>
                                                        >
                                                        <a style="display:inline-block"
                                                            href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/thong-tin-ve-giao-trinh-kinh-te-xay-dung-771'>Xem
                                                            chi tiết...</a>
                                                    </div>
                                                </article>
                                            </li>

                                            <li>
                                                <article class="news-entry">
                                                    <div class="entry-thumb">
                                                        <a href="#"><img src="img/top-truong-dao-tao-nganh.jpg"
                                                                width="190" height="134" alt="Image"></a>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-title">
                                                            <h3>
                                                                <a
                                                                    href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/nganh-quan-tri-kinh-doanh-quoc-te-khac-gi-so-voi-770'>
                                                                    Ngành Quản trị kinh doanh quốc tế khác gì so
                                                                    với...

                                                                    <img id="dnn_ctr826_ViewCMSView_ctl00_rptNews_Image2_1"
                                                                        src="/images/icon-media-comment.gif" />


                                                                    <span
                                                                        id="dnn_ctr826_ViewCMSView_ctl00_rptNews_hitLabel_1"
                                                                        class="hit"> Hit : 5</span>
                                                                </a>
                                                            </h3>

                                                        </div>
                                                        
                                                        <a style="display:none"
                                                            href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/nganh-quan-tri-kinh-doanh-quoc-te-khac-gi-so-voi-770'>Xem
                                                            chi tiết...</a>
                                                    </div>
                                                </article>
                                            </li>

                                            <li>
                                                <article class="news-entry">
                                                    <div class="entry-thumb">
                                                        <a href="#"><img src="img/tai-xuong-5-.jpg" width="190"
                                                                height="134" alt="Image"></a>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-title">
                                                            <h3>
                                                                <a
                                                                    href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/website-hay-ve-marketing-768'>
                                                                    Website hay về Marketing

                                                                    <img id="dnn_ctr826_ViewCMSView_ctl00_rptNews_Image2_2"
                                                                        src="img/icon-media-comment.gif" />


                                                                    <span
                                                                        id="dnn_ctr826_ViewCMSView_ctl00_rptNews_hitLabel_2"
                                                                        class="hit"> Hit : 16</span>
                                                                </a>
                                                            </h3>

                                                        </div>
                                                        
                                                        <a style="display:none"
                                                            href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/website-hay-ve-marketing-768'>Xem
                                                            chi tiết...</a>
                                                    </div>
                                                </article>
                                            </li>

                                            <li>
                                                <article class="news-entry">
                                                    <div class="entry-thumb">
                                                        <a href="#"><img src="img/thong-bao-7f9a6bab-a9f3.jpg"
                                                                width="190" height="134" alt="Image"></a>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-title">
                                                            <h3>
                                                                <a
                                                                    href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/lich-bao-ve-khoa-luan-tot-nghiep-nganh-quan-tri-763'>
                                                                    Lịch bảo vệ khoá luận tốt nghiệp ngành Quản
                                                                    trị...

                                                                    <img id="dnn_ctr826_ViewCMSView_ctl00_rptNews_Image2_3"
                                                                        src="img/icon-media-comment.gif" />


                                                                    <span
                                                                        id="dnn_ctr826_ViewCMSView_ctl00_rptNews_hitLabel_3"
                                                                        class="hit"> Hit : 588</span>
                                                                </a>
                                                            </h3>

                                                        </div>
                                                       
                                                        <a style="display:none"
                                                            href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/lich-bao-ve-khoa-luan-tot-nghiep-nganh-quan-tri-763'>Xem
                                                            chi tiết...</a>
                                                    </div>
                                                </article>
                                            </li>

                                            <li>
                                                <article class="news-entry">
                                                    <div class="entry-thumb">
                                                        <a href="#"><img src="img/thuc-tap-nganh-qlxd.png" width="190"
                                                                height="134" alt="Image"></a>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-title">
                                                            <h3>
                                                                <a
                                                                    href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/ke-hoach-lop-thuc-tap-nganh-quan-ly-xay-dung-khoa-761'>
                                                                    Kế hoạch lớp thực tập ngành Quản lý xây dựng
                                                                    khóa...




                                                                    <span
                                                                        id="dnn_ctr826_ViewCMSView_ctl00_rptNews_hitLabel_4"
                                                                        class="hit"> Hit : 503</span>
                                                                </a>
                                                            </h3>

                                                        </div>
                                                        
                                                        <a style="display:none"
                                                            href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/ke-hoach-lop-thuc-tap-nganh-quan-ly-xay-dung-khoa-761'>Xem
                                                            chi tiết...</a>
                                                    </div>
                                                </article>
                                            </li>

                                            <li>
                                                <article class="news-entry">
                                                    <div class="entry-thumb">
                                                        <a href="#"><img src="img/images-2-.jpg" width="180"
                                                                height="134" alt="Image"></a>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-title">
                                                            <h3>
                                                                <a
                                                                    href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/4-yeu-cau-cung-doi-voi-sinh-vien--doi-4-0-753'>
                                                                    4 yêu cầu 'cứng' đối với sinh viên ''đời'
                                                                    4.0

                                                                    <img id="dnn_ctr826_ViewCMSView_ctl00_rptNews_Image2_5"
                                                                        src="img/icon-media-comment.gif" />


                                                                    <span
                                                                        id="dnn_ctr826_ViewCMSView_ctl00_rptNews_hitLabel_5"
                                                                        class="hit"> Hit : 58</span>
                                                                </a>
                                                            </h3>

                                                        </div>
                                                      
                                                        <a style="display:none"
                                                            href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/4-yeu-cau-cung-doi-voi-sinh-vien--doi-4-0-753'>Xem
                                                            chi tiết...</a>
                                                    </div>
                                                </article>
                                            </li>

                                        </ul>
                                        <div class="related-news">
                                            <h3 class="related-title text-white">Các tin khác</h3>
                                            <div class="listingsmore ">
                                                <ul class="list-data--1">
    
                                                    <li>
                                                        <a class="ui-link-white text-white"
                                                            href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/vien-canh-cho-sinh-vien-nganh-quan-tri-kinh-doanh-750'>
                                                            Viễn cảnh cho sinh viên ngành Quản trị kinh doanh sau
                                                            khi ra trường
                                                        </a>
                                                    </li>
    
                                                    <li>
                                                        <a class="ui-link-white text-white"
                                                            href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/cac-buoc-xu-ly-khi-quen-ma-dang-nhap-thi-tot-749'>
                                                            Các bước xử lý khi quên Mã đăng nhập thi tốt nghiệp THPT
                                                            2020, đăng nhập mãi không đăng nhập được
                                                        </a>
                                                    </li>
    
                                                    <li>
                                                        <a class="ui-link-white text-white"
                                                            href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/thong-bao-ve-to-chuc-thi-chuan-tieng-anh-dau-ra-748'>
                                                            Thông báo về tổ chức thi chuẩn Tiếng Anh đầu ra A2 đợt 1
                                                            năm 2020
                                                        </a>
                                                    </li>
    
                                                    <li>
                                                        <a class="ui-link-white text-white"
                                                            href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/cau-chuyen-ban-hang-hoa-giai-cac-phan-doi-cua-747'>
                                                            Câu chuyện bán hàng: Hoá giải các phản đối của khách
                                                            hàng
                                                        </a>
                                                    </li>
    
                                                    <li>
                                                        <a class="ui-link-white text-white"
                                                            href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/kinh-doanh-online-sau-covid19--co-hoi-va-thach-742'>
                                                            Kinh doanh online sau Covid19 – Cơ hội và thách thức cho
                                                            sinh viên Kinh Tế
                                                        </a>
                                                    </li>
    
                                                    <li>
                                                        <a class="ui-link-white text-white"
                                                            href='http://fem.tlu.edu.vn/tin-tuc-thong-bao/huong-dan-dang-nhap-va-su-dung-tai-khoan-ky-thi-736'>
                                                            Hướng dẫn đăng nhập và sử dụng tài khoản kỳ thi tốt
                                                            nghiệp THPT 2020
                                                        </a>
                                                    </li>
    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <span id="dnn_ctr826_ViewCMSView_ctl00_lblInform"></span>
                                </div><!-- End_Module_826 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row dnnpane clients">
            <div class="container">

                <div id="dnn_ClientPane" class="col-md-12 contentPane">
                    <div class="DnnModule DnnModule-DNN_HTML DnnModule-357"><a name="357"></a>
                        <div id="dnn_ctr357_ContentPane">
                            <!-- Start_Module_357 -->
                            <div id="dnn_ctr357_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
                                <div id="dnn_ctr357_HtmlModule_lblContent" class="Normal">
                                    <div class="clients-slider slick-initialized slick-slider">
                                        <div class="item"><img alt="Clients" src="img/clients-01.jpg" /></div>

                                        <div class="item"><img alt="Clients" src="img/clients-02.jpg" /></div>

                                        <div class="item"><img alt="Clients" src="img/clients-03.jpg" /></div>

                                        <div class="item"><img alt="Clients" src="img/clients-01.jpg" /></div>

                                        <div class="item"><img alt="Clients" src="img/clients-02.jpg" /></div>

                                        <div class="item"><img alt="Clients" src="img/clients-03.jpg" /></div>
                                    </div>

                                </div>

                            </div><!-- End_Module_357 -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php include"includes/footer.php"?>
    </div>

    </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
<script src="/jquery-3.5.1.min.js"></script>

</html>