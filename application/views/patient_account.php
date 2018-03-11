<?php 
    $server = "localhost";
    $username = "root";
    $password= "";
    $db = "mcms";

    $conn = new mysqli($server, $username, $password, $db);
    if($conn->connect_error)
    {
        echo "Connecting to database failed. ";
    }
    $query = "SELECT `date`, `weight` FROM `physicalexamination` WHERE `patient_ID` = $patient_information->patient_ID ORDER BY `date` ASC";
    $result = $conn->query($query);
    $chart_data = '';
    while($row = $result->fetch_array())
    {
        $chart_data .= "{ date:'".$row["date"]."', weight:".$row["weight"]."}, "; //Error was caused by a missing "space" between Comma and Parenthesis 

    }
        $chart_data = substr($chart_data, 0, -2);
?>
<?php 
    if($conn->connect_error)
    {
        echo "Connecting to database failed.";
    }
    $query1 = "SELECT `date`, `height` FROM `physicalexamination` WHERE `patient_ID` = $patient_information->patient_ID ORDER BY `date` ASC";
    $result = $conn->query($query1);
    $chart_data1 = '';
    while($row = $result->fetch_array())
    {
        $chart_data1 .= "{ date:'".$row["date"]."', height:".$row["height"]."}, ";
    }
        $chart_data1 = substr($chart_data1, 0, -2);
?>
<?php 
    if($conn->connect_error)
    {
        echo "Connecting to database failed.";
    }
    $query2 = "SELECT `date`, `systolic`, `diastolic` FROM `physicalexamination` WHERE `patient_ID` = $patient_information->patient_ID ORDER BY `date` ASC";
    $result = $conn->query($query2);
    $chart_data2 = '';
    while($row = $result->fetch_array())
    {
      $chart_data2 .= "{ date:'".$row["date"]."', systolic:".$row["systolic"].", diastolic:".$row["diastolic"]."}, ";  
    }
      $chart_data2 = substr($chart_data2, 0, -2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('extensions.php'); ?>  
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url();?>Main">MCMS</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo base_url(); ?>Main/book_appointment">Schedule an Appointment</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>Main/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>
  <br>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <h2><strong>Patient Profile </strong></h2>
              <div class="row">
                <div class="col-md-5"> <!-- Panel for Patient Information -->
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <div class="row">
                      <div class="col-md-6">
                          <?php 
                            echo "<strong style='text-align: left;''>"; 
                            echo  $patient_information->last_name;
                            echo ', '; 
                            echo $patient_information->given_name;
                            echo "</strong>";
                          ?>
                      </div>
                      <div class="col-md-6">
                          <?php 
                                                echo '<div class="pull-right">';
                            echo "<strong style='text-align: right;''>";
                            echo $patient_information->patient_ID;
                            echo "</strong>";
                                                echo '</div>';
                          ?>
                      </div>
                    </div>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-4">
                                            <a href="#" class="thumbnail">
                                              <img src="<?php echo base_url();?>/Uploads/<?php echo $patient_information->picture; ?>" alt="..." height="250" width="150">
                                            </a>
                        </div>
                        <div class="col-md-8">
                          <table class="table table-condensed table-striped table-hover">
                            <tr>
                              <td>Patient ID</td>
                              <td><?php echo $patient_information->patient_ID; ?></td>
                            </tr>
                            <tr>
                              <td>Last Name</td>
                              <td><?php echo $patient_information->last_name; ?></td>
                            </tr>
                            <tr>
                              <td>Given Name</td>
                              <td><?php echo $patient_information->given_name; ?></td>
                            </tr>
                            <tr>
                              <td>Date of Birth</td>
                              <td><?php echo $patient_information->date_of_birth; ?></td>
                            </tr>
                            <tr>
                              <td>Contact Number</td>
                              <td><?php echo $patient_information->contact_num; ?></td>
                            </tr>
                            <tr>
                              <td>Occupation</td>
                              <td><?php echo $patient_information->occupation; ?></td>
                            </tr>     
                            <tr>
                              <td>Street No.</td>
                              <td><?php echo $patient_information->street_no; ?></td>
                            </tr>   
                            <tr>
                              <td>Barangay</td>
                              <td><?php echo $patient_information->brgy; ?></td>
                            </tr>
                            <tr>
                              <td>City</td>
                              <td><?php echo $patient_information->city; ?></td>
                            </tr>
                            <tr>
                              <td>Date Registered</td>
                              <td><?php echo $patient_information->date_registered ?></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="panel-footer">
                      <button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                      <button class="btn btn-danger"><i class="fa fa-remove"></i></button>
                    </div>
                  </div>
                </div>
                <div class="col-md-7"> <!-- Panel for Patient Chart -->
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <i class="fa fa-line-chart"></i>&nbsp;Patient Chart
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-3">
                          <button class="btn btn-success btn-block" id="weightbtn">Weight</button>
                          <button class="btn btn-success btn-block" id="heightbtn">Height</button>
                          <button class="btn btn-success btn-block" id="bpbtn">Blood Pressure</button>
                        </div>
                        <div class="col-md-9">
                          <div id="weight">
                            <div id="weight_chart"></div>
                          </div>
                          <div id="height">
                            <div id="height_chart"></div>
                          </div>
                          <div id="blood_pressure">
                            <div id="blood_pressure_chart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel-footer">
                      
                    </div>
                  </div>  
                </div>
              </div>
            </div>
        </div>
    </div>

<script>
 $(document).ready(function(){
  $('#height').hide();
  $('#blood_pressure').hide();
 });
</script>
<script>
  $(document).ready(function(){
    $('#weightbtn').click(function(){
      $('#height').hide(100);
      $('#blood_pressure').hide(100);
      $('#weight').show(100);
    });
    $('#heightbtn').click(function(){
      $('#blood_pressure').hide(100);
      $('#weight').hide(100);
      $('#height').show(100);
    });
    $('#bpbtn').click(function(){
      $('#weight').hide(100);
      $('#height').hide(100);
      $('#blood_pressure').show(100);
    });
  });
</script>
<script>
Morris.Line({
 element : 'weight_chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'date',
 ykeys:['weight'],
 labels:['weight'],
 hideHover:'auto',
 stacked:true
});
</script>
<script>
    Morris.Line({
        element: 'height_chart',
        data: [<?php echo $chart_data1; ?>],
        xkey:'date',
        ykeys:['height'],
        labels:['height'],
        hideHover:'auto',
        stacked: true,
        smooth: true,
        lineColors: ['green'],
        pointFillColors: ['#000000']
    });
</script>
<script>
    Morris.Area({
        element: 'blood_pressure_chart',
        data: [<?php echo $chart_data2; ?>],
        xkey: 'date',
        ykeys: ['systolic', 'diastolic'],
        labels: ['systolic', 'diastolic'],
        hideHover: 'auto',
        stacked: true,
        lineColors:['gray','red']
    });
</script>
</body>
</html>

