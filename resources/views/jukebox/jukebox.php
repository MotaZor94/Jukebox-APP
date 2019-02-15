<?php if(count($errors)> 0) : ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach($errors->all() as $error): ?>
                <li> <?=$error?> </li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endif; ?>

<?php if (Session::has("success_message")): ?>
    <div class="alert alert-success">
        <?= Session::has("success_message") ?>
    </div>
<?php endif ; ?>


<form action="" method="post">

    <?= csrf_field() ?>


    <div class="form-group">
        <label for="">Song Name:</label>
        <input type="text" name="name" value="">
    </div>

    <div class="form-group">
        <label for="">Song Code::</label>
        <input type="text" name="code" value="">
    </div>

    <div class="form-group">
        <label for="">Song author:</label>
        <input type="text" name="author" value="">
    </div>
    
    <div>
    <input type="submit" class = "btn btn-primary" value ="add">
    </div>

    <!--<div class="form-group">
        <label for="">Song added at:</label>
        <input type="text" name="added_at" value="">
    </div>-->
</form>