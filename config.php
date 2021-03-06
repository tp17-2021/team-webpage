<?php
require_once 'functions.php';
$current_week_number = 32; //date_diff_in_weeks('20/09/2021', date('d/m/Y'));
$total_weeks_number = 32; //date_diff_in_weeks('20/09/2021', date('01/05/2022'));

$current_day_number = 200; //date_diff_in_days('20/09/2021', date('d/m/Y'));
$total_days_number = 200; //date_diff_in_days('20/09/2021', date('01/05/2022'));


return [
    /* General */
    'site_title' => 'Electie | TP@FIIT STU',
    'site_name' => 'Electie - The Future of Voting',
    'email' => 'tim172021@googlegroups.com',
    'github_link' => 'https://github.com/tp17-2021',
    'main_title' => 'BUDÚCNOSŤ<br>VOLIEB',
    'main_subtitle' => 'Bezpečnejšie, rýchlejšie, lacnejšie a ekologickejšie',

    'footer_credits' => 'Tento projekt je realizovaný na Fakulte informatiky a informačných technológií v&nbsp;rámci predmetu Tímový projekt. Tím je vedený doktorandom Ing. Jaroslavom Erdelyim. Projekt sa zúčastňuje aj fakultnej súťaže TP CUP, kde bojuje o prvenstvo s ďalšími skvelými projektami.',

    /* Advantages */
    'advantages' => [
        [
            'name' => 'Šetrenie papiera',
            'description' => 'V prípade našeho digitálneho riešenia vôbec netlačíme volebné hárky na papier. Na jedno odvolenie voličom spotrebujeme iba jeden kus malého papiera, ktorý sa uchováva ako potvrdenie. Tieto potvrdenia sú vytlačené iba pre zúčastnených voličov, čím sa tiež ušetrí veľké množstvo papiera. Výrazne znížime spotrebu papiera pri voľbách, čím chránime naše životné prostredie ako aj naše peňaženky.'
        ],
        [
            'name' => 'Rýchlejšie výsledky',
            'description' => 'Výsledky hlasovania sa spracovávajú automaticky počas volieb, čím vieme priebežne poskytovať prehľad o aktuálnej volebnej účasti. Po ukončení hlasovania vieme výsledky volieb poskytnúť prakticky okamžite. Ak to typ a legislatíva konkrétnych volieb dovoľuje, vysledky môžu byť dostupné v reálnom čase aj počas priebehu volieb.'
        ],
        [
            'name' => 'Znížená chybovosť',
            'description' => 'V našom riešení eliminujeme chybovosť pri sčítaní hlasov, keďže hlasy sú sčítané elektronicky. Členovia volebnej komisie majú tak na starosti len overovanie totožnosti voličov a vydávanie autorizačných NFC tagov pre hlasovanie.'
        ],
        [
            'name' => 'Možnosť kontroly',
            'description' => 'V prípade problémov je stále možné vytlačené potvrdenia o voľbe manuálne spočítať a uistiť sa o výsledkoch volieb v prípade ústavnej sťažnosti. Tiež je možné automatizované offline spočítanie hlasov pomocou skenovania QR kódov z potvrdení o voľbe.'
        ]
    ],

    /* Voting process */
    'voting_items' => [
        [
            'name' => 'Overenie totožnosti',
            'description' => 'Volebná komisia overí totožnosť voliča štandardným spôsobom, teda pomocou občianskeho preukazu a zoznamu oprávnených voličov vo vytlačenom zozname. Elektronizácia tohto kroku je zámerne vynechaná, aby nebolo v žiadom prípade možné na základe časových pečiatok identifikovať ku ktorému voličovi patrí odoslaný hlas.'
        ],
        [
            'name' => 'Výber NFC tagu',
            'description' => '<a href="https://en.wikipedia.org/wiki/Near-field_communication">NFC</a> tag je naprogramovateľný čip, ktorý v sebe nesie jedinečný autorizačný token pre voľby. Volič si náhodne vyberie jeden z ponúkaných NFC tagov z nádoby. Informácie uložené na tagu nie sú žiadnym spôsobom spájané s identitou voliča. Náhodným výberom sa snažíme získať dôveru voliča v anonymitu volieb.'
        ],
        [
            'name' => 'Hlasovanie',
            'description' => 'Volič pristúpi k volebnému terminálu, ku čítačke priloží NFC tag, čím sa vykoná autorizácia a je mu umožnené odvoliť. Volič postupuje podľa pokynov na obrazovke. Aplikácia je navrhnutá s ohľadom na jej použiteľnosť, obrazovka je dostatočne veľká a písmo je jasne čitateľné. Svoju voľbu potvrdí a volebný terminál vytlačí potvrdenie o hlasovaní.'
        ],
        [
            'name' => 'Vhodenie potvrdenia do urny',
            'description' => 'Vytlačené potvrdenie o voľbe volič vhodí do urny. Je umožnená kontrola hlasov aj mimo volebného systému v prípade problémov alebo sťažností. Potvrdenie o voľbe je vytlačené na jednom malom papieri (menšom ako pokladničný doklad) pre každého zúčastneného voliča, čím sa výrazne znižuje odpad.'
        ],
        [
            'name' => 'Výsledky',
            'description' => 'Po vhodení potvrdenia do urny môže volič opustiť volebnú miestnosť. Výsledky môžu byť po uzavretí miestností dostupné vďaku nášmu riešeniu oveľa skôr ako býva zvykom pri manuálnom prepočítavaní.'
        ]
    ],

    /* Team */
    'team_members' => [
        [
            'name' => 'Jaroslav Erdelyi',
            'img_path' => 'assets/img/team_members/jaro_erdelyi.png',
            'description' => 'Odborník na bezpečnosť IoT systémov a úžasný školiteľ. Vo voľnom čase rád skladá rubikovu kocku.'
        ],
        [
            'name' => 'Lucia Janíková',
            'img_path' => 'assets/img/team_members/lucia_janikova.jpg',
            'description' => 'Pracovitá a motivovaná študentka so záľubou pre cestovanie. Má rada aby bolo všetko precízne a bezchybné.'
        ],
        [
            'name' => 'Denis Klenovič',
            'img_path' => 'assets/img/team_members/denis_klenovic.jpg',
            'description' => 'Nadšenec pre webové technológie a design. Vo voľnom čase rád pečie a sleduje filmové novinky.'
        ],
        [
            'name' => 'Matúš Staš',
            'img_path' => 'assets/img/team_members/matus_stas.jpeg',
            'description' => 'Cieľavedomý študent s veľkými plánmi do budúcna. Má rád cyklistiku a prírodu. #FocusMaster'
        ],
        [
            'name' => 'Marek Ceľuch',
            'img_path' => 'assets/img/team_members/marek_celuch.jpg',
            'description' => 'Rád kritizuje, sranduje a nevie si vybrať jednu oblasť. Nemá rád Windowsy, vo voľnom čase sa venuje hudbe a nepohrdne seriálom či víkendom Formuly 1.'
        ],
        [
            'name' => 'Timotej Králik',
            'img_path' => 'assets/img/team_members/timotej_kralik.jpg',
            'description' => 'Jeho revírom sú dáta a optimalizované systémy. Mimo IDEčka sa rád vyšantí na športovisku alebo na horách.'
        ],
        [
            'name' => 'Libor Duda',
            'img_path' => 'assets/img/team_members/libor_duda.jpg',
            'description' => 'Vyzná sa vo webových technológiách. Vo voľnom čase zanietený kutil a fanúšik spravodajstva. #Skeptik'
        ],
        [
            'name' => 'Adam Slatinský',
            'img_path' => 'assets/img/team_members/adam_slatinsky.jpg',
            'description' => 'Odborník na bezpečnosť, ktorý pri PC neplytvá časom, ale všetko si automatizuje. Assembleru sa nebojí, stránky nakódi, appky nahackuje a v škole exceluje.'
        ]
    ],

    /* Documents */
    'document_groups' => [
        [
            'name' => 'Zápisnice',
            'iconpath' => 'assets/img/document_icons/meetings.svg',
            'description' => 'Zápisnica obsahuje transkript konverzácii s vedúcim projektu z našich pravidelných ceremónii, ktoré sa uskutočňujú každý utorok. V zápisnici sú poznačené rozhodnutia, ktoré sme na ceremónii vykonali a sú zadefinované ciele na ďalší týždeň.',
            'documents' => [
                [
                    'name' => 'Zápisnica č.1',
                    'date' => '28.09.2021',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie1.pdf'
                ],
                [
                    'name' => 'Zápisnica č.2',
                    'date' => '05.10.2021',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie2.pdf'
                ],
                [
                    'name' => 'Zápisnica č.3',
                    'date' => '12.10.2021',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie3.pdf'
                ],
                [
                    'name' => 'Zápisnica č.4',
                    'date' => '19.10.2021',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie4.pdf'
                ],
                [
                    'name' => 'Zápisnica č.5',
                    'date' => '26.10.2021',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie5.pdf'
                ],
                [
                    'name' => 'Zápisnica č.6',
                    'date' => '02.11.2021',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie6.pdf'
                ],
                [
                    'name' => 'Zápisnica č.7',
                    'date' => '09.11.2021',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie7.pdf'
                ],
                [
                    'name' => 'Zápisnica č.8',
                    'date' => '16.11.2021',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie8.pdf'
                ],
                [
                    'name' => 'Zápisnica č.9',
                    'date' => '23.11.2021',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie9.pdf'
                ],
                [
                    'name' => 'Zápisnica č.10',
                    'date' => '30.11.2021',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie10.pdf'
                ],
                [
                    'name' => 'Zápisnica č.11',
                    'date' => '07.12.2021',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie11.pdf'
                ],
                [
                    'name' => 'Zápisnica č.12',
                    'date' => '15.12.2021',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie12.pdf'
                ],
                [
                    'name' => 'Zápisnica č.13',
                    'date' => '20.02.2022',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie13.pdf'
                ],
                [
                    'name' => 'Zápisnica č.14',
                    'date' => '20.02.2022',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie14.pdf'
                ],
                [
                    'name' => 'Zápisnica č.15',
                    'date' => '27.02.2022',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie15.pdf'
                ],
                [
                    'name' => 'Zápisnica č.16',
                    'date' => '10.03.2022',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie16.pdf'
                ],
                [
                    'name' => 'Zápisnica č.17',
                    'date' => '10.03.2022',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie17.pdf'
                ],
                [
                    'name' => 'Zápisnica č.18',
                    'date' => '20.03.2022',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie18.pdf'
                ],
                [
                    'name' => 'Zápisnica č.19',
                    'date' => '29.03.2022',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie19.pdf'
                ],
                [
                    'name' => 'Zápisnica č.20',
                    'date' => '03.04.2022',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie20.pdf'
                ],
                [
                    'name' => 'Zápisnica č.21',
                    'date' => '11.04.2022',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie21.pdf'
                ],
                [
                    'name' => 'Zápisnica č.22',
                    'date' => '19.04.2022',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie22.pdf'
                ],
                [
                    'name' => 'Zápisnica č.23',
                    'date' => '19.04.2022',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie23.pdf'
                ],
                [
                    'name' => 'Zápisnica č.24',
                    'date' => '08.05.2022',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie24.pdf'
                ],
                [
                    'name' => 'Zápisnica č.25',
                    'date' => '18.05.2022',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie25.pdf'
                ],
                [
                    'name' => 'Zápisnica č.26',
                    'date' => '18.05.2022',
                    'filepath' => 'assets/documents/meeting_reports/stretnutie26.pdf'
                ],
            ]
        ],
        [
            'name' => 'Zhodnotenie šprintov',
            'iconpath' => 'assets/img/document_icons/sprint_reports.svg',
            'description' => 'Po dvoch týždňoch sa v rámci retrospektívy spoločne zhodnotí práca na projekte. Vyhodnotí sa množstvo úspešne dokončených úloh, zistia sa problémy s úlohami, ktoré sa nepodarilo zrealizovať a následne sa tieto poznatky zoberú do úvahy pri pridávaní úlohy do nového šprintu.',
            'documents' => [
                [
                    'name' => 'Zhodnotenie šprintu 1',
                    'date' => '17.11.2021',
                    'filepath' => 'assets/documents/sprint_reports/zhodnotenie_sprintu1.pdf'
                ],
                [
                    'name' => 'Zhodnotenie šprintu 2',
                    'date' => '17.11.2021',
                    'filepath' => 'assets/documents/sprint_reports/zhodnotenie_sprintu2.pdf'
                ],
                [
                    'name' => 'Zhodnotenie šprintu 3',
                    'date' => '17.11.2021',
                    'filepath' => 'assets/documents/sprint_reports/zhodnotenie_sprintu3.pdf'
                ],
                [
                    'name' => 'Zhodnotenie šprintu 4',
                    'date' => '15.12.2021',
                    'filepath' => 'assets/documents/sprint_reports/zhodnotenie_sprintu4.pdf'
                ],
                [
                    'name' => 'Zhodnotenie šprintu 5',
                    'date' => '15.12.2021',
                    'filepath' => 'assets/documents/sprint_reports/zhodnotenie_sprintu5.pdf'
                ],
                [
                    'name' => 'Zhodnotenie šprintu 6',
                    'date' => '08.05.2022',
                    'filepath' => 'assets/documents/sprint_reports/zhodnotenie_sprintu6.pdf'
                ],
                [
                    'name' => 'Zhodnotenie šprintu 7',
                    'date' => '08.05.2022',
                    'filepath' => 'assets/documents/sprint_reports/zhodnotenie_sprintu7.pdf'
                ],
                [
                    'name' => 'Zhodnotenie šprintu 8',
                    'date' => '08.05.2022',
                    'filepath' => 'assets/documents/sprint_reports/zhodnotenie_sprintu8.pdf'
                ],
                [
                    'name' => 'Zhodnotenie šprintu 9',
                    'date' => '08.05.2022',
                    'filepath' => 'assets/documents/sprint_reports/zhodnotenie_sprintu9.pdf'
                ],
                [
                    'name' => 'Zhodnotenie šprintu 10',
                    'date' => '08.05.2022',
                    'filepath' => 'assets/documents/sprint_reports/zhodnotenie_sprintu10.pdf'
                ],
                [
                    'name' => 'Zhodnotenie šprintu 11',
                    'date' => '08.05.2022',
                    'filepath' => 'assets/documents/sprint_reports/zhodnotenie_sprintu11.pdf'
                ],
                [
                    'name' => 'Zhodnotenie šprintu 12',
                    'date' => '18.05.2022',
                    'filepath' => 'assets/documents/sprint_reports/zhodnotenie_sprintu12.pdf'
                ],
                [
                    'name' => 'Zhodnotenie šprintu 13',
                    'date' => '18.05.2022',
                    'filepath' => 'assets/documents/sprint_reports/zhodnotenie_sprintu13.pdf'
                ],
            ]
        ],
        [
            'name' => 'Metodiky',
            'iconpath' => 'assets/img/document_icons/methodologies.svg',
            'description' => 'Náš tím pracuje s viacerými metodikami, v&nbsp;ktorých sú rámcovo podrobne zadefinované požiadavky na štruktúru a kvalitu práce ktorú na projekte vykonávame. Cieľom je počas celej dĺžky trvania projektu dodržiavať tieto metodiky.',
            'documents' => [
                [
                    'name' => 'Metodika - Logovanie času',
                    'date' => '31.10.2021',
                    'filepath' => 'assets/documents/methodologies/motodika_logovanie_casu.pdf'
                ],
                [
                    'name' => 'Metodika - Definition of done',
                    'date' => '31.10.2021',
                    'filepath' => 'assets/documents/methodologies/motodika_definition_of_done.pdf'
                ],
                [
                    'name' => 'Metodika - Testovanie',
                    'date' => '02.11.2021',
                    'filepath' => 'assets/documents/methodologies/metodika_testovanie.pdf'
                ],
                [
                    'name' => 'Metodika - Code style JavaScript',
                    'date' => '02.11.2021',
                    'filepath' => 'assets/documents/methodologies/metodika_code_style_javascript.pdf'
                ],
                [
                    'name' => 'Metodika - Code style Python',
                    'date' => '12.11.2021',
                    'filepath' => 'assets/documents/methodologies/metodika_code_style_python.pdf'
                ],
                [
                    'name' => 'Metodika - Manažment kódu',
                    'date' => '17.11.2021',
                    'filepath' => 'assets/documents/methodologies/metodika_manazmentu_kodu.pdf'
                ],
            ]
        ],
        [
            'name' => 'Ostatné',
            'iconpath' => 'assets/img/document_icons/other_documents.svg',
            'description' => 'Ostatné dokumenty obsahujú rôzne náležitosti spojené s priebehom predmetu tímový projekt a súťažou TP CUP.',
            'documents' => [
                [
                    'name' => 'Prihláška na TP CUP',
                    'date' => '19.10.2021',
                    'filepath' => 'assets/documents/others/tp_cup_prihlaska.pdf'
                ],
                [
                    'name' => 'Míľnik 1 (ZS)',
                    'date' => '20.12.2021',
                    'filepath' => 'assets/documents/others/tim17_milnik1.pdf'
                ],
                [
                    'name' => 'Míľnik 2 (ZS)',
                    'date' => '20.12.2021',
                    'filepath' => 'assets/documents/others/tim17_milnik2.pdf'
                ],
                [
                    'name' => 'Technická dokumentácia',
                    'date' => '18.05.2022',
                    'filepath' => 'assets/documents/others/technical_documentation.pdf'
                ],
                [
                    'name' => 'Používateľská príručka',
                    'date' => '18.05.2022',
                    'filepath' => 'assets/documents/others/user_guide.pdf'
                ],
                [
                    'name' => 'Inštalačná príručka',
                    'date' => '18.05.2022',
                    'filepath' => 'assets/documents/others/installation_guide.pdf'
                ],
                [
                    'name' => 'Míľnik LS',
                    'date' => '18.05.2022',
                    'filepath' => 'assets/documents/others/tim_17_milnik_final.pdf'
                ],
            ]
        ]
    ],

    /* Progress */
    'current_week_number' => $current_week_number,
    'total_weeks_number' => $total_weeks_number,

    'progress_bar_label' => round($current_day_number * 100 / $total_days_number, 1) . "%", /* 100 / 24 * n (číslo týždna)*/
    'progress_bar_width' => round($current_day_number * 100 / $total_days_number, 0),

    /* Sprint results */
    'sprint_results' => [
        [
            'date' => '05.10.2021',
            'title' => 'Analýza hardvéru a technológii + Webová stránka',
            'description' => 'Vytvorili sme tímovú webovú stránku s použitím PHP a Bootstrap v5. Analyzovali sme možné zariadenia pre tlač potvrdení, čítačku NFC tagov a dotykový displej. Navrhli sme high-level architektúru aplikácie. Prihlásili sme sa do TP CUPu.',
            'tags' => [
                'Hardware', 'Architektúra', 'Tímový web'
            ]
        ],
        [
            'date' => '19.10.2021',
            'title' => 'Dizajn volebnej aplikácie + Projektové metodiky',
            'description' => 'Vytvorili sme dizajn a prototyp volebnej aplikácie v nástroji Figma. Tento prototyp bude slúžiť na používateľské testovanie s cieľom odhalenia nedostatkov. Doplnili sme metodiky pre manažovanie kódu, testovanie, logovanie času a code style.',
            'tags' => [
                'UI/UX prototype', 'Figma', 'Axure'
            ]
        ],
        [
            'date' => '02.11.2021',
            'title' => 'Používateľské testovanie a analýza komponentov',
            'description' => 'Vykonali sme 7 používateľských testovaní, pomocou ktorých sme odhalili niekoľko problémov týkajúcich sa hlavne používateľov staršej vekovej kategórie. Zistenia sme zapracovali do dizajnu a prototypu. Ďalej sme vykonali podrobnejšie analýzy komponentov gateway a server, ich vzájomnej komunikácie a definovali sme prvotné dátové modely.',
            'tags' => [
                'UX testing', 'UI design'
            ]
        ],
        [
            'date' => '16.11.2021',
            'title' => 'Začiatok implementácie',
            'description' => 'V tejto fáze sme začali s implementovaním jednotlivých komponentov. Prácu sme si rozdelili a súbežne sme pracovali na prvých prototypoch gatewaya a servera (FastAPI), databázy (MongoDB), a používateľskej aplikácie (Svelte). Navrhli sme ich integráciu pomocou dokerizácie jednotlivých komponentov.',
            'tags' => [
                'Microservices', 'Gateway', 'Voting frontend'
            ]
        ],
        [
            'date' => '30.11.2021',
            'title' => 'Vytvorenie testov',
            'description' => 'Ďalej sme rozširovali funkcionalitu jednotlivých mikroslužieb a vytvorili sme unit testy pre overenie nášho riešenia. Členovia tímu mali rozdelené jednotlivé služby a doimplementáciu testovacích prípadov s použitím knižnice pytest.',
            'tags' => [
                'Microservices', 'Unit tests', 'Pytest'
            ]
        ],
        [
            'date' => '16.12.2021',
            'title' => 'Vianočný šprint',
            'description' => 'Tento šprint sme sa rozhodli natiahnuť na 6 týždňov a každý sme pracovali individuálne podľa chuti. Implementovali sme spracovanie hlasov na serveri, vytvorili sme knižnicu na šifrovanie a implementovali automatizačnú pipeline na deployment.',
            'tags' => [
                'Šifrovanie', 'Server API', 'CI/CD pipelines'
            ]
        ],
        [
            'date' => '15.02.2022',
            'title' => 'Hardwarový manifest',
            'description' => 'V tomto šprinte sme obdržali čítačku NFC tagov, tlačiareň a dotykové zariadenia. Implementovali a modifikovali sme kód na obsluhu daných zariadení a prisposobovali ich nášmu prípadu použitia. Vytvoril sa formát potvrdenia o voľbe na tlačenie.',
            'tags' => [
                'NFC čítačka', 'Termotlačiareň', 'Dotykový monitor'
            ]
        ],
        [
            'date' => '01.03.2022',
            'title' => 'Integračné testovanie a počítanie výsledkov',
            'description' => 'Implementovali sme synchronizáciu hlasov do ElasticSearch a vytvorili endpointy na získavanie agregovaných výsledkov. Pripravili sme integračné testy medzi službami volebného terminálu a gatewaya (Selenium a Pytest).',
            'tags' => [
                'Elastic', 'Integračné testy', 'Selenium'
            ]
        ],
        [
            'date' => '15.03.2022',
            'title' => 'Aplikácia na štatistiky',
            'description' => 'Implentovali sme automatické generovanie a odosielanie zápisnice. Dokončili sme frontend aplikácie na zobrazovanie výsledkov. Prácovalo sa na tlači potvrdenia o voľbe.',
            'tags' => [
                'Svelte', 'Aplikácia na štatistiky', 'Volebný terminál'
            ]
        ],
        [
            'date' => '29.03.2022',
            'title' => 'Publikácia na konferenciu',
            'description' => 'Napísali sme publikáciu na školskú konferenciu IIT SRC, do ktorej sme zapracovali prehľadné diagramy architektúry a fungovania nášho riešenia. Poskladali a prepojili sme zariadenia volebného terminálu.',
            'tags' => [
                'IIT SRC', 'Voting terminal setup'
            ]
        ],
        [
            'date' => '12.04.2022',
            'title' => 'Príprava na konferenciu',
            'description' => 'Pripravovali sme naše riešenie na konferenciu IIT SRC. Zariadenia volebného terminálu sme niekoľkokrát vyskúšali a pripravili interaktívnu ukážku. Taktiež sme sa zamýšlali nad scenárom tímového videa.',
            'tags' => [
                'IIT SRC', 'Voting terminal setup', 'Video'
            ]
        ],
        [
            'date' => '26.04.2022',
            'title' => 'Cieľová rovinka',
            'description' => 'Spisovali sme používateľské príručky a technické dokumentácie jednotlivých služieb. Vyčistile sme kódy a zjednotili repozitáre. Odprezentovali našu prácu na konferencii IIT SRC a natočili tímové video. Naše cesta týmto šprintom končí a čaká nás už len prezentácia na finále TC Cupu.',
            'tags' => [
                'IIT SRC', 'Video', 'Dokumentácie'
            ]
        ]
    ]
];
