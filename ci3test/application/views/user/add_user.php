<?php $this->load->view('includes/header');?>
    <div class="container" style="margin-top: 40px; ">
        <div class="row">
            <div class="card" >
                    <div class="card-body">
                        <div class="heading">
                            <h5 class="card-title text-center">
                          Add User </h5></div>
                               
                    
                            <form action="<?php echo base_url();?>user/add" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username here...">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email here...">
                                </div>
                                <div class="mb-3">
                                    <label for="mobile" class="form-label">Mobile</label>
                                    <input type="text" class="form-control" maxlength="10" id="mobile" name="mobile" placeholder="Enter mobile number here...">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address here...">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary float-end"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit </button>
                                </div>                               
                            </form>
                            
                    </div>
                                <div class="mb-3">
                                <?php
                                     if($this->session->flashdata('success')) { ?>
                                         <div class="alert alert-success" role="alert">
                                                User added successfully!!
                                        </div>
                                     <?php }
                                ?>

                                <?php
                                    if($this->session->flashdata('error')) { ?>
                                        <div class="alert alert-danger" role="alert">
                                                Failed!!
                                        </div>
                                    <?php }
                                ?>
                                </div>
            </div>
        </div>
   </div>
    <?php $this->load->view('includes/footer');?>
    