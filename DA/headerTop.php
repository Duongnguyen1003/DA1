<?php
ob_start();
session_start();
include "../../DA1/examples/local.php";
$sql = "select * from information";
$total = $local->query($sql)->fetch();
?>
<div class="container mx-auto flex justify-between">
    <div class="flex justify-items-center">
        <ul>
            <li class="inline-block  pr-5 ml-5">
                <a href="#">
                    <span class="text-base text-white hover:text-yellow-400"><i class="fas fa-mail-bulk py-2 pr-3"></i><?php echo $total['information_email'] ?></span>
                </a>
            </li>
            <li class="inline-block  pr-5 ml-5">
                <a href="#">
                    <span class="text-base text-white hover:text-yellow-400"><i class="fas fa-phone py-2 pr-3"></i>Hotline:
                        <?php echo $total['information_phone'] ?></span>
                </a>
            </li>
        </ul>
    </div>
    <div class="z-50">
        <ul>
            <li class="inline-block pr-5 hover:text-black relative group">
                <span href="login.php" class="group">

                    <?php
                    if (isset($_SESSION['user'])) {
                        $user = $_SESSION['user'];
                        $sqls = "select * from user where username = '$user'";
                        $totals = $local->query($sqls)->fetch();
                    }
                    ?>
                    <div class=" <?php
                                    if (isset($_SESSION['user'])) {
                                        echo 'inline';
                                    } else {
                                        echo 'hidden';
                                    } ?>">
                        <img class="inline-block pr-1 h-6 w-7" src="../../DA1/assets/img/<?php echo $totals['user_image'] ?>" alt="">
                        <span class="text-yellow-400 font-black text-sm uppercase" id="login">Hi
                            <?php echo $totals['fullname'] ?>
                        </span>
                    </div>


                    <a href="../../DA1/DA/login.php"><span class="inline-block text-base text-white group-hover:text-yellow-500 <?php
                                                                                                                                if (isset($_SESSION['user'])) {
                                                                                                                                    echo 'hidden';
                                                                                                                                } else {
                                                                                                                                    echo 'block';
                                                                                                                                } ?>"><i class="fas fa-sign-in-alt py-2 pr-3"></i>????ng
                            nh???p</span></a>

                </span>
                <div class="absolute top-0 mt-5 pl-5 group-hover:block hidden  <?php
                                                                                if (isset($_SESSION['user'])) {
                                                                                    echo 'inline';
                                                                                } else {
                                                                                    echo 'group-hover:hidden';
                                                                                } ?>">
                    <div class="" style="border-bottom: 15px solid white; border-left: 80px solid transparent; border-right: 80px solid transparent; bottom: 10px;">
                    </div>
                    <ul>
                        <li class="bg-white pl-5 w-40 py-1 font-bold text-black hover:text-blue-500 "><a class="" href="../../DA1/DA/changeinforuser.php?user=<?php echo $totals['username'] ?>">Qu???n l??
                                t??i kho???n</a></li>
                        <form method="POST">
                            <li class="bg-white pl-5 w-40 py-1 font-bold text-black hover:text-blue-500 "><input type="submit" name="Logout" value="????ng xu???t" id="" class="bg-white font-bold"></li>
                        </form>
                        <li class="bg-white pl-5 w-40 py-1 font-bold text-black hover:text-blue-500 ">
                            <?php
                            if ($totals['permission'] == 'admin') {
                                echo "<a href='../../DA1/examples/information.php' id='admin'> Admin</a>";
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                <?php
                if (isset($_POST['Logout'])) {
                    unset($_SESSION['user']);
                    header("location:../../../../DA1/DA/index.php");
                }
                ?>
            </li>
            <li class="inline-block pr-5 <?php
                                            if (isset($_SESSION['user'])) {
                                                echo 'inline';
                                            } else {
                                                echo 'hidden';
                                            } ?>">
                <a href="tourmenu.php">
                    <span class="text-base text-white hover:text-yellow-500"><i class="fas fa-cart-plus py-2 pr-3"></i>Tour
                        c???a b???n</span>
                </a>
            </li>
        </ul>
    </div>
</div>