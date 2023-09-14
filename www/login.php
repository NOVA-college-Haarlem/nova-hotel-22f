<?php include 'header.php';

?>

<!-- Newsletter Start -->
<div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="row justify-content-center">
        <div class="col-lg-10 p-1">
            <div class="rounded text-center p-1">
                <div class="bg-white rounded text-center p-5">
                    <h4 class="mb-4">Login <span class="text-primary text-uppercase">here</span></h4>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <form action="process_login.php" method="post">
                            <input class="form-control w-100 py-3 ps-4 pe-5" type="email" placeholder="Enter your email" name="email" required>
                            <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your password" name="password" required>
                            <button type="submit" class="btn btn-primary py-2 px-3  mt-2 me-2">Login!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Start -->