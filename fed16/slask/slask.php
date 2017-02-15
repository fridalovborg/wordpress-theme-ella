<?php

// SLASKIGA SMASKIGA SAKER 

?>

<!-- GRIDSYSTEM, 3 ST -->

<div class="grid">
    <div class="grid_cell"><div class="grid_content">GRID 1</div></div>
    <div class="grid_cell"><div class="grid_content">GRID 2</div></div>
    <div class="grid_cell"><div class="grid_content">GRID 3</div></div>
</div>



<?php

// post till index.php

if(have_posts()) {
	while(have_posts()) {
		the_post(); // hämtar ut inlägget som ett objekt
		// måste vara med för att man ej ska hamna i en evighetsloop
		// samt man ska kunna skriva ut egenskaper som hör till det
		// inlgget
		
		echo "<h3>";
		the_title();
		echo "</h3>";
		the_excerpt();
		?>
		<a href="<?php the_permalink(); ?>"> Läs mer</a>
		<i>index.php</i>
 	<?php
	}
}
?>