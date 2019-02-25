<?php if (isset($objects)): ?>
    <h2>Users</h2>

    <?php foreach ($objects as $object): ?>

        <?php $this->render_view('_item', array('locals' => array('object' => $object))); ?>

    <?php endforeach; ?>

    <?php echo $this->pagination(); ?>
<?php else: ?>
    <br />
    <br />
    <p><b>Debes iniciar sesión.</b> Por favor <?php echo $this->html->link('inicie sesión', array('controller' => 'ingresar-al-sistema'), array('style' => 'color: blue;')); ?> para acceder al CRM.</p>
    <br />
    <br />
<?php endif; ?><br />