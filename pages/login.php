<style>
@media (min-width:1024px) {
  body {
      background-image: url("img/background.gif");
      background-color: #cccccc;
      background-repeat:no-repeat;
      background-size:cover;
  }
  a img{
  	position: relative;
      top: 135px;
      left: -80px;
  }
}

</style>
<script>
document.getElementById("redirect").setAttribute("value",window.location.hash);
</script>

    <div class="row">
     <?php if (isset($_POST['error'])){echo '<div data-alert class="alert-box alert">Invalid Username or Password error: ' . $_POST['error'] . '<a href="#" class="close">&times;</a></div>';}?>
      <div class="small-12 columns text-center">
        <div class="row"> <a href="#Home"><img src="dadbig.png"></a> </div>
        <div class="row"> <span class=""></span> </div>
      </div>
    </div>
    <div class="row">
      <div class="small-12 large-6 columns large-centered">
        <form method="post" name="login" action="index.php#login" >
          <div class="row field">
            <label for="user">Username</label>
            <input name="login_user" type="text" class="field" id="user"/>
          </div>
          <div class="row field">
            <label for="pass">Password</label>
            <input name="pass" type="password" class="field" id="pass" value="" />
          </div>
          <br />
          <div class="row text-center">
            <input name="redirect" type="hidden" id="redirect" value="" />
            <input name="Login" type="submit" class="button small radius" value="Log In" />
            <br />
          </div>
        </form>
      </div>
    </div>
  <div class="row text-center"> <a href="#create">Register An Account</a> </div>
  <div class="row text-center"> <a href="#faq">Frequently Asked Questions</a> </div>
</div>

