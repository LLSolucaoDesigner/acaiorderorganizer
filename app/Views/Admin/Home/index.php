<?php echo $this->extend('Admin/layout/principal'); ?>



<?php echo $this->section('titulo'); ?> <?php echo $titulo; ?> <?php echo $this->endSection(); ?>


<?php echo $this->section('estilos'); ?>

<!-- Aqui enviamos para o template principal os estilos -->


    <link  rel="stylesheet" href="<?php echo site_url('admin/vendors/auto-complete/jquery-ui.css'); ?>"/>


<?php echo $this->endSection(); ?>




<?php echo $this->section('conteudo'); ?>

<!-- Aqui enviamos para o template principal os conbteudos -->

<?php echo $titulo; ?>

<?php echo $this->endSection(); ?>




<?php echo $this->section('scripts'); ?>

<!-- Aqui enviamos para o template principal os scripts -->

<?php echo $this->endSection(); ?>