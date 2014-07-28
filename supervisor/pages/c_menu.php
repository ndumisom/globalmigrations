<?php session_start(); ?>
<style>
    a.button {
    color: #0000FF;
    font: bold 12px Helvetica, Arial, sans-serif;
    text-decoration: none;
    padding: 7px 12px;
    position: relative;
    display: inline-block;
    text-shadow: 0 1px 0 #fff;
    -webkit-transition: border-color .218s;
    -moz-transition: border .218s;
    -o-transition: border-color .218s;
    transition: border-color .218s;
    background: #f3f3f3;
    background: -webkit-gradient(linear,0% 40%,0% 70%,from(#F5F5F5),to(#F1F1F1));
    background: -moz-linear-gradient(linear,0% 40%,0% 70%,from(#F5F5F5),to(#F1F1F1));
    border: solid 1px #dcdcdc;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    margin-right: 10px;
}
a.button:hover {
    color: #000000;
    border-color: #0000FF;
    -moz-box-shadow: 0 2px 0 rgba(0, 0, 0, 0.2) -webkit-box-shadow:0 2px 5px rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
}
a.button:active {
    color: #000;
    border-color: #444;
}
</style>
<div id="online_refresh">
<hr/>
<li> <b><a class='button' href="index.php?m=task" onClick="loadPage( 'task', 'task_allocation.php')"> Allocate task &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></b> <br/></li>
<hr/>

<li> <b><a class='button' href="index.php" onClick="loadPage( 'none', 'include_files.php')"> View all clients &nbsp;&nbsp;</a></b> <br/></li>
<hr/>
<li><b> <a class='button' href="index.php?m=status" onClick="loadPage( 'status', 'permit_status.php')"> Permits status &nbsp;&nbsp;&nbsp;</a></b><br/></li>

<hr/>
<li><b> <a class='button' href="index.php?m=reports" onClick="loadPage( 'view_users', 'reports.php');"> Reports &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></b> <br/>
<hr/>
<li><b> <a class='button' href="index.php?m=task_request" onClick="loadPage( 'task_request', 'task_request.php');"> Task Request &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></b> <br/>
<hr/>

<? require_once 'view_online_users.php' ?>
</div>
