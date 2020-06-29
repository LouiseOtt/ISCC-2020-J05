<?php
$nom_produit='T-shirt simple';
$couleur='blanc';
$prix=10.50;
$disponible='true';
$quantité=10;
$cout=$prix*3;
$total=$prix*$quantité;
echo"<h3>Le nom du produit est {$nom_produit}.</h3}";

echo"<h3>Il reste {$quantité} produits en stock.</h3>";

echo"<h3>Le produit {$nom_produit} est de couleur {$couleur}.</h3>"; 

echo"<h4>Acheter 3 produits couterait {$cout}.</4>";

echo"<h4>Acheter la totalité des produits couterait {$total}.</h4>";

if($disponible="true"){
    echo"<p> Le produit {$nom_produit} est disponible en ligne."}

else{echo"<p> Le produit {$nom_produit} n’est malheureusement plus disponible."

    echo"<p> Le produit {$nom_produit} n’est malheureusement plus disponible."
}
if($quantité>=5){
    echo"<p>Il reste {$quantité} produits en magasins</p>";
}
elseif($quantité<5 and $quantité>1){
    echo"<p>Il ne reste que {$quantité} produits en magasin</p>";
}
elseif($quantité=1){
    echo"<p>Il ne reste qu'un produit en magasin</p>";
}
elseif($quantité=0){
    echo"<p>Il ne reste plus de produit en magasin</p>";
}

?>