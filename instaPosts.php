<?php
    /*
     $conn = mysqli_connect("sql213.epizy.com" , "epiz_27833425" , "hXKo2QzRJrBS" , "epiz_27833425_insta");
     $result = mysqli_query($conn , "SELECT * FROM insta_links");
      
     $TargetPost="";
     if(isset($_POST["TargetPost"])){
        $TargetPost = $_POST["TargetPost"];
    }
    if(isset($_POST["addPost"])){
    if($TargetPost!=""){    
    mysqli_query($conn ,"INSERT INTO  insta_links values(NULL ,'$TargetPost')");
    header("location:instaPosts.php");
    }else{
        echo '<script>alert("Please Insert Invalid Link");</script>';
        header("location:instaPosts.php");
    }
    header("location:instaPosts.php");
    }
    if(isset($_POST["DeletePost"])){
        mysqli_query($conn ,"DELETE FROM insta_links");
        header("location:instaPosts.php");
        }
        */
?>

<html>
<head>
<title>Instagram Links</title>
<style>
    .container {      
        margin-top: 20px;
        width: 50%;
        width: 100%;
    }
    .container div{
      display: inline-block;
    }
    .container input{
        margin: 10px;
        padding: 5 25px;
    }
    
    form{
        border:1px solid black;
        width: 75%;
        margin: auto;
        height: 100px;
    }
    #textpost{
        width: 60%;
        height: 30px;
        margin: 35px;
        margin-left: 150px;
        font-size: 18px;
    }
    #addPost{
        margin-right: 5px;
        padding: 5 25px
    }
    #DeletePosts{
        margin-right: 5px;
        padding: 5 25px
    }
</style>
</head>
<body>
    <form method="post">
    <div>
    <input type="text" name="TargetPost" id="textpost" placeholder="Paste Your Post Link Here Then Press Add Post Button" >
    <button id="addPost" name="addPost">Add</button>
    <button id="DeletePosts" name="DeletePost">Delete All</button>
    </div>
    </form>    
<div class="container">
   <div><a href="https://www.instagram.com/p/CNcICalBal4/"><input class="post1" value="Post 1" type="button"></a></div>
   <div><a href="https://www.instagram.com/p/CNcICalBal4/"><input class="post1" value="Post 2" type="button"></a></div>
   <div><a href="https://www.instagram.com/p/CNcICalBal4/"><input class="post1" value="Post 3" type="button"></a></div>
   <div><a href="https://www.instagram.com/p/CNcICalBal4/"><input class="post1" value="Post 4" type="button"></a></div>
   <div><a href="https://www.instagram.com/p/CNcICalBal4/"><input class="post1" value="Post 5" type="button"></a></div>
   <div><a href="https://www.facebook.com/efasocial/photos/a.749373931885716/1851607724995659/"><input class="post1" value="Post 6" type="button"></a></div>
   <div><a href="https://www.facebook.com/ONtv/photos/a.172288956114578/4407090879301010/"><input class="post1" value="Post 7" type="button"></a></div>
   <div><a href="https://www.facebook.com/Zamalkawy/photos/a.1854127881389314/2181319335336832/"><input class="post1" value="Post 8" type="button"></a></div>
   <div><a href="https://www.facebook.com/554913841580299/photos/a.563901334014883/975674259504253/"><input class="post1" value="Post 9" type="button"></a></div>
   <div><a href="https://www.facebook.com/Zamalkawy/photos/a.1854127881389314/2179554242180008/"><input class="post1" value="Post 10" type="button"></a></div>
  
 
 
 

</div>
</body>
</html>
