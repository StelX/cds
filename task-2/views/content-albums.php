		<?php $i = 0;
		echo '
		<div class="w3-container w3-center">
			<h2>Альбомы</h2>
		</div>
		<div class="w3-row-padding w3-margin-top">
		';
		foreach($albums as $album=>$value){
			echo '
				<div class="w3-quarter">
					<div class="w3-card-4" style="width:100%">
						<a href="album.php?name='.$value.'">
							<img src="'.((new Gallery())->GetCoverUrl($value)).'" style="width:100%" class="w3-hover-opacity"></a>
						<div class="w3-container">
							<p>'.$albums[$album].'</p>
						</div>
					</div>
				</div>
			';
			$i++; 
		} echo '</div>';
		?>