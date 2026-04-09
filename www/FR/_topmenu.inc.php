<?php 
    $current_page = basename($_SERVER['PHP_SELF'], ".php"); 
    echo "<!-- Current page: $current_page -->".chr(10);
?>

<nav id="main-nav">
    <ul class="sf-menu">
        <li <?=($current_page == 'index' || $current_page == '.' ? 'class="current"' : null)?>>
            <a href=".">Home</a> <!-- current -->
        </li>
        <li <?=($current_page == 'QuiSommesNous' || $current_page == 'Histoire' || $current_page == 'LeChantier' || $current_page == 'LeChantier_CaleSeche' || $current_page == 'LeChantier_PortiqueRoulant' || $current_page == 'LeChantier_CaleFlottante' || $current_page == 'LeChantier_Elevateur' || $current_page == 'LeChantier_Autres') ? 'class="current"' : null ;?> ><a href="#" onclick="return false;">Navalria</a>
            <ul>
                <li><a href="QuiSommesNous">Qui sommes nous</a></li>
                <li><a href="Histoire">Histoire</a></li>
                <li><a href="LeChantier">Le Chantier</a>
                <ul>
                    <li><a href="LeChantier">Informations générales</a></li>
                    <li><a href="LeChantier_CaleSeche">Cale sèche</a></li>
                    <li><a href="LeChantier_PortiqueRoulant">Portique roulant</a></li>
                    <li><a href="LeChantier_CaleFlottante">Cale flottante</a></li>
                    <li><a href="LeChantier_Elevateur">Elévateur</a></li>
                    <li><a href="LeChantier_Autres">Autres équipements</a></li>
                    </ul>
                    </li>
                <li <?=($current_page == 'Associations' || $current_page == '.') ? 'class="current"' : null; ?>><a href="Associations">Associations</a></li>
            </ul>
        </li>
        </li>
        <li <?=($current_page == 'Portefeuille') ? 'class="current"' : null; ?>><a href="Portefeuille">Portefeuille</a>
        </li>
        
        <li><a href="<?=LINK_OPORTUNIDADES_PT?>" target="_blank">Opportunités</a></li>
        <li><a href="<?=LINK_PLURIS_PT?>" target="_blank">Investissements Pluris</a></li>
        
        <li <?=($current_page == 'contact' ) ? 'class="current"' : null;?> ><a href="contact">Contact</a></li>
    </ul>
</nav>