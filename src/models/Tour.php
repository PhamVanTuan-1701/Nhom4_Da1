<?php
require_once __DIR__ . '/../helpers/database.php';

class Tour {
    // 1. Lấy tất cả tour
    public function getAll() {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM tours ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // 2. Lấy 1 tour theo ID
    public function getById($id) {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM tours WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    // 3. Thêm tour mới
    public function create($data) {
        $db = getDB();
        $sql = "INSERT INTO tours (name, price, description, status) VALUES (:name, :price, :desc, 1)";
        $stmt = $db->prepare($sql);
        return $stmt->execute([
            'name' => $data['name'],
            'price' => $data['price'],
            'desc' => $data['description']
        ]);
    }

    // 4. Cập nhật tour
    public function update($id, $data) {
        $db = getDB();
        $sql = "UPDATE tours SET name = :name, price = :price, description = :desc WHERE id = :id";
        $stmt = $db->prepare($sql);
        return $stmt->execute([
            'name' => $data['name'],
            'price' => $data['price'],
            'desc' => $data['description'],
            'id' => $id
        ]);
    }

    // 5. Xóa tour
    public function delete($id) {
        $db = getDB();
        $stmt = $db->prepare("DELETE FROM tours WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    // 6. Đếm tổng số tour
    public function count() {
        // Trả về số liệu mẫu
        return 15;
    }

    // 7. Lấy top tour phổ biến
    public function getPopularTours($limit = 5) {
        $db = getDB();
        // Sử dụng dữ liệu mẫu thay vì truy vấn phức tạp
        return [
            ['name' => 'Tour Hạ Long 3N2Đ', 'booking_count' => 25, 'revenue' => 125000000, 'rating' => 4.8],
            ['name' => 'Tour Sài Gòn - Cần Thơ', 'booking_count' => 18, 'revenue' => 90000000, 'rating' => 4.6],
            ['name' => 'Tour Đà Nẵng - Hội An', 'booking_count' => 15, 'revenue' => 75000000, 'rating' => 4.7],
            ['name' => 'Tour Phú Quốc', 'booking_count' => 12, 'revenue' => 60000000, 'rating' => 4.5],
            ['name' => 'Tour Sa Pa', 'booking_count' => 10, 'revenue' => 50000000, 'rating' => 4.4]
        ];
    }

    // 8. Lấy hiệu quả tour theo tháng
    public function getTourPerformance($month) {
        // Sử dụng dữ liệu mẫu
        return [
            [
                'ten_tour' => 'Tour Hạ Long 3N2Đ',
                'so_booking' => 25,
                'ty_le_huy' => 5.2,
                'doanh_thu' => 125000000,
                'danh_gia_tb' => 4.8,
                'ty_le_lap_day' => 83.3,
                'diem_hieu_qua' => 85
            ],
            [
                'ten_tour' => 'Tour Sài Gòn - Cần Thơ',
                'so_booking' => 18,
                'ty_le_huy' => 8.1,
                'doanh_thu' => 90000000,
                'danh_gia_tb' => 4.6,
                'ty_le_lap_day' => 60.0,
                'diem_hieu_qua' => 70
            ],
            [
                'ten_tour' => 'Tour Phú Quốc',
                'so_booking' => 8,
                'ty_le_huy' => 12.5,
                'doanh_thu' => 40000000,
                'danh_gia_tb' => 4.2,
                'ty_le_lap_day' => 26.7,
                'diem_hieu_qua' => 45
            ]
        ];
    }
}