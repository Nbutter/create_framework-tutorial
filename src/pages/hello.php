<!-- this is an html template -->

<?php $name = ucwords($request->get('name', 'World')); ?>

Hello, <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>.

By the way, the value of "foo" is <?php echo $foo ?>.
