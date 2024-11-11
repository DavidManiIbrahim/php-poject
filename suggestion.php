
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suggestion Form</title>

  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

body {
  overflow: hidden;
}

.container {
  width: 60%;
  height: 50%;
  /* border: 1px solid; */
  /* max-width: 600px; */
  /* background-color: #fff; */
  /* box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); */
  padding: 50px;
  top: 50px;
  left: 250px;
  border-radius: 10px;
  position: relative;
}

.circle{
  position: absolute;
  left: 0;
  width: 25%;
  top: 0;
  /* border: 1px solid; */
}

h1 {
  color: #4c207b;
  font-size: 30px;
  margin-bottom: 10px;
}

h1 span {
  color: #a459c4;
}

p {
  color: #666;
  font-size: 15px;
  line-height: 1.5;
  margin-bottom: 20px;
}

label {
  font-weight: bold;
  color: #333;
  display: block;
  margin-top: 20px;
  margin-bottom: 5px;
}

.input-box {
  width: 100%;
  padding: 10px;
  font-size: 20px;
  border: 1px dashed #a459c4;
  border-radius: 5px;
  outline: none;
  resize: none;
  color: #666;
}

.input-box:focus {
  border-color: #922ca3;
}

.btn {
  display: inline-block;
  padding: 20px;
  font-size: 16px;
  color: #fff;
  background-color: #a459c4;
  border: none;
  border-radius: 5px;
  text-decoration: none;
  cursor: pointer;
  margin-top: 25px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #922ca3;
}

.error {
  color: red;
  font-size: 15px;
  /* margin-top: 5px; */
  position: absolute;
  right: 67%;
  top: 68%;
}

#success{
  color: #12be6e;
  position: absolute;
  right: 61%;
  top: 68%;
}
  </style>
</head>
<body>
  <img class="circle" src="./src/assets/Ellipse 1.png" alt="">
  <div class="container">
    <h1>Share Your <span>Suggestion</span></h1>
    <p>We’d love to hear from you! Please provide as much detail as you’d like.</p>
    
    <form id="suggestionForm" method="post" onsubmit="return validateForm()" action="suggestion.php">
      <label for="title">Title: (Optional)</label>
      <input type="text" name="title" id="title" class="input-box" placeholder="Brief title for your suggestion">
      <div id="titleError" class="error"></div>
      
      <label for="description">Description:</label>
      <textarea id="description" name="description" class="input-box" rows="5" placeholder="Describe your suggestion here..."></textarea>
      <div id="descriptionError" class="error"></div>
      <p  id="success"></p>

      <button type="submit" class="btn">Submit Suggestion</button>
    </form>
  </div>

</body>
</html>


<?php 

// include("suggestion.html");

require_once("config.php");

$title = $_POST["title"];
$description = $_POST["description"];
// echo $title;


if (empty($title) || empty($description)) {
    echo "<p class='error'>Please fill in all fields.</p>";
    exit;
}else{

$query = "INSERT INTO `suggestions` (`id`,`title`,`suggestion`) VALUES (NULL,'$title','$description')";
$result =  mysqli_query($conn, $query);

}


if ($result) {
    echo "<p id='success'>Suggestion Submitted successful!</p>";
    exit;
}else{
    echo "<p id='error'>Error please try again.</p>";
}






