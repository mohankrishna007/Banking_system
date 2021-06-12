<!DOCTYPE html>
<html>
    <head>
        <title>
            Make Transaction 
        </title>

        <style>
            @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: #105469;
  font-family: 'Open Sans', sans-serif; 
}
table {
  background: #012B39;
  border-radius: 0.25em;
  border-collapse: collapse;
  margin: 1em;
  width: 60%;
}
th {
  border-bottom: 1px solid #364043;
  color: #E2B842;
  font-size: 0.85em;
  font-weight: 600;
  padding: 0.5em 1em;
  text-align: left;
}
td {
  color: #fff;
  font-weight: 400;
  padding: 0.65em 1em;
}

tbody tr {
  transition: background 0.25s ease;
}
tbody tr:hover {
  background: #014055;
}


        </style>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body style="margin-top: 5%;">
        <div class="section-title">
            <h2> ! List of all Users !</h2>
         </div>

         <center>
         <?php
         echo "<table>
            <thead>
              <tr>
                <th>ID
                <th>Username
                <th>A/c Number</th>
                <th>Gender
                <th>Balance
                <th>Option
            </thead>
            <tbody>";

            
            $db = mysqli_connect('localhost', 'id16980220_mohankrishna', '/D)h+B>6B<WoX2Gb');
            $er = mysqli_select_db($db, "id16980220_banking");
             $sql = "select * from customers";
             $result = mysqli_query($db, $sql);
             while($array = mysqli_fetch_array($result)) {
                 echo "<tr>";
                 echo "<td>".$array['id']."</td>";
                 echo "<td>".$array['username']."</td>";
                 echo "<td>".$array['acc_num']."</td>";
                 echo "<td>".$array['gender']."</td>";
                 echo "<td>".$array['balance']."</td>";
                 echo "<td> <a href='transact.php?id=".$array['id']."'>
                 <button type=\"button\" class=\"btn btn-outline-primary\"  data-mdb-ripple-color=\"dark\">
                 Send Funds </button></a></td>";
                 echo "</tr>";
              }
             

           echo "</tbody>
          </table>";
          ?>
        </center>
    </body>
</html>