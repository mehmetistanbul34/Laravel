<!DOCTYPE html>
<html>
<header>

</header>
<body>
    <?php 
        for($i=0;$i<count($pages);$i++){
            print_r($pages[$i]->id." ".$pages[$i]->baslik." ".$pages[$i]->aktif);
            echo "<br>";
        } ;
    ?>
</body>
</html>
