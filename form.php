<?php
ob_start();
include("../servers/config.php");
$id = $_GET['id'];
$sql_up = "UPDATE `post_aeaw_chiang_mai` SET `traffic`=  `traffic` + 1 WHERE `id` = $id";
mysqli_query($conn, $sql_up);
$sql = "SELECT * FROM `post_aeaw_chiang_mai`WHERE `id` = $id;";
$query = mysqli_query($conn, $sql) or die("5555+");
$d = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $d[1] ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../asset/css/style_font.css">
    <meta property="og:url" content="http://it.cmtc.ac.th/3901-2107/61/a/AeawChiangMai/pages/content.php?id=<?php echo $id ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $d[1] ?>" />
    <!-- <meta property="og:description" content="<?php echo substr($d[3], 0, 60) . "..." ?>" /> -->
    <meta property="og:image" content="http://it.cmtc.ac.th/3901-2107/61/a/AeawChiangMai/img/<?php echo $d[2] ?>" />
    <style>
        .text-content {
            font-size: 17px;
        }

        .content-font {
            font-family: 'Kanit', sans-serif;
        }

        .back-to-top {
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
        }
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
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v4.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="container">
        <?php include("../components/header.php") ?>
    </div>
    <div class="container content-font">
        <div class="row">
            <div class="col-sm-12 ">
                <h1 class="mt-5"><?php echo $d[1] ?></h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-8">
                <div class="row mb-4">
                    <div class="colsm-1">
                        <img src="
                        <?php
                        $sql_img = "SELECT `profile` FROM `member_aeaw_chiang_mai` WHERE `id` = $d[7]";
                        $query_img = mysqli_query($conn, $sql_img);
                        while ($d_img = mysqli_fetch_array($query_img)) {
                            echo "../dashboard/dist/img/" . $d_img[0];
                        }
                        ?>" class="rounded-circle" alt="Cinque Terre" style=" object-fit: cover;border:3px solid #0064CA;" width="50" height="50">
                    </div>
                    <div class="col-sm-4">
                        Published on <?php echo $d[6] ?> <br>
                        By <?php
                            $sql2 = "SELECT `Fname`,`Lname` FROM `member_aeaw_chiang_mai` WHERE `id` = $d[7]";
                            $query2 = mysqli_query($conn, $sql2) or die(header('Location: ./404.php'));
                            while ($d2 = mysqli_fetch_array($query2)) {
                                echo $d2[0] . " " . $d2[1];
                            }
                            ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-content">
                        <div style="line-height: 26pt;font-size:18px;"><?php echo $d[3] ?></div>
                    </div>
                </div>

                <div class="row pb-3 text-white p-3" style="background-color: #0064CA;">
                    <div class="col-6">
                        Categories: <?php echo $d[4] ?> <br>
                        Tags: <?php echo $d[5] ?>
                    </div>
                    <div class="col-6">
                        แชร์บทความนี้ <br>
                        <div class="fb-share-button" 
    data-href="http://it.cmtc.ac.th/3901-2107/61/a/AeawChiangMai/pages/content.php?id=<?php echo $id ?>" 
    data-layout="button_count">
  </div>
                        <!-- <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAaVBMVEU6VZ////81Up0yT5xgc61+jbsvTZyXo8hFXaOirM0nSJmlrs7O1OUkRpkfQ5c1UZ1oerKHlcDp6/M9WKHHzeHV2ulxgravt9Td4Ozl6PGDkb7ByN5YbatQZ6j29/q3v9h2hrhMY6aQnMSsAnKHAAAC70lEQVR4nO3caXLiMBRFYdoihhhsQ5jDlPT+F9mdqv7bRrYQ7z7XOQug9BUWHiQzmRARERERERERERERERERqVe0IZQPCtaDHFwo62Yz/VrP3jtbrH0Sy7rYH46/YtpV1oPtX6jCbBel+2npThjq/Taa51AYmrdTH583YdHsP/r5nAnLTa/j05+w+ezv8yRsq/MQoB9hmPeegb6E5eU2DOhFWK4G+rwIw3CgD2G4Dge6ELaboXPQi7CJu4nwK6zvKUAHwvCVBHQgrFMmoQdh4jGqL2wviUB5YRP/uMKnsJ2mAtWF9XLkwjblcs2FsDqMXZh6LpQXhn06UFtYpZ7t5YX1wEczboTF/AlAaWFYP0OovPZU9pmGt9194W79sIq/Jt2uqqrytwbcxJ4NT9e6tR7soEIk8N749E2K7zjgubEe6dAi75yOboGxwrnTQ/RvRZTwIHy6e1SccF5Yj3N4UcJjbT3MhKKEh9J6mAlFCZWvyR4WJXxDqBxChPohRKgfQoT6IUSoH0KE+iFEqB9ChPqNQ1h0vKJcxWwt/aofvelsDFzNOlpECO9dH/DT+8ZUWMYgErNdfXuB8Ga7RPwCofHy2wuE59EfpQvbH9MXCNejF65st2q8QPhtu5Mhv/BmfE2TX/hhvGMqv3BpvBslv/BuvGUqv3A2+nloff+YX3gx3rmYX2j9CCC78Ga9NzO78GS9dTG7cDv679B8c2Z24e/R/9LsRy+8Wm/kzy60nobZhdb3TvmF9u8e5hYaP0p8gfB99PPQ/l2F3MKp+StDuYXWvuxC60eJ+YXm907ZhQJ/NlA+4d9ZOrrbH6WTzbyjmL+D/Oz6BNsl/H8V/y9E7TYpOz7BGveoceyn6QohQv0QItQPIUL9ECLUDyFC/RAi1A8hQv0QItQPIUL9ECLUDyFC/RAi1A8hQv0QItQPIUL9ECLUDyFC/RAi1A8hQv0QItQPIUL9ECLUDyFC/RAi1A8hQv0QItQPIUL9ECLs0R8aFUYEFLSeAgAAAABJRU5ErkJggg==" class="rounded-circle" alt="Cinque Terre" width="40" height="40"> -->
                        <!-- <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-twitter-512.png" class="rounded-circle" alt="Cinque Terre" width="40" height="40"> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <?php include("../components/aside.php") ?>
            </div>
        </div>
        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="fa fa-angle-up"></span></a>

        <div>
            <?php include("../components/footer.php") ?>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        new WOW().init();
        $(document).ready(function() {
            $('.text-content img').addClass("wow fadeInUp");
        });
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
    </script>
</body>

</html>