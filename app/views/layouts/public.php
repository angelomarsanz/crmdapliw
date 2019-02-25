<?php get_header(); ?>

<link rel="stylesheet" href=<?= mvc_css_url('crmdapliw', 'jquery-ui.min.css') ?>>
<link rel="stylesheet" href=<?= mvc_css_url('crmdapliw', 'bootstrap.min.css') ?>>
<link rel="stylesheet" href=<?= mvc_css_url('crmdapliw', 'misestilos.css') ?>>

<script src=<?= mvc_js_url('crmdapliw', 'jquery-3.3.1.min.js') ?>></script>
<script src=<?= mvc_js_url('crmdapliw', 'jquery-ui.min.js') ?>></script>
<script src=<?= mvc_js_url('crmdapliw', 'bootstrap.min.js') ?>></script>

<?php $this->render_main_view(); ?>

<?php get_footer(); ?>