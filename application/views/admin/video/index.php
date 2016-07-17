<?php $this->load->view('admin/templates/header'); ?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Video</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <a href="<?= site_url('video/agregar') ?>" class="btn btn-success">Agregar Video</a>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <?php foreach ($videos as $video) { ?>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comment fa-fw"></i> <?= $video->titulo . ' - ' . $video->autor; ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <?= $video->url_video; ?>
                            </div>
                            <div class="col-lg-12">
                                <a href="<?= site_url('video/editar/'.$video->id); ?>" class="btn btn-warning">Editar</a>
                                <a href="<?= site_url('video/eliminar/'.$video->id); ?>" class="btn btn-danger btn-eliminar">Eliminar</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            <?php } ?>
            <!-- endforeach -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

<?php $this->load->view('admin/templates/footer'); ?>