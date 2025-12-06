<?php
// Sử dụng layout main và truyền nội dung vào
ob_start();
?>

<div class="container py-4">

    <h2 class="mb-4">👤 Xin chào, <?= htmlspecialchars($user->name) ?></h2>

    <div class="alert alert-info">
        <strong>Chào mừng bạn!</strong> Đây là trang dành cho <b>Hướng Dẫn Viên</b>.
    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5 class="fw-bold mb-2">📅 Lịch Tour</h5>
                <p>Xem danh sách các tour mà bạn đang phụ trách.</p>
                <a href="<?= BASE_URL ?>user/tours" class="btn btn-primary btn-sm">Xem chi tiết</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5 class="fw-bold mb-2">📈 Báo cáo</h5>
                <p>Xem thống kê các tour đã dẫn.</p>
                <a href="<?= BASE_URL ?>user/reports" class="btn btn-primary btn-sm">Xem báo cáo</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5 class="fw-bold mb-2">⚙️ Tài khoản</h5>
                <p>Cập nhật thông tin cá nhân của bạn.</p>
                <a href="<?= BASE_URL ?>user/profile" class="btn btn-primary btn-sm">Cập nhật</a>
            </div>
        </div>

    </div>

</div>

<?php
$content = ob_get_clean();

view('layouts.MainLayout', [
    'title' => $title ?? 'Trang người dùng',
    'content' => $content,
]);
