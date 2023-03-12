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
                        <p>crud page<br></p>
                        <?php if(isset($_SESSION['id'])) : ?>
                            <p>Hello <?php echo $_SESSION['name']?></p>
                            <a class="btn btn-danger btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/auth/logout">Logout</a>
                        <?php else : ?>
                            <p>you are not authorized</p>
                        <?php endif ;?>
                    </div>
                </div>
                <div class="col">
                    <h1>Statistic<br></h1>
                    <p>active posts <?php echo $data['a_posts']->f_posts_count?></p>
                    <p>diactivated posts <?php echo $data['d_posts']->f_posts_count?></p>
                    <p>actived users <?php echo $data['a_users']->f_users_count?></p>
                    <p>diactivated users <?php echo $data['d_users']->f_users_count?></p>
                    <p>like marks <?php echo $data['a_marks']->	f_marks_count?></p>
                    <p>dislike marks <?php echo $data['d_marks']->	f_marks_count?></p>
                    <p>unique visitors <?php echo $data['u_visitors']->f_unique_visitors_count?></p>
                    <p>all visitors <?php echo $data['a_visitors']->f_visitors_count?></p>
                </div>
            </div>
        </div>
    </header>
    <section data-aos="zoom-out" style="text-align: center;">
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col">
                    <h1 class="bg-light" style="padding: 25px;">Create data</h1>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/create_category">Add category</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/create_type">Add type</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/create_post">Add post</a>
                </div>
                <div class="col">
                    <h1 class="bg-light" style="padding: 25px;">Read data</h1>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/read_information">Show information</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/read_categories">Show categories</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/read_types">Show types</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/read_posts">Show posts</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/read_reviews">Show reviews</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/read_users">Show users</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/read_visitors">Show visitors</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/read_mails">Show mails</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/read_marks">Show marks</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/read_feedback">Show feedback</a>
                </div>
                <div class="col">
                    <h1 class="bg-light" style="padding: 25px;">Update data</h1>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/update_information">Edit site Information</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/update_user">Diactivate/ Activate/ Grant User</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/update_visitor">Diactivate/ Activate Visitor</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/update_post">Diactivate/ Activate Post</a>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/panel/update_review">Diactivate/ Activate Review</a>
                </div>
                <div class="col">
                    <h1 class="bg-light" style="padding: 25px;">Delete data</h1>
                    <p>No func</p>
                </div>
                <div class="col">
                    <h1 class="bg-light" style="padding: 25px;">Options</h1>
                    <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/dump">Download dump</a>
                </div>
            </div>
        </div>
    </section>
    
    <?php require APPROOT . '/views/inc/navbuttons.php'; ?>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
    <?php require APPROOT . '/views/inc/scripts.php'; ?>
</body>
</html>