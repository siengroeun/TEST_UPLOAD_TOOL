@extends('layouts.app')

@section('content')

        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Tool Roeun</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://www.tube2fb.net/css/uploadifive.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    {{--<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>--}}
    <script src="https://kit.fontawesome.com/cda77fc7d1.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script type="text/javascript" src="https://www.tube2fb.net/js/jquery.uploadifive.min.js"></script>
    <script type="text/javascript" src="https://www.tube2fb.net/js/jquery.sortable.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>

<br>
<style type="text/css">
    @font-face {
        font-family: 'Battambang', cursive;

        src:url("https://fonts.googleapis.com/css2?family=Battambang&display=swap");
    }
</style>
<style type="text/css">
    .clear{ clear:both}
    body{ width:100%; height:auto; margin:0; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#454545; line-height:22px }
    #head{ text-align:center; height:66px; padding:1px;  }
    #top-menu-wrap{ width:100%; height:50px; background:#5071bb; }
    #top-menu{ width:1050px; margin-left:auto; margin-right:auto; }

    .top-btn { width:auto;  height:32px; display:block; float:left; font-size:12px; }
    .top-btn ul { z-index:9999; margin: 0;  padding: 0; list-style-type: none; }
    .top-btn ul li { position: relative; left:0px; top:0; display: inline; float: left; }
    .top-btn ul li a { transition: .3s; display:block; text-decoration:none; height:14px; padding:16px 20px 20px 20px; font-size:14px; color:#fff; font-weight:bold;  border-right:1px solid #6886c9; }
    .top-btn ul li a.current, .top-btn ul li a.current:hover, .top-btn ul li a:hover, .top-btn ul li a.select, .top-btn ul li a.select:hover { background:#385ba8; }

    .top-account{ float:right; margin-top:10px;}
    .top-account img{ border:none; float: left;  margin-right:5px; }
    .top-account a{ padding:5px; color:#fff; border-bottom:1px solid #668ee8; text-decoration:none; display:block; float: left; background:#385ba8; margin-left:5px; border-radius: 15px; transition: .3s; }
    .top-account a:hover{ background:#668ee8; }

    #top-bg{ text-align:center; height:38px; background:#ddd url(../images/system/top-bg.jpg) repeat-x; border-bottom:1px solid #ddd; padding-left:10px; padding-right:10px; }
    #top-bg a{ display: inline-block; width:20%; box-sizing: border-box; padding:8px 20px; margin:0; border-right:1px solid #ddd; text-decoration: none; color:#444; transition: .3s; }
    #top-bg a:nth-child(1){ border-left:1px solid #ddd }
    #top-bg a:hover, #top-bg a.current{ background:#fff; border-top:2px solid #f00;margin-top: 3px; padding-top:4px;  }


    * html .top-btn ul li a{ display: inline-block; }
    .mobile-menu{ float:left; margin-top:10px;}
    .mobile-menu a { background:#385ba8; display: block; padding: 4px 10px 0px 10px; }
    .mobile-menu i{ font-size:26px; color:#fff }

    #logo{ float:left; display:none; height:50px; margin-right:20px; border:none }

    #main{ width:1050px; height:auto; margin-left:auto; margin-right:auto; margin-bottom:0px; }
    #content{ width:1050px; height:auto; }
    .content-title{ padding:20px 0;}
    .post-to{ margin-bottom:50px; }
    .post-to-item{ float:left; width:32%; margin-right:2%; box-shadow:0 5px 5px #ddd;  }
    .post-to-item:nth-child(3n){ margin-right:0; }
    .post-to-border{ border:1px solid #ddd; padding:2px; }
    .post-to img{ border:none; width:100%; }
    .post-to-title{ text-align:center; font-size:14px; padding:15px; }

    .why-us{ margin-bottom:50px; }
    .why-us-item{ width:48%; margin-right:2%; float:left }
    .why-us-item:nth-child(2n){ margin-right:0; }
    .why-us-item .frame{ border-top-left-radius: 10px; border-top-right-radius: 50px; border-bottom-right-radius: 10px; border-bottom-left-radius: 50px; overflow: hidden; }
    .why-us-item img{ width:100%; }
    .why-us-title{ font-size:18px; padding:10px 0; border-bottom:1px solid ddd; }
    .why-us-title span{ color:#aaf}
    .link{color:#06F;text-decoration:none; }
    .link:hover{ color:#FF9900;}

    #form{ width:100%; margin-bottom:50px; }
    .form-row{ margin-bottom:10px; }
    .form-label{ font-size:14px; }
    .form-msg{ color:red; }
    #form .input-text{ width:50%; padding:10px; box-shadow:inset #f9f9f9 5px 5px 10px; border:1px solid #ddd; -webkit-box-sizing: border-box;  -moz-box-sizing: border-box;  box-sizing: border-box; }
    #form .input-select{ border:1px solid #ddd; padding:10px;}
    #form textarea{ height:150px; }
    #form .button{ padding:20px 50px; font-size:22px; background:#ececec; color:#21759b; font-weight:bold; border:1px solid #ddd; cursor:pointer;}
    #form .button:hover{ border-color:#aaa; }
    #form a{ text-decoration: none; color: #5071bb; }
    #form a:hover{ color: #ffa600; }

    .navbar{ text-align:center; padding:10px; margin:20px 0; background:#eee; border-radius:10px; border:1px solid #ddd;  }
    .navbar-title{ font-size: 14px; }
    .toolbar{ padding:10px; margin:20px 0; background:#c0daf3; border-radius:10px; border-bottom:1px solid #0055a5;  }
    .paging{ float: right; }
    .paging a{ border:1px solid #ddd; display: block; background:#fff; width: 20px; height: 20px; padding:2px; float: left; border-radius: 5px; margin-left:10px; }
    .back, .reload{ border:1px solid #ddd; display: block; background:#fff;  height: 20px; padding:2px 10px; float: left; border-radius: 5px; margin-right:10px; text-decoration: none; color:#000; }
    .loading{ text-align:center; padding-top:100px; padding-bottom:100px; }
    .toolbar .check-all{ float:left; background:#fff; margin-top:2px; text-decoration: none; color:rgb(0, 9, 129); border-radius: 5px; padding:2px 5px; border:1px solid #ddd; }
    .toolbar .check-all.checked{ background: rgb(17, 86, 143); color:#fff}
    .toolbar label{ float:left; margin-left:10px; margin-top:6px; }
    .toolbar select{ float:right; margin-right:10px; margin-top:2px; border-radius: 5px; border:1px solid #ddd; padding: 4px; }
    .toolbar .action-btn a{ float:right; }

    #tabs { margin: 20px 0 0 0; padding: 0; }
    #tabs li{ display:inline-block; }
    #tabs li a{ height:20px; display:block; background:#fff; text-align:center; border-top-left-radius: 10px; border-top-right-radius: 50px; border:1px solid #ddd;border-bottom:none;margin-right:5px;text-decoration:none;color:#000;font-weight:700;padding:5px 30px 5px 10px;}
    #tabs li.active a{ background:#eee; top:1px; position:relative; }
    .tab-body{ width:calc(100% - 62px); margin-bottom:20px;padding:30px; background: #eee; border: 1px solid #ddd; border-top: none;
        border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-top-right-radius: 10px }
    .tab-body input, .tab-body textarea, .panel-options input, .panel-options textarea{ border:1px solid #ddd; padding:5px; box-sizing: border-box; width: 100%; margin-bottom:10px; }
    .tab-body textarea, .panel-options textarea{ height: 60px; }

    .page-tools{ padding: 0; margin:0;}
    .page-tools li{ list-style: none;  }
    .page-tools li a{ padding:40px 20px; text-decoration: none; color:#444; display: block; float: left; width: 49%; margin-right:2%; margin-bottom:2%; box-sizing: border-box; border:1px solid #ddd; background:#eee; border-radius: 10px; text-align: center ; transition: .3s; }
    .page-tools li:nth-child(2n) a{ margin-right: 0px; }
    .page-tools li a:hover{ background:#fff; color:rgb(0, 110, 255) }
    .page-tools li i{ font-size:50px }
    .page-tools li div{ margin-top:20px; }

    .photo-prev, .video-prev{ margin-bottom:20px; }
    .photo-prev div{ position: relative; background:#fff; width: 31.33%; padding-top: 23.49%; float:left; margin-right:1%; margin-left:1%; margin-bottom:2%; overflow:hidden  }
    .photo-prev .image { position: absolute; top: 0; left: 0; bottom: 0; right: 0; text-align:center; display: block; padding:0; margin:0; }
    .photo-prev .image img{ width: 100%; }
    .photo-prev span{ padding:10px; display: block;}
    .photo-prev .photo-url-del{ position: absolute; z-index: 100; top: 5px; right: 5px; }

    .video-prev video, .pe-video-prev video{ width: 400px;}

    .sortable-dragging, .sortable-placeholder{ background:#aaa; }

    .sub-tab{ margin-bottom: 10px; }
    .sub-tab a{ text-decoration: none; color: rgb(0, 140, 255); padding:2px 10px; transition: .4s; }
    .sub-tab a:hover{ color:#ff9900 }
    .sub-tab a.selected{ background:rgb(108, 117, 125); color:#fff; border: 1px solid rgb(126, 128, 255); border-radius: 5px; }

    .price-item{ width: 23.5%; float:left; overflow:hidden; text-align:center; margin-right:2%; border-radius: 20px; box-shadow: 0px 0px 30px #ddd; margin-top:50px; margin-bottom:50px; }
    .price-item:nth-child(4n){ margin-right:0px; }
    .price-title{ font-size:22px; background:rgb(255, 153, 0); padding:20px; color:#fff; }
    .price-item:nth-child(1) .price-title{ background:rgb(182, 182, 182);}
    .price-item:nth-child(2) .price-title{ background:rgb(73, 199, 69) }
    .price-item:nth-child(3) .price-title{ background:rgb(0, 181, 212)}
    .price-price{ padding:20px 0 0 0; text-align: center; font-size:30px; font-weight: bold; }
    .price-price span{ font-size:28px;  }
    .price-per{ color:#ff009d; font-size:12px; text-align:center; margin-bottom:10px; }
    .price-list{ padding:0px; margin:0px; line-height: 35px; }
    .price-list li{ list-style-type: none; text-align: center; font-size: 14px; }
    .price-list li:nth-child(2n){ background:#f4f6f6; }
    .price-list li span{ color:#ff8800 }
    .price-btn{ padding:40px 0px; }

    .fa-check{ color:#0f0; }
    .fa-times{ color:#f00; }
    .fa-plus { color:#5071bb; }
    .fa-plus:hover { color:#f99; }

    .button{ padding:20px 50px; font-size:22px; background:#5071bb; color:#fff; font-weight:bold; cursor:pointer; text-decoration: none; transition: .3s;
        border-top-left-radius: 5px; border-top-right-radius: 20px; border-bottom-right-radius: 5px; border-bottom-left-radius: 20px; border:none;}
    .button-small{ padding:5px 20px; font-size:12px; background:#5071bb; color:#fff; font-weight:bold; cursor:pointer; text-decoration: none; transition: .3s;
        border-top-left-radius: 5px; border-top-right-radius: 10px; border-bottom-right-radius: 5px; border-bottom-left-radius: 10px; border:none; }
    .button:hover, .button-small:hover{ background:#385ba8; }


    .my-account{ padding: 30px; background:#eee; border-radius: 15px; font-size: 14px;}
    .my-account-row{ padding:20px; border-bottom:1px solid #ddd; border-radius: 10px;}
    .my-account-row:hover, .my-account-row.active{ background:#fff }
    .my-account .edit{ float: right; text-decoration: none; color: #0055a5;}
    .my-account span{ float:left; word-break: break-all; }
    .my-account label{ font-weight: bold; width:200px; display:block; float:left; }
    .my-account input{  margin-right:10px; margin-bottom:10px; float: left; width: 200px; border:1px solid #ddd; padding:5px; box-sizing: border-box; }
    .my-account .msg{ padding-top:10px; }
    .my-account textarea{ margin-top:50px; width: 100%; box-sizing: border-box; padding:10px; border:1px solid #ddd; }
    .my-account .save{ float:left;border:none; background:#5071bb; padding:6px 10px; color:#fff;  }
    .my-account .cancel{ margin-left: 5px;float:left;border:none; background:none; padding:6px 10px; color:rgb(0, 2, 110); }

    .fb-account{ width:32%; margin-right:2%; float:left; margin-bottom:2%; background:#fff; border-radius:10px; border: 1px solid #ddd; padding:10px; display: block; box-sizing: border-box; }
    .fb-account:nth-child(3n){ margin-right:0px; }
    .fb-account-picture{ width:50px; height:50px; float:left; text-align: center; font-size:50px; color:rgb(0, 146, 0); margin-right: 10px;border-radius: 25px; overflow: hidden; }
    .fb-account-picture:hover{ color:#ff9900 }
    .fb-account-name{ float: left; margin-top:16px; text-decoration: none; color:#484848; }
    .fb-account-name:hover{ color:#FF9900 }
    .fb-account-del{ float: right; color:#484848 }
    .fb-account-del:hover{ color:#f00; }

    .pe-image{ position:relative; width: 18%; padding-top:18%; overflow: hidden; margin-right:2%; margin-bottom: 2%; float: left; background:#fff; }
    .pe-image:nth-child(5n){ margin-right:0px; }
    .pe-image.selected{ width: calc(18% - 10px); border:5px solid green; }
    .pe-image img{ width: 100%; position:absolute; top:0; right: 0; bottom:0; left: 0; }
    .pe-image-del{ position: absolute; z-index: 100; top: 5px; right: 5px; color: #000; }
    .pe-image-del:hover{ color: #f00; }

    .fb-account-small{ cursor:pointer; width:32%; margin-right:2%; float:left; margin-bottom:2%; background:#fff; border-radius:5px; border: 1px solid #ddd; padding:5px; display: block; box-sizing: border-box; }
    .fb-account-small:nth-child(3n){ margin-right:0px; }
    .fb-account-small.selected{ background:#c4e3ff; border-color:rgb(98,184,255); color:#fff; }
    .fb-account-small.selected .far{ color:#5071bb }
    .fb-account-small:hover{ border-color:rgb(98,184,255);  }
    .fb-account-small-picture{ width:30px; height:30px; float:left; text-align: center; font-size:30px; color:rgb(0, 146, 0); margin-right: 5px;border-radius: 15px; overflow: hidden; }
    .fb-account-small-picture img{ width:30px; }
    .fb-account-small-name{ float: left; margin-top:5px; text-decoration: none; color:#484848; }

    .fb-account-queue{ width: calc(100% - 22px); border:1px solid #ddd; border-top:none; padding:10px; }
    .fb-account-queue:nth-child(1){ border-top:1px solid #ddd }
    .fb-account-queue.selected{ background:#c4e3ff; }
    .fb-account-queue.sharing{ background:#fffccc; border-right-color:#fffccc; }
    .fb-account-queue.done{ background:#ccffcc; border-right-color:#ccffcc; }

    .panel-left{ float:left; width: 50%; }
    .panel-imacros{ float: left; width: 100%; display:none; }
    .panel-imacros-groups{ float: left; width: 50%;}
    .panel-imacros-results{ float: left; width: 50%;}
    .panel-imacros-results textarea{ width: 100%; height: 500px; box-sizing: border-box; padding: 10px; border:1px solid #ddd; }
    .panel-right{ background:#f4f6f6; float:left; width: 50%; }

    .panel-action{ display: none; }
    .panel-action-left, .panel-action-right{ width:50%; float:left; }
    .panel-title{ border-top-right-radius: 10px;border-top-left-radius: 10px; margin-right:2px; background:#eee; border-bottom:1px solid #aaa; text-align:center; padding:10px; }

    .panel-options .thumbnails-wrap{ padding:20px 0px;  }
    .panel-options .thumbnails{ padding-bottom:10px; }
    .panel-options .thumbnail{ width: 16.66%; display: inline-block; padding: 5px; background:#fff; box-sizing: border-box; }
    .panel-options .thumbnail.selected{ background-color: green; }
    .panel-options .thumbnail img{ width: 100%; border:none; }
    /*
        .thumbnails-wrap{ padding:20px 0px;  }
           .thumbnails{ padding-bottom:10px; }
         .thumbnail{ width: 16.66%; display: inline-block; padding: 5px; background:#fff; box-sizing: border-box; }
         .thumbnail.selected{ background-color: #f00; }
        .thumbnail img{ width: 100%; border:none; }*/


    .group-row, .group-list, .page-list, .item-list{ padding:10px; border-bottom:1px solid #ddd; transition: .3s; }
    .page-list:first{ border-top:1px solid #ddd; }

    .group-list:hover, .page-list:hover{ background:rgb(228, 240, 255)  }
    .group-list.selected, .page-list.selected{ background:rgb(190, 219, 255); border-bottom-color:#fff }

    .videoWrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        padding-top: 25px;
        height: 0;
    }
    .videoWrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .clone-tools{ margin-top:10px; background:#f4f6f6; border:1px solid #ddd; border-radius: 10px; overflow: hidden;}
    .clone-tools a{ display:block; box-sizing: border-box; width: 100%; padding:20px; border-bottom:1px solid #ddd; color:#333; text-decoration: none; transition: .5s; }
    .clone-tools a:last-of-type{ border:none; }
    .clone-tools a:hover{ background:#fff; color:rgb(255, 102, 0); padding-left:40px; }

    .panel-source-link .input-text{  width:100%; margin-right:10px; margin-bottom:10px; float: left; border:1px solid #ddd; padding:5px; box-sizing: border-box; }

    .panel-source-results .check-all{ float: left; background:#fff; text-decoration: none; color:rgb(0, 9, 129); border-radius: 5px; padding:2px 5px; border:1px solid #ddd; }
    .panel-source-results .check-all.checked{ background: rgb(17, 86, 143); color:#fff}
    .panel-source-results .navbar{ padding:10px; margin:20px 0; background:#eee; border-radius:10px; border:1px solid #ddd;  }
    .panel-source-results .paging{ float: right; }
    .panel-source-results .paging a{ border:1px solid #ddd; display: block; background:#fff; width: 20px; height: 20px; padding:2px; float: left; border-radius: 5px; margin-left:10px; }
    .panel-source-results .msg{ padding: 0 30px; }

    .panel-posts .check-all, .panel-destination .check-all{ float: left; background:#fff; text-decoration: none; color:rgb(0, 9, 129); border-radius: 5px; padding:2px 5px; border:1px solid #ddd; }
    .panel-posts .check-all.checked, .panel-destination .check-all.checked{ background: rgb(17, 86, 143); color:#fff}

    .panel-posts .check-all, .group-destination .check-all{ float: left; background:#fff; text-decoration: none; color:rgb(0, 9, 129); border-radius: 5px; padding:2px 5px; border:1px solid #ddd; }
    .panel-posts .check-all.checked, .group-destination .check-all.checked{ background: rgb(17, 86, 143); color:#fff}

    .post-list{ padding-top:10px }
    .post-list-item{ padding-bottom:10px; padding-top:10px; border-bottom:1px solid #ddd; transition: .3s; }
    .post-list-item:hover{ background:#f4f6f6; }
    .post-list-item.selected{ background:rgb(145, 211, 255) }
    .post-list-item textarea{ width: calc(100% - 180px); height: 67.5px; box-sizing: border-box; }

    #share-to-page{ width: 50%; height: 90%; }


    .pagination{ text-align:center; }
    .pagination a
    {
        padding:2px 5px; text-decoration:none; color:#000; font-weight:normal; display:inline-block; background:#ececec;
        border:1px solid #ddd; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; margin-right:2px;
    }
    .pagination a:hover{ color:red; background:#fff }
    .pagination span.disable
    {
        padding:2px 5px; color:#ccc; display:inline-block; cursor:default;
        border:1px solid #eee; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; margin-right:2px;
    }
    .pagination span.current
    {
        padding:2px 5px; color:#000; font-weight:bold; display:inline-block; margin-right:2px; cursor:default;
        border:1px solid #999; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;
    }
    .msg-error{ padding:5px; color:red; background:pink; margin-bottom:10px; text-align:center; border:1px solid red; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;  }
    .msg-success{ padding:5px; color:green; background:#ccffcc; margin-bottom:10px; text-align:center; border:1px solid green; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
    .msg-info{ padding:5px; color:#FF9900; background:#FFFFCC; margin-bottom:10px; text-align:center; border:1px solid #FF9900; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;  }

    #footer-wrap{ width:100%; height:auto; border-top:1px solid #ddd; margin-top:20px; clear:both; padding:20px 0; background:#eee }
    #footer{ width:1050px; height:auto; margin-left:auto; margin-right:auto; }
    .footer-left{ float: left; text-align:left; }
    .footer-right{ float: right; text-align: right; }

    @media screen and (max-width:1050px){
        #top-menu-wrap{ width:auto; padding:0 10px; }
        #top-menu{ width:auto; }

        #main{ width:auto; padding:0 10px; }
        #content{ width:auto; float:none; border-right:none; padding:0px }
        #footer{ width:auto; padding:10px; }
        .footer-left, .footer-right{ float: none; text-align: center; }
    }

    @media screen and (max-width:1000px){
        .price-item{ width: 49%; }
        .price-item:nth-child(2n){ margin-right:0px }
        #share-to-page{ width: 60%; height: 95%; }
    }
    @media screen and (max-width:750px){
        #top-menu ul{ display:none; }
        .top-btn { width:250px; height:auto; position:absolute; top:118px; left:10px; }
        .top-btn ul { z-index:9999; margin: 0;  padding: 0; list-style-type: none; }
        .top-btn ul li a { width:210px; display:block; text-decoration:none; height:14px; padding:16px 20px 20px 20px; font-size:14px; color:#fff; font-weight:bold; border-bottom:#fff;background:#385ba8 }
        .top-btn ul li a.current, .top-btn ul li a.current:hover, .top-btn ul li a:hover, .top-btn ul li a.select, .top-btn ul li a.select:hover { background:#668ee8; }
        * html .top-btn ul li a{ display: block; }

        .tab-body{ width:calc(100% - 22px); padding:10px; }


        .fb-account, .fb-account-small{ width:calc(49% - 12px); }
        .fb-account:nth-child(2n), .fb-account-small:nth-child(2n){ margin-right:0 }
        .fb-account:not(:nth-child(2n)), .fb-account-small:not(:nth-child(2n)){ margin-right:2%; }

        .pe-image{ width: 23.5%; }
        .pe-image:nth-child(4n){ margin-right:0px; }
        .pe-image:not(:nth-child(4n)){ margin-right: 2%; }

        #form .input-text{ width:100% }

        #share-to-page{ width: 80%; height: 95%; }

        .panel-options .thumbnail{ width: 25%; }

    }
    @media screen and (max-width:600px){
        .my-account label{ width: 100px;}

        .pe-image{ width: 32%; }
        .pe-image:nth-child(3n){ margin-right:0px; }
        .pe-image:not(:nth-child(3n)){ margin-right: 2%; }

        .video-prev video, .pe-video-prev video{ width: 100%;}

        .photo-prev div{ width: 48%; padding-top:36%; }
        .panel-options .thumbnail{ width: 33.33%; }

        .price-item{ width: 100%; margin-right: 0px; }

        #share-to-page{ width: 95%; height: 95%; }
    }
    @media screen and (max-width:450px){
        .item, .page{ width:100%; float:none; margin:0 0 4% 0; }
        .fb-account, .fb-account-small{ width:calc(100% - 12px) }
    }
</style>

<div class="container" style="font-family: Battambang">
    {{--<div class="card-header bg-info text-white">--}}
    {{--<h4 style="text-align: center;">Tool Facebook By Sieng Roeun--}}

    {{--</h4>--}}

    {{--<form method="POST" action="{{ route('logout') }}">--}}
    {{--@csrf--}}

    {{--<a  class="btn btn-primary btn-sm mb-2 " href="{{ route('logout') }}"--}}
    {{--onclick="event.preventDefault();--}}
    {{--this.closest('form').submit();">--}}
    {{--{{ __('Logout') }}--}}
    {{--</a>--}}
    {{--</form>--}}


    {{--</div>--}}
    {{--<nav class="navbar navbar-light bg-secondary  text-white">--}}
    {{--<div class="" style="font-size: 14px">--}}
    {{--អ្នកប្រើប្រាស់ Tool :  {{ $user->name }}--}}
    {{--</div>--}}
    {{--<form method="POST" action="{{ route('logout') }}">--}}
    {{--@csrf--}}

    {{--<a class="btn btn-secondary btn-sm  text-red" href="{{ route('logout') }}"--}}
    {{--onclick="event.preventDefault();   this.closest('form').submit();" style="font-size: 14px">--}}

    {{--{{ __('Logout') }}--}}
    {{--</a>--}}

    {{--</form>--}}

    {{--</nav>--}}


        <!-- Nav tabs -->
        {{--<ul class="nav nav-tabs" role="tablist">--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link active" data-toggle="tab" href="#pe"> Power Editor</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" data-toggle="tab" href="#page"> Search Pages</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item" id="share_own_tab">--}}
                {{--<a class="nav-link" data-toggle="tab" href="#group" > Share Own Group</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" data-toggle="tab" href="#autoaddfri"> Auto Add Friends</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" data-toggle="tab" href="#"> Auto Join Group</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" data-toggle="tab" href="#"> Auto Invite Like Pages</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="pe" class="container tab-pane active">

                <br>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel-adaccounts">

                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 panel-pe">

                        <div class="card">
                            <div class="card-header bg-secondary text-white">
                                <h6 style="font-size: 14px;color: white">Power Editor Tool </h6>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#url">URL</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#upload">UPLOAD</a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div id="url" class="container tab-pane active">
                                        <br>
                                        <div class="form-row">
                                            <div class="col">
                                                <input type="text" class="form-control video-url" style="font-size: 14px" id="video-url" placeholder="Video Url Requiered" name="video-url">
                                            </div>
                                            <div class="col">
                                                <a href="#" class="btn btn-secondary video-url-add"  style="font-size: 14px">ទាញ Video</a>
                                            </div>
                                        </div><br>

                                        <div class='clear'></div>
                                        <div class='video-url-msg' style='margin-bottom:10px; color:#aaa; font-style: italic'>Facebook, YouTube and direct link video.</div>
                                        <div class='video-prev'></div>
                                        <a href="#" class="btn btn-primary upload-advideo" style="font-size: 14px">បំលែង Video &nbsp;</a><br>

                                        <!--  <br>
                                         <br>
                                           <center>
                                             <button class="btn btn-primary">POST NOW</button>
                                           </center> -->
                                    </div>
                                    <div id="upload" class="container tab-pane fade">
                                        <br>


                                           <form class="form-row" id="form_upload_video"  method="POST" enctype="multipart/form-data">
                                            @csrf
                                                <div class="col">
                                                    <input type="file" name="file" id="file" class="form-control " style="font-size: 14px"  placeholder="Video Url Requiered" >
                                                </div>
                                                <div class="col">
                                                    <button  type="submit" class="btn btn-secondary "  id="btn_upload_video" style="font-size: 14px">Upload Video</button>
                                                </div>
                                                <div id="video_local">
                                                    
                                                </div>
                                            </form>
                                            <br>

                                            <div class='clear'></div>

                                            <!--  <br>
                                             <br>
                                               <center>
                                                 <button class="btn btn-primary">POST NOW</button>
                                               </center> -->
                                        </div>
                                    </div>

                                    {{--Panel for Action PE--}}

                                    <div class='panel-options' >
                                        <div class='thumbnails-wrap' style='display:none'></div>
                                        <div class='data-wrap' style='display:none'>
                                            <br>
                                            <div>

                                                <textarea name='caption' class='caption form-control' placeholder='ចំណង់ជើង ( Caption )' style="font-size: 14px"></textarea>

                                                <br/>
                                                <div class="form-group">

                                                    <label for="uname">Action Button</label>
                                                    <select name="cta" class="cta form-control" style="font-size: 14px">
                                                        <option value="NO_BUTTON" >No Button</option>
                                                        <option value="LIKE_PAGE" selected="">Like Page</option>
                                                        <option value="LEARN_MORE">Learn More</option>
                                                        <option value="BOOK_TRAVEL">Book Travel</option>
                                                        <option value="CONTACT_US">Contact Us</option>
                                                        <option value="DOWNLOAD">Download</option>
                                                        <option value="GET_QUOTE">Get Quote</option>
                                                        <option value="INSTALL_APP">Install App</option>
                                                        <option value="LISTEN_MUSIC">Listen Music</option>
                                                        <option value="MESSAGE_PAGE">Message Page</option>
                                                        <option value="OPEN_LINK">Open Link</option>
                                                        <option value="PLAY_GAME">Play Game</option>
                                                        <option value="SHOP_NOW">Shop Now</option>
                                                        <option value="SIGN_UP">Sign Up</option>
                                                        <option value="SUBSCRIBE">Subscribe</option>
                                                        <option value="USE_APP">Use App</option>
                                                        <option value="WATCH_MORE">Watch More</option>
                                                        <option value="WATCH_VIDEO">Watch Video</option>
                                                    </select>
                                                </div>

                                            </div>


                                            <input type='text' name='link' class='cta-link form-control' placeholder='CTA Link (Optional)'  style="font-size: 14px" />

                                            <input type='text' name='link-title' class='cta-link-title form-control' placeholder='CTA Header (Optional)' value='Like Page 👉👉👉' style="font-size: 14px" />
                                            <h6 style='font-size: 14px'>រូបភាពខាងស្ដាំ:</h6>

                                            <div style='margin-bottom: 20px'>

                                                <div class='pe-images'>

                                                </div>


                                                <div class='sub-tab'>

                                                    <a href='#' class='selected ' data-val='publish' >Publish Now</a>
                                                    <a href='#' data-val='schedule'  >Schedule</a>

                                                </div>

                                                <input type='text' name='schedule-date' class='schedule-date' placeholder='Schedule Date' style='display:none' />
                                                <br>
                                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-lg" style="font-size: 14px">បន្តទៅមុខ</button>
                                                <br>
                                                <div class="modal fade  bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"​ style="font-size: 14px">Page ទាំងអស់នៃគណនី</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="container">
                                                                        <div class='panel-destination'>

                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 14px">បិទ</button>
                                                                <a href="#" class="go-btn btn btn-secondary" style="font-size: 14px">ផុសចូលទៅក្នុងPage</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="page" class="container tab-pane fade"><br>

                <h3 style="font-size: 14px">ផ្ទាំងស្វែងរកឈ្មោះ Pages:</h3>

                <div class="input-group">
                    <input type="text" class="form-control text_keyword_page" placeholder="ស្វែងរក Page Keywords" style="font-size: 14px">
                    <div class="input-group-append">
                        <a href="#" class="btn btn-secondary btn-sm btn_search_page" >
                            <i class="fa fa-search"></i>
                        </a>&nbsp;
                        <a href="#" class="btn btn-secondary btn-sm refresh_search_page" >
                            <i class="fa fa-refresh"></i>
                        </a>
                    </div>
                </div>

                <br>
                <div class="list-group page_search">



                </div>


            </div>


            <div id="autoaddfri" class="container tab-pane fade"><br>
                <!--     tab for auto add Friends -->

                <h6>We will update soon auto add fri</h6>



                <br>
                <div class="list-group page_search">



                </div>


            </div>

            <div id="group" class="container tab-pane fade"><br>
                <h3 style="font-size: 14px" id="header_group">ចែករំលែកទៅគ្រុបរបស់អ្នក</h3>
                <br>
                <div class="get_pages_own">

                    <!--   <a href="#" class="btn btn-secondary btn_own_page" style="font-size: 14px"> ទាញគ្រុបរបស់អ្នក</a> -->



                </div>
                <br>


                <div class="get_timeline_page">


                </div>

                <!--      own_groupmodal -->
                <div class="modal fade owngroup_modal" id="modal_group" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"​ style="font-size: 14px">Group ទាំងអស់នៃគណនី</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="container">
                                        <div class="group-destination">

                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 14px">បិទ</button>
                                <a href="#" class=" btn btn-secondary btn_share_post" style="font-size: 14px">ចែករំលែក</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--    end group       -->
                <!--      modal_accesstoken  -->




                <!--    end group       -->


            </div>
        </div>
    </div>
</div>

<div class="modal fade " id="modal_accestoken" tabindex="-1" style="font-family: Battambang" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"​ style="font-size: 14px">បញ្ចូល Access Token Facebook</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form >

                    <div class="form-group">
                        <label for="email" style="font-weight: bold;">Access Token:</label>
                        <input type="email" class="form-control" id="text_accesstoken" placeholder="Enter Access Token" style="font-size: 14px" value="" >
                    </div>

                    <div class="form-group ">

                        <a href="https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed"  target="_blank" class="form-check-label" for="inlineFormCheck">
                            Link Access Token
                        </a>

                    </div>



                    <div class="msg-access_token" style="text-align: center;">

                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 14px">បិទ</button>
                <button type="button" id="login_fb" class="btn btn-secondary  ">GET PROFILE</button>
            </div>
        </div>
    </div>
</div>
</body>


<script type="text/javascript">

    $(document).ready(function(){
        $('#btn_modal_token').click(function(){
           $('#modal_accestoken').modal('show')
        })
    })
    $('#text_accesstoken').val('{{ $user->access_facebook }}')
    $('.fb-account-small').hide()
    $('#header_group').hide()
    $('.page_search').hide()
    $(".go-btn").on("click", function(e){
        e.preventDefault();

        if(id_facebook == "" || access_token == ""){
            Swal.fire('Oops...','Please choose an account!','error')
        }else if(adAccount == ""){
            Swal.fire('Oops...','Please choose an ad account','error')
        }else if(video_url == ""){
            Swal.fire('Oops...','Video not found!','error')
        }else if(processingState == 0){
            Swal.fire('Oops...','Please click on Next button','error')
        }else if(processingState == 1){
            Swal.fire('Oops...','Please wait until the video finish processing!','error')
        }else if(processingState == 2){
            Swal.fire('Oops...','Video can not be used! Please change another video.','error')
        }else if(video_thumbnail == ""){
            Swal.fire('Oops...','Please select a thumbnail!','error')
        }else if(pe_image == ""){

            Swal.fire('Oops...','lease select a right side image!','error')
        }else if($(".page-list.selected").length == 0){
            Swal.fire('Oops...', ' សូមជ្រើរើស Page លើសពីមួយ!', 'error')

        }else{
            post();
        }
    });
    $(".sub-tab").on("click", "a", function(e){
        e.preventDefault();
        var val = $(this).attr("data-val");

        $(this).addClass("selected");
        $(this).siblings().removeClass("selected");

        if(val == "video-url"){
            $(".video-url").show();
            $(".video-upload").hide();
            $(".video-url-add").show();
            $(".video-url-msg").show();
        }else if(val == "video-upload"){
            $(".video-url").hide();
            $(".video-upload").show();
            $(".video-url-add").hide();
            $(".video-url-msg").hide();
        }else if(val == "publish"){
            $(".schedule-date").hide();
            publish_type = "publish";
        }else if(val == "schedule"){
            $(".schedule-date").show();
            publish_type = "schedule";
        }
    });
    $('.panel-pe').hide()
    $('.upload-advideo').hide()
    $(".schedule-date").daterangepicker({
        singleDatePicker: true,
        timePicker: true,
        minDate: moment().add(15, 'minutes'),
        maxDate: moment().add(180, 'days'),
        locale: {
            format: 'DD MMM YYYY hh:mm A'
        }
    });

    $('.fb-account-small').on('click',function(){


        //click for get acctoken and id_facebook
        var thiss = $(this);

        id_facebook = thiss.attr("data-fb-id");

        access_token = thiss.attr("data-access-token");

        if(access_token=="")
        {

            $('#select_access').html('')

        }else{

            $('#select_access').html('Selected')
        }


        getAccountAd()

    })

    $(".panel-adaccounts").on("change", ".ad-account", function(){

        adAccount = $(this).val();


    });

    $('.panel-adaccounts').on('click','#btn_ad',function(){

        if(adAccount=='')
        {
            Swal.fire('Oops...', ' សូមជ្រើរើស Ads Account!', 'error')


        }else{
            adAccount=$('.ad-account').val();
            $('.panel-pe').show()

        }


        // alert(adcounts_id)
    })

    $('.video-url-add').click(function(e){
        e.preventDefault();
        var url = $(".video-url").val();

        if(url != ""){
            if(url.match(/facebook\.com/g)){
                if(url.match(/permalink\.php/g)){
                    if(url.match(/story_fbid=([^=]+)\&/g)){
                        var m = url.match(/story_fbid=([^=]+)\&/);

                        getFacebookVideoURL(m[1]);

                    }else{
                        $(".video-url-msg").html("<span​ style='color:#f00'>Unable to get video URL! Please copy Facebook video URL to <a href='https://en.savefrom.net/' target='_blank'>savefrom.net</a> and copy the generated video URL back.</span>");
                    }
                }else if(url.match(/\/videos\//g)){
                    var spl1 = url.split("videos/");
                    var spl2 = spl1[1].split("/");
                    if(spl2.length >= 2){
                        getFacebookVideoURL(spl2[0]);
                    }else{
                        getFacebookVideoURL(spl1[1]);
                    }
                }else if(url.match(/\/posts\//g)){
                    var spl1 = url.split("posts/");
                    var spl2 = spl1[1].split("/");
                    if(spl2.length >= 2){
                        getFacebookVideoURL(spl2[0]);
                    }else{
                        getFacebookVideoURL(spl1[1]);
                    }
                }else if(url.match(/watch\/\?v=/g)){
                    var spl1 = url.split("v=");
                    var spl2 = spl1[1].split("&");
                    if(spl2.length >= 2){
                        getFacebookVideoURL(spl2[0]);
                    }else{
                        getFacebookVideoURL(spl1[1]);
                    }
                }else{
                    $(".video-url-msg").html("<span​ style='color:#f00'>Unable to get video URL! Please copy Facebook video URL to <a href='https://en.savefrom.net/' target='_blank'>savefrom.net</a> and copy the generated video URL back.</span>");
                }
            }else if(url.match(/youtube\.com/g) || url.match(/youtu\.be/g)){

                $(".video-url-msg").html("<span​ style='color:#f00'>Unable to get video URL! Please copy Youtube video URL to <a href='https://en.savefrom.net/' target='_blank'>savefrom.net</a> and copy the generated video URL back.</span>");

                // var youtube_video_id = getYoutubeVideoID(url);

                // if(youtube_video_id){

                //     getYoutubeVideoURL(youtube_video_id);

                // }else{
                //     $(".video-url-msg").html("<span​ style='color:#f00'>Unable to get video URL! Please copy Youtube video URL to <a href='https://en.savefrom.net/' target='_blank'>savefrom.net</a> and copy the generated video URL back.</span>");
                // }

            }else{

                video_url = url;
                // $(".video-prev").html("<video src='" + video_url + "' controls width='280' height='200'></video>");
                $(".video-url").val("");
                $(".video-url-msg").html("");
                $(".thumbnails-wrap").html("").slideDown();
                // $('.upload-advideo').show()

                $(".data-wrap").slideDown();

                loadPEImages();

                uploadAdVideo();
            }

        }else{
            Swal.fire('Oops...','Please select url','error')
        }
    })
    $('.upload-advideo').click(function(e){

        e.preventDefault();

        if(video_url != ""){

            $(".data-wrap").slideDown();

            loadPEImages();

            uploadAdVideo();

            $('.upload-advideo').hide()
        }else{
            alert("Video not found!");
        }

    })

    $(".panel-options").on("click", ".thumbnail", function(e){
        e.preventDefault();

        video_thumbnail = $(this).attr("data-url");
        $(this).addClass("selected");
        $(this).siblings().removeClass("selected");
    });
    $(".pe-images").on("click", ".pe-image", function(){
        $(this).addClass("selected");
        $(this).siblings().removeClass("selected");
        pe_image = $(this).find("img").attr("src");
    });

    $(".cta").on("change", function(){

        cta_type = $(this).val();


    });


    $(".panel-destination").on('click', ".check-all", function(e){
        e.preventDefault();

        if($(this).hasClass('checked')){
            $(this).removeClass('checked');
            $(this).html("<i class='far fa-square'></i> Select All");
        }
        else{
            $(this).addClass('checked');
            $(this).html("<i class='fas fa-check-square'></i> Select All");
        }


        if($(this).hasClass('checked')){
            $(".page-list").removeClass("selected").addClass("selected");
            $(".page-list").find(".check-box").addClass("fa-check-square").removeClass("fa-square");
        }
        else{
            $(".page-list").removeClass("selected");
            $(".page-list").find(".check-box").addClass("fa-square").removeClass("fa-check-square");
        }

    });

    $(".panel-destination").on("click", ".page-list", function(){
        var thiss = $(this);

        if(thiss.hasClass("selected")){
            thiss.removeClass("selected");
            thiss.find(".check-box").addClass("fa-square").removeClass("fa-check-square");
        }else{
            thiss.addClass("selected");
            thiss.find(".check-box").addClass("fa-check-square").removeClass("fa-square");
        }
    });


    $(".btn_search_page").on('click',function(){

        var token=access_token
        var fb_id=id_facebook
        var keywork=$('.text_keyword_page').val()
        $.ajax({

            'type':'GET',
            'url':'https://graph.facebook.com/v10.0/pages/search',
            data:{
                access_token:token,
                q:keywork,
                litmit:'150'
            },
            beforeSend:function(data)
            {
                // $(".back-btn").show();
                // $(".panel-accounts").slideUp();
                $(".page_search").html("<div style='padding:10px' class='loading'><img src='https://www.tube2fb.net/images/system/loading.gif' height='12' /> Loading....</div>").slideDown();


            }
        }).then(function(adAccounts){

                var select = "";

                if(adAccounts.data.length > 0){



                    adAccounts.data.forEach(function(adAccount){
                        // select += "<li><input type='checkbox'/>" + adAccount.name + "&nbsp;<input type='button' value='Like'/></li>";

                        select+="   <a href='https://www.facebook.com/"+adAccount.id+"' target='_blank' class='list-group-item list-group-item-action'><img src='./icon/facebook-page.jpg' height='22' />&nbsp;&nbsp;&nbsp;ID Page "+adAccount.id+" --ឈ្មោះ Page ::"+adAccount.name+"  </a>";

                    });
                }else{
                    select += "";
                }

                select += "";


                $(".page_search").html(select);
                $('.page_search').show()

            },function(data)
            {
                console.log(data);

                errorMSG($(".page_search"), data);
            }
        )

    })
    $('.refresh_search_page').click(function(){
        $('.page_search').hide()
        $(".page_search").html("");
        $('.text_keyword_page').val('')
    })
    $('#share_own_tab').click(function(){

        getPages_OwnGroup()

    })
    var acces_token_page=''
    $('.get_pages_own').on('click','a',function(){

        var account_id=id_facebook

        var id_page = $(this).attr("data-page-id");

        acces_token_page=$(this).attr('data-page-access')


        getTimelinePage(id_page,account_id)


    })
    var permalink_group=''



    var post_id_group=''
    $('.get_timeline_page').on('click','#btn_show_group',function(){

        post_id=$(this).attr('data-post-page-id')
        permalink_group=$(this).attr('data-post-link')

        getOwnGroup()

    })
    var group=[]
    $('.btn_share_post').click(function(){

        //  var store = $(".group-list.selected");
        // $.each(store, function(){
        //       var goup_id = $(this).attr("data-group-id");
        //       var group_token = $(this).attr("data-access-group-token");
        //       var group_name = $(this).attr('data-name-group');

        //       var arr = [];

        //       arr.push(goup_id);
        //       arr.push(group_token);
        //       arr.push(group_name);

        //       group.push(arr);
        //   });
        // var d={


        //         message:'TEST',
        //         access_token: 'EAA2oXAGqJqMBAPNTYxRxKNtEKTMkBNOgY7VxowoLTCKVtcoD4YjGAyTShIlo8DCCFHmFL5xjLZBIoco1qMm38TbqZCSJD90sqYl6omBGIZCkPRKmJzYoY6EpfuHHtWJPkzVPgM3cxXqxQAJ9Y4khE1E3wzpCCCbayApQYVg48RY3d4tNTZAYuDO2NMpJOiwZD',

        //     }

        //    console

        // $.ajax({
        //     type:'POST',
        //     url:'https://graph.facebook.com/874604386282263/feed',
        //     data:d,
        //     success:function(data)
        //     {
        //       console.log(data)
        //     }
        // })

        // FB.api(
        //     "/859518501200780/feed",
        //     "POST",
        //     {
        //         "message": "This is a test message",
        //         "access_token": 'EAAAAZAw4FxQIBAGn4Yv7UjK2YV2u7ftFpVAseG706iIP4Llm4QuQTYRnxlR7ZAr47jU2ZCEZB6ZAyTgZBGFmI25PciTHHuauCfkex1oEa0qhAthvull6aSsh6ggaC80b1BtLmBMF9uF52LEmrWzYFfgZAPz2YSMcV6mnYuuSd9trvqJt17F7gMe',
        //     },
        //     function (response) {
        //       if (response && !response.error) {
        //         /* handle the result */
        //       }
        //     }
        // );


    })

    $(".group-destination").on('click', ".check-all", function(e){
        e.preventDefault();

        if($(this).hasClass('checked')){
            $(this).removeClass('checked');
            $(this).html("<i class='far fa-square'></i> Select All");
        }
        else{
            $(this).addClass('checked');
            $(this).html("<i class='fas fa-check-square'></i> Select All");
        }


        if($(this).hasClass('checked')){
            $(".group-list").removeClass("selected").addClass("selected");
            $(".group-list").find(".check-box").addClass("fa-check-square").removeClass("fa-square");
        }
        else{
            $(".group-list").removeClass("selected");
            $(".group-list").find(".check-box").addClass("fa-square").removeClass("fa-check-square");
        }

    });

    $(".group-destination").on("click", ".group-list", function(){
        var thiss = $(this);

        if(thiss.hasClass("selected")){
            thiss.removeClass("selected");
            thiss.find(".check-box").addClass("fa-square").removeClass("fa-check-square");
        }else{
            thiss.addClass("selected");
            thiss.find(".check-box").addClass("fa-check-square").removeClass("fa-square");
        }
    });


</script>
{{--<div id="fb-root"></div>--}}

{{--<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=3390920027798828&autoLogAppEvents=1" nonce="DpNlO3tI"></script>--}}
</html>
<script type="text/javascript">
    var access_token='{{ $user->access_facebook }} '  //For accestoken user
    var id_facebook=''  // for ID Facebok user
    var adAccount=''   //for Ads id
    var acountad_name='' //for Ads Count_id
    var video_url='' //for video url convert
    var pages = [];
    var video_id = "";
    var video_thumbnail = "";
    var processingState = 0;
    var pe_image = "";
    var cta_type = "LIKE_PAGE";
    var publish_type = "publish";
    var isStop = false;
    var share_link = "";
    var i = 0;
    // var member_id = 3210;
    // var key = 'zmNQdseLnotmkCKSd9WflbMuUDkAVKLS';
    var share_content = "";
    function getAccountAd(){


        $.ajax({
            type: "get",
            url: "https://graph.facebook.com/v10.0/" + id_facebook + "/adaccounts",
            data: {
                access_token: access_token
            },
            beforeSend: function(){

                $(".panel-adaccounts").html("<h6 style='font-size:14px'>ជ្រើសរើស Ads acount</h6><div style='padding:10px' class='loading'><img src='https://www.tube2fb.net/images/system/loading.gif' height='12' /> Loading....</div>").slideDown();
            }
        }).then(function(adAccounts){
            //console.log(adAccounts);

            var select = "<h6 style='font-size:14px'>ជ្រើសរើស Ads acount</h6><select name='ad-account' class='ad-account form-control' style='font-size:14px'>";

            if(adAccounts.data.length > 0){

                select += "<option value=''>-ជ្រើសរើស Ads Adccount - </option>";

                adAccounts.data.forEach(function(adAccount){
                    select += "<option value='" + adAccount.id + "'>" + adAccount.id + "</option>";
                });
            }else{
                select += "<option value=''>No ad account</option>";
            }

            select += "</select><br/><a class='btn btn-secondary btn-sm text-white' id='btn_ad'><i class='fa fa-long-arrow-alt-right' style='color:white'></i>&nbsp;ចុចបន្ត</a>";

            $(".panel-adaccounts").html(select);
        }, function(data){
            // console.log(data);

            errorMSG($(".panel-adaccounts"), data);
        });
    }




    function getFacebookVideoURL(id){
        $.ajax({
            type: "GET",
            url: "https://graph.facebook.com/"+ id,
            data:{
                access_token: access_token,
                fields: "id,from"
            },
            beforeSend:function(){
                $(".video-url-msg").html("<span​ style='color:#f00'>Getting Post ID...</span>");
            }
        }).then(function(postGet){
            //console.log(postGet);
            $.ajax({
                type: "GET",
                url: "https://graph.facebook.com/"+ postGet.from.id + "_" + postGet.id,
                data:{
                    access_token: access_token,
                    fields: "id, message, child_attachments, source"
                },
                beforeSend:function(){
                    $(".video-url-msg").html("<span​ style='color:#f00'>Getting Video URL...</span>");
                }
            }).then(function(videoGet){
                //console.log(videoGet);
                if(videoGet.hasOwnProperty("source")){

                    video_url = videoGet.source;

                    // $(".video-prev").html("<video src='" + video_url + "' controls></video>");
                    $(".video-url").val("");
                    $(".video-url-msg").html("");
                    $(".caption").val(videoGet.message);
                    $(".data-wrap").slideDown();
                    $(".thumbnails-wrap").slideDown();
                    uploadAdVideo();
                    loadPEImages();



                }else{
                    if(videoGet.hasOwnProperty("child_attachments")){

                        var vid_link = videoGet.child_attachments[0].link.match(/videos\/([^\/]+)\//);

                        var vid_id = vid_link[1];

                        $.ajax({
                            type: "GET",
                            url: "https://graph.facebook.com/"+ vid_id,
                            data:{
                                access_token: access_token,
                                fields: "source"
                            },
                            beforeSend:function(){
                                $(".video-url-msg").html("<span​ style='color:#f00'>Getting PE Video URL...</span>");
                            }
                        }).then(function(peVideoGet){
                            //console.log(peVideoGet);
                            if(peVideoGet.hasOwnProperty("source")){

                                video_url = peVideoGet.source;

                                // $(".video-prev").html("<video src='" + video_url + "' controls  width='280' height='200'></video>");
                                $(".video-url").val("");
                                $(".video-url-msg").html("");
                                $(".caption").val(videoGet.message);
                                $(".data-wrap").slideDown();
                                $(".thumbnails-wrap").slideDown();
                                uploadAdVideo();
                                loadPEImages();


                            }else{
                                $(".video-url-msg").html("<span​ style='color:#f00'>Unable to get video URL! Please copy Facebook video URL to <a href='https://en.savefrom.net/' target='_blank'>savefrom.net</a> and copy the generated video URL back.</span>");
                            }
                        }, function(errorData){
                            console.log(errorData);
                            errorMSG($(".video-url-msg"), errorData);
                        });
                    }else{
                        $(".video-url-msg").html("<span​ style='color:#f00'>Unable to get video URL! Please copy Facebook video URL to <a href='https://en.savefrom.net/' target='_blank'>savefrom.net</a> and copy the generated video URL back.</span>");
                    }
                }

            }, function(errorData){
                console.log(errorData);
                errorMSG($(".video-url-msg"), errorData);
            });
        }, function(errorData){
            console.log(errorData);
            errorMSG($(".video-url-msg"), errorData);
        });
    }

    $("#form_upload_video").on('submit',function(e){
        e.preventDefault()

        $.ajax({

               'type':'POST',
               'url':'{{ route('uploadvideo') }}',
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                beforeSend: function(){
                $(".thumbnails-wrap").html("<div  class='alert alert-success' style='text-align:center'><img src='https://www.tube2fb.net/images/system/loading.gif' height='12' /> កំពុងបញ្ជូល video...</div>"); }
          
        }).then(function(data){
                   $('.panel-options').slideDown()
                    $(".thumbnails-wrap").slideDown();
                    $(".data-wrap").slideDown();
                  processingState=4
  
                  $(".thumbnails-wrap").html("<div  class='alert alert-success' style='text-align:center'><img src='https://www.tube2fb.net/images/system/loading.gif' height='12' /> កំពុងដំណើរការ Video...</div>");

                  var i='';
                  var data_url=data.url_path;
                  var last_url=data_url.split("public/");
                  console.log(last_url[1])
                  var source1='{{ asset("storage/")}}';
                  var source2=source1.concat("/"+last_url[1])
                   i+='<video src="'+source2+'" controls ></video>';
                           $("#video_local").html(i)
                   // video_url='https://toolpe.000webhostapp.com/testupload.MOV'
                   video_url=source2
                      loadPEImages();
                     uploadAdVideo();

            // setTimeout(() => {

            //     getThumbnails();
            //     getPages()
            //     $('.thumbnails-wrap').html('')
            //      $("#video_local").html(i)

            // }, 200);

        }, function(data){

            
            console.log(data);

            errorMSG($(".thumbnails-wrap"), data);
             
        })
           
    })

    function errorMSG(selector, data){
        var msgTitle = "";
        var msgDesc = "";

        if(data.hasOwnProperty("responseJSON")){
            if(data.responseJSON.error.hasOwnProperty("error_user_title")){
                msgTitle = data.responseJSON.error.error_user_title;

                msgDesc = data.responseJSON.error.error_user_msg.replace(/"/g, "'");
            }else{
                msgTitle = data.responseJSON.error.type;

                msgDesc = data.responseJSON.error.message;
            }
        }else{
            msgTitle = "No Internet";
            msgDesc = "Please check your internet connection";
        }

        selector.html("<div class='item-list' style='color:#f00'><i class='fas fa-exclamation-circle'></i> " + msgTitle + "<div>" + msgDesc + "</div></div>");
    }



    function uploadAdVideo(){

        $.ajax({
            type: "post",
            url: "https://graph.facebook.com/v10.0/" + adAccount + "/advideos",
            data: {
                access_token: access_token,
                file_url: video_url    ,
                // file_url: video_url
            },
            beforeSend: function(){
                $(".thumbnails-wrap").html("<div  class='alert alert-success' style='text-align:center'><img src='https://www.tube2fb.net/images/system/loading.gif' height='12' /> កំពុងបញ្ជូល video...</div>"); }
        }).then(function(adVideo){

            //console.log(adVideo);

            processingState = 1;

            video_id = adVideo.id;

            $(".thumbnails-wrap").html("<div  class='alert alert-success' style='text-align:center'><img src='https://www.tube2fb.net/images/system/loading.gif' height='12' /> កំពុងដំណើរការ Video...</div>");

            setTimeout(() => {

                getThumbnails();

            }, 60000);

        }, function(data){

            processingState = 2;

            console.log(data);

            errorMSG($(".thumbnails-wrap"), data);
        });
    }
    @php
        if($user->access_facebook!=null)
        {

    @endphp
             loadAccount()


    @php }else{   @endphp

    $('#modal_accestoken').modal({'static':true,'backdrop':'static'})

    @php }@endphp
    function loadAccount(){

        //for load account facebook profile
        var my_token = $('#text_accesstoken').val()
        if(my_token == ""){
            $(".msg-access_token").html("<p style='color:red'>Please enter Access Token</p>");
        }else{
            $.ajax({
                url: "https://graph.facebook.com/me",
                data: {
                    access_token: my_token,
                    fields: "id,name,link"
                },
                beforeSend: function(){ $(".msg-access_token").html("Loading......"); }

            }).then(function(dataGet) {

                    // console.log(dataGet);

                    $('.fb-account-small').attr( "data-fb-id", dataGet.id);
                    $('.fb-account-small').attr( "data-access-token", my_token );
                    $('#fb_name').html(dataGet.name);

                    $.ajax({
                        url: "https://graph.facebook.com/" + dataGet.id + "/picture",
                        data: {
                            access_token: my_token,
                            redirect: 0
                        },
                        beforeSend: function(){ $(".msg-access_token").html("Successfully..."); }


                    }).then(function(data){
                        // console.log(data.data.url)
                        $('.fb-account-small').show()
                        $('.fb-account-small-picture').html("<img src='" + data.data.url + "' />")
                        $(".msg-access_token").html("");

                    })


                },
                function(err){
                    // console.log(err);
                    errorMSG($(".msg-access_token"), err);
                    $(".msg-access_token").html("Error getting profile info! Please check your Access Token");
                });
        }
    }
    $('#login_fb').click(function(){
        var txttoken=$('#text_accesstoken').val()

        $.ajax({

            url: "save_token",

            data:{'_token':'{{ @csrf_token() }}','txt_access':txttoken},

            'type':'POST',

            success:function(data)
            {
                console.log(data)

                loadAccount()
            }
        })

    })


    function loadPEImages(){

        var l="";
        l+='<div class="pe-image image "><img src="https://files.fm/thumb_show.php?i=qp6m5g9pw"/></div>';
        l+='<div class="pe-image image "> <img src="https://files.fm/thumb_show.php?i=xa5c57rub" /></div>';
        l+='<div class="pe-image image "> <img src="https://files.fm/thumb_show.php?i=vnn3hwz3z" /></div>';
        l+='<div class="pe-image image "> <img src="https://files.fm/thumb_show.php?i=nwdfnmbxy" /></div>';

        l+="<div class='clear'></div>";

        $(".pe-images").html(l);

    }
    

    function getThumbnails(){
        $.ajax({
            type: "get",
            url: "https://graph.facebook.com/v10.0/" + video_id + "/thumbnails",
            data: {
                access_token: access_token
            }
        }).then(function(thumbnails){
            console.log(thumbnails);

            if(thumbnails.data.length > 0){

                processingState = 3;

                var thumb_content = "<h4 style='font-size:14px'>Thumbnails:</h4><div class='thumbnails'>";

                thumbnails.data.forEach(function(thumb){
                    thumb_content += "<a href='#' class='thumbnail' data-url='" + thumb.uri + "'><img src='" + thumb.uri + "' width='120' height='150'/></a>";
                });

                thumb_content += "</div>";
                thumb_content += "<div class='clear'></div>";
                // thumb_content += "<form class='custom-thumb' style='padding:10px' method='POST'><input class=\"custom_thumb\" name=\"custom_thumb\" type=\"file\"><div id='custom-thumb-queue'></div></form>";

                $(".thumbnails-wrap").html(thumb_content);

                getPages();


            }
            else{
                setTimeout(() => {
                    getThumbnails();
                }, 90000);
            }

        }, function(data){
            console.log(data);

            errorMSG($(".thumbnails"), data);
        });
    }

    function getPages(){
        $.ajax({
            url: "https://graph.facebook.com/v10.0/" + id_facebook + "/accounts",
            data:{
                access_token: access_token,
                limit: 100,
                fields: "id,name,access_token"
            },
            beforeSend: function(){

                $(".panel-destination").html("<h2>Pages...</h2><div class='navbar'>&nbsp;</div><div style='padding:10px' class='loading'><img src='https://www.tube2fb.net/images/system/loading.gif' height='50' /></div>");
                $(".panel-destination").slideDown();
            }

        }).then(function(pgGet){
            var pg_content = "";
            pg_content += "<div class='card-header bg-info text-white'>";
            pg_content += "<a href='#' class='check-all'><i class='far fa-square'></i> Select All</a>";
            pg_content += "<div class='clear'></div></div>";


            if(pgGet.data.length > 0){
                pg_content += "<div>";

                pgGet.data.forEach(function(pg){
                    pg_content += "<div class='page-list " + pg.id + "' data-page-id='" + pg.id + "' data-access-token='" + pg.access_token + "'><i class='far fa-square check-box'></i> <img src='https://www.tube2fb.net/images/system/facebook-page.jpg' height='12' /> " + pg.name + "<div class='page-msg'></div></div>";
                    share_content += "<div class='page-list'><a href='#' class='share-this button-small share-" + pg.id + "' data-id='" + pg.id + "' data-access-token='" + pg.access_token + "' style='float:right'>Share</a><img src='https://www.tube2fb.net/images/system/facebook-page.jpg' height='12' /> " + pg.name + " <div class='clear'></div></div>";
                });

                pg_content += "</div>";

            }else{
                pg_content += "<div class='item-list'>No pages found for this account</div>";
            }


            $(".panel-destination").html(pg_content);
            $(".pages-to-share").html(share_content);

        }, function(data){
            console.log(data);
            errorMSG($(".panel-destination"), data);
        });

    }


    function post(){
        if(!isStop){
            var sel = $(".page-list.selected");

            if(sel.length == 0){

                Swal.fire('Oops...','Please select at least 1 page!','error')
            }else{
                if(pages.length == 0){
                    $.each(sel, function(){
                        var page_id = $(this).attr("data-page-id");
                        var page_token = $(this).attr("data-access-token");
                        var page_name = $(this).text();

                        var arr = [];

                        arr.push(page_id);
                        arr.push(page_token);
                        arr.push(page_name);

                        pages.push(arr);
                    });
                }

                if(i < pages.length){

                    $(".action-btn").html("<a href='#' class='stop-btn button-small'>Stop</a>");
                    $(".process-msg").html("Posting... " + (i + 1) + " / " + pages.length).show();

                    if($(".cta-link").val() == ""){

                        var cta_link = "https://web.facebook.com/" + pages[i][0];

                    }else{
                        var cta_link = $(".cta-link").val();
                    }

                    if($(".cta-link-title").val() == ""){

                        var cta_link_title = pages[i][2];

                    }else{
                        var cta_link_title = $(".cta-link-title").val();
                    }

                    var cta_value = {}

                    if(cta_type == "LIKE_PAGE"){
                        cta_value["page"] = pages[i][0];
                    }else{
                        cta_value["link"] = cta_link;
                    }

                    var cta = {
                        type: cta_type,
                        value: cta_value
                    }

                    var d = {
                        name: moment(moment(), "DD MMM YYYY hh:mm A").format("X"),
                        object_story_spec: {
                            page_id: pages[i][0],
                            link_data:{
                                message: $(".caption").val(),
                                caption: cta_link,
                                link: cta_link,
                                multi_share_optimized: false,
                                child_attachments:[
                                    {
                                        name: cta_link_title,
                                        link: cta_link,
                                        video_id: video_id,
                                        picture: video_thumbnail,
                                        call_to_action: cta
                                    },
                                    {
                                        name: cta_link_title,
                                        link: cta_link,
                                        picture: pe_image,
                                        call_to_action: cta
                                    }
                                ]
                            }
                        },
                        access_token: access_token
                    }

                    $.ajax({
                        type: "post",
                        url: "https://graph.facebook.com/v10.0/" + adAccount + "/adcreatives",
                        data: d,
                        beforeSend: function(){
                            $("." + pages[i][0]).css({ background: "#fffbbb" });
                            $("." + pages[i][0]).find(".page-msg").html("<img src='https://www.tube2fb.net/images/system/loading.gif' height='12' /> Posting...");
                        }
                    }).then(function(creative){
                        //console.log(p);

                        $.ajax({
                            type: "get",
                            url: "https://graph.facebook.com/v10.0/" + creative.id,
                            data: {
                                access_token: access_token,
                                fields: "effective_object_story_id"
                            },
                            beforeSend: function(){
                                $("." + pages[i][0]).find(".page-msg").html("<img src='https://www.tube2fb.net/images/system/loading.gif' height='12' /> Getting Post ID...");
                            }
                        }).then(function(c){
                            //console.log(c);

                            var d = {
                                access_token: pages[i][1]
                            }

                            if(publish_type == "publish"){
                                d["is_published"] = true;
                            }else{
                                var schedule_time = $("[name='schedule-date']").val();

                                d["scheduled_publish_time"] = moment(schedule_time, "DD MMM YYYY hh:mm A").format("X");

                            }

                            $.ajax({
                                type: "post",
                                url: "https://graph.facebook.com/v10.0/" + c.effective_object_story_id,
                                data: d,
                                beforeSend: function(){
                                    $("." + pages[i][0]).find(".page-msg").html("<img src='https://www.tube2fb.net/images/system/loading.gif' height='12' /> Publishing Post...");
                                }
                            }).then(function(p){

                                $("." + pages[i][0]).css({ background: "#bfb" });
                                $("." + pages[i][0]).find(".page-msg").html("<span style='color:#0c0'><i class='fas fa-check'></i> Posted<a href='https://www.facebook.com/" + c.effective_object_story_id + "' class='link' target='_blank' style='float: right;'><i class=\"far fa-eye\"></i> View Post</a><a data-fancybox data-touch=\"false\" data-src=\"#share-to-page\"  data-share-link='https://www.facebook.com/" + c.effective_object_story_id + "' href=\"javascript:;\"  class='link share-to-page' style='float: right; margin-right:20px'><i class=\"fas fa-share-alt\"></i> Share</a></span>");

                                i++;
                                post();

                            }, function(data){
                                console.log(data);

                                $("." + pages[i][0]).css({ background: "#fbb" });
                                errorMSG($("." + pages[i][0]).find(".page-msg"), data);

                                i++;
                                post();

                            });

                        }, function(data){
                            console.log(data);

                            $("." + pages[i][0]).css({ background: "#fbb" });
                            errorMSG($("." + pages[i][0]).find(".page-msg"), data);

                            i++;
                            post();
                        });

                    }, function(data){
                        console.log(data);

                        $("." + pages[i][0]).css({ background: "#fbb" });
                        errorMSG($("." + pages[i][0]).find(".page-msg"), data);

                        i++;
                        post();
                    });
                }else{
                    done();
                }
            }
        }
    }
    function done(){
        $(".back-btn").show();
        $(".action-btn").html("<a href='#' class='go-btn button-small'>Go</a>");
        $(".page-list").removeClass("selected");
        $(".page-list").find(".check-box").removeClass("fa-check-square").addClass("fa-square");
        $(".process-msg").html("<div style='text-align:center; padding:10px; color:#0c0;'><i class='fas fa-check'></i> Task Completed</div>");

        i = 0;
        pages = [];
        isStop = false;
    }
    function stop(){
        isStop = true;
        $(".action-btn").html("<a href='#' class='resume-btn button-small'>Resume</a>");
        $(".back-btn").show();
        $(".process-msg").html("").hide();
    }

    function resume(){
        isStop = false;

        post();

        $(".action-btn").html("<a href='#' class='stop-btn button-small'>Stop</a>");
        $(".back-btn").hide();
    }
    function shareThis(data){

        $.ajax({
            type: "POST",
            url: "https://graph.facebook.com/v10.0/" + data[0] + "/feed",
            data:{
                access_token: data[1],
                link: share_link,
                message: $(".share-message").val()
            },
            beforeSend: function(){
                $(".share-" + data[0]).html("Sharing...");
            }
        }).then(function(d){
            $(".share-" + data[0]).html("Shared").hide();
        },function(e){
            $(".share-" + data[0]).html("ERROR!");
        });
    }

    function getPages_OwnGroup(){
        if( access_token == "" )
        {
            Swal.fire('Oops...','Please choose an ad account','error')
            $('#header_group').hide()
        }else{
            $('#header_group').show()
            $.ajax({
                url: "https://graph.facebook.com/v10.0/" + id_facebook + "/accounts",
                data:{
                    access_token: access_token,
                    limit: 250,
                    fields: "id,name,access_token"
                },
                beforeSend: function(){

                    $(".get_pages_own").html("<div style='padding:10px' class='loading'><img src='https://www.tube2fb.net/images/system/loading.gif' height='12' /> Loading Page....</div>").slideDown();

                }

            }).then(function(pgGet){
                var pg_content = "";
                // pg_content += "<div class='navbar'>";
                //     pg_content += "<a href='#' class='check-all'><i class='far fa-square'></i> Select All</a>";
                // pg_content += "<div class='clear'></div></div>";


                if(pgGet.data.length > 0){
                    pg_content += "";

                    pgGet.data.forEach(function(pg){
                        // pg_content += "<div class='page-list " + pg.id + "' data-page-id='" + pg.id + "' data-access-token='" + pg.access_token + "'><i class='far fa-square check-box'></i> <img src='https://www.tube2fb.net/images/system/facebook-page.jpg' height='12' /> " + pg.name + "<div class='page-msg'></div></div>";
                        // share_content += "<div class='page-list'><a href='#' class='share-this button-small share-" + pg.id + "' data-id='" + pg.id + "' data-access-token='" + pg.access_token + "' style='float:right'>Share</a><img src='https://www.tube2fb.net/images/system/facebook-page.jpg' height='12' /> " + pg.name + " <div class='clear'></div></div>";
                        pg_content +=" <a href='#'' class='btn btn-secondary btn_own_page' style='font-size: 14px' data-page-access="+pg.access_token+" data-page-id='" + pg.id + "'> "+pg.name +"</a>";

                    });

                    pg_content += "";

                }else{
                    pg_content += '';
                }


                $(".get_pages_own").html(pg_content);
                // $(".pages-to-share").html(share_content);

            }, function(data){
                console.log(data);
                errorMSG($(".get_pages_own"), data);
            });
        }


    }
    function getTimelinePage(page_id,account_id){
        var page_id=page_id
        var id_fb=account_id

        $.ajax({
            url: "https://graph.facebook.com/v10.0/" +page_id + "/feed",
            data:{
                access_token: access_token,
                // limit: 250,
                fields: "id,created_time,access_token,permalink_url,message"
            },
            beforeSend: function(){

                $(".get_timeline_page").html("<div style='padding:10px' class='loading'><img src='https://www.tube2fb.net/images/system/loading.gif' height='12' /> Loading....</div>").slideDown();

            }

        }).then(function(pgGet){
            var pg_content = "<table class='table table-hover'><thead><th>លេខរៀងផុស</th><th>ចំណង់ជើង</th><th>ផុសថ្ងៃទី</th><th>Action</th></thead> ";
            pg_content+="<tbody>";
            // pg_content += "<div class='navbar'>";
            //     pg_content += "<a href='#' class='check-all'><i class='far fa-square'></i> Select All</a>";
            // pg_content += "<div class='clear'></div></div>";


            if(pgGet.data.length > 0){
                pg_content += "";

                pgGet.data.forEach(function(pg){
                    // pg_content += "<div class='page-list " + pg.id + "' data-page-id='" + pg.id + "' data-access-token='" + pg.access_token + "'><i class='far fa-square check-box'></i> <img src='https://www.tube2fb.net/images/system/facebook-page.jpg' height='12' /> " + pg.name + "<div class='page-msg'></div></div>";
                    // share_content += "<div class='page-list'><a href='#' class='share-this button-small share-" + pg.id + "' data-id='" + pg.id + "' data-access-token='" + pg.access_token + "' style='float:right'>Share</a><img src='https://www.tube2fb.net/images/system/facebook-page.jpg' height='12' /> " + pg.name + " <div class='clear'></div></div>";
                    pg_content +="<tr><td>"+pg.id+"</td><td>"+pg.message+"</td><td>"+pg.created_time+"</td><td><a href='#' class='btn btn-primary btn-sm'><i class='fa fa-eye'></i></a/>&nbsp;<a  class='btn btn-primary btn-sm  ' data-toggle='modal' data-target='.owngroup_modal' id='btn_show_group' data-post-link="+pg.permalink_url+" data-post-page-id="+pg.id+"><i class='fa fa-share-alt'></i><a/></tr>";

                });

                pg_content += "</tbody>";

            }else{
                pg_content += '</table>';
            }


            $(".get_timeline_page").html(pg_content);
            console.log(pgGet)
            // $(".pages-to-share").html(share_content);

        }, function(data){
            console.log(data);
            errorMSG($(".get_pages_own"), data);
        });


    }


    function getOwnGroup(){
        $.ajax({
            url: "https://graph.facebook.com/v10.0/" + id_facebook + "/groups",
            data:{
                access_token: access_token,


            },
            beforeSend: function(){

                $(".group-destination").html("<h2>Group...</h2><div class='navbar'>&nbsp;</div><div style='padding:10px' class='loading'><img src='https://www.tube2fb.net/images/system/loading.gif' height='12' /></div>");
                $(".group-destination").slideDown();
            }

        }).then(function(pgGet){
            var pg_content = "";
            // pg_content += "<div class='navbar'>";
            //     pg_content += "<a href='#' class='check-all'><i class='far fa-square'></i> Select All</a>";
            // pg_content += "<div class='clear'></div></div>";


            if(pgGet.data.length > 0){
                pg_content += "<div>";

                pgGet.data.forEach(function(pg){
                    pg_content += "<div class='group-list " + pg.id + "' data-group-id='" + pg.id + "' data-access-group-token='" + access_token + "' data-name-group="+pg.name+"><i class='far fa-square check-box'></i> <img src='https://www.tube2fb.net/images/system/facebook-page.jpg' height='12' /> ឈ្មោះក្រុម &nbsp;&nbsp" + pg.name + " &nbsp;&nbsp; សិទ្ធក្នុងក្រុម  &nbsp;&nbsp; "+pg.privacy+"<div class='page-msg'></div></div>";

                });

                pg_content += "</div>";

            }else{
                pg_content += "<div class='item-list'>No pages found for this account</div>";
            }


            $(".group-destination").html(pg_content);


            console.log(pgGet)

        }, function(data){
            console.log(data);
            errorMSG($(".group-destination"), data);
        });

    }




    function isUrlValid(url) {
        return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
    }


</script>

@endsection
