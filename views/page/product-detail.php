<?php
// Lấy ID từ URL (sẽ dùng khi có DB)
$id = $_GET['id'] ?? 1;
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung Galaxy S25 12GB 256GB - SmartTech Store</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        /* === NÚT CHỌN MÀU / BỘ NHỚ === */
        .color-btn.active, .memory-btn.active {
            background-color: #dc3545 !important;
            color: white !important;
            border-color: #dc3545 !important;
        }
        .color-btn:hover, .memory-btn:hover {
            background-color: #f8f9fa;
        }

        /* === MÔ TẢ: ẨN 3 DÒNG + XEM THÊM === */
        #descBox {
            position: relative;
            line-height: 1.8;
            max-height: 5.4em; /* 3 dòng */
            overflow: hidden;
            transition: max-height 0.4s ease;
        }
        #descBox::after {
            content: "";
            position: absolute;
            bottom: 0; left: 0; right: 0;
            height: 2.5em;
            background: linear-gradient(transparent, white);
            pointer-events: none;
        }
        #descBox.expanded {
            max-height: 2000px;
        }
        #descBox.expanded::after {
            display: none;
        }
        .desc-full p, .desc-full ul {
            margin: 0.5rem 0 !important;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="row">
        <!-- === ẢNH SẢN PHẨM === -->
        <div class="col-md-6">
            <div id="main-image" class="mb-3 text-center">
                <img src="assets/images/products/s25-1.jpg"
                     id="mainImg"
                     class="img-fluid rounded shadow"
                     style="max-height: 500px; width: 500px; object-fit: cover;"
                     alt="Samsung S25">
            </div>

            <div class="d-flex justify-content-center gap-2 flex-wrap">
                <img src="assets/images/products/s25-1.jpg" class="img-thumbnail thumb" style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;" onclick="changeImage(this)">
                <img src="assets/images/products/s25-2.jpg" class="img-thumbnail thumb" style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;" onclick="changeImage(this)">
                <img src="assets/images/products/s25-3.jpg" class="img-thumbnail thumb" style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;" onclick="changeImage(this)">
                <img src="assets/images/products/s25-4.jpg" class="img-thumbnail thumb" style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;" onclick="changeImage(this)">
                <img src="assets/images/products/s25-5.jpg" class="img-thumbnail thumb" style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;" onclick="changeImage(this)">
            </div>
        </div>

        <!-- === THÔNG TIN SẢN PHẨM === -->
        <div class="col-md-6">
            <h1 class="text-danger mb-3">Samsung Galaxy S25 12GB 256GB</h1>
            <div class="d-flex align-items-center mb-3">
                <span class="fs-1 text-danger fw-bold me-3">17.190.000đ</span>
                <span class="text-muted text-decoration-line-through">22.990.000đ</span>
            </div>

            <!-- MÀU SẮC -->
            <div class="mb-3">
                <label class="form-label fw-bold">Màu sắc:</label>
                <div class="d-flex gap-2 flex-wrap">
                    <button type="button" class="btn btn-outline-secondary color-btn active" data-color="Xanh dương">Xanh dương</button>
                    <button type="button" class="btn btn-outline-secondary color-btn" data-color="Đen">Đen</button>
                    <button type="button" class="btn btn-outline-secondary color-btn" data-color="Bạc">Bạc</button>
                </div>
            </div>

            <!-- BỘ NHỚ -->
            <div class="mb-3">
                <label class="form-label fw-bold">Bộ nhớ:</label>
                <div class="d-flex gap-2 flex-wrap">
                    <button type="button" class="btn btn-outline-primary memory-btn active" data-memory="256GB">256GB</button>
                    <button type="button" class="btn btn-outline-primary memory-btn" data-memory="512GB">512GB</button>
                    <button type="button" class="btn btn-outline-primary memory-btn" data-memory="1TB">1TB</button>
                </div>
            </div>

            <!-- GIÁ ĐỘNG -->
            <p class="h4 text-danger mb-1" id="selectedPrice">17.190.000đ</p>
            <p class="text-muted"><del id="oldPrice">22.990.000đ</del></p>

            <!-- NÚT MUA -->
            <div class="d-flex gap-2 mt-4">
                <a href="#" class="btn btn-danger btn-lg flex-grow-1">Mua ngay</a>
                <button onclick="addToCart()" class="btn btn-outline-danger btn-lg" title="Thêm vào giỏ">
                    <i class="bi bi-cart-plus"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- === MÔ TẢ + THÔNG SỐ === -->
    <div class="row mt-5">
        <!-- MÔ TẢ (CÓ XEM THÊM) -->
        <div class="col-lg-8 mb-4">
            <h4 class="mb-3">Mô tả sản phẩm</h4>

            <div id="descBox" class="text-muted">
                <div id="descShort">
                    Samsung Galaxy S25 ra mắt với chip Snapdragon 8 Elite mạnh mẽ, màn hình 6.2" 120Hz, camera AI thông minh. 
                    Thiết kế cao cấp, pin 4000mAh, sạc nhanh 45W. Hỗ trợ 7 năm cập nhật phần mềm.
                </div>

                <div id="descFull" style="display: none; margin-top: 0.75rem;">
                    <p class="mb-2"><strong>Điểm nổi bật:</strong></p>
                    <ul class="list-unstyled ms-3 mb-0">
                        <li>Màn hình Dynamic AMOLED 2X, độ sáng lên đến 2600 nits</li>
                        <li>Camera chính 50MP với AI Scene Optimizer</li>
                        <li>Sạc nhanh 45W, sạc không dây 15W</li>
                        <li>Chống nước IP68, khung viền titanium</li>
                        <li>Hệ điều hành One UI 7.0 mới nhất</li>
                        <li>Hỗ trợ Galaxy AI: Live Translate, Circle to Search, Photo Assist</li>
                    </ul>
                </div>
            </div>

            <button id="toggleBtn" class="btn btn-link p-0 mt-2 text-danger fw-medium" style="display: none;">
                Xem thêm <i class="bi bi-chevron-down"></i>
            </button>
        </div>

        <!-- THÔNG SỐ KỸ THUẬT -->
        <div class="col-lg-4">
            <h4 class="mb-3">Thông số kỹ thuật</h4>
            <table class="table table-sm table-bordered">
                <tbody>
                    <tr><td class="fw-bold">Màn hình</td><td>6.2" 120Hz 2340x1080</td></tr>
                    <tr><td class="fw-bold">Camera sau</td><td>50MP + 12MP + 10MP</td></tr>
                    <tr><td class="fw-bold">CPU</td><td>Snapdragon 8 Elite</td></tr>
                    <tr><td class="fw-bold">RAM/Rom</td><td>12GB/256GB</td></tr>
                    <tr><td class="fw-bold">Pin</td><td>4000mAh, sạc 45W</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- === JAVASCRIPT === -->
<script>
/* 1. ẢNH NHỎ → ẢNH LỚN */
function changeImage(el) {
    const main = document.getElementById('mainImg');
    main.src = el.src;
    main.style.opacity = 0.3;
    setTimeout(() => main.style.opacity = 1, 100);

    document.querySelectorAll('.thumb').forEach(t => t.style.border = '2px solid transparent');
    el.style.border = '2px solid #dc3545';
}

/* 2. CHỌN MÀU + BỘ NHỚ + GIÁ */
document.addEventListener('DOMContentLoaded', () => {
    const basePrice = 17190000;
    const prices = { '256GB': 0, '512GB': 2000000, '1TB': 5000000 };

    document.querySelectorAll('.color-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.color-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        });
    });

    document.querySelectorAll('.memory-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.memory-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const mem = btn.dataset.memory;
            const newPrice = basePrice + (prices[mem] || 0);
            document.getElementById('selectedPrice').textContent = newPrice.toLocaleString('vi-VN') + 'đ';
        });
    });
});

