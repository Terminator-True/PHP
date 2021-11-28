<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.topnav {
  overflow: hidden;
  background-color: PaleTurquoise;
  box-shadow:1px 1px 5px black;
}
.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;

}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: LightPink;
  color: #DCDCDC;
}
.topnav-right {
  float: right;
  background-color: LightPink;

}
/*----------------- Formularis-----------------*/ 
/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  background-color:;
}

/* Set a style for all buttons */
button {
  background-color: LightPink;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: PaleTurquoise;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/*Add Zoom Animation*/
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

</style>


<div class="topnav">
  <a href="#home" class="active">Home</a>
  <a href="#about">About me</a>
  <a href="#contact">Contacte</a>
  <div class="topnav-right">
      <a href="#" onclick="document.getElementById('Login').style.display='block'" style="width:auto;">Login</a>
      <a href="#" onclick="document.getElementById('Sign').style.display='block'" style="width:auto;">Sign Up</a>
  </div>

</div>

<div id="Login" class="modal">
    <span onclick="document.getElementById('Login').style.display='none'" class="close" title="Close Modal">&times;</span>

  <form class="modal-content animate" action="/login.php" method="post">
      
    <div class="container">
        <h1>Identificat</h1>
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Email" name="email" required>

      <label for="psw"><b>Contrasenya</b></label>
      <input type="password" placeholder="Password" name="psw" required>
        
      <button type="submit">Login</button>
    </div>
  </form>
</div>

<div id="Sign" class="modal">
  <span onclick="document.getElementById('Sign').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="Funcionalitats/sign.php" method="post ">
    <div class="container">
      <h1>Crear Compte</h1>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Email" name="email" required>
      <label for="nom"><b>Nom</b></label>
      <input type="text" placeholder="Nom" name="nom"  required>
      <label for="cognom"><b>Cognom</b></label>
      <input type="text" placeholder="Cognom" name="cognom"  required>
      <label for="psw"><b>Password</b></la  bel>
      <input type="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Ha de tenir almenys un número, una majúscula, una minúscula i tenir almenys 8 carácters o més " name="psw" required>

      <div class="clearfix">
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
<script>
var modal_log = document.getElementById('Login');
var modal_sign = document.getElementById('Sign');

// Si clickes fora del formulari desapareix
window.onclick = function(event) {
    if (event.target == modal_log) {
        modal_log.style.display = "none";
    }
    if (event.target == modal_sign) {
        modal_sign.style.display = "none";
    }
}
</script>
