<!DOCTYPE html>
<html>
<head>
<title> University Admission System</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
</head>

<body class="d-flex flex-column">
    
    
<?php
include 'db1.php';   
require 'header.php';
$valid=true;
$eng_name='';
$mm_name='';
$gender='';
// to validate inputs
if(!empty($_POST))
{
    $data=[
        "title"=>$_POST['title'],
        "eng_name"=>$_POST['eng_name'],
        "mm_name"=>$_POST['mm_name'],
        "gender"=>$_POST['gender'],
        "email"=>$_POST['email'],
        "syllabus"=>$_POST['syllabus']
    ];
    
    $gender = $_POST['gender'];
    
    if(isset($_POST['title']))
    {
        $title=$_POST['title'];
        if(empty($title))
        {
            $titleError='Please choose title';
            $valid=false;
        }
    }

    if(isset($_POST['eng_name']))
    {
        $eng_name=$_POST['eng_name'];
        if(empty($eng_name))
        {
            $enameError='Please add Name (Eng)';
            $valid=false;
        }
    }
    if(isset($_POST['gender']))
    {
        $gender=$_POST['gender'];
        if(empty($gender))
        {
            $genderError='Please add Name (MM)';
            $valid=false;
        }
    }
    if(isset($_POST['mm_name']))
    {
        $mm_name=$_POST['mm_name'];
        if(empty($mm_name))
        {
            $mmnameError='Please add Name (MM)';
            $valid=false;
        }
    }
    if(isset($_POST['email']))
    {
        $email=$_POST['email'];
        if(empty($email))
        {
            $emailError='Please add Email ';
            $valid=false;
        }
    }
    if(isset($_POST['syllabus']))
    {
        $syllabus=$_POST['syllabus'];
        if(empty($syllabus))
        {
            $syllabusError='Please select Syllabus ';
            $valid=false;
        }
    } 
    if(isset($_POST['school']))
    {
        $school=$_POST['school'];
        if(empty($school))
        {
            $schoolError='Please add School ';
            $valid=false;
        }
    } 
    if(isset($_POST['level']))
    {
        $level=$_POST['level'];
        if(empty($level))
        {
            $levelError='Please select Level ';
            $valid=false;
        }
    } 
    if(isset($_POST['level1']))
    {
        $level1=$_POST['level1'];
        if(empty($level1))
        {
            $level1Error='Please select Level ';
            $valid=false;
        }
    } 
    if(isset($_POST['marks']))
    {
        $marks=$_POST['marks'];
        if(empty($marks))
        {
            $marksError='Please add marks ';
            $valid=false;
        }
    } 
    if(isset($_POST['birthdate']))
    {
        $birthdate=$_POST['birthdate'];
        if(empty($birthdate))
        {
            $birthdateError='Please add Birthdate ';
            $valid=false;
        }
    } 

    if(isset($_POST['nationality']))
    {
        $nationality=$_POST['nationality'];
        if(empty($nationality))
        {
            $nationalityError='Please add nationality ';
            $valid=false;
        }
    }     
    if(isset($_POST['citizen']))
    {
        $citizen=$_POST['citizen'];
        if(empty($citizen))
        {
            $citizenError='Please add citizen ';
            $valid=false;
        }
    }
    if(isset($_POST['religion']))
    {
        $religion=$_POST['religion'];
        if(empty($religion))
        {
            $religionError='Please select religion ';
            $valid=false;
        }
    }
    if(isset($_POST['bloodtype']))
    {
        $bloodtype=$_POST['bloodtype'];
        if(empty($bloodtype))
        {
            $bloodtypeError='Please select blood type ';
            $valid=false;
        }
    }
    if(isset($_POST['citizenid']))
    {
        $citizenid=$_POST['citizenid'];
        if(empty($citizenid))
        {
            $citizenidError='Please add citizen id ';
            $valid=false;
        }
    }
    if(isset($_POST['passport']))
    {
        $passport=$_POST['passport'];
        if(empty($passport))
        {
            $passportError='Please add passport  ';
            $valid=false;
        }
    }
    if(isset($_POST['address']))
    {
        $address=$_POST['address'];
        if(empty($address))
        {
            $addressError='Please add address  ';
            $valid=false;
        }
    }
    if(isset($_POST['street']))
    {
        $street=$_POST['street'];
        if(empty($street))
        {
            $streetError='Please add street  ';
            $valid=false;
        }
    }
    if(isset($_POST['township']))
    {
        $township=$_POST['township'];
        if(empty($township))
        {
            $townshipError='Please add township  ';
            $valid=false;
        }
    }
    if(isset($_POST['city']))
    {
        $city=$_POST['city'];
        if(empty($city))
        {
            $cityError='Please add city  ';
            $valid=false;
        }
    }
    if(isset($_POST['mobile']))
    {
        $mobile=$_POST['mobile'];
        if(empty($mobile))
        {
            $mobileError='Please add mobile  ';
            $valid=false;
        }
    }
        
    //to check father is living or decease
    /*if(isset($_POST['fstatus']))
    {
        $fstatus=$_POST['fstatus'];
        if($fstatus=="living")
        {
            if(isset($_POST['fage']))
            {
                $fage=$_POST['fage'];
                if(empty($fage))
                {
                    $fageError='Please add age';
                    $valid=false;
                }
            } 
        }
        
    }*/

      
    
    
}
//to connect database
/*
 if ($valid) {
     $database = ne Database();
     $db = $database->openConnection();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO applicant(ename,mmname,gender) values('$eng_name','$mm_name','$gender')";
    $q = $pdo->prepare($sql); 
    $q->execute(array($eng_name,$mm_name,$gender));
    Database::disconnect();
 } */
