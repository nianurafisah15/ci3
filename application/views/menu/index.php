
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
            <a href="" class="btn btn-dark mb-3" class="btn btn-dark btn-sm rounded" 
            data-toggle="modal" data-target="#Logoutmodal"><span class="fas fa-fw fa-plus"></span>Add Menu</a>
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
                <?php foreach ($menu as $m) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $m['menu']; ?></td>
                        <td>
                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdown1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-cog"></i></button>
                            <div class="dropdown-menu">

                                <a href="<?= base_url('menu/edit');?>" class="dropdown-item has-icon" data-toggle="modal" 
                                data-target="#exampleModalLabeledit<?= $m['id']; ?>">
                                <span class="fas fa-fw fa-edit"></span>Edit</span></a>

                                <button onclick="hapusMenu('<?= base_url('menu/hapusmenu/') . $m['id']; ?>')" class="dropdown-item has-icon">
                                <span class="fas fa-fw fa-trash-alt"></span>Delete</span></button>
                            </div>
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

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End kof Main Content -->
    <!-- modal -->
    <div class="modal fade" id="Logoutmodal" tebindex="-1"
    aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Add new Menu</h5>
                    <button type="button" class="btn-close"
                    date-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('menu'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                        <input type="text" class="form-control" id="menu"
                        name="menu" placeholder="Menu Name">
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
<?php foreach ($menu as $m) : ?>

<div class="modal fade" id="exampleModalLabeledit<?= $m['id']; ?>" tabindex="-1"
    aria-labelledby="newMenuModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Edit Menu</h5>
                    <button type="button" class="btn-close"
                    date-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="<?= base_url('menu/editmenu/'); ?>" method="post">
                    
                   

                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="menu"
                                name="menu" placeholder="Menu name" value="<?= $m['menu']; ?>"> 
                            </div>

                            <div>
                            <input type="hidden" class="form-control"
                            readenly value="<?= $m['id']; ?>" name="id">
                        </div>

                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" 
                        data-bs-dismiss="modal" >Close</button>
                        <button type="submit" class="btn btn-dark">
                           <i classs="fas fa-fw fa-pencil-alt fa-sm"></i>Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>