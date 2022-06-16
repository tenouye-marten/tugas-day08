<?php include 'header.php'; ?>

<body>


  <div class="container ">
 

    <div class="card-body ">
  
      <div class="row">
      
        <div class="col-lg-6 m-auto border border-3 border-light shadow p-2">
        <h2 class="text-center">Edit User</h2>
        <form action="" method="POST" autocomplete="off">
          <?php
          require 'config.php';
          $id = $_GET["id"];
          $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
          ?>
          <div class="mb-3">
            <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" value="<?php echo $rows['name']; ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="email" value="<?php echo $rows['email']; ?>">
          </div>

          <div class="mb-3">
            <label for="firstName" class="form-label">Gender</label>
            <select class="form-select" id="gender" aria-label="Default select example">
              <option selected>PILIH GENDER</option>
              <option value="male" <?php if ($rows["gender"] == "Male") echo "selected"; ?>>Male</option>
              <option value="famale" <?php if ($rows["gender"] == "Female") echo "selected"; ?>>Female</option>

            </select>
          </div>
          <div class="text-end">
              <button type="button" class="btn btn-primary " onclick="submitData('edit');">Edit</button>

              <a href="index.php" type="" class="text-decoration-none text-light btn btn-success">Kembali</a>

            </div>

          <!-- <button type="button" class="btn btn-primary" onclick="submitData('edit');">Edit</button> -->
        </form>

        </div>
      </div>
    </div>
  </div>

















  <!-- 
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <form action="" method="POST" autocomplete="off">
          <?php
          require 'config.php';
          $id = $_GET["id"];
          $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
          ?>
          <div class="mb-3">
            <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" value="<?php echo $rows['name']; ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="email" value="<?php echo $rows['email']; ?>">
          </div>

          <div class="mb-3">
            <label for="firstName" class="form-label">Gender</label>
            <select class="form-select" id="gender" aria-label="Default select example">
              <option selected>PILIH GENDER</option>
              <option value="male" <?php if ($rows["gender"] == "Male") echo "selected"; ?>>Male</option>
              <option value="famale" <?php if ($rows["gender"] == "Female") echo "selected"; ?>>Female</option>

            </select>
          </div>

          <button type="button" class="btn btn-primary" onclick="submitData('edit');">Edit</button>
        </form>
        <div>
                <a href="index.php" class="btn btn-dark bg-light text-dark">Kembali</a>
            </div>
      </div>
    </div>
  </div> -->

  <!-- <form autocomplete="off" action="" method="post">
  
      <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
      <label for="">Name</label>
      <input type="text" id="name" value="<?php echo $rows['name']; ?>"> <br>
      <label for="">Email</label>
      <input type="text" id="email" value="<?php echo $rows['email']; ?>"> <br>
      <label for="">Gender</label>
      <select class="" id="gender">
        <option value="Male" <?php if ($rows["gender"] == "Male") echo "selected"; ?> >Male</option>
        <option value="Female" <?php if ($rows["gender"] == "Female") echo "selected"; ?> >Female</option>
      </select> <br>
      <button type="button" onclick="submitData('edit');">Edit</button>
    </form>
    <br>
    <a href="index.php">Go To Index</a> -->


  <?php require 'footer.php'; ?>