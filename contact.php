
<!DOCTYPE html>
<html>
<head>
  <title>DFT</title>

  <meta name="viewport" content="width=580px, initial-scale=0.7">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="style.css">

  <style>
    form { max-width:520px; margin:10px auto; }

    .feedback-input {
      color: white;
      font-family: Ubuntu;
      font-size: 14px;
      border-radius: 5px;
      line-height: 22px;
      background-color: transparent;
      border: 1.5px solid #f36f42;
      transition: all 0.3s;
      padding: 5px;
      margin-bottom: 5px;
      width: 100%;
      box-sizing: border-box;
      outline:0;
    }

    .feedback-input:focus { border:1.5px solid #fff; }

    textarea {
      height: 50px;
      line-height: 100%;
      resize:vertical;
    }

    [type="submit"] {
      font-family: Ubuntu;
      width: 100%;
      background: #f36f42;
      border-radius: 5px;
      border: 0;
      cursor: pointer;
      color: white;
      font-size: 14px;
      padding-top: 5px;
      padding-bottom: 5px;
      transition: all 0.3s;
      margin-top: -4px;
    }
    [type="submit"]:hover {
      background: #fff;
      color: black;
    }
  </style>
</head>
<body>


<nav class="navbar">
  <div class="logo"><span style="color:white;">info</span>@<span style="color:white;">DFT</span>.one</div>
  <ul class="nav-links">
    <div class="menu">
      <li><a href="/">Home</a></li>
      </div>
  </ul>
</nav>


<div class="cards">
  <div class="card" id="top">
    <!--  ------------------------------- Help -------------------------------  -->
    <div class="container">
      <div class="Terminal">
        <div class="Terminal__Toolbar">
          <div class="Toolbar__buttons">
            <button class="Toolbar__button Toolbar__button--exit">&#10005;</button>
            <button class="Toolbar__button">&#9472;</button>
            <button class="Toolbar__button">&#9723;</button>
          </div>
          <p class="Toolbar__user">DFT - Footprint Sized Security</p>
        </div>
        <div class="Terminal__body">


          <div class="Terminal__text">&nbsp;&nbsp;__________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;\______&nbsp;&nbsp;&nbsp;\&nbsp;____&nbsp;&nbsp;&nbsp;_____/&nbsp;&nbsp;|_&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;_//&nbsp;&nbsp;_&nbsp;\&nbsp;/&nbsp;&nbsp;_&nbsp;\&nbsp;&nbsp;&nbsp;__\&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;(&nbsp;&nbsp;(_)&nbsp;|&nbsp;&nbsp;(_)&nbsp;)&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;|______&nbsp;&nbsp;/\____/&nbsp;\____/|__|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;___________.__&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;\__&nbsp;&nbsp;&nbsp;&nbsp;___/|&nbsp;&nbsp;|__&nbsp;&nbsp;&nbsp;____&nbsp;&nbsp;&nbsp;_____&nbsp;&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;|&nbsp;&nbsp;\_/&nbsp;__&nbsp;\&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Y&nbsp;&nbsp;\&nbsp;&nbsp;___/|&nbsp;&nbsp;Y&nbsp;Y&nbsp;&nbsp;\</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;&nbsp;|____|&nbsp;&nbsp;&nbsp;|___|&nbsp;&nbsp;/\___&nbsp;&nbsp;>__|_|&nbsp;&nbsp;/</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;\_____&nbsp;&nbsp;\&nbsp;&nbsp;__&nbsp;___/&nbsp;&nbsp;|_&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;\|&nbsp;&nbsp;|&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;__\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;\&nbsp;&nbsp;|&nbsp;&nbsp;/|&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;\_______&nbsp;&nbsp;/____/&nbsp;|__|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>


          <div class="Terminal__text">&nbsp;</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Let's talk &nbsp;>&nbsp; Align goals &nbsp;>&nbsp; Get in action!</div>
          <div class="Terminal__text">&nbsp;</div>

          <div class="Terminal__Prompt">
            <span class="Prompt__user">Secured@DFT:</span><span class="Prompt__location">~</span><span class="Prompt__dollar">$ </span>
            <span class="Prompt__cursor"></span>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="card" id="contact">
      <!--  ------------------------------- Contact -------------------------------  -->
      <div class="container">
      <div class="Terminal" style="height: 390px;">
        <div class="Terminal__Toolbar">
          <div class="Toolbar__buttons">
            <button class="Toolbar__button Toolbar__button--exit">&#10005;</button>
            <button class="Toolbar__button">&#9472;</button>
            <button class="Toolbar__button">&#9723;</button>
          </div>
          <p class="Toolbar__user">DFT - Contact</p>
        </div>
        <div class="Terminal__body">

          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;____&nbsp;\&nbsp;&nbsp;____&nbsp;&nbsp;&nbsp;_____/&nbsp;&nbsp;|______&nbsp;&nbsp;&nbsp;&nbsp;_____/&nbsp;&nbsp;|_</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;\/&nbsp;/&nbsp;&nbsp;_&nbsp;\&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;__\__&nbsp;&nbsp;\&nbsp;&nbsp;/&nbsp;___\&nbsp;&nbsp;&nbsp;__\</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\&nbsp;&nbsp;\______(&nbsp;&nbsp;(_)&nbsp;)&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;\&nbsp;&nbsp;|&nbsp;&nbsp;/&nbsp;__&nbsp;\&nbsp;|&nbsp;|___|&nbsp;&nbsp;|</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\______&nbsp;&nbsp;/\____/|___|&nbsp;&nbsp;/__|&nbsp;(____&nbsp;&nbsp;/\___&nbsp;&nbsp;|__|</div>
          <div class="Terminal__text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/</div>

          <center>
            <form id="myForm" onsubmit="return validateCaptcha();">
            <p>Contact request form:</p>

            <input id="na0contacme" type="text" class="feedback-input" placeholder="Contact name (required)" />   
            <input id="em0contactail" type="text" class="feedback-input" placeholder="Contact e-mail (required)" />
            
            <input type="radio" id="r1" name="ty0cloudpe" value="cloud"><label for="r1"> Cloud</label>
            <input type="radio" id="r2" name="ty0cloudpe" value="multicloud"><label for="r2"> Multicloud</label> 
            <input type="radio" id="r3" name="ty0cloudpe" value="hybrid"><label for="r3"> Hybrid</label>
            <input type="radio" id="r4" name="ty0cloudpe" value="onprem"><label for="r4"> On-prem</label>

            <textarea id="te0messagext" class="feedback-input" placeholder="What should I know?"></textarea>

            <div style="width: 100%; display: table;">
                <div style="display: table-row">
                    <div style="width: 50%; display: table-cell; vertical-align: middle;"><div id="captcha"></div></div>
                    <div style="width: 50%; display: table-cell; vertical-align: middle;"><input type="text" placeholder="Type the Captcha here" id="cpatchaTextBox" class="feedback-input"/></div>
                </div>
            </div>

            <input name="submit" type="submit" value="SEND" />
            </form>
          </center>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<nav class="navbar">
  <div class="logo"><span style="color:white;">LinkedIn/</span>daviftorres</div>
  <ul class="nav-links">
    <div class="menu">
      <li><a href="#top">Top</a></li>
      </div>
  </ul>
</nav>


</body>
<script>

var code;

function createCaptcha() {
  document.getElementById('captcha').innerHTML = "";
  var charsArray = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
  var lengthOtp = 8;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    var index = Math.floor(Math.random() * charsArray.length + 1);
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 180;
  canv.height = 50;
  var ctx = canv.getContext("2d");
  ctx.font = "30px Georgia";
  ctx.strokeStyle = '#f36f42';
  ctx.strokeText(captcha.join(""), 0, 30);
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv);
}

function validateCaptcha() {
  event.preventDefault();
  //debugger
  if (document.getElementById("cpatchaTextBox").value == code) {
    var na1contacme = document.getElementById("na0contacme").value;
    var em1contactail = document.getElementById("em0contactail").value;
    var ty1cloudpe = document.querySelector('input[name="ty0cloudpe"]:checked').value;
    var te1messagext = document.getElementById("te0messagext").value;
    var data = JSON.stringify({ "nacontacme": na1contacme, "emcontactail": em1contactail, "tycloudpe": ty1cloudpe, "temessagext": te1messagext });
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "contact-form.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(data);
    alert("Message sent! We will get back to you soon.");
    document.getElementById("myForm").reset();
    createCaptcha();
    return true;
  }else{
    alert("Wrong Captcha");
    createCaptcha();
    return false;
  }
}

(function autorun(){ 
  createCaptcha();
})();

</script>
</html>
