<?php
require_once("lib/classes.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Train Now, Pay Later! | Jax Dog Trainers &mdash; Bold City K9</title>
        <?php require_once('inc/comlink.php'); ?>

</head>

<body>


    <header class="header-part position-inherit">
        <div class="container">

            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img src="img/BOLD+CITY+K9-logo-white.png" alt="none" class="img-fluid"></a>
                    <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <span class="icon"><i class="fa-solid fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">ABOUT</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="board-train.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    + Training Programs
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="board-train.php">BOARD AND TRAIN</a></li>
                                    <li><a class="dropdown-item" href="private_lessons.php">PRIVATE LESSONS</a></li>
                                    <li><a class="dropdown-item" href="virtual_consulting.php">VIRTUAL CONSULTING</a></li>
                                    <li><a class="dropdown-item" href="careers.php">CAREERS</a></li>
                                    <li><a class="dropdown-item" href="online_programs.php">ONLINE PROGRAMS</a></li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="freetrainingtips.php">FREE TRAINING TIPS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="financing.php">TRAIN NOW, PAY LATER!</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link web-btn2" href="contact.php">CONTACT</a>
                            </li>

                        </ul>

                    </div>




                </div>
            </nav>
        </div>

        <div class="offcanvas offcanvas-end bg-dark text-white navbar-sidebar" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel"><img src="img/BOLD+CITY+K9-logo-white.png" alt="none" class="img-fluid"></h5>
                <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">ABOUT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="board-train.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            + Training Programs
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="board-train.php">BOARD AND TRAIN</a></li>
                            <li><a class="dropdown-item" href="private_lessons.php">PRIVATE LESSONS</a></li>
                            <li><a class="dropdown-item" href="virtual_consulting.php">VIRTUAL CONSULTING</a></li>
                            <li><a class="dropdown-item" href="careers.php">CAREERS</a></li>
                            <li><a class="dropdown-item" href="online_programs.php">ONLINE PROGRAMS</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="freetrainingtips.php">FREE TRAINING TIPS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="financing.php">TRAIN NOW, PAY LATER!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link web-btn2" href="contact.php">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>



    </header>


    <section class="trainingtips-part comm_padd mt-5 mb-5">
        <div class="container">
            <div class="content-box">
                <div class="row">

                    <?php
                                
                                    $api_url = 'https://theketomatrix.com/test/tipslist.php';
                                    $data = file_get_contents($api_url);  
                                    $data = json_decode($data, true);  
                                    foreach($data as $row)  

                                    {  
                       
                                ?>
                    <div class="col-12">
                        <div class="box">

                            <h5> <a href="freetrainingtipsdetails.php?id=<?php echo $row['randomid']; ?>"><?php echo $row['date']; ?> </a></h5>


                            <h3> <a href="freetrainingtipsdetails.php?id=<?php echo $row['randomid']; ?>"><?php echo $row['title']; ?> </a></h3>
                            <h5> <a href="freetrainingtipsdetails.php?id=<?php echo $row['randomid']; ?>"><?php echo $row['title']; ?> </a></h5>

                            <p><?php echo limit_words($row['para'],80); ?>.....</p>
                            <div class="btn-box">
                                <a href="freetrainingtipsdetails.php?id=<?php echo $row['randomid']; ?>" class="web-link1">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>









                </div>
            </div>
        </div>
    </section>
    <?php require_once('inc/footer.php'); ?>
</body>

</html>
