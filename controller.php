<?php

require('model/model.php');

function needLogin()
{
    session_start();
    if(isset($_SESSION['auth']))
    {
       
    }
    else
    {
        if($_GET['err']==2){
            //In case no user is logged in. Avoiding infinite loop !
        }
        else{
            header('Location: login.php?err=2');
        }
    }
}

function displayAccount()
{
    require('view/displayAccount.php');
}

function displayChangePassword()
{
    require('view/changePassword.php');
}

function listTrends()
{
    $posts = getTrends();
    require('view/listPostView.php');
}

function listTrendsK(){
    $posts = getDreams();
    $key = $_GET['key'];
    require('view/dreamPostViewK.php');
}

function listDreams()
{
    $posts = getDreams();
    require('view/listDreamsView.php');
}

function listDreamsK(){
    $posts = getDreams();
    $key = $_GET['key'];
    require('view/listDreamViewK.php');
}

function post()
{
    $lastPost=$_GET['id']-1;
    $nextPost=$_GET['id']+1;
    $post = getTrend($_GET['id']);
    require('view/postView.php');
}

function postK()
{
    $lastPost=$_GET['id']-1;
    $nextPost=$_GET['id']+1;
    $post = getTrend($_GET['id']);
    $key = $_GET['key'];
    require('view/postViewK.php');
}

function dream()
{
    $lastDream=$_GET['id']-1;
    $nextDream=$_GET['id']+1;
    $post = getDream($_GET['id']);
    require('view/dreamView.php');
}

function dreamK()
{
    $lastDream=$_GET['id']-1;
    $nextDream=$_GET['id']+1;
    $post = getDream($_GET['id']);
    $key = $_GET['key'];
    require('view/dreamViewK.php');
}

function writePost()
{
    require('view/newPost.php');
}

function writeDream()
{
    require('view/newDream.php');
}


function addPost($date,$titre,$contenu,$extra)
{   
    $id=getLastTrendID();
    newPost($date,$titre,$contenu,$extra);
    header('Location: index.php?action=post&id='.$id['AUTO_INCREMENT']);
}

function addDream($date,$titre,$contenu,$extra)
{   
    $id=getLastDreamID();
    newDream($date,$titre,$contenu,$extra);
    header('Location: index.php?action=dream&id='.$id['AUTO_INCREMENT']);
}

function confirmDeletePost($id)
{
    require('view/confirmDeletePost.php');
}

function deletePost($id)
{
    deletePostFromDatabase($id);
    header('Location: index.php?action=listPosts');
}

function menu_theologie()
{
    require('view/theologie.php');
}

function EC_anges()
{
    require('view/th_anges.php');
}


function EC_archanges()
{
    require('view/th_archanges.php');
}

function EC_puissances()
{
    require('view/th_puissances.php');
}

function EC_principautes()
{
    require('view/th_principautes.php');
}

function EC_dominations()
{
    require('view/th_dominations.php');
}

function EC_vertus()
{
    require('view/th_vertus.php');
}