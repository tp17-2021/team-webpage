<section id="project-architecture-design" class="position-relative">
    <div class="pattern">
        <img src="assets/img/patterns/circuit_pattern.svg">
    </div>
    <div class="container-lg pt-5 pt-lg-7">
        <h2 class="section-title">Návrh riešenia</h2>
        <p class="text-center mb-5">Naše riešenie sa skladá z niekoľkých častí, pre ktoré sme nakreslili prehľadné diagramy.</p>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="devices-in-polling-place-diagram-tab" data-bs-toggle="tab" data-bs-target="#devices-in-polling-place-diagram" type="button" role="tab" aria-controls="devices-in-polling-place-diagram" aria-selected="true">Zariadenia v miestnosti</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="encryption-diagram-tab" data-bs-toggle="tab" data-bs-target="#encryption-diagram" type="button" role="tab" aria-controls="encryption-diagram" aria-selected="false">Šifrovaná komunikácia</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="vote-lifecycle-diagram-tab" data-bs-toggle="tab" data-bs-target="#vote-lifecycle-diagram" type="button" role="tab" aria-controls="vote-lifecycle-diagram" aria-selected="false">Životný cyklus hlasu</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="voting-process-diagram-tab" data-bs-toggle="tab" data-bs-target="#voting-process-diagram" type="button" role="tab" aria-controls="voting-process-diagram" aria-selected="false">Volebný process</button>
            </li>
        </ul>
    </div>
