    <footer class="text-center bg-primary">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-auto">
                    <nav class="navbar navbar-dark navbar-expand-md" style="padding: 25px;">
                        <div class="container-fluid">
                            <a class="navbar-brand text-center" data-bs-hover-animate="pulse" href="home.php" style="margin: 0px;">
                                <div>
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col"><i class="fas fa-blog" style="font-size: 40px;"></i></div>
                                        <div class="col">
                                            <h1 style="margin: 0px;">Arturs Blog<br></h1>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col">
                    <nav class="navbar navbar-dark navbar-expand-md">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav mx-auto">
                                <li class="nav-item" data-bs-hover-animate="pulse"><a class="nav-link" href="<?php echo URLROOT; ?>/home"><i class="fas fa-home"></i>&nbsp;Home</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col">
                    <nav class="navbar navbar-dark navbar-expand-md">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav mx-auto">
                                <li class="nav-item" data-bs-hover-animate="pulse"><a class="nav-link" href="authUser.php"><i class="fas fa-user-check"></i>&nbsp;Sign In</a>
                                    <hr style="margin: 0px;background: rgb(149,165,166);">
                                </li>
                                <li class="nav-item" data-bs-hover-animate="pulse"><a class="nav-link" href="authUser.php"><i class="fas fa-user-plus"></i>&nbsp;Sign Up</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col">
                    <nav class="navbar navbar-dark navbar-expand-md">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav mx-auto">
                                <li class="nav-item" data-bs-hover-animate="pulse"><a class="nav-link" href="<?php echo URLROOT; ?>/posts/read_posts"><i class="fas fa-align-justify"></i>&nbsp;Updates</a>
                                    <hr style="margin: 0px;background: rgb(149,165,166);">
                                </li>
                                <li class="nav-item" data-bs-hover-animate="pulse"><a class="nav-link" href="<?php echo URLROOT; ?>/posts/read_posts"><i class="fas fa-newspaper"></i>&nbsp;Articles</a></li>
                                <li class="nav-item" data-bs-hover-animate="pulse"><a class="nav-link" href="<?php echo URLROOT; ?>/posts/read_posts"><i class="fas fa-brain"></i>&nbsp;Tutorials</a></li>
                                <li class="nav-item" data-bs-hover-animate="pulse"><a class="nav-link" href="<?php echo URLROOT; ?>/posts/read_posts"><i class="fas fa-file-archive"></i>&nbsp;Projects</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col">
                    <nav class="navbar navbar-dark navbar-expand-md">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav mx-auto">
                                <li class="nav-item" data-bs-hover-animate="pulse"><a class="nav-link" href="<?php echo URLROOT; ?>/help"><i class="fas fa-question"></i>&nbsp;Help</a></li>
                                <li class="nav-item" data-bs-hover-animate="pulse"><a class="nav-link" href="<?php echo URLROOT; ?>/rate"><i class="fas fa-star-half-alt"></i>&nbsp;Marks</a></li>
                                <li class="nav-item" data-bs-hover-animate="pulse"><a class="nav-link" href="<?php echo URLROOT; ?>/sub"><i class="fas fa-at"></i>&nbsp;Subscription</a></li>
                                <li class="nav-item" data-bs-hover-animate="pulse"><a class="nav-link" href="<?php echo URLROOT; ?>/contact"><i class="fas fa-envelope-open-text"></i>&nbsp;Feedback</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col">
                    <nav class="navbar navbar-dark navbar-expand-md">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav mx-auto">
                                <li class="nav-item dropup"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" data-bs-hover-animate="pulse" href="#"><i class="fas fa-search"></i>&nbsp;Search on page<br></a>
                                    <div class="dropdown-menu rubberBand animated text-center">
                                        <form name="f1" id="f1" action="" style="padding: 20px;">
                                            <div class="form-group"><h style="padding: 25px; font-size: 50px; color: rgb(149,165,166)"><i class="fas fa-search"></i>&nbsp;</h></div>
                                            <div class="form-group"><input type="search" name="t1" class="form-control t1" placeholder="Search querry" data-bs-hover-animate="pulse" /></div>
                                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" data-bs-hover-animate="pulse">Find</button></div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col">
                    <p class="text-white-50" style="padding: 25px;margin-bottom: 0px;"><i class="far fa-copyright"></i>&nbsp;Arturs Blog, 2021</p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col">
                    <nav class="navbar navbar-dark navbar-expand-md">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav mx-auto">
                                <li class="nav-item" data-bs-hover-animate="pulse"><a class="nav-link" href="<?php echo URLROOT; ?>/panel/list_of_funcs"><i class="fas fa-users-cog"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </footer>