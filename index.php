<!DOCTYPE html>
<html>
<head>
	<title>Translation</title>
	<style >
	
		th{ background-color:grey;
	color:white;
	padding:3px;
	margin-top:8px;
	margin-left:1px;
	margin-right:2px;
		}
	</style>
	<link rel="shortcut icon"  href="icon.jfif">
	<script type="text/javascript">
			function translate(){
		//alert("Hello");
		const message="";
		document.getElementById("message").innerHTML=message;
	}
	</script>
</head>
<body onload="translate()"><center>	<p style="color: white;font-family: verdana;background-color:black;">Welcome to our translation page</p>
	 
		<form method="post">
			
 
			
			
 your request :<select name="word" id="val">
    <option value="0">-- choose a word below --</option>
    <?php
        include "connection1.php";  // Using database connection file here
        $records = mysqli_query($db, "SELECT * From languages");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['id'] ."'>" .$data['Variable'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
 
		
				
			<button name="KISWAHILI" value="1" style="color: white;border-color: white;border-style:dashed;padding: 12px;background-color:dimgray;">KISWAHILI</button>
			<button name="KINYARWANDA" value="2"  style="color: white;border-color: white;border-style:dashed;padding: 12px;background-color: dimgray;">KINYARWANDA</button>
			<button name="ENGLISH" value="3"  style="color: white;border-color: white;border-style:dashed;padding: 12px;background-color: dimgray;">ENGLISH</button>
			<button name="FRENCH" value="4"  style="color: white;border-color: white;border-style:dashed;padding: 12px;background-color: dimgray;" onchange="translate();">FRENCH</button>
		
     
                  <button  name="Translate" style="color: white;border-color: white;border-style:dashed;padding: 12px;background-color: transparent;">Translate</button>
               </form>
               <?php 
		 $result=[];
			$result[0] = " ";
		if(isset($_POST['word']))
		{
			 $word = $_REQUEST['word'];
			 if(($word == 0))
			 {
				 $result[0] = "choose valid data";

			 }
			 else {
				$query_select_languages= mysqli_query($db, "SELECT * FROM languages where id='$word'");
				if(mysqli_num_rows($query_select_languages) > 0)
				{
					$result[0] = "one element found";

					$data_re = $query_select_languages->fetch_array();

		if(isset($_POST['KISWAHILI'])){
			
				$result[0] = $data_re['Kiswahili'];
		}
			
			else if(isset($_POST['KINYARWANDA']))
			{
				$result[0] = $data_re['Kinyarwanda'];
			}	else if(isset($_POST['ENGLISH']))
			{
				$result[0] = $data_re['English'];
			}	else if(isset($_POST['FRENCH']))
			{
				$result[0] = $data_re['French'];
			}
			
				else{
					$result[0] = "no element found";
				}}

			 }

			}
	
				
			

		
?>    
<p id="message"></p>
	your answer: <label><?php echo $result[0];?></label><?php{}
		 

		 
		 ?>

			

</body>
</html>
