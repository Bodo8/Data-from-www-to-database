<?php
declare(strict_types=1);

namespace Tests\Unit\Models\MotherObject;

/**
 * Class StringsHtmlProvider
 * @author BogusŁaw Trojański
 */
final class StringsHtmlProvider
{

    public static function getBodiesFromBody(): array
    {
        $strHtml = 'input-group-btn"><button id="findButton" name="szukaj" type="submit" class="btn btn-default findBtn" tabindex="3">
<span><img src="https://zabawki-malik.pl/gfx/1618826409.1879.png" alt="" width="699" height="300">
<span class="fa fa-search"></span><span class="txt">Szukaj</span></button></span><input type="hidden" value="0" name="kat"></div><div><input type="hidden" name="idz" value="" ></div></form>&#xD;
<script>&#xD;
$(function() {&#xD;
        let findForm=document.querySelectorAll(".findForm");&#xD;
        if(findForm) {&#xD;
                findForm.forEach((ff)=>{&#xD;
                        let ffInput=ff.querySelector(".findInput");&#xD;
                        let ffBtn=ff.querySelector(".findBtn");&#xD;
                        if(ffInput && ffBtn) {&#xD;
                                ffInput.onkeyup = (e) => ff.classList.remove("findForm-Error");&#xD;
                                ffBtn.onclick= (e) => { if(ffInput.value=="") {e.preventDefault(); ff.classList.add("findForm-Error"); ffInput.focus();} };&#xD;
                        }&#xD;
                });&#xD;
        }&#xD;
});&#xD;
</script></div><ul class="nav navbar-nav navbar-left" id="menuHeader">
<link &#rel="stylesheet" &#property="stylesheet" &#href="szablony/Malik/grafika/plugins.css">
<li class="link"><a  href="logowanie.php"><span>Logowanie</span></a></li><li class="link"><a  href="rejestracja.php"><span>Rejestracja</span></a></li></ul></div></div><header id="header"><div class="hidden-lg hidden-md"><div class="mediumWrap"><div id="specialLogo"><a class="mainLogo" href="https://zabawki-malik.pl/" title=""><span><img src="https://zabawki-malik.pl/gfx/1618826409.1879.png" alt="" width="699" height="300"></span></a></div><div class="navbar-collapse collapse in" id="mobi_search"><div class="navbar-form" role="search"><FORM style="margin : 0;" ENCTYPE="multipart/form-data" ACTION="listaProduktow.php?kat=0" METHOD="get" NAME="wyszukiwarka_mobile" ><div class="findForm input-group mobile"><input type="search" name="dbFin" value=""  class="form-control findInput" aria-label="Wyszukiwana fraza" id="findQuery2" placeholder="Wyszukiwana fraza"     ><span class="input-group-btn">';

        return str_word_count($strHtml, 1, '></ =0123456789');
    }

    public static function getLittleBody(): string
    {
        return $strHtml = '
       <meta name = "apple-mobile-web-app-title" content = "Zabawki Malik" id="wrapper">';
        }

