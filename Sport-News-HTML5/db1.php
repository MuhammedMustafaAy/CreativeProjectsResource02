<?php
     
     //connect to server
    $link=mysqli_connect('localhost' , 'root' , '');

    //select database
    mysqli_select_db($link , 'db2023');

     //database queries(sorgular): insert
    //mysqli_query($link,"INSERT INTO Student VALUES('Ahmet','123')");

    //update
    //mysqli_query($link,"UPDATE Student SET name='Meryem' WHERE name='Yusuf' ");

     //delete
   //mysqli_query($link, "DELETE FROM Student WHERE name='Meryem' ");

     //$RES=mysqli_query($link, " SELECT * FROM Student WHERE name='Ahmet' ");

    //$RES=mysqli_query($link, " SELECT * FROM Student");

    //while($RES1=mysqli_fetch_array($RES)){
    
    //echo $RES1['Name'];
    //echo $RES1['Password'];
    //echo "<br>";

    //}
   



//<!-- <!DOCTYPE html>
//<html>
//<head>
	//<meta charset="utf-8">
	//<meta name="viewport" content="width=device-width, initial-scale=1">
	//<title></title>
//</head>
//<body>

	//<form>
		//<label for="email">Your Email:</label>
		//<input type="email" name="email" required>
	//<br>

	//label for="password">Your Password:</label>
//<input type="password" name="password" required>
//<br>

//<label for="x">Your Opinion:</label><br>
//<textarea name="x" rows="10" cols="50"></textarea><br>
        
 //     <label for="tel">Your Phone Number:</label>
   //   <input type="tel" name="tel">
//      <br>

  //    <label for="date">Date:</label>
    //  <input type="date" name="date">
   //   <br>

  //    <label for="search">Search</label>
    //  <input type="search" name="search">
      //<br>

   //   <input type="checkbox" name="bayan"><label for="bayan">Bayan</label><br>
   //   <input type="checkbox" name="bay"><label for="bay">Bay</label><br>

    //  <input type="radio" name="gender"><label for="gender">BAYAN</label><br>
    //  <input type="radio" name="gender"><label for="gender">BAY</label><br>

    //  <label for="country">In which country do you live?</label><br>
     // <select name="country">
      //	<option value="france">France</option>
      //	<option value="spain">Spain</option>
       //<option value="italy">Italy</option>
       //<option value="canada">Canada</option>
 // </select>
///form>

//body>
//html> 