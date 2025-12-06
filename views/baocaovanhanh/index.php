<?php layout('AdminLayout', ['title' => $title]); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Báo cáo vận hành tour</h2>
            <p class="text-muted">Tổng quan hoạt động kinh doanh tour</p>
        </div>
    </div>

    <!-- Thống kê tổng quan -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5>Tổng số tour</h5>
                    <h3><?= $tongTour ?></h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5>Tổng booking</h5>
                    <h3><?= $tongBooking ?></h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5>Doanh thu tháng</h5>
                    <h3><?= number_format($doanhThuThang) ?> VNĐ</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5>Tour phổ biến</h5>
                    <h3><?= count($tourPhoBien) ?></h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu báo cáo -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5>Báo cáo doanh thu</h5>
                    <p>Doanh thu, chi phí, lợi nhuận theo tour</p>
                    <a href="<?= BASE_URL ?>baocao/doanhthu" class="btn btn-primary">Xem báo cáo</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5>Hiệu quả tour</h5>
                    <p>So sánh hiệu quả các tour theo thời gian</p>
                    <a href="<?= BASE_URL ?>baocao/hieuquatour" class="btn btn-success">Xem báo cáo</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5>Thống kê khách hàng</h5>
                    <p>Phân tích hành vi và sở thích khách hàng</p>
                    <a href="<?= BASE_URL ?>baocao/khachhang" class="btn btn-info">Xem báo cáo</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tour phổ biến -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Top 5 tour phổ biến nhất</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Tên tour</th>
                                    <th>Số lượt đặt</th>
                                    <th>Doanh thu</th>
                                    <th>Đánh giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tourPhoBien as $tour): ?>
                                <tr>
                                    <td><?= htmlspecialchars($tour['name']) ?></td>
                                    <td><?= $tour['booking_count'] ?></td>
                                    <td><?= number_format($tour['revenue']) ?> VNĐ</td>
                                    <td>
                                        <span class="badge badge-success">
                                            <?= $tour['rating'] ?>/5 ⭐
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
</div>