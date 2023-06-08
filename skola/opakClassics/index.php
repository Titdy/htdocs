<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
    <style>
body{
    font-family: verdana;
    padding-left: 10%;
    padding-right: 10%;
}
header{
    background-color: lightgrey;
    text-align: center;
    font-size: large;
    padding: 20px;


}
    .w3-underline{
        text-decoration: underline;
    }

    .w3-line-through{
        text-decoration: line-through;
    }

    .hidden{
        display : none;
    }
</style>
</head>
<body>
    
     <header>Classic cars</header>
     <div class="w3-container">
     <form action="" method="GET">
     <?php

        $conn = mysqli_connect('localhost', 'root', '', 'classicmodels');
        if($conn->connect_error) {
            echo "Nepodařilo se připojit k databázi!";
            return;
        }
        $product_lines = 'SELECT productLine, textDescription FROM productlines';
        $product_run = mysqli_query($conn, $product_lines);

        if(mysqli_num_rows($product_run) > 0){

                foreach($product_run as $productline){
                    //echo $productline['productLine'];
                    $checked = [];
                    if(isset($_GET['prodlines'])){
                        $checked = $_GET['prodlines'];
                    }
                    ?>
                        <div class="w3-container">
                            <input type="checkbox" name="prodlines[]" class="w3-check" value="<?= $productline['productLine'];  ?>"
                                <?php if(in_array($productline['productLine'], $checked)){  echo "checked";} ?>
                            />
                            <?= $productline['productLine'];  ?>
                        </div>
                    <?php
                }

        }
        else {
            echo "Nepodařilo se nic najít";
        }
     ?>
     <button type="submit" class="w3-btn w3-green w3-right w3-xLarge">Zobrazit</button>
     </form>   
        <div class="w3-row">
            <?php 
             if(isset($_GET['prodlines'])){
                $prod_check = [];
                $prod_check = $_GET['prodlines'];
                foreach($prod_check as $prodlines){
                    //echo $prodlines;
                    
                    $product_query = "SELECT * FROM products WHERE productLine IN ('$prodlines')";

                    $result = mysqli_query($conn, $product_query);
            
                    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
            
                    
                    
                if(mysqli_num_rows($result) > 0){
                foreach($products as $product) : 
                    $product_lines = "SELECT * FROM productlines WHERE productLine IN ('$prodlines')";
                    $product_run = mysqli_query($conn, $product_lines);
                    foreach($product_run as $productline) :
                    ?>
     
                    <div class="w3-col w3-padding-large">
                        <div class="w3-card w3-light-grey w3-padding-large">
                            <div>
                                <h3 class="w3-center"><?php echo "(";
                                          echo htmlspecialchars($product['productCode']);
                                          
                                          echo ")  ";
                                          echo htmlspecialchars($product['productName']);
                                ?></h3> 
                                <h5>
                                    <?php 
                                        echo "Prodejce: ";
                                        echo htmlspecialchars($product['productVendor']);
                                    ?>
                                </h5>
                                <div class="w3-container w3-badge w3-blue w3-right w3-padding-large w3-xlarge">
                                    <?php 
                                        echo htmlspecialchars($product['productScale']);
                                    ?>
                                </div>
                                <br>
                                <br>
                        
                                <button class="w3-container w3-blue w3-underline w3-round-large" id="button" onclick="showhide()">
                        <div class="w3-container w3-blue w3-underline">
                            <?php 
                                    echo htmlspecialchars($product['productLine']);
                            ?>
                        </div>
                        </button>
                        <script>
                            function showhide()
                            {
                                var div = document.getElementById("textdesc");
                                div.classList.toggle('hidden'); 
                            }
                        </script>
                        <div class="w3-container w3-blue hidden w3-animate-top w3-round-large" id="textdesc">
                                <?php 
                                        echo htmlspecialchars($productline['textDescription']);
                                        
                                ?>
                            </div>
                            </div>
                        
                            <div class="w3-container w3-left" style="width: 60%;">
                                <?php 
                                        echo htmlspecialchars($product['productDescription']);
                                ?>
                            </div>
                            <div class="w3-container w3-light-grey">
                            
                            
                            
                            <h5 class="w3-right w3-line-through">
                                <?php 
                                        echo "$";
                                        echo htmlspecialchars($product['MSRP']);
                                ?>
                            </h5>
                            <h5 class="w3-right">
                                <?php 
                                        echo "Běžná cena: ";
                                        
                                ?>
                            </h5>
                            <br>
                            <br>
                            <br>
                            <div class="w3-container w3-green w3-round w3-right">
                                <h3>
                                <?php 
                                    echo ' $';
                                    echo htmlspecialchars($product['buyPrice'])
                                ?>
                                </h3>
                            </div>
                            <br>
                            <br>
                            <br>
                            <h5 class="w3-right">
                                <?php 
                                        echo "Zbývá ještě:";
                                        echo htmlspecialchars($product['quantityInStock']);
                                ?>
                            </h5>
                            
                            </div>
                            </div>
                        </div>
                    </div>
    
                <?php 
                endforeach;
            endforeach;
            }
            else{
                echo "Nic jsme nenašli.";
            }
                }
             }
             else{

                $product_query = 'SELECT * FROM products';

                $result = mysqli_query($conn, $product_query);
        
                $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
        

            if(mysqli_num_rows($result) > 0){
            foreach($products as $product) : 
                $product_lines = "SELECT * FROM productlines";
                $product_run = mysqli_query($conn, $product_lines);
                foreach($product_run as $productline) : ?>

                
                
                <div class="w3-col w3-padding-large">
                    <div class="w3-card w3-light-grey w3-padding-large ">
                        <div>
                            <h3 class="w3-center"><?php echo "(";
                                      echo htmlspecialchars($product['productCode']);
                                      
                                      echo ")  ";
                                      echo htmlspecialchars($product['productName']);
                            ?></h3> 
                            <h5>
                                <?php
                                    echo "Prodejce: ";
                                    echo htmlspecialchars($product['productVendor']);
                                ?>
                            </h5>
                            <div class="w3-container w3-badge w3-blue w3-right w3-padding-large w3-xlarge">
                                <?php 
                                    echo htmlspecialchars($product['productScale']);
                                ?>
                            </div>
                            <br>
                            <br>
                        <button class="w3-container w3-blue w3-underline w3-round-large" id="button" onclick="showhide()">
                        <div class="w3-container w3-blue w3-underline">
                            <?php 
                                    echo htmlspecialchars($product['productLine']);
                            ?>
                        </div>
                        </button>
                        <script>
                            function showhide()
                            {
                                var div = document.getElementById("textdesc");
                                div.classList.toggle('hidden'); 
                            }
                        </script>
                        <div class="w3-container w3-blue hidden w3-animate-top w3-round-large" id="textdesc">
                                <?php 
                                        echo htmlspecialchars($productline['textDescription']);
                                        
                                ?>
                            </div>
                            </div>
                        <div class="w3-container w3-left" style="width: 60%;">
                            <?php 
                                    echo htmlspecialchars($product['productDescription']);
                            ?>
                        </div>
                        <div class="w3-container w3-light-grey">
                        
                        
                        
                        <h5 class="w3-right w3-line-through">
                            <?php 
                                    echo "$";
                                    echo htmlspecialchars($product['MSRP']);
                            ?>
                        </h5>
                        <h5 class="w3-right">
                            <?php 
                                    echo "Běžná cena: ";
                                    
                            ?>
                        </h5>
                        <br>
                        <br>
                        <br>
                        <div class="w3-container w3-green w3-round w3-right">
                            <h3>
                            <?php 
                                echo ' $';
                                echo htmlspecialchars($product['buyPrice'])
                            ?>
                            </h3>
                        </div>
                        <br>
                        <br>
                        <br>
                        <h5 class="w3-right">
                            <?php 
                                    echo "Zbývá jěště:";
                                    echo htmlspecialchars($product['quantityInStock']);
                            ?>
                        </h5>
                        
                        </div>
                        </div>
                    </div>
                </div>

            <?php 
            endforeach;
        endforeach;
        }
        else{
            echo "Nic jsme nenašli.";
        }
        
     }
            ?>
        </div>
    </div>
    
</body>
</html>