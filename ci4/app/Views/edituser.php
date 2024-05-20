<?php echo view('includes/header'); ?>

<div class="container" style="margin-top: 40px; ">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="heading">
                    <h5 class="card-title text-center">
                        Update User</h5>
                </div>


                <form action="<?= base_url(); ?>user/edit/<?= $id ?>" method="POST">

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Enter username here..." value="<?= $user->username ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter email here..." value="<?= $user->email ?>">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="text" class="form-control" maxlength="10" id="mobile" name="mobile"
                            placeholder="Enter mobile number here..." value="<?= $user->mobile ?>">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address"
                            placeholder="Enter address here..." value="<?= $user->address ?>">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end"><i class="fa fa-paper-plane"
                                aria-hidden="true"></i> Update </button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>


<?php echo view('includes/footer'); ?>