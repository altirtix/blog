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
                        <p>active posts <?php echo $data['count']->f_posts_count?></p>
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
        <h1 class="bg-light" style="padding: 25px; text-align: center;">Explore<br></h1>
        <div class="container">
            <div class="row">
                <div class="col-3" style="text-align: center;">
                    <div style="padding-top: 260510506;padding-bottom: 25px;"><i class="fas fa-sliders-h" style="font-size: 50px;padding: 25px;color: rgb(149,165,166)"></i>
                        <h2>Filters<br></h2>
                        <p>use fields below</p>
                            <form method="get" style="padding: 15px;">
                                <div class="form-group"><p>Category</p></div>
                                <div class="form-group">
                                    <select class="custom-select" data-bs-hover-animate="pulse" name="category" required="">
                                        <?php foreach ($data['categories'] as $table) : ?>
                                            <option value="<?php echo $table->c_name;?>"><?php echo $table->c_name;?></option>
                                        <?php endforeach ;?>
                                    </select>
                                </div>
                                <div class="form-group"><p>Type</p></div>
                                <div class="form-group">
                                    <select class="custom-select" data-bs-hover-animate="pulse" name="type" required="">
                                        <?php foreach ($data['types'] as $table) : ?>
                                            <option value="<?php echo $table->t_name;?>"><?php echo $table->t_name;?></option>
                                        <?php endforeach ;?>
                                    </select>
                                </div>
                                <div class="form-group"><button class="btn btn-primary btn-block" data-bs-hover-animate="pulse" type="submit">Filter</button></div>
                            </form>
                    </div>
                    <div style="padding-top: 260510506;padding-bottom: 25px;"><i class="fas fa-search" style="font-size: 50px;padding: 25px;color: rgb(149,165,166)"></i>
                        <h2>Search<br></h2>
                        <p>use field below</p>
                        <form method="get" style="padding: 15px;">
                            <div class="form-group"><input class="form-control" type="text" data-bs-hover-animate="pulse" placeholder="Your querry" name="query"></div>
                            <div class="form-group"><button class="btn btn-primary btn-block" data-bs-hover-animate="pulse" type="submit">Find</button></div>
                        </form>
                    </div>
                </div>
                <div class="col">
                    <?php foreach ($data['posts'] as $post) : ?>
                        <div class="col">
                            <div class="alert alert-secondary" role="alert" data-bs-hover-animate="pulse" style="margin-top: 16px;">
                                <ul style="margin: 0px; padding: 0px;"><h1 class="text-center" style="font-weight: bold; margin-bottom: 16px;"><?php echo $post->p_name;?></h1></ul>
                                <ul style="margin: 0px; padding: 0px;"><div class="text-center"><img class="zoom" style="margin: 16px;" src="<?php echo $post->p_img;?>" height="100" alt=""></div></ul>
                                <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">Description: </h><?php echo $post->p_desc ;?></ul>
                                <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">Category: </h><?php echo $post->c_name;?></ul>
                                <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">Type: </h><?php echo $post->t_name;?></ul>
                                <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">User: </h><a href="?user=<?php echo $post->u_login;?>"><?php echo $post->u_login;?></a></ul>
                                <ul style="margin: 0px; padding: 0px;"><h style="font-weight: bold;">Date: </h><?php echo $post->p_date;?></ul>
                                <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT ;?>/posts/read_post/<?php echo $post->p_id ;?>">Show</a>
                            </div>
                        </div>
                    <?php endforeach ;?>
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="?page="><</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary btn-block m-1" role="button" data-bs-hover-animate="pulse" href="?page=">></a>
                        </div>
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