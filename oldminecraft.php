<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<body onload='help()'>
</body>
<style>
div.scroll {
    background-color: #590170;
    width: 100%;
    height: 250px;
    color:#8e8e8e;
    overflow: auto;
    text-align: justify;
    padding: 20px;
}

body{
    background-color:black;
}
#status{
    color:#939393;
    padding:20px;
    font-size:20px;
    text-align: center;
    border: 5px solid white;
    border-radius: 30px;
}

#del{
    width:100%;
    text-align: center;
    height: 85px;
    font-size:15px;
    color:white;
    background-color: #fc353e;
    border: 2px solid black;
    border-radius: 30px;
}

#test{
    width:100%;
    text-align: center;
    height: 85px;
    font-size:15px;
    background-color: #35fcac;
    border: 2px solid black;
    border-radius: 30px;
}

#refresh{
    width:100%;
    text-align: center;
    height: 85px;
    font-size:15px;
    background-color: #fccd35;
    border: 2px solid black;
    border-radius: 30px;
}

#news{
    width:100%;
    text-align: center;
    height: 85px;
    font-size:15px;
    background-color: #c3fc5a;
    border: 2px solid black;
    border-radius: 30px;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function help() {
        $(document).ready(function() {
            $("html, div").animate({scrollTop: $('html, div').get(-1).scrollHeight}, 0);
    });
}
</script>
<div class="scroll">
<?php
$files = file_get_contents('mineout.txt');
//echo nl2br($files);

function testfun()
{
    shell_exec('./start-mc-server');
}

if(array_key_exists('test',$_POST)){
   testfun();
}

function kill()
{
    shell_exec('killall -9 java');
    shell_exec('tmux kill-server');
    shell_exec('rm mineout.txt');
}

if(array_key_exists('del',$_POST)){
   kill();
}

function news(){
    shell_exec("echo($files)");
}

if(array_key_exists('news',$_POST)){
    news();
}

?>

</div> 
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">

<form method="post">
    <input type="submit" name="del" id="del" value="kill THE SERVER" /><br/>
</form>

<form method="post">
    <input type="submit" name="refresh" id="refresh" value="REFRESHer" /><br/>
</form>

<form method="post">
    <input type="submit" name="test" id="test" value="START THE SERVER" /><br/>
</form>

<form method="post">
    <input type="submit" name="news" id="news" value="new world" /><br/>
</form>

<p id='status'>
<?php

echo file_get_contents('mcstatus')

?>
</p>