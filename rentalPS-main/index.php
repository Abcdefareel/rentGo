<?php
$url = ltrim($_SERVER['REQUEST_URI'], '/');
$view = 'app/views/';
$model = 'app/models/';
switch ($url) {
    case '':
        $model = [
            'title' => "RentGo",
        ];
        require_once $view . 'users/layoutUser/headerUsers.php';
        require_once $view . 'users/HomePage.php';
        require_once $view . 'users/layoutUser/footerUsers.php';
        break;
    case 'pesan-sesi':
        $model = [
            'title' => "RentGo",
        ];
        require_once $view . 'users/layoutUser/headerUsers.php';
        require_once $view . 'users/pesan-sesi.php';
        require_once $view . 'users/layoutUser/footerUsers.php';
        break;
    case 'menu':
        $model = [
            'title' => "RentGo",
        ];
        require_once $view . 'users/layoutUser/headerUsers.php';
        require_once $view . 'users/menu.php';
        require_once $view . 'users/layoutUser/footerUsers.php';
        break;
    case 'rekomendasi':
        $model = [
            'title' => "RentGo",
        ];
        require_once $view . 'users/layoutUser/headerUsers.php';
        require_once $view . 'users/rekomendasi.php';
        require_once $view . 'users/layoutUser/footerUsers.php';
        break;

































    case 'login':
        $model = [
            'title' => "RentGo - Login",
        ];
        require_once $view . 'auth/login.php';
        break;
    case 'register':
        $model = [
            'title' => "RentGO - Register",
        ];
        require_once $view . 'auth/register.php';
        break;
    case 'dashboard':
        $model = [
            'section' => "Dashboard Home",
            'title' => "RentGo - Dashboard Home"
        ];
        require_once $view . 'dashboard/layout/header.php';
        require_once $view . 'dashboard/admin/dashboardHome.php';
        require_once $view . 'dashboard/layout/footer.php';
        break;
    case 'dashboard/dashboardHome':
        $model = [
            'section' => "Dashboard Home",
            'title' => "RentGo - Dashboard Home"
        ];
        require_once $view . 'dashboard/layout/header.php';
        require_once $view . 'dashboard/admin/dashboardhome.php';
        require_once $view . 'dashboard/layout/footer.php';
        break;
    case 'dashboard/console':
        $model = [
            'section' => "Dashboard Home",
            'title' => "RentGo - Dashboard Home"
        ];
        require_once $view . 'dashboard/layout/header.php';
        require_once $view . 'dashboard/admin/console.php';
        require_once $view . 'dashboard/layout/footer.php';
        break;
    case 'dashboard/pesanan':
        $model = [
            'section' => "Dashboard Home",
            'title' => "RentGo - Dashboard Home"
        ];
        require_once $view . 'dashboard/layout/header.php';
        require_once $view . 'dashboard/admin/pesanan.php';
        require_once $view . 'dashboard/layout/footer.php';
        break;
    case 'dashboard/pelanggan':
        $model = [
            'section' => "Dashboard Home",
            'title' => "RentGo - Dashboard Home"
        ];
        require_once $view . 'dashboard/layout/header.php';
        require_once $view . 'dashboard/admin/pelanggan.php';
        require_once $view . 'dashboard/layout/footer.php';
        break;
    case 'dashboard/revenues':
        $model = [
            'section' => "Revenue Reports",
            'title' => "RentGo - Revenue Dashboard"
        ];
        require_once $view . 'dashboard/templates/header.php';
        require_once $view . 'dashboard/dashboardRevenue.php';
        require_once $view . 'dashboard/templates/footer.php';
        break;
    case 'dashboard/monitors':
        $model = [
            'section' => "Monitoring Dashboard",
            'title' => "RentGo - Monitoring Dashboard"
        ];
        require_once $view . 'dashboard/templates/header.php';
        require_once $view . 'dashboard/dashboardMonitor.php';
        require_once $view . 'dashboard/templates/footer.php';
        break;
    case 'dashboard/reports':
        $model = [
            'section' => "Report Dashboard",
            'title' => "RentGo - Report Dashboard"
        ];
        require_once $view . 'dashboard/templates/header.php';
        require_once $view . 'dashboard/dashboardReport.php';
        require_once $view . 'dashboard/templates/footer.php';
        break;
    case 'dashboard/settings':
        $model = [
            'section' => "Settings Dashboard",
            'title' => "RentGo - Settings Dashboard"
        ];
        require_once $view . 'dashboard/templates/header.php';
        require_once $view . 'dashboard/dashboardSetting.php';
        require_once $view . 'dashboard/templates/footer.php';
        break;
    case 'login/process':
        require_once $model . 'LoginModel.php';
        break;
    case 'register/process':
        require_once $model . 'RegisterModel.php';
        break;



    default:
        require_once $view . 'users/layoutUser/headerUsers.php';
        require_once $view . 'errors/404.php';
        require_once $view . 'users/layoutUser/footerUsers.php';
        break;
}
