<!-- This is what happens when you let a back end developer design and code the front end. -->
<html>
<body>
<form action="demo.php">
	<p>
	Number of tentacles:
	<select name="num_legs">
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
	</select>
	</p>
	<p>
	Joint angle 1:
	<select name="joint_1">
		<option value="-60">-60</option>
		<option value="-30">-30</option>
		<option value="0">0</option>
		<option value="30">30</option>
		<option value="60">60</option>
	</select>
	</p>
	<p>
	Joint angle 2:
	<select name="joint_2">
		<option value="-70">-70</option>
		<option value="-50">-50</option>
		<option value="-30">-30</option>
		<option value="-10">-10</option>
		<option value="0">0</option>
	</select>
	</p>
	<p>
	Flying:
	<select name="flying">
		<option value="none">none</option>
		<option value="fan">fan</option>
		<option value="fin">fin</option>
	</select>
	</p>
	<input type="submit" value="Render">
</form> 
<?php
  $num_legs = $_GET["num_legs"];
  $image_name = "limb-$num_legs.gif";
  
?>
	<img src="<?= $image_name ?>">
	<!-- <script src="https://embed.github.com/view/3d/skalnik/secret-bear-clip/master/stl/clip.stl?height=300&width=500"></script> -->
</body>
</html>