<?php $view->component('start'); ?>

<h1>Add movie page</h1>

<form action="/admin/movies/add" method="POST">
    <p>Name</p>
    
    <?php if ($session->has('name')) { ?>
        <ul>
            <?php foreach ($session->getFlash('name') as $error) { ?>
                <li style="color:red;"><?php echo $error ?></li>
            <?php } ?>
        </ul>
    <?php } ?>

    <div>
        <input type="text" name="name">
    </div>
    
    <div>
        <button>Add</button>
    </div>
</form>

<?php $view->component('end'); ?>