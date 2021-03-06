<?php

// Database 的參數，以下為範例
define('DB_HOST', 'mysql');
define('DB_NAME', 'db');
define('DB_USER', 'user');
define('DB_PASS', '1234');

// App 根目錄，這是引入 app 資料夾裡的資源用的
define('APPROOT', dirname(dirname(__FILE__)) . '/');

// URL 根目錄，這是引入 public 資料夾裡的資源，或是頁面跳轉時用的
define('URLROOT', 'http://localhost:8080/public/');

// 網站名稱
define('SITENAME', '資料庫管理系統');

