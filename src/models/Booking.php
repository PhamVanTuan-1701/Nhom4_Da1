<?php
require_once __DIR__ . '/../helpers/database.php';

class Booking {
    // 1. Tạo đơn hàng mới
    public function create($data) {
        $db = getDB();
        
        // Đóng gói thông tin khách
        $info = json_encode([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'] ?? '',
            'people' => $data['people'],
            'total' => $data['total']
        ], JSON_UNESCAPED_UNICODE);

        // Lưu vào cột service_detail
        $sql = "INSERT INTO bookings (tour_id, start_date, service_detail, notes, status, created_at) 
                VALUES (:tour_id, :start_date, :info, :notes, 1, NOW())";
        
        $stmt = $db->prepare($sql);
        return $stmt->execute([
            'tour_id' => $data['tour_id'],
            'start_date' => $data['start_date'],
            'info' => $info,
            'notes' => $data['request'] ?? ''
        ]);
    }

    // 2. Lấy danh sách đơn hàng
    public function getAll() {
        $db = getDB();
        $sql = "SELECT b.*, t.name as tour_name, s.name as status_name 
                FROM bookings b 
                LEFT JOIN tours t ON b.tour_id = t.id 
                LEFT JOIN tour_statuses s ON b.status = s.id 
                ORDER BY b.created_at DESC";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // 3. Cập nhật trạng thái
    public function updateStatus($id, $status) {
        $db = getDB();
        $stmt = $db->prepare("UPDATE bookings SET status = :status WHERE id = :id");
        return $stmt->execute(['status' => $status, 'id' => $id]);
    }

    // 4. Xóa đơn hàng
    public function delete($id) {
        $db = getDB();
        $stmt = $db->prepare("DELETE FROM bookings WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    // 5. Đếm tổng số booking
    public function count() {
        // Trả về số liệu mẫu
        return 156;
    }

    // 6. Lấy doanh thu theo tháng
    public function getRevenueByMonth($month) {
        // Trả về dữ liệu mẫu
        return 285000000; // 285 triệu VNĐ
    }

    // 7. Báo cáo doanh thu theo khoảng thời gian
    public function getRevenueReport($fromDate, $toDate) {
        // Trả về dữ liệu mẫu
        return [
            'tong_doanh_thu' => 450000000,
            'tong_chi_phi' => 315000000,
            'loi_nhuan' => 135000000
        ];
    }

    // 8. Doanh thu chi tiết theo tour
    public function getRevenueByTour($fromDate, $toDate) {
        // Trả về dữ liệu mẫu
        return [
            [
                'ten_tour' => 'Tour Hạ Long 3N2Đ',
                'so_booking' => 25,
                'doanh_thu' => 125000000,
                'chi_phi' => 87500000,
                'loi_nhuan' => 37500000,
                'ty_le_loi_nhuan' => 30.0
            ],
            [
                'ten_tour' => 'Tour Sài Gòn - Cần Thơ',
                'so_booking' => 18,
                'doanh_thu' => 90000000,
                'chi_phi' => 63000000,
                'loi_nhuan' => 27000000,
                'ty_le_loi_nhuan' => 30.0
            ],
            [
                'ten_tour' => 'Tour Đà Nẵng - Hội An',
                'so_booking' => 15,
                'doanh_thu' => 75000000,
                'chi_phi' => 52500000,
                'loi_nhuan' => 22500000,
                'ty_le_loi_nhuan' => 30.0
            ]
        ];
    }
}