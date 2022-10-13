<form action="" method="post">
    <div class="row justify-content-center">
        <div id="error1"><?= $_POST['error']; ?></div>
        <div class="col-md-10">
            <div class="card-header text-center">Login</div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group pb-2">
                        <input class="form-control" type="email" name="email" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group pb-2">
                        <input class="form-control" type="password" name="password" placeholder="Enter Your Password">
                    </div>
                    <input class="px-3 py-1 bg-primary border border-white rounded-pill text-white" name="submit" type="submit">
                    <div class="form-group pb-2">
                    </div>
                </div>
            </div>
        </div>
</form>