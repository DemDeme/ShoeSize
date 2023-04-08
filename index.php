<?php 
    require('data.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShoeSize Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</html>
<body>
    <header>
        <div class="logoh">
            <a href="#"><img src="img/logo.png" alt="logo" title="ShoeSize"></a>
        </div>
        <div class="bigtitle">
            <span class="let1">S</span><span class="let2">h</span><span class="let3">o</span><span class="let4">e</span><span class="let5">S</span><span class="let6">i</span><span class="let7">z</span><span class="let8">e</span>
        </div>
        <!-- <div class="social">
             Links other websites 
        </div> -->
    </header>
    <div class="concept">
        <h1>Plus qu'un projet, un CONCEPT</h1>
    </div>
    
    <div class="banner">
        <div class="tour"><img src="img/tour_eiffel.jpg" alt="Tour Eiffel"></div>
        <div class="shoe">
            <img src="img/shoe.png" alt="Shoe" class="shoes shoe_8">
            <img src="img/shoe.png" alt="Shoe" class="shoes shoe_7">
            <img src="img/shoe.png" alt="Shoe" class="shoes shoe_6">
            <img src="img/shoe.png" alt="Shoe" class="shoes shoe_5">
            <img src="img/shoe.png" alt="Shoe" class="shoes shoe_4">
            <img src="img/shoe.png" alt="Shoe" class="shoes shoe_3">
            <img src="img/shoe.png" alt="Shoe" class="shoes shoe_2">
            <img src="img/shoe.png" alt="Shoe" class="shoes shoe_1">
        </div>
        <div class="text">
            <p>Bonjour à toi, Ô être curieux !</p>
            <p>Je suis sûr que toi aussi tu t'es déjà retrouvé dans l'une des situations suivantes :</p>
            <p class="citation">
                Mince, ce dressing que je veux acheter est magnifique mais... N'est-il pas légérement 
                trop grand pour ma hauteur sous plafond ?
            </p>
            <p>Ou encore :</p>
            <p class="citation">Est-ce que ce magnifique Erable du Japon vieux de 50 ans va rentrer dans ma Clio 3 ?</p>
            <p>Ou même :</p>
            <p class="citation">Hum... Si je met la Tour Eiffel dans mon jardin, vais-je gener la visibilité de mon voisin ?..</p>
            <p>
                Et bien, fort heuresement, ce site te permettra de résoudre toutes ces questions 
                existentielles en un claquement de doigts. Tout ce dont tu as besoin, c'est connaitre 
                ta pointure de <strong>chaussures</strong>.
            </p>
        </div>
    </div>
    <div class="glob-convert">
        <div class="convert">
            <div class="titleconv">
                <h1>Convertisseur</h1>
            </div>
            <div class="indic">
                <div class="indic-l">
                    <span class="object-indic ob-left">Ici ton objet</span>
                    <img src="img/red-arrow.png" alt="Flèche vers l'objet" class="redarrow ar1">
                </div>
                <div class="indic-r">
                    <span class="object-indic ob-right">et ici ta pointure</span>
                    <img src="img/red-arrow.png" alt="Flèche vers l'objet" class="redarrow ar2">
                </div>
            </div>
            <div class="converter">
                <form action="#">
                    <select name="object" id="object">
                        <?php
                            $i=0;
                            foreach($data2 as $datas) {
                        ?>
                            <option value="<?=$data2[$i][1]?>"><?=$data2[$i][0]?></option>";
                        <?php
                            $i++;
                            }
                        ?>
                        <!-- <option value="toureiffel">Tour Eiffel</option>
                        <option value="pax">Dressing Pax Ikea </option>
                        <option value="lampadaire">Lampadaire Urbain</option> -->
                    </select>
                    <span class="en"> EN </span>
                    <select name="shoes" id="shoes">
                        <?php
                            $i=0;
                            foreach($data1 as $datas) {
                        ?>
                            <option value="<?=$data1[$i][1]?>"><?=$data1[$i][0]?></option>";
                        <?php
                            $i++;
                            }
                        ?>
                    </select> 
                    <img src="img/arrow.png" alt="Flèche droite" class="arrow">
                    <div class="result">
                        <span class="howmany">3000</span>
                        <img src="img/shoe.png" alt="Shoe" class="img-result">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="globe-add">
        <div class="convert2">
            <div class="add-banner">
                Ton objet n'existe pas ?
            </div>
            <form action="add-form.php" method="POST">
                <table>
                    <tr>
                        <td><label for="name-object">Nom de ton objet : </label></td>
                        <td><input type="text" id="name-object" name="name-object" require></td>
                    </tr>
                    <tr>
                        <td><label for="size-object">Sa taille (en m) : </label></td>
                        <td><input type="number" id="size-object" name="size-object" require></td>
                    </tr>
                </table>
                <input type="submit" value="Ajouter" class="btn-add">
            </form>
        </div>
    </div>
    <div class="foot">
        <div class="logo">
            <a href="#"><img src="img/logo.png" alt="logo" title="ShoeSize"></a>
        </div>
        <div class="copyright"><u>ShoeSize</u> codé par Mehdi ALA</div>
        <div class="social">
            <a href="https://twitter.com/"><img src="img/twitter.png" target="_blank" alt="Twitter"></a>
            <a href="https://www.instagram.com/"><img src="img/instagram.png" target="_blank" alt="Instagram"></a>
            <a href="https://www.linkedin.com/in/mehdiala/"><img src="img/linkedin.png" target="_blank" alt="Linkedin"></a>
        </div>
    </div>
</body>
<script>
    function reveal2() {
  var reveals = document.querySelectorAll(".convert2");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
function reveal() {
  var reveals = document.querySelectorAll(".convert");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", reveal);
window.addEventListener("scroll", reveal2);
</script>