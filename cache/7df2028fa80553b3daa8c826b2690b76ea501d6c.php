<?php $__env->startSection('content'); ?>

<h1>Adressenboek</h1>

<img class="img responsive img-rounded" src="img/adressenboek.jpg">

<h2>Info</h2>
<p>In het online adressenboek staan alle huis- en zowel alle emailadressen opgeslagen in de database. Je kan ze zien in de lijst als gast voor het geval dat je een adres van iemand of van een bedrijf wilt opzoeken.</p>
<p>Maar als je officieel een account hebt en ingelogd staat, dan kun je als administrator alle gegevens van deze adressen aanpassen of verwijderen in de Backend van deze website. U kunt zelf een adres van iemand of van een bedrijf die u kent in de lijst toevoegen en laten zien in de lijst.</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>