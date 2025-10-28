<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SmartTech Store</title>
    <!-- Bootstrap 5 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .countdown-box {
            font-size: 2rem;
            font-weight: bold;
        }

        .discount-badge {
            font-size: 0.75rem;
        }

        .product-card {
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <?php
    include_once __DIR__ . '/../partials/header.php';
    ?>
    <main class="container my-4">
        <?php include $content;
        ?>
    </main>

    <?php include __DIR__ . '/../partials/footer.php'; ?>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Countdown: 00 ngày 00 giờ 03 phút 21 giây
    let days = 0,
        hours = 0,
        minutes = 0,
        seconds = 21;
    const update = () => {
        if (seconds > 0) seconds--;
        else {
            seconds = 59;
            if (minutes > 0) minutes--;
            else {
                minutes = 59;
                if (hours > 0) hours--;
                else {
                    hours = 23;
                    if (days > 0) days--;
                }
            }
        }
        document.getElementById('countdown').textContent = [days, hours, minutes, seconds].map(v => v.toString().padStart(2, '0')).join(' ');
    };
    setInterval(update, 1000);
</script>

</body>

</html>