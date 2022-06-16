<?php include 'header.php'; ?>

<body class="">



  <div class="container ">

    <div class="card-body ">
      <div class="row">

        <div class="col-lg-6 m-auto border border-3 border-light shadow p-2">
          <h2 class="text-center">Add User</h2>
          <form action="" method="POST" autocomplete="off">
            <div class="mb-3">
              <label for="firstName" class="form-label">Name</label>
              <input type="text" class="form-control" id="name">
            </div>

            <div class="mb-3">
              <label for="firstName" class="form-label">EMAIL</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
              <label for="firstName" class="form-label">Gender</label>
              <select class="form-select" id="gender" aria-label="Default select example">
                <option selected>PILIH</option>
                <option value="male">Male</option>
                <option value="famale">Famale</option>

              </select>
            </div>

            <div class="text-end">
              <button type="button" class="btn btn-primary " onclick="submitData('insert');">Tambah</button>

              <a href="index.php" type="" class="text-decoration-none text-light btn btn-success">Kembali</a>

            </div>

          </form>

        </div>
      </div>
    </div>




    <!-- <div class="container">
    <h2>Add User</h2>
    <form autocomplete="off" action="" method="post">
      <label for="">Name</label>
      <input type="text" id="name" value=""> <br>
      <label for="">Email</label>
      <input type="text" id="email" value=""> <br>
      <label for="">Gender</label>
      <select class="" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select> <br>
      <button type="button" onclick="submitData('insert');">Insert</button>
    </form> -->


    <?php require 'footer.php'; ?>