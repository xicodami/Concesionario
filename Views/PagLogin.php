<?php   include_once 'Header.php';  
include '../config/app.php'  ?>

<div class="container mt-4 text-center">
    <div class="form-signin">
            <form action="<?php echo url;?>" method="POST" class="form">
                <p class="h3 mb-3">Sign In</p>
                <div class="mb-3">
                    <input type="text" class="form-control" id="EmailLogin" placeholder="Email">
                </div>
                <div class="mb-3">
                <input type="password" class="form-control" id="Password" placeholder="Password">
                </div>
                <button type="submit" class="w-100 btn-primary btn btn-lg" >Sing In</button>
                <p class="my-4 text-muted">©2021</p>
            </form>
    </div>
</div>


<?php   include_once 'Footer.php';  ?>