<!DOCTYPE html>
<html>

<head>
    <?php require APPROOT . '/views/inc/meta.php'; ?>
    <?php require APPROOT . '/views/inc/stylesheet.php'; ?>
</head>

<body>
    <?php require APPROOT . '/views/inc/marquee.php'; ?>
    <?php require APPROOT . '/views/inc/navbar.php'; ?>

    <div data-aos="zoom-out" class="parallax">
        <div class="container d-flex justify-content-center align-items-center parallax-content" style="height:100vh;">
            <div class="col-12 col-md-10 col-lg-8 text-center d-flex justify-content-center flex-column"><i class="fas fa-users" style="font-size: 100px;padding: 25px;color: rgb(255,255,255);"></i>
                <h1>Our Space<br></h1>
                <p><strong>Arturs Blog</strong> -&nbsp;it is a service where i can share my info.<br></p>
                <div class="row">
                    <div class="col d-flex justify-content-end"><a class="btn btn-primary" role="button" data-bs-hover-animate="pulse" href="authUser.html">Sign Up</a></div>
                    <div class="col d-flex justify-content-start"><a class="btn btn-primary" role="button" data-bs-hover-animate="pulse" href="authUser.html">Sign In</a></div>
                </div>
            </div>
        </div>
        <video class="parallax-background" autoplay="" loop="" muted=""><source src="https://storage.coverr.co/videos/e9LWGhmirgHd3dIxzFnra4beQV02gb01aX?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhcHBJZCI6Ijg3NjdFMzIzRjlGQzEzN0E4QTAyIiwiaWF0IjoxNjIyNTA2NTAwfQ.Ec9a6XNOmjpZ4EMbJfNLDSnxkuFGj27xts2SLKqREPQ" type="video/mp4" wp-acf="[{'type':'url','name':'video','label':'Video','wrapper':{'width':25}},{'type':'text','name':'video_css','label':'Video CSS (eg. filters)','wrapper':{'width':25}}]" wp-attr="[{'target':'src','replace':'%1'},{'target':'parent_style','replace':'%2'}]"></video>
        <div
            class="parallax-placeholder" style="background-image:url(&quot;<?php echo URLROOT; ?>/img/placeholder.jpg&quot;);">
        </div>
    </div>
    <?php require APPROOT . '/views/inc/slider.php'; ?>
    <section data-aos="zoom-out" style="text-align: center;">
        <h1 class="bg-light" style="padding: 25px;">Our advantages<br></h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="fas fa-users" style="font-size: 50px;padding: 25px;color: rgb(149,165,166)"></i>
                        <h2>Mass<br></h2>
                        <p>many people can visit your post<br></p>
                    </div>
                </div>
                <div class="col">
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="far fa-money-bill-alt" style="font-size: 50px;padding: 25px;color: rgb(149,165,166)"></i>
                        <h2>Free<br></h2>
                        <p>no need to pay money for use<br></p>
                    </div>
                </div>
                <div class="col">
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="fas fa-user-edit" style="font-size: 50px;padding: 25px;color: rgb(149,165,166)"></i>
                        <h2>Freedom<br></h2>
                        <p>freely express yours thoughts<br></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="far fa-file" style="font-size: 50px;padding: 25px;color: rgb(149,165,166)"></i>
                        <h2>Simplicity<br></h2>
                        <p>clear and well-thought-out graphical interface<br></p>
                    </div>
                </div>
                <div class="col">
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="fas fa-mobile-alt" style="font-size: 50px;padding: 25px;color: rgb(149,165,166)"></i>
                        <h2>Mobility<br></h2>
                        <p>the web system adapts to your screen size<br></p>
                    </div>
                </div>
                <div class="col">
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="fas fa-upload" style="font-size: 50px;padding: 25px;color: rgb(149,165,166)"></i>
                        <h2>Evolution<br></h2>
                        <p>the service is constantly evolving<br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-aos="zoom-out" style="text-align: center;">
        <h1 class="bg-light" style="padding: 25px;">Questions?<br></h1>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col">
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="fas fa-question" style="font-size: 100px;padding: 25px;color: rgb(149,165,166)"></i></div>
                </div>
                <div class="col">
                    <div style="padding-top: 50px;padding-bottom: 50px;">
                        <h2>Go to the help page<br></h2>
                        <p>this page contains additional information<br></p><a class="btn btn-primary" role="button" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/help">Go<br></a></div>
                </div>
            </div>
        </div>
    </section>
    <section data-aos="zoom-out" style="text-align: center;">
        <h1 class="bg-light" style="padding: 25px;">Get started now<br></h1>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col">
                    <div style="padding-top: 50px;padding-bottom: 50px;">
                        <h2>Sign up and start impovement your knowledges<br></h2>
                        <p>read the rules before sign up<br></p><a class="btn btn-primary" role="button" data-bs-hover-animate="pulse" href="authUser.html">Sign Up</a></div>
                </div>
                <div class="col">
                    <div data-bs-hover-animate="pulse" style="padding-top: 50px;padding-bottom: 50px;"><i class="fas fa-users" style="font-size: 100px;padding: 25px;color: rgb(149,165,166)"></i></div>
                </div>
            </div>
        </div>
    </section>
    <?php require APPROOT . '/views/inc/navbuttons.php'; ?>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
    <?php require APPROOT . '/views/inc/scripts.php'; ?>
</body>

</html>