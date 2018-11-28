<?php
/**
 * @Author: ido_alit
 * @Date:   2015-11-15 13:10:58
 * @Last Modified by:   ido_alit
 * @Last Modified time: 2015-11-15 18:50:37
 */

?>

<div class="col-sm-8">
	<?php 

	if(( isset($_GET['search']) || isset($_GET['title']) || isset($_GET['keywords']) || isset($_GET['p']))) {
		if (isset($_GET['search'])) {
			/*
			=========================
			result search
			=========================
			*/
			include 'search_result_info.php';
			
			echo '<div class="slims-container slims-card slims-card--default slims-biblio-list">';
			echo $main_content;
			echo '</div>';
		} else {
			if ($_GET['p'] === 'member') {
				// hack member layout
				echo '<div>';
			}

			include 'other-page.php';
		}
	} else {
		/*
		=========================
		home page
		=========================
		*/

			include 'new-books.php';
	}

	?>
</div>