?>
<div class="container maincontent">
    <fieldset class="adminform">
    <legend>Admission Progress</legend>
      <table width="100%">
        <tr>
          <td width="20%"><b>1. Fill in Application</b></td>
          <td width="15%">2. Verify Data</td>
          <td width="32%">3. Print Application Form</td>
          <td width="12%">4. Login</td>
        </tr>
      </table>
      <div class="progress">
         <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
       </div>
    </fieldset>
    
    <form class="form-horizontal" action="application.php" method="post">
    <div class="container" >
    <div class="row">
      <h4> Applicant's Information </h4>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="title">Title<span class="help-inline">*</span></label> 
           <div class="controls col-md-4">
                <select name="title" id="title" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="Mr" <?php echo ( isset($_POST['title']) && $_POST['title']=== 'Mr')?'selected': ''; ?> >Mr</option>
                  <option value="Ms" <?php echo ( isset($_POST['title']) && $_POST['title']=== 'Ms')?'selected': ''; ?>  >Ms</option>
                  <option value="Mrs" <?php echo ( isset($_POST['title']) && $_POST['title']=== 'Mrs')?'selected': ''; ?>  >Mrs</option>
                </select>
                <?php if (!empty($titleError)): ?>
                <span class="help-inline"><?php echo $titleError;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="eng_name">Name (Eng)<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="eng_name" type="text" id="eng_name" class="form-control form-control-inline col-md-4" placeholder="Name in English" value="<?php echo !empty($eng_name)?$eng_name:'';?>" >
               <?php if (!empty($enameError)): ?>
                <span class="help-inline"><?php echo $enameError;?></span>
                <?php endif; ?>            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="mm_name">Name (MM)<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="mm_name" type="text" id="mm_name" class="form-control form-control-inline col-md-4" placeholder="Name in Myanmar" value="<?php echo !empty($mm_name)?$mm_name:'';?>" >
               <?php if (!empty($mmnameError)): ?>
                <span class="help-inline"><?php echo $mmnameError;?></span>
                <?php endif; ?>            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="gender">Gender<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="gender" value="male" id="male" checked>Male</label>
            <label class="radio-inline"><input type="radio" name="gender" value="female" id="female" <?php echo ( isset($_POST['gender']) && $_POST['gender']=== 'female')?'checked': ''; ?> >Female</label>
                          
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="email">Email<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="email" type="text" id="email" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($emailError)): ?>
                <span class="help-inline"><?php echo $emailError;?></span>
                <?php endif; ?>           
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="syllabus">Syllabus<span class="help-inline">*</span></label>
           <div class="controls col-md-4">
                <select name="syllabus" id="syllabus" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="civil" >Civil Engineering/option>
                  <option value="it" >IT Engineering</option>
                  <option value="electrical">Electrical Engineering</option>
                </select>
                <?php if (!empty($syllabusError)): ?>
                <span class="help-inline"><?php echo $syllabusError;?></span>
                <?php endif; ?>
            </div>
    </div>
    </div>
    <br><hr>
