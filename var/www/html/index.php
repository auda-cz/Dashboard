<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Auda's Personal Dashboard</title>
<link rel="icon" type="image/x-icon" href="favicon.png">
<style>
  body, html {
    height: 100%;
    margin: 0;
    font-family: 'Arial', sans-serif;
  }

  .bg {
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    flex-direction:column;
    align-items: center;
    justify-content: center;
  }

  .container {
    display: grid;
    grid-template-columns: repeat(4, 3fr); /* Adjust based on number of buttons */
    gap: 20px;
    padding: 20px;
    position: absolute;
    bottom: 10px;
    left: 10px;
    right: 10px;
    background: rgba(255, 255, 255, 0.5);
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .shortcut {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .shortcut img, .text-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
    transition: transform 0.3s ease;
  }

  .shortcut img:hover {
    transform: scale(1.1);
  }

  .text-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(255, 255, 255, 0.5); 
    color: rgba(0, 0, 0, 0.5); 
    font-weight: bold;
  }

  .text-icon:hover {
    transform: scale(1.1);
  }

  header {
    position: absolute;
    top: 0;
    width: 100%;
    background: rgba(255, 255, 255, 0.8);
    padding: 10px 0;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  header h1 {
    margin: 0;
    font-size: 24px;
    color: #333;
  }
  
</style>
</head>
<body>
<header>
<h1>Welcome to Auda's Dashboard</h1>
</header>
<div class="bg" style="background-image: url('<?php echo "./" . array_rand(array_flip(glob("bg/*.*"))); ?>');">


  <div class="container">
    <div class="shortcut">
      <a href="https://act.hoyolab.com/ys/app/interactive-map/index.html" target="_blank">
        <img alt="Hoyolab map icon" src="https://act.hoyolab.com/ys/app/interactive-map/mapicon.png"/>
      </a>
    </div>
    <div class="shortcut">
      <a href="./st/index.html" target="_blank">
        <img alt="SpeedTest" src="./st/favicon.ico"/>
      </a>
    </div>
    <div class="shortcut">
      <a href="./tm/index.html" target="_blank">
        <img alt="TempMon" src="./favicon.ico"/>
      </a>
    </div>
    <div class="shortcut">
      <a href="./st/index.html" target="_blank">
        <img alt="SpeedTest" src="./st/favicon.ico"/>
      </a>
    </div>


    <div class="shortcut" onclick="sendCommand('P1_on')">
      <div class="text-icon">P1 On</div>
    </div>
    <div class="shortcut" onclick="sendCommand('P2_on')">
      <div class="text-icon">P2 On</div>
    </div>
    <div class="shortcut" onclick="sendCommand('P3_on')">
      <div class="text-icon">P3 On</div>
    </div>
    <div class="shortcut" onclick="sendCommand('All_on')">
      <div class="text-icon">All On</div>
    </div>
    <div class="shortcut" onclick="sendCommand('P1_off')">
      <div class="text-icon">P1 Off</div>
    </div>
    <div class="shortcut" onclick="sendCommand('P2_off')">
      <div class="text-icon">P2 Off</div>
    </div>
    <div class="shortcut" onclick="sendCommand('P3_off')">
      <div class="text-icon">P3 Off</div>
    </div>
    <div class="shortcut" onclick="sendCommand('All_off')">
      <div class="text-icon">All Off</div>
    </div>
  </div>

</div>

<script>
function sendCommand(action) {
    const url = `https://self.auda.moe/api/run/${action}`; // Personal use only. Please don't mind.
    fetch(url, {
        method: 'GET', 
    })
    .then(response => {
        // Response is ignored
    })
    .catch(error => {
        // Errors are ignored
    });
}
</script>
</body>
</html>
