<div id="container">
        <!-- edit song form -->
        <div>
            <h3>Editar Canção</h3>
            <form action="<?php echo URL; ?>songs/updatesong" method="POST">
                <input type="hidden" name="song_id" value="<?=$song->id?>" />
                <label>Artísta</label>
                <input type="text" name="artist" value="<?=$song->artist?>" required />
                <label>Música</label>
                <input type="text" name="track" value="<?=$song->track?>" required />
                <label>Link</label>
                <input type="text" name="link" value="<?=$song->link?>" required />
                <input type="submit" name="submit_update_song" value="Submit" />
            </form>
        </div>        

        <!--?php
        echo "<p>ID: {$song->id}</p>";
        echo "<p>Artista: {$song->artist}</p>";
        echo "<p>Faixa: {$song->track}</p>";
        echo "<p>Link: {$song->link}</p>";
        ?-->
        </div>