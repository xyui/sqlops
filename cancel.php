<?php

    session_start();

    //检测是否登录，若没登录则转向登录界面  
    if(!isset($_SESSION['userid'])){
        header("Location:index.html");
        exit("你还没登录呢。");
    }


$id = $_GET['id'];
?>
<form action="cancel_status.php" method="get"> 
    <select name="q">
    <option value="">是否撤销工单？</option>
    <option value="是">是</option>
    <option value="否">否</option>
    <input type="hidden" name="cancel_id" value="<?php echo $id ?>">
    </select>
    <input type="submit" value="撤销">
    </form>

