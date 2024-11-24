<?php
	include "header.php";

$logged_in = false;
//existance of a session indicates user login
if(isset($_SESSION['email'])){
	$logged_in = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment Maintenance Tracker</title>
    <link rel="stylesheet" href = "index-styles.css">
</head>
<body>
        <div class="categories">
	    <div class="category" onclick="<?php if($logged_in) { ?>location.href='equipment.php?category=1&equipment_id=0';<?php } else { ?>location.href='login.php';<?php } ?>" style="cursor:pointer;" >
		 <img src="https://imgs.search.brave.com/YYe_madbOeAVwQpBW-CjnlE37eRdIF6S_Ep_5xcR1KY/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJhY2Nlc3Mu/Y29tL2Z1bGwvMTAw/NjU1MjUuanBn" alt="Heavy Machineries">
		<div class = "image-text">Heavy Machineries</div>
	   </div>
	   <div class="category"  onclick="<?php if($logged_in) {  ?>location.href='equipment.php?category=2&equipment_id=0 ';<?php } else { ?>location.href='login.php';<?php } ?>" style="cursor:pointer;" >
		 <img src="https://imgs.search.brave.com/8DP7nw6wDZAmkHXWMDSdTEwur8STr0FpHEbCPj9I3ag/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9wbHVz/LnVuc3BsYXNoLmNv/bS9wcmVtaXVtX3Bo/b3RvLTE2NjE5NjQx/OTk0MzAtM2U0OWM1/NzViMGIwP3E9ODAm/dz0xMDAwJmF1dG89/Zm9ybWF0JmZpdD1j/cm9wJml4bGliPXJi/LTQuMC4zJml4aWQ9/TTN3eE1qQTNmREI4/TUh4elpXRnlZMmg4/TVROOGZHTnZZV3ds/TWpCdGFXNWxmR1Z1/ZkRCOGZEQjhmSHd3.jpeg" alt="Vehicles">
		<div class = "image-text"  >Vehicles</div>
	   </div>	 
            <div class="category">
		 <img src="https://imgs.search.brave.com/v9NzFVAn7KLClXBHu5KSNPgugzPB84LYVoq-IjXA8s0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/Zmx5YWJpbGl0eS5j/b20vaHMtZnMvaHVi/ZnMvbWluaW5nLXRv/b2xzLWZseWFiaWxp/dHktMy5qcGc_d2lk/dGg9ODQ2JmhlaWdo/dD01NjQmbmFtZT1t/aW5pbmctdG9vbHMt/Zmx5YWJpbGl0eS0z/LmpwZw" alt="Electrical Equipments">
		<div class = "image-text">Electrical Equipments</div>
	   </div>	            
	   <div class="category">
		 <img src="https://imgs.search.brave.com/35CZSKkRByGRb_4_Uo92tpP8IUOJYltz_N4sL3qxIYc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvNDgy/MTcyNDk5L3Bob3Rv/L2FuY2llbnQtZGVl/cC1jb2FsLXdvcmtp/bmdzLWluLXN1cmZh/Y2UtY29hbC1taW5l/LmpwZz9zPTYxMng2/MTImdz0wJms9MjAm/Yz1Bc0t2WHhMa2JZ/ak5jR1J2cWo1dGpH/dkE1ZzZCc3BLWTU0/alJMQzY1eWVNPQ" alt="Product Equipments">
		<div class = "image-text">Product Equipments</div>
	   </div>
	   <div class="category">
		 <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/FIRST_SHIFT_OF_MINERS_AT_THE_VIRGINIA-POCAHONTAS_COAL_COMPANY_MINE_%5E4_NEAR_RICHLANDS%2C_VIRGINIA%2C_LEAVING_THE_ELEVATOR...._-_NARA_-_556393_tweaked.jpg/440px-FIRST_SHIFT_OF_MINERS_AT_THE_VIRGINIA-POCAHONTAS_COAL_COMPANY_MINE_%5E4_NEAR_RICHLANDS%2C_VIRGINIA%2C_LEAVING_THE_ELEVATOR...._-_NARA_-_556393_tweaked.jpg">
		<div class = "image-text">Tools and Instruments</div>
	   </div>
	   <div class="category">
		 <img src="https://imgs.search.brave.com/cv8R6UNCLcmBEyMAFIHeAzmsS6b-04S4iiTxW9jVDHU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/bmNtLm9yZy51ay9h/cHAvdXBsb2Fkcy8y/MDIxLzA1L2JveS11/bmRlcmdyb3VuZC13/ZWItMTAyNHg2ODQu/anBn" alt="Safety Equipments">
		<div class = "image-text">Safety Equipments</div>
	   </div>
        </div>
</body>
</html>
