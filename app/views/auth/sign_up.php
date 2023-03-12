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
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="fas fa-user-plus" style="padding: 25px;font-size: 100px;"></i></div>
                </div>
                <div class="col">
                    <div style="padding-top: 50px;padding-bottom: 50px;">
                        <h1>Sign up</h1>
                        <p>read the rules before sign up<br></p><a class="btn btn-primary" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/help">Rules</a></div>
                </div>
                <div class="col">
                    <form method="post" action="<?php echo URLROOT ;?>/auth/sign_up" style="padding: 10px;">
                        <div class="form-group"><input class="form-control" type="text" data-bs-hover-animate="pulse" name="name" placeholder="Your Name" required=""></div>
                        <div class="form-group"><input class="form-control" type="email" data-bs-hover-animate="pulse" name="email" placeholder="Your Email" required=""></div>
                        <div class="form-group"><input class="form-control" type="text" data-bs-hover-animate="pulse" name="login" placeholder="Your login" required=""></div>
                        <div class="form-group"><input class="form-control" type="password" data-bs-hover-animate="pulse" name="password" placeholder="Your Password" required=""></div>
                        <div class="form-group">
                            <div class="custom-control custom-switch"><input class="custom-control-input" type="checkbox" id="formCheck-2" required=""><label class="custom-control-label text-white" for="formCheck-2">I agree with the rules of the service<br></label></div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch"><input class="custom-control-input" type="checkbox" id="formCheck-3" required=""><label class="custom-control-label" for="formCheck-3">I'm not a robot<br></label></div>
                        </div>
                        <div class="form-group"><button class="btn btn-primary btn-block" data-bs-hover-animate="pulse" type="submit">Sign Up</button></div>
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