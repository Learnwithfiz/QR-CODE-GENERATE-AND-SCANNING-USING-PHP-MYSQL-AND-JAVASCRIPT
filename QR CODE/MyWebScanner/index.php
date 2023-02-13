<?php

  $connect = mysqli_connect("localhost","root","","myscanner");
//   if($connect){
//       echo "<script>alert('database connect success')</script>";
//   }else{
//     echo "<script>alert('database connect failed')</script>";  
//   }
    
    if(isset($_POST['text'])){
        $text = $_POST['text'];

        $sql = "INSERT INTO student_scanner (Student_id,Time) 
        VALUES('$text',NOW())";
        $query = mysqli_query($connect,$sql);

        if($query){
            echo "<script>alert('send data success')</script>";
        }else{
          echo "<script>alert('send data failed')</script>";  
        }
    }
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <title>Document</title>
    <style>
        table{
            border: 1px solid white;
            float:left;
            margin-left:100px;
            border-collapse:collapse;
            background:blueviolet;
            color:white;
            width:400px;
            height:auto;
            text-align:center;
           
        }
        th{
            border:1px solid white;
            padding:15px;
        }
        td{
            border:1px solid white;
            padding:10px;
           
        }
        video{
            float:left;
            margin-left: 100px;
        }
        input{
            margin-left: 100px;
            padding:13px;
        }
        h1{
            margin-left: 160px;
            padding-left: 300px;
        }
    </style>
</head>
<body>
    <h2>QR CODE SCANNING CAMERA</h2>
    <video width="300" height="300" id="MyCameraOpen"></video>
   <br><br>
       <form action=""method="POST">
          <input type="text" placeholder="your code is "  name="text" id="text">
       </form>
     

       <h1>Fetch Data student table</h1>

       <table>
           <th>sl</th>
           <th>Student Id </th>
           <th>Time</th>

           <?php
               $select = "SELECT * FROM student_scanner";
               $qr = mysqli_query($connect,$select);
               $i=1;
               while($row = mysqli_fetch_array($qr)){?>
   
                <tr>
                    <td><?php echo $row['sl'] ?></td>
                    <td><?php echo $row['Student_id'] ?></td>
                    <td><?php echo $row['Time'] ?></td>
                </tr>

     <?php    $i++ ; }

            ?> 
       </table>
<br><br><br><br><br><br><br><br>
    <script>
        // step 1 start camera section
         var video = document.getElementById("MyCameraOpen");
         var text = document.getElementById("text");

       var scanner =   new Instascan.Scanner({
             video : video
         });
         Instascan.Camera.getCameras()
         .then(function(Our_Camera){
             if(Our_Camera.length > 0 ){
                scanner.start(Our_Camera[0]);  
             }else{
                 alert("camera failed");
             }
         })
         .catch(function(error){
             console.log("error please try")
         })
    
        

        // input text section step 2
        scanner.addListener('scan',function(input_value){
               text.value=input_value;

               document.forms[0].submit();

              
            })


    </script>
</body>
</html>