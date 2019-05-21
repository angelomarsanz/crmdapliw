<?php get_header(); ?>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href=<?= mvc_css_url('crmdapliw', 'misestilos.css') ?>>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>var $j = $.noConflict(true);</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type='text/javascript' src='//maps.google.com/maps/api/js?key=AIzaSyA3aJF6L49pO_qlvqkjjVSGY277IfciJ8Q&#038;language=es_VE&#038;ver=3.21'></script>

<?php $this->render_main_view(); ?>

<?php get_footer(); ?>
