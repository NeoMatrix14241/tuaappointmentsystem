<?php if (count($login_errors) > 0): ?>
    <div id="notification">
        <?php foreach ($login_errors as $login_error): ?>
            <li><?php echo $login_error; ?></li>
        <?php endforeach ?>
    </div>
<?php endif ?>