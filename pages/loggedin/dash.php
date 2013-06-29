<?php
	echo'<div class="sitebody_leftcolumn">
			<div class="sitebody_sectionheader">
						Current Activities
					</div>
					<div class="sectionheader_addnew">
						Create
					</div>
					<div class="clear">
					</div>



						<div class="sitebody_itemblock">
							<div class="itemblock_title">
								Moby Dick Discussion
							</div>
							<div class="itemblock_class">
								<a href="index.php?p=class">
									American Literature
								</a>
							</div>
							<div class="itemblock_middletext">
								<span class="itemblock_strong">Question #3:</span> How is Ishmael\'s obsession with the white whale symbolic?
							</div>
							<div class="itemblock_bottompanel">
								<div class="itemblock_block1">
									<div class="itemblock_innercircle">
										3
									</div>
								</div>
								<div class="itemblock_block2">
									<div class="itemblock_innersquare" id="pie1">
										
									</div>
								</div>
								<div class="itemblock_block3">
									<div class="block3_leftcircle">
									</div>
									<div class="block3_rightcircle">
									</div>
									<div class="clear"></div>
									<div class="block3_lowline"></div>
									<div class="block3_cirque"></div>
									<div class="block3_slidefill">
										<div class="block3_fill" style="width: 72%">
										</div>
									</div>
								</div>
								<div class="clear">
								</div>
							</div>
						</div>



						<div class="sitebody_itemblock">
							<div class="itemblock_title">
								Movie Review Wall
							</div>
							<div class="itemblock_class">
								<a href="index.php?p=class">
									English 1
								</a>
							</div>
							<div class="itemblock_middletext">
								<span class="itemblock_strong">Assignment #1:</span> Review one of your favorite movies, using 5 vocabulary words from Unit 6. At least 200 words.
							</div>
							<div class="itemblock_bottompanel">
								<div class="itemblock_block1">
									<div class="itemblock_innercircle">
										8
									</div>
								</div>
								<div class="itemblock_block2">
									<div class="itemblock_innersquare" id="pie2">
									</div>
								</div>
								<div class="itemblock_block3">
									<div class="block3_leftcircle">
									</div>
									<div class="block3_rightcircle">
									</div>
									<div class="clear"></div>
									<div class="block3_lowline"></div>
									<div class="block3_cirque"></div>
									<div class="block3_slidefill">
										<div class="block3_fill" style="width: 27%">
										</div>
									</div>
								</div>
								<div class="clear">
								</div>
							</div>
						</div>






						

					
				</div>';
$link = mysqli_connect($sqlhostname, $sqlusername , $sqlpassword, 'mm_classes');
$userid = $_SESSION["id"];
if ($link) {
				echo '<div class="sitebody_rightcolumn">
					
					<div class="sitebody_sectionheader">
						Active Classes
					</div>
					<div class="sectionheader_addnew">
						<a href="index.php?p=createclass">
							Create
						</a>
					</div>
					<div class="clear">
					</div>';
	$active_classes = mysqli_query($link, "SELECT * FROM main WHERE teachid='$userid' AND active = 1 ORDER BY name ASC");
	while($active = mysqli_fetch_array($active_classes, MYSQLI_ASSOC)) {

					echo '<div class="classrowfront">
						<div class="classrow_name_front">
							<a href="index.php?p=class&id=' . $active['id'] . '">
								' . $active['name'] . '
							</a>
						</div>
						<div class="classrow_number_front">
							<span class="classrow_icon">A</span>23
						</div>
						<div class="clear">
						</div>
					</div>';
	}


				echo '</div>';
}

				echo '<div class="clear">
						</div>';

						echo '<script src="assets/jquery-1.9.1.min.js"></script>';
?>