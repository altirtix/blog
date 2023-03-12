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
                        <a class="btn btn-success btn-block m-1" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/excel">Export</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section data-aos="zoom-out" style="text-align: center;">
        <h1 class="bg-light" style="padding: 25px;">Read mails</h1>
        <div class="container">
            <div class="row-1 justify-content-center align-items-start">
                <div class="col">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>Email</th>
                            <th>Active</th>
                            <th>Date</th>
                        </tr>
                        <?php foreach ($data['mails'] as $table) : ?>
                        <tr>
                            <td><?php echo $table->m_email;?></td>
                            <td><?php echo $table->m_active;?></td>
                            <td><?php echo $table->m_date;?></td>
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