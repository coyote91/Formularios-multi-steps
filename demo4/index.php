<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="./css/style.css">

</head>
<body>

<!-- <progress id="progressBar" value="0" max="100" style="width:250px; "></progress> -->

<div id="myProgress">
  <div id="myBar">1%</div>
</div>


<h3 id="status">Phase 1 of 3</h3>

<form id="multiphase" onsubmit="return false">

    <div id="phase1"> First Name: <input id="firstname" name="firstname">
      <br>
        Last Name:
        <input id="lastname" name="lastname"><br>
        <button onclick="processPhase1()">Continue</button>

    </div>

    <div id="phase2"> Gender:

        <select id="gender" name="gender">
        <option value=""></option> <option value="m">Male</option>
        <option value="f">Female</option>
        </select>
        <br>

        <button onclick="processPhase2()">Continue</button>

    </div>

    <div id="phase3"> Country:
        <select id="country" name="country">
        <option value="United States">United States</option>
        <option value="India">India</option>
        <option value="United Kingdom">United Kingdom</option>
        </select>

        <br>

        <button onclick="processPhase3()">Continue</button>
        
    </div>

    <div id="show_all_data"> First Name: <span id="display_fname"></span>

        <br> Last Name: <span id="display_lname"></span>
        <br> Gender: <span id="display_gender">

        </span> <br> Country: <span id="display_country"></span>
        <br>
        <button onclick="submitForm()">Submit Data</button>

    </div>

</form>

<script src="./js/app.js" charset="utf-8"></script>

</body>
</html>
