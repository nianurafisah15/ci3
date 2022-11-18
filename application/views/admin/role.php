
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title?></h1>


    <div class="row">
        <div class="col-lg">
        <!-- pesan error -->
        <?= form_error(
            'menu',
            '<div class="alert alert-success" role="alert">
            </div>'
        ); ?>
        <?= $this->session->flashdata('message'); ?>
        <!-- akhir pesan error -->

        <!-- tombol tambah -->
        
        <!-- tabel -->
        <div class ="card shadow mb-4">
            <div class="card-header py-3 bg-gradient-dark">
                <h6 class="m-0 font-waight-bold text-white"><?= $title; ?></h6>
                </div>
            <div class="card-body">
                <div clas="col-md-6">
                <a href="" class="btn btn-dark mb-3" class="btn btn-dark"
                data-toggle="modal" data-target="#Addnewrole">Add New Role</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($role as $r) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $r['role']; ?></td>
                        <td>
                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdown1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-cog"></i></button>
                            <div class="dropdown-menu">
                        <a href="<?= base_url('admin/roleaccess/') . $r['id'] ?>" class= "dropdown-item has-icon">
                        <span class="fas fa-fw fa-user"></span>Access</span></a>

                        <a href="#" class="dropdown-item has-icon" data-toggle="modal" data-popup="tooltip" data-placement="top" title="edit" 
                        data-target="#roleedit<?= $r['id']; ?>">
                        <span class="fas fa-fw fa-edit"></span>Edit</span></a>

                        <button onclick="hapusRole('<?= base_url('admin/hapusrole/') . $r['id'] ?>')" class="dropdown-item has-icon">
                        <span class="fas fa-fw fa-trash-alt"></span>Delete</span></button>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- akhir tabel -->

        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End kof Main Content -->
    <!-- modal -->
        <div class="modal fade" id="Addnewrole" tebindex="-1"
            aria-labelledby="AddnewroleLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AddnewroleLabel">Add new Role</h5>
                            <button type="button" class="btn-close"
                            date-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?= base_url('admin/role'); ?>" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                <input type="text" class="form-control" id="role" name="role" placeholder="Menu Role">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-dark">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- modal edit -->
    <?php foreach ($role as $r) : ?>

        <div class="modal fade" id="roleedit<?= $r['id']; ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="roleeditLabel">Edit Role</h5>
                        <button type="button" class="close" date-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/editrole'); ?>" method="post">

                            <input type="hidden" class="form-control"
                            readenly value="<?= $r['id']; ?>" name="id">

                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="role"
                                    name="role" placeholder="Menu Role" value="<?= $r['role']; ?>"> 
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                            <button type="submit" class="btn btn-dark">
                                <i class="fas fa-fw fa-pencil-alt fa-sm"></i>Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    <?php endforeach; ?>