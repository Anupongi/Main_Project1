<?php
session_start();
    include "../../connection/connection4.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เว็บไซต์ห้องพยาบาล วิทยาลัยเทคนิคเชียงใหม่</title>
    <meta name="description" content="เป็นเว็บไซต์เกี่ยวกับห้องพยาบาล วิทยาลัยเทคนิคเชียงใหม่">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="./asset/css/style_font.css">
    <meta name="google-site-verification" content="HfyyLXEy_HeeCFIgiuZzjfHteEU4fs8HsAzuS1CGD-M" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./dist/img/206-2067143_no-wait-emergency-room-medical-bed-icon.png" type="image/png">
    <style>
        /* body {
            background-image:
                linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(117, 19, 93, 0.73)),
                url('http://tourthailandgiare.net/wp-content/uploads/2018/07/Travel-to-Chiang-Mai.jpg');
                background-repeat: no-repeat;
        } */

        .content_text {
            font-size: 3em;
        }

         .carousel {
            margin-bottom: 4rem;
        }

        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        .carousel-item {
            background-color: #fff;
        }
        .carousel-item>img{
            top: 0;
            left: 0;
            background-size: cover;
            background-repeat: no-repeat;
            max-width: 100%;
            max-height:100%;
            height:100vh;
        }
        @media only screen and (min-width: 360px) and (max-width: 640px) {
            .carousel-item>img{
                top: 0;
                left: 0;
                background-size: cover;
                background-repeat: no-repeat;
                max-width: 100%;
                min-height:100%;
                height:40vh;
            }
        }
        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            .carousel-item>img{
                top: 0;
                left: 0;
                background-size: cover;
                background-repeat: no-repeat;
                max-width: 100%;
                min-height:100%;
                height:40vh;
            }
        }
        /* .carousel-item>img {
            position: absolute;
            top: 0;
            left: 0;
            background-size: cover;
            background-repeat: no-repeat;
        } */
        .carousel-item h3{
            font-weight:bold;
            color: white;
            text-shadow: .1em .1em .2em rgba(0, 0, 0, 0.9);
        } 
        a {
            color: black;
            font-family: 'Kanit', sans-serif;
            text-decoration: none;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }

        .navbar-nav a {
            font-size: 18px;
        }

        .back-to-top {
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
        }

        nav,
        .popular_text,
        .catego,
        .font {
            font-family: 'Kanit', sans-serif;
        }
        p {
            margin-bottom: 0 }
        p + p {
            text-indent: 1.5em;
            margin-top: 0 }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144774262-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-144774262-1');
    </script>

</head>

