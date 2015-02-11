<div class="wrap">
    <?php
    if (isset($this->info)) {
        foreach ($this->info as $info) {
            ?>
            <div class="naambedrijf"><p><?php echo $info['bedrijf_naam'] ?></p></div>
            <div class="sterren"><p>ster</p></div>
            <div class="info"><p><?php echo $info['omschrijving'] ?></p></div>
            <div class="maps"><p>maps</p></div>
            <div class="commentaar"><p>commentaar</p></div>
            <div class="ster"><p>ster</p></div>
            <?php
        }
    }
    ?>

    <div class="bedrijf-comments-test">
        <form action='<?php echo URL ?>bedrijf/postComment' method='post'>
            LeerlingNummer:<input type='text' class='form-control' name='leerlingnummer'>
            Comment:<input type='text' class='form-control' name='comment'>
            Rating:<br><span class="rating">
                <input type="radio" class="rating-input"
                       id="rating-input-1-5" name="rating-input-1">
                <label for="rating-input-1-5" class="rating-star"></label>
                <input type="radio" class="rating-input"
                       id="rating-input-1-4" name="rating-input-1">
                <label for="rating-input-1-4" class="rating-star"></label>
                <input type="radio" class="rating-input"
                       id="rating-input-1-3" name="rating-input-1">
                <label for="rating-input-1-3" class="rating-star"></label>
                <input type="radio" class="rating-input"
                       id="rating-input-1-2" name="rating-input-1">
                <label for="rating-input-1-2" class="rating-star"></label>
                <input type="radio" class="rating-input"
                       id="rating-input-1-1" name="rating-input-1">
                <label for="rating-input-1-1" class="rating-star"></label>
            </span>
            <input type='submit' class='btn btn-primary' value='Comment!'>
        </form>
        <table class="table">
            <tr>
                <td>Comment ID</td>
                <td>LeerlingNummer</td>
                <td>Comment</td>
                <td>Rating</td>
            </tr>
            <?php
            if (isset($this->comments)) {
                foreach ($this->comments as $row) {
                    echo
                    "<tr>
                            <td>" . $row['comment_id'] . "</td>
                            <td>" . $row['leerlingnummer'] . "</td>
                            <td>" . $row['comment'] . "</td>
                            <td>" . $row['rating'] . "</td>
                        </tr>";
                }
            }
            ?>
        </table>
    </div>
</div>
