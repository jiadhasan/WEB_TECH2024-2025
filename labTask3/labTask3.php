<!DOCTYPE html>
<html>
    <head>
  <meta charset="UTF-8">
  <title>Donation Form</title>
  <link rel="stylesheet" href="task3_style.css">
  <script src="task_3_valid.js"defer></script>
    </head>
<body class="bg-img">
    <header>
        
    </header>




    <main class = "box bg-color">
        <div class="formbox">


         <h1 class="fontcolor">Donor Information</h1>
        <div>
            <label for="">First Name</label><br>
            <input type="text"><br>
            <label for="">Last Name</label><br>
            <input type="text"><br>
            <label for="">Address</label><br>
            <input type="text"><br>
            <label for="">city</label><br>
            <input type="text"><br>
            <label for="">State</label><br>
            <select name="" id="">
                <option value="">select a state</option>
                <option value="">Dhaka</option>
                <option value="">Chittagong</option>
                <option value="">Sylhet</option>
            </select><br>
            <label for="">Phone</label><br>
            <input type="tel" name="" id=""><br>
            <label for="">E-mail</label><br>
            <input type="email" name="" id=""><br>
            <label for="">Password</label><br>
            <input type="password" name="" id=""><br>
            <label for="">Confirm password</label><br>
            <input type="password" name="" id=""><br>
            
            <label>Donation Amount</label><br>
         <div class="radio-group">
            <label><input type="radio" name="amount" value="None"> None</label>
            <label><input type="radio" name="amount" value="500"> 500 BDT</label>
            <label><input type="radio" name="amount" value="1000"> 1000 BDT</label>
            <label><input type="radio" name="amount" value="2000"> 2000 BDT</label>
            <label><input type="radio" name="amount" value="3000"> 3000 BDT</label>
            <label><input type="radio" name="amount" value="Other"> Other</label>
         </div>

         <label for="">Other Ammount</label><br>
         <input type="text"><br>


         <h1 class="fontcolor" >Additional Information</h1>
         <input type="checkbox" name="" id=""><label for="">i would like my gift to remain anonymous</label><br>
         <input type="checkbox" name="" id=""><label for="">My employee offers a matching gift program</label><br>
         <input type="checkbox" name="" id=""><label for="">please dont send a thank you latter</label> <br>
         <label for="">Comments</label><br>
         <textarea row="8"></textarea> <br>
        
         <button>reset</button>
         <button>submit</button>
        </div>

        

        </div>
        
        

    </main>
</body>

 </html>