<?php include 'header.php'; ?>



<body>

  <div class="container ">
    <div class="row">

      <div class="col-lg-8 m-auto">

        <div class="text-center mt-3">
          <h2>INDEX</h2>

        </div>
        <div class="text-end"> <a class=" text-decoration-none btn-info rounded-pill p-2   shadow-sm bg-info" href="adduser.php">Add User</a></div>
        <table class="table table-bordered m-3 ">
          <tr class="text-center table-secondary">

            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>

          </tr>

          <?php
          require 'config.php';
          $rows = mysqli_query($conn, "SELECT * FROM users");
          $i = 1;
          ?>
          <?php foreach ($rows as $row) : ?>
            <tr table-light id=<?php echo $row["id"]; ?>>

              <td><?php echo $i++; ?></td>
              <td><?php echo $row["name"]; ?></td>
              <td><?php echo $row["email"]; ?></td>
              <td><?php echo $row["gender"]; ?></td>
              <td class="text-center">
                <a class="btn btn-success" href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a>
                <button class="btn btn-danger" type="button" onclick="submitData(<?php echo $row['id']; ?>);">Delete</button>
              </td>

            </tr>
          <?php endforeach; ?>


        </table>


      </div>

    </div>




    <?php require 'footer.php'; ?>
  </div>












  <!-- <table border = 1>
      <tr>
        <td>#</td>
        <td>Name</td>
        <td>Email</td>
        <td>Gender</td>
        <td>Action</td>
      </tr>
      <?php
      require 'config.php';
      $rows = mysqli_query($conn, "SELECT * FROM users");
      $i = 1;
      ?>
      <?php foreach ($rows as $row) : ?>
      <tr id = <?php echo $row["id"]; ?>>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td>
          <a href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a>
          <button type="button" onclick = "submitData(<?php echo $row['id']; ?>);">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </table> -->
  <br>