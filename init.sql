-- ========================================
-- SMARTTECHSTORE - CSDL BÁN ĐIỆN THOẠI
-- 8 BẢNG | BRANDS RIÊNG | SOFT DELETE | 4 TRẠNG THÁI ĐƠN
-- ========================================

CREATE DATABASE IF NOT EXISTS smarttechstore 
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE smarttechstore;

-- 1. brands
CREATE TABLE brands (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) UNIQUE NOT NULL,
    slug VARCHAR(50) UNIQUE NOT NULL,
    logo VARCHAR(100),
    is_deleted TINYINT(1) DEFAULT 0
);

-- 2. categories
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    slug VARCHAR(50) UNIQUE NOT NULL,
    is_deleted TINYINT(1) DEFAULT 0
);

-- 3. users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('customer', 'admin') DEFAULT 'customer',
    is_deleted TINYINT(1) DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- 4. products
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    slug VARCHAR(200) UNIQUE NOT NULL,
    category_id INT,
    brand_id INT,
    description TEXT,
    is_deleted TINYINT(1) DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL,
    FOREIGN KEY (brand_id) REFERENCES brands(id) ON DELETE SET NULL
);

-- 5. product_variants
CREATE TABLE product_variants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    ram VARCHAR(20),
    rom VARCHAR(20),
    color VARCHAR(30),
    price DECIMAL(12,0) NOT NULL,
    stock INT DEFAULT 0,
    sku VARCHAR(50) UNIQUE,
    is_deleted TINYINT(1) DEFAULT 0,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);

-- 6. variant_images
CREATE TABLE variant_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    variant_id INT,
    image_url VARCHAR(100) NOT NULL,
    is_main TINYINT(1) DEFAULT 0,
    FOREIGN KEY (variant_id) REFERENCES product_variants(id) ON DELETE CASCADE
);

-- 7. orders (CHỈ 4 TRẠNG THÁI)
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    total DECIMAL(12,0) NOT NULL,
    status ENUM('pending','preparing','shipped','cancelled') DEFAULT 'pending',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

-- 8. order_items
CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    variant_id INT,
    quantity INT NOT NULL,
    price DECIMAL(12,0) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE SET NULL,
    FOREIGN KEY (variant_id) REFERENCES product_variants(id) ON DELETE SET NULL
);

-- ========================================
-- DỮ LIỆU MẪU
-- ========================================

-- Thương hiệu
INSERT INTO brands (name, slug, logo) VALUES
('Apple', 'apple', 'apple-logo.png'),
('Samsung', 'samsung', 'samsung-logo.png'),
('Spigen', 'spigen', 'spigen-logo.png');

-- Danh mục
INSERT INTO categories (name, slug) VALUES
('iPhone', 'iphone'),
('Samsung', 'samsung'),
('Phụ kiện', 'phu-kien');

-- Admin (mật khẩu: 123456)
INSERT INTO users (name, email, password, role) VALUES 
('Admin', 'admin@shop.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin');

-- Sản phẩm
INSERT INTO products (name, slug, category_id, brand_id, description) VALUES
('iPhone 15 Pro Max', 'iphone-15-pro-max', 1, 1, 'Chip A17 Pro, camera 48MP'),
('Galaxy S24 Ultra', 'samsung-s24-ultra', 2, 2, 'S Pen, camera 200MP'),
('Ốp lưng iPhone 15', 'op-lung-iphone15', 3, 3, 'Chống sốc, trong suốt');

-- Biến thể
INSERT INTO product_variants (product_id, ram, rom, color, price, stock, sku) VALUES
(1, '8GB', '256GB', 'Black Titanium', 34990000, 10, 'IP15PM-256-BLACK'),
(1, '8GB', '256GB', 'Blue Titanium', 34990000, 5, 'IP15PM-256-BLUE');

-- Ảnh
INSERT INTO variant_images (variant_id, image_url, is_main) VALUES
(1, 'iphone15pm-black-1.jpg', 1),
(1, 'iphone15pm-black-2.jpg', 0),
(2, 'iphone15pm-blue-1.jpg', 1);

-- Đơn hàng mẫu (4 trạng thái)
INSERT INTO orders (user_id, total, status) VALUES
(1, 34990000, 'pending'),      -- Đang chờ xác nhận
(1, 31990000, 'preparing'),    -- Đang chuẩn bị hàng
(1, 250000, 'shipped'),        -- Đã giao
(1, 34990000, 'cancelled');    -- Hủy đơn

INSERT INTO order_items (order_id, product_id, variant_id, quantity, price) VALUES
(1, 1, 1, 1, 34990000),
(2, 2, NULL, 1, 31990000),
(3, 3, NULL, 1, 250000),
(4, 1, 2, 1, 34990000);