<?php
//--------------------- Copyright Block ----------------------
/* 

KechForum: forum (ver 0.1)
Copyright (C) 2019-2020 PrayTimes.org

Developer: ELKHADDARI AYOUB
License: GNU LGPL v3.0

TERMS OF USE:
	Permission is granted to use this code, with or 
	without modification

This program is distributed in the hope that it will 
be useful, but WITHOUT ANY WARRANTY. 

PLEASE DO NOT REMOVE THIS COPYRIGHT BLOCK.
 
*/ 
require_once('session.php'); 
require_once('inc/top-header.php');

// add comments 
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($_POST['reply'])){
        $user_id = $_SESSION['user_info']['u_id'];
       $addcomment =  comments_add($_POST['reply'],$user_id, $_POST['idpost']);
       if($addcomment==NULL){
        header('location: message.php?message=ERROR&link=topic.php?id='.$_POST['idpost']);
        exit();
       }else{
        header('location: message.php?message=le Commentaire est ajoute&link=topic.php?id='.$_POST['idpost']);
        exit();
       }

      
    }
    
    }

?>