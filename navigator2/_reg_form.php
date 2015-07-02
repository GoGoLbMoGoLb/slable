
<div class="mainlog">
    <form action="" method="post">

    <div class="login">
     <p>Login</p>
      <input type="text" name="login" id="" placeholder="login">
    </div>

    <div class="password">
      <p>Password</p>
      <input type="password" name="pass" id="" placeholder="password">
    </div>
    <?php if (!isset($just_login)) : ?>
      <div class="email">
        <p>Your Email</p>
        <input type="email" name="eamail" id="" placeholder="eamail">
       </div>
    <?php endif; ?>
    <input type="submit" value="Click">

  </form>
  </div>