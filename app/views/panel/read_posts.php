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
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="fas fa-database" style="padding: 25px;font-size: 100px;"></i></div>
                </div>
                <div class="col">
                    <div style="padding-top: 50px;padding-bottom: 50px;">
                        <h1>Data set<br></h1>
                        <p>your data</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section data-aos="zoom-out" style="text-align: center;">
        <h1 class="bg-light" style="padding: 25px;">Read posts</h1>
        <div class="container">
            <div class="row-1 justify-content-center align-items-start">
                <div class="col">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Desc</th>
                            <th>Img</th>
                            <th>Category</th>
                            <th>Type</th>
                            <th>User</th>
                            <th>Text</th>
                            <th>Resource</th>
                            <th>Tags</th>
                            <th>Active</th>
                            <th>Date</th>
                        </tr>
                        <?php foreach ($data['posts'] as $table) : ?>
                        <tr>
                            <td><?php echo $table->p_name;?></td>
                            <td><?php echo $table->p_desc;?></td>
                            <td><?php echo $table->p_img;?></td>
                            <td><?php echo $table->c_name;?></td>
                            <td><?php echo $table->t_name;?></td>
                            <td><?php echo $table->u_login;?></td>
                            <td><?php echo $table->p_text;?></td>
                            <td><?php echo $table->p_resource;?></td>
                            <td><?php echo $table->p_tags;?></td>
                            <td><?php echo $table->p_active;?></td>
                            <td><?php echo $table->p_date;?></td>
                        </tr>
                        <?php endforeach ;?>
                    </table>
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