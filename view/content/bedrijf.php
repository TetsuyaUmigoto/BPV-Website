<div id="wrap">
    <div id="infoWrapper">
        <?php
        if (isset($this->info)) {
            foreach ($this->info as $info) {
                ?>
                <div class="bedrijfInfo"><p><?php echo $info['bedrijf_naam'] ?></p></div>
                <div class="bedrijfInfo"><p>ster</p></div>
                <div class="bedrijfInfo"><p><?php echo $info['omschrijving'] ?></p></div>
                <div class="bedrijfInfo"><p>maps</p></div>
                <div class="bedrijfInfo"><p>commentaar</p></div>
                <div class="bedrijfInfo"><p>ster</p></div>
                <?php
            }
        }
        ?>
    </div>
    <div id="gebruikerComments">
        <?php
        if (isset($this->comments)) {
            foreach ($this->comments as $row) {
                echo
                " <div id='rating'>" . $row['rating'] . "</div>"
                . "<div id='leerlingnummer'>" . $row['leerlingnummer'] . "</div>"
                . "<div id='comment'>" . $row['comment'] . "</div>";
            }
        }
        ?>
    </div>
    <div class="bedrijf-comments-test">
        <form action='<?php echo URL ?>bedrijf/postComment' method='post'>
            <input type="hidden" name="bedrijf_id" value="<?php echo $this->bedrijfId ?>" />
            <input type="hidden" name="rating" id="ratingInput" value="" />
            LeerlingNummer:<input type='text' class='form-control' name='leerlingnummer'>
            Comment:<input type='text' class='form-control' name='comment'>
            Rating:<br><span class="rating">
                <input type="radio" class="rating-input"
                       id="rating-input-5" name="rating-input-1">
                <label for="rating-input-5" class="rating-star"></label>
                <input type="radio" class="rating-input"
                       id="rating-input-4" name="rating-input-1">
                <label for="rating-input-4" class="rating-star"></label>
                <input type="radio" class="rating-input"
                       id="rating-input-3" name="rating-input-1">
                <label for="rating-input-3" class="rating-star"></label>
                <input type="radio" class="rating-input"
                       id="rating-input-2" name="rating-input-1">
                <label for="rating-input-2" class="rating-star"></label>
                <input type="radio" class="rating-input"
                       id="rating-input-1" name="rating-input-1">
                <label for="rating-input-1" class="rating-star"></label>
            </span>
            <input type='submit' class='btn btn-primary' value='Comment!'>
        </form>
    </div>
</div>
