<?php layout('AdminLayout', ['title' => $title]); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Báo cáo hiệu quả tour</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= BASE_URL ?>baocao">Báo cáo</a></li>
                    <li class="breadcrumb-item active">Hiệu quả tour</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Bộ lọc tháng -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="GET" class="row">
                        <div class="col-md-6">
                            <label>Chọn tháng:</label>
                            <input type="month" name="thang" class="form-control" value="<?= $thang ?>">
                        </div>
                        <div class="col-md-6">
                            <label>&nbsp;</label>
                            <button type="submit" class="btn btn-primary form-control">Xem báo cáo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bảng hiệu quả tour -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>So sánh hiệu quả các tour tháng <?= date('m/Y', strtotime($thang)) ?></h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tên tour</th>
                                    <th>Số lượt đặt</th>
                                    <th>Tỷ lệ hủy</th>
                                    <th>Doanh thu</th>
                                    <th>Đánh giá TB</th>
                                    <th>Tỷ lệ lấp đầy</th>
                                    <th>Hiệu quả</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tourStats as $stat): ?>
                                <tr>
                                    <td><?= htmlspecialchars($stat['ten_tour']) ?></td>
                                    <td><?= $stat['so_booking'] ?></td>
                                    <td>
                                        <span class="badge <?= $stat['ty_le_huy'] > 10 ? 'badge-danger' : 'badge-success' ?>">
                                            <?= number_format($stat['ty_le_huy'], 1) ?>%
                                        </span>
                                    </td>
                                    <td><?= number_format($stat['doanh_thu']) ?> VNĐ</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span><?= number_format($stat['danh_gia_tb'], 1) ?></span>
                                            <div class="ml-2">
                                                <?php for($i = 1; $i <= 5; $i++): ?>
                                                    <span class="<?= $i <= $stat['danh_gia_tb'] ? 'text-warning' : 'text-muted' ?>">★</span>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar <?= $stat['ty_le_lap_day'] > 80 ? 'bg-success' : ($stat['ty_le_lap_day'] > 50 ? 'bg-warning' : 'bg-danger') ?>" 
                                                 style="width: <?= $stat['ty_le_lap_day'] ?>%">
                                                <?= number_format($stat['ty_le_lap_day'], 1) ?>%
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <?php 
                                        $hieuQua = 'Thấp';
                                        $badgeClass = 'badge-danger';
                                        if ($stat['diem_hieu_qua'] >= 80) {
                                            $hieuQua = 'Cao';
                                            $badgeClass = 'badge-success';
                                        } elseif ($stat['diem_hieu_qua'] >= 60) {
                                            $hieuQua = 'Trung bình';
                                            $badgeClass = 'badge-warning';
                                        }
                                        ?>
                                        <span class="badge <?= $badgeClass ?>">
                                            <?= $hieuQua ?> (<?= $stat['diem_hieu_qua'] ?>)
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

    <!-- Khuyến nghị cải thiện -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Khuyến nghị cải thiện</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-success">Tour hiệu quả cao:</h6>
                            <ul class="list-unstyled">
                                <?php foreach ($tourStats as $stat): ?>
                                    <?php if ($stat['diem_hieu_qua'] >= 80): ?>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success"></i>
                                        <strong><?= htmlspecialchars($stat['ten_tour']) ?></strong>
                                        <br><small class="text-muted">Duy trì chất lượng dịch vụ hiện tại</small>
                                    </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-warning">Tour cần cải thiện:</h6>
                            <ul class="list-unstyled">
                                <?php foreach ($tourStats as $stat): ?>
                                    <?php if ($stat['diem_hieu_qua'] < 60): ?>
                                    <li class="mb-2">
                                        <i class="fas fa-exclamation-triangle text-warning"></i>
                                        <strong><?= htmlspecialchars($stat['ten_tour']) ?></strong>
                                        <br><small class="text-muted">
                                            <?php if ($stat['ty_le_huy'] > 10): ?>
                                                Giảm tỷ lệ hủy tour
                                            <?php elseif ($stat['danh_gia_tb'] < 4): ?>
                                                Cải thiện chất lượng dịch vụ
                                            <?php else: ?>
                                                Tăng cường marketing
                                            <?php endif; ?>
                                        </small>
                                    </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>