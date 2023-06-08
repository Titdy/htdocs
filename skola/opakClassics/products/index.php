

<style>
    .w3-sofia{
        font-family: Sofia, cursive;
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <title>ULTIMATNI UKOL</title>
</head>
<body>
    <center><h1 class="w3-container">Produkty</h1></center>
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
    <button type="submit" class="w3-btn w3-teal w3-right w3-xLarge">Zobrazit</button>
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
    
                    
                    
                    <div class="w3-col w3-padding">
                        <div class="w3-card w3-pink w3-hover-shadow">
                            <div>
                                <h3 class="w3-center"><?php echo "(";
                                          echo htmlspecialchars($product['productCode']);
                                          
                                          echo ")  ";
                                          echo htmlspecialchars($product['productName']);
                                ?></h3> 
                                <h5>
                                    <?php 
                                        echo htmlspecialchars($product['productVendor']);
                                    ?>
                                </h5>
                                <div class="w3-container w3-circle w3-deep-purple w3-right">
                                    <?php 
                                        echo htmlspecialchars($product['productScale']);
                                    ?>
                                </div>
                                <br>
                                <br>
                        
                                <button class="w3-container w3-deep-purple w3-underline" id="button" onclick="showhide()">
                        <div class="w3-container w3-deep-purple w3-underline">
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
                        <div class="w3-container w3-purple hidden w3-animate-top" id="textdesc">
                                <?php 
                                        echo htmlspecialchars($productline['textDescription']);
                                        
                                ?>
                            </div>
                            </div>
                        

                            <div class="w3-container w3-left">
                                <?php 
                                        echo htmlspecialchars($product['productDescription']);
                                ?>
                            </div>
                            <div class="w3-container w3-pink">
                            
                            
                            
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
                            <div class="w3-container w3-teal w3-round w3-right">
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
                                        echo "Zbývá na skladě:";
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

                
                
                <div class="w3-col w3-padding">
                    <div class="w3-card w3-pink w3-hover-shadow">
                        <div>
                            <h3 class="w3-center"><?php echo "(";
                                      echo htmlspecialchars($product['productCode']);
                                      
                                      echo ")  ";
                                      echo htmlspecialchars($product['productName']);
                            ?></h3> 
                            <h5>
                                <?php 
                                    echo htmlspecialchars($product['productVendor']);
                                ?>
                            </h5>
                            <div class="w3-container w3-circle w3-deep-purple w3-right">
                                <?php 
                                    echo htmlspecialchars($product['productScale']);
                                ?>
                            </div>
                            <br>
                            <br>
                        <button class="w3-container w3-deep-purple w3-underline" id="button" onclick="showhide()">
                        <div class="w3-container w3-deep-purple w3-underline">
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
                        <div class="w3-container w3-purple hidden w3-animate-top" id="textdesc">
                                <?php 
                                        echo htmlspecialchars($productline['textDescription']);
                                        
                                ?>
                            </div>
                            </div>
                        <div class="w3-container w3-left">
                            <?php 
                                    echo htmlspecialchars($product['productDescription']);
                            ?>
                        </div>
                        <div class="w3-container w3-pink">
                        
                        
                        
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
                        <div class="w3-container w3-teal w3-round w3-right">
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
                                    echo "Zbývá na skladě:";
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