<?php include ("includes/header.php"); ?>
<?php include ("includes/navigation.php"); ?>
<?php include("init.php"); ?>
<div id="layoutSidenav">
            <?php include ("includes/sidebar.php"); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <?php include ("includes/content.php"); ?>
                            <?php
/*                            $user = new User();
                            $result_set = User::find_all_users();

                            while ($row = mysqli_fetch_array($result_set)){
                                echo $row['username'] . "<br>";
                            }*/
                            //Method by ID
/*                            $found_user = User::find_user_by_id(2);
                            echo $found_user['username'];
                            */
                            /*$found_user = User::find_user_by_id(2);
                            $user = User::instantation($found_user);
                            echo $user->username;*/

/*                            $users = User::find_all_users();
                            foreach ($users as $user){
                                echo $user->username . "<br>";
                            }*/
                            $user = User::find_user_by_id(2);
                            echo $user->username;
                            ?>
                        </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
</div>
<?php include ("includes/footer.php"); ?>
