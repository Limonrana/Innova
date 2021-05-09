<body class="account-pages">

<!-- Begin page -->
<div class="accountbg" style="background: url('assets/images/bg-2.jpg');background-size: cover;background-position: center;"></div>

<div class="wrapper-page mt-5">

    <div class="card col-md-4 m-auto">
        <div class="card-block">

            <div class="account-box">

                <div class="card-box p-5">
<!--                    <h2 class="text-uppercase text-center pb-4">-->
<!--                        <a href="lock-screen.php" class="text-black">-->
<!--                            <span>FAST FREELANCE BD</span>-->
<!--                        </a>-->
<!--                    </h2>-->

                    <div class="text-center">
                        <div class="mb-3">
                            <img src="uploads/users/<?php echo $_SESSION['photo']; ?>" class="rounded-circle img-thumbnail thumb-lg" alt="<?php echo $_SESSION['photo']; ?>">
                        </div>

                        <p class="text-muted m-b-0 font-14">Enter your password to access the admin. </p>
                    </div>

                    <form class="form-horizontal" action="inc/functions/lock-screen-login.php" method="POST">

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" required="" id="password" placeholder="Enter your password">
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <div class="col-12">
                                <button class="btn btn-block btn-custom  waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                    </form>

                    <div class="row m-t-50">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">Not you? return<a href="index.php" class="text-dark ml-2"><b>Sign In</b></a></p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>