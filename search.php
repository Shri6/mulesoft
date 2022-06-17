<?php
    session_start();

    $aname1='HAHAHA';
    
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$aname1 = dataFilter($_POST['aname']);
}

require 'db.php';

$sql = "SELECT * FROM movie WHERE act_name='$aname1'";
$result = mysqli_query($conn, $sql);

function dataFilter($data)
{
	$data = trim($data);
 	$data = stripslashes($data);
	$data = htmlspecialchars($data);
  	return $data;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="title">Enter actor name</div>
        <div class="content">
            <form method="post" action="search.php">
            <br>
                <div class="user-details">
                    <div class="input-box">
                        <input type="text" name="aname" id="aname" value="" placeholder="Name the actor name" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="search">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
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
                			</div>
            			</div>
        			</div>
				</div>
			<?php endwhile;	?>
		</div>
        <div>
            <button><a href="index.php">Go back</a></button>
        </div>
    </div>
</body>
</html>
