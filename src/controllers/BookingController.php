<?php

class BookingController
{
    public function index()
    {
        $bookings = [
            [
                'id' => 1,
                'ma_booking' => 'BK001',
                'tour_id' => 1,
                'ten_tour' => 'Tour Hạ Long 3N2Đ',
                'ngay_khoi_hanh' => '2024-02-15',
                'so_khach' => 4,
                'tong_tien' => 12000000,
                'da_thanh_toan' => 8000000,
                'trang_thai' => 'Đã xác nhận'
            ],
            [
                'id' => 2,
                'ma_booking' => 'BK002',
                'tour_id' => 2,
                'ten_tour' => 'Tour Sapa 4N3Đ',
                'ngay_khoi_hanh' => '2024-02-20',
                'so_khach' => 2,
                'tong_tien' => 8000000,
                'da_thanh_toan' => 8000000,
                'trang_thai' => 'Hoàn thành'
            ]
        ];

        view('booking.index', compact('bookings'));
    }

    public function danhSach($id)
    {
        $booking = [
            'id' => $id,
            'ma_booking' => 'BK00' . $id,
            'ten_tour' => 'Tour Hạ Long 3N2Đ',
            'ngay_khoi_hanh' => '2024-02-15',
            'ngay_ket_thuc' => '2024-02-17',
            'hdv' => 'Nguyễn Văn A'
        ];

        $khachHang = [
            [
                'id' => 1,
                'ho_ten' => 'Trần Văn Nam',
                'gioi_tinh' => 'Nam',
                'nam_sinh' => 1985,
                'so_cmnd' => '123456789',
                'dien_thoai' => '0901234567',
                'email' => 'nam@email.com',
                'trang_thai_tt' => 'Đã thanh toán',
                'yeu_cau' => 'Phòng đơn',
                'phong_ks' => 'P101',
                'check_in' => false
            ],
            [
                'id' => 2,
                'ho_ten' => 'Nguyễn Thị Lan',
                'gioi_tinh' => 'Nữ',
                'nam_sinh' => 1990,
                'so_cmnd' => '987654321',
                'dien_thoai' => '0987654321',
                'email' => 'lan@email.com',
                'trang_thai_tt' => 'Còn nợ',
                'yeu_cau' => 'Ăn chay',
                'phong_ks' => 'P102',
                'check_in' => true
            ],
            [
                'id' => 3,
                'ho_ten' => 'Lê Minh Tuấn',
                'gioi_tinh' => 'Nam',
                'nam_sinh' => 1988,
                'so_cmnd' => '456789123',
                'dien_thoai' => '0912345678',
                'email' => 'tuan@email.com',
                'trang_thai_tt' => 'Đã thanh toán',
                'yeu_cau' => '',
                'phong_ks' => 'P103',
                'check_in' => false
            ]
        ];

        view('booking.danhsach', compact('booking', 'khachHang'));
    }

    public function inDanhSach($id)
    {
        $booking = [
            'ma_booking' => 'BK00' . $id,
            'ten_tour' => 'Tour Hạ Long 3N2Đ',
            'ngay_khoi_hanh' => '15/02/2024',
            'ngay_ket_thuc' => '17/02/2024',
            'hdv' => 'Nguyễn Văn A',
            'tai_xe' => 'Lê Văn C',
            'bien_so_xe' => '29A-12345'
        ];

        $khachHang = [
            ['stt' => 1, 'ho_ten' => 'Trần Văn Nam', 'gioi_tinh' => 'Nam', 'nam_sinh' => 1985, 'so_cmnd' => '123456789', 'dien_thoai' => '0901234567'],
            ['stt' => 2, 'ho_ten' => 'Nguyễn Thị Lan', 'gioi_tinh' => 'Nữ', 'nam_sinh' => 1990, 'so_cmnd' => '987654321', 'dien_thoai' => '0987654321'],
            ['stt' => 3, 'ho_ten' => 'Lê Minh Tuấn', 'gioi_tinh' => 'Nam', 'nam_sinh' => 1988, 'so_cmnd' => '456789123', 'dien_thoai' => '0912345678']
        ];

        view('booking.print', compact('booking', 'khachHang'));
    }

    public function phanPhong($id)
    {
        $booking = [
            'id' => $id,
            'ma_booking' => 'BK00' . $id,
            'ten_tour' => 'Tour Hạ Long 3N2Đ',
            'khach_san' => 'Khách sạn Hạ Long Bay'
        ];

        $khachHang = [
            ['id' => 1, 'ho_ten' => 'Trần Văn Nam', 'gioi_tinh' => 'Nam', 'phong_hien_tai' => 'P101'],
            ['id' => 2, 'ho_ten' => 'Nguyễn Thị Lan', 'gioi_tinh' => 'Nữ', 'phong_hien_tai' => 'P102'],
            ['id' => 3, 'ho_ten' => 'Lê Minh Tuấn', 'gioi_tinh' => 'Nam', 'phong_hien_tai' => 'P103']
        ];

        $phongTrong = [
            ['so_phong' => 'P201', 'loai_phong' => 'Đơn', 'giuong' => '1 giường đơn'],
            ['so_phong' => 'P202', 'loai_phong' => 'Đôi', 'giuong' => '1 giường đôi'],
            ['so_phong' => 'P203', 'loai_phong' => 'Twin', 'giuong' => '2 giường đơn']
        ];

        view('booking.phanphong', compact('booking', 'khachHang', 'phongTrong'));
    }
}