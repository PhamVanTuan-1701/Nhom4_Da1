<?php
// Tệp layout chính (Ví dụ: dashboard.php)

// CHÚ Ý: Đảm bảo các tệp blocks/user_header.php và blocks/user_footer.php tồn tại.
// Tệp main_content_module.php được tạo để chứa nội dung chính của trang du lịch.

// Tùy chọn: Định nghĩa đường dẫn đến tệp nội dung chính (nếu nó không phải là biến $content)
$main_content_file = __DIR__ . '/blocks/main_content_module.php';

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <?php $__base = defined('BASE_URL') ? BASE_URL : '/'; ?>
    <link rel="stylesheet" href="<?php echo $__base; ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo $__base; ?>public/css/responsive.css">

</head>

<body>

    <?php include __DIR__ . '/blocks/user_header.php'; ?>

    <div class="container-fluid mt-3">
        <div class="row">

            <div class="col-12">
                <?php
                include __DIR__ . '/blocks/user_main.php';
                ?>
            </div>

        </div>
    </div>

    <?php include __DIR__ . '/blocks/user_footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo $__base; ?>public/js/main.js"></script>

</body>

</html>