/* 3. XEM THÊM / THU GỌN – BẮT BUỘC HIỆN NÚT */
window.addEventListener('load', () => {
    const box = document.getElementById('descBox');
    const short = document.getElementById('descShort');
    const full = document.getElementById('descFull');
    const btn = document.getElementById('toggleBtn');

    if (!box || !short || !full || !btn) return;

    // Ẩn phần dài
    full.style.display = 'none';

    // Kiểm tra có cần nút không
    const check = () => {
        // Tạm mở rộng để đo chiều cao thật
        box.classList.add('expanded');
        full.style.display = 'block';

        const need = box.scrollHeight > 180; // > ~5 dòng

        // Thu lại
        box.classList.remove('expanded');
        full.style.display = 'none';

        if (need) {
            btn.style.display = 'inline-block';
        }
    };

    setTimeout(check, 200);
    setTimeout(check, 600);

    // Toggle
    btn.addEventListener('click', () => {
        if (box.classList.contains('expanded')) {
            box.classList.remove('expanded');
            full.style.display = 'none';
            btn.innerHTML = 'Xem thêm <i class="bi bi-chevron-down"></i>';
        } else {
            box.classList.add('expanded');
            full.style.display = 'block';
            btn.innerHTML = 'Thu gọn <i class="bi bi-chevron-up"></i>';
        }
    });
});

/* 4. GIỎ HÀNG */
function addToCart() {
    alert('Đã thêm Samsung Galaxy S25 vào giỏ hàng!');
}
</script>

</body>
</html>