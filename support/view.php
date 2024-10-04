<p?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (!isset($_GET["uuid"])) {
        header("Location: /support/");
        exit;
    }

    $uuid = htmlspecialchars($_GET["uuid"]);
    $url = "https://dump.synkdev.cc/" . $uuid;

    echo "<p>Fetching data from URL: $url</p>";

    $json = @file_get_contents($url);

    if ($json !== FALSE) {
        $data = json_decode($json, true);

        if ($data) {
            echo "<div class='dump-data'><h2>Dump Data for UUID: $uuid</h2><pre>" . print_r($data, true) . "</pre></div>";
        } else {
            echo "<p style='color: red;'>Error: Couldn't decode the JSON data! JSON content: " . htmlspecialchars($json) . "</p>";
        }
    } else {
        $error = error_get_last();
        echo "<p style='color: red;'>Error: Couldn't retrieve the data! URL: $url</p>";
        if ($error) {
            echo "<p style='color: red;'>PHP Error Message: " . $error['message'] . "</p>";
        }
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
            <h1 class="title">Server dump</h1>
            <p class="desc">View a server dump</p><br><br>
            <p class="field">Server software</p>
            <p class="value"><?php echo $data['serverSoftware'] ?></p>
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
