<?=$this->extend('plantilla/layout')?>

<?=$this->section('titulo')?>
prueba
<?=$this->endSection()?>
<?=$this->section('contenido')?>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Dicta repellendus aliquam velit, accusantium exercitationem, explicabo animi mollitia blanditiis beatae, quia maxime, voluptate totam cum modi. Cumque voluptate minima similique hic.</p>

<a href="<?= base_url().route_to('contacto') ?>">Contacto</a>
<br>
<a href="<?= base_url().route_to('contacto') ?>">Contacto</a>
<br>
<a href="<?= base_url().route_to('contacto') ?>">Contacto</a>

<?=$this->endSection()?>