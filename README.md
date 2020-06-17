# Project_OrderDrink_Laravel
Phần 1

Bước 1: Clone project về máy

Bước 2: Coppy file  .env.example và đổi tên lại thành .env

Bước 3: Chạy câu lênh composer install

Bước 4: Vào thư mục database/migrations xóa file có tên create_password_resets_table.php 

Bước 5: Vào file .env mới đổi trên Bước 2, nhập tên database vào  

Bước 6: Chạy câu lệnh php artisan key:generate

Bước 7: Chạy câu lênh php artisan migrate

Phần 2 Tạo branch và push 

Bước 1: Mở git Bash nơi chứa project chạy lệnh  git checkout -b (Name)

Bước 2: git commit -m "(Nội dung đã làm gì)"

Bước 3: git push origin (Name)
