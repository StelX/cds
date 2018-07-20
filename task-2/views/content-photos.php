<table>
	<tr>
		<?php
        $i = 0;
		$album = new Album($current_album);
		echo '
		<div class="w3-container w3-center">
			<h2>Фотографии альбома</h2>
		</div>
		<div class="w3-row-padding w3-margin-top">
		';
		foreach($photos as $photo=>$value){
		    $photo_ref = $album->GetItemUrl($photo);
			echo '
			<td>
				<div class="w3-container">
					<div class="w3-card-4">
						<a href="'.$photo_ref.'" class="lightview"> 
							<img src="'.$photo_ref.'" style="width:20em; height: 20em; padding: 1em" class="w3-hover-opacity">
						</a>
					</div>
				</div>
			</td>
			';
			$i++; 
		}
		echo '</div>';
		?>
	</tr>
</table>
<br/>
<br/>