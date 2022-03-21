<form method="post">
    <input type="submit" name="test" id="test" value="RUN" /><br/>
</form>

<?php

function testfun()
{
   shell_exec('rm log.html');
}

if(array_key_exists('test',$_POST)){
   testfun();
}

?>
