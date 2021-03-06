<?php
ob_start();
session_start();
include "../../DA1/examples/local.php";
if (isset($_GET['is_tour']));
$id = $_GET['id_tour'];
$sqlShow = "select * from tour join category on tour.id_category=category.id_category where id_tour = $id";
$showtour = $local->query($sqlShow)->fetch();
$parent = $showtour['id_parent'];
$category = $showtour['id_category'];
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
            <div id="navbar" class="absolute top-0 left-0 right-0 flex mt-8 px-32 bg-blue-300 bg-opacity-50">
                <?php require "menu.php"; ?>
            </div>
            <div class="bg-blue-400 bg-opacity-50 absolute top-0 left-0 right-0">
                <?php require "headerTop.php"; ?>
            </div>
            <div class="absolute bottom-0 left-0 right-0 mx-64 pt-5 bg-white bg-opacity-80 rounded-t-md">
                <h3 class="font-bold text-2xl uppercase text-center "><a href="">
                        <?php echo $showtour['name_tour'] ?></a></h3>
                <img class="w-20 mx-auto" src="./content/image/gachvang.png" alt="">
            </div>
        </header>
        <main class="container mx-auto">
            <section class="flex container mx-auto my-10">
                <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="index.php">Trang ch???</a></h3>
                <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
                <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="tourNoithanh.php?id_category=<?php echo $parent ?>">tour
                        <?php if ($parent == '25' || $category == '25') {
                            echo "n???i th??nh";
                        }
                        if ($parent == '26' || $category == '26') {
                            echo "ngo???i th??nh";
                        } ?></a>
                </h3>
                <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
                <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="product.php?id_tour=<?php echo $id ?>"><?php echo $showtour['name_tour'] ?></a></h3>
                <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
                <h3><a class="uppercase text-sm" href="tourNoithanh.php?id_category=<?php echo $parent ?>">?????t tour</a>
                </h3>
            </section>
            <section class="grid grid-cols-7 gap-5">
                <div class="col-span-4">
                    <div class="grid grid-cols-7 gap-5">
                        <img class="col-span-3" src="./content/image/1.jpg" alt="">
                        <table class="shadow-md col-span-4">
                            <thead>
                                <tr class="py-5">
                                    <th colspan="2" class="text-xl py-3 border"><?php echo $showtour['name_tour'] ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr class="">
                                    <td class="py-1 border pl-10">M?? tour:</td>
                                    <td class="font-bold border pl-10"><?php echo $showtour['id_tour'] ?></td>
                                </tr>
                                <tr class="">
                                    <td class="py-1 border pl-10">Th???i gian:</td>
                                    <td class="font-bold border pl-10">1 ng??y</td>
                                </tr>
                                <tr class="">
                                    <td class="py-1 border pl-10">Gi??:</td>
                                    <td class="font-bold border pl-10"><?php if ($showtour['promotional'] > 0) {
                                                                            echo number_format(($showtour['price'] - $showtour['promotional']), 0, '.', ',');
                                                                        } else {
                                                                            echo number_format($showtour['price'], 0, '.', ',');
                                                                        } ?>
                                        ???/kh??ch</td>
                                </tr>
                                <tr class="">
                                    <td class="py-1 border pl-10">Ng??y</td>
                                    <td class="font-bold border pl-10">1 ng??y</td>
                                </tr>
                                <tr class="">
                                    <td class="py-1 border pl-10">N??i kh???i h??nh:</td>
                                    <td class="font-bold border pl-10"><?php echo $showtour['place_start'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="my-5">
                        <span class="text-red-400 text-justify inline-block py-1">C??c kho???n ph?? ph??t sinh (n???u c??) nh??:
                            ph??? thu d??nh cho kh??ch n?????c ngo??i, vi???t ki???u; ph??? thu ph??ng ????n; ph??? thu ch??nh l???ch gi??
                            tour??? Nh??n vi??n Du L???ch Hanoitourist s??? g???i ??i???n tho???i t?? v???n cho qu?? kh??ch ngay sau khi c??
                            phi???u x??c nh???n booking. (Trong gi??? h??nh ch??nh)</span>
                        <span class="text-red-400 text-justify inline-block py-1">Tr?????ng h???p qu?? kh??ch kh??ng ?????ng ?? c??c
                            kho???n ph??t sinh, phi???u x??c nh???n booking c???a qu?? kh??ch s??? kh??ng c?? hi???u l???c.</span>
                    </div>
                    <div class="p-5 shadow-md my-5">
                        <h2 class="text-center text-2xl font-bold my-5">B???NG GI?? TOUR CHI TI???T</h2>
                        <table class="w-full">
                            <tr class="text-center">
                                <th class="border py-2">Lo???i gi??\????? tu???i</th>
                                <th class="border py-2">Ng?????i l???n</th>
                                <th class="border py-2">Tr??? em(D?????i 11 tu???i gi???m 30%)</th>
                            </tr>
                            <tr class="text-center">
                                <td class="border py-2">Gi?? </td>
                                <td class="border py-2">
                                    <p><span id="priceOld"><?php if ($showtour['promotional'] > 0) {
                                                                echo (($showtour['price'] - $showtour['promotional']));
                                                            } else {
                                                                echo ($showtour['price']);
                                                            } ?> </span> ???</p>
                                </td>
                                <td class="border py-2">
                                    <p><span id="priceChid"><?php if ($showtour['promotional'] > 0) {
                                                                echo ((($showtour['price'] - $showtour['promotional']) * 0.3));
                                                            } else {
                                                                echo ($showtour['price'] * 0.7); // tre em giam gia 30%
                                                            } ?> </span> ???</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="p-5 shadow-md mt-5">
                        <h2 class="text-center text-2xl font-bold my-5">GI?? TOUR TR???N G??I CHO 01 KH??CH</h2>
                        <table class="shadow-lg">
                            <thead>
                                <tr>
                                    <th class="border py-1 font-bold">GI?? TOUR BAO G???M</th>
                                    <th class="border py-1 font-bold">GI?? TOUR CH??A BAO G???M</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-5">
                                        <ul>
                                            <li class="list-disc list-inside py-1">Ph????ng ti???n: ??t?? m??y l???nh</li>
                                            <li class="list-disc list-inside py-1">??n tr??a 1 b???a</li>
                                            <li class="list-disc list-inside py-1">H?????ng d???n vi??n: Chuy??n nghi???p, ph???c
                                                v??? nhi???t t??nh, th??nh th???o, chu ????o su???t tuy???n.</li>
                                            <li class="list-disc list-inside py-1">V?? tham quan v??o c???a m???t l???n t???i c??c
                                                ??i???m tham quan</li>
                                            <li class="list-disc list-inside py-1">B???o hi???m du l???ch su???t tuy???n</li>
                                            <li class="list-disc list-inside py-1">Qu?? t???ng: N?????c u???ng, kh??n l???nh tr??n
                                                ph????ng ti???n v???n chuy???n: 01 chai + 01 kh??n l???nh/ ng??y.</li>
                                        </ul>
                                    </td>
                                    <td class="border px-5">
                                        <ul>
                                            <li class="list-disc list-inside py-1">Chi ti??u c?? nh??n ngo??i ch????ng tr??nh
                                            </li>
                                            <li class="list-disc list-inside py-1">Thu??? VAT 10%</li>
                                            <li class="list-disc list-inside py-1">Th??m quan ngo??i ch????ng tr??nh tour
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php
                if (!empty($_SESSION['user'])) {
                    $user = $_SESSION['user'];
                    $sqluer = "select * from user where username = '$user'";
                    $showuser = $local->query($sqluer)->fetch();
                }
                ?>
                <form method="POST" class="border p-5 col-span-3">
                    <h2 class="text-center text-2xl font-bold my-2">TH??NG TIN LI??N H???</h2>
                    <div>
                        <span>T??n tour</span>
                        <input disabled class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full " type="text" value="<?php echo $showtour['name_tour'] ?>" id="lastname">
                    </div>
                    <div class="mt-3">
                        <span>H??? v?? t??n</span>
                        <input class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="T??n ????ng nh???p" value="<?php echo $showuser['fullname'] ?>" id="lastname" name="fullname" required>
                    </div>
                    <!-- end lastname -->
                    <div class="mt-3 ">
                        <span>Email</span>
                        <input class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="Email" id="email" name="email" value="<?php echo $showuser['email'] ?>" required>
                    </div>
                    <!-- end mail -->
                    <div class="mt-3 ">
                        <span>S??? ??i???n tho???i</span>
                        <input class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="S??? ??i???n tho???i" id="phone" name="phone_number" value="<?php echo $showuser['phone_number'] ?>" required>
                    </div>
                    <div class=" mt-3">
                        <span>?????a ch???</span>
                        <input class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="?????a ch???" id="address" name="adress" value="<?php echo $showuser['address'] ?>" required>
                    </div>
                    <div class=" mt-3">
                        <span>Ng?????i l???n</span>
                        <input class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="number" placeholder="1" id="elderly" name="elderly" min="0" minlength="1" required>
                    </div>
                    <div class="mt-3 ">
                        <span>Tr??? em (D?????i 11 tu???i gi???m 30%) </span>
                        <input class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" min="0" minlength="1" type="number" placeholder="" id="young" name="young">
                    </div>
                    <div class="mt-3 ">
                        <span>Ng??y ??i</span>
                        <input class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="date" placeholder="" id="address" name="departure_day" required>
                    </div>
                    <div class="mt-3 ">
                        <span class="block">Ghi ch??</span>
                        <textarea class="border bg-gray-100 px-2 py-1 bg-opacity-50 ocus:outline-none" name="note" id="" cols="73" rows="3"></textarea>
                    </div>
                    <div class="text-center bg-white">
                        <input type="text" class="text-lg bg-white text-red-500" id="error" value="" style="width: 550px;" disabled>
                    </div>
                    <div class="my-5 flex justify-between">
                        <input type="text" name="chose_voucher" id="showVoucher" class="border border-white bg-white bg-opacity-50 pl-2 " style="width: 430px; height: 35psx; line-height: 35px;">
                        <button id="voucher" type='button' class="voucher text-blue-500 hover:text-red-600 cursor-pointer flex items-center justify-end pl-1" name="choseV">Ch???n
                            VOUCHER</button>
                    </div>
                    <div class="text-center bg-white hidden">
                        <input type="text" name="sumP" class="" id="sumP" value="" style="width: 550px;">
                        <input type="text" name="sumPP" id="sumprice">
                        <input type="text" name="sumV" id="sumV" value="00">
                    </div>
                    <div class="flex justify-end">
                        <p class="mt-5">T???ng ti???n: <span class="text-red-500 text-2xl font-bold italic" id="allPrice">000</span>
                            ???</p>
                    </div>
                    <div class="flex justify-center items-center">
                        <button class="mt-5 border hover:border-yellow-300 hover:bg-white rounded-lg px-10 py-2 text-lg focus:outline-none bg-blue-300 hover:text-black" name="btn_regis">?????t ngay</button>
                    </div>
                    <!-- end submit -->
                </form>
            </section>
        </main>
        <footer class="background4 bg-opacity-10 mt-10">
            <?php require "footer.php"; ?>
        </footer>
    </div>
    <div id="selectVoucher" class="absolute bottom-0 mx-170 my-180 items-center hidden border bg-white">
        <div class="relative">
            <h2 class="text-2xl py-2 px-5 bg-yellow-500 bg-opacity-50 font-bold">Ch???n Hanoitourist Voucher</h2>
            <form method="POST">
                <div class="flex py-3 justify-items-center bg-gray-100 px-5 my-2">
                    <span class="py-2">M?? gi???m gi??</span>
                    <input id="codeVoucher" value="" class="border px-3 focus:outline-none mx-5 py-2 w-80" type="text" placeholder="M?? gi???m gi??" name="code_voucher">
                </div>
                <button id="apply" name="check_code" class="py-2 px-8 absolute border bg-yellow-500  " style="right:20px; top:69px;">??p
                    d???ng</button>
            </form>
            <?php
            if (isset($_POST['check_code'])) {
                $code_voucher = $_POST['code_voucher'];
                function checkCode($code)
                {
                    include "../../DA1/examples/local.php";
                    $sql = "select count(voucher_code) from voucher where voucher_code like '$code'";
                    $data = $local->prepare($sql);
                    $data->execute();
                    return $data->fetchColumn();
                }
                $sqlsale = "select * from voucher where voucher_code like '$code_voucher'";
                $showsale = $local->query($sqlsale)->fetch();
                $saleV = $showsale['voucher_sale'];

                $code =  checkCode($code_voucher);
                if ($code != 0) {
                    //co tim thay
                    echo '<span id="code" class="hidden">' . $code_voucher . '</span>';
                    echo '<span id="codeV" class="hidden">' . $saleV . '</span>';
                } else {
                    echo '<span id="code" class="hidden">0</span>';
                }
            }
            ?>
            <form method="POST">
                <?php
                $sqlvour = "select * from voucher";
                $showvour = $local->query($sqlvour);
                foreach ($showvour as $voucher) {
                ?>
                    <div class="voucherLL">
                        <div class="grid grid-cols-4 gap-5 cursor-pointer mx-5 my-5 shadow-md">
                            <span class="people hidden"><?php echo $voucher['voucher_people'] ?></span>
                            <img class="col-span-1 my-auto" src="../../DA1/assets/img/<?php echo $voucher['voucher_image'] ?>" alt="">
                            <div class=" col-span-2">
                                <label class="font-bold nameVoucher" for=""><?php echo $voucher['vourcher_name'] ?></label>
                                <span class="voucher_sale hidden"><?php echo $voucher['voucher_sale']  ?></span>
                                <ul>
                                    <li class="list-inside list-disc py-1">Gi???m <span class="font-bold"><?php echo $voucher['voucher_sale']  ?>%</span> t???ng gi??
                                        ti???n
                                        cho c??c tour</li>
                                </ul>
                            </div>
                            <input class="checkRadio mx-auto my-auto col-span-1 focus:outline-none" type="radio" name="check" id="" disabled>
                        </div>
                    </div>
                <?php }
                ?>
                <span class="text-gray-500 mx-5">* ???? hi???n th??? t???t c??? Hanoitourist voucher thu???c m???c Voucher c???a h??ng
                    cung c???p.</span>
            </form>
        </div>
        <div class="flex justify-end mx-5 my-10">
            <button id="back" class="border hover:bg-yellow-500 border-yellow-500 px-14 py-1 mx-3 focus:outline-none">Tr???
                l???i</button>
            <button id="clickOk" class="border bg-yellow-500 border-yellow-500 px-14 py-1">OK</button>
        </div>
    </div>
    <?php

    if (isset($_POST['btn_regis'])) {
        $name_tour = $showtour['name_tour'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $adress = $_POST['adress'];
        $adult_amount = $_POST['elderly'];
        $child_amount = $_POST['young'];
        $note = $_POST['note'];
        $code_voucher = $_POST['code_voucher'];
        $chose_voucher = $_POST['chose_voucher'];
        $departure_day = $_POST['departure_day'];
        $today = date('Y-m-d');
        $todays = mktime(0, 0, 0, date('m'), date('d') + 30, date('Y'));
        $todayl = date('Y-m-d', $todays);
        $sqlcheckvou = "select * from voucher where vourcher_name = '$chose_voucher'";
        $showcheckvou = $local->query($sqlcheckvou)->fetch();
        echo $id_voucher = $showcheckvou['id_voucher'];
        $username = $_SESSION['user'];
        if (empty($id_voucher)) {
            echo "sss";
            $id_voucher = 0;
        } else {
            $sqlcheckV = "update voucher set voucher_number=voucher_number-1 where id_voucher like '$id_voucher'";
            $setV = $local->prepare($sqlcheckV);
            $setV->execute();
        }
        if (empty($child_amount)) {
            $child_amount = 0;
        }
        // echo $today + 30;
        // echo $departure_day;
        if ($departure_day > $today && $departure_day <= $todayl) {
            echo '<span class="checkday hidden">0</span>';
            $sqladd = "insert into cart values(null,'$id','$id_voucher','$username','$phone_number','$note','$adult_amount','$child_amount','$departure_day',0,null)";
            $addvour = $local->exec($sqladd);
            header("location:../../../../DA1/DA/success.php?id_cart=1");
            // if ($addvour == 1) {
            //     echo "add ok";
            // } else {
            //     echo 'add false';
            // }
        } else {
            echo '<span  class="checkday hidden">1</span>';
        }
    }
    ?>
    <script>
        var voucher = document.getElementById("voucher");
        var selectVoucher = document.getElementById("selectVoucher");
        var main = document.getElementById("main");
        var showVoucher = document.getElementById("showVoucher");
        var nameVoucher = document.querySelectorAll(".nameVoucher");
        var back = document.getElementById("back");
        selectVoucher.style.display = "none";
        var check = document.getElementsByName("check");
        var codeVoucher = document.querySelector("#codeVoucher");
        var apply = document.querySelector("#apply");
        var clickok = document.querySelector("#clickOk");
        var elderly = document.querySelector('#elderly');
        var young = document.querySelector('#young');
        var sll = 0;
        var sumprice = document.querySelector('#sumprice');
        var voucherLL = document.querySelectorAll('.voucherLL');
        var people = document.querySelectorAll('.people');
        var code = document.querySelector('#code');
        var priceOld = document.getElementById('priceOld');
        var priceChid = document.getElementById('priceChid');
        var voucher_sale = document.querySelectorAll('.voucher_sale');
        var sumP = document.querySelector('#sumP');
        var allPrice = document.getElementById('allPrice');
        var codeV = document.querySelector('#codeV');
        var checkRadio = document.querySelectorAll('.checkRadio');
        var priceChild = Math.ceil(priceChid.innerText);
        var priceOldd = Math.ceil(priceOld.innerText);


        main.addEventListener('mouseover', () => {
            // console.log(showVoucher.value);
            console.log(sumP.value);
            if (showVoucher.value != '') {
                allPrice.innerHTML = (Number(sumprice.value)) - (Number(sumprice.value) * Number(sumP.value) / 100);
                allPrice.innerHTML = (Number(sumprice.value)) - (Number(sumprice.value) * Number(codeV.innerHTML) /
                    100);
            } else {
                allPrice.innerHTML = (Number(sumprice.value));
            }
        });
        main.addEventListener('mousewheel', () => {
            if (code.innerHTML != 0) {
                selectVoucher.style.display = "none";
                main.style.background = "white";
                main.style.opacity = "1";
                showVoucher.value = code.innerHTML;
                showVoucher.style.display = "block";
                showVoucher.style.borderColor = "#e5e7eb";
                showVoucher.style.backgroundColor = "#f9f9fa";
            }
        });
        apply.addEventListener('click', () => {
            if (code.innerHTML != 0) {
                selectVoucher.style.display = "none";
                main.style.background = "white";
                main.style.opacity = "1";

                showVoucher.value = code.innerHTML;
                showVoucher.style.display = "block";
                showVoucher.style.borderColor = "#e5e7eb";
                showVoucher.style.backgroundColor = "#f9f9fa";
            }
        });

        elderly.addEventListener('keyup', () => {
            sll = Number(elderly.value) + Number(young.value);


            // console.log(elderly.value);
            if (Number(people[0].innerHTML) > sll) {
                voucherLL[0].style.filter = "grayscale(100%)";
                checkRadio[0].disabled = true;
                checkRadio[0].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[0].style.filter = "grayscale(0%)";
                checkRadio[0].disabled = false;

            }
            if (Number(people[1].innerHTML) > sll) {
                voucherLL[1].style.filter = "grayscale(100%)";
                checkRadio[1].disabled = true;
                checkRadio[1].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[1].style.filter = "grayscale(0%)";
                checkRadio[1].disabled = false;
            }
            if (Number(people[2].innerHTML) > sll) {
                voucherLL[2].style.filter = "grayscale(100%)";
                checkRadio[2].disabled = true;
                checkRadio[2].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[2].style.filter = "grayscale(0%)";
                checkRadio[2].disabled = false;
            }
            if (Number(people[3].innerHTML) > sll) {
                voucherLL[3].style.filter = "grayscale(100%)";
                checkRadio[3].disabled = true;
                checkRadio[3].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[3].style.filter = "grayscale(0%)";
                checkRadio[3].disabled = false;
            }
            if (Number(people[4].innerHTML) > sll) {
                voucherLL[4].style.filter = "grayscale(100%)";
                checkRadio[4].disabled = true;
                checkRadio[4].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[4].style.filter = "grayscale(0%)";
                checkRadio[4].disabled = false;
            }
            if (Number(people[5].innerHTML) > sll) {
                voucherLL[5].style.filter = "grayscale(100%)";
                checkRadio[5].disabled = true;
                checkRadio[5].checked = false;
                showVoucher.value = '';
            } else {
                voucherLL[5].style.filter = "grayscale(0%)";
                checkRadio[5].disabled = false;
            }
            sumprice.value = ((Number(priceOldd) * Number(elderly.value)) + (Number(priceChild) *
                Number(young
                    .value)));
            // for (var p = 0; p < people.length; p++) {
            //     for (var t = 0; t < voucherLL.length; t++) {
            //         // console.log(people[t].innerHTML);
            //         if (people[t].innerHTML >= 5) {
            //             voucherLL[p].style.filter = "grayscale(100%)";
            //             console.log('1');
            //         } else {
            //             voucherLL[t].style.filter = "grayscale(0%)";
            //             console.log('2');
            //         }
            //     }
            //     break;
            // }
        });
        for (var u = 0; u < voucherLL.length; u++) {
            voucherLL[u].style.filter = "grayscale(100%)";
        }
        young.addEventListener('keyup', () => {
            sll = Number(elderly.value) + Number(young.value);
            if (Number(people[0].innerHTML) > sll) {
                voucherLL[0].style.filter = "grayscale(100%)";
                checkRadio[0].disabled = true;
                checkRadio[0].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[0].style.filter = "grayscale(0%)";
                checkRadio[0].disabled = false;

            }
            if (Number(people[1].innerHTML) > sll) {
                voucherLL[1].style.filter = "grayscale(100%)";
                checkRadio[1].disabled = true;
                checkRadio[1].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[1].style.filter = "grayscale(0%)";
                checkRadio[1].disabled = false;
            }
            if (Number(people[2].innerHTML) > sll) {
                voucherLL[2].style.filter = "grayscale(100%)";
                checkRadio[2].disabled = true;
                checkRadio[2].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[2].style.filter = "grayscale(0%)";
                checkRadio[2].disabled = false;
            }
            if (Number(people[3].innerHTML) > sll) {
                voucherLL[3].style.filter = "grayscale(100%)";
                checkRadio[3].disabled = true;
                checkRadio[3].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[3].style.filter = "grayscale(0%)";
                checkRadio[3].disabled = false;
            }
            if (Number(people[4].innerHTML) > sll) {
                voucherLL[4].style.filter = "grayscale(100%)";
                checkRadio[4].disabled = true;
                checkRadio[4].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[4].style.filter = "grayscale(0%)";
                checkRadio[4].disabled = false;
            }
            if (Number(people[5].innerHTML) > sll) {
                voucherLL[5].style.filter = "grayscale(100%)";
                checkRadio[5].disabled = true;
                checkRadio[5].checked = false;
                showVoucher.value = '';
            } else {
                voucherLL[5].style.filter = "grayscale(0%)";
                checkRadio[5].disabled = false;
            }
            sumprice.value = ((Number(priceOldd) * Number(elderly.value)) + (Number(priceChild) *
                Number(young
                    .value)));
        });
        elderly.addEventListener('change', () => {
            sll = Number(elderly.value) + Number(young.value);
            if (Number(people[0].innerHTML) > sll) {
                voucherLL[0].style.filter = "grayscale(100%)";
                checkRadio[0].disabled = true;
                checkRadio[0].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[0].style.filter = "grayscale(0%)";
                checkRadio[0].disabled = false;

            }
            if (Number(people[1].innerHTML) > sll) {
                voucherLL[1].style.filter = "grayscale(100%)";
                checkRadio[1].disabled = true;
                checkRadio[1].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[1].style.filter = "grayscale(0%)";
                checkRadio[1].disabled = false;
            }
            if (Number(people[2].innerHTML) > sll) {
                voucherLL[2].style.filter = "grayscale(100%)";
                checkRadio[2].disabled = true;
                checkRadio[2].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[2].style.filter = "grayscale(0%)";
                checkRadio[2].disabled = false;
            }
            if (Number(people[3].innerHTML) > sll) {
                voucherLL[3].style.filter = "grayscale(100%)";
                checkRadio[3].disabled = true;
                checkRadio[3].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[3].style.filter = "grayscale(0%)";
                checkRadio[3].disabled = false;
            }
            if (Number(people[4].innerHTML) > sll) {
                voucherLL[4].style.filter = "grayscale(100%)";
                checkRadio[4].disabled = true;
                checkRadio[4].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[4].style.filter = "grayscale(0%)";
                checkRadio[4].disabled = false;
            }
            if (Number(people[5].innerHTML) > sll) {
                voucherLL[5].style.filter = "grayscale(100%)";
                checkRadio[5].disabled = true;
                checkRadio[5].checked = false;
                showVoucher.value = '';
            } else {
                voucherLL[5].style.filter = "grayscale(0%)";
                checkRadio[5].disabled = false;
            }
            sumprice.value = ((Number(priceOldd) * Number(elderly.value)) + (Number(priceChild) *
                Number(young
                    .value)));
        });
        young.addEventListener('change', () => {
            sll = Number(elderly.value) + Number(young.value);
            if (Number(people[0].innerHTML) > sll) {
                voucherLL[0].style.filter = "grayscale(100%)";
                checkRadio[0].disabled = true;
                checkRadio[0].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[0].style.filter = "grayscale(0%)";
                checkRadio[0].disabled = false;

            }
            if (Number(people[1].innerHTML) > sll) {
                voucherLL[1].style.filter = "grayscale(100%)";
                checkRadio[1].disabled = true;
                checkRadio[1].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[1].style.filter = "grayscale(0%)";
                checkRadio[1].disabled = false;
            }
            if (Number(people[2].innerHTML) > sll) {
                voucherLL[2].style.filter = "grayscale(100%)";
                checkRadio[2].disabled = true;
                checkRadio[2].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[2].style.filter = "grayscale(0%)";
                checkRadio[2].disabled = false;
            }
            if (Number(people[3].innerHTML) > sll) {
                voucherLL[3].style.filter = "grayscale(100%)";
                checkRadio[3].disabled = true;
                checkRadio[3].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[3].style.filter = "grayscale(0%)";
                checkRadio[3].disabled = false;
            }
            if (Number(people[4].innerHTML) > sll) {
                voucherLL[4].style.filter = "grayscale(100%)";
                checkRadio[4].disabled = true;
                checkRadio[4].checked = false;
                if (sll <= 5) {
                    showVoucher.value = '';
                }
            } else {
                voucherLL[4].style.filter = "grayscale(0%)";
                checkRadio[4].disabled = false;
            }
            if (Number(people[5].innerHTML) > sll) {
                voucherLL[5].style.filter = "grayscale(100%)";
                checkRadio[5].disabled = true;
                checkRadio[5].checked = false;
                showVoucher.value = '';
            } else {
                voucherLL[5].style.filter = "grayscale(0%)";
                checkRadio[5].disabled = false;
            }
            sumprice.value = ((Number(priceOldd) * Number(elderly.value)) + (Number(priceChild) *
                Number(young
                    .value)));
        });

        clickok.addEventListener("click", function() {
            // console.log(code.innerHTML);
            // console.log(voucher_sale.innerHTML);
            if (checkRadio[0].checked) {
                sumP.value = voucher_sale[0].innerHTML;
            } else if (checkRadio[1].checked) {
                sumP.value = voucher_sale[1].innerHTML;
            } else if (checkRadio[2].checked) {
                sumP.value = voucher_sale[2].innerHTML;
            } else if (checkRadio[3].checked) {
                sumP.value = voucher_sale[3].innerHTML;
            } else if (checkRadio[4].checked) {
                sumP.value = voucher_sale[4].innerHTML;
            } else if (checkRadio[5].checked) {
                sumP.value = voucher_sale[5].innerHTML;
            }
            selectVoucher.style.display = "none";
            main.style.background = "white";
            main.style.opacity = "1";
            for (var i = 0; i < check.length; i++) {
                if (check[i].checked == true) {
                    showVoucher.value = nameVoucher[i].innerHTML;
                    showVoucher.style.display = "block";
                    showVoucher.style.borderColor = "#e5e7eb";
                    showVoucher.style.backgroundColor = "#f9f9fa";
                }
            }
        });
        voucher.addEventListener("click", function() {
            selectVoucher.style.display = 'block';
            main.style.background = "#999999";
            main.style.opacity = "0.5";
        });

        back.addEventListener("click", function() {
            selectVoucher.style.display = "none";
            main.style.background = "white";
            main.style.opacity = "1";
        });


        // apply.addEventListener("click", function() {
        //     selectVoucher.style.display = "none";
        //     main.style.background = "white";
        //     main.style.opacity = "1";

        //     showVoucher.value = codeVoucher.value;
        //     showVoucher.style.display = "block";
        //     showVoucher.style.borderColor = "#e5e7eb";
        //     showVoucher.style.backgroundColor = "#f9f9fa";
        // });

        var error = document.querySelector('#error');
        var checkday = document.querySelector('.checkday');
        // console.log(checkday.innerHTML);
        if (checkday.innerHTML == 1) {
            error.value = 'Ng??y ??i ph???i l???n h??n ng??y hi???n t???i v?? ?????t l???ch tr?????c t???i ??a 30 ng??y!';
        }
    </script>

</body>

</html>