<?php

/**
 * Template Name: Documentation
 *
 */
get_header();
?>

<main class="main">
     <section class="documentation container">
          <h3 class="heading-tertiary heading-tertiary--light u-margin-bottom-big">Guide d'utilisation de l'extension EZ Tracking</h3>
          <h4 class="heading-quaternary heading-quaternary--light u-margin-bottom-small">Le CRM - Description</h4>
          <p class="u-padding-bottom-big">L'extension (plugin) EZ Tracking est un CRM qui vous permet, grâce à l'interface de Wordpress, de gérer facilement vos relations client ainsi que leurs suivis.</p>
          <h4 class="heading-quaternary heading-quaternary--light u-margin-bottom-small">Installation</h4>
          <div class="documentation__list u-margin-bottom-big">
               <ol>
                    <li>Téléchargez le .zip de l'extension à partir ici: <a href="https://github.com/Bhaywe/crm-plugin/tree/main"> -> -> Télécharger <- <- </a> </li> <li>Dans l'administration Wordpress, visitez la section Extensions (ou Plugins en anglais) > Ajouter</li>
                    <li>Appuyez sur "Téléverser une extension"</li>
                    <li>Sur votre ordinateur, allez chercher le .zip précédemment télécharger</li>
                    <li>Retourner dans la section Extensions (Plugins) et appuyez sur activer</li>
               </ol>
          </div>
          <h4 class="heading-quaternary heading-quaternary--light u-margin-bottom-small">Utilisation</h4>
          <p class="u-padding-bottom-normal">Pour vous permettre de suivre vos relations clients en tout temps, vous devrez insérer le shortcode <strong>[formulairecrm]</strong> à l'endroit que vous désirez sur votre site.</p>
          <p class="u-padding-bottom-normal">Ainsi, lorsque vos clients feront une nouvelle demande de suivi, ils seront automatiquement ajoutés aux onglets "Client" et "Suivi client", de votre tableau de bord Wordpress.</p>
          <p class="u-padding-bottom-big">Vous pourrez d'ors et déjà suivre de près les suivis qui leur ont été assignés et décider de leur statut (Nouveau, Traitement, Terminé). </p>
          <p class="u-padding-bottom-normal"><strong>**Important:</strong> Dans la section "Suivis client" > Catégories des suivis, vous devrez absolument ajouter la catégorie "Autre" afin que vos clients puisse ajouter un sujet personnalisé à leur demande de suivi. </p>
     </section>
</main>


<?php
get_footer();
?>