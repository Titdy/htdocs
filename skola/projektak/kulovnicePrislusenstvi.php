<?php
include_once 'header.php';
require_once('includes/dbh.inc.php');
require_once('includes/dbtext.inc.php');
?>

<div class="container"  style="padding-top: 10%; padding-bottom: 5%;">
  <div class="col-12 col-sm-12 col-lg-12 col-md-12">
    <h2>Naučná Videa</h2>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
      <div class="dropdown show">
            <a class="btn dropdown-toggle text-white-50" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pistole/Revolvery
            </a>
          
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="pistoleIntro.php">Co je to Pistole?</a>
              <a class="dropdown-item" href="pistoleDruhy.php">Druhy Pistolí</a>
              <a class="dropdown-item" href="pistoleStrelivo.php">Střelivo a nabijení Pistole</a>
              <a class="dropdown-item" href="pistolePrislusenstvi.php">příslušenství</a>
              <a class="dropdown-item" href="pistoleRozborka.php">Rozborka Pistole</a>
            </div>
          </div>
          <div class="dropdown show">
            <a class="btn dropdown-toggle text-white-50" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kulovnice
            </a>
          
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="kulovniceIntro.php">Co je to Kulovnice?</a>
              <a class="dropdown-item" href="kulovniceDruhy.php">Druhy Kulovnic</a>
              <a class="dropdown-item" href="kulovniceStrelivo.php">Střelivo a nabíjení Kulovnice</a>
              <a class="dropdown-item" href="kulovnicePrislusenstvi.php">příslušenství</a>
              <a class="dropdown-item" href="karabinaRozborka.php">Rozborka Karabiny</a>
              <a class="dropdown-item" href="kulovniceRozborka.php">Rozborka Kulovnice</a>
            </div>
          </div>
        
        <div class="dropdown show">
            <a class="btn dropdown-toggle text-white-50" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Brokovnice
            </a>
          
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="brokovniceIntro.php">Co je to Brokovnice</a>
              <a class="dropdown-item" href="brokovniceDruhy.php">Druhy Brokovnic</a>
              <a class="dropdown-item" href="brokovniceStrelivo.php">Střelivo a nabíjení Brokovnice</a>
              <a class="dropdown-item" href="brokovniceRozborka.php">Rozborka Brokovnice Pumpvací</a>
              <a class="dropdown-item" href="brokovniceDvou.php">Rozborka Brokovnice Dvouhlavňové</a>
            </div>
          </div>
          <div class="dropdown show">
            <a class="btn dropdown-toggle text-white-50" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Nože
            </a>
          
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="nozeUvod.php">Úvod do nožů</a>
              <a class="dropdown-item" href="nozeDruhy.php">Druhy Ocelí a Střenek</a>
          </div>


    </nav>

  </div>
</div>
<div class="container"  style="padding-top: 10%; padding-bottom: 5%;">
  <div class="col-12 col-sm-12 col-lg-12 col-md-12">
    <h2>Příslušenství pro kulovnice</h2><br>

    <p>
        Každá zbraň může být modifikována podle potřeb střelce/majitele, to stejné samozřejmě platí 
        o kulovnicích a karabinách, avšak moderní karabiny mají větší modularitu než kulovnice na páku.

    </p>
    <h3>Co vše se dá modifikovat?</h3>
    <p>Vše, od ústí hlavně po pažbu, avšak, jak bylo zmíněno na začátku, modularita se liší mezi kulovnicí na páku a karabinou.
        proto jsme vám vypsali v základu co vše se dá změnit či přidat.
    </p>
    <h3>Kulovnice</h3>
    <ul>
        <li>Muška (není li pevně přidělaná)</li>
        <li>Hlaveň</li>
        <li>Hledí</li>
        <li>Předpažbí a Pažba</li>
        <li>Závěr a klika závěru</li>
        <li>Lučík a spoušť</li>
    </ul>
    <h6>Co se dá přidat</h6>
    <ul>
        <li>Hledí</li>
        <li>Rukojeť (po změně předpažbí)</li>
        <li>Zásobník (pokud je odnímatelný)</li>
        <li>Tlumič</li>
        <li>Flashhider či kompenzátor</li>
    </ul>
    <h3>Karabiny</h3>
    <ul>
        <li>Muška</li>
        <li>Hlaveň</li>
        <li>Nadpažbí a Podpažbí (celkově předpažbí)</li>
        <li>Píst či plynný mechanismus</li>
        <li>Hledí</li>
        <li>Pažba</li>
        <li>Pažbička (HandGrip)</li>
        <li>Pouzdro Závěru</li>
        <li>Lučík a spoušť</li>
