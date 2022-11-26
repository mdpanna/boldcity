<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | Jax Dog Trainers &mdash; Bold City K9</title>
     <?php require_once('inc/comlink.php'); ?>

</head>

<body>

    <?php require_once('inc/header.php'); ?>
    <section class="banner-part bg_bannercontact1">
        <div class="bg_overlay">

            <div class="container">
                <div class="content-box">
                    <div class="box">
                        <h5>We’re excited to hear from you!</h5>
                        <h1>GET IN TOUCH</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="contact-part comm_padd">
        <div class="container">

            <div class="title-box">
                <label>For a quote, or to schedule a call with a trainer</label>
                <h3 class="mt-3 mb-5">Please Submit The Application Below!</h3>

                <label class="mb-2">Program information can be found at the following links!</label>
                <div class="link-box">
                    <a href="board-train.php" class="web-link1">Boarding and Training</a>
                    <span>|</span>

                    <a href="#" class="web-link1">Private Lessons</a>
                    <span>|</span>

                    <a href="#" class="web-link1">Virtual Training</a>

                </div>

            </div>
            <div class="content-box w70 m-auto">
                <form action="" method="post" class="row" id="mail1">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="box">
                                <label for="firstName" class="form-label">Owner's Info <span>*</span></label>
                                <input type="text" class="form-control" id="firstName" name="firstName"  required aria-describedby="firstnamehelp" />
                                <div id="firstnamehelp" class="form-text">First Name</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box">
                                <label for="firstName" class="form-label"></label>
                                <input type="text" class="form-control" id="lastName" name="lastName"  required aria-describedby="lastnamehelp" />
                                <div id="lastnamehelp" class="form-text">Last Name</div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="box">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <small id="emailHelp" class="d-block mt-0 mb-2">PLEASE BE SURE THAT YOUR EMAIL IS TYPED CORRECTLY</small>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email"  required aria-describedby="emailHelp" />
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="box">
                                <label for="phonenumber" class="form-label">Phone <span>*</span></label>
                                <div class="row">
                                    <div class="col-3"><input type="text" class="form-control" name="number1"  required id="phonenumber" aria-describedby="phonenumberhelp" maxlength="3" />
                                        <div id="phonenumberhelp" class="form-text">(###)</div>
                                    </div>

                                    <div class="col-3"><input type="text" class="form-control" name="number2"  required id="phonenumber" aria-describedby="phonenumberhelp" maxlength="3" />
                                        <div id="phonenumberhelp" class="form-text">(###)</div>
                                    </div>

                                    <div class="col-3"><input type="text" class="form-control" name="number3"  required id="phonenumber" aria-describedby="phonenumberhelp" maxlength="3" />
                                        <div id="phonenumberhelp" class="form-text">(###)</div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="box">
                                <label for="cityname" class="form-label">Where are you located? <small>*</small></label>
                                <small class="d-block mb-2">City, State</small>
                                <input type="text" class="form-control" id="cityname" name="cityname"  required aria-describedby="lastnamehelp" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box">
                                <label for="doginfo" class="form-label">Dog Info <small>*</small></label>
                                <small class="d-block mb-2">Name/Breed/Age/Sex</small>
                                <input type="text" class="form-control" id="doginfo" name="doginfo"  required aria-describedby="lastnamehelp" />
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="box">
                                <label class="form-label d-block mb-2">Is your dog spayed/neutered? <small>*</small></label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="dogspayed"  id="dogspayedcheckbox1" value="Yes" />
                                    <label class="form-check-label" for="dogspayedcheckbox1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="dogspayed"  id="dogspayedcheckbox2" value="No" />
                                    <label class="form-check-label" for="dogspayedcheckbox2">No</label>
                                </div>


                            </div>
                        </div>

                        <div class="col-12">
                            <div class="box">
                                <label class="form-label d-block mb-2">Is your dog crate trained?
                                    <small>*</small></label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cratetrained"  id="cratetrained1" value="Yes" />
                                    <label class="form-check-label" for="cratetrained1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cratetrained"  id="cratetrained2" value="No" />
                                    <label class="form-check-label" for="cratetrained2">No</label>
                                </div>


                            </div>
                        </div>

                        <div class="col-12">
                            <div class="box">
                                <label class="form-label d-block mb-2">Is your dog social with other dogs?
                                    <small>*</small></label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="dogsocialcheckbox"  id="dogsocialcheckbo1" value="Yes" />
                                    <label class="form-check-label" for="dogsocialcheckbo1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="dogsocialcheckbox"  id="dogsocialcheckbo2" value="No" />
                                    <label class="form-check-label" for="dogsocialcheckbo2">No</label>
                                </div>


                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box">
                                <label class="form-label d-block mb-2">Does your dog have a bite history?
                                    <small>*</small></label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="bitehistorycheckbox"  id="bitehistorycheckbox1" value="Yes" />
                                    <label class="form-check-label" for="bitehistorycheckbox1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="bitehistorycheckbox"  id="bitehistorycheckbox2" value="No" />
                                    <label class="form-check-label" for="bitehistorycheckbox2">No</label>
                                </div>


                            </div>
                        </div>

                        <div class="col-12">
                            <div class="box">
                                <label class="form-label" for="issues_having">What issues are you having? <span>*</span>
                                </label>
                                <textarea class="form-control" name="issues_having"  id="issues_having" rows="3" required></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="box">
                                <label class="form-label" for="goals_training">What are your goals for training? <span>*</span>
                                </label>
                                <textarea class="form-control" name="goals_training"  id="goals_training" rows="3" required></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="box">
                                <label class="form-label" for="dog_previous_training">Has your dog had previous professional training? <span>*</span>
                                </label>
                                <textarea class="form-control" name="dog_previous_training"  id="dog_previous_training" rows="3" required></textarea>
                            </div>
                        </div>




                        <div class="col-12">
                            <div class="box">
                                <label class="form-label">What program are you interested in?
                                    <small>*</small></label>



                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="program_interest1"  value="Immersion Board and Train" id="programinterested_Immersion_Board_and_Train" />
                                    <label class="form-check-label" for="programinterested_Immersion_Board_and_Train">
                                        Immersion Board and Train
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="program_interest2"  value="Private Lessons" id="programinterested_Private_Lessons" />
                                    <label class="form-check-label" for="programinterested_Private_Lessons">
                                        Private Lessons
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="program_interest3"  value="Virtual Training" id="programinterested_Virtual_Training" />
                                    <label class="form-check-label" for="programinterested_Virtual_Training">
                                        Virtual Training
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box">
                                <label class="form-label">Do you agree with our training philosophy?
                                    <small>*</small></label>
                                <small class="d-block mb-2">See "ABOUT" page for information on training methods.</small>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agreephilosophycheckbox"  id="agreephilosophycheckbox1" value="Yes" />
                                    <label class="form-check-label" for="agreephilosophycheckbox1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agreephilosophycheckbox"  id="agreephilosophycheckbox2" value="No" />
                                    <label class="form-check-label" for="agreephilosophycheckbox2">No</label>
                                </div>


                            </div>
                        </div>


                        <div class="col-12">
                            <div class="box">
                                <label class="form-label" for="someone_refer_name">Did someone refer you?</label>
                                <small class="d-block mb-2">Please list their name below!</small>
                                <input class="form-control" name="refer_name"  id="someone_refer_name" required />
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="box">
                                <label class="form-label" for="list_any_questions_or_additional_information">Please list any questions or additional information here</label>
                                <textarea class="form-control" name="list_any_questions_or_additional_information"  required id="list_any_questions_or_additional_information" rows="3"></textarea>
                            </div>
                        </div>



                        <div class="col-4">
                            <div class="mb-3">
                                <input type="hidden" name="action" value="contact_info_send" />
                                <input type="submit" name="submit" value="SUBMIT" class="submit-btn" />
                            </div>
                        </div>

                    </div>

                </form>
                <a href="financing.php" class="web-link1" target="_blank">CLICK HERE FOR INFO ON FINANCING OPTIONS</a>
            </div>
        </div>
    </section>




    <?php require_once('inc/footer.php'); ?>
</body>

</html>
