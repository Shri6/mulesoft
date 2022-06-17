<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
</head>
<body>
<div class="container">
    <div class="content">
      <form method="post" action="insert/data.php">
        <br>
        <div class="user-details">
            <div class="input-box">
                <input type="text" name="mname" id="mname" value="" placeholder="Movie name" required>
             </div>
             <div class="input-box">
                <input type="text" name="aname" id="aname" value="" placeholder="Actor name" required>
             </div>
             <div class="input-box">
                <input type="text" name="asname" id="asname" value="" placeholder="Actress name" required>
             </div>
             <div class="input-box">
                <input type="text" name="myear" id="myear" value="" placeholder="Enter year" required>
             </div>
             <div class="input-box">
                <input type="text" name="dname" id="dname" value="" placeholder="Enter Director name" required>
             </div>
        </div>
        <div class="button">
          <input type="submit" value="insert">
        </div>
      </form>
    </div>
</div>
<div>
    <button><a href="index.php">Go back</a></button>
</div>
</body>
</html>
