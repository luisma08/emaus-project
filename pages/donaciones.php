<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="body">
    <!-- Agregando componente header -->
    <?php include('./components/header.php') ?>
    <!-- FIN -->

    <main class="main">
        <section class="banner">
            <div class="container">
                <div class="banner__container">
                    <h1 class="banner__title">Traperos de Emaús <span class="banner__title-span">Donaciones</span></h1>
                    <h2 class="banner__subtitle">¡Dona desde la comodidad de tu hogar!</h2>
                    <p class="banner__description">
                        Todo lo útil que ya no necesites nos permitirá mensualmente ayudar a los más necesitados
                    </p>
                    <a class="button button--primary" href="#contact"><i class="bi bi-balloon-heart"></i> Ayudanos a Donar</a>
                </div>
            </div>
        </section>

        <!-- Agregando componente footer -->
        <?php include('./components/contact.php') ?>
        <!-- FIN -->
    </main>
    
    <!-- Agregando componente footer -->
    <?php include('./components/footer.php') ?>
    <!-- FIN -->

    <script src="./js/header.js"></script>
</body>
</html>