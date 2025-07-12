<?php $view->component('start'); ?>


<h1>Login</h1>;

<form action="/login" method="POST">
    <?php if ($session->has('error')) { ?>
        <ul>
            <?php foreach ($session->getFlash('error') as $error) { ?>
                <li style="color:red;"><?php echo $error ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
    <p>email</p>
    <input type="email" name="email">
    <p>password</p>
    <input type="password" name="password">
    <button>Login</button>
</form>

<?php $view->component('end'); ?>