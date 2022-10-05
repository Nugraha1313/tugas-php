<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Belajar</title>
</head>
<body>
    <header>
        <!-- hero -->
        <div class="hero">
            <h1>Ini Adalah Header</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ratione aliquid error amet asperiores ea, necessitatibus, fugiat voluptas ipsa magni, molestias inventore. Libero a aspernatur quaerat odit quas, repellat maiores nobis laudantium dolorem dignissimos cupiditate corrupti fuga earum quia numquam aliquid, nulla consequatur quasi delectus? Facilis qui sunt iure iste aperiam, provident odio neque quibusdam placeat, illo recusandae eum distinctio ipsa minus deleniti adipisci! Voluptas excepturi temporibus consequatur id facilis ut harum officiis nisi officia saepe odio vero, adipisci fugit obcaecati error. Reprehenderit ex sed, expedita, dolore amet modi libero beatae ut ad fuga nesciunt, nam tempore ipsum ducimus quaerat!</p>
        </div>
        <!-- navbar -->
        <div class="navbar">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=task">task</a></li>
            </ul>
        </div>

    </header>
    <main>
        <!-- about -->

        <!-- task -->
        <?php 
        $page = $_REQUEST['page'];
        if ($page == 'home') {
            include 'home.php';
        } elseif ($page == 'about') {
            include 'about.php';
        } elseif ($page == 'task') {
            include 'task.php';
        }
        else {
            include 'home.php';
        }
        
        ?>
    </main>
</body>
</html>