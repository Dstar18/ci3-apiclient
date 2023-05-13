<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partials/head.php');?>
    </head>
    <body>
        
        <div class="container p-3 my-3 border">
            <section class="content">
                <a href="#" class="btn btn-sm" title="Log out">
                    <i class="nav-icon fa fa-sign-out-alt"></i> Log Out
                </a> 
            </section>
            <div class="tab-content my-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-proposal" role="tabpanel" aria-labelledby="nav-proposal-tab">
                    <section class="content">
                        <div class="card">
                            <!-- Navbar Content -->
                            <div class="card-header">
                                <p class="card-title font-weight-bold">View User</p>
                                <div class="card-tools">
                                    <a href="<?= base_url('user/lists/')?>" class="btn btn-sm btn-primary" title="Back to home">
                                    <!-- <a href="#" class="btn btn-sm btn-primary" title="Add user"> -->
                                        <i class="fas fa-home"></i>
                                    </a>
                                </div>
                                
                            </div>
                            <!-- /Navbar Content -->
                            <!-- Page Content -->
                            <div class="card-body">
                                <div class="card bg-light d-flex flex-fill">
                                    <div class="card-body">
                                        <div class="tab-content p-0">
                                            <div class="row">
                                            <?php
                                            if(isset($user['error'])){ ?>
                                                <div class="error-page">
                                                    <h4 class="headline text-warning"> 404</h4>
                                                    <div class="error-content">
                                                        <h5><i class="fas fa-exclamation-triangle text-warning"></i> Oops! <?=$user['error']?></h5>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="col-7">
                                                    <h5 class="lead"><b><?=$user['firstname']?> <?=$user['lastname']?></b></h5>
                                                    <p class="text-muted text-sm"><b><?=$user['nip']?></b></p>
                                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                                        <li class="small">Role          : <?=$user['role']?></li>
                                                        <li class="small">E-mail        : <?=$user['email']?></li>
                                                        <li class="small">Created_at    : <?=$user['created_at']?></li>
                                                        <li class="small">Update_at     : <?=$user['update_at']?></li>
                                                        <li class="small">Session_at    : <?=$user['session_at']?></li>
                                                    </ul>
                                                </div>
                                                <div class="col-5 text-right">
                                                    <img src="<?= base_url('assets/dist/img/avatar4.png')?>" alt="user-avatar" class="img-circle img-fluid" style="width:125px">
                                                </div>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Page Content -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <?php $this->load->view('_partials/js.php');?>
        <!-- Modal -->
        </body>
</html>