<!-- education -->
  <div class="container" >
    <div class="row">
      <h4>Education </h4>
    </div>
    
    
    <div class="form-group ">
        <label class="control-label col-md-2" for="gender">Study in</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="studyin" id="myanmar" checked>Myanmar</label>
            <label class="radio-inline"><input type="radio" name="studyin" id="abroad ">Abroad</label>
                       
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="school">School<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="school" type="text" id="school" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($schoolError)): ?>
                <span class="help-inline"><?php echo $schoolError;?></span>
                <?php endif; ?>           
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="level">Level of Completion<span class="help-inline">*</span></label>
           <div class="controls col-md-4">
                <select name="level" id="level" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="gce_o" >GCE O Level</option>
                  <option value="gce_a" >GCE A Level</option>
                  <option value="grade11">Grade 11</option>
                  <option value="grade11">IGCSE</option>
                </select>
                <?php if (!empty($levelError)): ?>
                <span class="help-inline"><?php echo $levelError;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="level">Major of Completion<span class="help-inline">*</span></label>
           <div class="controls col-md-4">
                <select name="level1" id="level" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="gce_o" >Science (Biology)</option>
                  <option value="gce_a" >Arts</option>
                  <option value="grade11">Science and Arts</option>
                  <option value="grade11">other</option>
                </select>
                <?php if (!empty($level1Error)): ?>
                <span class="help-inline"><?php echo $level1Error;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="marks">Marks<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="marks" type="text" id="marks" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($marksError)): ?>
                <span class="help-inline"><?php echo $marksError;?></span>
                <?php endif; ?>           
            </div>
    </div>
  </div>
  <br><hr>
