<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Flower Order</title>

  <!-- Link to FontAwesome for icons -->

           <!-- Bootstrap CSS -->
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                                     
     <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.jpg"/>

     
  <style>
            body {
            background-image: url('<?= base_url("public/assests/img/login_bg.jpg"); ?>');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            height: 100vh;
            margin: 0;
        }

       .sidebar {
           height: 100%;
           width: 250px;
           position: fixed;
           top: 0;
           left: -250px; /* Hide sidebar by default */
           display: flex;
           flex-direction: column;
           height: 100vh;
           overflow-y: auto;
           background-color: rgba(35, 35, 35, .94);
           box-shadow: 2px 2px  4px;
           backdrop-filter: blur(11px);
           padding: 60px 0 16px;
           transition: left 0.3s;
           z-index: 10;
       }
       .sidebar a {
           align-items: center;
           justify-content: center;
           font-size: 20px;
           padding: 16px 20px;
           display: block;
           color: white;
           text-decoration: none;
           transition: background-color 0.2s, color 0.2s;
       }
         .sidebar a:hover, .sidebar a:focus-visible {
           color: #fff;
           background-color: #c84e73;
           outline: none;
         }
         .sidebar .logout {
           margin-top: auto;
           border-top: 1px solid rgba(255, 255, 255, .25);
       }

       @keyframes fadeAnimation {
          0% { opacity: 0; }
          50% { opacity: 1; }
          100% { opacity: 0; }
        }
        .content {
         animation: fadeAnimation 4s infinite; /* Apply the animation */
         display: flex;
         justify-content: center; /* Center content horizontally */
         align-items: center; /* Center content vertically */
        }
       .menu-toggle {
           position: fixed;
           left: 10px;
           top: 10px;
           cursor: pointer;
           color: white;
           font-size: 24px; 
           padding: 10px;
      }

    
    .table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      box-shadow: 2px 2px  4px;
    }

    th, td {
      color: black;
      padding: 10px;
      text-align: center;
      border-bottom: 2px solid #ddd;
    }

    th {
      background-color: #333;
    }

    .icon {
      color: white;
    }

    .btn {
      text-decoration: none;
      display: inline-block;
      padding: 8px 16px;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .btn-primary {
      color: white;
      background-color: #007bff;
      border: none;
      margin-top: 8px;
    }

    .btn-danger {
      color: white;
      background-color: #dc3545;
      border: none;
    }

    .btn-primary:hover, .btn-danger:hover {
      background-color: #0056b3;
    }
    .container {
      margin-top: 50px;
    }

    h1 {
      margin-top: 30px;
      color: white;
      margin-left: 650px;
      font-size: 50px;
      font-weight: bold;
    }
    tr p{
      font-style: normal;
      color: black;
    }
  </style>
</head>

<body>

<div class="sidebar" id="sidebar">
  <a href="<?= base_url("order/order"); ?>"><i class="fas fa-th-large" aria-hidden="true"></i> Dashboard</a>
  <a class="logout" href="<?= base_url("order/index"); ?>"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Logout</a>
</div>


<h1> ORDERS </h1>

<div class="container">

<table class="table">
    <thead>
      <tr>
        <th><i class="fas fa-user icon"></i></th>
        <th><i class="fas fa-phone-alt icon"></i></th>
        <th><i class="fas fa-envelope icon"></i></th>
        <th><i class="fas fa-map-marker-alt icon"></i></th>
        <th><i class="fas fa-utensils icon"></i></th>
        <th><i class="fas fa-dollar-sign icon"></i></th>
        <th><i class="far fa-calendar-alt icon"></i></th>
        <th><i class="far fa-clock icon"></i></th>
        <th><i class="fas fa-cog action icon"></i></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($order_info as $order): ?>
      <tr>
        <td><?= $order['full_name']; ?></td>
        <td><?= $order['contact_number']; ?></td>
        <td><?= $order['email']; ?></td>
        <td><?= $order['address']; ?></td>
        <td><?= $order['orders']; ?></td>
        <td><?= $order['price']; ?></td>
        <td><?= $order['order_date']; ?></td>
        <td><?= $order['order_time']; ?></td>
        <td><a class='btn btn-primary btn-icon-split btn-sm' href='<?= base_url(); ?>order/editRecord/<?= $order['id']; ?>'><i class='fas fa-pen icon'></i></a></td>
        <td><a class='btn btn-danger btn-icon-split btn-sm mt-2' href='<?= base_url(); ?>order/deleteRecord/<?= $order['id']; ?>'><i class='fas fa-trash icon'></i></a></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>


  
  <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        
        <script>
            function toggleMenu() {
                var sidebar = document.getElementById('sidebar');
                if (sidebar.style.left === '0px') {
                    sidebar.style.left = '-250px';
                } else {
                    sidebar.style.left = '0px';
                }
            }
        </script>
        
        <script>
        
        
            // Function to toggle sidebar
            function toggleMenu() {
                var sidebar = document.getElementById('sidebar');
                if (sidebar.style.left === '0px') {
                    sidebar.style.left = '-250px';
                } else {
                    sidebar.style.left = '0px';
                }
            }


        </script>
        
             <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
        
        </body>
        </html>