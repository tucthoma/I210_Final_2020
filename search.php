<?php
$sql="SELECT *FROM recordstore_db.records";
$result=mysqli_query($mysqli,$sql);
$querResults=mysli_num_rows($result);

if($queryResults > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "<div>
        <h3>".$row['album']."</h3>
        <p>".$row['artist']."</p>
        <p>".$row['production_date']."</p>
        <p>".$row['label']."</p>
        <p>".$row['number_of_discs']."</p>
        <p>".$row['price']."</p>
        <p>".$row['genre_id']."</p>
        <p>".$row['description']."</p>
        </div>";
        }
    }

?>
    }
}

?>
</body>
</html>
