<!doctype html>
<html>
<head>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
</head>
<header>
        <div class="text-center">
            <h4 class="font-weight-bold">RESULT</h4>
        </div>
</header>
<?php
	function age_gender($age, $Sex) {
	   $age_score = 0;
     $age_m_score = [-1,0,1,2,3,4,5,6,7];
     $age_f_score = [-9, -4,0,3,6,7,8,8,8];

     if ($age <=34)               { $age_index = 0; }
     if ($age >=35 && $age <=39)  { $age_index = 1; }
     if ($age >=40 && $age <=44)  { $age_index = 2; }
     if ($age >=45 && $age <=49)  { $age_index = 3; }
     if ($age >=50 && $age <=54)  { $age_index = 4; }
     if ($age >=55 && $age <=59)  { $age_index = 5; }
     if ($age >=60 && $age <=64)  { $age_index = 6; }
     if ($age >=65 && $age <=69)  { $age_index = 7; }
     if ($age >=70)               { $age_index = 8; }
     if ($Sex == "Male" ) { return $age_m_score [$age_index]; } else { return $age_f_score[$age_index]; }
     }

	function hdlScore($hdl, $Sex){
		$hdl_score = [[2,1,0,0,-2],[5,2,1,0,3]];
		$sex_index = 0;
		$hdl_index = 0;

		if($Sex == "Male") {$sex_index = 0;}
		else               {$sex_index = 1;}

		if($hdl < 35)                     {$hdl_index = 0;}
		else if($hdl >=35 && $hdl <= 44)  {$hdl_index = 1;}
		else if($hdl >=45 && $hdl <= 49)  {$hdl_index = 2;}
		else if($hdl >=50 && $hdl <= 59)  {$hdl_index = 3;}
		else                              {$hdl_index = 4;}

		return $hdl_score[$sex_index][$hdl_index];
	 }

	function tdlScore($tdl, $sex){
		$tdl_score = [[-3,0,1,2,3],[-2,0,1,1,3]];
		$sex_index = 0;
		$tdl_index = 0;

		if($sex == "Male")   {$sex_index = 0;}
		else                 {$sex_index = 1;}

		if($tdl < 160)                       {$tdl_index = 0;}
		else if($tdl >=160 && $tdl <= 199)   {$tdl_index = 1;}
		else if($tdl >=200 && $tdl <= 239)   {$tdl_index = 2;}
		else if($tdl >=240 && $tdl <= 279)   {$tdl_index = 3;}
		else                                 {$tdl_index = 4;}

		return $tdl_score[$sex_index][$tdl_index];
	}
?>

<body style="background-color: #8a2be2;">
    <div class="container text-sm-center bg-white rounded shadow p-3 mb-5">
     <?php
	  echo 'Your gender:';
	  switch ($_REQUEST['Sex']) {
		case('1'):
			$Sex = 'Male';
			break;
		case('2'):
			$Sex = 'Female';
			break;
	  }
	  echo $Sex . '<br>';
	
	  $age = $_REQUEST['age'];
	  $blood_press1 = $_REQUEST['blood_press1'];
	  $blood_press2 = $_REQUEST['blood_press2'];
  
	
	  echo 'Your age:' . $age . '<br>';
	  echo 'Your diastolic pressure: ' . $blood_press1 . '<br>';
	  echo 'Your Systolic pressure: ' . $blood_press2 . '<br>';
	
	  if(isset($_REQUEST['THM'])) {
		echo 'Is taking hypertension medicine' . '<br>'; 
		$high_blood = 1;
	  }
	  else {
		echo 'Is not taking hypertension medicine' . '<br>'; 
		$high_blood = 0;
	  }
	  
	  if(isset($_REQUEST['Smo'])) {
		echo 'Do smoke' . '<br>'; 
		$smoke = 1;
	  }
	  else {
		echo 'Do not smoke' . '<br>'; 
		$smoke = 0;
	  }
	
	  if(isset($_REQUEST['Dia'])) {
		echo 'Has Diabetes' . '<br>'; 
		$sugar = 1;
	  }
	  else {
		echo 'do not has Diabetes' . '<br>'; 
		$sugar = 0;
	  }
      $age_score = age_gender($age, $Sex);
      echo 'Age score: ' . age_gender($_REQUEST['age'], $Sex) . '<br>';
      echo ' HDL Score = ' . hdlScore($_REQUEST['hdl'], $Sex) . '<br>';
      echo ' TDL Score = ' . tdlScore($_REQUEST['tdl'], $Sex) . '<br>';
      
  
     ?> 
     <input class="btn-light" type ="button" onclick="history.back()" value="Back">
	</div>

</body>
<footer>
        <div class="text-sm-center">
            <hr>
            <h6 class="font-weight-light">
                2023 ADT110113 莊杰穎
            </h6>
        </div>
</footer>
</html>