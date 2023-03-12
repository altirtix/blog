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
        <h1 class="bg-light" style="padding: 25px;">Read feedback</h1>
        <div class="container">
            <div class="row-1 justify-content-center align-items-start">
                <div class="col">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                        <?php foreach ($data['feedback'] as $table) : ?>
                        <tr>
                            <td><?php echo $table->f_name;?></td>
                            <td><?php echo $table->f_email;?></td>
                            <td><?php echo $table->f_message;?></td>
                            <td><?php echo $table->f_date;?></td>
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