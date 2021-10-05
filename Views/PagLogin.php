<?php   include_once 'Header.php';    ?>

<div class="container mt-4 text-center">
    <div class="form-signin">
            <form action="UserController.php" method="POST" class="form">
                <p class="h3 mb-3">Sign In</p>
                <div class="mb-3">
                    <input type="text" class="form-control" id="EmailLogin" placeholder="Email">
                </div>
                <div class="mb-3">
                <input type="text" class="form-control" id="Password" placeholder="Password">
                </div>
                <a href="../Controllers/UserController.php?action=login" class="w-100 btn-primary btn btn-lg" >Sing In</a>
                <p class="my-4 text-muted">©2021</p>
            </form>
    </div>
</div>


<?php   include_once 'Footer.php';  ?>