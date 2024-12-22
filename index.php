<!-- //Connected this page -->
<?php
     include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1>CRUD System</h1>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Create Student Data</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <!-- Bootstrap table  -->
    <div class="container">
      <h3>Students List :</h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Name</th>
      <th scope="col">Roll</th>
      <th scope="col">Class</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
         <?php
                     //'SELECT * FROM students';
            $query = 'SELECT * FROM students';
             //mysqli_query($connection, $query);
            //data dorar jonno variable again dhorte hobe
            $students = mysqli_query($connection, $query);

            //check for test
            //echo $students; 

            if($students){

              $serialNumber = 1;
              //while (mysqli_fetch_assoc($students))
              //variable
              while ($row = mysqli_fetch_assoc($students)){
              // $row['id']; 
              // $row['name']; 
              // $row['roll']; 
              // $row['class']; 
              // $row['phone']; 
              // $row['address']; 
              // $row['email']; 
          
              //browser a dekte chaile echo korte hobe
              // echo $row['id']; 
              // echo $row['name']; 
              // echo $row['roll']; 
              // echo $row['class']; 
              // echo $row['phone']; 
              // echo $row['address']; 
              // echo $row['email']; 

              //all data showning this system "do concatenation"
              // echo $row['id'].$row['name'].$row['roll'].$row['class'].$row['phone'].$row['address'].$row['email'];
              
              $id   = $row['id']; 
              $name = $row['name']; 
              $roll = $row['roll']; 
              $class = $row['class']; 
              $phone = $row['phone']; 
              $address = $row['address']; 
              $email =$row['email']; 
              //****table row k <tr> </tr>  loop ar vitore nia aste hobe loop working ar jonno.
              //html ar code <tr> </tr> php ar vitore ana hoyese tai <tr> </tr>  ar samne echo use korte hobe.
              //html php ar vitore string hisebe use hoi tai quotation hobe like as
                //echo '<tr> </tr>' hobe.
                
              // <tr>
              //     <th scope="row">1</th>
              //     <td>David</td>
              //     <td>1</td>
              //     <td>10</td>
              //     <td>01710123456</td>
              //     <td>New York, USA</td>
              //     <td>daviddata@gmail.com</td>
              //     <td>
              //     <a href="#" class="btn btn-primary"> Edit</a>
              //     <a href="#" class="btn btn-danger"> Delete</a>
              //     </td>
              //     </tr>
             
              //php ar code html echo <tr> </tr> a use korte chaile concatenition korte hobe
              //(html) string ar sathe (php)variable concatenition korte hobe 
            
              // echo  
            //   '<tr>
            //        <th scope="row">1</th>
            //        <td>David</td>
            //        <td>1</td>
            //        <td>10</td>
            //        <td>01710123456</td>
            //        <td>New York, USA</td>
            //        <td>daviddata@gmail.com</td>
            //       <td>
            //           <a href="#" class="btn btn-primary"> Edit</a>
            //           <a href="#" class="btn btn-danger"> Delete</a>
            //       </td>
            //   </tr>';

            echo  
              '<tr>
                  
                   <th scope="row">'.$serialNumber.'</th>
                   <td>'.$name.'</td>
                   <td>'.$class.'</td>
                   <td>'.$roll.'</td>
                   <td>'.$phone.'</td>
                   <td>'.$address.'</td>
                   <td>'.$email.'</td>
                  <td>
                     
                      <a href="edit.php?id='.$id.'" class="btn btn-primary"> Edit</a>
                      
                      <a href="delete.php?id='.$id.'" class="btn btn-danger"> Delete</a>
                  </td>
              </tr>';
              $serialNumber++;
            };
          };
         ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>David</td>
      <td>1</td>
      <td>10</td>
      <td>01710123456</td>
      <td>New York, USA</td>
      <td>daviddata@gmail.com</td>
      <td>
        <a href="#" class="btn btn-primary"> Edit</a>
        <a href="#" class="btn btn-danger"> Delete</a>
      </td>
    </tr> -->

    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
    </div>
      
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>