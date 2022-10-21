
<!DOCTYPE html>
<html>
<head>
<title>SHOW STUDENT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
 <style>
body{font-family: 'Montserrat', sans-serif;}

#page {
    min-height: 200px;
    width: 80%;
    min-width: 600px;
    background: whitesmoke;
    margin: 5px auto;
    padding: 5px;
    color: #27aae1;
}

.photo-and-name {
    /* NO STYLE NEEDED YET */
}

.photo {
    width: 15%;
    min-width: 50px;
    float: left;
    margin-right: 20px;
}

.contact-info-box {
    width: 70.9%;
    display: inline-block;
}

.name {
    margin-bottom: -5px;
}
.job-title {
    display: inline-block;
}

.contact-details {
    background: #27aae1;
    color: white;
    text-align: center;
    margin: auto;
    margin-top: 25px;
    padding: 5px;
    font-size: 15px;
}

#objective {

}

#objective h3 {
    border: 1px solid #d3d3d3;
    text-transform: uppercase;
    padding: 5px;
    border-radius: 5px;
    margin: 30px 0 10px;
}

#objective p {
    padding: 0 5px;
    line-height: 25px;
    font-size: 14px;
    color: #000;
}

#education h3 {
    border: 1px solid #d3d3d3;
    text-transform: uppercase;
    padding: 5px;
    border-radius: 5px;
    margin: 30px 0 10px;
}

#education table td {
    padding: 5px;
    font-size: 14px;
    color: #000;
}

#education table tr.school-1 td:first-child {
    width: 120px;
    color: gray;
    padding-bottom: 25px;
}

#education table tr.school-2 td:first-child {
    padding-bottom: 25px;
}

#work h3 {
    border: 1px solid #d3d3d3;
    text-transform: uppercase;
    padding: 5px;
    border-radius: 5px;
    margin: 30px 0 10px;
}

#work table td {
    padding: 5px;
    font-size: 14px;
    color: #000;
}

#work table tr.work-1 td:first-child {
    width: 120px;
    color: gray;
    padding-bottom: 25px;
}

#work table tr.work-1 td {
    padding-bottom: 25px;
}

#work table tr.work-2 td:first-child {
    width: 120px;
    color: gray;
}

#bio-data h3 {
    border: 1px solid #d3d3d3;
    text-transform: uppercase;
    padding: 5px;
    border-radius: 5px;
    margin: 30px 0 10px;
}

#bio-data table td {
    padding: 8px;
    font-size: 15px;
    color: #000;
}

#bio-data table tr td:first-child {
    width: 200px;
}

#bio-data table tr td:nth-child(2) {
    width: 300px;
}
.name {

text-align: center;

}
    </style>
<body>

<div id="page">
    <div class="photo-and-name">
       <img src="./1.png"     class="photo" alt="Profile Picture">
        <div class="contact-info-box">
            <h1  class="name" >&nbsp; &nbsp; &nbsp; WONDERWORK &nbsp; - &nbsp; CERTIFICAT</h1>
            <br>
            <p class="contact-details">Phone: ---------------- &nbsp; - &nbsp; Email: gmail.com</p>
        </div>
    </div>
	<div id="bio-data">
        <h3>Bio-Data</h3>
        <table>
		<tr>
            <td>NOM  &nbsp;  &nbsp;:</td>
           <td><b>{{$mystudent->nom}}</b></td>
            </tr>
			<tr>
                <td>PRENOM  &nbsp;  &nbsp;:</td>
                <td><b>{{$mystudent->lastname}}</b></td>
            </tr>
			<tr>
                <td>EMAIL  &nbsp;  &nbsp;:</td>
                <td><b>{{$mystudent->email}}</b></td>
            </tr>
			<tr>
			<td>DATE DE NAISSANCE  &nbsp;  &nbsp;:</td>
             <td><b>{{$mystudent->naissance}}</b></td>
            </tr>
			<tr>
			<td>GENDER  &nbsp;  &nbsp;:</td>
             <td><b>{{$mystudent->gender}}</b></td>
            </tr>
            <tr>
			<td>LIEU DE NAISSANCE  &nbsp;  &nbsp;:</td>
             <td><b>{{$mystudent->lieu}}</b></td>
            </tr>
			<tr>
			<td>Niveau_Scolaire  &nbsp;  &nbsp;:</td>
             <td><b>{{$mystudent->Niveau_Scolaire}}</b></td>
            </tr>
			<td>MALADIES  &nbsp;  &nbsp;:</td>
             <td><b>{{$mystudent->maladies}}</b></td>
            </tr>
			</tr>
			<td>URGENCE  &nbsp;  &nbsp;:</td>
             <td><b>{{$mystudent->urgence}}</b></td>
            </tr>
                <td>CNIC:</td>
                <td><b>CARTE NATIONALE</b></td>
            </tr>
            <tr>
                <td>Religion:</td>
                <td><b>Islam</b></td>
            </tr>
            <tr>
                <td>Nationality:</td>
                <td><b>ALGERIENNE</b></td>
            </tr>
            <tr>
                <td>Marital Status:</td>
                <td><b>CELIBATAIRE</b></td>
            </tr>
           </table>
    </div>
    <div id="objective">
        <h3>Objective</h3>
        <p>
            To take a challenging and managerial role in the field of Computer programming and implement the expertise and experience gained in this field to develop complex project with efficiency and quality.
        </p>
    </div>
    <div id="education">
        <h3>FORMATIONS </h3>
        <table>
		<table>
		<tr>
            <td>CHOIX_1 &nbsp;  &nbsp;:</td>
           <td><b>{{$mystudent->formation_a}}</b></td>
            </tr>
			<tr>
                <td>CHOIX_2 &nbsp;  &nbsp;:</td>
                <td><b>{{$mystudent->formation_b}}</b></td>
            </tr>
			<tr>
                <td>CHOIX_3 &nbsp;  &nbsp;:</td>
                <td><b>{{$mystudent->formation_c}}</b></td>
            </tr>
	     </table>
    </div>
    <div id="work">
        <h3>PAIEMENTS</h3>
        <table>
            <tr class="work-1">
                <td>PAIEMENT</td>
                <td><b>TYPE_PAIEMENT</b>:&nbsp;  &nbsp;<b>{{$mystudent->paiement}}</b></td>
            </tr>
            </table>
    </div>
    </div>





      <script src="index.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
