<?php defined('BASEPATH') or die("No Access Allowed");?>

<h2 class="index-header">Selamat Datang di Aplikasi E - Voting<br />Ayub Situmeang</h2>
<div class="row">
    <div class="col-md-4 col-md-offset-1">
        <div id="content-slider">
            <img src="./assets/img/default.png" class="img" alt="Slideshow 1">
            <img src="./assets/img/kades.webp" class="img" alt="Slideshow 2" >
            <img src="./assets/img/voting.png" class="img" alt="Slideshow 3" >
        </div>
    </div>
    <div class="col-md-6 form">
        <span class="info-login">Silahkan Login untuk dapat melakukan pemilihan</span>
        <br />
        <br />
        <form action="" method="post">
            <div class="form-group">
                <label>Masukkan NIS :</label>
                <input type="number" class="form-control" placeholder="NIS" required="NIS" name="nis"/>
            </div>
            <br />
            <div class="row">
            
                <div class="text-right" style="padding-right:15px;">
                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="Login">
                </div>
                <div class="text-right" style="margin-top:3px;padding-right:15px;">
                    <a href="admin/" class="btn btn-warning btn-lg">Login Admin</a>
                </div>
            </div>
        </form>
        
    </div>
</div>