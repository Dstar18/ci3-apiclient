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
                                <p class="card-title font-weight-bold">Data User</p>
                                <div class="card-tools">
                                    <a href="<?= base_url('user/insert')?>" class="btn btn-sm btn-primary" title="Insert user">
                                        <i class="fas fa-user-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- /Navbar Content -->
                            <!-- Page Content -->
                            <div class="card-body" style="font-size: 14px">
                                <!-- Message response -->
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
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NIP</th>
                                            <th>Firstname</th>
                                            <th>Role</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($user as $row){ ?>
                                            <tr>
                                                <td><?=$row['iduser']?></td>
                                                <td><?=$row['nip']?></td>
                                                <td><?=$row['firstname']?></td>
                                                <td><?=$row['role']?></td>
                                                <td><?=$row['email']?></td>
                                                <td class="project-state text-center">
                                                    <a href="<?= base_url('user/list/'.$row['iduser'])?>" title="View">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="<?= base_url('user/update/'.$row['iduser'])?>" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="<?= base_url('user/delete/'.$row['iduser'])?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" title="Delete">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>    
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <?php $this->load->view('_partials/js.php');?>
        <!-- Modal -->
        </body>
</html>