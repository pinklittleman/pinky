<form method="post">
    <input type="submit" name="test" id="test" value="RUN" /><br/>
</form>

<form method="post">
    <input type="submit" name="null" id="null" value="refresh" /><br/>
</form>

<form method="post">
    <input type="submit" name="del" id="del" value="del" /><br/>
</form>

<?php

function testfun(){
    $stu = system('./start');
    echo($stu);
}

if(array_key_exists('test',$_POST)){
   testfun();
}

function testfunn(){
    $stu = system('killall -9 java');
    shell_exec('rm mineout.txt');
    echo($stu);
}

if(array_key_exists('del',$_POST)){
   testfunn();
}

?>
<body>
</body>
<style>

div{
    width: 100%;
    height: 250px;
    background-color: grey;
    overflow:auto;
}

body{
    background-color:black;
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

#null{
    width:100%;
    text-align: center;
    height: 85px;
    font-size:15px;
    background-color: #fccd35;
    border: 2px solid black;
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

#text{
    height:870px;
    width:500px;
}

h1{
    color:white;
}

h2{
    color:white;
}

#current{
    height:870px;
    width:500px;
}

</style>
<div>
    <?php

    $mine = file_get_contents('mineout.txt');
    
    echo nl2br($mine);

    ?>
</div>
<h1>change server settings</h1> <h2>current server settings</h2>
<div id='current'>
    <?php
    
    $sett = file_get_contents('server.properties');
    echo nl2br($sett);

    ?>
</div>
<?php

if ($_POST) // If form was submited...
{
    $text = $_POST["mytextarea"]; // Get it into a variable
    $file = 'server.properties';
    file_put_contents($file,$text);
}

?>
<form method="post">
    <textarea name="mytextarea" id='text'>
        <?php

        $egg = file_get_contents('server.propertiesback');
        echo($egg);

        ?>
    </textarea>
    <input type="submit" value="Go!" />
</form>
