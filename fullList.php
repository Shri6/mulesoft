<?php
	session_start();
	require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Movie details</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	</head>
	<body>
	<div>
    <button><a href="index.php">Go back</a></button>
	</div>
			<div class="container">
				<?php
                    $sql = "SELECT * FROM movie";
					$result = mysqli_query($conn, $sql);
				?>
				<div class="row">
				<?php
					while($roww = $result->fetch_array()):
				?>
				<div class="row">
        			<div class="column">
            			<div class="card">
               				<div class="container">
							   <section>
                                    <?php echo "Movie name : ".$roww['mov_name'].'';?><br>
                                    <?php echo "Actor name : ".$roww['act_name'].'';?><br>
                                    <?php echo "Actress name : ".$roww['actrs_name'].'';?><br>
                                    <?php echo "Year : ".$roww['years'].'';?><br>
								    <?php echo "Director number : ".$roww['dir_name'].'';?><br>
								</section>
								<br>
                			</div>
            			</div>
        			</div>
				</div>
					<?php endwhile;	?>
			</div>
	</body>
</html>
