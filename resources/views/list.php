<link rel="stylesheet" href="/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    <nav>
        <a class ="nav" href="/jukebox"><img src="/svg/water.png" width="20" height="20" />ADD</a>
        <a class ="nav" href="/list"><img src="/svg/pikachu.png" width="25" height="20" />LIST</a>
    </nav>
    <br>

    <div class="log">
        <h3 class="top">this is not your</h3>
        <h1 class="logo">PLAYLIST</h1>
        <h3 class="bottom">ordinary</h3>
    </div>
    <br>

    <?php foreach($all as $song) :?>

        <div class="song">
            <iframe class="video" src="https://www.youtube.com/embed/<?= $song->code ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h2>Addet at:        <?= $song->added_at ?></h2>
            <h2 class>Name of song:  <?= $song->name ?></h2>
            <h2>Author:        <?= $song->author ?></h2>
        <a href="/jukebox"><input type="submit" name="edit" value="edit"></a>
        <a href="/jukebox"> <input type="submit" name="delete" value="delete"></a>
   </div>   
       

    <?php endforeach; ?>