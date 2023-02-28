<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../src/style.css">
    <title>Calculette</title>
</head>
<body>
<Section class="calculette">
    <h1 class="calculette__title">La calculette</h1>
    <form method="get" action="" class="calculette__container">
        <div class="form calculette__form1">
            <label for="first-number">Nombre 1</label>
            <input name="number1" type="number" value="0">
        </div>
        <div class="form calculette__form2">
            <label for="operator">Operateur</label>
            <select name="operator" id="operator">
                <datalist>
                    <option value="sum">+</option>
                    <option value="sous">-</option>
                    <option value="div">/</option>
                    <option value="mult">*</option>
                </datalist>
            </select>
        </div>
        <div class="form calculette__form3">
            <label for="second-number">Nombre 2</label>
            <input name="number2" type="number" value="0">
        </div>
        <div>
            <button type="submit">Calculer</button>
        </div>
    </form>
    <?php if (isset($resultat)): ?>
    <p class="resultat"> = <?= $resultat ?></p>
    <?php endif; ?>
</Section>
</body>
</html>