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
                                <p class="card-title font-weight-bold">Update User</p>
                                <div class="card-tools">
                                    <a href="<?= base_url('user/lists/')?>" class="btn btn-sm btn-primary" title="Back to home">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </div>
                                
                            </div>
                            <!-- /Navbar Content -->
                            <!-- Page Content -->
                            <div class="card-body" style="font-size: 14px">
                                <!--  Message response -->
                                <?php
                                if(isset($message['error'])){ ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="icon fas fa-ban"></i> Error! - <?=$message['error']?></p>
                                    </div>
                                <?php } ?>
                                <?php
                                if(isset($message['result'])){ ?>
                                    <div class="alert alert-info alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="icon fas fa-check"></i> <?=$message['result']?></p>
                                    </div>
                                <?php } ?>
                                <!-- /Message response -->
                                <div class="card bg-light d-flex flex-fill">
                                    <div class="card-body" style="font-size: 14px">
                                        <div class="tab-content p-0">
                                            <form action="<?=base_url('user/update/'.$user['iduser'])?>" method="post" class="form-horizontal">
                                                <input type="hidden" name="iduser" value="<?= form_error('iduser') ? set_value('iduser') : $user['iduser'] ?>" readonly>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Role</label>
                                                    <div class="col-sm-10">
                                                        <select name="role_id" id="idrole" class="custom-select form-control" style="font-size: 14px">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="1" <?= form_error('role_id') ? set_value('role_id') == '1' : $user['role_id'] == '1' ? 'selected' : ''?> >Admin</option>
                                                            <option value="2" <?= form_error('role_id') ? set_value('role_id') == '2' : $user['role_id'] == '2' ? 'selected' : ''?> >User</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-2 col-form-label font-weight-normal">NIP</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" name="nip" value="<?= form_error('nip') ? set_value('nip') : $user['nip'] ?>" style="font-size: 14px" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="mail" class="form-control" name="email" value="<?= form_error('email') ? set_value('email') : $user['email'] ?>" style="font-size: 14px">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Firstname</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="firstname"value="<?= form_error('firstname') ? set_value('firstname') : $user['firstname'] ?>" style="font-size: 14px">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Lastname</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="lastname" value="<?= form_error('lastname') ? set_value('lastname') : $user['lastname'] ?>" style="font-size: 14px">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="password" value="<?= form_error('password') ? set_value('password') : $user['password'] ?>" style="font-size: 14px">
                                                    </div>
                                                </div>

                                                <div class="float-right">
                                                    <a href="<?=base_url('user/lists')?>">
                                                        <button type="button" class="btn btn-sm btn-sm btn-warning"><i class="fas fa-times"></i> cancel</button>
                                                    </a>
                                                    <button type="submit" class="btn btn-sm btn-info"><i class="fas fa-check"></i> submit</button>
                                                </div>
                                            </form>
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