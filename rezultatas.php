
<?php

        $kmi_svoris = $_GET['kmi_svoris'];
        $kmi_ūgis = $_GET['kmi_ūgis'];

        $ūgis2 = ($kmi_ūgis*$kmi_ūgis);
        $kmi = round($kmi_svoris/$ūgis2); //<--- this is critical

        if ($kmi <= 18.5) {
            $output = "SVERIATE PER MAŽAI";

        } else if ($kmi > 18.5 AND $kmi<=24.9 ) {
            $output = "NORMALUS";

        } else if ($kmi > 24.9 AND $kmi<=29.9) {
            $output = "TURITE ANTSVORĮ";

        } else if ($kmi > 30.0) {
            $output = "TURITE NUTUKIMĄ";
        }
//        echo "Jūs: ";
//        echo "$output";

    ?>
<!doctype html>
<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <title>KMI rezultatas</title>
  </head>


<body>
        <div class="container mx-auto d-flex flex-column justify-content-center">

            <div class="img_bg">
            <img src="female-blue%20(1).png"  alt="female"/>
            </div>

            <h1 class="text-center mt-2" style="color: forestgreen">Jūsų KMI indexas: <?=$kmi?> </h1>
            <h2 class="text-center mt-3" style="color: crimson"> <?php   echo "Jūs: ";
               echo "$output"; ?></h2>
<hr>
            <h3 class="text-center mt-4">KMI NORMOS</h3>

            <div class="kmi_normos">
                <img class="mt-2" src="kmi_normos.jpg"  alt="kmi normos"/>
            </div>
<
            <a href="index.php" class="text-center mt-3">Skaičiuoti iš naujo!</a>

        </div>

</body>
</html>
