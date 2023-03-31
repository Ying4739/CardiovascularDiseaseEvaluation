<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Risk valuation</title>
</head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<header>
        <div class="text-center">
            <h2 class="font-weight-bold">PREDICTION</h2>
        </div>
    </header>

<body style="background-color:#8a2be2">
<p>&nbsp;</p>
<form action="result.php" method="post" name="form1" id="form1">
<div class="row justify-content-center">
  <table width="527" border="1" class="table-sm table-bordered shadow p-3 mb-5 bg-white rounded">
    <tbody>
      <tr>
        <td width="150">Risky Factors</td>
        <td width="145">Measurement</td>
        <td width="210">Data</td>
      </tr>
      <tr>
        <td>Sex</td>
        <td>XX or XY</td>
        <td><p>
          <label>
            <input type="radio" name="Sex" value="1" id="Male" checked>
            Male</label>
          <label>
            <input type="radio" name="Sex" value="2" id="Female">
            Female</label>
          <br>
        </p></td>
      </tr>
      <tr>
        <td>Age</td>
        <td>year-old</td>
        <td><select name="age">
		 <?php
			for ($i=10; $i<=99; $i++) {
				echo '<option value="' . $i . '">' . $i . '</option>';
			}
		?>
        </select></td>
      </tr>
      <tr>
        <td>Blood pressure</td>
        <td>Diastolic pressure</td>
        <td>
			<select name="blood_press1" id="blood_presslsel1">
			<?php 
				$blood_range1=['<80'=>79, '80-84'=>85, '85-89'=>88, '90-99'=>95,'>100'=>101];
				foreach($blood_range1 as $key=>$value) {
					echo '<option value="', $value, '">', $key, '</option>';
				}
			?>
			</select>
		</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Systolic pressure</td>
        <td>
			<select name="blood_press2" id="blood_presslsel2">
			<?php 
				$blood_range2=['<120'=>110, '120-129'=>125, '130-139'=>135, '140-159'=>145,'>160'=>165];
				foreach($blood_range2 as $key=>$value) {
					echo '<option value="', $value, '">', $key, '</option>';
				}
			?>
			</select>
		</td>
      </tr>
      <tr>
        <td>taking hypertension medicine</td>
        <td>&nbsp;</td>
        <td><p>
          <label>
            <input type="radio" name="THM" value="1" id="Y" checked>
            Y</label>
          <label>
            <input type="radio" name="THM" value="2" id="N">
            N</label>
          <br>
        </p></td>
      </tr>
      <tr>
        <td>Smoking</td>
        <td>&nbsp;</td>
        <td><p>
          <label>
            <input type="radio" name="Smo" value="1" id="Y" checked>
            Y</label>
          <label>
            <input type="radio" name="Smo" value="2" id="N">
            N</label>
          <br>
        </p></td>
      </tr>
      <tr>
        <td>Diabetes</td>
        <td>&nbsp;</td>
        <td><p>
          <label>
            <input type="radio" name="Dia" value="1" id="Y" checked>
            Y</label>
          <label>
            <input type="radio" name="Dia" value="2" id="N">
            N</label>
          <br>
        </p></td>
      </tr>
      <tr>
        <td>High density cholesterol</td>
        <td>mg/dl</td>
        <td>
			<select name="hdl" id="hdl">
			<?php 
				$hdl=['<35'=>20, '35-44'=>40, '45-49'=>48, '50-59'=>58,'>60'=>70];
				foreach($hdl as $key=>$value) {
					echo '<option value="', $value, '">', $key, '</option>';
				}
			?>
			</select>
		</td>
      </tr>
      <tr>
        <td>Cholestreol in total</td>
        <td>mg/dl</td>
        <td>
			<select name="tdl" id="tdl">
			<?php 
				$tdl=['<160'=>150, '160-199'=>170, '200-239'=>220, '240-279'=>250,'>279'=>280];
				foreach($tdl as $key=>$value) {
					echo '<option value="', $value, '">', $key, '</option>';
				}
			?>
			</select>
		</td>
      </tr>
    </tbody>
  </table>
</div>
  <p>
  <div class="row justify-content-center">
    <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Submit">
    <input class="btn btn-secondary" type="reset" name="reset" id="reset" value="Reset">
  </div>
  </p>
</form>
<p>&nbsp;</p>
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