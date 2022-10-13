<form action="" method="post">
    <div class="row justify-content-center">
        <div id="error1"><?= $_POST['error1']; ?></div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">Registration</div>
                <div class="card-body">
                    <div class="form-group pb-2">
                        <input class="form-control" type="text" name="fst_name" placeholder="Enter Your First Name">
                    </div>
                    <div class="text-danger"><?= $_POST['userNameError']; ?></div>
                    <div class="form-group pb-2">
                        <input class="form-control" type="text" name="lst_name" placeholder="Enter Your Last Name">
                    </div>
                    <div class="form-group pb-2">
                        <input class="form-control" type="tel" name="mobile_number" placeholder="Enter Your Mobile Number">
                    </div>
                    <div class="form-group pb-2">
                        <input class="form-control" type="email" name="email" placeholder="Enter Your Email">
                    </div>
                    <div class="text-danger"><?= $_POST['userEmailError']; ?></div>

                    <div class="form-group pb-2">
                        <input class="form-control" type="password" name="password" placeholder="Enter Your Password">
                    </div>
                    <div class="text-danger"><?= $_POST['userPasswordError']; ?></div>
                    <div class="form-group pb-2">
                        <input class="px-3 py-1 bg-primary border border-white rounded-pill text-white" name="submit_btn" type="submit">
                    </div>
                </div>
            </div>
        </div>
</form>