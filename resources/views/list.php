<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <nav>
        <a href="/jukebox" style="border: 2px solid black; font-size: 2em;">ADD</a>
        <a href="/list" style="border: 2px solid black; font-size: 2em; background: green; color: white;">LIST</a>
    </nav>
    <br>


    <h1>PLAYLIST</h1>
    <br>
    <?php foreach($all as $song) :?>
       
       <h2>Name of song:  <?= $song->name ?></h2>
       <h2>Author:        <?= $song->author ?></h2>
       <h5>Song url: https://www.youtube.com/embed/<?= $song->code ?></h5>
       <h2>Addet at:        <?= $song->added_at ?></h2>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $song->code ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>
   <a href="/jukebox"><input type="submit" name="edit" value="edit"></a>
   <a href="/jukebox"> <input type="submit" name="delete" value="delete"></a>
       

    <?php endforeach; ?>