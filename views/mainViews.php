
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Bienvenue sur la page d'accueil</h1>
    </header>
    <main>
        <section>
            <h2>Capturé le pokemon</h2>
            <?php if (isset($pokerandom)) : ?>
                <p>un pokemon sauvage apparait : <?= $pokerandom->getName() ?></p>
                <form action="/capture" method="POST">
                    <button name="id" value=<?= $pokerandom->getId() ?>>Capturer</button>
                    <a href="">Laisser tranquile</a>
                </form>
            <?php else : ?>
                <p>Plus de pokemon</p>
            <?php endif ?>    
        </section>
        <section>
            <h2>pokemon Capturés</h2>
            <div>
                <?php foreach ($pokemonCaptured as $poke) : ?> 
                    <article>
                        <h3><?= $poke->getName() ?></h3>
                        <form action="/free" method="post">
                            <button name="id" value=<?= $poke->getId() ?> >Liberer pokemon</button>
                        </form>
                    </article>
                <?php endforeach ?>
            </div>
        </section>
    </main>
</body>
</html>