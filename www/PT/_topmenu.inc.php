<?php 
    $current_page = basename($_SERVER['PHP_SELF'], ".php"); 
    echo "<!-- Current page: $current_page -->".chr(10);
?>

<nav id="main-nav">
    <ul class="sf-menu">
        <li <?=($current_page == 'index' || $current_page == '.' ? 'class="current"' : null)?>>
            <a href=".">Home</a> <!-- current -->
        </li>
        <li <?=($current_page == 'quemSomos' || $current_page == 'historia' || $current_page == 'estaleiro' || $current_page == 'estaleiro_DocaSeca' || $current_page == 'estaleiro_Portico' || $current_page == 'estaleiro_DocaFlutuante' || $current_page == 'estaleiro_Elevador' || $current_page == 'estaleiro_outros') ? 'class="current"' : null ;?> ><a href="#" onclick="return false;">Navalria</a>
            <ul>
                <li><a href="quemSomos">Quem Somos</a></li>
                <li><a href="historia">História</a></li>
                <li><a href="estaleiro">O Estaleiro</a>
                <ul>
                        <li><a href="estaleiro">Informação geral</a></li>
                        <li><a href="estaleiro_DocaSeca">Doca seca</a></li>
                        <li><a href="estaleiro_Portico">Pórtico rolante</a></li>
                        <li><a href="estaleiro_DocaFlutuante">Doca flutuante</a></li>
                        <li><a href="estaleiro_Elevador">Elevador de navios</a></li>
                        <li><a href="estaleiro_outros">Outros equipamentos</a></li>
                    </ul>
                    </li>
                <li <?=($current_page == 'associacoes' ) ? 'class="current"' : null ;?> ><a href="associacoes">Associações</a></li>
            </ul>
        </li>
        </li>
        <li <?=($current_page == 'portfolio') ? 'class="current"' : null; ?>><a href="portfolio">Portefólio</a>
        </li>
        
        <li><a href="<?=LINK_OPORTUNIDADES_PT?>" target="_blank">Oportunidades</a></li>
        <li><a href="<?=LINK_PLURIS_PT?>" target="_blank">Pluris Investments</a></li>
        
        <li <?=($current_page == 'contact' ) ? 'class="current"' : null;?> ><a href="contact">Contactos</a></li>
    </ul>
</nav>