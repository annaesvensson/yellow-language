<?php
// Czech extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/czech

class YellowCzech {
    const VERSION = "0.9.2";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefaults(array(
            "Language: cs",
            "LanguageLocale: cs_CZ",
            "LanguageDescription: Čeština",
            "LanguageTranslator: Ufo Vyhuleny, albi",
            "AnchorDescription: Show anchor links next to headings.",
            "BacktotopDescription: Back-to-top link.",
            "BacktotopLabel: Zpět nahoru",
            "BerlinDescription: Berlín je téma inspirované Dieterem Ramsem.",
            "BlogDescription: Blog pro tvoje stránky.",
            "BlogBy: Vytvořil",
            "BlogTag: Tags:",
            "BlogMore: Čti dále…",
            "BreadcrumbDescription: Drobečková navigace.",
            "BreadcrumbNavigation: Drobečkování",
            "BundleDescription: Bundle website files.",
            "CatalanDescription: Katalánština.",
            "CheckDescription: Najděte nefunkční odkazy.",
            "ChineseDescription: Čínština.",
            "ContactDescription: Stránka s emailovým kontaktem.",
            "ContactName: Jméno:",
            "ContactEmail: Email:",
            "ContactMessage: Zpráva:",
            "ContactConsent: Souhlasím s tím, aby tato webová stránka uchovala mou zprávu.",
            "ContactButton: Odeslat mou zprávu",
            "ContactMailSpam: [Spam]",
            "ContactMailHeader: Obdržel jsi zprávu od @sender:",
            "ContactMailFooter: Tento email byl odeslán přes @sitename - @title",
            "ContactStatusNone: Zde můžeš napsat svoje postřehy.",
            "ContactStatusIncomplete: Prosím, vyplň všechna pole.",
            "ContactStatusInvalid: Zadej platný email.",
            "ContactStatusReview: Odstraň prosím ze zprávy odkazy.",
            "ContactStatusDone: Email úspěšně odeslán. Děkuji!",
            "ContactStatusError: Email nemůže být odeslán, zkus to prosím později!",
            "CopenhagenDescription: Copenhagen je krásné téma.",
            "CoreDescription: Základní funkce vašeho webu.",
            "CoreNavigation: Hlavní",
            "CorePagination: Stránka",
            "CorePaginationPrevious: ← Předchozí",
            "CorePaginationNext: Následující →",
            "CoreTimeFormatShort: H:i",
            "CoreTimeFormatMedium: H:i:s",
            "CoreTimeFormatLong: H:i:s T",
            "CoreDateFormatShort: F Y",
            "CoreDateFormatMedium: Y-m-d",
            "CoreDateFormatLong: Y-m-d H:i",
            "CoreDatePast: dnes, včera, před @x dny, před měsícem, před @x měsíci, před rokem, před @x lety, @x",
            "CoreDateFuture: brzy, zítra, za @x dní, za měsíc, za @x měsíců, za rok, za @x let,n @x",
            "CoreDateMonthsNominative: leden, únor, březen, duben, květen, červen, červenec, srpen, září, říjen, listopad, prosinec",
            "CoreDateMonthsGenitive: ledna, února, března, dubna, května, června, července, srpna, září, října, listopadu, prosince",
            "CoreDateWeekdays: pondělí, úterý, středa, čtvrtek, pátek, sobota, neděle",
            "CoreDateWeekstart: pondělí",
            "CoreDecimalSeparator: ,",
            "CoreError404Title: Soubor nenalezen",
            "CoreError404Text: Požadovaný soubor nebyl nalezen. Ach ne...",
            "CoreError420Title: Stránka není veřejná",
            "CoreError420Text: Požadovaná stránka není veřejná. [yellow error]",
            "CoreError430Title: Přihlášení se nezdařilo",
            "CoreError430Text: Heslo nebo email jsou špatné. [Zkus to znovu](#data-action-login).",
            "CoreError434Title: Stránka nenalezena",
            "CoreError434Text: Požadovaná stránka nebyla nalezena. [Zkus ji ytvořit](#data-action-edit).",
            "CoreError435Title: Stránka nenalezena",
            "CoreError435Text: Požadovaná stránka byla smazána. [Můžeš ji obnovit](#data-action-restore).",
            "CoreError450Title: Chyba aktualizace",
            "CoreError450Text: Nelze se připojit k aktualizačnímu serveru. Je vyžadováno internetové spojení.",
            "CoreError500Title: Chyba serveru",
            "CoreError500Text: Něco se pokazilo. [yellow error]",
            "CzechDescription: Čeština.",
            "DanishDescription: Dánština.",
            "DisqusDescription: Ukázat na blogu Disqus komentáře.",
            "DraftDescription: Podpora pro rozpracované stránky (draft).",
            "DraftPageError: Přihlaš se prosím.",
            "DutchDescription: Nizozemština.",
            "EditDescription: Uprav svoje stránky ve webovém prohlížeči.",
            "EditLoginTitle: Vítej",
            "EditLoginEmail: Email:",
            "EditLoginPassword: Heslo:",
            "EditLoginForgot: Zapomenuté heslo?",
            "EditLoginSignup: Chceš vytvořit účet?",
            "EditLoginButton: Přihlásit se",
            "EditSignupTitle: Vytvořit účet",
            "EditSignupName: Jméno:",
            "EditSignupEmail: Email:",
            "EditSignupPassword: Heslo:",
            "EditSignupConsent: Souhlasím s tím, aby tyto webové stránky uchovávaly mé osobní údaje.",
            "EditSignupButton: Vytvořit",
            "EditSignupStatusNone: Zde si můžeš založit nový uživatelský účet.",
            "EditSignupStatusIncomplete: Vyplň prosím všechny položky.",
            "EditSignupStatusInvalid: Zadej email ve správném formátu.",
            "EditSignupStatusWeak: Zadej jiné heslo.",
            "EditSignupStatusShort: Zadej delší heslo.",
            "EditSignupStatusNext: Účet byl vytvořen, podívej se do emailové schránky.",
            "EditForgotTitle: Zapomenuté heslo",
            "EditForgotEmail: Email:",
            "EditForgotStatusNone: Vytvořit nové heslo.",
            "EditForgotStatusInvalid: Vlož email ve správném formátu.",
            "EditForgotStatusNext: Uživatelský účet byl obnoven, podívej se do emailové schránky.",
            "EditRecoverTitle: Zapomenuté heslo",
            "EditRecoverPassword: Heslo:",
            "EditRecoverStatusPassword: Zadej nové heslo.",
            "EditRecoverStatusWeak: Zadej jiné heslo.",
            "EditRecoverStatusShort: Zadej delší heslo.",
            "EditRecoverStatusDone: Heslo obnoveno. Díky!",
            "EditConfirmSubject: Potvrzení uživatelského účtu",
            "EditConfirmMessage: Ahoj @usershort,\\n\\nnyní nastal čas potvrdit nový účet. Klikni na následující odkaz.",
            "EditConfirmTitle: Uživatelský účet",
            "EditConfirmStatusDone: Účet potvrzen a čeká na schválení. Díky!",
            "EditApproveSubject: Potvrzení nového uživatelského účtu",
            "EditApproveMessage: Ahoj @usershort,\\n\\nje potřeba schválit nový účet pro @useraccount. Klikni na následující odkaz.",
            "EditApproveTitle: Uživatelský účet",
            "EditApproveStatusDone: Uživatelský účet schválen. Díky!",
            "EditReactivateSubject: Znovu aktivovat uživatelský účet",
            "EditReactivateMessage: Ahoj @usershort,\\n\\naktivuj prosím znovu svůj uživatelský účet. Došlo k nadměrnému množství špatných pokusů o přihlášení. Klikni na následující odkaz.",
            "EditReactivateTitle: Uživatelský účet",
            "EditReactivateStatusDone: Uživatelský účet znovu aktivován. Díky!",
            "EditVerifySubject: Změna uživatelského účtu",
            "EditVerifyMessage: Ahoj @usershort,\\n\\nje potřeba potvrdit změnu e-mailové adresy. Klikni na následující odkaz.",
            "EditVerifyTitle: Uživatelský účet",
            "EditVerifyStatusDone: Elektronická adresa změněna. Díky!",
            "EditChangeSubject: Změna uživatelského účtu",
            "EditChangeMessage: Ahoj @usershort,\\n\\nje potřeba potvrdit změny uživatelského účtu. Klikni na následující odkaz.",
            "EditChangeTitle: Uživatelský účet",
            "EditChangeStatusDone: Uživatelský účet změněn. Díky!",
            "EditRemoveSubject: Smazat uživatelský účet",
            "EditRemoveMessage: Ahoj @usershort,\\n\\npotvrď prosím, že chceš svůj uživatelský účet smazat. Klikni na následující odkaz.",
            "EditRemoveTitle: Uživatelský účet",
            "EditRemoveStatusDone: Uživatelský účet smazán. Díky!",
            "EditRecoverSubject: Obnovení uživatelského hesla",
            "EditRecoverMessage: Ahoj @usershort,\\n\\nje potřeba schválit obnovení hesla. Klikni na následující odkaz.",
            "EditWelcomeSubject: Vítej uživateli",
            "EditWelcomeMessage: Ahoj @usershort,\\n\\ntvůj uživatelský účet byl vytvořen. Bav se dobře.",
            "EditGoodbyeSubject: Sbohem",
            "EditGoodbyeMessage: Ahoj @usershort,\\n\\ntvůj uživatelský účet byl smazán. Pápá.",
            "EditAccountTitle: Uživatel",
            "EditAccountInformation: Svůj účet můžeš kdykoli smazat.",
            "EditAccountMore: Čti dál…",
            "EditAccountStatusNone: Tady můžeš změnit svůj uživatelský účet.",
            "EditAccountStatusInvalid: Zadej email ve správném formátu.",
            "EditAccountStatusTaken: Zadej jiný email.",
            "EditAccountStatusWeak: Zadej jiné heslo.",
            "EditAccountStatusShort: Zadej delší heslo.",
            "EditAccountStatusNext: Nastavení uživatelského účtu změněno, podívej se do emailové schránky.",
            "EditQuitTitle: Smazat účet",
            "EditQuitStatusNone: Zadej prosím své jméno kvůli potvrzení.",
            "EditQuitStatusMismatch: Zadej prosím jiné jméno.",
            "EditQuitStatusNext: Uživatelský účet bude smazán, zkontroluj si prosím email.",
            "EditConfigureTitle: Web",
            "EditConfigureSitename: Jméno webu:",
            "EditConfigureAuthor: Jméno webmastera:",
            "EditConfigureEmail: Email webmastera:",
            "EditConfigureInformation: Webmaster může potvrzovat nové registrace.",
            "EditConfigureStatusNone: Tady můžeš nastavovat svoje webovky.",
            "EditConfigureStatusInvalid: Zadej prosím validní email.",
            "EditUpdateTitle: O těchto stránkách",
            "EditUpdateStatusNone: Datenstrom Yellow je pro lidi, kteří vytváří malé webové stránky.",
            "EditUpdateStatusCheck: Zjišťuji nové aktualizace…",
            "EditUpdateStatusUpdates: K dispozici jsou následující aktualizace:",
            "EditUpdateStatusOk: Tento web je aktuální.",
            "EditOkButton: Ok",
            "EditCancelButton: Zrušit",
            "EditChangeButton: Změnit",
            "EditCreateButton: Vytvořit",
            "EditEditButton: Uložit",
            "EditDeleteButton: Smazat",
            "EditUpdateButton: Aktualizovat",
            "EditEdit: Editovat stránku",
            "EditCreate: +",
            "EditDelete: -",
            "EditKeyboardLabels: Ctrl+, Alt+, Shift+, ⌘, ⌥, ⇧",
            "EditToolbarFormat: Formát",
            "EditToolbarHeading: Nadpis",
            "EditToolbarH1: Nadpis 1",
            "EditToolbarH2: Nadpis 2",
            "EditToolbarH3: Nadpis 3",
            "EditToolbarParagraph: Běžný text",
            "EditToolbarPre: Zdrojový kód",
            "EditToolbarNotice: Zvýraznění",
            "EditToolbarQuote: Citace",
            "EditToolbarBold: Tlustě",
            "EditToolbarItalic: Kurzíva",
            "EditToolbarStrikethrough: Přeškrtnutí",
            "EditToolbarCode: Kód",
            "EditToolbarList: Seznam",
            "EditToolbarUl: • Nečíslovaný seznam",
            "EditToolbarOl: 1. Číslovaný seznam",
            "EditToolbarTl: ✓ Seznam úkolů",
            "EditToolbarLink: Odkaz",
            "EditToolbarFile: Soubor",
            "EditToolbarEmoji: Emoji",
            "EditToolbarIcon: Ikona",
            "EditToolbarStatus: Status",
            "EditToolbarUndo: Zvrátit",
            "EditToolbarRedo: Znovu provést",
            "EditToolbarPreview: Náhled",
            "EditToolbarHelp: Nápověda",
            "EditMailFooter: @sitename",
            "EditDataGenerated: Tato stránka je generována automaticky.",
            "EditUploadProgress: Nahrávání souboru…",
            "EditUserDescription: Editor",
            "EditMenuSettings: Nastavení",
            "EditMenuHelp: Nápověda",
            "EditMenuLogout: Odhlásit",
            "EditYellowUrl: https://datenstrom.se/yellow/",
            "EditYellowHelpUrl: https://datenstrom.se/yellow/help/",
            "EditYellowNewsUrl: https://datenstrom.se/yellow/help/what-s-new",
            "EmojiDescription: Moc a moc emoji.",
            "EnglishDescription: Angličtina.",
            "FeedDescription: Feed s posledními změnami.",
            "FrenchDescription: Francouzština.",
            "GalleryDescription: Rozklikávací galerie obrázků.",
            "GenerateDescription: Vytvořte statický web.",
            "GermanDescription: Němčina.",
            "HelpDescription: Nápověda pro tvůj web.",
            "HighlightDescription: Zvýraznit zdrojové kódy.",
            "HungarianDescription: Maďarština.",
            "IconDescription: Ikony a symboly.",
            "ImageDescription: Přidejte obrázky a náhledy.",
            "ImageDefaultAlt: Obrázek bez popisku.",
            "InstagramDescription: Embed Instagram photos.",
            "InstallTitle: Ahoj",
            "InstallLanguage: Jaký je tvůj jazyk?",
            "InstallExtension: Co chceš udělat?",
            "InstallExtensionWebsite: Malý web",
            "InstallExtensionBlog: Malý blog",
            "InstallExtensionWiki: Malá wiki",
            "InstallButton: Instalovat",
            "InstallHomeTitle: Home",
            "InstallHomeText: [image photo.jpg Example rounded]\\n\\n[edit - You can edit this page] or use a text editor. [Get help](https://datenstrom.se/yellow/help/).",
            "InstallAboutTitle: O nás",
            "InstallAboutText: [Made with Datenstrom Yellow](https://datenstrom.se/yellow/).",
            "InstallDefaultTitle: Stránka",
            "InstallDefaultText: Toto je nová stránka.",
            "InstallBlogTitle: Stránka blogu",
            "InstallBlogText: Toto je nová stránka blogu.",
            "InstallWikiTitle: Wiki stránka",
            "InstallWikiText: Toto je nová wiki stránka.",
            "InstallExampleImage: Toto je vzorový obrázek",
            "ItalianDescription: Italština.",
            "JapaneseDescription: Japonština.",
            "KarlskronaDescription: Karlskrona is a semantic theme.",
            "MarkdownDescription: Formátování textu pro lidi.",
            "MetaDescription: Meta data pro lidi i stroje.",
            "NorwegianDescription: Norština.",
            "ParisDescription: Paris je elegantní téma.",
            "ParsedownDescription: Formátování textu pro lidi.",
            "PolishDescription: Polština.",
            "PortugueseDescription: Portugalština.",
            "PreviousnextDescription: Zobrazit odkazy na předchozí/následující stránku.",
            "PreviousnextNavigation: Stránka",
            "PreviousnextPagePrevious: ← Předchozí: @title",
            "PreviousnextPageNext: Následující: @title →",
            "PrivateDescription: Podpora pro stránky chráněné heslem.",
            "PrivatePageError: Zadej prosím heslo.",
            "ProfileDescription: Profil autora pro stránky blogu.",
            "PublishDescription: Vyrob a zveřejni rozšíření.",
            "ReadingtimeDescription: Show estimated reading time for page content.",
            "RussianDescription: Ruština.",
            "SearchDescription: Fultextové vyhledávání.",
            "SearchResultsNone: Zadej hledaný text.",
            "SearchResultsEmpty: Požadovaný text nenalezen.",
            "SearchSpecialChanges: Poslední změny",
            "SearchButton: Hledej",
            "ServeDescription: Zabudovaný web server.",
            "SitemapDescription: Mapa webu se všemi stránkami.",
            "SliderDescription: Galerie obrázků s posuvníkem.",
            "SlovakDescription: Slovenština.",
            "SpanishDescription: Španělština.",
            "StockholmDescription: Stockholm je čisté téma.",
            "SwedishDescription: Švédština.",
            "TocDescription: Obsah.",
            "TrafficDescription: Z logu vytvořit analýzu návštěvnosti.",
            "TurkishDescription: Turečtina.",
            "UpdateDescription: Udržuj svůj web aktuální.",
            "UpdateExtensionDefaultDescription: Popis není k dispozici.",
            "UpdateExtensionDeveloper: Vyvinul(a) @x.",
            "UpdateExtensionDesigner: Navrhnul(a) @x.",
            "UpdateExtensionTranslator: Přeložil(a) @x.",
            "WikiDescription: Wiki pro tvoje webovky.",
            "WikiModified: Poslední aktualizace",
            "WikiTag: Tagy:",
            "WikiSpecialPages: Všechny stránky",
            "WikiSpecialChanges: Poslední změny",
            "WittstockDescription: Wittstock je téma bez použití tříd."));
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "cs"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="cs") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
}