</ul>
<h6>Co se dá přidat</h6>
<ul>
        <li>Kolimátor</li>
        <li>Rukojeť na předpažbí</li>
        <li>Zásobník</li>
        <li>Svítilny</li>
        <li>RIS rail system</li>
        <li>IR (Infra-Red laser)</li>
        <li>Laser</li>
        <li>Tlumič</li>
        <li>Flashhider či kompenzátor</li>
    </ul>
    <p>
        Samozřejmě tohle vše je teprve začátek. Zbraň jde upravovat podle vaší potřeby do nekonečna, ale 
        každá platforma je jiná a ne každá bude mít neomezené množství možností z produktů a výrobců.<br>
        Podle nás mezi nejlepší platformy pro nekonečnou modifikaci patří hlavně platformy <b>AR-15 a AKM</b>.
        Nejen že patří mezi nejslavnější platformy ale taktéž množství výrobců a produktů kteří vytváří 
        příslušenství je gigantické množství. Ale jestli nemáte zájem ani o jednu a máte v merku například platformy 
        <b>IWI Tavor, FAL, SCAR, BREN</b> či jiné, nebojte se protože spousta příslušenství na AR-15/AKM lze 
        použít i na ostatních zbraních. <b>Proto se rozhodněte jak plánujete používat svojí karabinu, porozhlédněte se po příslušenství a ke konci
        si objednejte zbraň.</b>
    </p>

    <!--<h3>Jak přidat příslušensví?</h3>
    <p>Různé typy nástavců vyžadují různé způsoby instalace. Většina z nich je natolik 
        jednoduchá, že si je můžete nainstalovat sami i se základními znalostmi o střelných 
        zbraních, ale v některých případech možná budete potřebovat pomoc zbrojíře.</p>
        <br>
        <h5>Rail Systémy (Kolejničky)</h5>
        <p>Většina příslušenství, která používají kolejnicové systémy, se instaluje rychle
             a snadno. Existují dva hlavní typy kolejnicových systémů: <b> Weaver a Picatinny </b>
              kolejnice. Kolejnice Weaver jsou starší, méně univerzální verze a dnes jsou 
              méně běžné. Tyto dva typy kolejnic mohou vypadat téměř identicky; sloty na 
              kolejnici Picatinny jsou jen o něco širší než ty na kolejnici Weaver, ale 
              rozdíl je těžké vidět bez srovnání vedle sebe.
            <br>
            Většina kolejnicových systémů prodávaných dnes jsou kolejnice Picatinny, 
            částečně proto, že příslušenství Weaver se vejde na kolejnice Picatinny,
             ale obráceně to obvykle není pravda. Převážnou většinu příslušenství Weaver 
             a Picatinny lze nainstalovat bez použití nářadí nebo pomocí jednoduchých 
             nástrojů, jako jsou imbusové klíče.
             <br><br>
             <img src="img/pageImages/rail-systems.jpg" class="mx-auto d-block img-fluid">
        </p><br>
        <h5>Puškohledy a Kolimátory</h5>
        <p>Existují dva hlavní druhy kolejnicových systémů, ale držáky 
            dalekohledů jsou jiný příběh. Zatímco některá mířidla a zaměřovače lze namontovat
            na kolejnice <b> Weaver nebo Picatinny </b>, mnoho z nich vyžaduje jiný montážní systém
            a jsou jich desítky. Některé lze použít na jakoukoli střelnou zbraň, zatímco 
            jiné jsou vyráběny tak, aby vyhovovaly konkrétním modelům. Nejlepší rada, 
            kterou můžeme nabídnout, je velmi pečlivě prozkoumat optiku před jejím nákupem.
            Ujistěte se, že přesně víte, jaký typ montážního systému budete potřebovat 
            a zda je tento montážní systém kompatibilní se střelnou zbraní, kterou máte
             na mysli. Předpokládejme, že zaměřovač nebo montážní systém není kompatibilní            s vaší střelnou zbraní nebo systémem kolejnic, pokud to není v dokumentaci 
            výslovně uvedeno.<br><br>
            <img src="img/pageImages/scope-mounts.jpg" class="mx-auto d-block img-fluid">
        </p>
            <br>
        <h5>Závěs na zbraň</h5>
        <p>Stejně jako držáky dalekohledu, závěsy se mohou připevnit buď k 
            systému kolejnic, nebo ke střelné zbrani samotné, obvykle prostřednictvím 
            nějakého druhu svorky v druhém případě. Dobrou zprávou je, že držáky popruhů 
            jsou méně specifické pro střelné zbraně a jsou obvykle mnohem méně matoucí 
            než držáky dalekohledů. <b> Přesto si před nákupem přečtěte dokumentaci, abyste 
            se ujistili, že je držák kompatibilní s vaší konkrétní zbraní.</b><br><br>
            <img src="img/pageImages/sling-mounts-and-rings.jpg" class="mx-auto d-block img-fluid">
        </p>
        <br> 
        <h5>Nástavce hlavně</h5>
        <p>
        Většina nástavců hlavně vyžaduje hlaveň se závitem, což je přesně to, jak to zní. 
        Tyto nástavce se jednoduše našroubují na závity na vnějším povrchu tlamy. Existují 
        robustní trhy prvních a třetích stran pro závitové hlavně pro mnoho populárních 
        zbraní. Některé části, jako jsou portované hlavně, nejsou technicky přílohami; spíše 
        zcela nahrazují původní hlaveň, stejně jako hlaveň se závitem.
        Bezpečnost je prvořadým zájmem při výměně sudů a používání nástavců na sudy. 
        Použití nesprávných dílů (nebo nesprávná instalace správných dílů) může potenciálně
        způsobit katastrofální poruchy při výstřelu ze zbraně. <b> Máte-li jakékoli pochybnosti,
        obraťte se na kvalifikovaného puškaře.</b><br><br>
        <img src="img/pageImages/barrel-attachments-02.jpg" class="mx-auto d-block img-fluid">
        </p>-->
        <?php
         while($row = mysqli_fetch_assoc($result_instalacePrislusenstvi)){
          ?>
        <p>
          <?php echo $row['text'] ?>
          
          <?php
         }
         ?>
        </p>


</div>
</div>




<br>
</div>
    </div>
</div>
<?php 
include_once 'footer.php';
?>