# Todo List x Laravel 8.x (update: 2024/02/09)
使用php與laravel 8.x版框架及MySQL所架構的待辦清單網站，您可以此專案新增、修改、刪除、瀏覽儲存於資料庫內的待辦事項資料。

## Images 專案畫面
![img](/public/images/exhibit/index.png)

## Features 產品功能
1. 使用者需登入才可使用
2. 使用者可查看全部待辦事項
3. 使用者點擊detail按鈕即可觀看該待辦事項詳細資訊
4. 使用者可以新增待辦事項資料
5. 使用者可以刪除待辦事項資料
6. 使用者可以修改待辦事項詳細資料
7. 使用者可以使用修改將待辦事項標示為已完成狀態

## Environment Setup 環境建置
* PHP
* Laravel 8.83.27
* MySQL
* laravel/breeze

## Installing 專案安裝流程
1. 打開您的終端機(terminal)，複製(clone)專案至本機
```
git clone https://github.com/deansyue/todo-list-laravel.git
```

2. 進入存放此專案資料夾
```
cd todo-list-laravel
```

3. composer安裝套件
```
composer install
```

4. 複製.env並設定相關環境變數
```
cp .env.example .env
```

5. 產生APP金鑰
```
php artisan key:generate
```

6. 建立專案所需資料表
```
php artisan migrate
```

7. 建立專案所需種子資料
```
php artisan db:seed
```

8. 本地啟動伺服器
```
php artisan serve
```

9. 當終端機(terminal)出現以下文字，代表伺服器已啟動
```
Starting Laravel development server: http://127.0.0.1:8000
```

## 種子資料使用者
可使用種子資料新增的使用者操作本專案
```
user
  email: test@mail.com
  password: 12345678
```

## Contributor 專案開發人員
[deansyue](https://github.com/deansyue)
