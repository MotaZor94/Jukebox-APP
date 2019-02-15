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
        <label for="">Author Name:</label>
        <input type="text" name="aname" value="">
    </div>

    <div class="form-group">
        <label for="">Year of birth:</label>
        <input type="text" name="birth" value="">
    </div>

    <div class="form-group">
        <label for="">Biography:</label>
        <input type="text" name="bio" value="">
    </div>
    
    <div class="form-group">
        <label for="">Photo URL:</label>
        <input type="text" name="photo" value="">
    </div>
    <div>
        <input type="submit"  value ="add author">
    </div>
</form>