<?php
function price (int $number,int $price)
{
    $total=$price*$number;
    if ($number>10){
        $total-=($total/10);
    }
    return $total;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    // if(isset($_POST)){
    //     foreach($_POST as $key->$value){
    //         print($key.":\t".$value."\n");
    //         echo "<br>";

    //     }
        //var_dump($_POST);
        foreach($_POST as $key=>$value){

            print($key.":\t".htmlspecialchars($value)."\n");
            echo "<br>";
        

    }
    echo "<br>";
    echo "prix total :".price($_POST["sandwitchNumber"],4)."dt";

}

foreach($_SESSION['notes'] as $note){
    $i=array_search($note,$_SESSION['notes']) +1;
  echo"
  <tr>
    <th >".$i."</th>
    <td>".$note["title"]."</td>
    <td>".$note["content"]."</td>
    
  </tr>";
  echo  "<br>";


  }
?>