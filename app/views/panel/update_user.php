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
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="fas fa-user-cog" style="padding: 25px;font-size: 100px;"></i></div>
                </div>
                <div class="col">
                    <div style="padding-top: 50px;padding-bottom: 50px;">
                        <h1>Admin panel<br></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section data-aos="zoom-out" style="text-align: center;">
        <h1 class="bg-light" style="padding: 25px;">Update user</h1>
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col">
                    <form method="post" action="<?php echo URLROOT ;?>/panel/update_user">
                        <div class="form-group"><input class="form-control" type="text" data-bs-hover-animate="pulse" placeholder="User login" name="login" required=""></div>
                        <div class="form-group"><p>Grant admin</p></div>
                        <div class="form-group">
                            <select class="custom-select" data-bs-hover-animate="pulse" name="admin" required="">
                                    <option value="true">Active</option>
                                    <option value="false">False</option>
                            </select>
                        </div>
                        <div class="form-group"><p>Activate/ Diactivate</p></div>
                        <div class="form-group">
                            <select class="custom-select" data-bs-hover-animate="pulse" name="active" required="">
                                <option value="true">Active</option>
                                <option value="false">False</option>
                            </select></div>
                            <div class="form-group">
                        <div class="form-group"><button class="btn btn-primary btn-block" data-bs-hover-animate="pulse" type="submit">Update</button></div>
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