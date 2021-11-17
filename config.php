<?php
return [
    /* General */
    'site_title' => 'Electie | TP@FIIT STU',
    'site_name' => 'Electie - The Future of Voting',
    'email' => 'tim172021@googlegroups.com',
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
            'description' => 'Výsledky hlasovania sa budú spracovávať automaticky počas volieb, čím vieme priebežne poskytovať prehľad o aktuálnej volebnej účasti. Po ukončení hlasovania vieme výsledky volieb poskytnúť prakticky okamžite. Ak to typ a legislatíva konkrétnych volieb dovoľuje, vysledky môžu byť dostupné v reálnom čase aj počas priebehu volieb.'
        ],
        [
            'name' => 'Znovupoužiteľosť',
            'description' => 'Naše riešenie bude fungovať pre všetky typy volieb na Slovensku, rovnako počítame s podporou referenda alebo lokálnych hlasovaní napríklad pri akademických senátoch.'
        ],
        [
            'name' => 'Znížená chybovosť',
            'description' => 'V našom riešení obmedzíme chybovosť pri počítaní hlasov, keďže hlasy budú sčítané elektronicky. Členovia volebnej komisie budú mať tak na starosti len overovanie totožnosti voličov a vydávanie NFC tagov pre hlasovanie.'
        ],
        [
            'name' => 'Možnosť kontroly',
            'description' => 'V prípade problémov je stále možné vytlačené volebné lístky ručne spočítať a uistiť sa o výsledkoch volieb v prípade ústavnej sťažnosti.'
        ]
    ],

    /* Voting process */
    'voting_items' => [
        [
            'name' => 'Overenie totožnosti',
            'description' => 'Volebná komisia overí totožnosť voliča pomocou občianskeho preukazu a zoznamu voličov v tablete. Oproti klasickému vyhľadávaniu, bude elektronické vyhľadanie rýchlejšie a precíznejšie.'
        ],
        [
            'name' => 'Výber NFC tagu',
            'description' => 'Volič si náhodne vyberie jeden z ponúkaných NFC tagov z misy. Informácie uložené na Tagu nie sú žiadnym spôsobom spájané s identitou voliča. Náhodným výberom sa snažíme získať dôveru voliča v anonymitu volieb.'
        ],
        [
            'name' => 'Hlasovanie',
            'description' => 'Volič pristúpi k volebnému terminálu, do ktorého vloží NFC Tag, čím mu je umožnené odvoliť. Volič postupuje podľa pokynov na obrazovke. Aplikácia je navrhnutá s ohľadom na jej použiteľnosť, obrazovka je dostatočne veľká a písmo je jasne čitateľné. Svoju voľbu potvrdí a volebný terminál vytlačí potvrdenie o hlasovaní.'
        ],
        [
            'name' => 'Vhodenie potvrdenia do urny',
            'description' => 'Vytlačený volebný lístok volič hodí do urny. Umožňuje tým kontrolu hlasov v prípade problémov alebo sťažností. Používame len jeden menší papier pre každého zúčastneného voliča, čím sa výrazne znižuje odpad.'
        ],
        [
            'name' => 'Úspešne odvolené',
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
            ]
        ]
    ],

    /* Progress */
    'progress_bar_label' => '8,3%', /* 100 / 24 * n (číslo týždna)*/
    'progress_bar_width' => 8,

    /* Sprint results */
    'sprint_results' => [
        [
            'date' => '05.10.2021',
            'title' => 'Analýza hardvéru a technológii + Webová stránka',
            'description' => 'Vytvorili sme tímovú webovú stránku s použitém technológii HTML, PHP, Bootstrap v5. Analyzovali sme možné zariadenia pre tlač potvrdení, čítačku NFC tagov a dotykový display. Prihlásili sme sa do TP CUpu.'
        ],
//        [
//            'date' => '19.10.2021',
//            'title' => 'Výsledok analýzy',
//            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been therieially unchanged. It was popularised in the 1960s.'
//        ],
//        [
//            'date' => '02.11.2021',
//            'title' => 'Výsledok analýzy',
//            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been therieially unchanged. It was popularised in the 1960s.'
//        ]
    ]
];
