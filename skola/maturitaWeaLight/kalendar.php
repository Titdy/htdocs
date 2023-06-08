<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
    <style>
        *{
            font-family: verdana;
            box-sizing: border-box;
        }
        body{
            background-color: aliceblue;
        }
        table, tr, td{
            border: 2px solid black;
            
            border-collapse: collapse;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.11);
        }
        button{
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            padding: 15px 32px;
            font-size: 18px;
            background-color: aliceblue;
        }
        button[type=submit]{
            cursor: pointer;
        }
        button[type=submit]:hover{
            background-color: #bbb;
        }
        #weekend{
            background-color: rgb(93, 168, 49);
        }
        #weekend:hover{
            background-color: #bbb;
        }

        header{
            padding: 20px;
            margin: 0;
            text-align: center;
            top: 0;
            width: 100%;
        }
        footer{
            padding: 20px;
            margin: 0;
            text-align: center;
            bottom: 0;
            position: fixed;
            width: 100%;
        }
        .ulClass{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgb(93, 168, 49);
        }
        .liClass{
            float: left;
            border-right: 1px solid #bbb;
        }
        .liClass a{
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .liClass A:hover{
            background-color: #bbb;
        }
        .changeClass{
            background-color: red;
        }
    </style>
</head>
<body>
<?php 
       session_start();
       if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $_SESSION["form_post"] = "Yes";

    // set the color as red in the session
    $_SESSION['color'] = 'red'; 
}
if(isset($_SESSION["form_post"]) && $_SESSION["form_post"] =="Yes") 
{
    //echo "yes";
}

    if(isset($_POST['tdOn'])){
        $clickedTD = $_POST['tdOn'];
        $_SESSION['color'] = "";
        $_SESSION = $_POST['color'] = "red";

        $mysqli = new mysqli("localhost", "root", "", "wea_maturita_light");
        if(isset($mysqli -> connect_error)){
            die("Nepripojeno" . mysqli_connect_error());
        }else{
            //echo "pripojeno";
        }
        $sql = " ";
        $sql = "INSERT INTO informations(info) VALUES ('$clickedTD')";
        $result = $mysqli->query($sql);
        if($result === true){
            //echo "pridal se item";
        }
        $message = "";
        if(isset($_POST['tdOn'])){ //check if form was submitted
        $input = $_POST['tdOn']; //get input text
        $message = "Success! You entered: ".$input;
}   
    }


/*$info = $_GET['info'];
$query = "SELECT * FROM info";
$res = mysqli_query($mysqli, $query);

while($row = mysqli_fetch_array($result)) {
    echo "<br><br>";
    echo $row['id'];
    echo $row['info'];
}*/
/*<?php if(isset($_SESSION["form_post"])){ echo "buttn-on-post"; }?> <?php echo $_SESSION['color']; ?>*/
?>
    <header>Kalendář</header>
    <ul class="ulClass">
        <li class="liClass"><a href="#menu">Menu</a></li>
        <li class="liClass"><a href="#onas">O Nás</a></li>
        <li class="liClass" style="float: right; border-left: 1px solid #bbb;"><a href="#login">Login</a></li>
    </ul>
    <br><br>
<br><br>
    <form action="" method="POST">
    <div>
        <table>
        <td><button type="button">Po  </button></td>
        <td><button type="button">Út </button></td>
        <td><button type="button">St  </button></td>
        <td><button type="button">Čt   </button></td>
        <td><button type="button">Pá  </button></td>
        <td><button type="button" style=" background-color: rgb(93, 168, 49);">So</button></td>
        <td><button type="button" style=" background-color: rgb(93, 168, 49);">Ne</button></td>
        </table>
    </div>
    <div>
        <table>
        <td><button type="button">        </button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="1" action="">01</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="2" action="">02</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="3" action="">03</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="4" >04</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="5" id="weekend">05</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="6" id="weekend">06</button></td>
        </table>
    </div>
    <div>
        <table>
        <tr>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="7">07</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="8">08</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="9">09</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="10">10</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="11">11</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="12" id="weekend">12</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="13" id="weekend">13</button></td>
    </tr>
</table>

    </div>
    <div>
        <table>
            <tr>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="14">14</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="15">15</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="16">16</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="17">17</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="18">18</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="19" id="weekend">19</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="20" id="weekend">20</button></td>
            </tr>
    </table>
    </div>
    <div>
        <table>
        <tr>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="21">21</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="22">22</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="23">23</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="24">24</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="25">25</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="26" id="weekend">26</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="27" id="weekend">27</button></td>
            </tr>
        </table>
    </div>
    <div><table>

    
        <td><button type="submit" name="tdOn" class="tdOnClass" value="28">28</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="29">29</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="30">30</button></td>
        <td><button type="submit" name="tdOn" class="tdOnClass" value="31">31</button></td>
        <td><button type="button">        </button></td>
        <td><button type="button">        </button></td>
        <td><button type="button">        </button></td>
        </table>
        </div>

        </form>


    <br>

    <footer>Kalendář</footer>



    <script>

/*$('.tdOn').on("click", function() {
   $(this).css('color', 'red');
});*/
$(".yesOn").on("click", function(){
    $(this).css('background-color', 'blue');
});





$(".tdOnClass").on("click", function(){
    $(this).css('background-color', 'red');
});

    </script>

<div>
<table style="margin: 20px;">
    <td style="padding: 20px;" name="tdOn" class="tdOnClass">1</td>
    <td style="padding: 20px;" name="tdOn" class="tdOnClass">2</td>
    <td style="padding: 20px;" named="tdOn" class="tdOnClass">3</td>
    <td style="padding: 20px;" name="tdOn" class="tdOnClass">4</td>
    <td style="padding: 20px;" name="tdOn" class="tdOnClass">5</td>
</table>
</div>
</body>
</html>
