<?php include("../db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script async src="./math.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
    <main>

    <nav>
        <?php
            $sql = 'SELECT * FROM chapters';
            $datas = $db->query($sql);
            $a = $datas->fetchAll();

            foreach ($a as $ch) {
                $id = $ch['chapters_id'];
                $sql = "SELECT * FROM examples WHERE examples_chapter_id=$id";
                $datas = $db->query($sql);

                echo '<details><summary>' . $ch['chapters_title'] . '</summary>';

                while ($row=$datas->fetch()) {
                    $href = '?t=' . $ch['chapters_id'] . '-' . $row['examples_number'];
                    echo '<a href="' . $href . '"> Exemple ' . $row['examples_number'] . '</a>';
                }

                echo "</details>";
            }

        ?>
            
    </nav>
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
    </main>
</body>
</html>