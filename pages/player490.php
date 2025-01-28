<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>
<div class="advertisement-panel">
  <img src="path-to-your-advertisement-image.jpg" alt="Advertisement" />
</div>
<style>
.advertisement-panel {
  position: fixed;
  right: 10px; /* Sağ kenardan mesafe */
  bottom: 0; /* En alttan başlama */
  width: 340px; /* Genişlik */
  height: 1050px; /* Yükseklik */
  overflow: hidden; /* Taşan içerik gizlenir */
  background-color: #292940; /* Arka plan rengi (isteğe bağlı) */
  border: 2px solid #ccc; /* Çerçeve (isteğe bağlı) */
  z-index: 1000; /* Öne çıkma sırası */
  animation: slide-up 10s linear infinite; /* Aşağıdan yukarı kayan animasyon */
}

.advertisement-panel img {
  width: 100%; /* Resmi div'e sığdır */
  height: auto;
}

@keyframes slide-up {
  0% {
    transform: translateY(100%);
  }
  100% {
    transform: translateY(-100%);
  }
}
</style>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html " target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Soft UI Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  " href="../pages/dashboard.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>shop </title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                        <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active" href="../pages/tables.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>

     
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../pages/sign-in.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>customer-support</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(1.000000, 0.000000)">
                        <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                        <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                        <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../pages/sign-up.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>spaceship</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(4.000000, 301.000000)">
                        <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                        <path class="color-background opacity-6" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                        <path class="color-background opacity-6" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"></path>
                        <path class="color-background opacity-6" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg "></main>
  
<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "futbol_scouting";

$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Formdan gelen oyuncu ID'si varsa onu al, yoksa varsayılan ID'yi kullan
$player_id = isset($_GET['player_id']) ? intval($_GET['player_id']) :490;

// Oyuncunun bilgilerini ve özelliklerini al
$player_query = "SELECT p.player_name, p.height, p.weight, p.market_value, p.team_id, p.photo, pa.* 
                 FROM players p
                 JOIN playerattributes pa ON p.player_id = pa.player_id 
                 WHERE p.player_id = $player_id";
$player_result = $conn->query($player_query);

if ($player_result->num_rows > 0) {
    $player = $player_result->fetch_assoc();

    // Oynadığı takım bilgisi
    if (!empty($player['team_id'])) {
        $team_query = "SELECT team_name FROM teams WHERE team_id = " . intval($player['team_id']);
        $team_result = $conn->query($team_query);

        if ($team_result->num_rows > 0) {
            $team = $team_result->fetch_assoc();
        } else {
            $team = ['team_name' => 'Team not found'];
        }
    } else {
        $team = ['team_name' => 'No team assigned'];
    }

    // Oynadığı mevkiler
    $positions_query = "SELECT position_name FROM playerpositions pp
                        JOIN positions p ON pp.position_id = p.position_id
                        WHERE pp.player_id = $player_id";
    $positions_result = $conn->query($positions_query);
    $positions = [];
    while ($position = $positions_result->fetch_assoc()) {
        $positions[] = $position['position_name'];
    }

    // Ortalama değerleri sadece aynı mevkideki oyuncular için çekme
    $position_ids_query = "SELECT position_id FROM playerpositions WHERE player_id = $player_id";
    $position_ids_result = $conn->query($position_ids_query);

    $position_ids = [];
    while ($row = $position_ids_result->fetch_assoc()) {
        $position_ids[] = $row['position_id'];
    }

    if (count($position_ids) > 0) {
        $position_ids_str = implode(',', $position_ids);
        $average_query = "SELECT AVG(corners) AS avg_corners, AVG(crossing) AS avg_crossing, AVG(dribbling) AS avg_dribbling,
                                 AVG(finishing) AS avg_finishing, AVG(first_touch) AS avg_first_touch, AVG(free_kick_taking) AS avg_free_kick_taking,
                                 AVG(heading) AS avg_heading, AVG(long_shots) AS avg_long_shots, AVG(long_throws) AS avg_long_throws,
                                 AVG(passing) AS avg_passing, AVG(penalty_taking) AS avg_penalty_taking, AVG(technique) AS avg_technique
                          FROM playerattributes pa
                          JOIN playerpositions pp ON pa.player_id = pp.player_id
                          WHERE pp.position_id IN ($position_ids_str)";
        $average_result = $conn->query($average_query);
        $average = $average_result->fetch_assoc();
    } else {
        // Eğer oyuncunun mevkisi yoksa ortalama hesaplanmasın
        $average = [
            'avg_corners' => 0, 'avg_crossing' => 0, 'avg_dribbling' => 0,
            'avg_finishing' => 0, 'avg_first_touch' => 0, 'avg_free_kick_taking' => 0,
            'avg_heading' => 0, 'avg_long_shots' => 0, 'avg_long_throws' => 0,
            'avg_passing' => 0, 'avg_penalty_taking' => 0, 'avg_technique' => 0
        ];
    }

} else {
    die("Player not found.");
}

