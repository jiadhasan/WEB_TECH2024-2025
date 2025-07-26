<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Management System</title>

    <style>
        body{
             background-color:lightCyan;
        }
        .header{
            color:blue;
            text-align: center;
            margin-top:10px;
        }
        .body{
            background-color:lightyellow;
            padding: 10px;
            border: 1px solid  #bdcebe;
        }
        button{
            background-color:mediumblue;
            color:white;
            border:none;
            padding: 5px;
        }
        #lorem{
            margin-top:5px;
            overflow:scroll;
            width: 20%;
            height: 10%;
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <div class="header">

          <h1>Bank Management System</h1>
          <h3>Your Trusted Financial Partner</h3>
    </div>
    <div>
        <h2>Customer Registration Form</h2>
    </div>
    <div >
        <table class="body">
            <tr>
                <td>Full Name:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="" id=""></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>Male <input type="radio" name="" id="">
                    female <input type="radio" name="" id="">
                other <input type="radio" name="" id=""></td>
            </tr>
           <tr>
        <td>Marital Status:</td>
        <td>
            <select name="">
                <option value="">single</option>
                <option value="bangladesh">single</option>
                <option value="india">double</option>
                
            </select>
        </td>
        
       </tr>
       <tr>

          <td>Account type:</td>
          <td>
             <select name="" id="">
                <option value="">Savings</option>
             </select>
          </td>
       </tr>
       <tr>
          <td>Initial Deposit Ammount:</td>
          <td><input type="text"></td>
       </tr>
       <tr>
         <td>Mobile Number:</td>
         <td><input type="text"></td>
       </tr>
       <tr>
        <td>E-mail Address:</td>
        <td><input type="email" name="" id=""></td>
       </tr>
       <tr>
          <td>Address:</td>
          <td><input type="text"></td>
       </tr>
       <tr>
         <td>Occupation:</td>
         <td><input type="text"></td>
       </tr>
       <tr>
        <td>National ID (NID)</td>
        <td><input type="text"></td>
       </tr>
       <tr>
        <td>Set Passport</td>
        <td><input type="password" name="" id=""></td>
       </tr>
       <tr>
        <td>Upload id Prof :</td>
        <td><input type="file" name="" id=""></td>
       </tr>
       <tr>
          <td> <input type="checkbox" name="" id=""></td>
          <td><p>I agree with the term and conditions</p></td>
       </tr>
       <tr>
        <td> <button>Register</button></td>
        <td><button>Clear</button></td>
       
       </tr>

        </table>
    </div>
    <div id="lorem">
        <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, quis aspernatur id quam consectetur aliquam, excepturi commodi eveniet in tempore, distinctio ex eius cupiditate eligendi maiores pariatur ut temporibus consequuntur!</p>
    </div>
    
</body>
</html>