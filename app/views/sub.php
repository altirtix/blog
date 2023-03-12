<!DOCTYPE html>
<html>

<head>
    <?php require APPROOT . '/views/inc/meta.php'; ?>
    <?php require APPROOT . '/views/inc/stylesheet.php'; ?>
</head>

<body>
    <?php require APPROOT . '/views/inc/navbar.php'; ?>

    <header class="text-center text-white bg-primary" data-aos="zoom-out">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col">
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="fas fa-at" style="padding: 25px;font-size: 100px;"></i></div>
                </div>
                <div class="col">
                    <div style="padding-top: 50px;padding-bottom: 50px;">
                        <h1>Subscription<br></h1>
                        <p>on this page you can subscribe to our news<br></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section data-aos="zoom-out" style="text-align: center;">
        <h1 class="bg-light" style="padding: 25px;">Subscribe</h1>
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col">
                    <form method="post" action="<?php echo URLROOT ;?>/sub">
                        <div class="form-group"><input class="form-control" type="email" data-bs-hover-animate="pulse" placeholder="Your Email" name="email" required=""></div>
                        <div class="form-group"><button class="btn btn-primary btn-block" data-bs-hover-animate="pulse" type="submit">Subscribe</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <?php require APPROOT . '/views/inc/navbuttons.php'; ?>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
    <?php require APPROOT . '/views/inc/scripts.php'; ?>
</body>
</html>