<!-- personal details -->
  <div class="container" >
    <div class="row">
      <h4>Personal Details </h4>
    </div>
    
    
    <div class="form-group ">
        <label class="control-label col-md-2" for="birthdate">Birthdate</label>
            <div class="controls col-md-4">
            <input type="date" id="birthdate" name="birthdate">
            <?php if (!empty($birthdateError)): ?>
                <span class="help-inline"><?php echo $birthdateError;?></span>
                <?php endif; ?>            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="nationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="nationality" type="text" id="nationality" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($nationalityError)): ?>
                <span class="help-inline"><?php echo $nationalityError;?></span>
                <?php endif; ?>          
            </div>
            <label class="control-label col-md-2" for="nationality">Citizenship</label>
            <div class="controls col-md-4">
               <input name="citizen" type="text" id="citizen" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($citizenError)): ?>
                <span class="help-inline"><?php echo $citizenError;?></span>
                <?php endif; ?>             
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="level">Religion</label>
           <div class="controls col-md-4">
                <select name="religion" id="religion" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="buddhism" >Buddhism</option>
                  <option value="chirstian" >Christian</option>
                  <option value="islam">Islam</option>
                  <option value="hindu">Hindu</option>
                  <option value="other">Other</option>
                </select>
                <?php if (!empty($religionError)): ?>
                <span class="help-inline"><?php echo $religionError;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="bloodtype">Blood Group</label>
           <div class="controls col-md-4">
                <select name="bloodtype" id="bloodtype" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="A" >A</option>
                  <option value="B" >B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                </select>
                <?php if (!empty($bloodtypeError)): ?>
                <span class="help-inline"><?php echo $bloodtypeError;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="citizenid">Citizen ID<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="citizenid" type="text" id="citizenid" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($citizenidError)): ?>
                <span class="help-inline"><?php echo $citizenidError;?></span>
                <?php endif; ?>           
            </div>
            <label class="control-label col-md-2" for="passport">If not Myanmar Citizen,enter passport number</label>
            <div class="controls col-md-4">
               <input name="passport" type="text" id="passport" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($passportError)): ?>
                <span class="help-inline"><?php echo $passportError;?></span>
                <?php endif; ?>             
            </div>
    </div>
  </div>
  <br><hr>
  <!-- Mailing Address -->
  <div class="container" >
    <div class="row">
      <h4>Mailing Address </h4>
    </div>
    
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="address">Address No:<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="address" type="text" id="address" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($addressError)): ?>
                <span class="help-inline"><?php echo $addressError;?></span>
                <?php endif; ?>          
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="street">Street<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="street" type="text" id="street" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($streetError)): ?>
                <span class="help-inline"><?php echo $streetError;?></span>
                <?php endif; ?>            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Township<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="township" type="text" id="township" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($townshipError)): ?>
                <span class="help-inline"><?php echo $townshipError;?></span>
                <?php endif; ?>            
            </div> 
            <label class="control-label col-md-2" for="city">City<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="city" type="text" id="city" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($cityError)): ?>
                <span class="help-inline"><?php echo $cityError;?></span>
                <?php endif; ?>             
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="zipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="zipcode" type="text" id="zipcode" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Telephone</label>
        <div class="controls col-md-4">
               <input name="telephone" type="text" id="telephone" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="mobile">Mobile<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="mobile" type="text" id="mobile" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($mobileError)): ?>
                <span class="help-inline"><?php echo $mobileError;?></span>
                <?php endif; ?>            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="facebook">Facebook</label>
            <div class="controls col-md-4">
               <input name="facebook" type="text" id="facebook" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
  </div>
  <br><hr>
  <!-- father's information -->
  <div class="container" >
    <div class="row">
      <h4>Father's Information </h4>
    </div>
    
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fname">Name<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="fname" type="text" id="fname" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fnationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="fnationality" type="text" id="fnationality" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            <label class="control-label col-md-2" for="fcitizen">Citizenship</label>
            <div class="controls col-md-4">
               <input name="fcitizen" type="text" id="fcitizen" class="form-control form-control-inline col-md-4"  >
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fstatus">Status</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="fstatus" value="living" id="fliving" checked>Living</label>
            <label class="radio-inline"><input type="radio" name="fstatus" value="decease" id="fdecease">Decease</label>
                            
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="fage">Age</label>
        <div class="controls col-md-4">
               <input name="fage" type="text" id="fage" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($fageError)): ?>
                <span class="help-inline"><?php echo $fageError;?></span>
                <?php endif; ?>            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="foccupation">Occuputation</label>
        <div class="controls col-md-4">
               <input name="foccupation" type="text" id="foccupation" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
            <label class="control-label col-md-2" for="fposition">Position</label>
        <div class="controls col-md-4">
               <input name="fposition" type="text" id="fposition" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
    </div>
    <br><br>
    <div class="form-check">
        <label class="control-label col-md-2" for="faddress">Father's address</label>
        <div class="controls col-md-4">
               <input name="faddress" type="checkbox" id="faddress" class="form-check-input form-control-inline col-md-4"  >
               <label class="form-check-label" for="faddress">Same as applicant's address</label>           
        </div>  
    </div>
    <br><br>
    <div class="form-group">
        <label class="control-label col-md-2" for="street">Street</label>
        <div class="controls col-md-4">
               <input name="street" type="text" id="fstreet" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Township<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="township" type="text" id="ftownship" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="city">City<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="city" type="text" id="fcity" class="form-control form-control-inline col-md-4"  >
                            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="zipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="zipcode" type="text" id="fzipcode" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Telephone<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="telephone" type="text" id="ftelephone" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="mobile">Mobile<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="mobile" type="text" id="fmobile" class="form-control form-control-inline col-md-4"  >
                            
        </div>  
    </div>    <br>
    
  
  </div>
  <br><hr>
  <div class="container" >
    <div class="row">
      <h4>Mother's Information </h4>
    </div>
    
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fname">Name<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="fname" type="text" id="fname" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fnationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="fnationality" type="text" id="fnationality" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            <label class="control-label col-md-2" for="fcitizen">Citizenship</label>
            <div class="controls col-md-4">
               <input name="fcitizen" type="text" id="fcitizen" class="form-control form-control-inline col-md-4"  >
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="status">Status</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="mstatus" id="mliving" checked>Living</label>
            <label class="radio-inline"><input type="radio" name="mstatus" id="mdecese">Decese</label>
                            
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="fage">Age</label>
        <div class="controls col-md-4">
               <input name="fage" type="text" id="fage" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="foccupation">Occuputation</label>
        <div class="controls col-md-4">
               <input name="foccupation" type="text" id="foccupation" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
            <label class="control-label col-md-2" for="fposition">Position</label>
        <div class="controls col-md-4">
               <input name="fposition" type="text" id="fposition" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
    </div>
    <br><br>
    <div class="form-check">
        <label class="control-label col-md-2" for="maddress">Mother's address</label>
        <div class="controls col-md-4">
               <input name="maddress" type="checkbox" id="maddress" class="form-check-input form-control-inline col-md-4"  >
               <label class="form-check-label" for="maddress">Same as applicant's address</label>           
        </div>  
    </div>
    <br><br>
    <div class="form-group">
        <label class="control-label col-md-2" for="street">Street</label>
        <div class="controls col-md-4">
               <input name="street" type="text" id="mstreet" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Township<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="township" type="text" id="mtownship" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="city">City<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="city" type="text" id="mcity" class="form-control form-control-inline col-md-4"  >
                            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="zipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="zipcode" type="text" id="mzipcode" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Telephone</label>
        <div class="controls col-md-4">
               <input name="telephone" type="text" id="mtelephone" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="mobile">Mobile<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="mobile" type="text" id="mobile" class="form-control form-control-inline col-md-4"  >
                            
        </div>  
    </div>    <br>
    <br><hr>
  <div class="container" >
    <div class="row">
      <h4>Guardian's Information </h4>
    </div>    
    
    
    <div class="form-group ">
        <label class="control-label col-md-2" for="status">Status</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="gstatus" value="father" id="father" checked>Father</label>
            <label class="radio-inline"><input type="radio" name="gstatus" value="mother" id="mother">Mother</label>
            <label class="radio-inline"><input type="radio" name="gstatus" value="other" id="other">Other</label>
                    
            </div>
    </div>
    <div id="guardianInfo"></div>     
    
    
  
  </div>
  <br><hr>
    <div class="col-md-12 button">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</form>
