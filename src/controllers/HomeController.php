<?php

namespace Src\Controllers;

class HomeController
{
    public function index(): void
    {
        $view = "client/home";
        $data = [
            'title' => 'Trang chủ - Website Quản Lý Tour',
        ];
        view($view, $data);
    }
    // Trang welcome - hiển thị cho người chưa đăng nhập
    // Nếu đã đăng nhập thì redirect về trang home
    public function welcome(): void
    {
        // Nếu đã đăng nhập thì redirect về trang home
        if (isLoggedIn()) {
            header('Location: ' . BASE_URL . 'home');
            exit;
        }

        // Hiển thị view welcome
        view('welcome', [
            'title' => 'Chào mừng - Website Quản Lý Tour',
        ]);
    }

    // Trang home - chỉ dành cho người đã đăng nhập
    // Nếu chưa đăng nhập thì redirect về trang welcome
    public function home(): void
    {
        // Yêu cầu phải đăng nhập, nếu chưa thì redirect về welcome
        if (!isLoggedIn()) {
            header('Location: ' . BASE_URL . 'welcome');
            exit;
        }

        // Lấy thông tin user hiện tại (đã đảm bảo đăng nhập ở trên)
        $currentUser = getCurrentUser();

        // Hiển thị view home với dữ liệu title và user
        view('home', [
            'title' => 'Trang chủ - Website Quản Lý Tour',
            'user' => $currentUser,
        ]);
    }

    public function notFound(): void
    {
        http_response_code(404);
        view('not_found', [
            'title' => 'Không tìm thấy trang',
        ]);
    }

    public function userDashboard(): void
    {
        requireLogin();

        if (!isGuide()) {
            if (isAdmin()) {
                header('Location: ' . BASE_URL . 'home');
                exit;
            }
            header('Location: ' . BASE_URL . 'welcome');
            exit;
        }

        $currentUser = getCurrentUser();

        view('pages.user_dashboard', [
            'title' => 'Dashboard Hướng Dẫn Viên',
            'user' => $currentUser,
        ]);
    }
}
