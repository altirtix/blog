    <div>
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-md" style="background: rgba(255,255,255,0.7);">
                <div class="container-fluid">
                    <a class="navbar-brand text-center" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/home">
                        <div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col"><i class="fas fa-blog" style="font-size: 40px;"></i></div>
                                <div class="col">
                                    <h1>Arturs Blog</h1>
                                </div>
                            </div>
                        </div>
                    </a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" data-bs-hover-animate="pulse"><a class="nav-link" href="<?php echo URLROOT; ?>/home"><i class="fas fa-home"></i>&nbsp;Home</a></li>
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" data-bs-hover-animate="pulse" href="#"><i class="fas fa-users"></i>&nbsp;Join Us</a>
                                <div class="dropdown-menu swing animated"><a class="dropdown-item" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/auth/sign_in"><i class="fas fa-user-check"></i>&nbsp;Sign In</a>
                                    <hr style="margin: 0px;"><a class="dropdown-item" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/auth/sign_up"><i class="fas fa-user-plus"></i>&nbsp;Sign Up</a></div>
                            </li>
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" data-bs-hover-animate="pulse" href="#"><i class="fas fa-compass"></i>&nbsp;Main Explore</a>
                                <div class="dropdown-menu swing animated"><a class="dropdown-item" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/posts/read_posts"><i class="fas fa-align-justify"></i>&nbsp;Updates</a>
                                    <hr style="margin: 0px;"><a class="dropdown-item" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/posts/read_posts"><i class="fas fa-newspaper"></i>&nbsp;Articles</a><a class="dropdown-item" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/posts/?type=Tutorial"><i class="fas fa-brain"></i>&nbsp;Tutorials</a>
                                    <a
                                        class="dropdown-item" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/posts/read_posts"><i class="far fa-file-archive"></i>&nbsp;Projects</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" data-bs-hover-animate="pulse" href="#"><i class="fas fa-compass"></i>&nbsp;Additional Explore</a>
                                <div class="dropdown-menu swing animated"><a class="dropdown-item" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/help"><i class="fas fa-question"></i>&nbsp;Help</a>
                                <a class="dropdown-item" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/rate"><i class="fas fa-star-half-alt"></i>&nbsp;Marks</a>
                                <a class="dropdown-item" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/sub"><i class="fas fa-at"></i>&nbsp;Subscription</a>
                                <a class="dropdown-item" data-bs-hover-animate="pulse" href="<?php echo URLROOT; ?>/contact"><i class="fas fa-envelope-open-text"></i>&nbsp;Feedback</a></div>
                            </li>
                            <li class="nav-item" data-bs-hover-animate="pulse"></li>
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" data-bs-hover-animate="pulse" href="#">Search on page<br></a>
                                <div class="dropdown-menu swing animated text-center">
                                    <form name="f1" id="f1" action="" style="padding: 20px;">
                                        <div class="form-group"><h style="padding: 25px; font-size: 50px; color: rgb(149,165,166)"><i class="fas fa-search"></i>&nbsp;</h></div>
                                        <div class="form-group"><input type="search" name="t1" class="form-control t1" placeholder="Search querry" data-bs-hover-animate="pulse" /></div>
                                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" data-bs-hover-animate="pulse">Find</button></div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>