<?php get_header(); ?>

<link rel="stylesheet" href=<?= mvc_css_url('crmdapliw', 'bootstrap.min.css') ?>>
<link rel="stylesheet" href=<?= mvc_css_url('crmdapliw', 'jquery-ui.min.css') ?>>
<link rel="stylesheet" href=<?= mvc_css_url('crmdapliw', 'misestilos.css') ?>>

<script src=<?= mvc_js_url('crmdapliw', 'jquery-3.3.1.min.js') ?>></script>
<script src=<?= mvc_js_url('crmdapliw', 'jquery-ui.min.js') ?>></script>

<script>var $j = $.noConflict(true);</script>

<script src=<?= mvc_js_url('crmdapliw', 'popper.js') ?>></script>
<script src=<?= mvc_js_url('crmdapliw', 'bootstrap.min.js') ?>></script>
<script type='text/javascript' src='//maps.google.com/maps/api/js?key=AIzaSyA3aJF6L49pO_qlvqkjjVSGY277IfciJ8Q&#038;language=es_VE&#038;ver=3.21'></script>

<?php $this->render_main_view(); ?>

<?php get_footer(); ?>
