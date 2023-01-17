

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KMI Skaičiuoklė</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
</head>
<body class="d-flex flex-column mx-auto">

 <div class="container">
    <div class="card mb-3  mx-auto">
            <div class="row d-flex flex-row justify-content-center g-0 mt-3 mb-3">
                <div class="col-md-3  ms-2">
                    <img src="./kmi.png" class="img-fluid rounded-center " style="height: 150px" alt="kmi">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h2 class="card-title mt-3">KMI Skaičiuoklė</h2>
                    </div>
                </div>
            </div>
              <hr>

            <div class="row gutters-20 kmi-test-form m-3">
                <form action="rezultatas.php" method="get" class="col-lg-12 gutters-20  ">
                    <div  class="form-row row">
                        <div class="col-md-6" >
                            <label for="kmi_ūgis" class="mb-1">Jūsų ūgis (metrais, pvz.: 1.68):</label>
                            <input type="text"  id="kmi_ūgis" name="kmi_ūgis" aria-required="true" class="form-control error error">
                        </div>
                        <div class="col-md-6 ">
                            <label for="kmi_svoris" class="mb-1">Jūsų svoris (kilogramais, pvz.: 50):</label>
                            <input type="text"  id="kmi_svoris" name="kmi_svoris" aria-required="true" class="form-control error">
                        </div>
                    </div>
                     <div class="button d-flex justify-content-center gap-2">

                         <button  type="submit" class="btn btn-primary btn-block radius mt-3 gap-2">Skaičiuoti kūnos masės indeksą</button>

                        <button type="reset" class="btn btn-primary btn-block radius mt-3">Trinti</button>
                     </div>
                </form>
<!--                <a href="rezultatas.php?x=2$y=2">koks</a>-->

            </div>
     </div>
</div>

</body>
</html>