<!doctype html>
<html lang="en">

<head>
    <title>Bootstrap 5</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">BootCamp</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="collapsibleNavId">
                    <ul class="navbar-nav  mt-2 mt-lg-0 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#learn" aria-current="page">What You'll Learn <span
                                    class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#questions">Questions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#instructors">Instructors</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- ShowCase -->
        <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
            <div class="container">
                <div class='d-sm-flex align-items-center justify-content-between mt-5'>
                    <div>
                        <h1>Become A <span class="text-warning">Web Developer</span></h1>
                        <p class="lead my-4">
                            We fucus on teaching our students the Fundamentals of web development and latest
                            technologies to prepare the to the the first web Job
                        </p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#enroll">Start the Enrollment</button>
                    </div>
                    <img src="img/programming1.svg" class="img-fluid rounded-top  d-none d-sm-block" style="width: 45%;"
                        alt="">
                </div>
            </div>
        </section>
        <!-- NewsLetter -->
        <section class="bg-primary text-light p-4">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <h3>Sign In For Out Newsletter</h3>
                    <div class="input-group w-50">
                        <input type="email" class="form-control " placeholder="Enter Email">
                        <button class="btn btn-dark btn-lg" type="button" id="">Button</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Grid Boxes -->
        <section class="p-5">
            <div class="container">
                <div class="row text-center g-3">
                    <div class="col-md-4 col-lg-4">
                        <div class="card bg-dark text-light">
                            <div class="card-body">
                                <div class="h1"><i class="bi bi-laptop"></i></div>

                                <h3 class="card-title">Virtual</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim iure
                                    sequi optio magnam illum reprehenderit ipsam pariatur ab. Assumenda odit quia
                                    similique. Dolorem eaque iure mollitia cum, provident consectetur natus.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="card bg-secondry text-dark">
                            <div class="card-body">
                                <div class="h1"><i class="bi bi-person-square"></i></div>

                                <h3 class="card-title">Hybird</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim iure
                                    sequi optio magnam illum reprehenderit ipsam pariatur ab. Assumenda odit quia
                                    similique. Dolorem eaque iure mollitia cum, provident consectetur natus.</p>
                                <a href="#" class="btn btn-light">Read More</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="card bg-dark text-light">
                            <div class="card-body">
                                <div class="h1"><i class="bi bi-people"></i></div>
                                <h3 class="card-title">In Person</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim iure
                                    sequi optio magnam illum reprehenderit ipsam pariatur ab. Assumenda odit quia
                                    similique. Dolorem eaque iure mollitia cum, provident consectetur natus.</p>
                                <a href="#" class="btn btn-primary">Read More</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Courses Fundamentals-->
        <section class="p-5" id="learn">
            <div class="container">
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-md pe-5">
                        <img src="img/fund.svg" class="img-fluid rounded-top" alt="">
                    </div>
                    <div class="col-md">
                        <h3 class="pb-3">Learn Fundamentals</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda vitae earum eius aliquam
                            fugiat delectus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda vitae earum eius aliquam
                            fugiat delectus.</p>
                        <a href="" class="btn btn-primary mt-3">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Courses React -->
        <section class="p-5 bg-dark text-light">
            <div class="container">
                <div class="row justify-content-center align-items-center g-2 ">
                    <div class="col-md pe-5">
                        <img src="img/react.svg" class="img-fluid rounded-top" alt="">
                    </div>
                    <div class="col-md">
                        <h3 class="pb-3">Learn React</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda vitae earum eius aliquam
                            fugiat delectus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda vitae earum eius aliquam
                            fugiat delectus.</p>
                        <a href="" class="btn btn-light mt-3">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Questions -->
        <section class="p-4" id="questions">
            <div class="container">
                <div class="text-center">
                    <h3 class="m-5">Frequently Asked Questions</h3>
                    <div class="accordion accordion-flush" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Where Exactly are you located ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit numquam dolorum
                                    commodi quo rem ipsa tempore, minima suscipit quis voluptate et qui quidem
                                    necessitatibus atque magni praesentium harum possimus repudiandae.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    How Much does it cost to attend ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia nam praesentium
                                    hic quis? Officia rem praesentium, molestias exercitationem doloribus asperiores
                                    voluptates voluptas ut voluptatum suscipit reprehenderit dolor ipsum sequi illum!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    What do you need to know ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, quam odio. Rem
                                    accusantium, animi possimus suscipit quae porro quos! Rem facilis temporibus nisi
                                    autem voluptates nam dignissimos quisquam ea laudantium.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="headingFour">
                                    Will you help me fing a job ?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi eveniet error qui
                                    provident, eaque voluptate exercitationem earum, at, commodi corporis totam corrupti
                                    quidem aliquid non dignissimos voluptates magnam quo obcaecati.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    How do i sign up ?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse " aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sunt temporibus
                                    ipsa atque distinctio. Distinctio consequuntur numquam voluptates alias
                                    exercitationem fuga dolorem. Tenetur numquam illo repellat itaque, molestias id
                                    quam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Instructors -->
        <section id="instructors" class="text-center text-light bg-primary p-5">
            <div class="container">
                <div>
                    <h3>Our Instructors</h3>
                    <p class="lead">Our Instructors all have 5+ years of experience working as web developers in the
                        industry</p>
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-md-6 col-lg-3 text-center">
                            <div class="card text-dark bg-light text-center">
                                <div class="card-body">
                                    <img class="rounded-circle mb-3 w-50 text-center"
                                        src="https://randomuser.me/api/portraits/women/14.jpg" alt="Title">
                                    <h4 class="card-title">Sara Stark</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                        nobis facilis enim provident ratione recusandae exercitationem corporis ullam,
                                        iusto eligendi autem excepturi consequuntur commodi quo atque aliquid assumenda
                                        amet? A!</p>
                                    <p>
                                        <i class="bi bi-twitter"></i>
                                        <i class="bi bi-facebook"></i>
                                        <i class="bi bi-linkedin"></i>
                                        <i class="bi bi-instagram"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center">
                            <div class="card text-dark bg-light text-center">
                                <div class="card-body">
                                    <img class="rounded-circle mb-3 w-50 text-center"
                                        src="https://randomuser.me/api/portraits/men/11.jpg" alt="Title">
                                    <h4 class="card-title">John Done</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                        nobis facilis enim provident ratione recusandae exercitationem corporis ullam,
                                        iusto eligendi autem excepturi consequuntur commodi quo atque aliquid assumenda
                                        amet? A!</p>
                                    <p>
                                        <i class="bi bi-twitter"></i>
                                        <i class="bi bi-facebook"></i>
                                        <i class="bi bi-linkedin"></i>
                                        <i class="bi bi-instagram"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center">
                            <div class="card text-dark bg-light text-center">
                                <div class="card-body">
                                    <img class="rounded-circle mb-3 w-50 text-center"
                                        src="https://randomuser.me/api/portraits/women/11.jpg" alt="Title">
                                    <h4 class="card-title">Yasmmin Done</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                        nobis facilis enim provident ratione recusandae exercitationem corporis ullam,
                                        iusto eligendi autem excepturi consequuntur commodi quo atque aliquid assumenda
                                        amet? A!</p>
                                    <p>
                                        <i class="bi bi-twitter"></i>
                                        <i class="bi bi-facebook"></i>
                                        <i class="bi bi-linkedin"></i>
                                        <i class="bi bi-instagram"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center">
                            <div class="card text-dark bg-light text-center">
                                <div class="card-body">
                                    <img class="rounded-circle mb-3 w-50 text-center"
                                        src="https://randomuser.me/api/portraits/men/15.jpg" alt="Title">
                                    <h4 class="card-title">Nithan Stark</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                        nobis facilis enim provident ratione recusandae exercitationem corporis ullam,
                                        iusto eligendi autem excepturi consequuntur commodi quo atque aliquid assumenda
                                        amet? A!</p>
                                    <p>
                                        <i class="bi bi-twitter"></i>
                                        <i class="bi bi-facebook"></i>
                                        <i class="bi bi-linkedin"></i>
                                        <i class="bi bi-instagram"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Contact Us -->
        <section class="p-5">
            <div class="container">
                <div>
                    <!-- Some borders are removed -->
                    <h2 class="text-center mb-5">Contact Us</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="fw-bold">Main Location:</span> 50 Main st Bosten MA
                        </li>
                        <li class="list-group-item"><span class="fw-bold">Enrollment Phone:</span> (555) 555-555
                        </li>
                        <li class="list-group-item"><span class="fw-bold">Student Phone:</span> (333) 333-333
                        </li>
                        <li class="list-group-item"><span class="fw-bold">Enrollment Email:</span> enroll@gmail.com
                        </li>
                        <li class="list-group-item"><span class="fw-bold">Student Email:</span> mohammedfathi@gmail.com
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-dark text-light text-center position-relative p-5 h1">
        <!-- place footer here -->
        <div class="container">
            <div>
                <p class="lead ">
                    Copyright &copy; 2023 To Mohammed Fathy Ali
                </p>
                <a href="#" class="position-absolute bottom-0 end-0 p-5">
                    <i class="bi bi-arrow-up-circle"></i>
                </a>
            </div>
        </div>
    </footer>
    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="enroll" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Enrollment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="lead">Fill out this form and we will get to you soon</p>
                    <form>
                        <div class="mb-3">
                            <label for="" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId"
                                placeholder="abc@mail.com">
                            <small id="emailHelpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional: Place to the bottom of scripts -->
    <script>
    const myModal = new bootstrap.Modal(document.getElementById('enroll'), options)
    </script>
    </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>