</div>
<script>
$(document).ready(function(){

$('#other').on('change', function () {

    var gstatus = $(this).val();
    console.log(gstatus);
   
    
    $.ajax({
        type: "POST",
        url: "show_guardian.php",
        // dataType: 'json',
        data: {'gstatus': gstatus },
        success: function (html) {
            
            console.log(html);
            $('#guardianInfo').html(html);
            
           
        }
    });
});


$('#father').on('change', function () {

var gstatus = $(this).val();
console.log(gstatus);


$.ajax({
    type: "POST",
    url: "show_guardian.php",
    // dataType: 'json',
    data: {'gstatus': gstatus },
    success: function (json) {
        
        console.log(json);
        $('#guardianInfo').html(json);
        
       
    }
});
});

$('#mother').on('change', function () {

var gstatus = $(this).val();
console.log(gstatus);


$.ajax({
    type: "POST",
    url: "show_guardian.php",
    // dataType: 'json',
    data: {'gstatus': gstatus },
    success: function (json) {
        
        console.log(json);
        $('#guardianInfo').html(json);
        
       
    }
});
});

// same as applicant father
$('#faddress').on('click',function(){
    var street = $('#street').val();
    var township = $('#township').val();
    var zipcode = $('#zipcode').val();
    var telephone = $('#telephone').val();
    var city = $('#city').val();
    var mobile = $('#mobile').val();
    if(this.checked){
        console.log(street);
        $('#fstreet').val(street);
        $('#ftownship').val(township);
        $('#fzipcode').val(zipcode);
        $('#ftelephone').val(telephone);
        $('#fcity').val(city);
        

    }
    else{
        $('#fstreet').val('');
        $('#ftownship').val("");
        $('#fzipcode').val('');
        $('#ftelephone').val('');
        $('#fcity').val('');
       
    }
    
});

// same as applicant mother
$('#maddress').on('click',function(){
    var street = $('#street').val();
    var township = $('#township').val();
    var zipcode = $('#zipcode').val();
    var telephone = $('#telephone').val();
    var city = $('#city').val();
    var mobile = $('#mobile').val();
    if(this.checked){
        console.log(street);
        $('#mstreet').val(street);
        $('#mtownship').val(township);
        $('#mzipcode').val(zipcode);
        $('#mtelephone').val(telephone);
        $('#mcity').val(city);
        

    }
    else{
        $('#mstreet').val('');
        $('#mtownship').val("");
        $('#mzipcode').val('');
        $('#mtelephone').val('');
        $('#mcity').val('');
       
    }
    
});


});

</script>

</body>
</html>