    public static function getInnerBody(): string
    {
        return $strHtml = 'input-group-btn"><button id="findButton" name="szukaj" type="submit" class="btn btn-default findBtn" tabindex="3"><span class="fa fa-search"></span><span class="txt">Szukaj</span></button></span><input type="hidden" value="0" name="kat"></div><div><input type="hidden" name="idz" value="" ></div></form>&#xD;
<script>&#xD;
$(function() {&#xD;
        let findForm=document.querySelectorAll(".findForm");&#xD;
        if(findForm) {&#xD;
                findForm.forEach((ff)=>{&#xD;
                        let ffInput=ff.querySelector(".findInput");&#xD;
                        let ffBtn=ff.querySelector(".findBtn");&#xD;
                        if(ffInput && ffBtn) {&#xD;
                                ffInput.onkeyup = (e) => ff.classList.remove("findForm-Error");&#xD;
                                ffBtn.onclick= (e) => { if(ffInput.value=="") {e.preventDefault(); ff.classList.add("findForm-Error"); ffInput.focus();} };&#xD;
                        }&#xD;
                });&#xD;
        }&#xD;
});&#xD;
</script></div><ul class="nav navbar-nav navbar-left" id="menuHeader"><li class="link"><a  href="logowanie.php"><span>Logowanie</span></a></li><li class="link"><a  href="rejestracja.php"><span>Rejestracja</span></a></li></ul></div></div><header id="header"><div class="hidden-lg hidden-md"><div class="mediumWrap"><div id="specialLogo"><a class="mainLogo" href="https://zabawki-malik.pl/" title=""><span><img src="https://zabawki-malik.pl/gfx/1618826409.1879.png" alt="" width="699" height="300"></span>
<link &#rel="stylesheet" &#property="stylesheet" &#href="szablony/Malik/grafika/plugins.css">
<script>&#xD;
$(function() {&#xD;
        let findForm=document.querySelectorAll(".findForm");&#xD;</script>
</a></div><div class="navbar-collapse collapse in" id="mobi_search"><div class="navbar-form" role="search">
<link &#rel="stylesheet" &#property="stylesheet" &#href="szablony/Malik/grafika/plugins.css">
<FORM style="margin : 0;" ENCTYPE="multipart/form-data" ACTION="listaProduktow.php?kat=0" METHOD="get" NAME="wyszukiwarka_mobile" ><div class="findForm input-group mobile"><input type="search" name="dbFin" value=""  class="form-control findInput" aria-label="Wyszukiwana fraza" id="findQuery2" placeholder="Wyszukiwana fraza"     ><span class="input-group-btn">';

    }

    public static function getBigInnerBody(): string
    {
        return $strHtml = '<p><!DOCTYPE html><html lang="pl"><head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=5.0, user-scalable=yes">
<!-- Oprogramowanie sklepów BestSeller | www.InternetoweSklepy.org | InfoSerwis, ul. Winogrady 60, 61-659 PoznaÅ , Polska | www.InfoSerwis.org -->
<title>Happy People</title><meta name="Keywords" content="Happy People"><meta name="Description" content="Happy People"><meta name="apple-mobile-web-app-title" content="Zabawki Malik"><meta property="article:author" content="Zabawki Malik"><meta property="article:publisher" content="Zabawki Malik"><link rel="shortcut icon" href="gfx/i1453908228.jpg"><link rel="icon" href="gfx/i1453908228.jpg"><script src="js/jquery-1.12.1.min.js"></script><script src="js/jquery-ui-1.11.4.min.js"></script><script async src="js/jquery-migrate-1.2.1.min.js"></script><script async src="js/rwd/jquery.ui.touch-punch.min.js"></script><link rel="stylesheet" property="stylesheet" href="js/jquery-ui-1.11.4.min.css"><link rel="stylesheet" property="stylesheet" href="szablony/Malik/grafika/css/bootstrap.min.css"><link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet"><link rel="preload" href="szablony/Malik/grafika/plugins.css" as="style"></head><body ><div class="normalPage productPage twoColumnSet" id="wrapper" ><div id="wrapperBackground" ><link rel="stylesheet" property="stylesheet" href="szablony/Malik/grafika/plugins.css"><link rel="stylesheet" property="stylesheet" href="szablony/Malik/grafika/rwd.css?v=1624532468"><link rel="stylesheet" property="stylesheet" href="szablony/Malik/grafika/rwd_005.css?v=1624532468"><div class="hidden-sm hidden-xs" id="overHeader"><div class="container"><div id="quickSearch"><FORM style="margin : 0;" ENCTYPE="multipart/form-data" ACTION="listaProduktow.php?kat=0" METHOD="get" NAME="wyszukiwarka" ><div class="findForm input-group"><input type="search" name="dbFin" value=""  class="form-control findInput" aria-label="Wyszukiwana fraza" id="findQuery" placeholder="Wyszukiwana fraza"     ><span class="input-group-btn"><button id="findButton" name="szukaj" type="submit" class="btn btn-default findBtn" tabindex="3"><span class="fa fa-search"></span><span class="txt">Szukaj</span></button></span><input type="hidden" value="0" name="kat"></div><div><input type="hidden" name="idz" value="" ></div></form>&#xD;
<script>&#xD;
$(function() {&#xD;
        let findForm=document.querySelectorAll(".findForm");&#xD;
        if(findForm) {&#xD;
                findForm.forEach((ff)=>{&#xD;
                        let ffInput=ff.querySelector(".findInput");&#xD;
                        let ffBtn=ff.querySelector(".findBtn");&#xD;
                        if(ffInput && ffBtn) {&#xD;
                                ffInput.onkeyup = (e) => ff.classList.remove("findForm-Error");&#xD;
                                ffBtn.onclick= (e) => { if(ffInput.value=="") {e.preventDefault(); ff.classList.add("findForm-Error"); ffInput.focus();} };&#xD;
                        }&#xD;
                });&#xD;
        }&#xD;
});&#xD;
</script></div><ul class="nav navbar-nav navbar-left" id="menuHeader"><li class="link"><a  href="logowanie.php"><span>Logowanie</span></a></li><li class="link"><a  href="rejestracja.php"><span>Rejestracja</span></a></li></ul></div></div><header id="header"><div class="hidden-lg hidden-md"><div class="mediumWrap"><div id="specialLogo"><a class="mainLogo" href="https://zabawki-malik.pl/" title=""><span><img src="https://zabawki-malik.pl/gfx/1618826409.1879.png" alt="" width="699" height="300"></span></a></div><div class="navbar-collapse collapse in" id="mobi_search"><div class="navbar-form" role="search"><FORM style="margin : 0;" ENCTYPE="multipart/form-data" ACTION="listaProduktow.php?kat=0" METHOD="get" NAME="wyszukiwarka_mobile" ><div class="findForm input-group mobile"><input type="search" name="dbFin" value=""  class="form-control findInput" aria-label="Wyszukiwana fraza" id="findQuery2" placeholder="Wyszukiwana fraza"     ><span class="input-group-btn"><button id="findButton2" name="szukaj" type="submit" class="btn btn-default findBtn" tabindex="3"><span class="fa fa-search"></span><span class="txt">Szukaj</span></button></span><input type="hidden" value="0" name="kat"></div><div><input type="hidden" name="idz" value="" ></div></form></div></div></div><div class="collapse navbar-collapse" id="mobi_clientMenu"><ul class="nav navbar-nav"><li class="link"><a  href="logowanie.php"><span>Logowanie</span></a></li><li class="link"><a  href="rejestracja.php"><span>Rejestracja</span></a></li></ul></div></div><div class="navbar-header navbar-inverse" id="mobiMenu"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sideColLeft"><span class="sr-only">Panel</span><span class="ico fa fa-sliders"></span></button><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobi_menuCat"><span class="sr-only">Menu</span><span class="ico fa fa-bars"></span></button><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobi_clientMenu"><span class="sr-only">Panel</span><span class="ico fa fa-user" aria-hidden="true"></span></button><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobi_menuTop"><span class="sr-only">Info</span><span class="ico fa fa-link" aria-hidden="true"></span></button><div class="hidden-lg hidden-md" id="mobi_quickCart"><div class="cart cartEmpty"><span class="icon fa fa-shopping-cart"></span><a class="cart" rel="nofollow" href="koszyk.php" title="PrzejdÅº do koszyka"><span class="rows"><span class="basketItems"><span class="tags">W koszyku:</span> <span class="value">0</span></span> <span class="sep">|</span> <span class="basketTotal"><span class="tags">Do zapÅ aty:</span> <span class="value"><span class="price">0,00<span class="currency">PLN</span></span></span></span></span></a></div></div></div><div class="container hidden-sm hidden-xs"><div id="mainTop"><div id="logo"><div itemscope itemtype="http://schema.org/Organization"><a itemprop="url" class="mainLogo" href="https://zabawki-malik.pl/" title="" style="width: 699px;"><span><img itemprop="logo" src="https://zabawki-malik.pl/gfx/1618826409.1879.png" alt="" width="699" height="300"></span></a></div></div><div id="quickCart"><div class="cart cartEmpty"><span class="icon fa fa-shopping-cart"></span><a class="cart" rel="nofollow" href="koszyk.php" title="PrzejdÅº do koszyka"><span class="rows"><span class="basketItems"><span class="tags">W koszyku:</span> <span class="value">0</span></span> <span class="sep">|</span> <span class="basketTotal"><span class="tags">Do zapÅ aty:</span> <span class="value"><span class="price">0,00<span class="currency">PLN</span></span></span></span></span></a></div></div></div></div></header><div id="underHeaderOuter"><script>$(document).ready(function(){$("#underHeaderOuter").height($("#underHeader").outerHeight(true));});</script><div class="container-fluid hidden-sm hidden-xs" id="underHeader"><div class="container"><div id="menuTop"><a class="smallLogo" href="https://zabawki-malik.pl/" title=""><span><img src="https://zabawki-malik.pl/gfx/1618826416.2986.png" alt="" width="233" height="100"></span></a><ul   class="nav navbar-nav"  ><li   class="dropdown lvl1"   ><a href="index.php"   title="Strona gÅ ówna"  >Strona gÅ ówna</a></li><li   class="dropdown lvl1"   ><a href="o-firmie,6,26.htm"   title="O firmie"  >O firmie</a></li><li   class="dropdown lvl1"   ><a href="do-pobrania,0,37.htm"   title="Do pobrania"  >Do pobrania</a></li><li   class="dropdown lvl1"   ><a href="kontakt,0,38.htm"   title="Kontakt"  >Kontakt</a></li></ul><ul  class="dropdown-menu nav-links"  ><li  class="dropdown dropdown-submenu"    ><a href=\'logowanie,11,32.htm\' >Logowanie</a></li><li  class="dropdown dropdown-submenu"    ><a href=\'o-firmie,11,26.htm\' >O FIRMIE</a></li><li  class="dropdown dropdown-submenu"    ><a href=\'do-pobrania,11,37.htm\' >Do pobrania</a></li><li  class="dropdown dropdown-submenu"    ><a href=\'kontakt,11,38.htm\' >Kontakt</a></li></ul><script>(function($){$(document).ready(function(){$(\'ul.dropdown-menu [data-toggle=dropdown]\').on(\'click\', function(event) {event.preventDefault(); event.stopPropagation(); $(this).parent().siblings().removeClass(\'open\');$(this).parent().toggleClass(\'open\');});});})(jQuery);</script></div></div></div></div><div class="container-fluid hidden-md hidden-lg" id="mobi_underHeaderCat"><div class="container"><div class="navbar-collapse collapse" id="mobi_menuCat"><ul   class="nav navbar-nav"  ><li   class="dropdown lvl1"   ><a href="malblo,220,0.html"   title="MalBlo"  >MalBlo</a></li><li   class="dropdown lvl1"   ><a href="klein,185,0.html"   title="Klein"  >Klein</a></li><li   class="dropdown lvl1"   ><a href="rc-happy-people,189,0.html"   title="RC Happy People"  >RC Happy People</a></li><li   class="dropdown lvl1"   ><a href="rolnicze-rc-116,217,0.html"   title="Rolnicze RC 1:16"  >Rolnicze RC 1:16</a></li><li   class="dropdown lvl1 active"   ><a href="happy-people,187,0.html"  class=" active selected "   title="Happy People"  >Happy People</a></li><li   class="dropdown lvl1"   ><a href="prawdziwy-skaut,21,0.html"   title="Prawdziwy Skaut"  >Prawdziwy Skaut</a></li><li   class="dropdown lvl1"   ><a href="promocje-!!!,180,0.html"   title="PROMOCJE !!!"  >PROMOCJE !!!</a></li><li   class="dropdown lvl1"   ><a href="vadobag,219,0.html"   title="Vadobag"  >Vadobag</a></li></ul><script>(function($){$(document).ready(function(){$(\'ul.dropdown-menu [data-toggle=dropdown]\').on(\'click\', function(event) {event.preventDefault(); event.stopPropagation(); $(this).parent().siblings().removeClass(\'open\');$(this).parent().toggleClass(\'open\');});});})(jQuery);</script></div></div></div><div class="container-fluid hidden-md hidden-lg" id="mobi_underHeader"><div class="container"><div class="navbar-collapse collapse" id="mobi_menuTop"><ul   class="nav navbar-nav"  ><li   class="dropdown lvl1"   ><a href="index.php"   title="Strona gÅ ówna"  >Strona gÅ ówna</a></li><li   class="dropdown lvl1"   ><a href="o-firmie,6,26.htm"   title="O firmie"  >O firmie</a></li><li   class="dropdown lvl1"   ><a href="do-pobrania,0,37.htm"   title="Do pobrania"  >Do pobrania</a></li><li   class="dropdown lvl1"   ><a href="kontakt,0,38.htm"   title="Kontakt"  >Kontakt</a></li></ul><ul  class="dropdown-menu nav-links"  ><li  class="dropdown dropdown-submenu"    ><a href=\'logowanie,11,32.htm\' >Logowanie</a></li><li  class="dropdown dropdown-submenu"    ><a href=\'o-firmie,11,26.htm\' >O FIRMIE</a></li><li  class="dropdown dropdown-submenu"    ><a href=\'do-pobrania,11,37.htm\' >Do pobrania</a></li><li  class="dropdown dropdown-submenu"    ><a href=\'kontakt,11,38.htm\' >Kontakt</a></li></ul><script>(function($){$(document).ready(function(){$(\'ul.dropdown-menu [data-toggle=dropdown]\').on(\'click\', function(event) {event.preventDefault(); event.stopPropagation(); $(this).parent().siblings().removeClass(\'open\');$(this).parent().toggleClass(\'open\');});});})(jQuery);</script></div></div></div><div class="mainBody"><section id="section_breadcrumbs" class="hidden-sm hidden-xs"><div class="container"><div class="row"><div class="col-md-12"><div class="breadcrumbs"><ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a class="breadcrumbs" itemprop="item" HREF="https://zabawki-malik.pl/" title="Kategoria gÅ ówna"><span class="breadcrumb-name" itemprop="name">Kategoria gÅ ówna</span></a><meta itemprop="position" content="1"></li><li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <span class="divide">/</span> <a class="breadcrumbs" itemprop="item" HREF="https://zabawki-malik.pl/happy-people,187,0.html" title="Happy People"><span class="breadcrumb-name" itemprop="name">Happy People</span></a><meta itemprop="position" content="2"></li></ol></div></div></div></div></section><div id="main" class="container"><div class="col-md-9 col-md-push-3" id="mainCol"><div class="page" id="page_itemList"><div class="pageHead"><h1 class="pageTitle">Happy People</h1></div><div class="pageContent"><FORM style="margin : 0;" ENCTYPE="multipart/form-data" ACTION="listaProduktow.php" METHOD="get" NAME="lista" ><div class="catPicDesc noPrint"><div class="catExtDesc"><br>&#xD;
<div style="text-align: center;"><span style="font-size: 13px;"><strong>Happy People - Super jakoÅ Ä  w dobrej cenie.<br></strong></span></div>&#xD;
<br><span style="font-size: 14px; font-family: trebuchet ms,geneva;">Niemiecka firma Happy People od ponad 30 lat zaopatruje gÅ ównie bardzo wymagajÄ ce rynki Europy Zachodniej. DziÄ ki duÅ¼ej skali produkcji oraz nowoczesnej logistyce artykuÅ y oferowane przez tÄ  firmÄ  cechuje wysoka jakoÅ Ä  oraz przystÄ pna cena. Wieloletnie doÅ wiadczenie w branÅ¼y oraz charakterystyczna dla naszych zachodnich sÄ siadów dbaÅ oÅ Ä  o kaÅ¼dy szczegóÅ  owocujÄ  bardzo interesujÄ cÄ  ofertÄ  dla osób ceniÄ cych dobre produkty. Z czystym sumieniem polecamy tego producenta. <br><br></span></div></div><div class="row" id="listOptions"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="listResults"><div class="form-inline"><div class="form-group form-group-sm"><label class="control-label">Wyników na stronie<span class="colon">:</span></label> <span class="select_wrap"><select name="v4955e85ac5"   class="form-control select_form"  onchange="document.lista.submit();" ><option class="styl1"  value="10" >10</option><option class="styl2"  value="12" >12</option><option class="styl1"  value="15" >15</option><option class="styl2"  value="20" >20</option><option class="styl1"  value="30" >30</option><option class="styl2"  value="60"  selected >60</option><option class="styl1"  value="120" >120</option><option class="styl2"  value="180" >180</option><option class="styl1"  value="300" >300</option><option class="styl2"  value="900" >900</option><option class="styl1"  value="1500" >1500</option><option class="styl2"  value="3000" >3000</option></select></span></div></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="listSort"><div class="form-inline"><div class="form-group form-group-sm"><label class="control-label">Sortuj wedÅ ug<span class="colon">:</span></label> <span class="select_wrap"><select  name="dbSel[v15de71dbe8] "  onchange=" document.lista.va9ab954dd1.value=this.value; submit();"  class="form-control select_form"  ><option class="styl2"  value="ve14d14bfbe" >DomyÅ lnie</option><option class="styl1"  value="vd2f0a6ab20" >Ceny rosnÄ co</option><option class="styl2"  value="vda29f427dc" >Ceny malejÄ co</option><option class="styl1"  value="v3ab951970d" >Nazwy A-Z</option><option class="styl2"  value="v24eea09afc" >Nazwy Z-A</option></select></span></div></div></div></div><script type="text/javascript"> function sortclick(v1,v2)&#xD;
                                  {&#xD;
                                  document.lista.va9ab954dd1.value=v1 ;&#xD;
                                  document.lista.v6c710418db.value=v2 ;&#xD;
                                  document.lista.submit();&#xD;
                                  }; </script><script type="text/javascript"> function f5e85efb(nr)&#xD;
                                                  {&#xD;
                                                                $("#"+nr).toggleClass("zaznaczona");&#xD;
                                                  };</script><script type="text/javascript"> function reve5e85efb()&#xD;
                                                  {&#xD;
                                                        $(".checkbox_e5e85efb").each(function(){&#xD;
                                                                $(this).prop( "checked", !$(this).prop( "checked") );&#xD;
                                                        });&#xD;
                                                        $(".e5e85efb").each(function(){&#xD;
                                                                $(this).toggleClass("zaznaczona");&#xD;
                                                        });&#xD;
                                                }</script><div class="row equal mainList itemList"><div class="first colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-30053-pojazd-rc-power-tumbler-happy-people,187,36534.html" title="HP 30053 Pojazd RC Power Tumbler Happy People"><img alt="HP 30053 Pojazd RC Power Tumbler Happy People"  src="gfx/mini/1557396602.0794.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1572861715.7129.jpg" alt="HP 30053 Pojazd RC Power Tumbler Happy People"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-30053-pojazd-rc-power-tumbler-happy-people,187,36534.html" title="HP 30053 Pojazd RC Power Tumbler Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">Å wietny samochód zdalnie sterowany Power Tumbler renomowanej, niemieckiej firmy Happy People. Specjalny system napÄ du pozwala na wykonywanie obrotów 360 stopni oraz ekwilibrystycznych sztuczek. CzÄ stotliwoÅ Ä : 2,4 GHz. Do pojazdu wymagane baterie 4 x AA 1,5V oraz 1x9V (nie doÅ Ä czone)&#xD;
&#xD;
</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332300535</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>4 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 30053</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-30053-pojazd-rc-power-tumbler-happy-people,187,36534.html" title="HP 30053 Pojazd RC Power Tumbler Happy People" itemprop="url"><span itemprop="name">HP 30053 Pojazd RC Power Tumbler Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">64.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="64.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-30053-pojazd-rc-power-tumbler-happy-people,187,36534.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_duzo.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=36534&amp;back=1&amp;kat=" data-jm="szt." data-id="36534"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 30053">
        <meta itemprop="mpn" content="4008332300535">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Å wietny samochód zdalnie sterowany Power Tumbler renomowanej, niemieckiej firmy Happy People. Specjalny system napÄ du pozwala na wykonywanie obrotów 360 stopni oraz ekwilibrystycznych sztuczek. CzÄ stotliwoÅ Ä : 2,4 GHz. Do pojazdu wymagane baterie 4 x AA 1,5V oraz 1x9V (nie doÅ Ä czone)&#xD;
&#xD;
">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1557396602.0794.jpg">
</div></div><div class="colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"   >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-30070-samochod-rc-monster-buggy-happy-people,187,36535.html" title="HP 30070 Samochód RC Monster Buggy Happy People"><img alt="HP 30070 Samochód RC Monster Buggy Happy People"  src="gfx/mini/1557397226.8532.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1621321965.2327.jpg" alt="HP 30070 Samochód RC Monster Buggy Happy People"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-30070-samochod-rc-monster-buggy-happy-people,187,36535.html" title="HP 30070 Samochód RC Monster Buggy Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">Å wietny, zdalnie sterowany samochód Monster Buggy renomowanej, niemieckiej firmy Happy People. PrÄ dkoÅ Ä  do 8 km/h, &#xD;
CzÄ stotliwoÅ Ä : 2,4 GHz. Do pojazdu wymagane baterie 4 x AA 1,5V oraz 1x9V (nie doÅ Ä czone)&#xD;
</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332300702</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>4 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 30070</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-30070-samochod-rc-monster-buggy-happy-people,187,36535.html" title="HP 30070 Samochód RC Monster Buggy Happy People" itemprop="url"><span itemprop="name">HP 30070 Samochód RC Monster Buggy Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">86.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="86.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-30070-samochod-rc-monster-buggy-happy-people,187,36535.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_duzo.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=36535&amp;back=1&amp;kat=" data-jm="szt." data-id="36535"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 30070">
        <meta itemprop="mpn" content="4008332300702">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Å wietny, zdalnie sterowany samochód Monster Buggy renomowanej, niemieckiej firmy Happy People. PrÄ dkoÅ Ä  do 8 km/h, &#xD;
CzÄ stotliwoÅ Ä : 2,4 GHz. Do pojazdu wymagane baterie 4 x AA 1,5V oraz 1x9V (nie doÅ Ä czone)&#xD;
">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1557397226.8532.jpg">
</div></div><div class="last colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-30094-pojazd-rc-wild-twister-27mhz-happy-people,187,36537.html" title="HP 30094 Pojazd RC Wild Twister 27MHz Happy People"><img alt="HP 30094 Pojazd RC Wild Twister 27MHz Happy People"  src="gfx/mini/1557403729.6942.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1557403930.9481.jpg" alt="HP 30094 Pojazd RC Wild Twister 27MHz Happy People"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-30094-pojazd-rc-wild-twister-27mhz-happy-people,187,36537.html" title="HP 30094 Pojazd RC Wild Twister 27MHz Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">Samochód zdalnie sterowany renomowanej, niemieckiej firmy Happy People z napÄ dem na 4 koÅ a. DoskonaÅ a zabawka sprawiajÄ ca wielkÄ  frajdÄ  podczas zabawy. Obroty i przewroty 360 stopni. PrÄ dkoÅ Ä  do 5 km/h. WielkoÅ Ä  ok. 17 cm. Pojazd efektownie Å wieci w ciemnoÅ ci.&#xD;
CzÄ stotliwoÅ Ä  27 MHz. Do pojazdu wymagane baterie 4 x AA 1,5V oraz 1x9V (nie doÅ Ä czone)&#xD;
</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332300948</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 30094</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-30094-pojazd-rc-wild-twister-27mhz-happy-people,187,36537.html" title="HP 30094 Pojazd RC Wild Twister 27MHz Happy People" itemprop="url"><span itemprop="name">HP 30094 Pojazd RC Wild Twister 27MHz Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">59.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="59.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-30094-pojazd-rc-wild-twister-27mhz-happy-people,187,36537.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_duzo.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=36537&amp;back=1&amp;kat=" data-jm="szt." data-id="36537"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 30094">
        <meta itemprop="mpn" content="4008332300948">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Samochód zdalnie sterowany renomowanej, niemieckiej firmy Happy People z napÄ dem na 4 koÅ a. DoskonaÅ a zabawka sprawiajÄ ca wielkÄ  frajdÄ  podczas zabawy. Obroty i przewroty 360 stopni. PrÄ dkoÅ Ä  do 5 km/h. WielkoÅ Ä  ok. 17 cm. Pojazd efektownie Å wieci w ciemnoÅ ci.&#xD;
CzÄ stotliwoÅ Ä  27 MHz. Do pojazdu wymagane baterie 4 x AA 1,5V oraz 1x9V (nie doÅ Ä czone)&#xD;
">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1557403729.6942.jpg">
</div></div><div class="first colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-30120-samochod-amfibia-rc-vaporacer-2-4ghz-happy-people,187,36528.html" title="HP 30120 Samochódamfibia RC VaporaceR 2.4GHz Happy People"><img alt="HP 30120 Samochódamfibia RC VaporaceR 2.4GHz Happy People"  src="gfx/mini/1621323136.7376.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1621323128.5009.jpg" alt="HP 30120 Samochódamfibia RC VaporaceR 2.4GHz Happy People"></span></span></a>
                <span class="productPromotionIcons"><span class="icons iconDiscount" title="Promocja">Promocja</span>
                </span>

                        <a class="productText" href="hp-30120-samochod-amfibia-rc-vaporacer-2-4ghz-happy-people,187,36528.html" title="HP 30120 Samochódamfibia RC VaporaceR 2.4GHz Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">Rewelacyjny pojazd-amfibia VaporaceR1 renomowanej, niemieckiej firmy Happy People. NapÄ d na 4 koÅ a, zasiÄ g 30 metrów, prÄ dkoÅ Ä  do 15 km/h. MoÅ¼liwoÅ Ä  jazdy po Å niegu, lodzie, bÅ ocie, pÅ ywanie po wodzie. CzÄ stotliwoÅ Ä  2,4 GHz.</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332301204</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>4 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 30120</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-30120-samochod-amfibia-rc-vaporacer-2-4ghz-happy-people,187,36528.html" title="HP 30120 Samochódamfibia RC VaporaceR 2.4GHz Happy People" itemprop="url"><span itemprop="name">HP 30120 Samochód-amfibia RC VaporaceR 2.4GHz Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceDiscount priceGross">249.90<span class="currency">PLN</span></span>&#xD;
                                                  <meta itemprop="price" content="249.90">&#xD;
                                                  <meta itemprop="priceCurrency" content="PLN">&#xD;
&#xD;
                                                  &#xD;
&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-30120-samochod-amfibia-rc-vaporacer-2-4ghz-happy-people,187,36528.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_duzo.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=36528&amp;back=1&amp;kat=" data-jm="szt." data-id="36528"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 30120">
        <meta itemprop="mpn" content="4008332301204">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Rewelacyjny pojazdamfibia VaporaceR1 renomowanej, niemieckiej firmy Happy People. NapÄ d na 4 koÅ a, zasiÄ g 30 metrów, prÄ dkoÅ Ä  do 15 km/h. MoÅ¼liwoÅ Ä  jazdy po Å niegu, lodzie, bÅ ocie, pÅ ywanie po wodzie. CzÄ stotliwoÅ Ä  2,4 GHz.">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1621323136.7376.jpg">
</div></div><div class="colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"   >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-30122-pojazd-rc-power-stunt-happy-people,187,36538.html" title="HP 30122 Pojazd RC Power Stunt Happy People"><img alt="HP 30122 Pojazd RC Power Stunt Happy People"  src="gfx/mini/1557404757.9143.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1574179044.7605.jpg" alt="HP 30122 Pojazd RC Power Stunt Happy People"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-30122-pojazd-rc-power-stunt-happy-people,187,36538.html" title="HP 30122 Pojazd RC Power Stunt Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">Rewelacyjny pojazd zdalnie sterowany renomowanej, niemieckiej firmy Happy People z ruchomymi osiami pozwalajÄ cymi na niesamowite sztuczki. Å wietna prÄ dkoÅ Ä  do 10 km/h. Efektowne podÅ wietlanie pojazdu w ciemnoÅ ci. Obroty o 360 stopni i wiele innych.&#xD;
WielkoÅ Ä  ok. 15 cm. CzÄ stotliwoÅ Ä  27 MHz. Do pojazdu wymagane baterie 6 x AA 1,5V oraz 1x9V (nie doÅ Ä czone)</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332301228</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 30122</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-30122-pojazd-rc-power-stunt-happy-people,187,36538.html" title="HP 30122 Pojazd RC Power Stunt Happy People" itemprop="url"><span itemprop="name">HP 30122 Pojazd RC Power Stunt Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">69.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="69.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-30122-pojazd-rc-power-stunt-happy-people,187,36538.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_duzo.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=36538&amp;back=1&amp;kat=" data-jm="szt." data-id="36538"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 30122">
        <meta itemprop="mpn" content="4008332301228">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Rewelacyjny pojazd zdalnie sterowany renomowanej, niemieckiej firmy Happy People z ruchomymi osiami pozwalajÄ cymi na niesamowite sztuczki. Å wietna prÄ dkoÅ Ä  do 10 km/h. Efektowne podÅ wietlanie pojazdu w ciemnoÅ ci. Obroty o 360 stopni i wiele innych.&#xD;
WielkoÅ Ä  ok. 15 cm. CzÄ stotliwoÅ Ä  27 MHz. Do pojazdu wymagane baterie 6 x AA 1,5V oraz 1x9V (nie doÅ Ä czone)">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1557404757.9143.jpg">
</div></div><div class="last colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-34424-traktor-claas-axion-870-rc-skala-116,187,21127.html" title="HP 34424 Traktor Claas Axion 870 RC skala 1:16"><img alt="HP 34424 Traktor Claas Axion 870 RC skala 1:16"  src="gfx/mini/1621320279.3623.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1517911391.588.jpg" alt="HP 34424 Traktor Claas Axion 870 RC skala 1:16"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-34424-traktor-claas-axion-870-rc-skala-116,187,21127.html" title="HP 34424 Traktor Claas Axion 870 RC skala 1:16">
                                <div>
                                        <div class="productDescription" itemprop="description">Traktor Claas Axion 870 zdalnie sterowany - skala 1:16. &#xD;
WspaniaÅ a replika traktora Claas Axion 870 na gumowych oponach z gÅ Ä bokim bieÅ¼nikiem uÅ atwiajÄ cym jeÅ¼dÅ¼enie nawet po bardzo trudnym terenie.&#xD;
Podstawowe cechy:&#xD;
- wymiary: ok. 33 x 17,5 x 22 cm&#xD;
- waga ok. 1,6 kg&#xD;
- jazda przód/tyÅ , prawo/lewo&#xD;
- zaczep traktora idealnie pasuje do przyczep Bruder oraz do niektórych maszyn Bruder (np. opryskiwacz 02207)&#xD;
- Å wiecÄ ce Å wiatÅ a podczas jazdy&#xD;
- przeszklona kabina kierowcy&#xD;
- skÅ adane lusterka&#xD;
- wysoka jakoÅ Ä , wspaniale odwzorowane detale&#xD;
</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332344249</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>2 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">645809</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-34424-traktor-claas-axion-870-rc-skala-116,187,21127.html" title="HP 34424 Traktor Claas Axion 870 RC skala 1:16" itemprop="url"><span itemprop="name">HP 34424 Traktor Claas Axion 870 RC skala 1:16</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">209.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="209.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-34424-traktor-claas-axion-870-rc-skala-116,187,21127.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_duzo.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=21127&amp;back=1&amp;kat=" data-jm="szt." data-id="21127"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="645809">
        <meta itemprop="mpn" content="4008332344249">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Traktor Claas Axion 870 zdalnie sterowany  skala 1:16. &#xD;
WspaniaÅ a replika traktora Claas Axion 870 na gumowych oponach z gÅ Ä bokim bieÅ¼nikiem uÅ atwiajÄ cym jeÅ¼dÅ¼enie nawet po bardzo trudnym terenie.&#xD;
Podstawowe cechy:&#xD;
 wymiary: ok. 33 x 17,5 x 22 cm&#xD;
 waga ok. 1,6 kg&#xD;
 jazda przód/tyÅ , prawo/lewo&#xD;
 zaczep traktora idealnie pasuje do przyczep Bruder oraz do niektórych maszyn Bruder (np. opryskiwacz 02207)&#xD;
 Å wiecÄ ce Å wiatÅ a podczas jazdy&#xD;
 przeszklona kabina kierowcy&#xD;
 skÅ adane lusterka&#xD;
 wysoka jakoÅ Ä , wspaniale odwzorowane detale&#xD;
">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1621320279.3623.jpg">
</div></div><div class="first colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-34426-kombajn-claas-lexion-780-rc-skala-120,187,32778.html" title="HP 34426 Kombajn Claas Lexion 780 RC skala 1:20"><img alt="HP 34426 Kombajn Claas Lexion 780 RC skala 1:20"  src="gfx/mini/1621320142.594.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1533021163.8095.jpg" alt="HP 34426 Kombajn Claas Lexion 780 RC skala 1:20"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-34426-kombajn-claas-lexion-780-rc-skala-120,187,32778.html" title="HP 34426 Kombajn Claas Lexion 780 RC skala 1:20">
                                <div>
                                        <div class="productDescription" itemprop="description">WspaniaÅ a replika kombajnu zboÅ¼owego Claas renomowanej, niemieckiej firmy Happy People. Podczas jazdy Å wiecÄ  Å wiatÅ a oraz obraca siÄ  heder. MoÅ¼liwoÅ Ä  wÅ Ä czenia Å wiateÅ  z pilota równieÅ¼ podczas postoju. WyciÄ gana rura transmisyjna oraz otwierany zbiornik na zboÅ¼e. Heder z blokadÄ  podnoszony rÄ cznie (moÅ¼liwa jazda z podniesionym hederem). Tylna oÅ  kombajnu skrÄ tna, funkcja justowania osi skrÄ tnej, koÅ a gumowe. Wysoka jakoÅ Ä  produktu. </div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332344263</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>4 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">645794</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-34426-kombajn-claas-lexion-780-rc-skala-120,187,32778.html" title="HP 34426 Kombajn Claas Lexion 780 RC skala 1:20" itemprop="url"><span itemprop="name">HP 34426 Kombajn Claas Lexion 780 RC skala 1:20</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">219.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="219.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-34426-kombajn-claas-lexion-780-rc-skala-120,187,32778.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/1455889427.28.png" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=32778&amp;back=1&amp;kat=" data-jm="szt." data-id="32778"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="645794">
        <meta itemprop="mpn" content="4008332344263">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="WspaniaÅ a replika kombajnu zboÅ¼owego Claas renomowanej, niemieckiej firmy Happy People. Podczas jazdy Å wiecÄ  Å wiatÅ a oraz obraca siÄ  heder. MoÅ¼liwoÅ Ä  wÅ Ä czenia Å wiateÅ  z pilota równieÅ¼ podczas postoju. WyciÄ gana rura transmisyjna oraz otwierany zbiornik na zboÅ¼e. Heder z blokadÄ  podnoszony rÄ cznie (moÅ¼liwa jazda z podniesionym hederem). Tylna oÅ  kombajnu skrÄ tna, funkcja justowania osi skrÄ tnej, koÅ a gumowe. Wysoka jakoÅ Ä  produktu. ">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1621320142.594.jpg">
</div></div><div class="colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"   >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-38011-akcja-policyjna---zestaw-driftujacych-pojazdow-rc-happy-people,187,36527.html" title="HP 38011 Akcja policyjna  zestaw driftujÄ cych pojazdów RC Happy People"><img alt="HP 38011 Akcja policyjna  zestaw driftujÄ cych pojazdów RC Happy People"  src="gfx/mini/1553947928.2724.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1621323296.0278.jpg" alt="HP 38011 Akcja policyjna  zestaw driftujÄ cych pojazdów RC Happy People"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-38011-akcja-policyjna---zestaw-driftujacych-pojazdow-rc-happy-people,187,36527.html" title="HP 38011 Akcja policyjna  zestaw driftujÄ cych pojazdów RC Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">WspaniaÅ y zestaw dwóch driftujÄ cych pojazdów renomowanej, niemieckiej firmy Happy People – policja i zÅ odziej. Opatentowany system napÄ du pozwala na kontrolowane poÅ lizgi samochodów umoÅ¼liwiajÄ c jednoczeÅ nie peÅ ne sterowanie. Samochód policyjny z syrenÄ  policyjnÄ  (moÅ¼liwe wyÅ Ä czenie dÅºwiÄ ku) oraz efektami Å wietlnymi.&#xD;
CzÄ stotliwoÅ Ä : 27 MHz, prÄ dkoÅ Ä  do 9 km/h&#xD;
Do kaÅ¼dego pojazdu wymagane baterie 4 x AA 1,5V oraz 1x9V&#xD;
W zestawie dwa samochody RC i zestaw oÅ miu pachoÅ ków.</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332380117</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>4 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 38011</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-38011-akcja-policyjna---zestaw-driftujacych-pojazdow-rc-happy-people,187,36527.html" title="HP 38011 Akcja policyjna  zestaw driftujÄ cych pojazdów RC Happy People" itemprop="url"><span itemprop="name">HP 38011 Akcja policyjna - zestaw driftujÄ cych pojazdów RC Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">147.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="147.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-38011-akcja-policyjna---zestaw-driftujacych-pojazdow-rc-happy-people,187,36527.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_duzo.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=36527&amp;back=1&amp;kat=" data-jm="szt." data-id="36527"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 38011">
        <meta itemprop="mpn" content="4008332380117">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="WspaniaÅ y zestaw dwóch driftujÄ cych pojazdów renomowanej, niemieckiej firmy Happy People – policja i zÅ odziej. Opatentowany system napÄ du pozwala na kontrolowane poÅ lizgi samochodów umoÅ¼liwiajÄ c jednoczeÅ nie peÅ ne sterowanie. Samochód policyjny z syrenÄ  policyjnÄ  (moÅ¼liwe wyÅ Ä czenie dÅºwiÄ ku) oraz efektami Å wietlnymi.&#xD;
CzÄ stotliwoÅ Ä : 27 MHz, prÄ dkoÅ Ä  do 9 km/h&#xD;
Do kaÅ¼dego pojazdu wymagane baterie 4 x AA 1,5V oraz 1x9V&#xD;
W zestawie dwa samochody RC i zestaw oÅ miu pachoÅ ków.">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1553947928.2724.jpg">
</div></div><div class="last colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-38016-pojazd-rc-stunt-rebel-happy-people,187,36532.html" title="HP 38016 Pojazd RC Stunt Rebel Happy People"><img alt="HP 38016 Pojazd RC Stunt Rebel Happy People"  src="gfx/mini/1621322284.2936.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1621322288.4535.jpg" alt="HP 38016 Pojazd RC Stunt Rebel Happy People"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-38016-pojazd-rc-stunt-rebel-happy-people,187,36532.html" title="HP 38016 Pojazd RC Stunt Rebel Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">Å wietny samochód zdalnie sterowany Stunt Rebel renomowanej, niemieckiej firmy Happy People. Opatentowany system napÄ du pozwala na wykonywanie obrotów 360 stopni oraz ekwilibrystycznych sztuczek.&#xD;
CzÄ stotliwoÅ Ä : 27 MHz.&#xD;
Do pojazdu wymagane baterie 6 x AA 1,5V oraz 1x9V (nie doÅ Ä czone)&#xD;
</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332380162</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 38016</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-38016-pojazd-rc-stunt-rebel-happy-people,187,36532.html" title="HP 38016 Pojazd RC Stunt Rebel Happy People" itemprop="url"><span itemprop="name">HP 38016 Pojazd RC Stunt Rebel Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">109.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="109.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-38016-pojazd-rc-stunt-rebel-happy-people,187,36532.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_duzo.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=36532&amp;back=1&amp;kat=" data-jm="szt." data-id="36532"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 38016">
        <meta itemprop="mpn" content="4008332380162">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Å wietny samochód zdalnie sterowany Stunt Rebel renomowanej, niemieckiej firmy Happy People. Opatentowany system napÄ du pozwala na wykonywanie obrotów 360 stopni oraz ekwilibrystycznych sztuczek.&#xD;
CzÄ stotliwoÅ Ä : 27 MHz.&#xD;
Do pojazdu wymagane baterie 6 x AA 1,5V oraz 1x9V (nie doÅ Ä czone)&#xD;
">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1621322284.2936.jpg">
</div></div><div class="first colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-38017-pojazd-rc-mega-traxx-27mhz-happy-people,187,36548.html" title="HP 38017 Pojazd RC Mega Traxx 27MHz Happy People"><img alt="HP 38017 Pojazd RC Mega Traxx 27MHz Happy People"  src="gfx/mini/1560252091.1741.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1621320482.7417.jpg" alt="HP 38017 Pojazd RC Mega Traxx 27MHz Happy People"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-38017-pojazd-rc-mega-traxx-27mhz-happy-people,187,36548.html" title="HP 38017 Pojazd RC Mega Traxx 27MHz Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">Zdalnie sterowany pojazd Mega Traxx renomowanej, niemieckiej firmy Happy People z obrotowymi gÄ sienicami. Å»aden teren nie jest mu straszny. Ze swojÄ  prÄ dkoÅ ciÄ  10 km/h pokonuje z Å atwoÅ ciÄ  wszystkie przeszkody. Obroty 360 stopni. WielkoÅ Ä  ok. 16cm. Do pojazdu wymagane baterie 6 x AAA 1,5V oraz 1x9V (nie doÅ Ä czone)</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332380179</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 38017</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-38017-pojazd-rc-mega-traxx-27mhz-happy-people,187,36548.html" title="HP 38017 Pojazd RC Mega Traxx 27MHz Happy People" itemprop="url"><span itemprop="name">HP 38017 Pojazd RC Mega Traxx 27MHz Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">78.00<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="78.00">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-38017-pojazd-rc-mega-traxx-27mhz-happy-people,187,36548.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_duzo.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=36548&amp;back=1&amp;kat=" data-jm="szt." data-id="36548"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 38017">
        <meta itemprop="mpn" content="4008332380179">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Zdalnie sterowany pojazd Mega Traxx renomowanej, niemieckiej firmy Happy People z obrotowymi gÄ sienicami. Å»aden teren nie jest mu straszny. Ze swojÄ  prÄ dkoÅ ciÄ  10 km/h pokonuje z Å atwoÅ ciÄ  wszystkie przeszkody. Obroty 360 stopni. WielkoÅ Ä  ok. 16cm. Do pojazdu wymagane baterie 6 x AAA 1,5V oraz 1x9V (nie doÅ Ä czone)">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1560252091.1741.jpg">
</div></div><div class="colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"   >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-38019-pojazd-rc-speed-drifter-happy-people,187,36533.html" title="HP 38019 Pojazd RC Speed Drifter Happy People"><img alt="HP 38019 Pojazd RC Speed Drifter Happy People"  src="gfx/mini/1621322468.1986.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1557395489.8152.jpg" alt="HP 38019 Pojazd RC Speed Drifter Happy People"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-38019-pojazd-rc-speed-drifter-happy-people,187,36533.html" title="HP 38019 Pojazd RC Speed Drifter Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">WspaniaÅ y samochód driftujÄ cy renomowanej, niemieckiej firmy Happy People. Opatentowany system napÄ du pozwala na kontrolowane poÅ lizgi samochodów umoÅ¼liwiajÄ c jednoczeÅ nie peÅ ne sterowanie. Samochód posiada Å wiatÅ a, które wÅ Ä czajÄ  siÄ  automatycznie podczas jazdy.&#xD;
CzÄ stotliwoÅ Ä : 27 MHz, prÄ dkoÅ Ä  do 9 km/h&#xD;
Do pojazdu wymagane baterie 4 x AA 1,5V oraz 1x9V (nie doÅ Ä czone)&#xD;
</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332380193</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 38019</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-38019-pojazd-rc-speed-drifter-happy-people,187,36533.html" title="HP 38019 Pojazd RC Speed Drifter Happy People" itemprop="url"><span itemprop="name">HP 38019 Pojazd RC Speed Drifter Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">74.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="74.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-38019-pojazd-rc-speed-drifter-happy-people,187,36533.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_duzo.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=36533&amp;back=1&amp;kat=" data-jm="szt." data-id="36533"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 38019">
        <meta itemprop="mpn" content="4008332380193">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="WspaniaÅ y samochód driftujÄ cy renomowanej, niemieckiej firmy Happy People. Opatentowany system napÄ du pozwala na kontrolowane poÅ lizgi samochodów umoÅ¼liwiajÄ c jednoczeÅ nie peÅ ne sterowanie. Samochód posiada Å wiatÅ a, które wÅ Ä czajÄ
CzÄ stotliwoÅ Ä : 27 MHz, prÄ dkoÅ Ä  do 9 km/h&#xD;
Do pojazdu wymagane baterie 4 x AA 1,5V oraz 1x9V (nie doÅ Ä czone)&#xD;
">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1621322468.1986.jpg">
</div></div><div class="last colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="skaut-19335-obserwator-owadow-scout,187,2407.html" title="Skaut 19335 Obserwator owadów Scout"><img alt="Skaut 19335 Obserwator owadów Scout"  src="gfx/mini/1427195757.55.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1616502400.7147.jpg" alt="Skaut 19335 Obserwator owadów Scout"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="skaut-19335-obserwator-owadow-scout,187,2407.html" title="Skaut 19335 Obserwator owadów Scout">
                                <div>
                                        <div class="productDescription" itemprop="description">Oberwator owadów z dwoma szkÅ ami powiÄ kszajÄ cymi - górne szkÅ o powiÄ ksza 3-krotnie, dolne równieÅ¼ 3-krotnie. Otwory wentylacyjne w czÄ Å ci transparentnej. Do obserwatora moÅ¼emy wÅ oÅ¼yÄ
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332193359</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 19335</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="skaut-19335-obserwator-owadow-scout,187,2407.html" title="Skaut 19335 Obserwator owadów Scout" itemprop="url"><span itemprop="name">Skaut 19335 Obserwator owadów Scout</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">51.91<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="51.91">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/skaut-19335-obserwator-owadow-scout,187,2407.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/1455889427.28.png" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=2407&amp;back=1&amp;kat=" data-jm="szt." data-id="2407"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 19335">
        <meta itemprop="mpn" content="4008332193359">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Oberwator owadów z dwoma szkÅ ami powiÄ kszajÄ cymi  górne szkÅ o powiÄ ksza 3krotnie, dolne równieÅ¼ 3krotnie. Otwory wentylacyjne w czÄ Å ci transparentnej. Do obserwatora moÅ¼emy wÅ oÅ¼yÄ  dowolnego owada lub inny przedmiot, który chcemy obserwowaÄ . ">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1427195757.55.jpg">
</div></div><div class="first colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="skaut-19358-gwizdek-wielofunkcyjny-scout,187,2292.html" title="Skaut 19358 Gwizdek wielofunkcyjny Scout"><img alt="Skaut 19358 Gwizdek wielofunkcyjny Scout"  src="gfx/mini/1346237711.17.jpg" class="img-responsive img-fluid" width="280" height="186" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1346238003.51.jpg" alt="Skaut 19358 Gwizdek wielofunkcyjny Scout"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="skaut-19358-gwizdek-wielofunkcyjny-scout,187,2292.html" title="Skaut 19358 Gwizdek wielofunkcyjny Scout">
                                <div>
                                        <div class="productDescription" itemprop="description">Gwizdek Scout z wysuwanÄ  lupÄ , termometrem kompasem oraz Å wiateÅ kiem. DÅ ugoÅ Ä  ok. 85mm.</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332193588</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 19358</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="skaut-19358-gwizdek-wielofunkcyjny-scout,187,2292.html" title="Skaut 19358 Gwizdek wielofunkcyjny Scout" itemprop="url"><span itemprop="name">Skaut 19358 Gwizdek wielofunkcyjny Scout</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">25.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="25.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/skaut-19358-gwizdek-wielofunkcyjny-scout,187,2292.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_srednio.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=2292&amp;back=1&amp;kat=" data-jm="szt." data-id="2292"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 19358">
        <meta itemprop="mpn" content="4008332193588">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Gwizdek Scout z wysuwanÄ  lupÄ , termometrem kompasem oraz Å wiateÅ kiem. DÅ ugoÅ Ä  ok. 85mm.">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1346237711.17.jpg">
</div></div><div class="colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"   >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="skaut-19380-pojemnik-na-owady-duzy-scouthp,187,4611.html" title="Skaut 19380 Pojemnik na owady duÅ¼y ScoutHP"><img alt="Skaut 19380 Pojemnik na owady duÅ¼y ScoutHP"  src="gfx/mini/1367841801.25.jpg" class="img-responsive img-fluid" width="280" height="280" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1367841807.88.jpg" alt="Skaut 19380 Pojemnik na owady duÅ¼y ScoutHP"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="skaut-19380-pojemnik-na-owady-duzy-scouthp,187,4611.html" title="Skaut 19380 Pojemnik na owady duÅ¼y ScoutHP">
                                <div>
                                        <div class="productDescription" itemprop="description">Pojemnik do obserwacji owadów ze szkÅ em powiÄ kszajÄ cym. WysokoÅ Ä  ok. 18cm, Å rednica ok. 10cm. PowiÄ kszenie 4-krotne. </div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332193809</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">SCOUT 280</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="skaut-19380-pojemnik-na-owady-duzy-scouthp,187,4611.html" title="Skaut 19380 Pojemnik na owady duÅ¼y ScoutHP" itemprop="url"><span itemprop="name">Skaut 19380 Pojemnik na owady duÅ¼y ScoutHP</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">29.99<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="29.99">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/skaut-19380-pojemnik-na-owady-duzy-scouthp,187,4611.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_srednio.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=4611&amp;back=1&amp;kat=" data-jm="szt." data-id="4611"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="SCOUT 280">
        <meta itemprop="mpn" content="4008332193809">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Pojemnik do obserwacji owadów ze szkÅ em powiÄ kszajÄ cym. WysokoÅ Ä  ok. 18cm, Å rednica ok. 10cm. PowiÄ kszenie 4krotne. ">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1367841801.25.jpg">
</div></div><div class="last colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="skaut-19392-pojemnik-na-owady-z-lupa-scout-hp,187,2441.html" title="Skaut 19392 Pojemnik na owady z lupÄ  Scout HP"><img alt="Skaut 19392 Pojemnik na owady z lupÄ  Scout HP"  src="gfx/mini/1554890982.3975.jpg" class="img-responsive img-fluid" width="280" height="280" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1346235906.8.jpg" alt="Skaut 19392 Pojemnik na owady z lupÄ  Scout HP"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                <div class="productCode">SCOUT 239</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="skaut-19392-pojemnik-na-owady-z-lupa-scout-hp,187,2441.html" title="Skaut 19392 Pojemnik na owady z lupÄ  Scout HP" itemprop="url"><span itemprop="name">Skaut 19392 Pojemnik na owady z lupÄ  Scout HP</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">12.00<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="12.00">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/skaut-19392-pojemnik-na-owady-z-lupa-scout-hp,187,2441.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_srednio.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=2441&amp;back=1&amp;kat=" data-jm="szt." data-id="2441"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="SCOUT 239">
        <meta itemprop="mpn" content="4008332193922">
        <!--<meta itemprop="brand" content="">-->

        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1554890982.3975.jpg">
</div></div><div class="first colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="skaut-19394-kolo-powiekszajace-z-lupami-hp,187,19328.html" title="Skaut 19394 KoÅ o powiÄ kszajÄ ce z lupami HP"><img alt="Skaut 19394 KoÅ o powiÄ kszajÄ ce z lupami HP"  src="gfx/mini/1455893070.65.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1455893079.93.jpg" alt="Skaut 19394 KoÅ o powiÄ kszajÄ ce z lupami HP"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="skaut-19394-kolo-powiekszajace-z-lupami-hp,187,19328.html" title="Skaut 19394 KoÅ o powiÄ kszajÄ ce z lupami HP">
                                <div>
                                        <div class="productDescription" itemprop="description">Prawdziwa gratka dla dzieciaków ciekawych Å wiata - lupa obrotowa pozwalajÄ ca na oglÄ danie i Å atwe przenoszenie 6 okazów przyrodniczych (lub zupeÅ nie innych). PowiÄ kszenie 2-krotne. Wymiary caÅ oÅ ci: ok. 190x30x165mm.</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332193946</span></div>
                                </div>
                        </a>
                <div class="productCode">Skaut 19394</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="skaut-19394-kolo-powiekszajace-z-lupami-hp,187,19328.html" title="Skaut 19394 KoÅ o powiÄ kszajÄ ce z lupami HP" itemprop="url"><span itemprop="name">Skaut 19394 KoÅ o powiÄ kszajÄ ce z lupami HP</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">37.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="37.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/skaut-19394-kolo-powiekszajace-z-lupami-hp,187,19328.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_srednio.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=19328&amp;back=1&amp;kat=" data-jm="szt." data-id="19328"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="Skaut 19394">
        <meta itemprop="mpn" content="4008332193946">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Prawdziwa gratka dla dzieciaków ciekawych Å wiata  lupa obrotowa pozwalajÄ ca na oglÄ danie i Å atwe przenoszenie 6 okazów przyrodniczych (lub zupeÅ nie innych). PowiÄ kszenie 2krotne. Wymiary caÅ oÅ ci: ok. 190x30x165mm.">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1455893070.65.jpg">
</div></div><div class="colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"   >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="skaut-64520-stoper-z-zegarkiem-scout-hp,187,2256.html" title="Skaut 64520 Stoper z zegarkiem Scout HP"><img alt="Skaut 64520 Stoper z zegarkiem Scout HP"  src="gfx/mini/1346242213.2.jpg" class="img-responsive img-fluid" width="280" height="186" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1346242213.88.jpg" alt="Skaut 64520 Stoper z zegarkiem Scout HP"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="skaut-64520-stoper-z-zegarkiem-scout-hp,187,2256.html" title="Skaut 64520 Stoper z zegarkiem Scout HP">
                                <div>
                                        <div class="productDescription" itemprop="description">Funkcja zegara oraz kalendarza. Stoper (1/100 sek.) z kontrolÄ  czasu okrÄ Å¼enia. Posiada funkcjÄ  alarmu. MoÅ¼liwoÅ Ä  zaÅ oÅ¼enia stopera na szyi dziÄ ki bezpiecznemu sznurkowi.</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332645209</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 64520</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="skaut-64520-stoper-z-zegarkiem-scout-hp,187,2256.html" title="Skaut 64520 Stoper z zegarkiem Scout HP" itemprop="url"><span itemprop="name">Skaut 64520 Stoper z zegarkiem Scout HP</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">37.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="37.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/skaut-64520-stoper-z-zegarkiem-scout-hp,187,2256.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_srednio.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=2256&amp;back=1&amp;kat=" data-jm="szt." data-id="2256"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 64520">
        <meta itemprop="mpn" content="4008332645209">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Funkcja zegara oraz kalendarza. Stoper (1/100 sek.) z kontrolÄ  czasu okrÄ Å¼enia. Posiada funkcjÄ
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1346242213.2.jpg">
</div></div><div class="last colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-34428-traktor-rc-claas-xerion-5000-z-obracana-kabina,187,36560.html" title="HP 34428 Traktor RC Claas Xerion 5000 z obracanÄ  kabinÄ "><img alt="HP 34428 Traktor RC Claas Xerion 5000 z obracanÄ  kabinÄ "  src="gfx/mini/1621319901.7633.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1621319910.833.jpg" alt="HP 34428 Traktor RC Claas Xerion 5000 z obracanÄ  kabinÄ "></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-34428-traktor-rc-claas-xerion-5000-z-obracana-kabina,187,36560.html" title="HP 34428 Traktor RC Claas Xerion 5000 z obracanÄ  kabinÄ ">
                                <div>
                                        <div class="productDescription" itemprop="description">HP 34428 Traktor RC Claas Xerion 5000 z obracanÄ  kabinÄ </div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332344287</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>2 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 34428</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-34428-traktor-rc-claas-xerion-5000-z-obracana-kabina,187,36560.html" title="HP 34428 Traktor RC Claas Xerion 5000 z obracanÄ  kabinÄ " itemprop="url"><span itemprop="name">HP 34428 Traktor RC Claas Xerion 5000 z obracanÄ  kabinÄ </span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">399.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="399.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-34428-traktor-rc-claas-xerion-5000-z-obracana-kabina,187,36560.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_duzo.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=36560&amp;back=1&amp;kat=" data-jm="szt." data-id="36560"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 34428">
        <meta itemprop="mpn" content="4008332344287">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="HP 34428 Traktor RC Claas Xerion 5000 z obracanÄ  kabinÄ ">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1621319901.7633.jpg">
</div></div><div class="first colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-40079-noz-piracki-chowany,187,2231.html" title="HP 40079 NóÅ¼ piracki chowany"><img alt="HP 40079 NóÅ¼ piracki chowany"  src="gfx/mini/1370436128.61.jpg" class="img-responsive img-fluid" width="280" height="206" ></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-40079-noz-piracki-chowany,187,2231.html" title="HP 40079 NóÅ¼ piracki chowany">
                                <div>
                                        <div class="productDescription" itemprop="description">NóÅ¼ piracki, chowany niemieckiej firmy Happy People&#xD;
Å wietna zabawka dla maÅ ych piratów. NóÅ¼ chowa siÄ  w momencie naciÅ niÄ cia zabawkowego ostrza.&#xD;
</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332400792</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 40079</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-40079-noz-piracki-chowany,187,2231.html" title="HP 40079 NóÅ¼ piracki chowany" itemprop="url"><span itemprop="name">HP 40079 NóÅ¼ piracki chowany</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">9.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="9.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-40079-noz-piracki-chowany,187,2231.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_srednio.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=2231&amp;back=1&amp;kat=" data-jm="szt." data-id="2231"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 40079">
        <meta itemprop="mpn" content="4008332400792">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="NóÅ¼ piracki, chowany niemieckiej firmy Happy People&#xD;
Å wietna zabawka dla maÅ ych piratów. NóÅ¼ chowa siÄ  w momencie naciÅ niÄ cia zabawkowego ostrza.&#xD;
">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1370436128.61.jpg">
</div></div><div class="colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"   >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-40123-przesuwanka-happy-people,187,2366.html" title="HP 40123 Przesuwanka Happy People"><img alt="HP 40123 Przesuwanka Happy People"  src="gfx/mini/1394628750.69.jpg" class="img-responsive img-fluid" width="280" height="210" ></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-40123-przesuwanka-happy-people,187,2366.html" title="HP 40123 Przesuwanka Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">Przesuwanka z koralikami HP</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332401232</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 40123</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-40123-przesuwanka-happy-people,187,2366.html" title="HP 40123 Przesuwanka Happy People" itemprop="url"><span itemprop="name">HP 40123 Przesuwanka Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">44.50<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="44.50">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-40123-przesuwanka-happy-people,187,2366.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/1619700656.2917.jpg" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=2366&amp;back=1&amp;kat=" data-jm="szt." data-id="2366"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 40123">
        <meta itemprop="mpn" content="4008332401232">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Przesuwanka z koralikami HP">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1394628750.69.jpg">
</div></div><div class="last colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-40404-mlyn-wodny-do-wanny-kaczka-happy-people,187,2340.html" title="HP 40404 MÅ yn wodny do wanny kaczka Happy People"><img alt="HP 40404 MÅ yn wodny do wanny kaczka Happy People"  src="gfx/mini/1369391746.28.jpg" class="img-responsive img-fluid" width="155" height="280" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1369391771.85.jpg" alt="HP 40404 MÅ yn wodny do wanny kaczka Happy People"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-40404-mlyn-wodny-do-wanny-kaczka-happy-people,187,2340.html" title="HP 40404 MÅ yn wodny do wanny kaczka Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">MÅ yn wodny - kaczka HP&#xD;
MÅ yn wodny niemieckiej firmy Happy People z przyssawkÄ  umoÅ¼liwiajÄ cÄ  przyczepienie do pÅ ytek lub wanny. WylatujÄ ca z dzioba kaczki woda powoduje obracanie mÅ yna. WodÄ  nalewamy do kapelusza. Å wietna zabawa z wodÄ .&#xD;
Produkt posiada atest TUV.&#xD;
Wymary zabawki: wys. ok. 29cm, szer. ok. 15cm.&#xD;
Niemiecka firma Happy People od ponad 30 lat zaopatruje w wysokiej jakoÅ ci produkty bardzo wymagajÄ ce rynki Europy zachodniej. Asortyment ten wykonany jest z troskÄ  o najdrobniejsze szczegóÅ y, a materiaÅ y wykorzystywane podczas produkcji sÄ  nietoksyczne i bezpieczne dla dzieci. DziÄ ki temu oferta firmy Happy People to asortyment bardzo wysokiej jakoÅ ci, a skala produkcji umoÅ¼liwia uzyskanie bardzo atrakcyjnych cen sprzedaÅ¼y.</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332404042</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 40404</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-40404-mlyn-wodny-do-wanny-kaczka-happy-people,187,2340.html" title="HP 40404 MÅ yn wodny do wanny kaczka Happy People" itemprop="url"><span itemprop="name">HP 40404 MÅ yn wodny do wanny kaczka Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">44.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="44.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-40404-mlyn-wodny-do-wanny-kaczka-happy-people,187,2340.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/1619700656.2917.jpg" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=2340&amp;back=1&amp;kat=" data-jm="szt." data-id="2340"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 40404">
        <meta itemprop="mpn" content="4008332404042">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="MÅ yn wodny  kaczka HP&#xD;
MÅ yn wodny niemieckiej firmy Happy People z przyssawkÄ  umoÅ¼liwiajÄ cÄ  przyczepienie do pÅ ytek lub wanny. WylatujÄ ca z dzioba kaczki woda powoduje obracanie mÅ yna. WodÄ  nalewamy do kapelusza. Å wietna zabawa z wodÄ .&#xD;
Produkt posiada atest TUV.&#xD;
Wymary zabawki: wys. ok. 29cm, szer. ok. 15cm.&#xD;
Niemiecka firma Happy People od ponad 30 lat zaopatruje w wysokiej jakoÅ ci produkty bardzo wymagajÄ ce rynki Europy zachodniej. Asortyment ten wykonany jest z troskÄ  o najdrobniejsze szczegóÅ y, a materiaÅ y wykorzystywane podczas produkcji sÄ  nietoksyczne i bezpieczne dla dzieci. DziÄ ki temu oferta firmy Happy People to asortyment bardzo wysokiej jakoÅ ci, a skala produkcji umoÅ¼liwia uzyskanie bardzo atrakcyjnych cen sprzedaÅ¼y.">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1369391746.28.jpg">
</div></div><div class="first colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-40424-piramida-z-oponami-hp,187,6124.html" title="HP 40424 Piramida z oponami HP"><img alt="HP 40424 Piramida z oponami HP"  src="gfx/mini/1397054992.55.jpg" class="img-responsive img-fluid" width="280" height="226" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1397055012.05.jpg" alt="HP 40424 Piramida z oponami HP"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-40424-piramida-z-oponami-hp,187,6124.html" title="HP 40424 Piramida z oponami HP">
                                <div>
                                        <div class="productDescription" itemprop="description">Piramida z oponami niemieckiej firmy Happy People. Wysoka jakoÅ Ä  tworzywa. RóÅ¼ne faktury na kaÅ¼dym elemencie, Å¼ywe kolory. WielkoÅ Ä  ok. 20cm.&#xD;
Niemiecka firma Happy People od ponad 30 lat zaopatruje w wysokiej jakoÅ ci produkty bardzo wymagajÄ ce rynki Europy zachodniej. Asortyment ten wykonany jest z troskÄ  o najdrobniejsze szczegóÅ y, a materiaÅ y wykorzystywane podczas produkcji sÄ  nietoksyczne i bezpieczne dla dzieci. DziÄ ki temu oferta firmy Happy People to asortyment bardzo wysokiej jakoÅ ci, a skala produkcji umoÅ¼liwia uzyskanie bardzo atrakcyjnych cen sprzedaÅ¼y.</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332404240</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 40424</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-40424-piramida-z-oponami-hp,187,6124.html" title="HP 40424 Piramida z oponami HP" itemprop="url"><span itemprop="name">HP 40424 Piramida z oponami HP</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">26.97<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="26.97">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-40424-piramida-z-oponami-hp,187,6124.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/1619700656.2917.jpg" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=6124&amp;back=1&amp;kat=" data-jm="szt." data-id="6124"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 40424">
        <meta itemprop="mpn" content="4008332404240">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Piramida z oponami niemieckiej firmy Happy People. Wysoka jakoÅ Ä  tworzywa. RóÅ¼ne faktury na kaÅ¼dym elemencie, Å¼ywe kolory. WielkoÅ Ä  ok. 20cm.&#xD;
Niemiecka firma Happy People od ponad 30 lat zaopatruje w wysokiej jakoÅ ci produkty bardzo wymagajÄ ce rynki Europy zachodniej. Asortyment ten wykonany jest z troskÄ  o najdrobniejsze szczegóÅ y, a materiaÅ y wykorzystywane podczas produkcji sÄ  nietoksyczne i bezpieczne dla dzieci. DziÄ ki temu oferta firmy Happy People to asortyment bardzo wysokiej jakoÅ ci, a skala produkcji umoÅ¼liwia uzyskanie bardzo atrakcyjnych cen sprzedaÅ¼y.">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1397054992.55.jpg">
</div></div><div class="colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"   >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-43237-domek-z-kucykiem-i-akcesoriami-happy-people,187,32828.html" title="HP 43237 Domek z kucykiem i akcesoriami Happy People"><img alt="HP 43237 Domek z kucykiem i akcesoriami Happy People"  src="gfx/mini/1546439537.0546.jpg" class="img-responsive img-fluid" width="250" height="280" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1546439541.8815.jpg" alt="HP 43237 Domek z kucykiem i akcesoriami Happy People"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-43237-domek-z-kucykiem-i-akcesoriami-happy-people,187,32828.html" title="HP 43237 Domek z kucykiem i akcesoriami Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">HP 43237 Domek z kucykiem i akcesoriami Happy People</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332432373</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>12 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 43237</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-43237-domek-z-kucykiem-i-akcesoriami-happy-people,187,32828.html" title="HP 43237 Domek z kucykiem i akcesoriami Happy People" itemprop="url"><span itemprop="name">HP 43237 Domek z kucykiem i akcesoriami Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">25.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="25.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-43237-domek-z-kucykiem-i-akcesoriami-happy-people,187,32828.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_srednio.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=32828&amp;back=1&amp;kat=" data-jm="szt." data-id="32828"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 43237">
        <meta itemprop="mpn" content="4008332432373">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="HP 43237 Domek z kucykiem i akcesoriami Happy People">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1546439537.0546.jpg">
</div></div><div class="last colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-45004-owoce-i-warzywa-w-worku-happy-people,187,20620.html" title="HP 45004 Owoce i warzywa w worku Happy People"><img alt="HP 45004 Owoce i warzywa w worku Happy People"  src="gfx/mini/1537963342.7829.jpg" class="img-responsive img-fluid" width="280" height="210" ></a>
                <span class="productPromotionIcons">
                </span>

                <div class="productCode">HP 45004</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-45004-owoce-i-warzywa-w-worku-happy-people,187,20620.html" title="HP 45004 Owoce i warzywa w worku Happy People" itemprop="url"><span itemprop="name">HP 45004 Owoce i warzywa w worku Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">17.50<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="17.50">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-45004-owoce-i-warzywa-w-worku-happy-people,187,20620.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_srednio.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=20620&amp;back=1&amp;kat=" data-jm="szt." data-id="20620"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 45004">
        <meta itemprop="mpn" content="4008332450049">
        <!--<meta itemprop="brand" content="">-->

        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1537963342.7829.jpg">
</div></div><div class="first colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-45006-drewniane-sniadanie-do-krojenia-happy-people,187,2294.html" title="HP 45006 Drewniane sniadanie do krojenia Happy People"><img alt="HP 45006 Drewniane sniadanie do krojenia Happy People"  src="gfx/mini/1370526510.75.jpg" class="img-responsive img-fluid" width="280" height="209" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1370526532.47.jpg" alt="HP 45006 Drewniane sniadanie do krojenia Happy People"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-45006-drewniane-sniadanie-do-krojenia-happy-people,187,2294.html" title="HP 45006 Drewniane sniadanie do krojenia Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">Drewniane Å niadanie do krojenia niemieckiej firmy Happy People.&#xD;
Å wietny zestaw z produktami Å Ä czonymi na rzepy. WielkoÅ Ä  tacy: 13x21,5cm. Produkt posiada atest TUV. Wysoka jakoÅ Ä  wykonania.&#xD;
Niemiecka firma Happy People od ponad 30 lat zaopatruje w wysokiej jakoÅ ci produkty bardzo wymagajÄ ce rynki Europy zachodniej. Asortyment ten wykonany jest z troskÄ  o najdrobniejsze szczegóÅ y, a materiaÅ y wykorzystywane podczas produkcji sÄ  nietoksyczne i bezpieczne dla dzieci. DziÄ ki temu oferta firmy Happy People to asortyment bardzo wysokiej jakoÅ ci, a skala produkcji umoÅ¼liwia uzyskanie bardzo atrakcyjnych cen sprzedaÅ¼y.</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332450063</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 45006</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-45006-drewniane-sniadanie-do-krojenia-happy-people,187,2294.html" title="HP 45006 Drewniane sniadanie do krojenia Happy People" itemprop="url"><span itemprop="name">HP 45006 Drewniane sniadanie do krojenia Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">39.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="39.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-45006-drewniane-sniadanie-do-krojenia-happy-people,187,2294.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/1619700656.2917.jpg" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=2294&amp;back=1&amp;kat=" data-jm="szt." data-id="2294"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 45006">
        <meta itemprop="mpn" content="4008332450063">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Drewniane Å niadanie do krojenia niemieckiej firmy Happy People.&#xD;
Å wietny zestaw z produktami Å Ä czonymi na rzepy. WielkoÅ Ä  tacy: 13x21,5cm. Produkt posiada atest TUV. Wysoka jakoÅ Ä  wykonania.&#xD;
Niemiecka firma Happy People od ponad 30 lat zaopatruje w wysokiej jakoÅ ci produkty bardzo wymagajÄ ce rynki Europy zachodniej. Asortyment ten wykonany jest z troskÄ  o najdrobniejsze szczegóÅ y, a materiaÅ y wykorzystywane podczas produkcji sÄ  nietoksyczne i bezpieczne dla dzieci. DziÄ ki temu oferta firmy Happy People to asortyment bardzo wysokiej jakoÅ ci, a skala produkcji umoÅ¼liwia uzyskanie bardzo atrakcyjnych cen sprzedaÅ¼y.">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1370526510.75.jpg">
</div></div><div class="colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"   >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-45032-kanapka---zestaw-drewniany-happy-people,187,32830.html" title="HP 45032 Kanapka  zestaw drewniany Happy People"><img alt="HP 45032 Kanapka  zestaw drewniany Happy People"  src="gfx/mini/1546439812.0227.jpg" class="img-responsive img-fluid" width="280" height="219" ></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-45032-kanapka---zestaw-drewniany-happy-people,187,32830.html" title="HP 45032 Kanapka  zestaw drewniany Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">HP 45032 Kanapka - zestaw drewniany Happy People</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332450322</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 45032</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-45032-kanapka---zestaw-drewniany-happy-people,187,32830.html" title="HP 45032 Kanapka  zestaw drewniany Happy People" itemprop="url"><span itemprop="name">HP 45032 Kanapka - zestaw drewniany Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">19.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="19.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-45032-kanapka---zestaw-drewniany-happy-people,187,32830.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/1619700656.2917.jpg" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=32830&amp;back=1&amp;kat=" data-jm="szt." data-id="32830"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 45032">
        <meta itemprop="mpn" content="4008332450322">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="HP 45032 Kanapka  zestaw drewniany Happy People">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1546439812.0227.jpg">
</div></div><div class="last colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-45036-drewniany-zestaw-sniadaniowy-happy-people,187,32829.html" title="HP 45036 Drewniany zestaw Å
ve img-fluid" width="280" height="280" ></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-45036-drewniany-zestaw-sniadaniowy-happy-people,187,32829.html" title="HP 45036 Drewniany zestaw Å niadaniowy Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">HP 45036 Drewniany zestaw Å niadaniowy Happy People</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332450360</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>12 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 45036</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-45036-drewniany-zestaw-sniadaniowy-happy-people,187,32829.html" title="HP 45036 Drewniany zestaw Å niadaniowy Happy People" itemprop="url"><span itemprop="name">HP 45036 Drewniany zestaw Å niadaniowy Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">19.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="19.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-45036-drewniany-zestaw-sniadaniowy-happy-people,187,32829.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_srednio.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=32829&amp;back=1&amp;kat=" data-jm="szt." data-id="32829"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 45036">
        <meta itemprop="mpn" content="4008332450360">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="HP 45036 Drewniany zestaw Å niadaniowy Happy People">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1546439865.2748.jpg">
</div></div><div class="first colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-55659-zestaw-kosmetyczny-muszla-z-lusterkiem,187,6379.html" title="HP 55659 Zestaw kosmetyczny &quot;Muszla&quot; z lusterkiem"><img alt="HP 55659 Zestaw kosmetyczny &quot;Muszla&quot; z lusterkiem"  src="gfx/mini/1397053889.62.jpg" class="img-responsive img-fluid" width="280" height="233" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1397053911.22.jpg" alt="HP 55659 Zestaw kosmetyczny &quot;Muszla&quot; z lusterkiem"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-55659-zestaw-kosmetyczny-muszla-z-lusterkiem,187,6379.html" title="HP 55659 Zestaw kosmetyczny &quot;Muszla&quot; z lusterkiem">
                                <div>
                                        <div class="productDescription" itemprop="description">Zestaw kosmetyczny "Muszla" z lusterkiem niemieckiej firmy Happy People - wiele róÅ¼nych akcesoriów do malowania. Produkt przebadany i przetestowany dermatologicznie.&#xD;
Niemiecka firma Happy People od ponad 30 lat zaopatruje w wysokiej jakoÅ ci produkty bardzo wymagajÄ ce rynki Europy zachodniej. Asortyment ten wykonany jest z troskÄ  o najdrobniejsze szczegóÅ y, a materiaÅ y wykorzystywane podczas produkcji sÄ  nietoksyczne i bezpieczne dla dzieci. DziÄ ki temu oferta firmy Happy People to asortyment bardzo wysokiej jakoÅ ci, a skala produkcji umoÅ¼liwia uzyskanie bardzo atrakcyjnych cen sprzedaÅ¼y.</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332556598</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 55659</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-55659-zestaw-kosmetyczny-muszla-z-lusterkiem,187,6379.html" title="HP 55659 Zestaw kosmetyczny &quot;Muszla&quot; z lusterkiem" itemprop="url"><span itemprop="name">HP 55659 Zestaw kosmetyczny "Muszla" z lusterkiem</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">34.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="34.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-55659-zestaw-kosmetyczny-muszla-z-lusterkiem,187,6379.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/1619700656.2917.jpg" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=6379&amp;back=1&amp;kat=" data-jm="szt." data-id="6379"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 55659">
        <meta itemprop="mpn" content="4008332556598">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Zestaw kosmetyczny &quot;Muszla&quot; z lusterkiem niemieckiej firmy Happy People  wiele róÅ¼nych akcesoriów do malowania. Produkt przebadany i przetestowany dermatologicznie.&#xD;
Niemiecka firma Happy People od ponad 30 lat zaopatruje w wysokiej jakoÅ ci produkty bardzo wymagajÄ ce rynki Europy zachodniej. Asortyment ten wykonany jest z troskÄ  o najdrobniejsze szczegóÅ y, a materiaÅ y wykorzystywane podczas produkcji sÄ  nietoksyczne i bezpieczne dla dzieci. DziÄ ki temu oferta firmy Happy People to asortyment bardzo wysokiej jakoÅ ci, a skala produkcji umoÅ¼liwia uzyskanie bardzo atrakcyjnych cen sprzedaÅ¼y.">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1397053889.62.jpg">
</div></div><div class="colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"   >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-58577-stajnia-pluszowa-z-trzema-konikami-happy-people,187,32825.html" title="HP 58577 Stajnia pluszowa z trzema konikami Happy People"><img alt="HP 58577 Stajnia pluszowa z trzema konikami Happy People"  src="gfx/mini/1546439758.0603.jpg" class="img-responsive img-fluid" width="280" height="233" ></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-58577-stajnia-pluszowa-z-trzema-konikami-happy-people,187,32825.html" title="HP 58577 Stajnia pluszowa z trzema konikami Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">HP 58577 Stajnia pluszowa z trzema konikami Happy People</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332585772</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 58577</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-58577-stajnia-pluszowa-z-trzema-konikami-happy-people,187,32825.html" title="HP 58577 Stajnia pluszowa z trzema konikami Happy People" itemprop="url"><span itemprop="name">HP 58577 Stajnia pluszowa z trzema konikami Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">74.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="74.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-58577-stajnia-pluszowa-z-trzema-konikami-happy-people,187,32825.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/1619700656.2917.jpg" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=32825&amp;back=1&amp;kat=" data-jm="szt." data-id="32825"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 58577">
        <meta itemprop="mpn" content="4008332585772">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="HP 58577 Stajnia pluszowa z trzema konikami Happy People">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1546439758.0603.jpg">
</div></div><div class="last colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-61076-smartfon-z-dzwiekami-happy-people,187,20937.html" title="HP 61076 Smartfon z dÅºwiÄ kami Happy People"><img alt="HP 61076 Smartfon z dÅºwiÄ kami Happy People"  src="gfx/mini/1537963509.8227.jpg" class="img-responsive img-fluid" width="186" height="280" ></a>
                <span class="productPromotionIcons">
                </span>

                <div class="productCode">HP 61076</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-61076-smartfon-z-dzwiekami-happy-people,187,20937.html" title="HP 61076 Smartfon z dÅºwiÄ kami Happy People" itemprop="url"><span itemprop="name">HP 61076 Smartfon z dÅºwiÄ kami Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">14.50<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="14.50">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-61076-smartfon-z-dzwiekami-happy-people,187,20937.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_srednio.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=20937&amp;back=1&amp;kat=" data-jm="szt." data-id="20937"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 61076">
        <meta itemprop="mpn" content="4008332610764">
        <!--<meta itemprop="brand" content="">-->

        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1537963509.8227.jpg">
</div></div><div class="first colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-63711-zestaw-koralikow-prostokat-happy-people,187,2293.html" title="HP 63711 Zestaw koralików prostokÄ t Happy People"><img alt="HP 63711 Zestaw koralików prostokÄ t Happy People"  src="gfx/mini/1348092854.67.jpg" class="img-responsive img-fluid" width="280" height="186" ></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-63711-zestaw-koralikow-prostokat-happy-people,187,2293.html" title="HP 63711 Zestaw koralików prostokÄ t Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">Firma Happy People jest towarzyszem ludzi duÅ¼ych i maÅ ych od ponad 30 lat. &#xD;
Ich stale aktualizowana oferta zabawek i produktów rekreacyjnych z powodzeniem sÄ  dystrybuowane na niemieckie i inne europejskie kraje.&#xD;
Bogata i zróÅ¼nicowana linia produktów skÅ ada siÄ  z powodzeniem na wÅ asne marki oraz licencyjne.&#xD;
Happy People rozumie wÅ asnych klientów dlatego, ich oferta zawsze speÅ nia bieÅ¼Ä ce potrzeby klientów.&#xD;
Firma zapewnienia bardzo dobra jakoÅ c produktów oraz atrackyjne ceny zakupu.</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332637112</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 63711</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-63711-zestaw-koralikow-prostokat-happy-people,187,2293.html" title="HP 63711 Zestaw koralików prostokÄ t Happy People" itemprop="url"><span itemprop="name">HP 63711 Zestaw koralików prostokÄ t Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">23.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="23.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-63711-zestaw-koralikow-prostokat-happy-people,187,2293.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_srednio.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=2293&amp;back=1&amp;kat=" data-jm="szt." data-id="2293"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 63711">
        <meta itemprop="mpn" content="4008332637112">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Firma Happy People jest towarzyszem ludzi duÅ¼ych i maÅ ych od ponad 30 lat. &#xD;
Ich stale aktualizowana oferta zabawek i produktów rekreacyjnych z powodzeniem sÄ  dystrybuowane na niemieckie i inne europejskie kraje.&#xD;
Bogata i zróÅ¼nicowana linia produktów skÅ ada siÄ  z powodzeniem na wÅ asne marki oraz licencyjne.&#xD;
Happy People rozumie wÅ asnych klientów dlatego, ich oferta zawsze speÅ nia bieÅ¼Ä ce potrzeby klientów.&#xD;
Firma zapewnienia bardzo dobra jakoÅ c produktów oraz atrackyjne ceny zakupu.">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1348092854.67.jpg">
</div></div><div class="colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"   >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-63715-zestaw-koralikow-5000szt--happy-people,187,2451.html" title="HP 63715 Zestaw koralików 5000szt. Happy People"><img alt="HP 63715 Zestaw koralików 5000szt. Happy People"  src="gfx/mini/1348092902.44.jpg" class="img-responsive img-fluid" width="280" height="186" ></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-63715-zestaw-koralikow-5000szt--happy-people,187,2451.html" title="HP 63715 Zestaw koralików 5000szt. Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">Firma Happy People jest towarzyszem ludzi duÅ¼ych i maÅ ych od ponad 30 lat. &#xD;
Ich stale aktualizowana oferta zabawek i produktów rekreacyjnych z powodzeniem sÄ  dystrybuowane na niemieckie i inne europejskie kraje.&#xD;
Bogata i zróÅ¼nicowana linia produktów skÅ ada siÄ  z powodzeniem na wÅ asne marki oraz licencyjne.&#xD;
Happy People rozumie wÅ asnych klientów dlatego, ich oferta zawsze speÅ nia bieÅ¼Ä ce potrzeby klientów.&#xD;
Firma zapewnienia bardzo dobra jakoÅ c produktów oraz atrackyjne ceny zakupu.</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332637150</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 63715</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-63715-zestaw-koralikow-5000szt--happy-people,187,2451.html" title="HP 63715 Zestaw koralików 5000szt. Happy People" itemprop="url"><span itemprop="name">HP 63715 Zestaw koralików 5000szt. Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">46.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="46.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-63715-zestaw-koralikow-5000szt--happy-people,187,2451.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_srednio.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=2451&amp;back=1&amp;kat=" data-jm="szt." data-id="2451"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 63715">
        <meta itemprop="mpn" content="4008332637150">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Firma Happy People jest towarzyszem ludzi duÅ¼ych i maÅ ych od ponad 30 lat. &#xD;
Ich stale aktualizowana oferta zabawek i produktów rekreacyjnych z powodzeniem sÄ  dystrybuowane na niemieckie i inne europejskie kraje.&#xD;
Bogata i zróÅ¼nicowana linia produktów skÅ ada siÄ  z powodzeniem na wÅ asne marki oraz licencyjne.&#xD;
Happy People rozumie wÅ asnych klientów dlatego, ich oferta zawsze speÅ nia bieÅ¼Ä ce potrzeby klientów.&#xD;
Firma zapewnienia bardzo dobra jakoÅ c produktów oraz atrackyjne ceny zakupu.">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1348092902.44.jpg">
</div></div><div class="last colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-63719-koraliki-w-tubie-ok--260szt--happy-people,187,32826.html" title="HP 63719 Koraliki w tubie ok. 260szt. Happy People"><img alt="HP 63719 Koraliki w tubie ok. 260szt. Happy People"  src="gfx/mini/1546439611.5738.jpg" class="img-responsive img-fluid" width="280" height="280" ></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-63719-koraliki-w-tubie-ok--260szt--happy-people,187,32826.html" title="HP 63719 Koraliki w tubie ok. 260szt. Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">HP 63719 Koraliki w tubie ok. 260szt. Happy People</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332637198</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>12 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 63719</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-63719-koraliki-w-tubie-ok--260szt--happy-people,187,32826.html" title="HP 63719 Koraliki w tubie ok. 260szt. Happy People" itemprop="url"><span itemprop="name">HP 63719 Koraliki w tubie ok. 260szt. Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">10.90<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="10.90">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-63719-koraliki-w-tubie-ok--260szt--happy-people,187,32826.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/1455889427.28.png" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=32826&amp;back=1&amp;kat=" data-jm="szt." data-id="32826"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 63719">
        <meta itemprop="mpn" content="4008332637198">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="HP 63719 Koraliki w tubie ok. 260szt. Happy People">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1546439611.5738.jpg">
</div></div><div class="first colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >
<div class="item" itemscope itemtype="http://schema.org/IndividualProduct">
        <div class="productImage">
                <a class="mainImage" href="hp-80402-zestaw-policyjny-happy-people,187,2192.html" title="HP 80402 Zestaw policyjny Happy People"><img alt="HP 80402 Zestaw policyjny Happy People"  src="gfx/mini/1370437971.96.jpg" class="img-responsive img-fluid" width="280" height="210" ><span class="otherView"><span class="secondImage"><img class="img-responsive img-fluid" src="gfx/mini/1370437980.2.jpg" alt="HP 80402 Zestaw policyjny Happy People"></span></span></a>
                <span class="productPromotionIcons">
                </span>

                        <a class="productText" href="hp-80402-zestaw-policyjny-happy-people,187,2192.html" title="HP 80402 Zestaw policyjny Happy People">
                                <div>
                                        <div class="productDescription" itemprop="description">Zestaw policyjny 7-czÄ Å ciowy niemieckiej firmy Happy People.&#xD;
W zestawie pistolet na strzaÅ ki, odznaka, legitymacja, penseta, 2 miÄ kkie strzaÅ ki.&#xD;
Niemiecka firma Happy People od ponad 30 lat zaopatruje w wysokiej jakoÅ ci produkty bardzo wymagajÄ ce rynki Europy zachodniej. Asortyment ten wykonany jest z troskÄ  o najdrobniejsze szczegóÅ y, a materiaÅ y wykorzystywane podczas produkcji sÄ  nietoksyczne i bezpieczne dla dzieci. DziÄ ki temu oferta firmy Happy People to asortyment bardzo wysokiej jakoÅ ci, a skala produkcji umoÅ¼liwia uzyskanie bardzo atrakcyjnych cen sprzedaÅ¼y.</div>
                                        <div class="productAttributes"><span class="attribute id59"><span class="attributeValue">Kod EAN<span class="colon">:</span> </span>4008332804026</span><span class="separator"></span><span class="attribute id60"><span class="attributeValue">IloÅ Ä  kartonowa<span class="colon">:</span> </span>6 szt.</span></div>
                                </div>
                        </a>
                <div class="productCode">HP 80402</div>
        </div>
        <div class="caption">
                <h3 class="productName"><a href="hp-80402-zestaw-policyjny-happy-people,187,2192.html" title="HP 80402 Zestaw policyjny Happy People" itemprop="url"><span itemprop="name">HP 80402 Zestaw policyjny Happy People</span></a></h3>
                <div class="productPrices" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price priceGross">11.00<span class="currency">PLN</span></span>&#xD;
                                                <meta itemprop="price" content="11.00">&#xD;
                                                <meta itemprop="priceCurrency" content="PLN">&#xD;

                        <!--<meta itemprop="priceValidUntil" content="2999-12-31">-->
                        <meta itemprop="url" content="https://zabawki-malik.pl/hp-80402-zestaw-policyjny-happy-people,187,2192.html">
                        <meta itemprop="availability" content="InStock">
                </div>
                <div class="productAvaState">DostÄ pnoÅ Ä <span class="colon">:</span> <img src="gfx/ikona_ilosc_srednio.gif" class="avaState" alt=""></div>
                <div class="productButtons">
                        <div class="btn-wrap"><a class="btn btn-cart" role="button" rel="nofollow" href="koszyk.php?id=2192&amp;back=1&amp;kat=" data-jm="szt." data-id="2192"><span class="icon fa fa-cart-arrow-down"></span><span class="text">Do koszyka</span></a></div>
                </div>
                <div class="cartInfo"  style="visibility:hidden" >W koszyku masz: <span class="c-quantity">0</span> <sapn class="c-unit"></sapn></div>
        </div>
        <meta itemprop="sku" content="HP 80402">
        <meta itemprop="mpn" content="4008332804026">
        <!--<meta itemprop="brand" content="">-->
        <meta itemprop="description" content="Zestaw policyjny 7czÄ Å ciowy niemieckiej firmy Happy People.&#xD;
W zestawie pistolet na strzaÅ ki, odznaka, legitymacja, penseta, 2 miÄ kkie strzaÅ ki.&#xD;
Niemiecka firma Happy People od ponad 30 lat zaopatruje w wysokiej jakoÅ ci produkty bardzo wymagajÄ ce rynki Europy zachodniej. Asortyment ten wykonany jest z troskÄ  o najdrobniejsze szczegóÅ y, a materiaÅ y wykorzystywane podczas produkcji sÄ  nietoksyczne i bezpieczne dla dzieci. DziÄ ki temu oferta firmy Happy People to asortyment bardzo wysokiej jakoÅ ci, a skala produkcji umoÅ¼liwia uzyskanie bardzo atrakcyjnych cen sprzedaÅ¼y.">
        <meta itemprop="image" content="https://zabawki-malik.pl/gfx/1370437971.96.jpg">
</div></div><div class="colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"   >&nbsp;</div><div class="last colItems col-lg-4  col-md-4  col-sm-4  col-smx-6  col-xs-12"  >&nbsp;</div><div><input TYPE="hidden" name="va9ab954dd1" value=""  ></div><div><input TYPE="hidden" name="v6c710418db" value="" ></div></div><input type="hidden" name="dbFin" value="" ><div><input type="hidden" name="idz" value="" ></div></form></div></div></div><!-- column1 --><div class="col-md-3 col-md-pull-9 collapse side-col" id="sideColLeft"><div class="panel box " id="box_listFilters"><div class="panel-heading boxHead"><div class="panel-title boxTitle"><h5>Filtry</h5></div></div><div class="panel-body boxContent"><div id="side_filters"><FORM style="margin : 0;" ENCTYPE="multipart/form-data" ACTION="listaProduktow.php" METHOD="get" NAME="mt" >&#xD;
                                                        <div id="filters_prodFilters">&#xD;
                                                                <label class="control-label">Producent<span class="colon">:</span></label>&#xD;
                                                                <div class="form">&#xD;
                                                                         <div class="select_wrap">&#xD;
                                                                                <div class="multiselect"><select name="dbSel[vd1d730ca88]"   class="form-control"  ><option class="styl1"  value="" >[dowolnie]</option><option class="styl2"  value="7" >Happy People</option><option class="styl1"  value="53" >Klein</option></select></div>&#xD;
                                                                         </div>&#xD;
                                                                </div>&#xD;
                                                        </div>&#xD;
                                                <div id="filters_priceFilters_range">&#xD;
                                                         <label class="control-label">Zakres cen<span class="colon">:</span></label>&#xD;
                                                         <div class="form">&#xD;
                                                                <div class="form-group">&#xD;
                                                                         <div id="priceRangeSliderValues">&#xD;
                                                                                <span class="currentPrice" id="priceMin"><span class="rangePrice">9<span class="rangeCurrency">PLN</span></span></span>&#xD;
                                                                                <span class="currentPrice" id="priceMax"><span class="rangePrice">400<span class="rangeCurrency">PLN</span></span></span>&#xD;
                                                                         </div>&#xD;
                                                                         <div id="priceRangeSlider"></div>&#xD;
                                                                </div></div>&#xD;
                                                </div>&#xD;
                                                <script>&#xD;
                                                         $(function()&#xD;
                                                         {&#xD;
                                                                $("#priceRangeSlider").slider(&#xD;
                                                                {&#xD;
                                                                         range: true,&#xD;
                                                                         min: 9,&#xD;
                                                                         max: 400,&#xD;
                                                                         values: [ 9, 400 ],&#xD;
                                                                         slide: function( event, ui )&#xD;
                                                                         {&#xD;
                                                                                $("#priceMin").html("<span class=\"rangePrice\">" + ui.values[0]+ "<span class=\"rangeCurrency\">" + "PLN" + "</span></span>");&#xD;
                                                                                $("#priceMax").html("<span class=\"rangePrice\">" + ui.values[1]+ "<span class=\"rangeCurrency\">" + "PLN" + "</span></span>");&#xD;
&#xD;
                                                                                $("#priceRangeSliderMinValue").attr(\'value\',ui.values[0]);&#xD;
                                                                                $("#priceRangeSliderMaxValue").attr(\'value\',ui.values[1]);&#xD;
                                                                         }&#xD;
                                                                });&#xD;
                                                         });&#xD;
                                                </script><input type="hidden" id="priceRangeSliderMinValue" name="dbInputGte[ve2e98101e7]" value="" ><input type="hidden" id="priceRangeSliderMaxValue" name="dbInputLte[ve2e98101e7]" value="" ><div id="filters_buttons"><div id="buttonReset"><input type="button" name="wyczysc" value="WyczyÅ Ä "  class="btn button" id="wyczysc" onfocus="this.blur();" onClick="location.href=\'listaProduktow.php?resetItem=1&amp;kat=0\'"  ></div><div id="buttonSet"><input type="submit" name="filtruj" value="Filtruj" class="btn button" id="filtruj" onfocus="this.blur();"   ></div></div><input type="hidden" value="187" name="kat"><div><input type="hidden" name="idz" value="" ></div></form></div></div></div><div class="panel box " id="box_catMenu"><div class="panel-heading boxHead"><div class="panel-title boxTitle"><h5>Nasza Oferta</h5></div></div><div class="panel-body boxContent"><nav class="catMenu"><ul class="styl1"  ><li   class="l1 collapsed"   ><a href="malblo,220,0.html"   title="MalBlo"  >MalBlo</a></li><li   class="l1 collapsed"   ><a href="klein,185,0.html"   title="Klein"  >Klein</a></li><li   class="l1 collapsed"   ><a href="rc-happy-people,189,0.html"   title="RC Happy People"  >RC Happy People</a></li><li   class="l1 collapsed"   ><a href="rolnicze-rc-116,217,0.html"   title="Rolnicze RC 1:16"  >Rolnicze RC 1:16</a></li><li   class="l1 expanded"   ><a href="happy-people,187,0.html"  class="selected"   title="Happy People"  >Happy People</a></li><li   class="l1 collapsed"   ><a href="prawdziwy-skaut,21,0.html"   title="Prawdziwy Skaut"  >Prawdziwy Skaut</a></li><li   class="l1 collapsed"   ><a href="promocje-!!!,180,0.html"   title="PROMOCJE !!!"  >PROMOCJE !!!</a></li><li   class="l1 collapsed"   ><a href="vadobag,219,0.html"   title="Vadobag"  >Vadobag</a></li></ul></nav></div></div><div class="panel box box1 box_contents" id="box_cusConBody_14" ><div class="panel-body boxContent" ><div style="text-align: center;"><span style="text-decoration: underline; font-size: 13px; font-family: verdana, geneva; color: #333333;"><strong>KONTAKT:</strong></span><br><span style="font-size: 13px; font-family: verdana, geneva; color: #333333;">Firma Malik</span><br>ZamysÅ owo, ul. WrocÅ awska 96<br><span style="font-size: 13px; font-family: verdana, geneva; color: #333333;">62-060 StÄ szew</span><br><span style="color: #333333; font-family: verdana, geneva; font-size: 13px;">tel. 791 744 344<br><a href="http://www.zabawki-malik.pl/"><span style="color: #333333;">www.zabawki-malik.pl</span></a></span><br><a title="info@zabawki-malik.pl" href="mailto:info@zabawki-malik.pl" target="_blank"><span style="font-size: 12px; font-family: verdana, geneva;"><span style="color: #333333; font-family: verdana, geneva; font-size: 13px;">info@zabawki-malik.pl</span><br></span></a><em><br></em></div></div></div></div><!-- end column1 --></div></div><footer class="mainFooter"><section id="section_menuFooterColumns" class="menuFooter menuFooterMulti"><div class="container"><div class="row"><div id="menuDolne" class="col-md-9 col-sm-12 col-xs-12"><div class="row"><div class="col-md-4 col-sm-4 col-xs-12"><h3 class="links-header hidden-xs">Moje Konto</h3><div class="links-header cursorHand hidden-lg hidden-md hidden-sm" data-toggle="collapse" data-target="#mobi_conLinks2_16">Moje Konto <span class="fa fa-chevron-circle-down"></span></div><ul class="menu first conLinks2 collapse" id="mobi_conLinks2_16"><li><a   href="logowanie.php"><span>Logowanie</span></a></li><li><a   href="rejestracja.php"><span>Rejestracja</span></a></li></ul></div><div class="col-md-4 col-sm-4 col-xs-12"><h3 class="links-header hidden-xs">Zakupy</h3><div class="links-header cursorHand hidden-lg hidden-md hidden-sm" data-toggle="collapse" data-target="#mobi_conLinks2_17">Zakupy <span class="fa fa-chevron-circle-down"></span></div><ul class="menu conLinks2 collapse" id="mobi_conLinks2_17"><li><a href="regulamin,10,10.htm" ><span>Regulamin</span></a></li></ul></div><div class="col-md-4 col-sm-4 col-xs-12"><h3 class="links-header hidden-xs">Informacje</h3><div class="links-header cursorHand hidden-lg hidden-md hidden-sm" data-toggle="collapse" data-target="#mobi_conLinks2_18">Informacje <span class="fa fa-chevron-circle-down"></span></div><ul class="menu conLinks2 collapse" id="mobi_conLinks2_18"><li><a href="polityka-prywatnosci,8,7.htm" ><span>Polityka prywatnoÅ ci</span></a></li><li><a href="polityka-„cookies”,8,15.htm" ><span>Polityka „cookies”</span></a></li></ul></div></div></div><div id="custom777" class="col-md-3 col-sm-12 col-xs-12"><div class="customWrap"><img title="LOGO Malik" src="./gfx/1618828839.4165.png" alt="LOGO Malik" width="100" height="43">&#xD;
<div>ZamysÅ owo, ul. WrocÅ awska 96<br> 62-060 StÄ szew<br> e-mail:<strong> info@zabawki-malik.pl</strong><br>tel. <strong>791 744 344</strong><br> kom.:791 744 344&nbsp;lub 602 660 767<strong><br></strong></div></div></div></div></div></section><section id="section_copyrights"><div class="container"><div class="row"><div class="col-md-7 col-sm-6 col-xs-12"><div id="customTxt">&copy; 2013-2021 Malik. Wszelkie prawa zastrzeÅ¼one</div></div><div class="col-md-5 col-sm-6 col-xs-12"><div id="infoserwis"><a href="http://www.infoserwis.org/" onclick="window.open(this.href); return false;">InfoSerwis</a> - <a href="https://www.internetowesklepy.org/" onclick="window.open(this.href); return false;">oprogramowanie sklepu internetowego</a></div></div></div></div></section></footer><script src="js/tipTip/jquery.tipTip.minified.js"></script><script src="js/bestseller-jscripts.js?v=1624532468"></script><script src="js/jquery.cycle.all_min.js"></script><!--[if lt IE 9]><script src="js/rwd/html5shiv.min.js"></script><script src="js/respond.min.js"></script><![endif]--><a class="btn btn-default btn-sm" id="toTop" role="button" rel="nofollow" data-goto="html" href="#header" style="display:none;" title="Na górÄ "><span class="fa fa-chevron-up"></span></a><script>var stat=undefined;var pozTop=100;function getY( oElement ){var iReturnValue = 0;while( oElement != null ) {iReturnValue += oElement.offsetTop;oElement = oElement.offsetParent;}return iReturnValue;}function scrollTopMax(){return Math.max(document.body.scrollTop,document.documentElement.scrollTop);}window.onscroll = function(){{stat = document.getElementById("toTop");try{pozTop = getY( document.getElementById("header") );}catch(e){}}if(stat==undefined) return;if(scrollTopMax()>pozTop){stat.style.display = "block";}else{stat.style.display = "none";}}</script></div></div><script>jQuery(document).ready(function() {var s = jQuery("#underHeader");var pos = s.position();var windowpos = jQuery(window).scrollTop();if (windowpos >= 155) {s.addClass("sticky");} else {s.removeClass("sticky");}jQuery(window).scroll(function() {var windowpos = jQuery(window).scrollTop();if (windowpos >= 155) {s.addClass("sticky");} else {s.removeClass("sticky");}});});</script><script>jQuery(document).ready(function() {var s = jQuery("#quickCart");var pos = s.position();var windowpos = jQuery(window).scrollTop();if (windowpos >= 155) {s.addClass("sticky");} else {s.removeClass("sticky");}jQuery(window).scroll(function() {var windowpos = jQuery(window).scrollTop();if (windowpos >= 155) {s.addClass("sticky");} else {s.removeClass("sticky");}});});</script><!--[if (gte IE 6)&(lte IE 8)]><script src="js/rwd/selectivizr-min.js"></script><![endif]--><script src="js/rwd/js/bootstrap.min.js"></script><script>var bsModal = $.fn.modal.noConflict();</script><script src="js/jquery.simplemodal.1.4.4.min.js"></script><!--[if (gte IE 6)&(lte IE 10)]><script src="js/rwd/ie10-viewport-bug-workaround.min.js"></script><![endif]--><script src="js/rwd/stackable/stacktable.min.js"></script><script>$(document).ready(function(){$("table.orders.table").cardtable({myClass:"stacktable small-only",hideOriginal:true});});</script><script>$(document).ready(function(){$(".tipTip").tooltip({animation: "true",delay: {show: "400", hide: "100"},html: "true",placement: "auto",trigger: "hover"});});</script><script src="jsind\itemQuantity.min.js"></script><script type="text/javascript">function informacjaOCiasteczkach(a){if(a>0){document.cookie=\'informacjaOCiasteczkach=1; 15-Dec-2048 12:00:00 GMT\';document.getElementById(\'informacjaOCiasteczkach\').style.display=\'none\';}else{if(document.cookie.indexOf("informacjaOCiasteczkach=1")<0){var infoCoo = document.createElement("div");/* NIE UZYWAÄ  ZAÅ AMAÅ  LINI*/infoCoo.innerHTML = \'<div id="informacjaOCiasteczkach" style="text-align: center; background-color: #c0c0c0; border-bottom: 1px solid #808080;"><div style="overflow: auto; text-align: center; padding: 8px 10px;"><span style="color: #444444;">Ta strona uÅ¼ywa ciasteczek (cookies), dziÄ ki którym nasz serwis moÅ¼e dziaÅ aÄ  lepiej.</span> <a href="polityka-„cookies”,8,15.htm">Dowiedz siÄ  wiÄ cej</a> <a href="#" class="button" onclick="informacjaOCiasteczkach(1)" title="Rozumiem, nie pokazuj wiÄ cej"><span class="abutton"><span class="buttonLinkContent" style="padding-top: 5px; padding-bottom: 5px;">OK</span></span></a></div></div>\';/* NIE UZYWAÄ  ZAÅ AMAÅ  LINI KONIEC*/document.body.insertBefore(infoCoo, document.body.firstChild);}}}informacjaOCiasteczkach(0);</script><script>var lantab={ 1072:\'Zamknij\' }</script></body></html></p>';
            }
}
