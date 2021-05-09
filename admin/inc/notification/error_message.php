<!--
=============================
Login Page Message Start
=============================
-->
<?php
if (isset($_SESSION['login_error'])){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong class="text-danger">
            <?php
            echo $_SESSION['login_error'];
            unset($_SESSION['login_error']);
            ?>
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
}
?>
<?php
    if (isset($_SESSION['pending_user'])){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong class="text-warning">
            <?php
            echo $_SESSION['pending_user'];
            unset($_SESSION['pending_user']);
            ?>
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
}
?>

<?php
    if (isset($_SESSION['disable_user'])){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong class="text-danger">
            <?php
            echo $_SESSION['disable_user'];
            unset($_SESSION['disable_user']);
            ?>
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
}
?>

<!--
=============================
Login Page Message End
=============================
-->


<!--
=============================
Register Page Message Start
=============================
-->
<?php
if (isset($_SESSION['success_reg'])){ ?>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong class="text-primary"><?php
            echo $_SESSION['success_reg'];
            unset($_SESSION['success_reg']);
        ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
}
?>

<?php
if (isset($_SESSION['err_msg'])){ ?>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong class="text-danger"><?php echo
            $_SESSION['err_msg'];
            unset($_SESSION['err_msg']);
        ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
}
?>

<!--
=============================
Register Page Message End
=============================
-->

<!--
=============================
Add Banner Message Start
=============================
-->

<?php
if (isset($_SESSION['error'])){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong><?php echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <?php
}
?>

<?php
if (isset($_SESSION['success'])){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?php echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <?php
}
?>

<!--
=============================
Add Banner Message End
=============================
-->
