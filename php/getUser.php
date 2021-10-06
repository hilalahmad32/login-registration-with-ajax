<?php 

include "config.php";
session_start();
if(isset($_SESSION["id"])){
    $userid=$_SESSION["id"];

    $sql="SELECT * FROM users WHERE id='{$userid}'";
    $run_sql=mysqli_query($conn,$sql);
    $output="";
    if(mysqli_num_rows($run_sql) > 0){
        $output .="<div class='table-responsive'>
        <table class='table table-bordered'>
            <thead>
                <tr class='bg-dark text-white'>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Logout</th>
                </tr>
            </thead>
            <tbody>";
            while($row=mysqli_fetch_assoc($run_sql)){
               $output .=" <tr>
                    <td>{$row["id"]}</td>
                    <td>{$row["username"]}</td>
                    <td>{$row["email"]}</td>
                    <td> <button id='logout' class='btn btn-danger'>Logout</button></td>
                </tr>";
            }
           $output .="</tbody>
        </table>
    </div>";

    echo $output;
    }
}


?>