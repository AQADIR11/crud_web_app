<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <title>Document</title>
  <style>
    .error {
      color: red;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php if (!isset($_SESSION['login'])) { ?>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Login<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?signup=1">SignUp</a>
          </li>


        <?php
        }?>

          <?php
          if (isset($_SESSION['login']) && $_SESSION['login'] == 'super admin' or $_SESSION['login'] == 'admin') { ?>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php?user">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="users.php">Add User</a>
            </li>

          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        <?php 
      } 
      if(isset($_SESSION['login']) && $_SESSION['login'] == 'super admin'){
        echo '<li class="nav-item"><p class="nav-link">Super Admin</p></li>';
      }else if(isset($_SESSION['login']) && $_SESSION['login'] == 'admin'){
        echo '<li class="nav-item"><p class="nav-link">Admin</p></li>';
      }else if(isset($_SESSION['login']) && $_SESSION['login'] == 'user'){
        echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li><li class="nav-item"><p class="nav-link">User</p></li>';
      }
      ?>

      </ul>
    </div>
  </nav>