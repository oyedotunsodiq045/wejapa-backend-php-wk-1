<?php 
 $name = $_POST['name'];
 $track = $_POST['track'];
if(isset($_POST['submit'])){
    echo "<body style='background-color:skyblue'>";
    echo "<h3><i> Hello $name , </i></h3>";
    echo "<h3><i>Welcome to $track track at Wejapa Internships </i><h3>";
    echo "<h3><i>I look forward to us learning from each other and working together</i></h3>";
    
}
?>