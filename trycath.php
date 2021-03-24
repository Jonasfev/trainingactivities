<?php
    try{
        echo "<h3>--------------------------try-------------------</h3>";
        if (!file_exists("2DTA.php")){
            throw new Exception("O arquivo não Existe");
        }
    }
    catch(Error $e){
        echo "<h3>--------------------------catch-------------------</h3>";
    }
    catch(Exception $e){
        echo "<h3>--------------------------Exception-------------------</h3>";

    }
    finally{
       echo "<h3>--------------------------finally-------------------</h3>";

    }
?>