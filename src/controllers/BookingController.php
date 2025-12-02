<?php
require_once __DIR__ . '/../models/Booking.php';

class BookingController {
    // 1. Xử lý lưu đơn đặt hàng (Khi khách bấm đặt)
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $price = $_POST['price'];
            $people = $_POST['people'];
            
            $data = [
                'tour_id' => $_POST['tour_id'],
                'name' => $_POST['fullname'],
                'phone' => $_POST['phone'],
                'people' => $people,
                'total' => $price * $people,
                'start_date' => $_POST['start_date']
            ];

            $model = new Booking();
            $model->create($data);

            // Lưu xong quay về trang danh sách
            echo "<script>alert('Đặt thành công!'); window.location.href='" . BASE_URL . "admin/bookings';</script>";
        }
    }

    // 2. Hiển thị danh sách đơn hàng cho Admin
    public function index() {
        $model = new Booking();
        $bookings = $model->getAll();
        
        view('admin.bookings.index', [
            'bookings' => $bookings,
            'pageTitle' => 'Danh sách Đơn hàng'
        ]);
    }

    // --- CÁC HÀM MỚI BẠN ĐANG THIẾU (Gây ra lỗi đỏ) ---

    // 3. Cập nhật trạng thái đơn (Duyệt/Hủy)
    public function updateStatus() {
        if (isset($_POST['id']) && isset($_POST['status'])) {
            $model = new Booking();
            $model->updateStatus($_POST['id'], $_POST['status']);
        }
        header('Location: ' . BASE_URL . 'admin/bookings');
        exit;
    }

    // 4. Xóa đơn hàng
    public function delete() {
        if (isset($_GET['id'])) {
            $model = new Booking();
            $model->delete($_GET['id']);
        }
        header('Location: ' . BASE_URL . 'admin/bookings');
        exit;
    }
}