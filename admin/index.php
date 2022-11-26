<?php
require_once("./../lib/classes.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="./../css/main.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>

</head>

<body>
    <?php require_once('./../inc/header.php'); ?>

    <section class="add_blog-part">
        <div class="container">
            <div class="card">
                <div class="card-header w-100">
                    <h3 class="card-title">Training Tips Add</h3>

                    <a  href="./../index.php" class="btn btn-info text-white float-right ">Home</a>
                </div>
                <div class="card-body">

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Training Tips
                    </button>

                    <div class="modal fade" id="exampleModal" tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" class="row" id="trainingtipsadd">

                                        <div class="form-group mb-3">
                                            <label class="mb-2" htmlFor="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="mb-2" htmlFor="title">Sub Title</label>
                                            <input type="text" class="form-control" id="sub_title" name="sub_title" />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="mb-2" htmlFor="date">Date</label>
                                            <input type="date" class="form-control" id="date" name="date" />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="mb-2" htmlFor="text">Text</label>
                                            <textarea name="para" id="editor"></textarea>

                                        </div>

                                        <input type="hidden" name="action" value="trainingtips_insert" />
                                        <button type="submit" class="btn btn-success">Create</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="mt-3" id="show_blog-box">

                        <div class="table-responsive">
                            <div class="row">

                                <?php
                                
                                    $api_url = 'https://theketomatrix.com/test/tipslist.php';
                                    $data = file_get_contents($api_url);  
                                    $data = json_decode($data, true);  
                                    foreach($data as $row)  

                                    {  
                       
                                ?>
                                <div class="col-12" key={post.id}>
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="card-header">No</div>
                                                <div class="card-body"><?php echo $row['id']; ?></div>
                                            </div>
                                            <div class="col-2">
                                                <div class="card-header">Tttle</div>
                                                <div class="card-body"><?php echo $row['title']; ?></div>
                                            </div>
                                            <div class="col-7">
                                                <div class="card-header">Details</div>
                                                <div class="card-body">
                                                    <span><?php echo $row['subtitle']; ?></span>
                                                    <span><?php echo $row['para']; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="card-header">Action</div>
                                                <div class="card-body"><a href="edit.php?id=<?php echo $row['id']; ?>" class="text-success">Edit</a> | <a class="text-danger delete-btn" href="?id=">Delete</a></div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <?php
                           }  
                                ?>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php require_once('./../inc/footer.php'); ?>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

    </script>
    <script>
        $(document).ready(function() {

            $("#trainingtipsadd").on('submit', function(e) {
                e.preventDefault();


                $.ajax({
                    url: 'https://theketomatrix.com/test/index.php',
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        $("#trainingtipsadd")[0].reset();
                        swal("Thank you!", "A Member of Our Team Will Be in Touch Within 24 Business Hours.", "success");


                    }

                });
            })
        })

    </script>
</body>

</html>
