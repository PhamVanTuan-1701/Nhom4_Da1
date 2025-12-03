<?php

// Hàm xác định đường dẫn tuyệt đối tới file view tương ứng
function view_path(string $view): string
{
    $normalized = str_replace('.', DIRECTORY_SEPARATOR, $view);
    return BASE_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $normalized . '.php';
}

// Hàm xác định đường dẫn tuyệt đối tới file block tương ứng(thành phần layouts)
function block_path(string $block): string
{
    return BASE_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'blocks' . DIRECTORY_SEPARATOR . $block . '.php';
}

// Hàm view: nạp dữ liệu và hiển thị giao diện
function view(string $view, array $data = []): void
{
    $file = view_path($view);

    if (!file_exists($file)) {
        throw new RuntimeException("View '{$view}' not found at {$file}");
    }

    extract($data, EXTR_OVERWRITE); // biến hóa mảng $data thành biến riêng lẻ
    include $file;
}

// Hàm include block: nạp một block từ thư mục blocks(thành phần layouts)
function block(string $block, array $data = []): void
{
    $file = block_path($block);

    if (!file_exists($file)) {
        throw new RuntimeException("Block '{$block}' not found at {$file}");
    }

    extract($data, EXTR_OVERWRITE); // biến hóa mảng $data thành biến riêng lẻ
    include $file;
}

// Tạo đường dẫn tới asset (css/js/images) trong thư mục public(tài nguyên)
function asset(string $path): string
{
    $trimmed = ltrim($path, '/');
    return rtrim(BASE_URL, '/') . '/public/' . $trimmed;
}

// Tạo avatar chữ cái cho user
function getUserAvatarHtml($user, $size = 40, $classes = '')
{
    if ($user->role === 'admin') {
        // Admin dùng ảnh upload hoặc mặc định
        $avatarSrc = isset($_SESSION['user_avatar_' . $user->id]) ? $_SESSION['user_avatar_' . $user->id] : asset('dist/assets/img/user2-160x160.jpg');
        return '<img src="' . $avatarSrc . '" class="' . $classes . '" alt="Avatar" style="width: ' . $size . 'px; height: ' . $size . 'px; object-fit: cover;">';
    } else {
        // User dùng avatar chữ cái
        $initial = getLastNameInitial($user->name);
        return '<div class="' . $classes . '" style="width: ' . $size . 'px; height: ' . $size . 'px; background: linear-gradient(135deg, #007bff, #0056b3); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: ' . ($size * 0.4) . 'px;">' . $initial . '</div>';
    }
}

// Khởi động session nếu chưa khởi động(session là một cơ chế để lưu trữ dữ liệu trên server)
function startSession()
{
    // Session đã được khởi tạo trong index.php
}

// Lưu thông tin user vào session sau khi đăng nhập thành công
// @param User $user Đối tượng User cần lưu vào session
function loginUser($user)
{
    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_name'] = $user->name;
    $_SESSION['user_email'] = $user->email;
    $_SESSION['user_role'] = $user->role;
}

// Đăng xuất: xóa toàn bộ thông tin user khỏi session
function logoutUser()
{
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_role']);
    session_destroy();
}

// Kiểm tra xem user đã đăng nhập chưa
// @return bool true nếu đã đăng nhập, false nếu chưa
function isLoggedIn()
{
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

// Lấy thông tin user hiện tại từ session
// @return User|null Trả về đối tượng User nếu đã đăng nhập, null nếu chưa
function getCurrentUser()
{
    if (!isLoggedIn()) {
        return null;
    }


    return new User([
        'id' => $_SESSION['user_id'],
        'name' => $_SESSION['user_name'],
        'email' => $_SESSION['user_email'],
        'role' => $_SESSION['user_role'],
    ]);
}

// Kiểm tra xem user hiện tại có phải là admin không
// @return bool true nếu là admin, false nếu không
function isAdmin()
{
    $user = getCurrentUser();
    return $user && $user->isAdmin();
}

// Kiểm tra xem user hiện tại có phải là hướng dẫn viên không
// @return bool true nếu là hướng dẫn viên, false nếu không
function isGuide()
{
    $user = getCurrentUser();
    return $user && $user->isGuide();
}

// Yêu cầu đăng nhập: nếu chưa đăng nhập thì chuyển hướng về trang login
// @param string $redirectUrl URL chuyển hướng sau khi đăng nhập (mặc định là trang hiện tại)
function requireLogin($redirectUrl = null)
{
    if (!isLoggedIn()) {
        $redirect = $redirectUrl ?: $_SERVER['REQUEST_URI'];
        header('Location: ' . BASE_URL . '?act=login&redirect=' . urlencode($redirect));
        exit;
    }
}

// Yêu cầu quyền admin: nếu không phải admin thì chuyển hướng về trang chủ
function requireAdmin()
{
    requireLogin();
    
    if (!isAdmin()) {
        header('Location: ' . BASE_URL);
        exit;
    }
}

// Yêu cầu quyền hướng dẫn viên hoặc admin
function requireGuideOrAdmin()
{
    requireLogin();
    
    if (!isGuide() && !isAdmin()) {
        header('Location: ' . BASE_URL);
        exit;
    }
}

// Kiểm tra xem user hiện tại có phải là user thông thường không
function isUser()
{
    $user = getCurrentUser();
    return $user && $user->role === 'huong_dan_vien';
}

// Lấy loại tài khoản hiện tại
function getUserType()
{
    if (isAdmin()) {
        return 'admin';
    } elseif (isUser()) {
        return 'user';
    }
    return 'guest';
}

// Lấy tên hiển thị của loại tài khoản
function getUserTypeLabel()
{
    switch (getUserType()) {
        case 'admin':
            return 'Quản trị viên';
        case 'user':
            return 'Hướng dẫn viên';
        default:
            return 'Khách';
    }
}

// Lấy chữ cái cuối của tên để làm avatar
function getLastNameInitial($fullName)
{
    $words = explode(' ', trim($fullName));
    $lastName = end($words);
    return strtoupper(substr($lastName, 0, 1));
}
