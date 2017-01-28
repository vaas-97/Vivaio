<?php
include_once './config/init.php';

$title = 'Pagina di login';
if (count($_POST) > 0) :
    $risultato = Vivaio::Login($_POST);
endif;
?>

<!-- header -->
<?php
include './templates/header.php';
?>

<!-- contenuto pagina -->
<div class="container">
        <div class="top">
            <h1 id="title" class="hidden"><span id="logo">Passiflora <!-- <span>UI</span> --></span></h1>
        </div>
        <form action="" method="">
            <div class="login-box animated fadeInUp">
                <div class="box-header">
                    <h2>Log In</h2>
                </div>
                <label for="username">Username</label>
                <br/>
                <input type="text" id="username" name="user">
                <br/>
                <label for="password">Password</label>
                <br/>
                <input type="password" id="password" name="password">
                <br/>
                <button type="submit">Sign In</button>
                <br/>
                <!-- <a href="#"><p class="small">Forgot your password?</p></a> -->
            </div>
        </form>
    </div>

<!-- footer -->
<?php
include './templates/footer.php';
?>