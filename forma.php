<html>

   <head>
        <title>baza</title>
    </head>
    <body>
        <a href="tabela_korisnika.php">tabela korisnika</a>
        <h1>forma za dodavanje korisnika u mySQL bazu</h1>
        <form action="forma.php" method="post" enctype="multipart/form-data" >
            Login: <input type="text" name="login" id="login">
            Password: <input type="password" name="password" id="password">
            email: <input type="email" name="email" id="email">
            <input type="submit" value="potvrdi">
        </form>
               
    </body>
   
</html>
 
<?php      
require 'baza.php';
$obj = new baza();

            if (!empty($_POST['login']) & !empty($_POST['password']) & !empty($_POST['email']) ) {
               $login=$_POST['login'];
               $password= $_POST['password'];
               $email= $_POST['email'];
                       
               $obj->addUser($login,$password,$email);
}
         ?>
