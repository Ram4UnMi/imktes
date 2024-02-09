<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>laundryhub</title>
     <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
     <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/javasript" href="../assets/js/validation.js">
     <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }



    .profile-dropdown {
      position: relative;
      display: inline-block;
      cursor: pointer;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #fff;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      min-width: 160px;
      z-index: 1;
    }

    .profile-dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-content a {
      color: #333;
      padding: 6px 8px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }
  </style>
</head>

<body class="colorBody">

     <!-- <body class="bg-primary"> -->
     <header>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
               <div class="container-fluid">
                    <a class="navbar-brand" href="../after/berandaC.php">Laundry<span>Hub</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <!-- ms/me-auto untuk position-->
                         <ul class="navbar-nav ms-auto  mb-2">
                              <li class="nav-item">
                                   <a class="nav-link active" aria-current="page" href="../after/berandaC.php">Beranda</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link active" href="../owner/histori.php">Histori</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link active" href="../owner/performa.php">Performa</a>
                              </li>
                         </ul>
                         <ul class="navbar-nav mb-2">
                              <li class="profile-dropdown">
                               <img src="../after/profile.png" alt="Profile Picture" width="40" height="40">
                               <div class="dropdown-content">
                                   <a href="../admin/login.php">Logout</a>
                              </li>
                              <li>
                                   <a class="nav-link active" href="#">Nama</a>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>
     </header>
     <main>
