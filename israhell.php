<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raizo was Here</title>

  <!-- Font horor jeung typed -->
  <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Metal+Mania&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('https://i.pinimg.com/originals/ef/5e/4b/ef5e4b4d024c66b42311e337ae8ab4cc.gif') no-repeat center center/cover;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      overflow: hidden;
    }

    .judul {
      font-family: 'Creepster', cursive;
      font-size: 60px;
      color: white;
      text-shadow: 2px 2px 10px red;
      margin-bottom: 20px;
    }

    .link-tautan {
      background: white;
      padding: 10px 25px;
      border-radius: 10px;
      box-shadow: 0 0 15px red;
      margin-bottom: 30px;
      font-size: 22px;
    }

    .link-tautan a {
      color: black;
      text-decoration: none;
      font-family: 'Metal Mania', cursive;
      font-weight: bold;
      text-shadow: 2px 2px 4px red;
      transition: all 0.3s ease;
    }

    .link-tautan a:hover {
      color: red;
      text-shadow: 2px 2px 10px white;
    }

    .typed-text {
      font-size: 55px;
      font-family: 'Metal Mania', cursive;
      color: #ff0000;
      text-shadow: 8px 8px 10px rgba(0, 0, 0, 0.8);
    }

    .running-text {
      position: absolute;
      bottom: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.6);
      color: #ccc;
      font-family: 'Courier New', monospace;
      font-size: 16px;
      white-space: nowrap;
      overflow: hidden;
    }

    .running-text span {
      display: inline-block;
      padding-left: 100%;
      animation: scroll-left 20s linear infinite;
    }

    @keyframes scroll-left {
      0% { transform: translateX(0%); }
      100% { transform: translateX(-100%); }
    }
  </style>
</head>

<body>
  <div class="judul">Hacked By Raizo</div>

  <!-- Link Tautan -->
  <div class="link-tautan">
    <a href="https://t.me/skkteam2025" target="_blank">Join Channel SKK GRUP</a>
  </div>

  <div class="typed-text"></div>

  <!-- Running text / credits -->
  <div class="running-text">
    <span>Created by ISRAEL IDIOT | ISRAEL BITCH | ISRAEL KILLER | ISRAEL GO TO HELL | ISRAEL TERRORIST | FUCK AMERICA | FUCK NETANYAHU | ISRAEL IDIOT | ISRAEL anjeng | </span>
  </div>

  <!-- Audio autoplay -->
  <audio id="backsound" loop>
    <source src="https://www.myinstants.com/media/sounds/horror.mp3" type="audio/mp3">
  </audio>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      new Typed(".typed-text", {
        strings: [
          "ISRAEL TERRORIST",
          "FUCK YOU ISRAEL",
          "ISRAEL IDIOT",
          "Raizo Still See You",
          "We See You",
          "But You Don't See Us"
        ],
        typeSpeed: 50,
        backSpeed: 45,
        backDelay: 2000,
        loop: true
      });

      // Auto play backsound
      let audio = document.getElementById("backsound");
      audio.play().catch(() => {
        document.body.addEventListener("click", () => {
          audio.play();
        }, { once: true });
      });
    });
  </script>
</body>
</html>
