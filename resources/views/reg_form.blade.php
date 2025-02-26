<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- {{ asset('img/logo1.png') }} -->
    <link rel="stylesheet" href="{{asset('css/reg_form.css')}}">
</head>
<body>
    
    
<form>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required pattern="[A-Za-z\s]+" title="Name should only contain letters.">
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}" title="Phone number should be a 10 digit number.">
    
    <label for="state">State:</label>
    <input type="text" id="state" name="state" required pattern="[A-Za-z\s]+" title="State should only contain letters.">
    
    <label for="city">City:</label>
    <input type="text" id="city" name="city" required pattern="[A-Za-z\s]+" title="City should only contain letters.">
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required minlength="8" title="Password should be at least 8 characters long.">
    
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
</form>

    
    
</body>
</html>