// Veritabanı bağlantısını kapat
$conn->close();
;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $player['player_name']; ?> - Player Profile</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #292940;
        color: #fff;
    }
    .container {
        max-width: 1000px;
        margin: 20px auto;
        background: #fff;
        color: #292940;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        border-radius: 10px;
        overflow: hidden;
        padding: 20px;
    }
    .player-selection {
        margin-bottom: 20px;
        text-align: center;
    }
    .player-selection input {
        padding: 10px;
        width: 180px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
        margin-right: 10px;
    }
    .player-selection button {
        padding: 10px 18px;
        background-color: #f9a826;
        color: #292940;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .player-selection button:hover {
        background-color: #e89c1e;
    }
    .main-content {
        display: flex;
        gap: 20px;
        flex-wrap: nowrap;
    }
    .player-info {
        width: 35%;
        text-align: left;
        border-right: 1px solid #f9a826;
        padding-right: 15px;
    }
    .player-info h1 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 15px;
        color: #f9a826;
    }
    .player-info img {
        max-width: 75%;
        height: auto;
        margin-bottom: 15px;
        border: 3px solid #292940;
        border-radius: 10px;
    }
    .player-info p {
        font-size: 1.1rem;
        margin: 8px 0;
    }
    .attributes-section {
        width: 65%;
        padding-left: 15px;
    }
    .attributes-section h2 {
        margin-bottom: 15px;
        font-size: 1.6rem;
        font-weight: bold;
        color: #f9a826;
    }
    .attributes-grid {
        display: flex;
        justify-content: space-between;
        gap: 15px;
    }
    .attribute-column {
        width: 32%;
        padding: 15px;
        background: #292940;
        border: 1px solid #f9a826;
        border-radius: 8px;
        color: #fff;
    }
    .attribute-column h3 {
        text-align: center;
        margin-bottom: 10px;
        font-size: 1.2rem;
        font-weight: bold;
        color: #f9a826;
    }
    .attribute {
        padding: 6px 0;
        display: flex;
        justify-content: space-between;
        font-size: 1rem;
        border-bottom: 1px solid #f9a826;
    }
    .attribute:last-child {
        border-bottom: none;
    }
    .chart-container {
        margin-top: 30px;
        text-align: center;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Info</title>
    <style>
 <.attribute {
    display: flex;
    justify-content: space-between;
    margin: 5px 0;
}

/* Set color based on the value */
.attribute.high span:last-child {
    color: green;
}

.attribute.medium span:last-child {
    color: orange;
}

.attribute.low span:last-child {
    color: gray;
}

.attributes-grid {
    display: flex;
    gap: 20px;
}

.attribute-column {
    flex: 1;
}
</style>
</head>
<body>
    <div class="container">
        <div class="main-content">
            <div class="player-info">
                <h1><?php echo $player['player_name']; ?></h1>
                <?php if (!empty($player['photo'])): ?>
                    <img src="<?php echo $player['photo']; ?>" alt="<?php echo $player['player_name']; ?>">
                <?php else: ?>
                    <p><em>Image not available</em></p>
                <?php endif; ?>
                <p><strong>Height:</strong> <?php echo $player['height']; ?> CM</p>
                <p><strong>Weight:</strong> <?php echo $player['weight']; ?> KG</p>
                <p><strong>Market Value:</strong> <?php echo number_format($player['market_value'], 2); ?> USD</p>
                <p><strong>Team:</strong> <?php echo $team['team_name']; ?></p>
                <p><strong>Positions:</strong> <?php echo implode(', ', $positions); ?></p>
            </div>

            <div class="attributes-section">
                <h2>Player Attributes</h2>
                <div class="attributes-grid">
                    <!-- Teknik Özellikler -->
                    <div class="attribute-column">
                        <h3>Technical</h3>
                        <?php
                        $technical = ['corners', 'crossing', 'dribbling', 'finishing', 'first_touch', 'free_kick_taking', 'heading', 'long_shots', 'long_throws', 'passing', 'penalty_taking', 'technique'];
                        foreach ($technical as $attr) {
                            $value = $player[$attr];
                            $class = ($value >= 70) ? 'high' : (($value >= 50) ? 'medium' : 'low');
                            echo '<div class="attribute ' . $class . '"><span>' . ucfirst(str_replace('_', ' ', $attr)) . ':</span><span>' . $value . '</span></div>';
                        }
                        ?>
                    </div>

                    <!-- Mental Özellikler -->
                    <div class="attribute-column">
                        <h3>Mental</h3>
                        <?php
                        $mental = ['aggression', 'anticipation', 'bravery', 'composure', 'concentration', 'decision', 'determination', 'flair', 'leadership', 'off_the_ball', 'positioning', 'teamwork', 'vision'];
                        foreach ($mental as $attr) {
                            $value = $player[$attr];
                            $class = ($value >= 70) ? 'high' : (($value >= 50) ? 'medium' : 'low');
                            echo "<div class='attribute {$class}'><span>" . ucfirst(str_replace('_', ' ', $attr)) . ":</span><span>{$value}</span></div>";
                        }
                        ?>
                    </div>

                    <!-- Fiziksel Özellikler -->
                    <div class="attribute-column">
                        <h3>Physical</h3>
                        <?php
                        $physical = ['acceleration', 'agility', 'balance', 'jumping_reach', 'natural_fitness', 'pace', 'stamina', 'strength'];
                        foreach ($physical as $attr) {
                            $value = $player[$attr];
                            $class = ($value >= 70) ? 'high' : (($value >= 50) ? 'medium' : 'low');
                            echo "<div class='attribute {$class}'><span>" . ucfirst(str_replace('_', ' ', $attr)) . ":</span><span>{$value}</span></div>";
                        }
                        ?>
                    </div>
                </div>
                <div class="chart-container">
                    <canvas id="radarChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<head>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $player['player_name']; ?> - Player Profile</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Genel Stil */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #2b2b2b;
            color: #ffffff;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            background: #1e1e2f;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            overflow: hidden;
            padding: 30px;
            color: #dcdcdc;
        }

        .player-info {
            text-align: center;
        }

        .player-info h1 {
            font-size: 2.8em;
            font-weight: bold;
            margin-bottom: 20px;
            color: #f9a826;
        }

        .player-info img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border: 3px solid #444;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .player-info img:hover {
            transform: scale(1.05);
        }

        .player-info p {
            font-size: 1.2em;
            margin: 10px 0;
        }

        /* Oyuncu Raporu Stili */
        .player-report {
            margin-top: 30px;
            padding: 20px;
            background-color: #292940;
            border: 1px solid #444;
            border-radius: 15px;
        }

        .player-report h2 {
            font-size: 2em;
            margin-bottom: 15px;
            color: #f9a826;
        }

        .player-report p {
            font-size: 1.2em;
            line-height: 1.8;
            color: #cccccc;
        }

        /* Chart Alanı */
        .chart-container {
            margin-top: 30px;
            padding: 25px;
            background: #292940;
            border: 1px solid #444;
            border-radius: 15px;
        }

        .chart-container canvas {
            display: block;
            margin: 0 auto;
            width: 100%;
            max-width: 800px; /* Radar chart size increased */
            height: 500px; /* Adjust height for proportional size */
        }

        /* Hover ve Geçiş Efektleri */
        button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.1em;
            font-weight: bold;
            color: #ffffff;
            background: #f9a826;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background: #d4881f;
            transform: scale(1.1);
        }
    </style>
