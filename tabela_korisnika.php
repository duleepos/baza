<html>
    <head>
        <title>baza1</title>
    </head>
    
    <body>
        <a href="forma.php">forma</a>
        <h1> prikaz podataka iz baze</h1>
        <?php $connection =  mysql_connect('localhost', 'root', 'test');
               mysql_select_db('baza');
               $sql = "SELECT * FROM `tabela1` ORDER BY `id` asc";
               $result = mysql_query($sql);
               if (mysql_num_rows($result)>0) {
                   while($rs = mysql_fetch_assoc($result)){
                       $users[] = $rs;
                   }
               }
               ?>
        <table border="1">
        <?php
               foreach ($users as $user) {
                   
                   echo '<tr>';
                   echo '<td>id</td>';
                   echo '<td>login</td>';
                   echo '<td>password</td>';
                   echo '<td>email</td>';
                   echo '<td>'.'</td>';
                   echo '</tr>';
                   echo '<tr>';
                   echo '<td>'.$user['id'].'</td>';
                   echo '<td>'.$user['login'].'</td>';
                   echo '<td>'.$user['password'].'</td>';
                   echo '<td>'.$user['email'].'</td>';
                   echo '<td>'.'</td>';
                   echo '</tr>';
                   
                   
               }
               
               mysql_close($connection);
                       
                               
        ?>    
       
        </table>
    </body>
</html>
<?php      
