<!DOCTYPE html>
<html>
<head>
  <title>Admin dashboard</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <title>Notification Tab</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br /><br />
  <div class="container">
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" href="#">Tab of notification</a>
     </div>
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>
    </div>
   </nav>
   <br />
   
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>



  
<body>

<div class="dropdown">
  <a href="index.php"><button class="dropbtn">Home</button></a>
</div>

    
<div class="container">
  <div style="height:50px;"></div>
  <div class="well" style="margin:auto; padding:auto; width:80%;">
  <span style="font-size:25px; color:blue"><strong>Admin dashboard</strong></span>


  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <div>
    
  <?php include 'dropdown.php';?>

  <span style="font-size:25px; color:blue"><center><strong>Booking management</strong></center></span>  
    <!--<span class="pull-left"><a href="#addnewb" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>-->
    <div style="height:50px;"></div>
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <th>corps-id</th>
        <th>C_name</th>
        <th>Religoin</th>
        <th>Marital_status</th>
        <th>Gender</th>
        <th>Profession</th>
        <th>Arr_date</th>
        <th>D_name</th>
        <th>CNI_number</th>
        <th>Retrievement_Date</th>
        <th>Relationship_with_desceased</th>
        <th>Telephone</th>
        <th>Action</th>
      </thead>
      <tbody>
      <?php
        include('conn.php');
        
        $query=mysqli_query($conn,"select * from `c_booking`");
        while($row=mysqli_fetch_array($query)){
          ?>
          <tr>
            <td><?php echo ucwords($row['corps_id']); ?></td>
            <td><?php echo ucwords($row['C_name']); ?></td>
            <td><?php echo ucwords($row['Religion']); ?></td>
            <td><?php echo ucwords($row['Marital_status']); ?></td>
            <td><?php echo ucwords($row['Gender']); ?></td>
            <td><?php echo ucwords($row['Profession']); ?></td>
            <td><?php echo ucwords($row['Arr_date']); ?></td>
            <td><?php echo ucwords($row['D_name']); ?></td>
            <td><?php echo ucwords($row['CNI_number']); ?></td>
            <td><?php echo ucwords($row['Retrievement_date']); ?></td>
            <td><?php echo ucwords($row['Relationship_with_deceased']); ?></td>
            <td><?php echo ucwords($row['Telephone']); ?></td>
            <td>
            <!--<a href="#edit<?php echo $row['bookin_id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> ||-->
              <a href="#del<?php echo $row['corps_id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
              <?php include('button3.php'); ?>
            </td>
          </tr>
          <?php
        }
      
      ?>
      </tbody>
      
    </table>

      

</div>


</body>
</html>