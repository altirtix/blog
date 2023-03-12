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
        <h1 class="bg-light" style="padding: 25px;">Create post</h1>
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col">
                    <form method="post" action="<?php echo URLROOT ;?>/panel/create_post" enctype="multipart/form-data">
                            <div class="form-group"><input class="form-control" type="text" data-bs-hover-animate="pulse" name="name" placeholder="Your post name"></div>
                            <div class="form-group"><textarea class="form-control" data-bs-hover-animate="pulse" name="desc" cols="1" rows="2" placeholder="Your description" required=""></textarea></div>
                            <div class="form-group"><p>Category</p></div>
                            <div class="form-group">
                                <select class="custom-select" data-bs-hover-animate="pulse" name="category" required="">
                                    <?php foreach ($data['categories'] as $table) : ?>
                                        <option value="<?php echo $table->c_id;?>"><?php echo $table->c_name;?></option>
                                    <?php endforeach ;?>
                                </select>
                            </div>
                            <div class="form-group"><p>Type</p></div>
                            <div class="form-group">
                                <select class="custom-select" data-bs-hover-animate="pulse" name="type" required="">
                                    <?php foreach ($data['types'] as $table) : ?>
                                        <option value="<?php echo $table->t_id;?>"><?php echo $table->t_name;?></option>
                                    <?php endforeach ;?>
                                </select>
                            </div>
                            <div class="form-group"><p>Image</p></div>
                            <div class="form-group"><input type="file" name="fileToUpload" id="fileToUpload" data-bs-hover-animate="pulse"></div>
                            <div class="form-group"><textarea class="form-control" data-bs-hover-animate="pulse" name="text" cols="1" rows="10" placeholder="Your text" required=""></textarea></div>
                            <div class="form-group"><input class="form-control" type="text" data-bs-hover-animate="pulse" name="resource" placeholder="Your resource link"></div>
                            <div class="form-group"><input class="form-control" type="text" data-bs-hover-animate="pulse" name="tags" placeholder="Your tags"></div>
                            <div class="form-group"><button class="btn btn-primary btn-block" data-bs-hover-animate="pulse" type="submit">Create</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require APPROOT . '/views/inc/navbuttons.php'; ?>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
    <?php require APPROOT . '/views/inc/scripts.php'; ?>