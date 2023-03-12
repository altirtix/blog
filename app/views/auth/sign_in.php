<!DOCTYPE html>
<html>

<head>
    <?php require APPROOT . '/views/inc/meta.php'; ?>
    <?php require APPROOT . '/views/inc/stylesheet.php'; ?>
</head>

<body>
    <?php require APPROOT . '/views/inc/navbar.php'; ?>

    <header class="text-center text-white bg-secondary" data-aos="zoom-out">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col">
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="fas fa-user-check" style="padding: 25px;font-size: 100px;"></i></div>
                </div>
                <div class="col">
                    <div style="padding-top: 50px;padding-bottom: 50px;">
                        <h1>Sign In</h1>
                        <p>form for entering the service<br></p>
                    </div>
                </div>
                <div class="col">
                    <form method="post" action="<?php echo URLROOT ;?>/auth/sign_in" style="padding: 10px;">
                    <div class="form-group"><input class="form-control" type="text" data-bs-hover-animate="pulse" name="login" placeholder="Your login" required=""></div>
                        <div class="form-group"><input class="form-control" type="password" data-bs-hover-animate="pulse" name="password" placeholder="Your Password" required=""></div>
                        <div class="form-group">
                            <div class="custom-control custom-switch"><input class="custom-control-input" type="checkbox" id="formCheck-1" required=""><label class="custom-control-label" for="formCheck-1">I'm not a robot<br></label></div>
                        </div>
                        <div class="form-group"><button class="btn btn-primary btn-block" data-bs-hover-animate="pulse" type="submit">Sign In</button></div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <?php require APPROOT . '/views/inc/navbuttons.php'; ?>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
    <?php require APPROOT . '/views/inc/scripts.php'; ?>
</body>
</html>