<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="form.php" method="post">
       <div>
           
        <h2>Please input your details:</h2>
       <div> 
    <p><label for="firstname">Firstname:</label></p>
         <input type="text" name="firstname" id="">
       </div>
       <div> 
        <p><label for="lastname">Lastname:</label></p>
         <input type="text" name="lastname" id="">
       </div>
       <div> 
        <p> <label for="email">Email:</label></p>
         <input type="email" name="email" id="">
       </div>
       <div> 
        <p>  <label for="password">Password:</label></p>
         <input type="password" name="password" id="">
       </div>
       <div> 
        <p> <label for="dob">DOB:</label></p>
         <input type="date" name="date" id="">
       </div>
       <div> 
        <p> <label for="mobile">Mobile No:</label></p>
         <input type="number" name="mobile" id="">
       </div>
       <div> 
        <p> <label for="gender">Gender:</label></p>
           
         <input type="radio" name="gender" id="">Male
         <input type="radio" name="gender" id="">Female
       </div>
       <div> 
        <p><label for="nationality">Nationality:</label></p>
         <select name="nationality" id="nationality">
             <option value="Select">Select</option>
             <option value="Ghana">Ghana</option>
             <option value="Nigeria">Nigeria</option>
             <option value="South Africa">South Africa</option>
             <option value="Togo-">Togo</option>
         </select>
       </div>
       <div> 
        <p><label for="state">State of Origin:</label></p>
         <select name="state" id="state">
             <option value="Select">Select</option>
             <option value="Abia">Abia</option>
             <option value="Ogun">Ogun</option>
             <option value="Kano">Kano</option>
             <option value="Rivers">Rivers</option>
         </select>
       </div>
       
       <div> 
        <p><label for="occupation">Occupation:</label></p>
         <input type="text" name="occupation" id="">
       </div>
       <div> 
        <p><label for="message">Textarea:</label></p>
         <textarea name="message" id="" cols="30" rows="10">Message</textarea>
       </div>
       <div> 
        <p>
            <button type="submit">Submit Details</button>
        </p>
        
       </div>
    </div>
    </form>
</body>
</html>