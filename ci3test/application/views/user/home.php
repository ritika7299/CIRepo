<?php $this->load->view('includes/header');?>
<div class="container d-flex text-center" style="margin-top: 100px; width:50%; height:500%; justify-content: center;">
    <div class="row">
        <div class="card" >
            <div class="card-body">
                <h5 class="card-title text-center ">Welcome to user Home page!!</h5>
            </div>
        </div>
    </div>
</div>

<div class="main-div-class d-flex text-center" style="margin-top: 100px; width:50%; height:500%; justify-content: center;">
    <div class="card d-flex" style="width: 18rem;  margin-top:10px; margin-right:20px;">
        <div class="card-body ">
            <h5 class="card-title">Add user.</h5>
                <a href="<?php echo base_url();?>user/add" class="btn btn-grey">
                    <i class="fa-solid fa-user-plus"></i></a>
        </div>
    </div>

    <div class="card" style="width: 18rem; margin-top:10px; margin-right:20px;">
        <div class="card-body">
            <h5 class="card-title">View list</h5>
                <a href="<?php echo base_url();?>user/index" class="btn btn-grey">
                    <i class="fa-solid fa-eye"></i></a>
        </div>
    </div>

    <div class="card" style="width: 18rem; margin-top:10px; margin-right:20px;">
        <div class="card-body">
            <h5 class="card-title">About</h5>
                <a href="<?php echo base_url();?>user/about" class="btn btn-grey">
                <i class="fa-solid fa-info"></i></a>
        </div>
    </div>
</div>                 

           
<?php $this->load->view('includes/footer');?>
    