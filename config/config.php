;<? exit(); ?>


[database]

;Сервер базы данных
db_server = localhost

;Пользователь базы данных
db_user = root

;Пароль к базе
db_password = 

;Имя базы
db_name = turkeyorange

;Префикс для таблиц
db_prefix = ok_

;Кодировка базы данных
db_charset = UTF8

;Режим SQL
db_sql_mode =

;Смещение часового пояса
;db_timezone = +04:00


[php]
error_reporting = E_ALL
php_charset = UTF8
php_locale_collate = ru_RU
php_locale_ctype = ru_RU
php_locale_monetary = ru_RU
php_locale_numeric = ru_RU
php_locale_time = ru_RU
;php_timezone = Europe/Moscow
debug_mode = false

[smarty]

smarty_compile_check = true
smarty_caching = false
smarty_cache_lifetime = 0
smarty_debugging = false
smarty_html_minify = false
smarty_security = true

[images]
;Использовать imagemagick для обработки изображений (вместо gd)
use_imagick = true

;Директория оригиналов изображений
original_images_dir = files/originals/

;Директория миниатюр
resized_images_dir = files/products/

;Файл изображения с водяным знаком
watermark_file = backend/files/watermark/watermark.png

;Изображения оригиналов и нарезок фоток блога
original_blog_dir = files/blog/
resized_blog_dir = files/blog_resized/

;Изображения оригиналов и нарезок фоток брендов
original_brands_dir = files/brands/
resized_brands_dir = files/brands_resized/

;Изображения оригиналов и нарезок фоток категории
original_categories_dir = files/categories/
resized_categories_dir = files/categories_resized/

;Изображения оригиналов и нарезок фоток доставки
original_deliveries_dir = files/deliveries/
resized_deliveries_dir = files/deliveries_resized/

;Изображения оригиналов и нарезок фоток способов оплаты
original_payments_dir = files/payments/
resized_payments_dir = files/payments_resized/

;Изображения баннеров
banners_images_dir = files/slides/

;Промо изображения
special_images_dir = files/special/

[files]

;Директория хранения цифровых товаров
downloads_dir = files/downloads/
