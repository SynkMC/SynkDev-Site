<?php
  if (isset($_GET['uuid'])) {
      $uuid = $_GET['uuid'];
      header("Location: view.php?uuid=" . $uuid);
      exit(); 
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <!--meta tags for web engine and embeds--> 
    
    <link rel="icon" href="/img/logo.png" type="image/png"/>
    
    <meta content="Synk_" property="og:title"/>
    <meta name="title" content="Synk_"/>
    <meta
      content="My portfolio. Here you can find all of my projects, or contact me for some work!"
      property="og:description"
    />
    <meta
      name="description"
      content="My portfolio. Here you can find all of my projects, or contact me for some work!"
    />
    <meta name="theme-color" content="#FF8400"/>
    <meta content="/img/logo.png" property="og:image"/>
    <meta name="author" content="Synk_"/>
    <meta name="color-scheme" content="light dark"/>
        
    <title>Support | Synk_</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rethink+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styles.css">
    <link type="application/json+oembed" href="./oembed.json"/>
</head>
<body data-theme="dark">
    
    <div class="w3-container conatiner">
        <div class="column text">
            <h1 class="title">Support</h1>
            <div class="buttons">
                <a href="https://discord.com/invite/JnPv4QVTKv"><button id="contact" class="button">Join the Discord</button></a>
                <a href="/"><button id="about" class="button">Home</button></a>
                
             </div>
            <p class="desc">View a server dump</p><br>
            <form action="index.php" method="get">
              <label for="uuid">UUID</label><br>
              <input type="text" minlength="36" maxlength="36" required name="uuid"><br>
              <br>
              <input type="submit" value="Send" name="send">
            </form>
        </div>
        <div class="column threed" id="side" style="display: flex; justify-content: center; align-items: center; ">
            
        </div>
    </div>
    <button id="theme" style="display: none;"></button>
    <script src="https://bs-community.github.io/skinview3d/js/skinview3d.bundle.js"></script>
    <script src="https://kit.fontawesome.com/c23c5103b5.js" crossorigin="anonymous"></script>
    <script type="module" src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script type="module" src="index.js"></script>
</body>
</html>
