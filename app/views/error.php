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
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="fas fa-window-close" style="padding: 25px;font-size: 100px;"></i></div>
                </div>
                <div class="col">
                    <div style="padding-top: 50px;padding-bottom: 50px;">
                        <h1>Something went wrong...<br></h1>
                        <h2>Why?<br></h2>
                        <h3><i class="fas fa-times"></i>&nbsp;no privileges to visit this page<br></h3>
                        <h3><i class="fas fa-times"></i>&nbsp;page does not exist<br></h3>
                        <h3><i class="fas fa-times"></i>&nbsp;unstable internet connection<br></h3>
                        <h3><i class="fas fa-times"></i>&nbsp;problems with the hosting provider<br></h3>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <?php require APPROOT . '/views/inc/navbuttons.php'; ?>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
    <?php require APPROOT . '/views/inc/scripts.php'; ?>
</body>
</html>