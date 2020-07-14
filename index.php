
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style> 
        body{
          width: 80%;
          margin: auto;

        }
    </style>
  </head>
  <body>
    <!-- include php files -->
    <?php include_once 'includes/process.php' ?>

    <h1>Basic CRUD</h1>
    <form action="" method="post" id="form" autocomplete="off" >

        <div class="form-group"> 
          <label for="">First name: </label>
          <input type="text" class="col-xs-3" name='input_Fname'>
        </div>

        <div class="form-group"> 
          <label for="">Last name: </label>
          <input type="text" class="col-xs-3" name='input_Lname'>
        </div>

        <div class="form-group"> 
          <label for="">Gender: </label>
            <input type="radio" name='input_Gender' style='margin-left: 20px;' value='Male' checked="checked"> Male
            <input type="radio" name='input_Gender' style='margin-left: 20px;' value='Female' > Female
        </div>

        <div class="form-group"> 
          <label for="">Address: </label>
          <input type="text" class="col-xs-3" style='margin-left: 18px;' name='input_Address'>
        </div>

        <div class="form-group col-xs-1">
          <input type="submit" name='btnSubmit' class="btn btn-primary btn-md" value="Submit">
          <input type="button" class="btn btn-danger" value="Clear" onClick="btnClear()"; >
        </div>

        <div class="form-group">
          <table class='table'>
            <thead>
              <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Gender</th>
                <th>Location</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
              <?php
                $result = $conn->query('SELECT * FROM tb_user ORDER BY id DESC') or die($conn->error);
                  while($row = $result->fetch_object()): ?>
                    <tr>
                      <td><?php echo $row->first_name; ?> </td>
                      <td><?php echo $row->last_name; ?></td>
                      <td><?php echo $row->gender; ?></td>
                      <td><?php echo $row->place; ?></td>
                      <td colspan="2">
                        <input type="button" class="btn btn-primary" value="Edit" name="btnEdit">
                        <input type="button" class="btn btn-danger" value="Delete" name="btnDelete">

                      </td>
                    </tr>
                    <?php endwhile; ?>
          </table>
        </div>
    </form>
    <script src="script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>