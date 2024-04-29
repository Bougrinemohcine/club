<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

<body>
  <style>
    h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
  color:black;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: black;
  font-weight: bold;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #eee;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}
.btn {
  display: inline-block;
  padding: 12px 24px;
  background: #4DD4BF;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  font-weight: bold;
  position: relative;
  overflow: hidden;
}

.btn-icon {
  display: block;
  width: 32px;
  height: 32px;
  background-image: url('wp-content/uploads/sites/185/2021/10/change/ac.png');
  background-size: cover;
  position: absolute;
  top: 50%;
  left: 12px;
  transform: translateY(-50%);
}

.btn::before {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.2);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.btn:hover::before {
  opacity: 1;
}

/* ********** */
.btn2 {
  display: inline-block;
  padding: 12px 24px;
  background: #4DD4BF;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  font-weight: bold;
  position: relative;
  overflow: hidden;
}

.btn-icon2 {
  display: block;
  width: 32px;
  height: 32px;
  background-image: url('wp-content/uploads/sites/185/2021/10/change/noac.png');
  background-size: cover;
  position: absolute;
  top: 50%;
  left: 12px;
  transform: translateY(-50%);
}

.btn2::before {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.2);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.btn2:hover::before {
  opacity: 1;
}
/*********** */

.btn3 {
  display: inline-block;
  padding: 12px 24px;
  background: #4DD4BF;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  font-weight: bold;
  position: relative;
  overflow: hidden;
}

.btn-icon3 {
  display: block;
  width: 32px;
  height: 32px;
  background-image: url('wp-content/uploads/sites/185/2021/10/change/ec3.png');
  background-size: cover;
  background-size: 35px ;
  background-repeat: no-repeat;
  position: absolute;
  top: 50%;
  left: 12px;
  transform: translateY(-50%);
}

.btn3::before {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.2);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.btn3:hover::before {
  opacity: 1;
}






/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
    background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

.button {
  padding:15px;
  text-align: center;
  color: #eee;
  text-transform: uppercase;
  font-weight: 600;
  margin-left: 1200px;
  margin-bottom: 30px;
  cursor: pointer;
}
.button-3 {
  border: 2px solid #00DACF;
  background-color: #00DACF;
  border-radius: 20px;
  color: black;
  transition: .3s;
}
a:link {
  text-decoration:none;
  color:black;
}
a:visited {
  color: black;
}

/* mouse over link */
a:hover {
  color: black;
}

/* selected link */
a:active {
  color: black;
}


  </style>
    

<section>
<button type="submit" style="margin-left:1350px;" class="btn3"> <a href="{{ route('logout') }}"  class="btn btn-icon3" ></a></button>

  <h1> Liste des demandes d'adhésion</h1>
  <a href="/test"><div class="button button-3">les adhérents</a></div>

  <div class="tbl-header">
    <table id="test"  cellpadding="0" cellspacing="0" border="0">
      <thead>
    <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>ville</th>
            <th>telephone</th>
            <th>cin</th>
            <th>carte sejour </th>
            <th>email </th>
            <th>refus</th>
            <th>accepte</th>

            


        </tr>
      </thead>
      <tbody>
        @foreach ($adher as $adhe)
        <tr>
            <td>{{ $adhe->id }}</td>
            <td>{{ $adhe->nom }}</td>
            <td>{{ $adhe->prenom }}</td>
            <td>{{ $adhe->ville }}</td>
            <td>{{ $adhe->telephone }}</td>
            <td>{{ $adhe->cin }}</td>
            <td>{{ $adhe->carte }}</td>
            <td>{{ $adhe->email }}</td>
            <td>

        <form method="POST" action="{{ route('send.email.and.delete', $adhe->id) }}">
  @method('DELETE')
  @csrf



  <button type="submit" class="btn2"> <span class="btn btn-icon2" ></a></span></button>


</form>
<td>

<button  class="btn"> <span  > <a href= "{{ route('send.email.and.accept', $adhe->id) }}"  class="btn btn-icon" ></a></span>
</button>
</td>
          
         
        </tr>
        @endforeach
        <tbody>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>

<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
<script>

$(document).ready(function () {

$('#test').DataTable({

pagingType: "full_numbers"});

});
</script>



                    
      
          
    </table>
    
  </div>
</section>






</body>
</html>













