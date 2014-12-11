<form action='<?php echo URL ?>crawler/curl' method='post'>
    <input type='text' name='number'>
</form>
<?php
    if(isset($this->data)) {
        echo $this->data;
    }
?>