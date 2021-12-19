<?php include("../db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script async src="./math.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.15.1/dist/katex.min.css" integrity="sha384-R4558gYOUz8mP9YWpZJjofhk+zx0AS11p36HnD2ZKj/6JR5z27gSSULCNHIRReVs" crossorigin="anonymous">

    <!-- The loading of KaTeX is deferred to speed up page rendering -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.15.1/dist/katex.min.js" integrity="sha384-z1fJDqw8ZApjGO3/unPWUPsIymfsJmyrDVWC8Tv/a1HeOtGmkwNd/7xUS0Xcnvsx" crossorigin="anonymous"></script>

    <!-- To automatically render math in text elements, include the auto-render extension: -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.15.1/dist/contrib/auto-render.min.js" integrity="sha384-+XBljXPPiv+OzfbB3cVmLHf4hdUFHlWNZN5spNQ7rmHTXpd7WvJum6fIACpNNfIR" crossorigin="anonymous"
        onload="renderMathInElement(document.getElementById('content'));"></script>
</head>
<body>
    <main>

    <nav id="sidebar" class="sidebar">
        <div class="sidebar-scrollbox">
            <?php
                $sql = 'SELECT * FROM chapters';
                $datas = $db->query($sql);
                $a = $datas->fetchAll();

                // echo '<h3 id="title-infos"> Voici la liste des chapitres associés à leurs numéros </h3>'; POUR CEDRIC SI TU VOIS A ME DIRE SI TU VEUX QUE L ON PRECISE OU NON CAR CA PEUT SUREMENT PARAITRE BISARD A COUP D OEIL
                foreach ($a as $ch) {
                    $id = $ch['chapters_id'];
                    $sql = "SELECT * FROM examples WHERE examples_chapter_id=$id";
                    $datas = $db->query($sql);
                        
                    echo '<summary><strong id="bold">' . $ch['chapters_number'] . '</strong>. ' . $ch['chapters_title'] . '</summary>';

                    while ($row=$datas->fetch()) {
                        $href = '?t=' . $ch['chapters_id'] . '-' . $row['examples_number'];
                        echo '<ol class="chapters">
                                <li class="chapters-examples">
                                    <a id="examples" href="' . $href . '"> 
                                    <strong id="bold">1.1.</strong>
                                    Exemple ' . $row['examples_number'] . '</a>
                                </li>
                            </ol>';
                            // End of li for numbers and examples
                                    
                    }

                    echo "</details>";
                }

            ?>
        </div>
        <!-- End/sidebar-scrollbox  -->
    </nav>
    <!-- End/sidebar -->
    <section id="content">
        <?php
            $t = $_GET['t'];
            list($chapter_id, $examples_number) = explode("-", $t);

            if (empty($chapter_id) or empty($examples_number)) include("./error.php");

            $sql = "SELECT * FROM chapters JOIN examples ON chapters_id=examples_chapter_id WHERE examples_number=$examples_number AND chapters_id=$chapter_id";

            $datas = $db->query($sql);
            $row = $datas->fetch();

            $path = $row["examples_path"];

            if (!empty($row)) {
                include($path);
            } else include("./error.php");
        ?>
    </section>
    <!-- End/content -->
    </main>
</body>
</html>