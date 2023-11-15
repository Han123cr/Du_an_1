
    <!-- main -->
    <main class="container">
        <!-- Catagories -->
        <div class="text-center">
            <H4 class="my-3">DANH MỤC SẢN PHẨM</H4>
            <div class="row">  <!-- đã sửa -->
                    <?php 
                        foreach ($dsdm as $dm): 
                    ?>
                    <div class="col-md-4 position-relative">
                        <img class="img-fluid img-thumbnail" src="../content/img/<?=$dm['HinhAnh']?>" height="270px" alt="">
                        <p class="text-danger p-2 bg-white my-2 position-absolute top-50 start-50 fs-6 translate-middle"><?=$dm['TenDanhMuc']?> </p>
                    </div>
                    
                    <?php
                        endforeach;
                    ?>
            </div>
        </div>
        <!-- sale Products -->
        <div class="text-center mt-5">
            <H4 class="my-3">SẢN PHẨM BÁN CHẠY</H4>
            <div class="row"> <!-- đã sửa -->
                <?php
                    foreach ($sp_hot as $sp):
                ?>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                        <a href="?mod=product&act=detail&id=<?=$sp['MaSanPham']?>"><img class="img-fluid mb-2 rounded-top" src="../content/img/<?=$sp['HinhAnh']?>" alt="" ></a>
                        <p><b><?=$sp['TenSanPham']?></b></p>
                        <span class="text-danger">Giá: <?=$sp['GiaKhuyenMai']?> </span> <span> <del> <?=$sp['Gia']?> đ </del></span>
                        <p></p>
                        <a href="?mod=cart&act=add&id=<?=$sp['MaSanPham']?>" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <?php  endforeach; ?>
            </div>
        </div>
        <!-- All categories -->
        <div class="text-center mt-5">
            <div class=" d-flex">
                <H4 class="my-3">Thời Trang Nữ</H4>
                <a href="?mod=page&act=category&id=" class="btn btn-outline-dark my-3 ms-auto">Xem thêm</a>
            </div>
            <div class="row">
                <?php
                    foreach ($sp_nu as $sp):
                ?>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=<?=$sp['MaSanPham']?>">
                        <img class="img-fluid mb-2 rounded-top" src="../content/img/<?=$sp['HinhAnh']?>" alt="">
                    </a>
                    <p><b><?=$sp['TenSanPham']?></b></p>
                    <span class="text-danger">Giá: <?=$sp['GiaKhuyenMai']?> đ </span> <span> <del> <?=$sp['Gia']?> đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=<?=$sp['MaSanPham']?>" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <?php  endforeach; ?>
            </div>
        </div>
        <div class="text-center mt-5">
            <div class=" d-flex">
                <H4 class="my-3">Thời Trang Nam</H4>
                <a href="?mod=page&act=category&id=" class="btn btn-outline-dark my-3 ms-auto">Xem thêm</a>
            </div>
            <div class="row">
                <?php 
                    foreach ($sp_nam as $sp):
                ?>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=<?=$sp['MaSanPham']?>">
                        <img class="img-fluid mb-2 rounded-top" src="../content/img/<?=$sp['HinhAnh']?>" alt="">
                    </a>
                    <p><b><?=$sp['TenSanPham']?></b></p>
                    <span class="text-danger">Giá: <?=$sp['GiaKhuyenMai']?> đ </span> <span> <del> <?=$sp['Gia']?> đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=<?=$sp['MaSanPham']?>" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <?php  endforeach; ?>
            </div>
        </div>
        <div class="text-center mt-5">
            <div class=" d-flex">
                <H4 class="my-3">Thời Trang Trẻ Em</H4>
                <a href="?mod=page&act=category&id=" class="btn btn-outline-dark my-3 ms-auto">Xem thêm</a>
            </div>
            <div class="row">
                <?php
                    foreach ($sp_treem as $sp):
                ?>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                    <a href="?mod=product&act=detail&id=<?=$sp['MaSanPham']?>">
                        <img class="img-fluid mb-2 rounded-top" src="../content/img/<?=$sp['HinhAnh']?>" alt="">
                    </a>
                    <p><b><?=$sp['TenSanPham']?></b></p>
                    <span class="text-danger">Giá: <?=$sp['GiaKhuyenMai']?> đ </span> <span> <del> <?=$sp['Gia']?> đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=<?=$sp['MaSanPham']?>" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        
    </main>
    
    <!-- footer -->
    <div class="bg-dark mt-5">
        <div class=" bg-dark p-5 text-center">
            <p for="newsletter1" class="text-white mx-5">Hãy nhập địa chỉ email để nhận được mã giảm giá </p>
            <div class="d-flex justify-content-center">
                <input id="newsletter1" type="text" class="form-control w-25 rounded-0" placeholder="Nhập email của bạn . . .">
                <button class="btn btn-danger bg-opacity-75 rounded-0 " type="button">Đăng ký</button>
              </div>
        </div>
    </div>

   