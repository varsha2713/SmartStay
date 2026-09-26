<?php
if(session_status()===PHP_SESSION_NONE)session_start();
define('BASE_URL','/smartstay'); define('APP_NAME','SmartStay');
define('DB_HOST','127.0.0.1'); define('DB_NAME','smartstay'); define('DB_USER','root'); define('DB_PASS','');
date_default_timezone_set('Asia/Kolkata');
function db(){static $p; if(!$p){$p=new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4',DB_USER,DB_PASS,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);}return $p;}
function e($x){return htmlspecialchars((string)$x,ENT_QUOTES,'UTF-8');} function go($u){header('Location:'.$u);exit;} function auth(){if(!isset($_SESSION['user']))go(BASE_URL.'/login.php');} function user(){return $_SESSION['user']??null;} function csrf(){if(empty($_SESSION['csrf']))$_SESSION['csrf']=bin2hex(random_bytes(16));return $_SESSION['csrf'];} function check(){if(!hash_equals($_SESSION['csrf']??'',$_POST['csrf']??''))exit('Invalid request.');} function money($n){return '₹'.number_format((float)$n,2);}
function agreement($booking,$txn){$s=db()->prepare("INSERT INTO rental_agreements(booking_id,agreement_no,payment_transaction_id,generated_at,status) VALUES(?,?,?,?,?)");$s->execute([$booking,'SSA-'.date('Ymd').'-'.str_pad($booking,5,'0',STR_PAD_LEFT),$txn,date('Y-m-d H:i:s'),'active']);return db()->lastInsertId();}
