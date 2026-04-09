<?php 
    $current_page = basename($_SERVER['PHP_SELF'], ".php"); 
    echo "<!-- Current page: $current_page -->".chr(10);
?>

<nav id="main-nav">
    <ul class="sf-menu">
        <li <?=($current_page == 'index' || $current_page == '.' ? 'class="current"' : null)?>>
            <a href=".">Home</a> <!-- current -->
        </li>
        <li <?=($current_page == 'WhoWeAre' || $current_page == 'history' || $current_page == 'shipyard' || $current_page == 'shipyard_DryDock' || $current_page == 'shipyard_GantryCrane' || $current_page == 'shipyard_FloatingDock' || $current_page == 'shipyard_Shiplift' || $current_page == 'shipyard_otherEquipment') ? 'class="current"' : null ;?> ><a href="#" onclick="return false;">Navalria</a>
            <ul>
                <li><a href="WhoWeAre">Who We Are</a></li>
                <li><a href="history">History</a></li>
                <li><a href="shipyard">The Shipyard</a>
                <ul>
                        <li><a href="shipyard">General Information</a></li>
                        <li><a href="shipyard_DryDock">Dry Dock</a></li>
                        <li><a href="shipyard_GantryCrane">Gantry Crane</a></li>
                        <li><a href="shipyard_FloatingDock">Floating Dock</a></li>
                        <li><a href="shipyard_Shiplift">Shiplift</a></li>
                        <li><a href="shipyard_otherEquipment">Other Equipment</a></li>
                    </ul>
                    </li>
                <li <?=($current_page == 'associacoes' ) ? 'class="current"' : null ;?> ><a href="associacoes">Associations</a></li>
            </ul>
        </li>
        </li>
        <li <?=($current_page == 'portfolio') ? 'class="current"' : null; ?>><a href="portfolio">Portfolio</a>
        </li>
        
        <li><a href="<?=LINK_OPORTUNIDADES_PT?>" target="_blank">Opportunities</a></li>
        <li><a href="<?=LINK_PLURIS_PT?>" target="_blank">Pluris Investments</a></li>
        
        <li <?=($current_page == 'contact' ) ? 'class="current"' : null;?> ><a href="contact">Contact</a></li>
    </ul>
</nav>