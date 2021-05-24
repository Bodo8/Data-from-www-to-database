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

        return str_word_count($strHtml,1, '></ =0123456789');
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
}
