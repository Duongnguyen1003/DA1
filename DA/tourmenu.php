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

    .nunito {
        font-family: 'Nunito', sans-serif;
    }
    </style>
</head>

<body class="nunito relative">
    <div id="main">
        <header class="relative">
            <img src="../../DA1/assets/img/bg-cart.jpg" alt="">
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
                <form method="POST" class="border p-5 col-span-3 overflow-hidden">
                    <h2 class="text-2xl font-bold my-5 text-center">Thông tin khách hàng</h2>
                    <div class="mt-5">
                        <span class="">Tên đăng nhập</span>
                        <input disabled
                            class=" my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full"
                            type="text" placeholder="Tên đăng nhập" id="lastname" name="lastName">
                    </div>
                    <!-- end lastname -->
                    <div class="mt-5">
                        <span class="">Email</span>
                        <input disabled
                            class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full"
                            type="text" placeholder="Email" id="email" name="email">
                    </div>
                    <!-- end mail -->
                    <div class="mt-5">
                        <span class="">Số điện thoại</span>
                        <input disabled
                            class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full"
                            type="text" placeholder="Số điện thoại" id="phone" name="phone">
                    </div>
                    <div class="mt-5">
                        <span class="">Địa chỉ</span>
                        <input disabled
                            class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full"
                            type="text" placeholder="Địa chỉ" id="address" name="phone">
                    </div>
                    <!-- <div class="flex justify-center items-center">
                        <button class="mt-5 border hover:border-yellow-300 hover:bg-white rounded-lg px-10 py-2 text-lg focus:outline-none bg-blue-300 hover:text-black" name="btn_regis"><a href="success.php">Đặt ngay</a></button>
                    </div> -->
                    <!-- end submit -->
                </form>
                <table class="w-full col-span-9">
                    <thead>
                        <tr>
                            <th class="border px-2 py-2">STT</th>
                            <th class="border px-2 py-2">Mã đặt tour</th>
                            <th class="border px-2 py-2">Tên tour</th>
                            <th class="border px-2 py-2">Giá tour</th>
                            <th class="border px-2 py-2">Số người lớn</th>
                            <th class="border px-2 py-2">Số trẻ em</th>
                            <th class="border px-2 py-2">Hủy tour</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="border">
                            <td class="border px-2">1</td>
                            <td class="border px-2">15786</td>
                            <td class=" flex justify-between py-2">
                                <img class="px-2" style="height: 120px;width: 240px;" src="./content/image/1.jpg"
                                    alt="">
                                <span class="flex items-center">LĂNG CHỦ TỊCH - BẢO TÀNG DÂN TỘC HỌC - VĂN MIẾU QUỐC TỬ
                                    GIÁM - CHÙA TRẤN QUỐC</span>
                            </td>
                            <td class="border px-2">1,500,000 ₫</td>
                            <td class="border px-2">1</td>
                            <td class="border px-2"></td>
                            <td class="border px-2"><button
                                    class="flex mx-auto items-center focus:outline-none text-xl"><i
                                        class="far fa-trash-alt"></i></button></td>
                        </tr>
                        <tr class="border">
                            <td class="border px-2">2</td>
                            <td class="border px-2">15786</td>
                            <td class=" flex justify-between py-2">
                                <img class="px-2" style="height: 120px;width: 240px;" src="./content/image/1.jpg"
                                    alt="">
                                <span class="flex items-center">LĂNG CHỦ TỊCH - BẢO TÀNG DÂN TỘC HỌC - VĂN MIẾU QUỐC TỬ
                                    GIÁM - CHÙA TRẤN QUỐC</span>
                            </td>
                            <td class="border px-2">1,500,000 ₫</td>
                            <td class="border px-2">1</td>
                            <td class="border px-2"></td>
                            <td class="border px-2"><button
                                    class="flex mx-auto items-center focus:outline-none text-xl"><i
                                        class="far fa-trash-alt"></i></button></td>
                        </tr>
                        <tr class="border">
                            <td class="border px-2">2</td>
                            <td class="border px-2">15786</td>
                            <td class=" flex justify-between py-2">
                                <img class="px-2" style="height: 120px;width: 240px;" src="./content/image/1.jpg"
                                    alt="">
                                <span class="flex items-center">LĂNG CHỦ TỊCH - BẢO TÀNG DÂN TỘC HỌC - VĂN MIẾU QUỐC TỬ
                                    GIÁM - CHÙA TRẤN QUỐC</span>
                            </td>
                            <td class="border px-2">1,500,000 ₫</td>
                            <td class="border px-2">1</td>
                            <td class="border px-2"></td>
                            <td class="border px-2"><button
                                    class="flex mx-auto items-center focus:outline-none text-xl"><i
                                        class="far fa-trash-alt"></i></button></td>
                        </tr>
                        <tr class="border">
                            <td class="border px-2">3</td>
                            <td class="border px-2">15786</td>
                            <td class=" flex justify-between py-2">
                                <img class="px-2" style="height: 120px;width: 240px;" src="./content/image/1.jpg"
                                    alt="">
                                <span class="flex items-center">LĂNG CHỦ TỊCH - BẢO TÀNG DÂN TỘC HỌC - VĂN MIẾU QUỐC TỬ
                                    GIÁM - CHÙA TRẤN QUỐC</span>
                            </td>
                            <td class="border px-2">1,500,000 ₫</td>
                            <td class="border px-2">1</td>
                            <td class="border px-2"></td>
                            <td class="border px-2"><button
                                    class="flex mx-auto items-center focus:outline-none text-xl"><i
                                        class="far fa-trash-alt"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
        <footer class="background4 bg-opacity-10 mt-10">
            <?php require "footer.php"; ?>
        </footer>
    </div>
    <div id="selectVoucher" class="absolute bottom-0 mx-170 my-180 items-center border bg-white">
        <div class="relative">
            <button id="apply" class="py-2 px-8 absolute border bg-yellow-500  " style="right:20px; top:69px;">Áp
                dụng</button>
            <form>
                <h2 class="text-2xl py-2 px-5 bg-yellow-500 bg-opacity-50 font-bold">Chọn Hanoitourist Voucher</h2>
                <div class="flex py-3 justify-items-center bg-gray-100 px-5 my-2">
                    <span class="py-2">Mã Voucher</span>
                    <input id="codeVoucher" value="" class="border px-3 focus:outline-none mx-5 py-2 w-80" type="text"
                        placeholder="Mã giảm giá" name="">
                </div>
                <div id="voucher1" class="grid grid-cols-4 gap-5 cursor-pointer mx-5 my-5 shadow-md">
                    <img class="col-span-1 my-auto" src="./content/image/Thẻ thành viên/5.png" alt="">
                    <div class=" col-span-2">
                        <label class="font-bold nameVoucher" for="">Voucher SEA (tour 5 - 10 người)</label>
                        <ul>
                            <li class="list-inside list-disc py-1">Giảm <span class="font-bold">3%</span> tổng giá tiền
                                cho các tour</li>

                        </ul>
                    </div>
                    <input class="mx-auto my-auto col-span-1 focus:outline-none" type="radio" name="check" id="">
                </div>
                <div id="voucher2" class="grid grid-cols-4 gap-5 cursor-pointer mx-5 my-5 shadow-md">
                    <img class="col-span-1 my-auto" src="./content/image/Thẻ thành viên/7.png" alt="">
                    <div class=" col-span-2">
                        <label class="font-bold nameVoucher" for="">Voucher SKY (tour 11 - 15 người)</label>
                        <ul>
                            <li class="list-inside list-disc py-1">Giảm <span class="font-bold">5%</span> tổng giá tiền
                                cho các tour</li>

                        </ul>
                    </div>
                    <input value="dd" class="mx-auto my-auto col-span-1 focus:outline-none" type="radio" name="check"
                        id="">
                </div>
                <div id="voucher3" class="grid grid-cols-4 gap-5 cursor-pointer mx-5 my-5 shadow-md">
                    <img class="col-span-1 my-auto" src="./content/image/Thẻ thành viên/10.1.png" alt="">
                    <div class=" col-span-2">
                        <label class="font-bold nameVoucher" for="">Voucher SUN (tour 16 - 20 người)</label>
                        <ul>
                            <li class="list-inside list-disc py-1">Giảm <span class="font-bold">7%</span> tổng giá tiền
                                cho các tour</li>

                        </ul>
                    </div>
                    <input class="mx-auto my-auto col-span-1 focus:outline-none" type="radio" name="check" id="">
                </div>
                <span class="text-gray-500 mx-5">* Đã hiển thị tất cả Hanoitourist voucher thuộc mục Voucher của hãng
                    cung cấp.</span>

            </form>
        </div>
        <div class="flex justify-end mx-5 my-10">
            <button id="back" class="border hover:bg-yellow-500 border-yellow-500 px-14 py-1 mx-3 focus:outline-none"><a
                    href="#">Trở lại</a></button>
            <button id="clickok" class="border bg-yellow-500 border-yellow-500 px-14 py-1">OK</button>
        </div>
    </div>
    <script>
    var voucher = document.getElementById("voucher");
    var selectVoucher = document.getElementById("selectVoucher");
    var main = document.getElementById("main");
    var voucher1 = document.getElementById("voucher1");
    var voucher2 = document.getElementById("voucher2");
    var voucher3 = document.getElementById("voucher3");
    var showVoucher = document.getElementById("showVoucher");
    var nameVoucher = document.querySelectorAll(".nameVoucher");
    var back = document.getElementById("back");
    selectVoucher.style.display = "none";
    var check = document.getElementsByName("check");
    var codeVoucher = document.querySelector("#codeVoucher");
    var apply = document.querySelector("#apply");


    voucher.addEventListener("click", function() {
        selectVoucher.style.display = "block";
        main.style.background = "#999999";
        main.style.opacity = "0.5";
    })
    back.addEventListener("click", function() {
        selectVoucher.style.display = "none";
        main.style.background = "white";
        main.style.opacity = "1";
    })
    voucher1.style.filter = "grayscale(100%)";
    voucher2.style.filter = "grayscale(100%)";


    var clickok = document.getElementById("clickok");

    clickok.addEventListener("click", function() {
        selectVoucher.style.display = "none";
        main.style.background = "white";
        main.style.opacity = "1";
        for (var i = 0; i < check.length; i++) {
            if (check[i].checked == true) {
                showVoucher.innerHTML = nameVoucher[i].innerHTML;
                showVoucher.style.display = "block";
                showVoucher.style.borderColor = "#e5e7eb";
                showVoucher.style.backgroundColor = "#f9f9fa";
            }
        }
    })
    apply.addEventListener("click", function() {
        selectVoucher.style.display = "none";
        main.style.background = "white";
        main.style.opacity = "1";

        showVoucher.innerHTML = codeVoucher.value;
        showVoucher.style.display = "block";
        showVoucher.style.borderColor = "#e5e7eb";
        showVoucher.style.backgroundColor = "#f9f9fa";
    })
    // clickOk.addEventListener("click", function() {
    //     function enableBodyScroll() {
    //         if (document.readyState === 'complete') {
    //             document.body.style.position = '';
    //             document.body.style.overflowY = '';

    //             if (document.body.style.marginTop) {
    //                 const scrollTop = -parseInt(document.body.style.marginTop, 10);
    //                 document.body.style.marginTop = '';
    //                 window.scrollTo(window.pageXOffset, scrollTop);
    //             }
    //         } else {
    //             window.addEventListener('load', enableBodyScroll);
    //         }
    //     }
    //     enableBodyScroll();
    // })
    </script>
</body>

</html>