<?php $this->load->view('includes/header');?>
    <div class="container" style="margin-top: 40px; ">
        <div class="row">
            <div class="card" >
                    <div class="card-body">                               
                        <div class="heading-div">
                            <h5 class="card-title text-center">Delete User</h5>
                        </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SNo.</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Mobile No.</th>
                                        <th>Address</th>
                                        <th>Options</th>
                                    </tr>

                                </thead>
                                
                            </table>
                    </div>
                        <div class="mb-3">
                                <?php
                                     if($this->session->flashdata('success')) { ?>
                                         <div class="alert alert-success" role="alert">
                                                successfully deleted user!!
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
    