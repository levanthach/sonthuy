<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'sonthuy');

/** Username của database */
define('DB_USER', 'sonthuy');

/** Mật khẩu của database */
define('DB_PASSWORD', '123456');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#]]e!OAPc/~n,I7j&@tie7&er(MNPa2B:l30sr=AjIfD|tx%.-^jn=z{ 8V>*e1C');
define('SECURE_AUTH_KEY',  'JPvV97X/*f:QwM#(P;Y5%^FSh}18OXG0F8TVa^#*sHRus/i-c!9KK_+- &jqBgC)');
define('LOGGED_IN_KEY',    '/&z7/hD4-yZYvp]d-|{W@sUZr].ybp/L@KX- TqGj~&w&3Du@lqb1@xcf(q!(6#<');
define('NONCE_KEY',        '1a<iF?SbF`%f> Us-9qw6v>`-Mx7PC($hB?7c$l ]U9e3*_yklDwCbT6sB^RQ::+');
define('AUTH_SALT',        't6e&`*6.1CP(/&=xXOo]CW@K>=[U0?,?tf`kK02>j.G+C?e|63}7P6sEI6F.VCy%');
define('SECURE_AUTH_SALT', '1BUc-11)|W!*~4iS?R0ym[B~,8I=WW= rjbZ_[y/4=wU1J1Hj7/.g_qbVKTmr~=r');
define('LOGGED_IN_SALT',   'R&]&jsY;<a}n4eu(Y^s_BC/]>I*IPdE79K{la-G$SN%tNC3EB[Gw1FX5F86%4Q9L');
define('NONCE_SALT',       '3hITv9Fmvk/c7Z0Uwrr.Q8-*tgy]>lrvUcw(&<_vPt]Fg^)gW$%z6?Jbz7yxrRBb');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