</section>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="devices-in-polling-place-diagram" role="tabpanel" aria-labelledby="devices-in-polling-place-diagram-tab">
        <section class="position-relative">
            <div class="container-lg pb-5 py-lg-7">
                <h4 class="section-title">Volebná miestnosť</h4>
                <p>
                    Vo <b>volebnej miestnosti</b> sa nachádza gateway a viaceré volebné terminály pripojené na gateway ethernetovým káblom. Gateway komunikuje s jediným centrálnym serverom, vykonáva synchronizáciu hlasov.
                </p>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <img class="w-100 my-5" src="assets/img/illustrations/devices_in_polling_place_diagram.svg" alt="Devices in polling place diagram">
                    </div>
                </div>

                <p>
                    <b>Volebný terminál</b> pozostáva z 22 palcovej LCD dotykovej obrazovky, na ktorej je voličovi umožnené voliť. Obrazovka je pripojená k Raspberry Pi, ktoré komunikuje s NFC čítačkou pre umožnenie autorizácie pomocou autorizačných tokenov nahraných na NFC tagoch. Ďalej komunikuje s termo-tlačiarňou, ktorá umožňuje tlač potvrdenia o voľbe.
                </p>
                <p>
                    <b>Gateway</b> umožňuje manažovať celú volebnú miestnosť s terminálmi. Ako jediné zariadenie komunikuje priamo s centrálnym serverom cez internet. Skladá sa z Raspberry Pi, ktoré hostuje všetky mikroslužby manažujúce priebeh volieb. Ku gateway-u je pripojená malá dotyková obrazovka, ktorá slúži na prístup volebnej komisie k systému pre umožnenie riadenia priebehu volieb. Ku gateway-u je tiež pripojená NFC zapisovačka na zapisovanie generovaných autorizačných tokenov na tagy.
                </p>
                <p>
                    <b>Hlavný server</b> je zodpovedný za spracovanie hlasov zo všetkých gateway-ov do jednej databázy a vykonávanie štatistických výpočtov, vizualizáciu výsledkov
                    volieb.
                </p>
                <p>
                    Nastavenia pre jednotlivé voľby sú dané <b>konfiguráciou</b>.
                </p>
            </div>
        </section>
    </div>

    <div class="tab-pane fade" id="encryption-diagram" role="tabpanel" aria-labelledby="encryption-diagram-tab">
        <section class="position-relative">
            <div class="container-lg pb-5 py-lg-7">
                <h4 class="section-title">Šifrovanie správ</h4>
                <p>
                    <b>Bezpečnosť</b> je vo voľbách, najmä v elektronických, prakticky najdôležitejším prvkom. Porušenie integrity volieb môže viesť k zmene výsledkov a v dôsledku toho k zvoleniu nesprávnych kandidátov.
                </p>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <img class="w-100 my-5" src="assets/img/illustrations/encryption_diagram.svg" alt="Encrypted communication diagram">
                    </div>
                </div>

                <p>
                    Keďže naše riešenie zahŕňa iba jeden centrálny server a hlasy z gateway-ov sú odosielané cez verejnú internetovú sieť, rozhodli sme sa použiť <b>RSA</b> a <b>AES</b> algoritmy na šifrovanie prenášaných hlasov. Samotné hlasy sú zašifrované pomocou symetrického kľúča AES, ktorý je potom zašifrovaný verejným kľúčom RSA hlavného serveru. Hlasy sú tiež podpísané asymetrickým privátnym kľúčom RSA gateway-a, ktorý zabezpečí, že počas prenosu na server dáta neboli zmenené. Zapojením súkromného kľúča volebnej miestnosti sme zabezpečili, že aj keby útočník poznal verejný kľúč hlavného servera, potrebovali by poznať aj privátny kľúč konkrétnej volebnej miestnosti. Algoritmus AES sa používa kvôli jeho rýchlosti a schopnosti šifrovať správy neobmedzenej dĺžky a je v súčasnosti priemyselným štandardom. Rovnaký proces šifrovania sa používa aj vo vnútri lokálnej siete s volebnými terminálmi.
                </p>
                <p>
                    Všetka komunikácia medzi volebnými terminálmi a gateway-om prebieha len cez lokálnu sieť Ethernet. Okrem toho je každý odoslaný hlas šifrovaný pomocou moderných kryptografických algoritmov. Keby sa i napriek tomu útočník pokúsil pripojiť k sieti a odoslať falošný hlas, nemal by platný privátny kľúč volebného terminálu, takže jeho pokus o útok by zlyhal pri overovaní hlasu, hlas by nebol prijatý.
                </p>
                <p>
                    Výmena kľúčov je najdôležitejšou súčasťou RSA šifrovania. Výmena verejných kľúčov sa vykonáva počas procesu konfigurácie gateway-a autorizovaným personálom pred voľbami. Tu môže zapríčiniť chybu iba ľudský faktor, čo sa taktisto môže stať aj pri doteraz zaužívanom spôsobe volieb.
                </p>
            </div>
        </section>
    </div>

    <div class="tab-pane fade" id="vote-lifecycle-diagram" role="tabpanel" aria-labelledby="vote-lifecycle-diagram-tab">
        <section class="position-relative">
            <div class="container-lg pb-5 py-lg-7">
                <h4 class="section-title">Životný cyklus hlasu</h4>

                <p>
                    Dáta reprezentujúce hlas voliča v <b>JSON</b> formáte sú odoslané na backend terminálu, kde sa overí platnosť voličovho autorizačného tokenu a následne je potvrdený aj jeho hlas. Šifrovaný hlas, spolu s identifikátorom volebného terminálu a autorizačným tokenom voliča je odoslaný na gateway, kde sa spracuje. Voting Service dešifruje hlas kľúča daného volebného terminálu a následne overí <b>platnosť autorizačného tokenu</b>. Ak je token platný, hlas sa uloží do databázy a vráti správu o úspešnom spracovaní požiadavky. Akonáhle terminál prijme odpoveď, <b>tlačiareň vytlačí potvrdzujúci doklad</b> (malý papier) s podrobnosťami o hlasovaní a <b>QR kódom</b>.
                </p>

                <div class="row">
                    <div class="col-md-7 mx-auto">
                        <img class="w-100 my-5" src="assets/img/illustrations/vote_lifecycle_diagram.svg" alt="Vote lifecycle diagram">
                    </div>
                </div>

                <p>
                    Po odhlasovaní je použitý autorizačný token deaktivovaný, takže s ním nie je možné znova hlasovať. Ak je gateway pripojený k internetu, synchronization service začne odosielať šifrované hlasy na hlavný server v pravidelných intervaloch. Hlasy sú potom spracované na serveri službou voting service, kde sa dešifrujú hlasy pomocou príslušných kľúčov a ak
                    je elektronický podpis platný, hlas je uložený do hlavnej databázy. Hlavný
                    server pravidelne reindexuje nové hlasy pomocou technológie <b>ElasticSearch</b> pre efektívne získavanie štatistík a umožnenie rôznych dopytov nad výsledkami.
                </p>
                <p>
                    Konečné výsledky sú k dispozícii hneď, ako všetky gateway-e zosynchronizujú všetky svoje hlasy. Naše riešenie sme pripravili na veľké množstvo návštevníkov, pretože zobrazovanie výsledkov je riadené pomocou ElasticSearch-u. Táto technológia podporuje distribuované výpočty a je vysoko škálovateľná. Používateľom ponúkame vizualizáciu výsledkov volieb podľa krajov a okresov Slovenska a taktiež je možné vidieť aj rozdelenie kresiel pre strany v parlamente.
                </p>
                <p>
                    Používatelia môžu tiež zadávať vlastné dopyty filtrovaním konkrétneho mesta, regiónu,
                    alebo iného geografického členenia. Zároveň je možné poskytovať čiastkové výsledky volieb aj pokým ešte nie sú ukončené, ak to individuálny prípad použitia umožňuje.
                </p>
            </div>
        </section>
    </div>

    <div class="tab-pane fade" id="voting-process-diagram" role="tabpanel" aria-labelledby="voting-process-diagram-tab">
        <section class="position-relative">
            <div class="container-lg pb-5 py-lg-7">
                <h4 class="section-title">Volebný process</h4>

                <div class="row">
                    <div class="col-md-7 mx-auto">
                        <img class="w-100 my-5" src="assets/img/illustrations/election_process_diagram.svg" alt="Voting process diagram">
                    </div>
                </div>

                <p>
                    Z pohľadu voliča sa samotný proces hlasovania zásadne nemení. Volič príde do volebnej miestnosti a podrobí sa overeniu identity členom komisie. Namiesto obdržania veľkého množstva papierov s kandidátmi dostane volič NFC tag určený na autorizáciu pri volebnom termináli.
                    Volič pristúpi k volebnému terminálu a priloží NFC tag ku čítačke, po úspešnej autorizácii je odomknutá volebná aplikácia. Veľký dotykový displej zobrazuje zoznam dostupných kandidátov. Volič môže vyhľadávať kandidátov podľa mena, prechádzať stránkami v zozname strán a vyberať preferovaných kandidátov. Volič musí potvrdiť svoju voľbu v každom medzikroku a na konci po zobrazení sumáru hlasovania opäť potvrdiť svoj výber. Taktiež je možné odovzdať aj prázdny hlas ako to je možné pri klasických voľbách. Volebný terminál informuje voliča o úspechu voľby a vytlačí potvrdenie o hlasovaní (malý papierik, ktorý obsahuje QR kód pre možnosť offline počítania hlasov). Následne volič vhodí potvrdenie do volebnej urny a hlasovací proces je z pohľadu voliča ukončený.
                </p>

            </div>
        </section>
    </div>
</div>