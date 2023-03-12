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
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="fas fa-newspaper" style="padding: 25px;font-size: 100px;"></i></div>
                </div>
                <div class="col">
                    <div style="padding-top: 50px;padding-bottom: 50px;">
                        <h1>Posts<br></h1>
                        <p>main page</p>
                        <?php if(isset($_SESSION['id'])) : ?>
                            <p>Hello <?php echo $_SESSION['name']?></p>
                            <a class="btn btn-danger btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/auth/logout">Logout</a>
                        <?php else : ?>
                            <p>you are not authorized</p>
                        <?php endif ;?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section data-aos="zoom-out">
        <h1 class="bg-light" style="padding: 25px; text-align: center;">Post<br></h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="alert alert-secondary" role="alert" data-bs-hover-animate="pulse" style="margin-top: 16px;">
                        <ul style="margin: 0px; padding: 0px;"><h1 class="text-center" style="font-weight: bold; margin-bottom: 16px;"><?php echo $data['post']->p_name;?></h1></ul>
                        <ul style="margin: 0px; padding: 0px;"><div class="text-center"><img class="zoom" style="margin: 16px;" src="<?php echo $data['post']->p_img;?>" height="100" alt=""></div></ul>
                        <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">Description: </h><?php echo $data['post']->p_desc ;?></ul>
                        <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">Category: </h><?php echo $data['post']->c_name;?></ul>
                        <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">Type: </h><?php echo $data['post']->t_name;?></ul>
                        <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">User: </h><?php echo $data['post']->u_login;?></ul>
                        <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">Text: </h><?php echo $data['post']->p_text;?></ul>
                        <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">Resource: </h><a href="<?php echo $data['post']->p_resource;?>">Link on resouce</a></ul>
                        <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">Tags: </h><?php echo $data['post']->p_tags;?></ul>
                        <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">Date: </h><?php echo $data['post']->p_date;?></ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-aos="zoom-out">
        <h1 class="bg-light" style="padding: 25px; text-align: center;">Reviews<br></h1>
        <div class="container">
            <div class="row">
                <?php if(isset($_SESSION['id'])) : ?>
                    <div class="col">
                        <p>Only small reviews.</p>
                        <p>Buffer from 5 last reviews.</p>
                        <form method="post" action="<?php echo URLROOT ;?>/posts/read_post/<?php echo $data['post']->p_id;?>">
                            <div class="form-group"><textarea data-bs-hover-animate="pulse" class="form-control" name="message" cols="1" rows="2" placeholder="Your review" required></textarea></div>
                            <div class="form-group"><button data-bs-hover-animate="pulse" class="btn btn-primary btn-block" type="submit">Review</button></div>
                        </form>
                    </div>
                <?php else : ?>
                    <p>you are not authorized</p>
                <?php endif ;?>
                    <div class="col flex-column m-auto">
                        <?php foreach ($data['reviews'] as $table) : ?>
                        <div class="alert alert-secondary justify-content-center align-items-center" role="alert" data-bs-hover-animate="pulse" style="margin-top: 16px;">
                            <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">User: </h><?php echo $table->u_login;?></ul>
                            <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">Message: </h><?php echo $table->r_message;?></ul>
                        </div>
                        <?php endforeach ;?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require APPROOT . '/views/inc/navbuttons.php'; ?>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
    <?php require APPROOT . '/views/inc/scripts.php'; ?>
</body>
</html>