<?php include("includes/header.php"); ?>
<?php
    $the_message = "";
    if ($session->is_signed_in()){
        redirect("index.php");
    }
    if (isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $user_found = User::verify_user($username, $password);

        if ($user_found){
            $session->login($user_found);
            redirect("index.php");
        }
        else {
            $the_message = "Your details are incorrect!";
        }
    }
    else {
        $username = "";
        $password = "";
    }
?>
<link href="css/sb-admin-2.min.css" rel="stylesheet" />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <?php
                                    if (isset($_POST['submit'])){
                                        echo "<div class='alert alert-danger'>$the_message</div>";
                                    }
                                ?>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form class="user" action="" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password"  placeholder="Password">
                                    </div>
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-user btn-block">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>