<?php echo view('includes/header'); ?>

<div class="container" style="margin-top: 40px; ">
    <div class="row">
        <div class="card">
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
                        <tr>
                            <td>1.</td>
                            <td>Ritika</td>
                            <td>ritika45@gmail.com</td>
                            <td>8851734531</td>
                            <td>H.no. 40 near post office, Bazaria, Ghaziabad-201009 </td>
                            <td>
                                <div class="icons  d-flex gap-2">
                                    <div class="edit"><i class="fas fa-edit"></i></div>
                                    <div class="delete"><i class="fa-solid fa-trash"></i></div>
                                </div>
                            </td>
                        </tr>

                    </thead>
                    <tbody>


                    </tbody>
                </table>
            </div>
            <div class="mb-3">

            </div>
        </div>
    </div>
</div>


<?php echo view('includes/footer'); ?>