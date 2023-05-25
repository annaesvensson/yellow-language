<?php
// Norwegian extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/norwegian

class YellowNorwegian {
    const VERSION = "0.8.43";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefaults(array(
            "Language: nb",
            "LanguageLocale: nb_NO",
            "LanguageDescription: Norsk Bokmål",
            "LanguageTranslator: Per Arne Solvik",
            "AudioDescription: HTML5 lydspiller.",
            "BerlinDescription: Berlin er et tema inspirert av Dieter Rams.",
            "BlogDescription: Blog for your website.",
            "BlogBy: av",
            "BlogTag: Tagger:",
            "BlogMore: Les mer…",
            "BreadcrumbDescription: Breadcrumb navigation.",
            "BreadcrumbNavigation: Brødsmule",
            "BundleDescription: Bundle website files.",
            "CatalanDescription: Catalan language.",
            "ChineseDescription: Chinese language.",
            "CodefileDescription: Download code blocks as text file.",
            "ContactDescription: Email contact page.",
            "ContactName: Navn:",
            "ContactEmail: Epost:",
            "ContactMessage: Melding:",
            "ContactConsent: Jeg samtykker til at denne nettsiden lagrer min innsendte informasjon.",
            "ContactButton: Sende melding",
            "ContactMailSpam: [Spam]",
            "ContactMailHeader: Du har mottatt en melding fra @sender:",
            "ContactMailFooter: Denne epost ble sendt av @sitename - @title",
            "ContactStatusNone: Si gjerne hei. Din tilbakemelding er velkommen.",
            "ContactStatusIncomplete: Vennligst fyll ut alla felt.",
            "ContactStatusInvalid: Vennligst angi en gyldig epost adresse.",
            "ContactStatusReview: Vennligst ta bort lenker fra meldingen.",
            "ContactStatusDone: Din epost er nå sendt. Takk!",
            "ContactStatusError: Epost kunne ikke sendes, vennligst prøv på nytt senere!",
            "CopenhagenDescription: Copenhagen is a beautiful theme.",
            "CoreDescription: Kjernefunksjonaliteten til nettstedet.",
            "CoreNavigation: Hoved",
            "CorePagination: Side",
            "CorePaginationPrevious: ← Forrige",
            "CorePaginationNext: Nesta →",
            "CoreTimeFormatShort: H:i",
            "CoreTimeFormatMedium: H:i:s",
            "CoreTimeFormatLong: H:i:s T",
            "CoreDateFormatShort: F Y",
            "CoreDateFormatMedium: Y-m-d",
            "CoreDateFormatLong: Y-m-d H:i",
            "CoreDatePast: i dag, i går, @x dager siden, en måned siden, @x måneder siden, ett år siden, @x år siden, den @x",
            "CoreDateFuture: snart, i morgen, om @x dager, om 1 måned, om @x måneder, om 1 år, om @x år, den @x",
            "CoreDateMonthsNominative: Januar, Februar, Mars, April, Mai, Juni, Juli, August, September, Oktober, November, Desember",
            "CoreDateMonthsGenitive: Januar, Februar, Mars, April, Mai, Juni, Juli, August, September, Oktober, November, Desember",
            "CoreDateWeekdays: Mandag, Tirsdag, Onsdag, Torsdag, Fredag, Lørdag, Søndag",
            "CoreDateWeekstart: Mandag",
            "CoreDecimalSeparator: ,",
            "CoreError404Title: Filen kunne ikke lokaliseres",
            "CoreError404Text: Den begärda filen kunde inte hittas. Å nej...",
            "CoreError420Title: Siden er ikke offentlig",
            "CoreError420Text: Den begärda siden er ikke offentlig. [yellow error]",
            "CoreError430Title: Innlogging feilet",
            "CoreError430Text: Epost eller passord er ikke riktig. [Vennligst prøv på nytt](#data-action-login).",
            "CoreError434Title: Siden kunne ikke lokaliseres",
            "CoreError434Text: Den begärda siden kunde inte hittas. [Du kan opprette denne siden](#data-action-edit).",
            "CoreError435Title: Siden kunne ikke lokaliseres",
            "CoreError435Text: Den begärda siden er slettet. [Du kan gjenopprette denne siden](#data-action-restore).",
            "CoreError450Title: Update error",
            "CoreError450Text: Can't connect to the update server. An Internet connection is required.",
            "CoreError500Title: Server feil",
            "CoreError500Text: Noe gikk galt. [yellow error]",
            "CsvDescription: CSV file parser.",
            "CzechDescription: Czech language.",
            "DailyDescription: Show daily pages.",
            "DanishDescription: Danish language.",
            "DisqusDescription: Show Disqus comments on blog.",
            "DraftDescription: Support for draft pages.",
            "DraftPageError: Vennligst logg inn.",
            "DutchDescription: Dutch language.",
            "EditDescription: Rediger nettstedet ditt i en nettleser.",
            "EditLoginTitle: Velkommen",
            "EditLoginEmail: Epost:",
            "EditLoginPassword: Passord:",
            "EditLoginForgot: Glemt passordet?",
            "EditLoginSignup: Lage brukerkonto?",
            "EditLoginButton: Logge inn",
            "EditSignupTitle: Lage brukerkonto",
            "EditSignupName: Navn:",
            "EditSignupEmail: Epost:",
            "EditSignupPassword: Passord:",
            "EditSignupConsent: Jeg samtykker til at denne nettsiden kan lagre mine personlige data.",
            "EditSignupButton: Registrer",
            "EditSignupStatusNone: Her kan du registrere en ny brukerkonto.",
            "EditSignupStatusIncomplete: Vennligst fyll ut alle feltene.",
            "EditSignupStatusInvalid: Vennligst fyll inn en gyldig epost adresse.",
            "EditSignupStatusWeak: Vennglist velg et annet passord.",
            "EditSignupStatusShort: Vennligst velg et lengre passord.",
            "EditSignupStatusNext: Din brukerkonto vil bli opprettet, vennligst sjekk din innboks.",
            "EditForgotTitle: Glemt passord",
            "EditForgotEmail: Epost:",
            "EditForgotStatusNone: Ikke noe problem, du kan lage et nytt passord.",
            "EditForgotStatusInvalid: Vennligst fyll inn en gyldig epost adresse.",
            "EditForgotStatusNext: Din brukerkonto blir gjenopprettet, vennligst sjekk din innboks.",
            "EditRecoverTitle: Glemt passordet ditt",
            "EditRecoverPassword: Passord:",
            "EditRecoverStatusPassword: Vennligst fyll inn et nytt passord.",
            "EditRecoverStatusWeak: Vennligst fyll inn et annet passord.",
            "EditRecoverStatusShort: Vennligst fyll inn et lengre passord.",
            "EditRecoverStatusDone: Din brukerkonto er gjenopprettet.",
            "EditConfirmSubject: Bekreft brukerkonto",
            "EditConfirmMessage: Hei @usershort,\\n\\nvennligst bekreft din brukerkonto. Klikk følgende lenke.",
            "EditConfirmTitle: Brukerkonto",
            "EditConfirmStatusDone: Brukerkonto bekreftet og venter på godkjenning.",
            "EditApproveSubject: Godkjenn brukerkonto.",
            "EditApproveMessage: Hei @usershort,\\n\\nvennligst godkjenn ny brukerkonto for @useraccount. Klikk følgende lenke.",
            "EditApproveTitle: Brukerkonto",
            "EditApproveStatusDone: Brukerkonto godkjent.",
            "EditReactivateSubject: Reaktiver brukerkonto",
            "EditReactivateMessage: Hei @usershort,\\n\\nvennligst reaktiver din brukerkonto. Det har vært for mange mislykkede innloggingsforsøk. Klikk følgende lenke.",
            "EditReactivateTitle: Brukerkonto",
            "EditReactivateStatusDone: Brukerkonto reaktivert.",
            "EditVerifySubject: Endre brukerkonto",
            "EditVerifyMessage: Hei @usershort,\\n\\nvennligst bekreft ny epost adresse for din brukerkonto. Klikk følgende lenke.",
            "EditVerifyTitle: Brukerkonto",
            "EditVerifyStatusDone: Brukerkonto endret.",
            "EditChangeSubject: Endre brukerkonto",
            "EditChangeMessage: Hei @usershort,\\n\\nvennligst bekreft at du ønsker å endre din brukerkonto. Klikk følgende lenke.",
            "EditChangeTitle: Brukerkonto",
            "EditChangeStatusDone: Brukerkonto endret.",
            "EditRemoveSubject: Slette brukerkonto",
            "EditRemoveMessage: Hei @usershort,\\n\\nvennligst bekreft at du ønsker å slette din brukerkonto. Klikk følgende lenke.",
            "EditRemoveTitle: Brukerkonto",
            "EditRemoveStatusDone: Brukerkonto slettet.",
            "EditRecoverSubject: Gjenopprett brukerkonto",
            "EditRecoverMessage: Hei @usershort,\\n\\nvennligst bekreft at du har glemt ditt passord. Klikk følgende lenke.",
            "EditWelcomeSubject: Velkommen",
            "EditWelcomeMessage: Hei @usershort,\\n\\ndin brukerkonto har blitt opprettet.",
            "EditGoodbyeSubject: Adjø",
            "EditGoodbyeMessage: Hei @usershort,\\n\\ndin brukerkonto har blitt slettet.",
            "EditAccountTitle: Bruker",
            "EditAccountInformation: Du kan slette din brukerkonto når som helst.",
            "EditAccountMore: Les mer…",
            "EditAccountStatusNone: Her kan du endre din brukerkonto.",
            "EditAccountStatusInvalid: Vennligst fyll inn en gyldig epost adresse.",
            "EditAccountStatusTaken: Vennligst fyll inn en annen epost adresse.",
            "EditAccountStatusWeak: Vennligst fyll inn et annet passord.",
            "EditAccountStatusShort: Vennligst fyll inn et lengre passord.",
            "EditAccountStatusNext: Din brukerkonto er endret, vennligst sjekk din innboks.",
            "EditQuitTitle: Slette brukerkonto",
            "EditQuitStatusNone: Vennligst fyll inn ditt navn for å bekrefte.",
            "EditQuitStatusMismatch: Vennligst fyll inn et annet navn.",
            "EditQuitStatusNext: Din brukerkonto vil bli slettet, vennligst sjekk din innboks.",
            "EditConfigureTitle: Nettsted",
            "EditConfigureSitename: Nettstedets navn:",
            "EditConfigureAuthor: Nettstedets administrator:",
            "EditConfigureEmail: Administrators epost:",
            "EditConfigureInformation: Nettstedets administrator kan bekrefte brukerkontoer.",
            "EditConfigureStatusNone: Her kan du konfigurere ditt nettsted.",
            "EditConfigureStatusInvalid: Vennligst fyll inn en gyldig epost adresse.",
            "EditUpdateTitle: Oppdateringer",
            "EditUpdateStatusNone: Datenstrom Yellow er for folk som lager små nettsteder.",
            "EditUpdateStatusCheck: Ser etter oppdateringer…",
            "EditUpdateStatusUpdates: Følgende oppdateringer er tilgjengelige:",
            "EditUpdateStatusOk: Ditt nettsted er oppdatert.",
            "EditOkButton: Ok",
            "EditCancelButton: Avbryt",
            "EditChangeButton: Endre",
            "EditCreateButton: Lage",
            "EditEditButton: Lagre",
            "EditDeleteButton: Slett",
            "EditUpdateButton: Oppdater",
            "EditEdit: Rediger side",
            "EditCreate: +",
            "EditDelete: -",
            "EditKeyboardLabels: Ctrl+, Alt+, Shift+, ⌘, ⌥, ⇧",
            "EditToolbarFormat: Format",
            "EditToolbarHeading: Overskrift",
            "EditToolbarH1: Overskrift 1",
            "EditToolbarH2: Overskrift 2",
            "EditToolbarH3: Overskrift 3",
            "EditToolbarParagraph: Normal tekst",
            "EditToolbarPre: Kildekode",
            "EditToolbarNotice: Notis",
            "EditToolbarQuote: Sitat",
            "EditToolbarBold: Fet",
            "EditToolbarItalic: Kursiv",
            "EditToolbarStrikethrough: Gjennomstreking",
            "EditToolbarCode: Kode",
            "EditToolbarList: Liste",
            "EditToolbarUl: • Usortert liste",
            "EditToolbarOl: 1. Sortert liste",
            "EditToolbarTl: ✓ Oppgaveliste",
            "EditToolbarLink: Lenke",
            "EditToolbarFile: Fil",
            "EditToolbarEmoji: Emoji",
            "EditToolbarIcon: Ikon",
            "EditToolbarStatus: Status",
            "EditToolbarUndo: Angre",
            "EditToolbarRedo: Gjenopprette",
            "EditToolbarPreview: Forhåndsvisning",
            "EditToolbarHelp: Hjelp",
            "EditMailFooter: @sitename",
            "EditDataGenerated: Denne siden genereres automatik.",
            "EditUploadProgress: Laster opp fil…",
            "EditUserDescription: Editor",
            "EditMenuSettings: Instillinger",
            "EditMenuHelp: Hjelp",
            "EditMenuLogout: Logge ut",
            "EditYellowUrl: https://datenstrom.se/yellow/",
            "EditYellowHelpUrl: https://datenstrom.se/yellow/help/",
            "EditYellowNewsUrl: https://datenstrom.se/yellow/help/what-s-new",
            "EmojiDescription: Lots and lots of emoji.",
            "EnglishDescription: English language.",
            "FeedDescription: Feed with recent changes.",
            "FrenchDescription: French language.",
            "GalleryDescription: Image gallery with popup.",
            "GermanDescription: German language.",
            "GooglecalendarDescription: Embed Google calendar.",
            "GooglemapDescription: Embed Google map.",
            "HelloworldDescription: Make animated text.",
            "HelpDescription: Help for your website.",
            "HighlightDescription: Highlight source code.",
            "HungarianDescription: Hungarian language.",
            "IconDescription: Icons and symbols.",
            "ImageDescription: Images and thumbnails.",
            "ImageDefaultAlt: Image without description",
            "InstagramDescription: Embed Instagram photos.",
            "InstallTitle: Hei",
            "InstallLanguage: Hva er språket ditt?",
            "InstallExtension: Hva ønsker du å gjøre?",
            "InstallExtensionWebsite: Liten nettsted",
            "InstallExtensionBlog: Liten blogg",
            "InstallExtensionWiki: Liten wiki",
            "InstallButton: Installer",
            "InstallHomeTitle: Hjem",
            "InstallHomeText: [image photo.jpg Eksempel rounded]\\n\\n[edit - Du kan redigere denne siden i en nettleser] eller bruke et tekstredigeringsprogram. [Få hjelp](https://datenstrom.se/yellow/help/).",
            "InstallAboutTitle: Om",
            "InstallAboutText: [Laget med hjelp av Datenstrom Yellow](https://datenstrom.se/yellow/).",
            "InstallDefaultTitle: Side",
            "InstallDefaultText: Dette er en ny side.",
            "InstallBlogTitle: Bloggside",
            "InstallBlogText: Detta er en ny bloggside.",
            "InstallWikiTitle: Wikiside",
            "InstallWikiText: Dette er en ny wikiside.",
            "InstallExampleImage: Dette er et eksempelbilde",
            "ItalianDescription: Italian language.",
            "JapaneseDescription: Japanese language.",
            "MarkdownDescription: Text formatting for humans.",
            "MetaDescription: Meta data for humans and machines.",
            "NorwegianDescription: Norwegian language.",
            "ParisDescription: Paris is an elegant theme.",
            "ParsedownDescription: Text formatting for humans.",
            "PodcastDescription: Web feed optimized for podcast publishing.",
            "PolishDescription: Polish language.",
            "PortugueseDescription: Portuguese language.",
            "PreviousnextDescription: Vis lenker til forrige/neste side.",
            "PreviousnextNavigation: Side",
            "PreviousnextPagePrevious: ← Forrige: @title",
            "PreviousnextPageNext: Nesta: @title →",
            "PrivateDescription: Support for password-protected pages.",
            "PrivatePageError: Please enter the password.",
            "ProfileDescription: Author profile for blog pages.",
            "PublishDescription: Make and publish extensions.",
            "RadiobossDescription: Widgets for RadioBoss Cloud.",
            "RandomDescription: Display random pages.",
            "ReadingtimeDescription: Show estimated reading time for page content.",
            "RedirectDescription: Alternative page redirection.",
            "RussianDescription: Russian language.",
            "SearchDescription: Full-text search.",
            "SearchResultsNone: Skriv et søkeord.",
            "SearchResultsEmpty: Kunne ikke finne noe.",
            "SearchSpecialChanges: De siste endringene",
            "SearchButton: Søk",
            "ServeDescription: Built-in web server.",
            "SitemapDescription: Sitemap with all pages.",
            "SliderDescription: Image gallery with slider.",
            "SlovakDescription: Slovak language.",
            "SoundcloudDescription: Embed Soundcloud audio tracks.",
            "SpanishDescription: Spanish language.",
            "SpoilerDescription: Hide certain page elements.",
            "StaticDescription: Generer et statisk nettsted.",
            "StockholmDescription: Stockholm er et rent tema.",
            "SwedishDescription: Swedish language.",
            "TocDescription: Table of contents.",
            "TrafficDescription: Create traffic analytics from log files.",
            "TurkishDescription: Turkish language.",
            "TwitterDescription: Embed Twitter messages.",
            "UpdateDescription: Hold nettstedet ditt oppdatert.",
            "UpdateExtensionDefaultDescription: No description available.",
            "UpdateExtensionDeveloper: Developed by @x.",
            "UpdateExtensionDesigner: Designed by @x.",
            "UpdateExtensionTranslator: Translated by @x.",
            "WikiDescription: Wiki for your website.",
            "WikiModified: Sist oppdatert",
            "WikiTag: Tagger:",
            "WikiSpecialPages: Alle sider",
            "WikiSpecialChanges: Siste endringer",
            "WittstockDescription: Wittstock is a classless theme.",
            "YoutubeDescription: Embed Youtube videos."));
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "nb"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="nb") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
}
