<?php /*

Readium Theme
-------------

drawer.php

Drawer template file	

*/
?>

			<div id="drawer">
				<div id="drawer-content">
					<nav id="access" role="navigation">
						<h2 class="assistive-text">Main menu</h2>
						<?php
							$menu_args = array(
								'theme_location' => 'primary',
								'container' => false,
								'menu_class' => 'menu',
							);
						?>
						<?php wp_nav_menu($menu_args); ?>
					</nav>

					<?php get_sidebar('drawer'); ?>
				</div>
			</div> <!-- close #drawer -->