</head>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $player['player_name']; ?> - Player Profile</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $player['player_name']; ?> - Player Profile</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <!-- Oyuncu Raporu Alanı -->
        <div class="player-report">
            <h2>Player Report</h2>
            <p>
            <?php
     echo "<p><strong>Pozisyonlar:</strong> Warren, orta sahada geniş bir görev yelpazesinde etkili olabilir. Hem ofansif hem de 
     defansif yönleriyle dikkat çeker ve farklı oyun dizilişlerinde yer alabilir. Genellikle merkez orta saha pozisyonunda 
     görev yapar, ancak oyun zekası ve esnekliği sayesinde diğer pozisyonlarda da faydalıdır.</p>";
 
     echo "<p><strong>Savunma Katkısı:</strong> Warren, sadece hücumda değil savunmada da oldukça etkili bir oyuncudur. 
     Rakip top kayıplarını anında değerlendirir ve topu kazanarak hızlı bir şekilde hücuma dönüştürür. Savunmada pozisyon 
     almadaki başarısı ve takımına olan katkısı büyük önem taşır.</p>";
 
     echo "<p><strong>Fiziksel ve Mental Özellikler:</strong></p>";
     echo "<ul>
         <li><strong>Vizyon:</strong> Warren, oyun görüşü ve saha içindeki kararları ile dikkat çeker. Topa her zaman doğru 
         bir açıdan yaklaşır ve takımına fırsatlar yaratır.</li>
         <li><strong>Flair:</strong> Teknik becerileri ve yaratıcı zekası sayesinde beklenmedik anlarda fark yaratma potansiyeline 
         sahiptir. Özellikle topa sahipken rakiplerini şaşırtabilir.</li>
         <li><strong>Çalışkanlık:</strong> Takımına her zaman katkı sağlar. Enerjik ve sürekli hareket halinde olan bir oyuncu olup, 
         oyunun her alanında etkisini gösterir.</li>
     </ul>";
 
     echo "<p><strong>Kariyer Gelişimi ve Potansiyeli:</strong> Warren Zaïre-Emery, genç yaşına rağmen futbol dünyasında büyük bir 
     yetenek olarak öne çıkmaktadır. Saha içindeki zekası ve çok yönlü oyunu ile ilerleyen yıllarda Avrupa'nın en önemli orta saha 
     oyuncularından biri olma potansiyeline sahiptir. Yüksek çalışma disiplini ve gelişime açık yapısı, onu üst düzey kulüplerin 
     radarında tutmaktadır.</p>";

