<?php
// Lấy ID từ URL (không dùng DB)
$id = $_GET['id'] ?? 1;
?>

<div class="container my-5">
    <div class="row">
        <!-- === HÌNH ẢNH LỚN + 5 ẢNH NHỎ === -->
        <div class="col-md-6">
            <div id="main-image" class="mb-3 text-center">
                <img src="assets/images/products/s25-1.jpg" class="img-fluid rounded shadow" style="max-height: 500px; width: 100%; object-fit: cover;" alt="Samsung S25">
            </div>
            <div class="d-flex justify-content-center gap-2">
                <img src="assets/images/products/s25-1.jpg" class="img-thumbnail" style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;" onclick="changeImage('assets/images/products/s25-1.jpg')">
                <img src="assets/images/products/s25-2.jpg" class="img-thumbnail" style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;" onclick="changeImage('assets/images/products/s25-2.jpg')">
                <img src="assets/images/products/s25-3.jpg" class="img-thumbnail" style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;" onclick="changeImage('assets/images/products/s25-3.jpg')">
                <img src="assets/images/products/s25-4.jpg" class="img-thumbnail" style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;" onclick="changeImage('assets/images/products/s25-4.jpg')">
                <img src="assets/images/products/s25-5.jpg" class="img-thumbnail" style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;" onclick="changeImage('assets/images/products/s25-5.jpg')">
            </div>
        </div>

        <!-- === GIÁ + CẤU HÌNH + NÚT MUA === -->
        <div class="col-md-6">
            <h1 class="text-danger mb-3">Samsung Galaxy S25 12GB 256GB</h1>
            <div class="d-flex align-items-center mb-3">
                <span class="fs-1 text-danger fw-bold me-3">17.190.000đ</span>
                <span class="text-muted text-decoration-line-through">22.990.000đ</span>
            </div>

            <p><small><strong>Màu sắc:</strong> Xanh dương</small> | <small><strong>Bộ nhớ:</strong> 256GB</small></p>

            <div class="d-flex gap-2 mb-4">
                <a href="#" class="btn btn-danger btn-lg flex-grow-1">Mua ngay</a>
                <button onclick="addToCart()" class="btn btn-outline-danger btn-lg" title="Thêm vào giỏ">
                    <i class="bi bi-cart-plus"></i>
                </button>
            </div>

            <h5 class="mt-4">Thông số kỹ thuật</h5>
            <table class="table table-sm table-bordered">
                <tr><td>Màn hình</td><td>6.2" 120Hz 2340x1080</td></tr>
                <tr><td>Camera sau</td><td>50MP + 12MP + 10MP</td></tr>
                <tr><td>CPU</td><td>Snapdragon 8 Elite</td></tr>
                <tr><td>RAM/Rom</td><td>12GB/256GB</td></tr>
                <tr><td>Pin</td><td>4000mAh, sạc 45W</td></tr>
            </table>
        </div>
    </div>

    <!-- === MÔ TẢ + ĐẶC ĐIỂM === -->
    <div class="row mt-5">
        <div class="col-12">
            <h3>Mô tả sản phẩm</h3>
            <p>Samsung Galaxy S25 ra mắt với chip Snapdragon 8 Elite mạnh mẽ, màn hình 6.2" 120Hz, camera AI thông minh. Thiết kế cao cấp, pin 4000mAh, sạc nhanh 45W. Hỗ trợ 7 năm cập nhật phần mềm.</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <h5>Thông tin hãng hóa</h5>
            <ul class="list-unstyled">
                <li>Bảo hành chính hãng 12 tháng</li>
                <li>1 đổi 1 trong 60 ngày</li>
                <li>Giao hàng miễn phí 10km</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5>Đặc điểm nổi bật</h5>
            <ul class="list-unstyled">
                <li>Chip AI mạnh nhất</li>
                <li>Camera 50MP</li>
                <li>Màn hình AMOLED 2X</li>
                <li>Sạc nhanh 45W</li>
            </ul>
        </div>
    </div>
</div>

<!-- JS CHUYỂN ẢNH + THÊM GIỎ -->
<script>
function changeImage(src) {
    document.getElementById('main-image').querySelector('img').src = src;
}

function addToCart() {
    alert('Đã thêm vào giỏ hàng!');
}
</script>

<!-- Icon giỏ hàng -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">