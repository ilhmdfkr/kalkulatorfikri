<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            margin: 0;
            background-color: black;
            background-image: linear-gradient(to right, skyblue,silver,lightgreen);
        }

        label {}

        table {
            border: 5px solid black;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
            background-color: violet;
            
        }

        input[type="button"] {
            width: 75%;
            padding: 11px 40px;
            font-size: large;
            background-color: skyblue;
            color: black;
            font-weight: bold;
            border: none;
            border-radius: 7px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
            outline-color: black;
            border: 3px solid black;

        }

        input[type="button"]:hover {
            background-color: rgba(0, 0, 0, 0.5);
        }

      

        input[type="text"] {
            width: 24%;
            padding: 20px 40px;
            font-size: large;
            background-color: rgba(0, 0, 0, 0.5);
            color: black;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
            outline-color: black;
            border: 3px solid black;
        }

        input[type="text"]:hover {
            background-color: rgba(0, 0, 0, 0.5);
        }

    </style>
<body><center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
    <form name="form1" action="" method="post">
 
        <tr>
                    <td>
                        <h1>
                            <center><font color="black">KALKULATOR 2 </font></center>
                        </h1>
                    </td>
                </tr>
                <input type="text" name="text1" id="">
        <table>
            <tr>
                <td><input type="button" value="1" onClick="form1.text1.value+='1'"></td>
                <td><input type="button" value="2" onClick="form1.text1.value+='2'"></td>
                <td><input type="button" value="3" onClick="form1.text1.value+='3'"></td>
                <td><input type="button" value="4" onClick="form1.text1.value+='4'"></td>
            </tr>

            <tr>
                <td><input type="button" value="5" onClick="form1.text1.value+='5'"></td>
                <td><input type="button" value="6" onClick="form1.text1.value+='6'"></td>
                <td><input type="button" value="7" onClick="form1.text1.value+='7'"></td>
                <td><input type="button" value="8" onClick="form1.text1.value+='8'"></td>
            </tr>

            <tr>
            <td> <input type="button" value="9" onClick="form1.text1.value+='9'"></td>
            <td><input type="button" value="0" onClick="form1.text1.value+='0'"></td>
            <td><input type="button" value="c" onClick="form1.text1.value=''"></td>
            <td><input type="button" value="=" onClick="form1.text1.value=eval(form1.text1.value)"></td>
            </tr>

            <tr>
             <td><input type="button" value="+" onClick="form1.text1.value+='+'"></td>
             <td><input type="button" value="-" onClick="form1.text1.value+='-'"></td>
             <td><input type="button" value="*" onClick="form1.text1.value+='*'"></td>
             <td><input type="button" value="/" onClick="form1.text1.value+='/'"></td>
            </tr>
        </table>
 

        
    </form>
</body></center>
</html>