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
    <link rel="stylesheet" href="./content/css/product.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <style>
        .background4 {
            background-image: url('./content/image/background/background4.jpg');
        }

        /* 
        .subSuccess {
            background-image: url('./content/image/background/bg-subSuccess.jpg');
        } */

        .nunito {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="nunito relative">
    <div id="main" class="hidden">
        <header class="relative">
            <img src="../../DA1/assets/img/z2442575024821_3a4b4fc54004bb1687d54eeda5693da1.jpg" alt="">
            <div id="navbar" class="absolute top-0 left-0 right-0 flex mt-8 px-32 bg-blue-300">
                <?php require "menu.php"; ?>
            </div>
            <div class="bg-blue-400 bg-opacity-50 absolute top-0 left-0 right-0">
                <?php require "headerTop.php"; ?>
            </div>
            <div class="absolute bottom-0 left-0 right-0 mx-64 pt-5 bg-white bg-opacity-80 rounded-t-md">
                <h3 class="font-bold text-2xl uppercase text-center "><a href="">Tour của bạn</a></h3>
                <img class="w-20 mx-auto" src="./content/image/gachvang.png" alt="">
            </div>
        </header>
        <main class="container mx-auto">
            <section class="flex container mx-auto my-10">
                <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="index.php">Trang chủ</a></h3>
                <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
                <h3><a class="uppercase text-sm" href="tourNoithanh.php">Đơn tour</a></h3>
            </section>
            <section class="grid grid-cols-12 gap-5">
                <aside class="col-span-3">
                    <form method="POST" class="border p-5 overflow-hidden bg-fixed">
                        <h2 class="text-2xl font-bold my-5 text-center">Thông tin khách hàng</h2>
                        <div class="mt-5">
                            <span class="">Tên đăng nhập</span>
                            <input disabled class=" my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="Tên đăng nhập" id="lastname" name="lastName">
                        </div>
                        <!-- end lastname -->
                        <div class="mt-5">
                            <span class="">Email</span>
                            <input disabled class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="Email" id="email" name="email">
                        </div>
                        <!-- end mail -->
                        <div class="mt-5">
                            <span class="">Số điện thoại</span>
                            <input disabled class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="Số điện thoại" id="phone" name="phone">
                        </div>
                        <div class="mt-5">
                            <span class="">Địa chỉ</span>
                            <input disabled class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="Địa chỉ" id="address" name="phone">
                        </div>
                        <!-- <div class="flex justify-center items-center">
                        <button class="mt-5 border hover:border-yellow-300 hover:bg-white rounded-lg px-10 py-2 text-lg focus:outline-none bg-blue-300 hover:text-black" name="btn_regis"><a href="success.php">Đặt ngay</a></button>
                    </div> -->
                        <!-- end submit -->
                    </form>
                </aside>
                <table class="w-full col-span-9">
                    <thead>
                        <tr>
                            <th class="border px-2 py-2">STT</th>
                            <th class="border px-2 py-2" style="width:120px">Mã đặt tour</th>
                            <th class="border px-2 py-2">Tên tour</th>
                            <th class="border px-2 py-2" style="width:120px">Giá tour</th>
                            <th class="border px-2 py-2" style="width:110px">Số người lớn</th>
                            <th class="border px-2 py-2" style="width:90px">Số trẻ em</th>
                            <th class="border px-2 py-2" style="width:100px">Trạng thái</th>
                            <th class="border px-2 py-2" style="width:100px">Hủy tour</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="border">
                            <td class="border px-2">1</td>
                            <td class="border px-2">15786</td>
                            <td class=" flex justify-between py-2">
                                <img class="px-2" style="height: 70px;width: 120px;" src="./content/image/1.jpg" alt="">
                                <span class="flex items-center">LĂNG CHỦ TỊCH - BẢO TÀNG DÂN TỘC HỌC - VĂN MIẾU QUỐC TỬ
                                    GIÁM - CHÙA TRẤN QUỐC</span>
                            </td>
                            <td class="border">1,500,000₫</td>
                            <td class="border">1</td>
                            <td class="border"></td>
                            <td class="border">Chưa xử lý</td>
                            <td class="border"><button class="flex mx-auto items-center focus:outline-none text-xl"><i class="far fa-trash-alt hover:text-red-500 text-gray-400"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
        <footer class="background4 bg-opacity-10 mt-10">
            <?php require "footer.php"; ?>
        </footer>
    </div>
    <div id="show" class="relative h-screen overflow-hidden">

        <img class="opacity-50" src="../../DA1/assets/img/z2442570690349_c0c3989dee82c622453e8636ffd3924b.jpg" alt="">
        <div class="grid grid-cols-2 mx-auto container bg-white absolute top-0 bottom-0 left-0 right-0 my-auto" style="height: 450px;">
            <div class="ml-28 my-auto">
                <span class="block text-4xl font-bold uppercase">đặt tour thành công</span>
                <span class="block capitalize text-sm text-center my-3">cảm ơn quý khách đã quan tâm đến
                    Hanoitourist</span>
                <span class="block bg-gray-300 py-2 px-10 text-center font-bold my-3">Tour du lịch của Quý Khách đang
                    được xử lý</span>
                <div class="bg-pink-400 py-2 my-3">
                    <span class="block font-bold text-white text-center text-2xl">Mã số đặt tour của Quý Khách là</span>
                    <span class="block font-bold text-white text-center text-4xl pt-2">12768</span>
                </div>
                <p class="block text-center">Nhân viên của chúng tôi sẽ liên hệ với Quý Khách trong thòi gian sớm nhất.
                    Nếu có thắc mắc, Quý Khách vui lòng liên hệ qua số hotline <span class="text-red-500">1900
                        1000</span>.</p>
                <span class="block text-center"> Xin chân thành cảm ơn Quý khách hàng!</span>
            </div>
            <div class="my-auto relative">
                <button id="btn_show" class="absolute top-0 right-0 px-5 focus:outline-none"><i class="far fa-times-circle text-3xl hover:text-red-500 text-gray-400"></i></button>
                <img class="object-fill mx-auto rounded-full" style="height: 415px;width: 415px;" src="../../DA1/assets/img/z2442573052526_0944d5cc483994f6b879511bc32e366a.jpg" alt="">
            </div>
        </div>

    </div>
    <script>
        var show = document.getElementById("show");
        var main = document.getElementById("main");
        var btn_show = document.getElementById("btn_show");

        btn_show.addEventListener("click", function() {
            show.style.display = "none";
            main.style.display = "block";
        })
    </script>
</body>

</html>