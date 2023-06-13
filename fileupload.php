<!DOCTYPE html>
<html>
<head>
    <style>
    .container{
        border: 2px solid black;
        border-radius: 10px;
        width: 25%;
        display: flex;
        justify-content: center;
        align-items:center;
        margin: 325px 500px;
        padding: 5px;
    }
    #btn{
        background: blue;
        border: 2px solid black;
        border-radius: 5px ;
        padding: 5px;
        color: white;
    }

    </style>
</head>

<body>
<div class="container">
<form action="lab2_fileupload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <hr>
  <br>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
  <br>
  <button id="btn" type="submit" name = "submit">Upload</button>
</form>
</div>

</body>
</html>