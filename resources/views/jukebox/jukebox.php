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

<div class="form">
<form action="" method="post">

    <?= csrf_field() ?>

    <h2>SONG EDITOR 3000</h2>



    <div class="form-group">
        <label for="" class="editing">Song Name:</label>
        <input type="text" class="inputs"  name="name" value="<?= $song->name ?>">
    </div>

    <div class="form-group">
        <label class="editing" for="">Song Code:</label>
        <input type="text" class="inputs" name="code" value="<?= $song->code ?>">
    </div>

    <div class="form-group">
        <label for="" class="editing">Song author:</label>
        <input type="text" class="inputs" name="author" value="<?= $song->author ?>">
    </div>
    
    <div>
    <input type="submit" class="nav" value ="add">
    </div>
    </div>

</form>

