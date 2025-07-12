<?php
/**
 * @var \App\Kernel\Auth\AuthInterface $auth
 */

 $user = $auth->user();
?>

<header>
    <?php if($auth->check()) {?>
        <h3>User: <?php echo $user->email() ?></h3>
        <form action="/logout" method="POST">
            <button>Logout</button>
        </form>
        <hr>
    <?php }?>
    
</header>