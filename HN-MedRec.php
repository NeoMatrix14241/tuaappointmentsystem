<?php
require_once "server/server.php";
require_once "server/auth_check.php";
$_SESSION['username'];
$_SESSION['success'];
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="HN-MedRec.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <?php
    checkAccountRole();
  ?>

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>

    <form method="post" action="HN-MedRec.php" class="inventory-form">
        <label for="item_id">Medicine Name:</label>
        <input type="text" id="item_id" name="item_name" required>
    
        <label for="item_name">Label:</label>
        <input type="text" id="item_name" name="item_label" required>
    
        <label for="item_description">Dosage:</label>
        <input type="text" id="item_description" name="item_dosage" required>
    
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="item_quantity" required>
    
        <label for="stock_date">Date of Stock:</label>
        <input type="date" id="stock_date" name="item_stock_date" required>
    
        <label for="expiration_date">Date of Expiration:</label>
        <input type="date" id="expiration_date" name="item_expiration_date" required>
    
        <input type="submit" value="Add Item" name="save_medicine">
    </form>
    
    <div class="search-form">
    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Search for Item ID..">
    </div>
    <?php
      if (mysqli_num_rows($get_medicine_record_result) > 0) {
    ?>
    <table id="inventory-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Label</th>
                <th>Dosage</th>
                <th>Quantity</th>
                <th>Date of Stock</th>
                <th>Expiration Date</th>
            </tr>
        </thead>
        <tbody>
          <?php
            while ($row = mysqli_fetch_assoc($get_medicine_record_result)) {
          ?>
          <tr>
            <td><?php echo $row['item_name']?></td>
            <td><?php echo $row['item_label']?></td>
            <td><?php echo $row['item_dosage']?></td>
            <td><?php echo $row['item_quantity']?></td>
            <td><?php echo $row['item_stock_date']?></td>
            <td><?php echo $row['item_expiration_date']?></td>
          </tr>  
          <?php
            }
          ?>
        </tbody>
    </table>
    <?php
      }
    ?>
    </div>

  </section>

  <script src="HN-MedRec.js"></script>
</html>