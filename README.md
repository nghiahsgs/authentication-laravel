# authentication-laravel
authentication laravel

tham khao tao: https://longnv.name.vn/lap-trinh-laravel/authentication-va-middleware-trong-laravel-7


### composer require laravel/ui
### php artisan ui vue --auth

## lệnh này sẽ tạo:
+ Tạo các view trong folder views\auth : login.blade.php, register.blade.php ...
+ Tạo file views\layouts\app.blade.php – là 1 file layout cơ bản với các class css dựa trên bootstrap nhưng bạn có thể sửa lại.
+ Tạo các đường route xử lý authentication trong file route/web.php
+ Tạo file Http\Controllers\HomeController.php
+ Tạo các controller trong folder Http\Controllers\Auth như RegisterController,LoginController, ForgotPasswordController, ResetPasswordController.
+ Tóm lại các chức năng tận răng, càn chỉnh sửa thì vào link trên đọc
+ nhớ là cho lại link bootstrap vào trong app.blade.php

# nhưng chưa có được authen cho api
## token lay o ben blade php => sau do cho len api call

```html
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
```

## Lấy thông tin của user đã đăng nhập
```php
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
Auth::check() => da login hay chua

Route::get('profile', function () {
    // Chỉ những user đã đăng nhập mới được vào
})->middleware('auth');

Auth::logout();

redirect()->route('/');
```