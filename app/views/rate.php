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
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="fas fa-star-half-alt" style="padding: 25px;font-size: 100px;"></i></div>
                </div>
                <div class="col">
                    <div style="padding-top: 50px;padding-bottom: 50px;">
                        <h1>Ratings<br></h1>
                        <p>set mark for our service<br></p>
                        <p>like marks <?php echo $data['a_marks']->	f_marks_count?></p>
                        <p>dislike marks <?php echo $data['d_marks']->	f_marks_count?></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section data-aos="zoom-out" style="text-align: center;">
        <h1 class="bg-light" style="padding: 25px;">Set mark</h1>
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col">
                    <form method="post" action="<?php echo URLROOT ;?>/rate">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="state" value="true" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Like
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="state" value="false" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                        Dislike
                        </label>
                    </div>
                        <div class="form-group"><button class="btn btn-primary btn-block" data-bs-hover-animate="pulse" type="submit">Send</button></div>
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