<body>
    <div class="container">
        <!-- Title Header -->
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center pt-5 pb-3">
                    <!-- <h4 class="text-center pl-4" style="transform: rotate(-90deg);display: inline-block;border-bottom: 4px solid #0064ca;padding: 0;">THE</h4> -->
                    <b class="display-4 text-center" style="display: inline-block;">ห้องพยาบาล วิทยาลัยเทคนิคเชียงใหม่</b>
                    <div style="letter-spacing: 8px">เว็บไซต์ประชาสัมพันธ์ข่าวสาร </div>
                    <div style="letter-spacing: 8px">ห้องพยาบาลวิทยาลัยเทคนิคเชียงใหม่</div>
                </div>
            </div>
        </div>
        <!-- End Title Header -->

        <!-- Navbar -->
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav mx-auto">
                            <a class="nav-item nav-link " href="../../index.php">หน้าแรก </a>
                            <a class="nav-item nav-link active" href="./about.php">เกี่ยวกับ <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="./contact.php">ติดต่อ</a>
                            <a class="nav-item nav-link" href="../../Login/index.php">เข้าสู่ระบบ</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navbar -->
        <hr>
        
        <!-- content -->
        <div class=" float-left mr-3 mt-3" style="height:60px;width:15px;background-color: #0064CA;">
        </div>
        <h1 class="p-3 display-4 content_text font">ความเป็นมาของเว็บไซต์ </h1>
        <div class="row popular_text">
            <div class="col-sm-8 py-2">
                <p>ในปัจจุบันห้องพยาบาลหลาย ๆแห่งไม่ว่าจะเป็นห้องพยาบาลของโรงเรียน วิทยาลัย มหาวิทยาลัยล้วนประสบปัญหาด้านการจัดการข้อมูลและสถิติผู้ใช้งาน รวมไปถึงปัญหาด้านอื่น ๆ เช่น ปัญหาการจัดเก็บข้อมูลครุภัณฑ์ ยา อุปกรณ์ทางการแพทย์ เนื่องจากรูปเดิมของการจัดเก็บข้อมูลยังคงเป็นรูปแบบเอกสารธรรมดา และใช้เจ้าหน้าที่เป็นผู้เขียนบันทึกข้อมูลโดยตรง ทำให้ข้อมูลมีผิดพลาดสูงและเสี่ยงต่อการสูญหายของข้อมูล ดังนั้นในสถานศึกษาทุกแห่งจำเป็นและต้องมีระบบที่เกี่ยวข้องกับห้องพยาบาล เพื่อให้คนมาใช้บริการเกิดความสะดวกมากขึ้น</p>	
                <p>ผู้พัฒนาระบบได้เล็งเห็นปัญหาดังกล่าว จึงได้สร้างเว็บไซต์นี้ขึ้นมาโดยที่เว็บไซต์นี้สามารถจัดเก็บข้อมูลผู้มาใช้บริการห้องพยาบาลได้และสามารถเก็บข้อมูลบุคลกรทางการศึกษาที่มาใช้บริการได้ในแต่ละวัน และในส่วนของผู้ดูแลระบบยังสามารถตรวจสอบจำนวนครุภัณฑ์ ยา อุปกรณ์ทางการแพทย์ได้ และยังสามารถดูจำนวนการเข้าใช้งานห้องพยาบาลได้ </p>
	            <p>ผู้พัฒนาระบบคาดว่าเว็บไซต์นี้จะเป็นประโยชน์ต่อผู้มาใช้บริการห้องพยาบาล และเจ้าหน้าที่ที่ปฏิบัติงานในห้องพยาบาล เมื่อเกิดกรณีฉุกเฉินเจ้าหน้าที่สามารถตรวจสอบข้อมูลผู้มาใช้บริการและผู้มาใช้บริการเองก็สามารถทราบข้อมูลและสถิติการเข้าใช้บริการห้องพยาบาลได้ด้วยตนเอง</p>
            </div>
            <div class="col-md-4">
                <b>
                    <div class=" float-left mr-3 mt-3" style="height:25px;width:15px;background-color: #0064CA;">
                    </div>
                    <h5 class="pt-3 pl-1 popular_text"><b>ข่าวประชาสัมพันธ์ล่าสุด</b></h5>
                    <hr>
                </b>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            $sql = "SELECT * FROM `allpost`   WHERE `published` = 'y' ORDER BY `date` DESC LIMIT 3 ;";
                            $query = mysqli_query($conn, $sql);
                            while ($d = mysqli_fetch_array($query)) {
                        ?>
                        <div class="card float-left mt-2 shadow">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-lg-4" align="center">
                                        <img src="./img/img/<?php echo $d[2]; ?>" style="width:100px;height:80px;" >
                                    </div>
                                    <div class="col-lg-8">
                                        <h5> <a class="card-title" href="../../previewcontentpost.php?id=<?php echo $d[0]; ?>"><?php echo $d[1]?></a></h5>
                                        <p class="card-text"><small class="text-muted">วันที่ : <?php echo $d[4] ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>   
                    </div>
                </div>
                <br>
                <b>
                    <div class=" float-left mr-3 mt-3" style="height:25px;width:15px;background-color: #0064CA;">
                    </div>
                    <h5 class="pt-3 pl-1 popular_text"><b>เอกสารดาวน์โหลด</b></h5>
                    <hr>
                </b>
                <div class="row">
                    <div class="col-md-12">
                    <?php
                        $serverName = "localhost";
                        $userName = "root";
                        $userPassword = "Ice@2019";
                        $dbName = "file-management";
                        $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
                        mysqli_set_charset($conn,"utf8");
                        
                        $sql = "SELECT * FROM `files`   WHERE `published` = 'y' ORDER BY `date` DESC LIMIT 3 ;";
                        $query = mysqli_query($conn, $sql);
                        while ($d = mysqli_fetch_array($query)) {
                          
                    ?>
                        <div class="card float-left mt-2 shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4" align="center">
                                        <img src="./upload_download/uploads/img/<?php echo $d[1] ?>" style="width:90px;height:90px;">
                                    </div>
                                    <div class="col-lg-8 text-center">
                                            <h6 class="card-title"><?php echo substr($d[2], 0, 88). "..." ?></h6>
                                            <h6 style="font-size:14px">จำนวนดาวน์โหลด : <?php echo $d[5]; ?> ครั้ง</h6>
                                            <!-- <a href="./admin/page/upload_download/uploads/file/<?php echo $d[2]?>" style="color:red;">Download</a> -->
                                            <a href="./upload_download/downloads.php?path=<?php echo $d[2]?>&id=<?php echo $d[0]?>" style="color:red;">Download</a>
                                            <p class="card-text"><small class="text-muted">วันที่โพสต์ : <?php echo $d[7]; ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        
    </div>
    <!-- End content -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="fa fa-angle-up"></span></a>
    <style>
        * {
            font-family: 'Kanit', sans-serif;
        }

        .page-footer {
            color: #FFFFFF;
            background-color: #292C2F;
        }

        .footer-copyright {
            color: #FFFFFF;
            background-color: #292C2F;
        }
    </style>
    <!-- Footer -->
    <br>
    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row ">

                <!-- Grid column -->
                <div class="col-md-6  mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase"> <b>ห้องพยาบาลวิทยาลัยเทคนิคเชียงใหม่</b></h5>
                    <p>เป็นเว็บไซต์เกี่ยวกับการแจ้งเตือนข่าวประชาสัมพันธ์</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">ติดต่อเรา</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.facebook.com/itcmtc/" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAaVBMVEU6VZ////81Up0yT5xgc61+jbsvTZyXo8hFXaOirM0nSJmlrs7O1OUkRpkfQ5c1UZ1oerKHlcDp6/M9WKHHzeHV2ulxgravt9Td4Ozl6PGDkb7ByN5YbatQZ6j29/q3v9h2hrhMY6aQnMSsAnKHAAAC70lEQVR4nO3caXLiMBRFYdoihhhsQ5jDlPT+F9mdqv7bRrYQ7z7XOQug9BUWHiQzmRARERERERERERERERERqVe0IZQPCtaDHFwo62Yz/VrP3jtbrH0Sy7rYH46/YtpV1oPtX6jCbBel+2npThjq/Taa51AYmrdTH583YdHsP/r5nAnLTa/j05+w+ezv8yRsq/MQoB9hmPeegb6E5eU2DOhFWK4G+rwIw3CgD2G4Dge6ELaboXPQi7CJu4nwK6zvKUAHwvCVBHQgrFMmoQdh4jGqL2wviUB5YRP/uMKnsJ2mAtWF9XLkwjblcs2FsDqMXZh6LpQXhn06UFtYpZ7t5YX1wEczboTF/AlAaWFYP0OovPZU9pmGt9194W79sIq/Jt2uqqrytwbcxJ4NT9e6tR7soEIk8N749E2K7zjgubEe6dAi75yOboGxwrnTQ/RvRZTwIHy6e1SccF5Yj3N4UcJjbT3MhKKEh9J6mAlFCZWvyR4WJXxDqBxChPohRKgfQoT6IUSoH0KE+iFEqB9ChPqNQ1h0vKJcxWwt/aofvelsDFzNOlpECO9dH/DT+8ZUWMYgErNdfXuB8Ga7RPwCofHy2wuE59EfpQvbH9MXCNejF65st2q8QPhtu5Mhv/BmfE2TX/hhvGMqv3BpvBslv/BuvGUqv3A2+nloff+YX3gx3rmYX2j9CCC78Ga9NzO78GS9dTG7cDv679B8c2Z24e/R/9LsRy+8Wm/kzy60nobZhdb3TvmF9u8e5hYaP0p8gfB99PPQ/l2F3MKp+StDuYXWvuxC60eJ+YXm907ZhQJ/NlA+4d9ZOrrbH6WTzbyjmL+D/Oz6BNsl/H8V/y9E7TYpOz7BGveoceyn6QohQv0QItQPIUL9ECLUDyFC/RAi1A8hQv0QItQPIUL9ECLUDyFC/RAi1A8hQv0QItQPIUL9ECLUDyFC/RAi1A8hQv0QItQPIUL9ECLUDyFC/RAi1A8hQv0QItQPIUL9ECLs0R8aFUYEFLSeAgAAAABJRU5ErkJggg==" class="rounded-circle" alt="Cinque Terre" width="40" height="40"></a>

                            <!-- <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-twitter-512.png" class="rounded-circle" alt="Cinque Terre" width="40" height="40"> -->
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="http://it.cmtc.ac.th/web2017/" style="color: #FFFFFF;">it.cmtc.ac.th</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            $('#back-to-top').click(function() {
                $('#back-to-top').tooltip('hide');
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });

            $('#back-to-top').tooltip('show');

        });
        $("p").click(function(){
            
        });
    </script>
</body>

</html>