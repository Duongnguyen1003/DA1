<?php
include "../../DA1/examples/local.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" type="text/css" href="./content/slick-1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./content/slick-1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="./content/build/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap" rel="stylesheet">
    <style>
        .background1 {
            background-image: url('./content/image/background/background1.jpg');
        }

        .background2 {
            background-image: url('./content/image/background/background2.jpg');
        }

        .background3 {
            background-image: url('./content/image/background/background3.jpg');
        }

        .background4 {
            background-image: url('./content/image/background/background4.jpg');
        }

        .background5 {
            background-image: url('./content/image/background/background5.jpg');
        }

        .nunito {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="nunito">
    <header>
        <div class="relative">
            <div class="sliderBanner overflow-hidden">
                <?php
                $sqll = "select * from slide";
                $totall = $local->query($sqll);
                foreach ($totall as $values) {
                ?>
                    <img style="height: 1000px;" class="focus:outline-none" src="../../DA1//assets/img/<?php echo $values['slide'] ?>" alt="">
                <?php } ?>
            </div>
            <div class="bg-blue-400 bg-opacity-50 absolute top-0 left-0 right-0">
                <?php require "headerTop.php"; ?>
            </div>
            <div id="navbar" class="absolute top-0 left-0 right-0 flex mt-8 px-32 bg-blue-300 bg-opacity-50">
                <?php require "menu.php"; ?>
            </div>
            <div class="absolute bottom-0 left-0 mx-72 my-20">
                <p class="text-white text-base">HANOITOURIST – ĐI VÀ TRẢI NGHIỆM MỌI THỨ</p>
                <h2 class="text-white text-4xl py-1 font-bold">ĐỒNG HÀNH CÙNG BẠN
                </h2>
                <h2 class="text-white text-4xl py-1 font-bold">TRÊN MỌI NẺO ĐƯỜNG
                </h2>
            </div>
        </div>
    </header>
    <section class="container mx-auto my-10">
        <div class="text-center">
            <p>Điểm đến trên cả tuyệt vời</p>
            <div class="py-5">
                <h3 class="font-bold text-2xl uppercase">tour lễ 30/04 - 01/05</h3>
                <img class="w-20 mx-auto mt-2" src="./content/image/gachvang.png" alt="">
            </div>
        </div>
        <div class="grid grid-cols-2 gap-20">
            <div class="relative group">
                <a class="" href="#">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:scale-105 object-fill" src="./content/image/1.jpg" alt="" style="width: 726px; height: 443px;">
                    </div>
                    <img class="absolute top-0 right-0 object-fill" src="../assets/img/hot-travel-small.png" alt="" style="height: 100px; width: 150px;">
                    <div class="absolute left-0 right-0 bottom-0 mx-px mb-5 flex justify-center items-center uppercase text-white shadow-lg bg-black bg-opacity-50 hover:text-blue-400">
                        <div class="text-center py-2">
                            <h4>Lăng Bác - Hoàng Thành - Phố cổ</h4>
                            <p class="my-px">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star-half-alt text-yellow-300"></i>
                            </p>
                            <span class="mr-3 line-through text-gray-500 text-lg">
                            </span>
                            <span class="text-lg font-bold">5,900,000₫</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="relative group">
                <a class="" href="#">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:scale-105 w-full" src="./content/image/1.jpg" alt="">
                    </div>
                    <img class="absolute top-0 right-0 object-fill" src="../assets/img/hot-travel-small.png" alt="" style="height: 100px; width: 150px;">
                    <div class="absolute left-0 right-0 bottom-0 mx-px mb-5 flex justify-center items-center uppercase text-white shadow-lg bg-black bg-opacity-50 hover:text-blue-400">
                        <div class="text-center py-2">
                            <h4>Lăng Bác - Hoàng Thành - Phố cổ</h4>
                            <p class="my-px">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star-half-alt text-yellow-300"></i>
                            </p>
                            <span class="mr-3 line-through text-gray-500 text-lg">
                            </span>
                            <span class="text-lg font-bold">5,900,000₫</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="mt-20 background1 py-10">
        <div class="text-center">
            <p>Chọn ngay cho bạn tour phù hợp</p>
            <div class="py-5">
                <h3 class="font-bold text-2xl uppercase"><a href="">điểm đến nội thành</a></h3>
                <img class="w-20 mx-auto pt-3" src="./content/image/gachvang.png" alt="">
            </div>
        </div>
        <div class="noiThanh container mx-auto">
            <?php
            $sqlls = "select tour.id_tour, name_tour, price, promotional , category.id_category, category.id_parent, images.image_main, tour.id_image
            from tour 
            join category on category.id_category=tour.id_category 
            join images on tour.id_image=images.id_image
            where category.id_parent = 25";

            $totalls = $local->query($sqlls);
            foreach ($totalls as $row) {
                $rowstar = $row['id_tour'];
                $query = "select sum(comment.evaluate) as sumStar, COUNT(DISTINCT comment.username) as sumName, comment.id_tour from tour join comment on tour.id_tour=comment.id_tour where tour.id_tour = $rowstar";
                $resultquery = $local->query($query)->fetch();
            ?>
                <article class="mx-6 relative py-10 group focus:outline-none outline-none">
                    <a class="focus:outline-none" href="./product.php?id_tour=<?php echo $row['id_tour'] ?>">
                        <div class="overflow-hidden rounded-md border border-white">
                            <img class="transition duration-300 transform group-hover:scale-105 object-fill" src="../assets/img/<?php echo $row['image_main'] ?>" style="height: 282px; width: 462px;" alt="">
                        </div>
                        <div class="absolute left-0 right-0 bottom-0 mb-16 mx-px flex justify-center items-center text-white shadow-lg bg-black bg-opacity-50 hover:text-blue-400">
                            <div class="text-center py-2">
                                <h4 class="uppercase px-5"><?php echo $row['name_tour'] ?></h4>
                                <p class="my-px text-yellow-400">
                                    <?php
                                    if (!empty($resultquery['sumName'])) {
                                        $user = $resultquery['sumName'];
                                        $star = $resultquery['sumStar'];
                                        $result = $star / $user;
                                        $result;
                                        for ($i = 0; $i < $result; $i++) {
                                            echo '<i class="fas fa-star"></i>';
                                        }
                                    }
                                    ?>
                                </p>
                                <span class="mr-3 line-through text-red-400 text-lg">
                                    <?php if ($row['promotional'] > 0) {
                                        echo number_format($row['price'], 0, '.', ',');
                                    } ?>
                                </span>
                                <span class="text-lg font-bold"> <?php if ($row['promotional'] > 0) {
                                                                        echo number_format(($row['price'] - $row['promotional']), 0, '.', ',');
                                                                    } else {
                                                                        echo number_format($row['price'], 0, '.', ',');
                                                                    } ?>
                                    ₫/khách</span>
                            </div>
                        </div>
                    </a>
                </article>
            <?php  } ?>
        </div>
    </section>
    <section class="container mx-auto my-16 text-center">
        <div class="">
            <h3 class="font-bold text-2xl uppercase">lý do chọn HANOITOURIST</h3>
            <img class="w-20 mx-auto" src="./content/image/gachvang.png" alt="">
        </div>
        <div class="grid grid-cols-3 mx-24 gap-36 mt-10">
            <div>
                <img class="px-28" src="./content/image/lý do chọn/hotel.png" alt="">
                <h3 class="font-bold text-xl py-5">Tour được chọn lựa</h3>
                <p>Để mọi người - mọi nhà đều có thể đi du lịch với chất lượng tour hợp lý nhất.
                </p>
            </div>
            <div>
                <img class="px-28" src="./content/image/lý do chọn/customer-service.png" alt="">
                <h3 class="font-bold text-xl py-5">Hỗ trợ 24/7</h3>
                <p>Để mọi người - mọi nhà đều có thể đi du lịch với hỗ trợ tốt nhất.
                </p>
            </div>
            <div>
                <img class="px-28" src="./content/image/lý do chọn/best-price.png" alt="">
                <h3 class="font-bold text-xl py-5">Giá luôn tốt nhất</h3>
                <p>Để mọi người - mọi nhà đều có thể đi du lịch với giá thành hợp lý nhất.
                </p>
            </div>
        </div>
    </section>
    <section class="background3 bg-cover bg-center bg-fixed bg-no-repeat py-16 my-10">
        <div class="text-center">
            <p class="mx-150 py-2 text-white">Sự hài lòng của khách hàng làm niềm vui của chúng tôi</p>
            <div class="py-5">
                <h3 class="font-bold text-2xl uppercase text-white">thành quả của HANOITOURIST</h3>
                <img class="w-20 mx-225 pt-3" src="./content/image/gachtrang.png" alt="">
            </div>
        </div>
        <div class="grid grid-cols-4 container mx-auto px-28 gap-10">
            <div>
                <img class="px-28" src="./content/image/lý do chọn/airplane-around-earth.png" alt="">
                <div class="text-center">
                    <h3 class="font-bold text-4xl text-yellow-400 py-5">20,549+</h3>
                    <p class="text-white text-xl">Tour hoàn thành</p>
                </div>
            </div>
            <div>
                <img class="px-28" src="./content/image/lý do chọn/guest.png" alt="">
                <div class="text-center">
                    <h3 class="font-bold text-4xl text-yellow-400 py-5">60,419+</h3>
                    <p class="text-white text-xl">Khách hàng</p>
                </div>
            </div>
            <div>
                <img class="px-28" src="./content/image/lý do chọn/world.png" alt="">
                <div class="text-center">
                    <h3 class="font-bold text-4xl text-yellow-400 py-5">500+</h3>
                    <p class="text-white text-xl">Điểm tham quan</p>
                </div>
            </div>
            <div>
                <img class="px-28" src="./content/image/lý do chọn/truck.png" alt="">
                <div class="text-center">
                    <h3 class="font-bold text-4xl text-yellow-400 py-5">856+</h3>
                    <p class="text-white text-xl">Phương tiện</p>
                </div>
            </div>
        </div>
    </section>
    <section class="my-10 pt-10">
        <div class="text-center">
            <p>Chọn ngay cho bạn tour phù hợp</p>
            <div class="py-5">
                <h3 class="font-bold text-2xl uppercase"><a href="">điểm đến ngoại thành</a></h3>
                <img class="w-20 mx-auto" src="./content/image/gachvang.png" alt="">
            </div>
        </div>
        <div class="container mx-auto grid grid-cols-4 mb-3">
            <?php
            $sqlln = "select tour.id_tour, name_tour, price, promotional , category.id_category, category.id_parent, images.image_main, tour.id_image
            from tour 
            join category on category.id_category=tour.id_category 
            join images on tour.id_image=images.id_image
            where category.id_parent = 26 limit 1";

            $totalln = $local->query($sqlln);
            foreach ($totalln as $rown) {
                $rowstarn = $rown['id_tour'];
                $queryn = "select sum(comment.evaluate) as sumStar, COUNT(DISTINCT comment.username) as sumName, comment.id_tour from tour join comment on tour.id_tour=comment.id_tour where tour.id_tour = $rowstar";
                $resultqueryn = $local->query($queryn)->fetch();
            ?>
                <div class="col-span-2 mt-2">
                    <div class="relative group mr-2">
                        <a class="" href="../../DA1/DA/product.php?id_tour=<?php echo $rown['id_tour'] ?>">
                            <div class="overflow-hidden rounded-md border border-white">
                                <img class="transition duration-300 transform group-hover:scale-105 object-fill" src="../../DA1/assets/img/<?php echo $rown['image_main'] ?>" alt="" style="width: 758px; height: 463px;">
                            </div>
                            <div class="absolute left-0 right-0 bottom-0 mb-10  mx-px flex justify-center items-center uppercase text-white shadow-lg bg-black bg-opacity-50 hover:text-blue-400">
                                <div class="text-center ">
                                    <h4><?php echo $rown['name_tour'] ?></h4>
                                    <p class="my-px text-yellow-400">
                                        <?php
                                        if (!empty($resultqueryn['sumName'])) {
                                            $user = $resultquery['sumName'];
                                            $star = $resultquery['sumStar'];
                                            $result = $star / $user;
                                            $result;
                                            for ($i = 0; $i < $result; $i++) {
                                                echo '<i class="fas fa-star"></i>';
                                            }
                                        }
                                        ?>
                                    </p>
                                    <span class="mr-3 line-through text-gray-500 text-lg">
                                    </span>
                                    <span class="text-lg font-bold"><?php echo number_format($rown['price'], 0, '.', ',')  ?>
                                        ₫/khách</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
            <div class="col-span-2 grid grid-cols-2">
                <?php
                $sqllnn = "select tour.id_tour, name_tour, price, promotional , category.id_category, category.id_parent, images.image_main, tour.id_image
            from tour 
            join category on category.id_category=tour.id_category 
            join images on tour.id_image=images.id_image
            where category.id_parent = 26 order by id_tour desc limit 3";
                $totallnn = $local->query($sqllnn);
                foreach ($totallnn as $rownn) {
                    $rowstarnn = $rownn['id_tour'];
                    $querynn = "select sum(comment.evaluate) as sumStar, COUNT(DISTINCT comment.username) as sumName, comment.id_tour from tour join comment on tour.id_tour=comment.id_tour where tour.id_tour = $rowstar";
                    $resultquerynn = $local->query($querynn)->fetch();
                ?>
                    <article class="relative group m-2">
                        <a class="" href="../../DA1/DA/product.php?id_tour=<?php echo $rownn['id_tour'] ?>">
                            <div class="overflow-hidden rounded-md border border-white">
                                <img class="transition duration-300 transform group-hover:scale-105 object-fill" src="../../DA1/assets/img/<?php echo $rownn['image_main'] ?>" style="width: 366px; height: 223px;" alt="">
                            </div>
                            <div class="absolute left-0 right-0 bottom-0 mb-3 mx-px flex justify-center items-center uppercase text-white shadow-lg bg-black bg-opacity-50 hover:text-blue-400">
                                <div class="text-center ">
                                    <h4><?php echo $rownn['name_tour'] ?></h4>
                                    <p class="my-px text-yellow-400">
                                        <?php
                                        if (!empty($resultquerynn['sumName'])) {
                                            $user = $resultquery['sumName'];
                                            $star = $resultquery['sumStar'];
                                            $result = $star / $user;
                                            $result;
                                            for ($i = 0; $i < $result; $i++) {
                                                echo '<i class="fas fa-star"></i>';
                                            }
                                        }
                                        ?>
                                    </p>
                                    <span class="mr-3 line-through text-gray-500 text-lg">
                                    </span>
                                    <span class="text-lg font-bold"><?php echo number_format($rown['price'], 0, '.', ',')  ?>
                                        ₫/khách</span>
                                </div>
                            </div>
                        </a>
                    </article>
                <?php } ?>

                <div class="relative group m-2">
                    <a class="" href="#">
                        <div class="overflow-hidden rounded-md border border-white">
                            <img class="transition duration-300 transform group-hover:scale-105 w-full" src="./content/image/1.jpg" alt="">
                        </div>
                        <div class="absolute left-0 right-0 bottom-0 mb-3 mx-px flex justify-center items-center uppercase text-white shadow-lg bg-black bg-opacity-50 hover:text-blue-400">
                            <div class="text-center ">
                                <h4>Lăng Bác - Hoàng Thành - Phố cổ</h4>
                                <p class="my-px">
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fas fa-star-half-alt text-yellow-300"></i>
                                </p>
                                <span class="mr-3 line-through text-gray-500 text-lg">
                                </span>
                                <span class="text-lg font-bold">5,900,000₫</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="container mx-auto grid grid-cols-4 gap-10 mb-16">
        <div class="col-span-1">
            <div class="py-5 text-center">
                <h3 class="font-bold text-2xl uppercase">nhận xét</h3>
                <img class="w-20 mx-auto" src="./content/image/gachvang.png" alt="">
            </div>
            <div class="background5 binhLuan container mx-auto py-5 rounded-md">
                <div class="my-12 focus:outline-none">
                    <img class="mx-auto w-20 h-20 object-fill" src="./content/image/user.png">
                    <p class="my-3 text-center">
                        <i class="fas fa-star text-blue-500"></i>
                        <i class="fas fa-star text-blue-500"></i>
                        <i class="fas fa-star text-blue-500"></i>
                        <i class="fas fa-star text-blue-500"></i>
                        <i class="fas fa-star-half-alt text-blue-500"></i>
                    </p>
                    <span class="text-center block">Name</span>
                    <p class="mx-10 italic my-3 text-justify">Tôi đi tour vòng quanh Hà Nội thấy các dịch vụ của công ty
                        khá ổn
                        từ
                        khách sạn,
                        nhà
                        hàng,
                        phương tiện di
                        chuyển đến hành trình tham quan. Không phát sinh chi phí phụ là
                        điều
                        tuyệt với.</p>
                    <span class="text-center block">-tên tour-</span>
                </div>
                <div class="my-12 focus:outline-none">
                    <img class="mx-auto w-20 h-20 object-fill" src="./content/image/user.png">
                    <p class="my-3 text-center">
                        <i class="fas fa-star text-blue-500"></i>
                        <i class="fas fa-star text-blue-500"></i>
                        <i class="fas fa-star text-blue-500"></i>
                        <i class="fas fa-star text-blue-500"></i>
                        <i class="fas fa-star-half-alt text-blue-500"></i>
                    </p>
                    <span class="text-center block">Name</span>
                    <p class="mx-10 italic my-3 text-justify">Tôi đi tour vòng quanh Hà Nội thấy các dịch vụ của công ty
                        khá ổn
                        từ
                        khách sạn,
                        nhà
                        hàng,
                        phương tiện di
                        chuyển đến hành trình tham quan. Không phát sinh chi phí phụ là
                        điều
                        tuyệt với.</p>
                    <span class="text-center block">-tên tour-</span>
                </div>
                <div class="my-12 focus:outline-none">
                    <img class="mx-auto w-20 h-20 object-fill" src="./content/image/user.png">
                    <p class="my-3 text-center">
                        <i class="fas fa-star text-blue-500"></i>
                        <i class="fas fa-star text-blue-500"></i>
                        <i class="fas fa-star text-blue-500"></i>
                        <i class="fas fa-star text-blue-500"></i>
                        <i class="fas fa-star-half-alt text-blue-500"></i>
                    </p>
                    <span class="text-center block">Name</span>
                    <p class="mx-10 italic my-3 text-justify">Tôi đi tour vòng quanh Hà Nội thấy các dịch vụ của công ty
                        khá ổn
                        từ khách sạn,
                        nhà
                        hàng,
                        phương tiện di
                        chuyển đến hành trình tham quan. Không phát sinh chi phí phụ là
                        điều
                        tuyệt với.</p>
                    <span class="text-center block">-tên tour-</span>
                </div>
            </div>
        </div>
        <div class="col-span-3">
            <div class="py-5 text-center">
                <h3 class="font-bold text-2xl uppercase">cẩn nang du lịch</h3>
                <img class="w-20 mx-auto" src="./content/image/gachvang.png" alt="">
            </div>
            <div class="grid grid-cols-3 gap-10">
                <a class="group" href="">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80 object-fill" src="./content/image/201H-370x260.jpg" alt="" style="width: 352px;height: 247px;">
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-bold pt-2">Tất tần tật những kinh nghiệm bạn cần biết
                            trước khi du lịch Bình Ba
                        </h3>
                        <span class="text-sm group-hover:text-blue-400">7 Tháng Mười Hai,
                            2018</span>
                        <p class="py-8 group-hover:text-blue-400">Giới thiệu sơ lượt về đảo
                            Bình Ba Bình Ba là một đảo
                            nhỏ, diện [...]
                        </p>
                    </div>
                </a>
                <a class="group" href="">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80 object-fill" src="./content/image/201H-370x260.jpg" alt="" style="width: 352px;height: 247px;">
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-bold pt-2">Tất tần tật những kinh nghiệm bạn cần biết
                            trước khi du lịch Bình Ba
                        </h3>
                        <span class="text-sm group-hover:text-blue-400">7 Tháng Mười Hai,
                            2018</span>
                        <p class="py-8 group-hover:text-blue-400">Giới thiệu sơ lượt về đảo
                            Bình Ba Bình Ba là một đảo
                            nhỏ, diện [...]
                        </p>
                    </div>
                </a>
                <a class="group" href="">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80 object-fill" src="./content/image/201H-370x260.jpg" alt="" style="width: 352px;height: 247px;">
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-bold pt-2">Tất tần tật những kinh nghiệm bạn cần biết
                            trước khi du lịch Bình Ba
                        </h3>
                        <span class="text-sm group-hover:text-blue-400">7 Tháng Mười Hai,
                            2018</span>
                        <p class="py-8 group-hover:text-blue-400">Giới thiệu sơ lượt về đảo
                            Bình Ba Bình Ba là một đảo
                            nhỏ, diện [...]
                        </p>
                    </div>
                </a>
            </div>
    </section>
    <footer class="background4 bg-opacity-10 mt-10">
        <?php require "footer.php"; ?>
    </footer>

</body>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./content/slick-1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="./content/js/index.js"></script>
<!-- <script>
        var navbar = document.getElementById("navbar");
        window.addEventListener("scroll", function() {
                navbar.classList.toggle("sticky", window.scrollY > 0);
        })
</script> -->

</html>