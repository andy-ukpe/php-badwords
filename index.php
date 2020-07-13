<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative
lunghezza e sostituire la badword passata in GET con tre *. -->
<?php
  $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $lunghezzaTesto = strlen($testo);
  $badword = $_GET['badword'];
  $testoModificato = str_replace($badword, '***', $testo);
 ?>
 <p>Il testo originale è: "<?php echo $testo ?>"</p>
 <p>La lunghezza del testo è : <?php echo $lunghezzaTesto ?></p>
 <p>Il testo modificato è : <?php echo $testoModificato ?></p>
