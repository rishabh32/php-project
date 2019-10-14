<form action="index.php?action=registerintodatabase" method="POST">
Firstname: <input type="text" name="firstname" required><br/><br/>
Lastname: <input type="text" name="lastname" required><br/><br/>
Email: <input type="email" name="email" required><br/><br/>
Password: <input type="password" name="password" required><br/><br/>
DOB: <input type="datetime-local" name="dob" required><br/><br/>
Gender: <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br/><br/>
Phoneno: <input type="tel" name="phoneno" pattern="[0-9]{10}" required><br/><br/>
<input type="submit" value="Register">
</form>
