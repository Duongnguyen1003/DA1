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
        /* .bg-noithanh1 {
            background-image: url('./content/image/background/bg-noithanh1.jpg');
        } */

        .background4 {
            background-image: url('./content/image/background/background4.jpg');
        }

        .nunito {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="nunito">
    <header class="relative">
        <img src="./content/image/background/sl_210303_comboxe-ks-moi.jpg" alt="">
        <div class="bg-blue-400 bg-opacity-50 absolute top-0 left-0 right-0">
            <?php require "headerTop.php"; ?>
        </div>
        <div class="absolute top-0 left-0 right-0 flex mt-8 px-32 bg-blue-300 bg-opacity-50">
            <?php require "menu.php"; ?>
        </div>
        <div class="absolute bottom-0 left-0 right-0 mx-64 pt-5 bg-white bg-opacity-80 rounded-t-md">
            <h3 class="font-bold text-2xl uppercase text-center"><a href="">Bản tin</a></h3>
            <img class="w-20 mx-auto" src="./content/image/gachvang.png" alt="">
        </div>
    </header>
    <main class="nunito container mx-auto">
        <section class="flex container mx-auto my-5">
            <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="index.php">Trang chủ</a></h3>
            <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
            <h3><a class="uppercase text-sm font-bold" href="news.php">Bản tin</a></h3>
        </section>
        <section class=" py-12 mx-10">
            <div class="text-center mb-5">
                <h2 class="text-3xl font-bold">Bản tin du lịch</h2>
                <p class=" text-xl mx-96 py-5">Cung cấp tới khách hàng những thông tin mới, đáng tin cậy, giúp khách hàng thuận tiện hơn cho việc lên kế hoạch du lịch</p>
            </div>
            <div class="grid grid-cols-12 gap-10 px-16 my-10">
                <div class="col-span-3">
                    <a href=""><img class="w-full" src="./content/image/news/le-phat-dong.jpg" alt=""></a>
                </div>
                <div class="col-span-9">
                    <a class="font-bold" href="">Hanoitourist đồng hành cùng Lễ phát động Cuộc vận động “Toàn dân rèn luyện thân thể theo gương Bác Hồ vĩ đại” và ngày chạy Olympic vì sức khỏe toàn dân tỉnh Bạc Liêu năm 2021</a>
                    <p class="text-black text-opacity-50 pt-2"><i class="fas fa-calculator pr-4"></i><span>30/03/2021</span></p>
                    <p class="text-black text-opacity-50">-------------------------------------------------------------------------------------------------------------------------------------------------</p>
                    <p class="text-black text-opacity-80 text-justify">
                        Sáng ngày 30/3/2021, Sở Văn hóa - Thể thao & Du lịch tỉnh Bạc Liêu tổ chức Lễ phát động Cuộc vận động “Toàn dân rèn luyện thân thể theo gương Bác Hồ vĩ đại” giai đoạn 2021 - 2030 kết hợp Ngày chạy Olympic vì sức khỏe toàn dân năm 2021 tại Quảng Trường Hùng Vương, tỉnh Bạc Liêu.</p>

                    <a href=""><span class="flex justify-end items-center hover:text-yellow-500 py-2">Xem thêm <i class="fas fa-long-arrow-alt-right pl-2"></i></span></a>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-10 px-16 my-10">
                <div class="col-span-3">
                    <a href=""><img class="w-full" src="./content/image/news/ba-vi.jpg" alt=""></a>
                </div>
                <div class="col-span-9">
                    <a class="font-bold" href="">Làm chủ cuộc chơi, trải nghiệm đong đầy trên nẻo đường đến với Ba Vì</a>
                    <p class="text-black text-opacity-50 pt-2"><i class="fas fa-calculator pr-4"></i><span>23/03/2021</span></p>
                    <p class="text-black text-opacity-50">-------------------------------------------------------------------------------------------------------------------------------------------------</p>
                    <p class="text-black text-opacity-80 text-justify">
                        Không còn đơn thuần chỉ là một chuyến du lịch khám phá, hành trình đến với Ba Vì còn là một “chuyến phiêu lưu” trên những cung đường đất đỏ đẹp nhất Việt Nam. Chưa dừng lại ở đó, hành trình này còn mang đến cho bạn những trải nghiệm văn hóa bản địa vô cùng độc đáo.</p>
                    <a href=""><span class="flex justify-end items-center hover:text-yellow-500 py-2">Xem thêm <i class="fas fa-long-arrow-alt-right pl-2"></i></span></a>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-10 px-16 my-10">
                <div class="col-span-3">
                    <a href=""><img class="w-full" src="./content/image/news/hau-covid.jpg" alt=""></a>
                </div>
                <div class="col-span-9">
                    <a class="font-bold" href="">Hậu Covid - Du lịch MICE tái khởi động</a>
                    <p class="text-black text-opacity-50 pt-2"><i class="fas fa-calculator pr-4"></i><span>26/03/2021</span></p>
                    <p class="text-black text-opacity-50">-------------------------------------------------------------------------------------------------------------------------------------------------</p>
                    <p class="text-black text-opacity-80 text-justify">
                        Bước vào năm 2021, sau khi dịch Covid-19 được kiểm soát, Vietravel đã tái khởi động và tăng tốc lại thị trường du lịch MICE. Để gia tăng hiệu quả chuyến đi cho các doanh nghiệp, Vietravel tung ra nhiều gói MICE hấp dẫn theo chương trình tham quan du lịch kết hợp khen thưởng, hội nghị, hội thảo, họp mặt khách hàng, team building, đào tạo... với mức chi phí tối ưu nhất.</p>
                    <a href=""><span class="flex justify-end items-center hover:text-yellow-500 py-2">Xem thêm <i class="fas fa-long-arrow-alt-right pl-2"></i></span></a>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-10 px-16 my-10">
                <div class="col-span-3">
                    <a href=""><img class="w-full" src="./content/image/news/hoa-cai.jpg" alt=""></a>
                </div>
                <div class="col-span-9">
                    <a class="font-bold" href="">Ngắm cảnh đẹp 3 miền qua bản đồ xuyên Việt thu nhỏ</a>
                    <p class="text-black text-opacity-50 pt-2"><i class="fas fa-calculator pr-4"></i><span>22/03/2021</span></p>
                    <p class="text-black text-opacity-50">-------------------------------------------------------------------------------------------------------------------------------------------------</p>
                    <p class="text-black text-opacity-80 text-justify">
                        Đi khắp “bản đồ xuyên Việt” nhiều người không khỏi vỡ òa trước vẻ đẹp dọc 3 miền Bắc-Trung-Nam nước ta. Nếu miền Bắc đẹp mê hồn cảnh sắc “đá nở hoa”, miền Trung khô cằn lại chứa bao điều quyến rũ, thì miền Nam thêm phần cuốn hút với vẻ thanh bình mang chút đượm buồn.</p>
                    <a href=""><span class="flex justify-end items-center hover:text-yellow-500 py-2">Xem thêm <i class="fas fa-long-arrow-alt-right pl-2"></i></span></a>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-10 px-16 my-10">
                <div class="col-span-3">
                    <a href=""><img class="w-full" src="./content/image/news/t_camnhi-213524053530-quan-oc-ngon-ha-noi.jpg" alt=""></a>
                </div>
                <div class="col-span-9">
                    <a class="font-bold" href="">Xuýt xoa với những quán ốc luộc ngon nhất nhì Hà Nội</a>
                    <p class="text-black text-opacity-50 pt-2"><i class="fas fa-calculator pr-4"></i><span>24/03/2021</span></p>
                    <p class="text-black text-opacity-50">-------------------------------------------------------------------------------------------------------------------------------------------------</p>
                    <p class="text-black text-opacity-80 text-justify">
                        Du lịch Hà Nội vào những ngày trời se lạnh, hay mỗi tối mát mẻ dạo quanh Hồ Tây, góc phố để tìm gì đó ngon ngon “cho vào bụng” thì ốc luôn là lựa chọn hàng đầu. Ở Hà Nội có rất nhiều quán ốc luộc ngon, mà nổi tiếng hơn hẳn là những cái tên như ốc Bà Câm, Ông Già Chính Hiệu, ốc Hạnh,…</p>
                    <a href=""><span class="flex justify-end items-center hover:text-yellow-500 py-2">Xem thêm <i class="fas fa-long-arrow-alt-right pl-2"></i></span></a>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-10 px-16 my-10">
                <div class="col-span-3">
                    <a href=""><img class="w-full" src="./content/image/news/hoang-hon.jpg" alt=""></a>
                </div>
                <div class="col-span-9">
                    <a class="font-bold" href="">Gọi tên những điểm ngắm hoàng hôn đẹp mê hồn ở Việt Nam</a>
                    <p class="text-black text-opacity-50 pt-2"><i class="fas fa-calculator pr-4"></i><span>24/03/2021</span></p>
                    <p class="text-black text-opacity-50">-------------------------------------------------------------------------------------------------------------------------------------------------</p>
                    <p class="text-black text-opacity-80 text-justify">
                        Không cần phải đến Hy Lạp hay Bali xa xôi để được chiêm ngưỡng cảnh hoàng hôn dần buông tuyệt đẹp. Bởi ở đất nước Việt Nam xinh đẹp của ta, cũng có rất nhiều điểm ngắm hoàng hôn đẹp đến mê hồn khiến bao du khách nước ngoài say đắm.</p>
                    <a href=""><span class="flex justify-end items-center hover:text-yellow-500 py-2">Xem thêm <i class="fas fa-long-arrow-alt-right pl-2"></i></span></a>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-10 px-16 my-10">
                <div class="col-span-3">
                    <a href=""><img class="w-full" src="./content/image/news/tam-dao.jpg" alt=""></a>
                </div>
                <div class="col-span-9">
                    <a class="font-bold" href="">Tận hưởng “Spring break” với dòng sản phẩm Luxury</a>
                    <p class="text-black text-opacity-50 pt-2"><i class="fas fa-calculator pr-4"></i><span>24/03/2021</span></p>
                    <p class="text-black text-opacity-50">-------------------------------------------------------------------------------------------------------------------------------------------------</p>
                    <p class="text-black text-opacity-80 text-justify">
                        Tương tự như nhiều nước khác trên thế giới, Việt Nam cũng bắt đầu có khái niệm “Spring break” được hiểu là “kỳ nghỉ xuân”.</p>
                    <a href=""><span class="flex justify-end items-center hover:text-yellow-500 py-2">Xem thêm <i class="fas fa-long-arrow-alt-right pl-2"></i></span></a>
                </div>
            </div>
        </section>

    </main>
    <footer class="background4 bg-opacity-10">
        <?php require "footer.php"; ?>
    </footer>
    <script src="./content/js/customer.js"></script>
</body>

</html>