<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #E3F2FD;">
    <div class="container">

    <h2 class="text-center my-2">แบบฟอร์มบันทึกข้อมูล</h2>
    <form action="insertData.php" method="POST">

        <div class="form-group">
            <label for="fame">ชื่อ</label>
            <input type="text" name="fname" id="" class="form-control">
        </div>
        <div class="form-grouo">
            <label for="lname">นามสกุล</label>
            <input type="text" name="lname" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">เพศ</label>
            <input type="radio" name="gender" value="male">ชาย
            <input type="radio" name="gender" value="female">หญิง
        </div>
        <div class="form-group">
            <label for="">ทักษะการเขียนโปรแกรม</label>.<br>
            <input type="checkbox" name="skill[]" id="" value="python">python .<br>  // [] array
            <input type="checkbox" name="skill[]" id=""value="java">java.<br>
            <input type="checkbox" name="skill[]" id=""value="c++">c++.<br>
            <input type="checkbox" name="skill[]" id=""value="c#">c#.<br>
            <input type="checkbox" name="skill[]" id=""value="php">php.<br>
            <input type="checkbox" name="skill[]" id=""value="html">html.<br>
            <input type="checkbox" name="skill[]" id=""value="css">css.<br>
        </div>


        <input type="submit" value="บันทึกข้อมูล" class="btn btn-success my-1 ">
        <input type="reset" value="ล้างข้อมูล" class="btn btn-danger my-1 ">
        
        <a href="index_2.php">index</a>

        <?php 
   
        
        ?>

    </div>
    

    </form>
 
    
</body>
</html>