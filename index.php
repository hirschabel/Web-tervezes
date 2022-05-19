<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Évszakok</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css/nemMain.css">
        <link rel="icon" href="./img/icon.jpg" />
        <link rel="stylesheet" href="/Projekt_2/css/menu.css">
    </head>
    <body>
        <?php include "php/menu.php"; ?>
        <?php showMenu("index"); ?>
        <header>
	        <h1 id="evszakok">Évszakok</h1>
	    </header>
        <div>
            <div>
                <?php
                    if(array_key_exists("user", $_SESSION) && isset($_SESSION["user"])) {
                        include "php/image_upload.php";
                    }
                ?>
                <hr id="evszak_vonal"><!--A világ legfontosabb vonala-->
                <img id="kep" src="img/evszakok.jpg" height="250" alt="Évszakok" />
                <p>Évszaknak a csillagászati és meteorológiai megfigyelések alapján a földi időjárás olyan hosszabb, évente ismétlődő időszakait nevezzük, melyek rendszeresen hasonló jellemzőkkel rendelkeznek, és elkülöníthetőek a más tipikus jellemzőkkel leírható időjárási időszakoktól.</p>
            </div>
            <div>
                <p>Jelenlegi évszak: <?php include "php/honap.php";?></p>
            </div>
            <section>
                <h2 id="evszakokKialakulasa">Az évszakok kialakulása</h2>
                <p>Az évszakok kialakulása a <em>Föld</em> Nap körüli mozgásának, valamint a <em>tengelyferdeségnek</em> következménye. A tengelyferdeség miatt a napsugarak beesési szöge a keringés során változik, emiatt a <em>Földön</em> felmelegedésbeli különbségek alakulnak ki. Ennek a különbségnek az eredménye az évszakok váltakozása. A <em>Föld</em> elliptikus pályán kering a Nap körül, iránya NY-K, az északi félteke telén Napközelben kering, nyáron Naptávolban. Keringési ideje 365 nap 6 óra 9 perc 9 másodperc, ezt az időszakot nevezzük csillagászati évnek.</p>
            </section>
            <section>
                <h2 id="evszakokEsNapokHossza">Az évszakok és a napok hossza</h2>
                <h3 id="sarkKori">Sarkköri napok</h3>
                    <p>Az adott sarkkör és sarkpont közti területen az év folyamán legalább egyszer nem kel fel illetve nem nyugszik le a Nap. A sarkpontokon pedig féléves nappal és féléves éjszaka váltja egymást a fény beesési szöge miatt. Lásd alább:</p>
                <h3 id="eszakiSarkponti">Északi sarkponti napok</h3>
                    <p>Éjszaka: szeptember 23–március 20. Az időjárás lehűl, kezdődik a féléves éjszaka.
                    Nappal: március 21–szeptember 22. Az időjárás valamennyit felmelegszik, kezdődik a féléves nappal.</p>
                <h3 id="deliSarkponti">Déli sarkponti napok</h3>
                    <p>Éjszaka: március 21–szeptember 22. Az időjárás lehűl, kezdődik a féléves éjszaka.
                    Nappal: szeptember 23–március 20. Az időjárás valamennyit felmelegszik, kezdődik a féléves nappal.</p>
            </section>
            <section>
                <h2 id="felosztasiModsz">Felosztási módszerek</h2>
                <h3 id="meteorologiai">Meteorológiai vagy Hagyományos</h3>
                <ul class="haromLista">
                    <li>Tavasz: a lombhullató növények rügyezésétől, a vándormadarak visszaköltözésétől - a hőmérséklet állandó, tartós felmelegedéséig</li>
                    <li>Nyár: a hőmérséklet állandó, tartós felmelegedésétől - a lombhullató növények leveleinek elsárgulásáig, a vándormadarak elköltözéséig</li>
                    <li>Ősz: a lombhullató növények leveleinek elsárgulásától, a vándormadarak elköltözésétől - a hőmérséklet fagypont alá csökkenéséig</li>
                    <li>Tél: a hőmérséklet fagypont alá csökkenésétől - a lombhullató növények rügyezéséig, a vándormadarak visszaköltözéséig</li>
                </ul>
                <h3 id="naptari">Naptári</h3>
                <h4 id="eszakiFelteken">Az északi féltekén:</h4>
                <ul class="negyLista">
                    <li>Tavasz: március 1-jétől – május 31-éig</li>
                    <li>Nyár: június 1-jétől – augusztus 31-éig</li>
                    <li>Ősz: szeptember 1-jétől – november 30-áig</li>
                    <li>Tél: december 1-jétől – február 28-áig, vagy 29-éig (szökőév esetén)</li>
                </ul>
                <h4 id="deliFelteken">A déli féltekén:</h4>
                <ul class="negyLista">
                    <li>Tavasz: szeptember 1-jétől – november 30-áig</li>
                    <li>Nyár: december 1-jétől – február 28-áig, vagy 29-éig (szökőév esetén)</li>
                    <li>Ősz: március 1-jétől – május 31-éig</li>
                    <li>Tél: június 1-jétől – augusztus 31-éig</li>
                </ul>
            </section>
            <div>
                <iframe src="https://hu.wikipedia.org/wiki/%C3%89vszak" height="200" width="600" title="frame"></iframe>
            </div>
        </div>
        <footer>
            <p>Forrás: <a href="https://hu.wikipedia.org/wiki/%C3%89vszak" target="_blank">Wikipédia</a></p>
        </footer>
    </body>
</html>