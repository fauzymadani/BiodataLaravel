<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
          width: 100%;
          height: 100vh;
          background: linear-gradient(
          to right,
          #affc41 0%,
          #affc41 50%,
          blue 50%,
          blue 100%
       );
       }

       h1 {
        text-align: center;
        font-family: monospace;
        font-size: 50px;
       }

       img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 150px;
        border-radius: 30px;
        box-shadow: black 10px 10px 5px;
        transition: all 0.4s ease-in-out;
       }

       img:hover {
        color: rgba(red, green, blue, alpha);
        box-shadow: 10px 5px 15px rgba(145, 92, 182, .4);
       }

       .material-symbols-outlined {
        width: 400px;
        position: relative;
        top: -20px;
        left: 100px;
       }

       .sekolah {
        width: 450px;
        height: 290px;
        background-color: white;
        border-radius: 40px;
        box-shadow: black 10px 10px 5px;
        position: relative;
        left: 440px;
       }

       h2 {
        font-family: monospace;
        font-size: 20px;
        position: relative;
        top: 20px;
        left: 170px;
       }

       .content {
        font-family: monospace;
        font-size: 15px;
       }

       /* From Uiverse.io by mrhyddenn */ 
button {
  position: relative;
  padding: 10px 20px;
  border-radius: 7px;
  border: 1px solid rgb(61, 106, 255);
  font-size: 14px;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 2px;
  background: transparent;
  color: #fff;
  overflow: hidden;
  box-shadow: 0 0 0 0 transparent;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  color: black;
  position: relative;
  left: 130px;
  bottom: -50px;
}

button:hover {
  background: rgb(61, 106, 255);
  box-shadow: 0 0 30px 5px rgba(0, 142, 236, 0.815);
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}

button:hover::before {
  -webkit-animation: sh02 0.5s 0s linear;
  -moz-animation: sh02 0.5s 0s linear;
  animation: sh02 0.5s 0s linear;
}

button::before {
  content: '';
  display: block;
  width: 0px;
  height: 86%;
  position: absolute;
  top: 7%;
  left: 0%;
  opacity: 0;
  background: #fff;
  box-shadow: 0 0 50px 30px #fff;
  -webkit-transform: skewX(-20deg);
  -moz-transform: skewX(-20deg);
  -ms-transform: skewX(-20deg);
  -o-transform: skewX(-20deg);
  transform: skewX(-20deg);
}

@keyframes sh02 {
  from {
    opacity: 0;
    left: 0%;
  }

  50% {
    opacity: 1;
  }

  to {
    opacity: 0;
    left: 100%;
  }
}

button:active {
  box-shadow: 0 0 0 0 transparent;
  -webkit-transition: box-shadow 0.2s ease-in;
  -moz-transition: box-shadow 0.2s ease-in;
  transition: box-shadow 0.2s ease-in;
}


</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <img src="data:image/png;base64,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" alt="">
    <div class="text-header" id="text-header">
      <h1>Biodata</h1>
      <!-- pendidikan -->
      <div class="sekolah" id="sekolah">
        <h2>pendidikan</h2>

      <ul>
          <li class="material-symbols-outlined">school</li>
          <li class="content"><strong>Nama</strong> : Fauzy Madani</li>
          <li class="content"><strong>SD</strong> : SDN 1 Samarang</li>
          <li class="content"><strong>SMP</strong> : SMPN 1 TAROGONG KALER</li>
          <li class="content"><strong>SMk</strong> : SMKN 1 GARUT</li>
          <li class="content"><strong>Universitas</strong> : Oxford university <strong>Amiin</strong></li>
          <button><a href="https://github.com/fauzymadani" style="text-decoration: none; color: black;">Github</a></button>
      </ul>
      </div>
    </div>
</body>
</html>