<!DOCTYPE html>
<html>

<head>
	<title>New User</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    	if 	($$_SESSION["level"] !="admin") {
   			echo "anda tidak dapat mengakses halaman ini";
   		    exit;   
   	 	}	
   	 	?>

   		<div>
   			<form action="create-user.php" method="POST">
   		    	<h1> tambah user</h1>
   				<table>
   		        	<tr>
   			     		<td>username</td>
   			     		<td><input type="text" name="username"></td>
   		     		</tr>
   		     		<tr>
   			    		<td>password</td>
   			    		<td><input type="password" name="password"></td>
   	    	 		</tr>
   			 		<tr>
   			            <td>level</td>
   			            <td>
   				            <select name="level">
   						  		<option>value="admin">admin</option>
   						     	<option>value="keuangan">keuangan</option>
   						        <option>value="logistik">logistik</option>
   				            </select>
   				        </td>
   			        </tr>
   			        <tr>	
   		                <td colspan="2">
   		   	                <button type="submit">TAMBAH</button>
   		   	                <button type="reset">RESET</button>
   		                </td>
                    </tr>
               </table>
            </form>
        </div>
    </body>

    </html>