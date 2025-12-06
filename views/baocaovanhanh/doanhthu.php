<?php layout('AdminLayout', ['title' => $title]); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Báo cáo doanh thu</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= BASE_URL ?>baocao">Báo cáo</a></li>
                    <li class="breadcrumb-item active">Doanh thu</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Bộ lọc thời gian -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="GET" class="row">
                        <div class="col-md-4">
                            <label>Từ ngày:</label>
                            <input type="date" name="tu_ngay" class="form-control" value="<?= $tuNgay ?>">
                        </div>
                        <div class="col-md-4">
                            <label>Đến ngày:</label>
                            <input type="date" name="den_ngay" class="form-control" value="<?= $denNgay ?>">
                        </div>
                        <div class="col-md-4">
                            <label>&nbsp;</label>
                            <button type="submit" class="btn btn-primary form-control">Lọc</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tổng quan doanh thu -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5>Tổng doanh thu</h5>
                    <h3><?= number_format($doanhThu['tong_doanh_thu']) ?> VNĐ</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5>Tổng chi phí</h5>
                    <h3><?= number_format($doanhThu['tong_chi_phi']) ?> VNĐ</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5>Lợi nhuận</h5>
                    <h3><?= number_format($doanhThu['loi_nhuan']) ?> VNĐ</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Chi tiết theo tour -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Chi tiết doanh thu theo tour</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tên tour</th>
                                    <th>Số booking</th>
                                    <th>Doanh thu</th>
                                    <th>Chi phí ước tính</th>
                                    <th>Lợi nhuận</th>
                                    <th>Tỷ lệ lợi nhuận</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($chiTietTour as $tour): ?>
                                <tr>
                                    <td><?= htmlspecialchars($tour['ten_tour']) ?></td>
                                    <td><?= $tour['so_booking'] ?></td>
                                    <td><?= number_format($tour['doanh_thu']) ?> VNĐ</td>
                                    <td><?= number_format($tour['chi_phi']) ?> VNĐ</td>
                                    <td><?= number_format($tour['loi_nhuan']) ?> VNĐ</td>
                                    <td>
                                        <span class="badge <?= $tour['ty_le_loi_nhuan'] > 20 ? 'badge-success' : 'badge-warning' ?>">
                                            <?= number_format($tour['ty_le_loi_nhuan'], 1) ?>%
                                        </span>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Biểu đồ doanh thu (placeholder) -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Biểu đồ doanh thu theo ngày</h5>
                </div>
                <div class="card-body">
                    <canvas id="revenueChart" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Placeholder cho biểu đồ - có thể tích hợp Chart.js sau
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('revenueChart');
    if (ctx) {
        ctx.getContext('2d').fillText('Biểu đồ doanh thu sẽ được hiển thị tại đây', 10, 50);
    }
});
</script>