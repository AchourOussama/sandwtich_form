<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
       
        

            echo ' 
            <div class="card-body p-4">
            <table class="table mb-4" id="table">
                
            <tr>
            <th scope="row">Nom</th>
            <td>'.$_POST['nom'].'</td>
            </tr> 
            <th scope="row">Prénom</th>
            <td>'.$_POST['prenom'].'</td>
            </tr>
            <th scope="row">n° de sandwtich</th>
            <td>'.$_POST['sandwitchNumber'].'</td>
            </tr>
            <th scope="row">adresse</th>
            <td>'.$_POST['adresse'].'</td>
            </tr>
            <th scope="row">ingredients</th>
            <td>'.$_POST['ingredient'].'</td>
            <tr>
                <th scope="row">prix total :</th>
                <td>'.price($_POST["sandwitchNumber"],4)."dt".'</td>
            </tr>
            
          </tr>
      </table>
      </div>'
      ;
    }

      

    ?>
   

    
</body>
</html>