$host = 'localhost'; // Sunucu adresi
$user = 'root';      // Veritabanı kullanıcı adı
$pass = '';          // Veritabanı şifresi
$db_name = 'futbol_scouting'; // Veritabanı adı

$conn = new mysqli($host, $user, $pass, $db_name);


// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Ana oyuncuyu belirle
$main_player_id = 490; // Örneğin, ana oyuncunun ID'si 1 olarak ayarlandı. Dinamik hale getirilebilir.

// Ana oyuncunun pozisyonlarını bul
$main_player_query = "
    SELECT p.player_name, GROUP_CONCAT(pos.position_name SEPARATOR ', ') AS positions, GROUP_CONCAT(pp.position_id) AS position_ids
    FROM players AS p
    JOIN playerpositions AS pp ON p.player_id = pp.player_id
    JOIN positions AS pos ON pp.position_id = pos.position_id
    WHERE p.player_id = $main_player_id
";
$main_player_result = $conn->query($main_player_query);

if ($main_player_result->num_rows > 0) {
    $main_player = $main_player_result->fetch_assoc();
    $main_player_name = $main_player['player_name'];
    $main_playerpositions = $main_player['position_ids'];
} else {
    die("Ana oyuncu bulunamadı.");
}

// Aynı pozisyondaki diğer oyuncuları bul
$similar_players_query = "
    SELECT DISTINCT p.player_id, p.player_name, p.age, p.photo, GROUP_CONCAT(pos.position_name SEPARATOR ', ') AS positions
    FROM players AS p
    JOIN playerpositions AS pp ON p.player_id = pp.player_id
    JOIN positions AS pos ON pp.position_id = pos.position_id
    WHERE pp.position_id IN (
        SELECT position_id FROM playerpositions WHERE player_id = $main_player_id
    ) AND p.player_id != $main_player_id
    GROUP BY p.player_id
    LIMIT 2
