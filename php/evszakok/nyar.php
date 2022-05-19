<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Nyár</title>
        <meta charset="UTF-8" /> 
        <link rel="stylesheet" href="../../css/summer.css" />
        <link rel="icon" href="../../img/icon.jpg" />
        <link rel="stylesheet" href="/Projekt_2/css/menu.css">
    </head>
    <body>
        <?php include "../menu.php"; ?>
        <?php showMenu("nyar"); ?>
        <?php
            if(!array_key_exists("user", $_SESSION) || !isset($_SESSION["user"])) {
                header("Location: /Projekt_2/php/login.php");
            }
        ?>
        <div id="egesz">
            <main>
                <h1>Nyár</h1>
                <p>A nyár a mérsékelt égöv egyik évszaka, a leghosszabb nappalok és a legmelegebb időjárás jellemzi, időben a tavasz és az ősz között helyezkedik el. Trópusi, illetve száraz égövi tájakon nem létezik.</p>
                <p>Az egyes évszakok kezdete kultúráktól függően változó, csillagászati és az adott területi meteorológián alapul. Általában amikor a déli féltekén nyár van, az északin tél, és fordítva. A trópusi és szubtrópusi területeken az esős évszak nyáron következik be, ekkor trópusi ciklonok alakulnak ki és vándorolnak a trópusi és szubtrópusi óceánok felett. A kontinensek belsejében viharok hozhatnak jégesőt is délutánonként és esténként. Az iskolákban nyári szünet van a forró időjárás és a hosszabb napok előnyeinek kihasználására.</p>
                <section>
                    <h2>Kialakulásának okai</h2>
                    <p>A Föld gömb alakjából következően alakulnak ki az éghajlati övek. A pólusokon a beesési szög kicsi, a kis beesési szög alatt érkező hőmennyiség is kicsi, és jelentős részben visszaverődik. Az Egyenlítőn a beesési szög nagy, ezért itt erősebb a felmelegedés. Az éghajlati övek határait meghatározott szélességi köröknél vettük fel: ezek a térítők és sarkkörök. A legtöbb energiát a két térítő közötti trópusi öv, ezen belül az Egyenlítő kapja.</p>
                    <p>A beesési szögek szempontjából kitüntetett időpontok vannak a keringési pályán. A Baktérítőn való (legdélebbi) zeniten delelés a téli napforduló (december 22.), a Ráktérítőn való (legészakabbi) zeniten delelés a nyári napforduló (június 21.) napja, március 21. és szeptember 23. a tavaszi és őszi napéjegyenlőségek időpontjai.</p>
                </section>
                <article class="napfordulo">
                    <h2>Nyári napforduló</h2>
                    <p>A nyári napforduló az a pillanat, amikor a Nap-Föld középpontokat összekötő egyenes és az egyenlítő síkja által bezárt szög a legnagyobb értékét (kb. 23,5 fok) éri el a Nap északi félgömbön való elhelyezkedése mellett. Ez az időpont június 21-én van, és az északi féltekén a csillagászati nyár kezdetét jelenti. Pontos időpontját a csillagászati évkönyvek közlik világidőben (UTC).</p>
                    <p>A nyári napfordulóig a Nap delelési helye az égbolton délről északra halad, utána pedig északról dél felé kezd mozogni, és az év leghosszabb nappalát adja (következésképpen a legrövidebb éjszakát) az északi féltekén.</p>
                </article>
                <section>
                    <h2>Magyarországon</h2>
                    <p>A csillagászati nyár a nyári napfordulótól az őszi napéjegyenlőségig tart, tehát az északi féltekén a kezdete: június 20., 21. vagy 22. – vége: szeptember 22., 23. vagy 24.</p>
                    <p>A meteorológiai nyár június 1-jétől augusztus 31-ig tart.</p>
                    <p>Az északi féltekét nyáron éri a nap legnagyobb, vagyis merőlegeshez közeli beesési szögben. Június 21-én, a leghosszabb napon merőlegesen süti a Ráktérítőt a Nap.</p>
                    <p>A déli félgömbön december 22-én süti a nap merőlegesen a Baktérítőt, ezért ezen a napon van a déli félteke leghosszabb, míg az északi félteke legrövidebb napja.</p>
                </section>
                <figure class="figure">
                    <img src="../../img/naplemente.png" alt="Naplemente" width=300 />
                    <figcaption>Ábra 1. Naplemente</figcaption>
                </figure>
                <br />
                <figure class="figure">
                    <div id="animalt"></div>
                    <figcaption>Ábra 2. A Nap animálva</figcaption>
                </figure>
            </main>
            <aside>
                <h2>A következő évszak:</h2>
                <p>Az ősz a mérsékelt öv egyik évszaka. Trópusi, illetve száraz és hideg égövi tájakon nem létezik.</p>
                <p>Hagyományosan a legtöbb országban ősszel nyitnak az iskolák, indul a tanítás. Ősz a termények betakarításának, a szőlő szüretelésének ideje is.</p>
                <p>Többet <a href="osz.html">itt</a> tudsz megtudni.</p>
            </aside>
        </div>
        <footer>
            <p>Forrás: <a href="https://hu.wikipedia.org/wiki/Ny%C3%A1r" target="_blank">Wikipédia</a></p>
        </footer>
    </body>
</html>