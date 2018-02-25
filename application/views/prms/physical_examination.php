<html>
<head>
<?php require('extensions.php'); ?>
<style type="text/css">
  .button-bottom
  {
    position: relative;
    margin-top: 100%;
  }
</style>
</head>
<body>
  <?php require('sidenav.php'); ?>
  <br><br><br>
      

<?php echo form_open('Prms/physical_examination'); ?>

<br>
<div class="container">
    <input type="hidden" name="patient_id" value="<?php echo $patient_ID;?>">
    <input type="hidden" name="case_id" value="<?php echo $last_case_id;?>"> 

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3>Physical Examination</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    <ul class="nav nav-pills nav-stacked">
                      <li class="active"><a data-toggle="pill" href="#vital_signs">Vital Signs</a></li>
                      <li><a data-toggle="pill" href="#conjunctiva">Conjunctiva</a></li>
                      <li><a data-toggle="pill" href="#Neck">Neck</a></li>
                      <li><a data-toggle="pill" href="#thorax">Thorax</a></li>
                      <li><a data-toggle="pill" href="#breast">Breast</a></li>
                      <li><a data-toggle="pill" href="#abdomen">Abdomen</a></li>
                      <li><a data-toggle="pill" href="#LM">Leopold's Maneuver</a></li>
                      <li><a data-toggle="pill" href="#perinuem">Perinuem</a></li>
                      <li><a data-toggle="pill" href="#vagina">Vagina</a></li>
                      <li><a data-toggle="pill" href="#cervix">Cervix</a></li>
                      <li><a data-toggle="pill" href="#InP">Impression and Plans</a></li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                      <div id="vital_signs" class="tab-pane fade in active">
                        <h3>Vital Signs</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Blood Type:</strong>
                            </div>
                            <div class="col-md-3">
                                <select name="blood_type" id="blood_type" class="form-control pull-right pull-right">
                                    <option value="O">O</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Blood Pressure:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right " placeholder="Systolic" name="systolic"><br>
                                <input type="text" class="form-control pull-right " placeholder="Diastolic" name="diastolic">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Height:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right" name="height" placeholder="in Centimeters">                                  
                            </div>
                            <div class="col-md-3">
                                <strong>Weight:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right" name="weight" placeholder="in kilograms">
                            </div>
                        </div>
                        <div class="pull-right">
                          <button type="button" class="btn btn-info button-bottom" disabled>Previous</button>
                          <a data-toggle="pill" href="#conjunctiva"><button type="button" class="btn btn-info button-bottom" >Next</button></a>
                        </div>
                      </div>
                      <div id="conjunctiva" class="tab-pane fade">
                        <h3>Conjunctiva</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Pale:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="pale">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Yellowish:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="yellowish">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="pull-right">
                          <a data-toggle="pill" href="#vital_signs"><button type="button" class="btn btn-info button-bottom" >Previous</button></a>
                          <a data-toggle="pill" href="#Neck"><button type="button" class="btn btn-info button-bottom" >Next</button></a>
                        </div>
                      </div>
                      <div id="Neck" class="tab-pane fade">
                        <h3>Neck</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Enlarged Thyroid:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="enlargedthyroid" id="enlargedthyroid">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select> 
                            </div>
                            <div class="col-md-3">
                                <strong>Enlarged Lymp Nodes:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="enlargedlympnodes">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select>  
                            </div>
                        </div>
                        <div class="pull-right">
                          <a data-toggle="pill" href="#conjunctiva"><button type="button" class="btn btn-info button-bottom" >Previous</button></a>
                          <a data-toggle="pill" href="#thorax"><button type="button" class="btn btn-info button-bottom" >Next</button></a>
                        </div>
                      </div>
                      <div id="thorax" class="tab-pane fade">
                        <h3>Thorax</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Abnormal heart sounds/Cardiac rate:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="abnormalheartsound">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Abnormal breath sounds/Resperatory rate:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="abnormalbreathsounds">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select> 
                            </div>
                        </div>
                        <div class="pull-right">
                          <a data-toggle="pill" href="#neck"><button type="button" class="btn btn-info button-bottom" >Previous</button></a>
                          <a data-toggle="pill" href="#breast"><button type="button" class="btn btn-info button-bottom" >Next</button></a>
                        </div>
                      </div>
                      <div id="breast" class="tab-pane fade">
                        <h3>Breast</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Mass:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="mass">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select> 
                            </div>
                            <div class="col-md-3">
                                <strong>Nipple Discharged:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="nippledischarged">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Skin-orange-peel or dimpling :</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="skinorangepeel">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Enlarged axilary lymp nodes :</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="enlargedaxilarylympnodes">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="pull-right">
                          <a data-toggle="pill" href="#thorax"><button type="button" class="btn btn-info button-bottom" >Previous</button></a>
                          <a data-toggle="pill" href="#abdomen"><button type="button" class="btn btn-info button-bottom" >Next</button></a>
                        </div>
                      </div>
                      <div id="abdomen" class="tab-pane fade">
                        <h3>Abdomen</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Abnormal heart sounds/Cardiac rate:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right" name="abdomenheight">
                            </div>
                            <div class="col-md-3">
                                <strong>Fetal Movement:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right" name="fetalmovement">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Fetal Heart Tone:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right" name="fetalhearttone" placeholder="if applicable by AOG">
                            </div>
                        </div>
                        <div class="pull-right">
                          <a data-toggle="pill" href="#breast"><button type="button" class="btn btn-info button-bottom" >Previous</button></a>
                          <a data-toggle="pill" href="#LM"><button type="button" class="btn btn-info button-bottom" >Next</button></a>
                        </div>
                      </div>
                      <div id="LM" class="tab-pane fade">
                        <h3>Leopold's Maneuver</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>1. Presenting Part:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right" name="presentingpart" >
                            </div>
                            <div class="col-md-3">
                                <strong>2. Position of fetal back:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right" name="positionfetalback" >
                            </div>
                        </div><br>
                         <div class="row">
                            <div class="col-md-3">
                                <strong>3. Fetal parts in fundus:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right" name="fetalparts" >
                            </div>
                            <div class="col-md-3">
                                <strong>4. Status of the presenting part:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right" name="statuspresenntingpart" >
                            </div>
                        </div><br>
                         <div class="row">
                            <div class="col-md-3">
                                <strong>Uterine Activity:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right" name="urineactivity" >
                            </div>
                        </div>
                        <div class="pull-right">
                          <a data-toggle="pill" href="#abdomen"><button type="button" class="btn btn-info button-bottom" >Previous</button></a>
                          <a data-toggle="pill" href="#perinuem"><button type="button" class="btn btn-info button-bottom" >Next</button></a>
                        </div>
                      </div>
                      <div id="perinuem" class="tab-pane fade">
                        <h3>Perinuem</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Scars:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="scars">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Warts/Mass:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="wartsmass">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select> 
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Laceration:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="laceration">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select>  
                            </div>
                            <div class="col-md-3">
                                <strong>Severe Varicosities:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="severevaricosities">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="pull-right">
                          <a data-toggle="pill" href="#LM"><button type="button" class="btn btn-info button-bottom" >Previous</button></a>
                          <a data-toggle="pill" href="#vagina"><button type="button" class="btn btn-info button-bottom" >Next</button></a>
                        </div>
                      </div>
                      <div id="vagina" class="tab-pane fade">
                        <h3>Vagina</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Bartholin's cyst:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="bartholinscyst">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <strong>Warts/Skene's gland discharged:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="wartsskenesgland">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Cystocoele/Rectocoele:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="crystocoele">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select> 
                            </div>
                            <div class="col-md-3">
                                <strong>Purulent discharged/bleeding:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="purulentdischarged">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Eroslon/Polyp/Foreign Body:</strong>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control pull-right" name="eroslon">
                                         <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="pull-right">
                          <a data-toggle="pill" href="#perinuem"><button type="button" class="btn btn-info button-bottom" >Previous</button></a>
                          <a data-toggle="pill" href="#cervix"><button type="button" class="btn btn-info button-bottom" >Next</button></a>
                        </div>
                      </div>
                      <div id="cervix" class="tab-pane fade">
                        <h3>Cervix</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Consistency:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right" name="consistency">
                            </div>
                            <div class="col-md-3">
                                <strong>Dilation:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right" name="dilation">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Palpable Presenting Part:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right" name="palpablepresentingpart">
                            </div>
                            <div class="col-md-3">
                                <strong>Status of Bag of Water:</strong>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control pull-right" name="statusofbagofwater">
                            </div>
                        </div>
                        <div class="pull-right">
                          <a data-toggle="pill" href="#vagina"><button type="button" class="btn btn-info button-bottom" >Previous</button></a>
                          <a data-toggle="pill" href="#InP"><button type="button" class="btn btn-info button-bottom" >Next</button></a>
                        </div>
                      </div>
                      <div id="InP" class="tab-pane fade">
                        <h3>Impression and Plans</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <strong>Impression</strong>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea rows="4" cols="50" name="impression" class="form-control"></textarea>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <strong>Plans</strong>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea rows="4" cols="50" name="plans" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="pull-right">
                          <a data-toggle="pill" href="#conjunctiva"><button type="button" class="btn btn-info button-bottom" >Previous</button></a>
                           <input type="submit" value="Submit" class="btn btn-success">
                        </div>
                      </div>
                </div>  
            </div>  
        </div>
    </div>
</div>

    </form>
</div>

</body>
</html>
