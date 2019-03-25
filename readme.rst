###################
Obsah stránky
###################

Obsahom mojej stránky je prenájom prevádzok. Vytvoril som aplikáciu, ktorá  pre každého nájomníka eviduje prevádzku a platbu
za nájomné + energie. Taktiež je možné pridávať nové prevádzky.

*******************
Informácie ohľadom webovej aplikácie
*******************
Na hlavnej stránke majú používatelia možnosť zobrazenia všetkych tabuliek, ktoré sa nachádzajú v databáze.
Tabuľky obsahujúce cudzie kľúče som prepojil a napríklad pri tabuľke "Budovy" sa namiesto ID budovy zobrazuje presný názov
danej budovy, aby dané údaje boli používateľovi čo najzrozumitelnejšie prístupne.

-`Zoznam používateľov - eviduje všetkých používateľov v databáze.`

-`Prenájom - eviduje všetký dostupné prevádzky aj s rozlohou.`

-`Poschodia - evidujú na ktorých poschodiach sa nachádzajú jednotlivé prevádzky + aké sú cený za jednotlivé poschodia.`

-`Platby - evidujú ku každému nájomníkovi prenájom, jednotlivé platby za nájomné + energie a taktiež evidujú dátumy.`

-`Budovy - evidujú zoznam budov, kde sa jednotlivé prevádzky nachádzajú.`

Okrem prezerania záznamov v tabuľkách sá dá zobraziť aj detail jednotlivých záznamov, údaje sa dajú exportovať do excelu,
alebo ich môžete tlačiť. Na hlavnej stránke sú tiež umiestnené 4 rôzne typy grafov, ktoré čerpajú údaje z databázy. V grafoch
je využitý aj príkaz JOIN, čiže je možnosť vidieť štatistiku aj z viacerích tabuliek.
V menu sa tiež nachádzajú stránky  "O nás", kde si môžete  prečítať v krátkosti o spoločnosti, alebo "Kontakt", ktorá obsahuje
kontaktný formulár.

Na úvodej stránke sa nachádza aj odkaz na prihlasovacie okno.
Prihlásiť sa môže len administrátor, bežný používateľ nemá prístup. Teda stránka je rozdelená na verejnú a autorizovanú čast.
Administrátor môže editovať (pridávať/upravovať/mazať) jednotlivé tabuľky cez administračnú sekciu, alebo registrovať
nových administrátorov. Pri pridávaní nových záznamov v tabuľkách kde sú cudzie kľúče som pridal ComboBox, kde si administrátor
môže vybrať zo zoznamu cuzdí kľúč, namiesto toho aby ho pridával ručne. Napríklad pri vkladaní údajov do tabuľky poschodia sa namiesto
ID budovov zobrazuje zoznam s názvami daných budov.

Prihlasovanie je možné pomocou emailu a hesla. Prihlasovacie údaje administrátora sú: Login :  brano87@gmail.com  Heslo: 123                   
Prihlasovanie využíva session.


