<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>fikri kalkulator</title>
    <style>
h1 {
  font-family :Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 32px;
  font-weight: bold; 
  color: #333; 
  text-align: center;
  margin-top: 1px; 
  margin-bottom: 1px; 
}

body {
    background-color: aliceblue;
    outline: auto;
    border: 2px outset black;
    padding: 10%;
 }
form {
  width: 400px;
  margin: 0 auto; /* Center the form horizontally */
  padding: 20px;
  border: 1px solid black;
  border-radius: 8px;
  background-color: skyblue;
}

.label{
  width: 50%;
  padding: 10%;
  border: 10px black;
  border-radius: 5px;
  outline-style: solid;
  outline-color: black;
  background-color: aliceblue;
}


input[type="submit"]:hover {
  background-color: blue;
}
label {
  font-size: 16px;
  color: #333;
}

label.required::after {
  content: "*";
  color: blue;
  margin-left: 4px;
}
.result-container {
  background-color: blue;
  border: 1px solid #ccc;
  padding: 10px;
  margin-top: 20px;
}
input[type="number"] {
  width: 200px;
  padding: 11px;
  border: 1px solid #ccc;
  border-radius: 5px;
  align-items: center;
}

input[type="submit"] {
  padding: 10px 20px;
  background-color: gold;
  color: black;
  border: none;
  border-radius: 99px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #4CAF50;
}

input[type="reset"]:hover {
background-color: green:
}
input[type="reset"] {
  padding: 10px 20px;
  font-size: 12px;
  font-weight: bold;
  border: none;
  border-radius: 5px;
  border: 1px solid black;
  width: auto;
}

</style>
</head>
<body>
    <h1><center>KALKULATOR </center></h1>
    <center>
        
        <br>
        <form action=" {{ route('proses.store') }} " method="post">
            @csrf 
        <table border=1 width=300>
          <tr>
            <td colspan=1> <input type="number" name="a" id=""></td>

            <td colspan=1 rowspan=2> <input type="Reset" value="Reset" name="op"></td>
           
          </tr>
          <tr>
            <td colspan=1><input type="number" name="b" id=""></td>

         
          </tr>
          <tr>
            <td colspan=4>HASIL : {{$hasil}}</td>
            
          </tr>
          <td>
            <input type="submit" value="+" name="op">
            <input type="submit" value="-" name="op">
            <input type="submit" value="*" name="op">
            <input type="submit" value="/" name="op">
            
          </td>
          <tr>
            <td colspan=4>
               <center>
              Nama : Fikri
              <br>
              Kelas : 12 PPLG2
</center>
            </td>
          
          </tr>
        </table>
        </form>
    </center>
    
</body>
</html>