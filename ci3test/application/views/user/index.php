<?php $this->load->view('includes/header');?>
    <div class="container" style="margin-top: 40px; ">
        <div class="row">
            <div class="card"  >
                    <div class="card-body">                               
                        <div class="heading-div">
                            <h5 class="card-title text-center">Users List</h5>
                        </div>
                            <table class="table table-bordered" style="max-width:100%;">
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
                                <tbody>
                                     <?php $i=1; foreach($users as $row){ ?>
                                    <tr>
                                        <td><?= $i++?></td>
                                        <td><?= $row['username']?></td>
                                        <td><?= $row['email']?></td>
                                        <td><?= $row['mobile']?></td>
                                        <td><?= $row['address']?></td>
                                        <td>
                                            <a href="<?=base_url()?>user/edit/<?= $row['id']?>" class="btn btn-sm btn-primary"><i class="fa-solid fa-user-plus"></i></a>
                                            <a href="<?=base_url()?>user/delete/<?= $row['id']?>" onclick="return confirm('Are you sure want to delete this user?')" class="btn btn-sm btn-danger"><i class="fa-solid fa-user-minus"></i></a>
                                           
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                    </div>
                        <div class="mb-3">
                                <?php
                                     if($this->session->flashdata('success')) { ?>
                                         <div class="alert alert-success" role="alert">
                                                Added user successfully !!
                                        </div>
                                     <?php }
                                ?>
                                <?php
                                     if($this->session->flashdata('deleted')) { ?>
                                         <div class="alert alert-success" role="alert">
                                                Deleted user successfully !!
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
    