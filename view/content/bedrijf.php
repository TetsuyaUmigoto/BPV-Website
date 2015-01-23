<div class="wrap">
    <div class="naambedrijf"> <p>naam bedrijf</p> </div>
    <div class="sterren"> <p>ster</p> </div>
    <div class="info"> <p>info</p> </div>
    <div class="maps"> <p>maps</p></div>
    <div class="commentaar"> <p>commentaar</p></div>
    <div class="ster"> <p>ster</p> </div>
    <div class="eigencommentaar"> <p>eigencommentaar</p> </div>
    
    <form action='<?php echo URL ?>bedrijf/postComment' method='post'>
	LeerlingNummer:<input type='text' class='form-control' name='leerlingnummer'>
        Comment:<input type='text' class='form-control' name='comment'>
	Rating:<input type='text' class='form-control' name='rating'>
        <input type='submit' class='btn btn-primary' value='Comment!'>
    </form>
</div>