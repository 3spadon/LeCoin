<?php

function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=lecoinDB;charset=utf8', 'root', 'root');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function getTrends()
{
    $db = dbConnect();
    $req = $db->query('SELECT * FROM trends ORDER BY id DESC');
    return $req;
}

function getTrend($trendID)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM trends WHERE id = ?');
    $req->execute(array($trendID));
    $post = $req->fetch();

    return $post;
}

define('FIRSTKEY','NFc2v65g2K0hFLx4ImPXDveUHWhZxmfbASukn1vvaTs=');
define('SECONDKEY','tD31UNdggfY9YEmuFixajqHBnLPSTeO06KXUc9D4OPTtjlaioUusfzcE7h+3gvb4ZGA93awSbgdXwUMxFgNwjg==');

function secured_encrypt($data)
{
$first_key = base64_decode(FIRSTKEY);
$second_key = base64_decode(SECONDKEY);   
   
$method = "aes-256-cbc";   
$iv_length = openssl_cipher_iv_length($method);
$iv = openssl_random_pseudo_bytes($iv_length);
       
$first_encrypted = openssl_encrypt($data,$method,$first_key, OPENSSL_RAW_DATA ,$iv);   
$second_encrypted = hash_hmac('sha3-512', $first_encrypted, $second_key, TRUE);
           
$output = base64_encode($iv.$second_encrypted.$first_encrypted);   
return $output;       
}

function decrypt($input,$key)
{
$first_key = base64_decode($key);
$second_key = base64_decode(SECONDKEY);           
$mix = base64_decode($input);
       
$method = "aes-256-cbc";   
$iv_length = openssl_cipher_iv_length($method);
           
$iv = substr($mix,0,$iv_length);
$second_encrypted = substr($mix,$iv_length,64);
$first_encrypted = substr($mix,$iv_length+64);
           
$data = openssl_decrypt($first_encrypted,$method,$first_key,OPENSSL_RAW_DATA,$iv);
$second_encrypted_new = hash_hmac('sha3-512', $first_encrypted, $second_key, TRUE);
   
if (hash_equals($second_encrypted,$second_encrypted_new))
return $data;
   
return false;
}

function getLastTrendID()
{
    $db = dbConnect();
    $id = $db->query("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'lecoinDB' AND TABLE_NAME = 'trends'");
    $row=$id->fetch();
    return $row;
}

function getLastDreamID()
{
    $db = dbConnect();
    $id = $db->query("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'lecoinDB' AND TABLE_NAME = 'trends'");
    $row=$id->fetch();
    return $row;
}

function newPost($date,$titre,$contenu,$extra)
{
    $db = dbConnect();
    $isPublished = 0;
    $score = 0;
    $titreK=secured_encrypt($titre);
    $contenuK=secured_encrypt($contenu);
    $extraK=secured_encrypt($extra);
    if($db->query("INSERT INTO `trends`(`id`, `date`, `dateAjout`, `score`, `intitule`, `note`, `extra`, `isPublished`) VALUES(NULL, '$date', CURRENT_TIMESTAMP, '$score', '$titreK', '$contenuK', '$extraK', '$isPublished')"))
    {
    return true;
    }
    else
    {
    throw new Exception("Insert into database failed!");
    }
}

function newDream($date,$titre,$contenu,$extra)
{
    $db = dbConnect();
    $isPublished = 0;
    $score = 0;
    $titreK=secured_encrypt($titre);
    $contenuK=secured_encrypt($contenu);
    $extraK=secured_encrypt($extra);
    if($db->query("INSERT INTO `dreams`(`id`, `date`, `dateAjout`, `score`, `intitule`, `note`, `extra`, `isPublished`) VALUES(NULL, '$date', CURRENT_TIMESTAMP, '$score', '$titreK', '$contenuK', '$extraK', '$isPublished')"))
    {
    return true;
    }
    else
    {
    throw new Exception("Insert into database failed!");
    }
}

function deletePostFromDatabase($id)
{
    $db = dbConnect();
    if($db->query("DELETE FROM `trends` WHERE `trends`.`id` = $id"))
    {
    return true;
    }
    else
    {
    throw new Exception("Failed to delete the post");
    }
}

function getDreams()
{
    $db = dbConnect();
    $req = $db->query('SELECT * FROM dreams ORDER BY id DESC');
    return $req;
}

function getDream($trendID)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM dreams WHERE id = ?');
    $req->execute(array($trendID));
    $post = $req->fetch();

    return $post;
}
