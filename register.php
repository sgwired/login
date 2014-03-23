<?php
require_once 'core/init.php';
if(Input::exists()){
   $validate = new Validate();
   $validation = $validate->check($_POST, array(
      'username' => array(
          'required' => true,
          'min' => 2,
          'max' => 20,
          'unique' => 'users'
      ), 
      'password' => array(
          'required' => true,
          'min' => 6
      ), 
      'password_again' => array(
          'required' => true,
          'matches' => 'password'
      ), 
      'name' => array(
          'required' => true,
          'min' => 2,
          'max' => 50
      ), 
   ));
   if($validate->passed()){
      echo "Passeed";
   } else {
        foreach($validation->errors() as $error) {
            echo $error, '<br>';
        }
   }
}
?>
<form action="" method="post">
    <div class="field">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo escape(Input::get('username'));?>" autocomplete="off">
    </div>
        <div class="field">
        <label for="password">Choose a Password</label>
        <input type="password" name="password" id="password" value="" autocomplete="off">
    </div>
    <div class="field">
        <label for="password_again">Please Enter Your Password Again</label>
        <input type="password" name="password_again" id="password_again" value="" autocomplete="off">
    </div>
     <div class="field">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php echo escape(Input::get('name'));?>" autocomplete="off">
    </div>
    <input type="submit" value="Register">
</form>