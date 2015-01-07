<form action='<?php echo URL ?>crawler/curl' method='post'>
    <select name='richting'>
        <option value="ecabo">ECABO</option>
        <option value="goc">GOC</option>
    </select>
    <input type='text' name='number'>
</form><br>
<p>
    Test nummer: 9812355
</p>
<?php
if (isset($this->data)) {
    echo $this->data;
}