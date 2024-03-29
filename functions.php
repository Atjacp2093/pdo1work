﻿<?php
function db_conn() {
    /* データベース定義 */
    define('DNS','mysql:host=localhost;dbname=lesson1;charset=utf8mb4');
    define('DB_USER','root');
    define('DB_PASS','');
    /* データベースへ接続　*/
    try {
        $dbh = new PDO(DNS,DB_USER,DB_PASS);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e){
        echo $e->getMessage();   //デバッグ用
        exit;
    }
    return $dbh;
}