";
$similar_players_result = $conn->query($similar_players_query);

// HTML çıktı
echo "<h2>Similar player(s) for $main_player_name</h2>";
echo "<table border='1' style='width: 100%; text-align: left;'>";
echo "<tr>
        <th>Name</th>
        <th>Age</th>
        <th>Positions</th>
      </tr>";

      if ($similar_players_result->num_rows > 0) {
        while ($row = $similar_players_result->fetch_assoc()) {
            $player_id = $row['player_id']; // Oyuncunun kimlik numarası
            // Buradaki stil ile benzer oyuncuların adını daha açık bir renkte göstereceğiz
            echo "<tr>
                    <td><a href='player_details.php?player_id={$player_id}' style='color: #5f9ea0;'>{$row['player_name']}</a></td>
                    <td>{$row['age']}</td>
                    <td>{$row['positions']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Benzer oyuncu bulunamadı.</td></tr>";
    }

echo "</table>";

$conn->close();
?>

            </div>
        </div>
    </div>
</body>
</html>

                

            </div>
        </div>
    </div>
        </div>
    </div>
</body>
</html>

</div>
        </div>
    </div>
    <script>
    const radarData = {
        labels: ['Corners', 'Crossing', 'Dribbling', 'Finishing', 'First Touch', 'Free Kick Taking', 'Heading', 'Long Shots', 'Long Throws', 'Passing', 'Penalty Taking', 'Technique'],
        datasets: [
            {
                label: '<?php echo $player['player_name']; ?>',
                data: [
                    <?php echo implode(', ', array_map(function($attr) use ($player) { return $player[$attr]; }, $technical)); ?>
                ],
                fill: true,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                pointBackgroundColor: 'rgba(75, 192, 192, 1)'
            },
            {
                label: 'Average',
                data: [
                    <?php echo implode(', ', array_map(function($attr) use ($average) { return $average['avg_' . $attr]; }, $technical)); ?>
                ],
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                pointBackgroundColor: 'rgba(255, 99, 132, 1)'
            }
        ]
    };

    const radarConfig = {
        type: 'radar',
        data: radarData,
        options: {
            responsive: true,
            scales: {
                r: {
                    grid: {
                        color: '#ffffff' // Radar çizgisinin ızgara çizgileri beyaz
                    },
                    angleLines: {
                        color: '#ffffff' // Radar çizgisinin açı çizgileri beyaz
                    },
                    pointLabels: {
                        color: '#ffffff' // Radar etiket metin rengi beyaz
                    }
                }
            },
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        color: '#ffffff' // Efsane metin rengi beyaz
                    }
                }
            }
        }
    };

    const radarChart = new Chart(document.getElementById('radarChart'), radarConfig);
</script>

</body>
</html>>