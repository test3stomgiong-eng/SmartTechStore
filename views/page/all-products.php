<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điện thoại, Smartphone - SmartTech Store</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f8f9fa; }
        .brand-btn {
            border: 1px solid #ddd;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 0.9rem;
            transition: all 0.2s;
            white-space: nowrap;
        }
        .brand-btn.active, .brand-btn:hover {
            border-color: #dc3545 !important;
            background: #dc3545 !important;
            color: white !important;
        }
        .filter-btn {
            font-size: 0.85rem;
            padding: 6px 12px;
            border: none;
            background: transparent;
        }
        .filter-btn:hover {
            background: #f1f1f1;
            border-radius: 6px;
        }
        .product-card {
            transition: all 0.2s;
            border: 1px solid #eee;
            border-radius: 12px;
            overflow: hidden;
            background: white;
        }
        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        .discount-badge {
            position: absolute;
            top: 8px;
            right: 8px;
            background: #ff0000;
            color: white;
            font-size: 0.75rem;
            padding: 4px 8px;
            border-radius: 12px;
            font-weight: bold;
        }
        .promo-tag {
            position: absolute;
            bottom: 8px;
            left: 8px;
            background: #28a745;
            color: white;
            font-size: 0.7rem;
            padding: 2px 6px;
            border-radius: 4px;
        }
        .price-old {
            font-size: 0.85rem;
        }
        .installment {
            font-size: 0.75rem;
            color: #666;
        }
        .page-link.active {
            background: #dc3545;
            border-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>

<div class="container my-4">

    <!-- BREADCRUMB -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html" class="text-danger text-decoration-none">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Điện thoại</li>
        </ol>
    </nav>

    <div class="row">
        <!-- SIDEBAR LỌC -->
        <div class="col-lg-3 mb-4">
            <h5 class="fw-bold mb-3">Hãng sản xuất</h5>
            <div class="d-flex flex-wrap gap-2 mb-4">
                <button class="btn brand-btn active">Samsung</button>
                <button class="btn brand-btn">iPhone</button>
                <button class="btn brand-btn">OPPO</button>
                <button class="btn brand-btn">Xiaomi</button>
                <button class="btn brand-btn">vivo</button>
                <button class="btn brand-btn">HONOR</button>
                <button class="btn brand-btn">TECNO</button>
            </div>

            <h6 class="fw-bold mb-2">Lọc theo</h6>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action filter-btn">Bộ lọc</a>
                <a href="#" class="list-group-item list-group-item-action filter-btn">Ram</a>
                <a href="#" class="list-group-item list-group-item-action filter-btn">Tần số quét</a>
                <a href="#" class="list-group-item list-group-item-action filter-btn">Kích thước màn hình</a>
                <a href="#" class="list-group-item list-group-item-action filter-btn">Dung lượng pin</a>
                <a href="#" class="list-group-item list-group-item-action filter-btn">Khoảng giá</a>
                <a href="#" class="list-group-item list-group-item-action filter-btn">Màn hình</a>
                <a href="#" class="list-group-item list-group-item-action filter-btn">Camera sau</a>
                <a href="#" class="list-group-item list-group-item-action filter-btn">Bộ nhớ trong</a>
                <a href="#" class="list-group-item list-group-item-action filter-btn">Hệ điều hành</a>
                <a href="#" class="list-group-item list-group-item-action filter-btn">Tính năng đặc biệt</a>
            </div>
        </div>

        <!-- DANH SÁCH SẢN PHẨM -->
        <div class="col-lg-9">
            <!-- SẮP XẾP -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Điện thoại, smartphone</h5>
                <div>
                    <span class="me-2 text-muted">Sắp xếp theo:</span>
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-outline-secondary active">Nổi bật</button>
                        <button class="btn btn-outline-secondary">Mới nhất</button>
                        <button class="btn btn-outline-secondary">Xem nhiều</button>
                        <button class="btn btn-outline-secondary">Giá tăng</button>
                        <button class="btn btn-outline-secondary">Giá giảm</button>
                    </div>
                </div>
            </div>

            <!-- GRID SẢN PHẨM -->
            <div class="row g-3" id="productGrid">
                <!-- SẢN PHẨM 1 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card position-relative bg-white p-3 h-100">
                        <span class="discount-badge">Giảm 4%</span>
                        <img src="https://cdn.tgdd.vn/Products/Images/42/309722/iphone-16-pro-max-den-1.jpg" class="img-fluid mb-3" alt="iPhone 17">
                        <h6 class="mb-2" style="font-size: 0.9rem; line-height: 1.3;">
                            <a href="/product-detail" class="text-dark text-decoration-none">iPhone 17 256GB</a>
                        </h6>
                        <div class="mb-2">
                            <strong class="text-danger">24.990.000đ</strong>
                            <del class="text-muted price-old ms-1">25.990.000đ</del>
                        </div>
                        <p class="installment mb-2">Liên hệ: 1800.8123</p>
                        <span class="promo-tag">Trả góp 0%</span>
                    </div>
                </div>

                <!-- SẢN PHẨM 2 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card position-relative bg-white p-3 h-100">
                        <span class="discount-badge">Giảm 5%</span>
                        <img src="https://cdn.tgdd.vn/Products/Images/42/309722/iphone-16-pro-max-vang-1.jpg" class="img-fluid mb-3" alt="iPhone 17 Pro Max">
                        <h6 class="mb-2" style="font-size: 0.9rem; line-height: 1.3;">
                            <a href="#" class="text-dark text-decoration-none">iPhone 17 Pro Max 256GB</a>
                        </h6>
                        <div class="mb-2">
                            <strong class="text-danger">37.990.000đ</strong>
                            <del class="text-muted price-old ms-1">39.990.000đ</del>
                        </div>
                        <p class="installment mb-2">Ưu đãi độc quyền</p>
                        <span class="promo-tag">Giảm thêm 1tr</span>
                    </div>
                </div>

                <!-- SẢN PHẨM 3 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card position-relative bg-white p-3 h-100">
                        <span class="discount-badge">Giảm 7%</span>
                        <img src="https://cdn.tgdd.vn/Products/Images/42/309722/iphone-16-pro-max-titan-1.jpg" class="img-fluid mb-3" alt="iPhone 17 Pro">
                        <h6 class="mb-2" style="font-size: 0.9rem; line-height: 1.3;">
                            <a href="#" class="text-dark text-decoration-none">iPhone 17 Pro 256GB</a>
                        </h6>
                        <div class="mb-2">
                            <strong class="text-danger">34.490.000đ</strong>
                            <del class="text-muted price-old ms-1">36.990.000đ</del>
                        </div>
                        <p class="installment mb-2">Ưu đãi độc quyền</p>
                        <span class="promo-tag">Tặng sạc 65W</span>
                    </div>
                </div>

                <!-- SẢN PHẨM 4 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card position-relative bg-white p-3 h-100">
                        <span class="discount-badge">Giảm 8%</span>
                        <img src="https://cdn.tgdd.vn/Products/Images/42/309722/iphone-16-pro-max-xanh-1.jpg" class="img-fluid mb-3" alt="iPhone Air">
                        <h6 class="mb-2" style="font-size: 0.9rem; line-height: 1.3;">
                            <a href="#" class="text-dark text-decoration-none">iPhone Air 256GB</a>
                        </h6>
                        <div class="mb-2">
                            <strong class="text-danger">31.190.000đ</strong>
                            <del class="text-muted price-old ms-1">33.990.000đ</del>
                        </div>
                        <p class="installment mb-2">Giảm thêm 1 triệu</p>
                        <span class="promo-tag">Trả góp 0%</span>
                    </div>
                </div>

                <!-- SẢN PHẨM 5 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card position-relative bg-white p-3 h-100">
                        <span class="discount-badge">Giảm 7%</span>
                        <img src="https://cdn.tgdd.vn/Products/Images/42/309722/samsung-galaxy-z-flip7.jpg" class="img-fluid mb-3" alt="Samsung Z Flip7">
                        <h6 class="mb-2" style="font-size: 0.9rem; line-height: 1.3;">
                            <a href="#" class="text-dark text-decoration-none">Samsung Galaxy Z Flip7 5G 12GB 256GB</a>
                        </h6>
                        <div class="mb-2">
                            <strong class="text-danger">26.990.000đ</strong>
                            <del class="text-muted price-old ms-1">28.990.000đ</del>
                        </div>
                        <p class="installment mb-2">Trả góp 0%</p>
                        <span class="promo-tag">Tặng tai nghe</span>
                    </div>
                </div>

                <!-- SẢN PHẨM 6 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card position-relative bg-white p-3 h-100">
                        <span class="discount-badge">Giảm 8%</span>
                        <img src="https://cdn.tgdd.vn/Products/Images/42/309722/oppo-find-n5.jpg" class="img-fluid mb-3" alt="OPPO Find N5">
                        <h6 class="mb-2" style="font-size: 0.9rem; line-height: 1.3;">
                            <a href="#" class="text-dark text-decoration-none">OPPO Find N5 256GB</a>
                        </h6>
                        <div class="mb-2">
                            <strong class="text-danger">22.990.000đ</strong>
                            <del class="text-muted price-old ms-1">24.990.000đ</del>
                        </div>
                        <p class="installment mb-2">Tặng sạc 65W</p>
                        <span class="promo-tag">Giảm 2 triệu</span>
                    </div>
                </div>

                <!-- SẢN PHẨM 7 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card position-relative bg-white p-3 h-100">
                        <span class="discount-badge">Giảm 9%</span>
                        <img src="https://cdn.tgdd.vn/Products/Images/42/309722/xiaomi-15-pro.jpg" class="img-fluid mb-3" alt="Xiaomi 15 Pro">
                        <h6 class="mb-2" style="font-size: 0.9rem; line-height: 1.3;">
                            <a href="#" class="text-dark text-decoration-none">Xiaomi 15 Pro 256GB</a>
                        </h6>
                        <div class="mb-2">
                            <strong class="text-danger">18.990.000đ</strong>
                            <del class="text-muted price-old ms-1">20.990.000đ</del>
                        </div>
                        <p class="installment mb-2">Tặng tai nghe</p>
                        <span class="promo-tag">Trả góp 0%</span>
                    </div>
                </div>

                <!-- SẢN PHẨM 8 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card position-relative bg-white p-3 h-100">
                        <span class="discount-badge">Giảm 13%</span>
                        <img src="https://cdn.tgdd.vn/Products/Images/42/309722/vivo-v50.jpg" class="img-fluid mb-3" alt="vivo V50">
                        <h6 class="mb-2" style="font-size: 0.9rem; line-height: 1.3;">
                            <a href="#" class="text-dark text-decoration-none">vivo V50 256GB</a>
                        </h6>
                        <div class="mb-2">
                            <strong class="text-danger">12.990.000đ</strong>
                            <del class="text-muted price-old ms-1">14.990.000đ</del>
                        </div>
                        <p class="installment mb-2">Giảm 2 triệu</p>
                        <span class="promo-tag">Tặng ốp lưng</span>
                    </div>
                </div>
            </div>

            <!-- PHÂN TRANG -->
            <nav class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Trước</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Sau</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<script>
// LỌC HÃNG
document.querySelectorAll('.brand-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.brand-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        alert('Đang lọc theo: ' + this.textContent.trim());
    });
});

// SẮP XẾP
document.querySelectorAll('.btn-group .btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.btn-group .btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
    });
});
</script>

</body>
</html>