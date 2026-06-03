<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/linktreeStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <p></p>
        <div class="before-header logo-bawah py-4 ">
            <div class="button-atas">
                <a href="http://linktr.ee/" target="_blank">
                    <img src="assets/img/linktree_logo.png" class="logo-atas" alt="LinkTree">
                </a>
            </div>
            <div class="button-atas">
                <a href="https://linktr.ee/Agni.Graph" target="_blank"><img src="assets/img/share.png" class="logo-atas"
                        alt="Share">
                </a>
            </div>
        </div>


        <div class="Header">
            <p></p>
            <img src="https://ugc.production.linktr.ee/575cdfae-c07e-41b6-8df1-ee5d257efd43_LOGO-ONLINE.jpeg?io=true&size=avatar-v3_0"
                class="profile" alt="logo">
            <p></p>
            <div style="width: 350px;">
                <h4 class="title-text" id="intro">Padang Merdeka Surabaya</h4>
                <p class="desc">Padang Merdeka Surabaya Jln. Raya Mulyosari No.366A Open 10am-9pm | Visit us!</p>
            </div>
            <div class="sosmed">
                <a href="https://api.whatsapp.com/send?phone=6287881781945"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/padangmerdekasurabaya"><i class="fab fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@padangmerdekasurabaya"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
        <div class="MainSection">
            <div>
                <div class="link-item">
                    <a href="https://www.google.com/maps?cid=7516640693515861453" target="_blank" class="link-btn">
                        <img src="https://ugc.production.linktr.ee/b4a9ca8c-b189-4e14-b8c3-d139e02d23ed_AC9h4nqYT7CqdSDm3bapYSXuN1M1ouvk1yXAl3OnhGJnMSeXVjjYkb6S6DHns2f3odn-xtwQNCQB4h2cTCyBPNNzOZs3nKDAfWZY.jpeg?io=true&size=thumbnail-stack_v1_0"
                            class="link-icon">
                        <div class="link-text">
                            <div class="title">Lokasi Outlet</div>
                            <div class="desc">PQHW+8HJ, Jl. Raya Mulyosari, Mulyorejo, Surabaya</div>
                        </div>
                    </a>
                </div>

                <a href="https://food.grab.com/id/en/restaurant/online-delivery/6-C7JDAUMZRTAZAN?sourceID=20250623_144055_da416c658c894231afa8779429246247_MEXMPS"
                    target="_blank" class="btn btn-outline-light btn-block rounded-pill linkFont py-3 custom-link">
                    <img src="https://ugc.production.linktr.ee/71621b78-b290-4aa3-8a50-2a01c4b0c492_image.png?io=true&size=thumbnail-stack_v1_0"
                        class="link-icon">
                    <span>GrabFood</span>
                </a>
                <a href="https://gofood.co.id/surabaya/restaurant/padang-merdeka-mulyosari-0edce556-555d-45ff-ae8f-b6c3aa5c26c5"
                    target="_blank" class="btn btn-outline-light btn-block rounded-pill linkFont py-3 custom-link">
                    <img src="https://ugc.production.linktr.ee/e24782f2-6c36-4b37-929b-174aa0560831_image.png?io=true&size=thumbnail-stack_v1_0"
                        class="link-icon">
                    <span>GoFood</span>
                </a>

                <a href="https://shopee.co.id/now-food/shop/22163874?deep_and_deferred=1&shareChannel=copy_link&stm_medium=referral&stm_source=rw&uls_trackid=55bsd68c00pr"
                    target="_blank" class="btn btn-outline-light btn-block rounded-pill linkFont py-3 custom-link">

                    <img src="https://ugc.production.linktr.ee/b8c55457-cc75-43b4-a84b-34077d8e94cc_image.png?io=true&size=thumbnail-stack_v1_0"
                        class="link-icon">
                    <span>ShopeeFood</span>
                </a>
                <button class="btn btn-info btn-block rounded-pill linkFont py-3" onclick="showme()">Show me</button>
                <button class="btn btn-info btn-block rounded-pill linkFont py-3" onclick="changeText()">Change
                    text</button>
                <button id="tombol" class="btn btn-info btn-block rounded-pill linkFont py-3"
                    onclick="changeStyle()">Show
                    me</button>
            </div>
        </div>
        <div class="pb-4 mt-5">
            <a href="https://linktr.ee/?utm_source=linktree&utm_medium=profile&utm_campaign=footer_logo_cta&utm_content=pmmulyosari"
                target="_blank" class="btn-bottom btn-light rounded-pill linkFont py-2 px-2 shadow">
                Join pmmulyosari on Linktree
            </a>
        </div>
        <div class="footer pb-5">
            <p>Cookie Preferences • Report • Privacy</p>
        </div>
    </div>
    <script>
        function showme() {
            // alert("Halo Selamat Siang");

            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
            });
            console.log("ini baris 1, sudah sampai disini");
            a = 18 + 10;
            console.log("Hasil Penjumlahan :" + a);
        }

        function changeText() {
            const element = document.getElementById("intro")
            element.innerHTML = "HIDUP JOKIWO";
        }

        function changeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.background = "yellow";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
