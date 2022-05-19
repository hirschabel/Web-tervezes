<?php
    $x = "";
    if(isset($_GET["oszKerdes"])) {
        if($_GET["oszKerdes"] === "igen") {
            $x = "Te szereted az őszt!";
        } else {
            $x = "Te nem szereted az őszt. :(";
        }
    }
?>

<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Ősz</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="../../css/autumn.css" />
        <link rel="icon" href="../../img/icon.jpg"/>
        <link rel="stylesheet" href="/Projekt_2/css/menu.css">
    </head>
    <body>
        <?php include "../menu.php"; ?>
        <?php showMenu("osz"); ?>
        <div>
            <h1>Ősz</h1>
            <hr />
        </div>
        <div>
            <h2>Az ősz</h2>
            <p>Az ősz a mérsékelt öv egyik évszaka. Trópusi, illetve száraz és hideg égövi tájakon nem létezik.</p>
            <form action="osz.php" method="GET">
                Szereted az őszt?<br />
                <label><input type="radio" name="oszKerdes" value="igen"/>Igen</label><br />
                <label><input type="radio" name="oszKerdes" value="nem"/>Nem</label><br/>
                <input type="submit" name="signup"/> <br/><br/>
            </form>
            <?php echo $x; ?>
            
            <p>A Föld északi féltekéjén <span class="honapok">szeptember</span>, <span class="honapok">október</span> és <span class="honapok">november</span>, míg a Föld déli féltekéjén <span class="honapok">március</span>, <span class="honapok">április</span> és <span class="honapok">május</span> az ősz hónapjai. Az ősz a nyár és a tél között helyezkedik el, fő jellemzője a napok rövidülése, a hőmérséklet csökkenése és a lombhullató fák lombjának zöldről sárgává-pirossá színeződése majd lehullása.<br />                
            Hagyományosan a legtöbb országban ősszel nyitnak az iskolák, indul a tanítás. Ősz a terményekbetakarításának, a szőlő szüretelésének ideje is.<br />                
            Az ősz fő ünnepei az elmúláshoz kapcsolódnak: <span class="datum">november 1.</span> előestéje az angolszász országokban <b>Halloween</b>, <span class="datum">november 1.</span> <b>Mindenszentek</b> és <span class="datum">november 2.</span> <b>Halottak napja.</b></p>
        </div>
        <div>
            <h2>Időjárás Magyarországon</h2>
            <p><mark>Ősszel a nappalok rövidülnek és az időjárás fokozatosan fordul egyre hidegebbre</mark>, szelesebbre és csapadékosabbra. A lombhullató növények levelei elsárgulnak, elvörösödnek, átmenetileg gyönyörű színpompába borítva a természetet, mielőtt elszáradnának és lehullanának a fákról. Néhány későn érő növény még meghozza gyümölcseit.</p>
            <p>Az ősz különösen csapadékos évszak. <u>Magyarországon</u> 2013-ig az egy nap alatt leesett legtöbb csapadékot Gyömrőn mérték <i>1963. szeptember 8-án</i>, 203 mm-t. Ősszel csökken a napsütéses órák száma, <u>Magyarországon</u> 2013-ig a leghosszabb, napsütés nélküli időszakot Szegeden regisztrálták <i>1978. október 31.</i> és <i>december 4.</i> között, 35 napot.</p>
        </div>
        <div>
            <h2>Etimológia</h2>
            <pre>
Az ősz finnugor eredetű szó,
    az osztják szogesz,
    a mordvin szoks,
a finn syksy szavak közös finnugor alapformájából <wbr>ered, <wbr>melynek <wbr>szókezdő <wbr>sz-e <wbr>eltűnt.</pre>
        </div>
        <div>
            <h2>Festmények</h2>
        </div>
        <div class="kep">
            <img src="../../img/Őszi_festmény.jpg" alt="Őszi_festmény_1" height="350">
            <p class="festmenyek">Száva Sándor <cite>ŐSZI IMPRESSZIÓ</cite> c. festménye</p>
        </div>
        <div class="kep">
            <img src="../../img/Őszi_festmény2.jpg" alt="Őszi_festmény_2" height="350">
            <p class="festmenyek">V. Juhász Edit <cite>Aranyló ősz</cite> c. festménye</p>
        </div>
        <div>
            <h2>Meddig tart az ősz?</h2>
            <p>A Startlap wiki szerint:</p>
            <blockquote cite="https://wiki.startlap.hu/mikor-kezdodnek-az-evszakok/">
                Így az északi féltekén: [...]  az ősz szeptember 23-tól december 21-ig [...] tart.<br />
                A déli féltekén pedig: [...] az ősz március 21-től június 21-ig [...] tart.
            </blockquote>
        </div>
        <div>
            <h2>Ősz a népi kultúrában</h2>
            <p>Az ősz fő, hagyományokon alapuló ünnepei többnyire az elmúláshoz, halálhoz kapcsolódnak. Főként a költészetben, a melankóliával áll asszociatív viszonyban.<br />
                A szép nyári napok elmúltak, a tél hidege már érződik, az égbolt elszürkül, egyre rövidebbek a nappalok, sok ember magába fordul.</p>
            <p><strong>Szólások, közmondások:</strong> <q>Hull, mint ősszel a légy.</q> <q>A legutoljára szirmot bontó virágok állják legjobban az őszi fagyokat.</q></p>
        </div>
    <footer>
        <hr id="also"/>
        <p>Forrás: <a href="https://hu.wikipedia.org/wiki/%C5%90sz" target="_blank">Wikipédia</a></p>
    </footer>
    </body>
</html> 