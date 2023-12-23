<?php
// Slovak extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/slovak

class YellowSlovak {
    const VERSION = "0.8.43";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefaults(array(
            "Language: sk",
            "LanguageLocale: sk_SK",
            "LanguageDescription: Slovenčina",
            "LanguageTranslator: Ádám Tuba",
            "AnchorDescription: Show anchor links next to headings.",
            "BerlinDescription: Berlin je téma inšpirovaná Dieter Rams.",
            "BlogDescription: Blog for your website.",
            "BlogBy: od",
            "BlogTag: Štítky:",
            "BlogMore: Čítať ďalej…",
            "BreadcrumbDescription: Breadcrumb navigation.",
            "BreadcrumbNavigation: Breadcrumb",
            "BundleDescription: Bundle website files.",
            "CatalanDescription: Catalan language.",
            "CheckDescription: Find broken links.",
            "ChineseDescription: Chinese language.",
            "ContactDescription: Email contact page.",
            "ContactName: Meno:",
            "ContactEmail: Email:",
            "ContactMessage: Správa:",
            "ContactConsent: Soglašam, da ta spletna stran shrani moje sporočilo.",
            "ContactButton: Poslať moju správu",
            "ContactMailSpam: [Spam]",
            "ContactMailHeader: You have received a message from @sender:",
            "ContactMailFooter: This email was sent via @sitename - @title",
            "ContactStatusNone: Napíš pár slov. Ceníme tvoj názor.",
            "ContactStatusIncomplete: Prosím vyplň všetky pole.",
            "ContactStatusInvalid: Prosím napíš platný email.",
            "ContactStatusReview: Please remove links from the message.",
            "ContactStatusDone: Správa odoslaná. Ďakujem.",
            "ContactStatusError: Nepodarilo sa poslať správu. Skús to neskôr!",
            "CopenhagenDescription: Copenhagen is a beautiful theme.",
            "CoreDescription: Základná funkcia vášho webu.",
            "CoreNavigation: Main",
            "CorePagination: Page",
            "CorePaginationPrevious: ← Predchádzajúci",
            "CorePaginationNext: Nasledujúci →",
            "CoreTimeFormatShort: H:i",
            "CoreTimeFormatMedium: H:i:s",
            "CoreTimeFormatLong: H:i:s T",
            "CoreDateFormatShort: F Y",
            "CoreDateFormatMedium: d-m-Y",
            "CoreDateFormatLong: d-m-Y H:i",
            "CoreDatePast: today, yesterday, @x days ago, 1 month ago, @x months ago, 1 year ago, @x years ago, on @x",
            "CoreDateFuture: soon, tomorrow, in @x days, in 1 month, in @x months, in 1 year, in @x years, on @x",
            "CoreDateMonthsNominative: Január, Február, Marec, Apríl, Máj, Jún, Júl, August, September, Octóber, November, December",
            "CoreDateMonthsGenitive: Január, Február, Marec, Apríl, Máj, Jún, Júl, August, September, Octóber, November, December",
            "CoreDateWeekdays: Pondelok, Utorok, Streda, Štvrtok, Piatok, Sobota, Nedeľa",
            "CoreDateWeekstart: Pondelok",
            "CoreDecimalSeparator: ,",
            "CoreError404Title: Datoteka ni najdena",
            "CoreError404Text: Zahtevane datoteke ni bilo mogoče najti. Oh ne ...",
            "CoreError420Title: Page not public",
            "CoreError420Text: The requested page is not public. [yellow error]",
            "CoreError430Title: Login failed",
            "CoreError430Text: The email or password is incorrect. [Please try again](#data-action-login).",
            "CoreError434Title: Page not found",
            "CoreError434Text: The requested page was not found. [You can create this page](#data-action-edit).",
            "CoreError435Title: Page not found",
            "CoreError435Text: The requested page has been deleted. [You can restore this page](#data-action-restore).",
            "CoreError450Title: Update error",
            "CoreError450Text: Can't connect to the update server. An Internet connection is required.",
            "CoreError500Title: Server error",
            "CoreError500Text: Something went wrong. [yellow error]",
            "CzechDescription: Czech language.",
            "DanishDescription: Danish language.",
            "DisqusDescription: Show Disqus comments on blog.",
            "DraftDescription: Support for draft pages.",
            "DraftPageError: Please log in.",
            "DutchDescription: Dutch language.",
            "EditDescription: Upravte svoj web vo webovom prehliadači.",
            "EditLoginTitle: Vitajte",
            "EditLoginEmail: Email:",
            "EditLoginPassword: Heslo:",
            "EditLoginForgot: Forgot your password?",
            "EditLoginSignup: Create user account?",
            "EditLoginButton: Log in",
            "EditSignupTitle: Create user account",
            "EditSignupName: Meno:",
            "EditSignupEmail: Email:",
            "EditSignupPassword: Heslo:",
            "EditSignupConsent: Soglašam, da bodo moji osebni podatki shranjeni na tej spletni strani.",
            "EditSignupButton: Create",
            "EditSignupStatusNone: Here you can create a new user account.",
            "EditSignupStatusIncomplete: Please fill out all fields.",
            "EditSignupStatusInvalid: Please enter a valid email.",
            "EditSignupStatusWeak: Please enter a different password.",
            "EditSignupStatusShort: Please enter a longer password.",
            "EditSignupStatusNext: User account will be created, please check your emails.",
            "EditForgotTitle: Forgot your password",
            "EditForgotEmail: Email:",
            "EditForgotStatusNone: No problem, you can create a new password.",
            "EditForgotStatusInvalid: Please enter a valid email.",
            "EditForgotStatusNext: User account will be recovered, please check your emails.",
            "EditRecoverTitle: Forgot your password",
            "EditRecoverPassword: Password:",
            "EditRecoverStatusPassword: Please enter a new password.",
            "EditRecoverStatusWeak: Please enter a different password.",
            "EditRecoverStatusShort: Please enter a longer password.",
            "EditRecoverStatusDone: User account recovered. Thank you!",
            "EditConfirmSubject: Confirm user account",
            "EditConfirmMessage: Hi @usershort,\\n\\nplease confirm your user account. Click the following link.",
            "EditConfirmTitle: User account",
            "EditConfirmStatusDone: User account confirmed and waiting for approval. Thank you!",
            "EditApproveSubject: Approve user account",
            "EditApproveMessage: Hi @usershort,\\n\\nplease approve a new user account for @useraccount. Click the following link.",
            "EditApproveTitle: User account",
            "EditApproveStatusDone: User account approved. Thank you!",
            "EditReactivateSubject: Reactivate user account",
            "EditReactivateMessage: Hi @usershort,\\n\\nplease reactivate your user account. There were too many failed login attempts. Click the following link.",
            "EditReactivateTitle: User account",
            "EditReactivateStatusDone: User account reactivated. Thank you!",
            "EditVerifySubject: Change user account",
            "EditVerifyMessage: Hi @usershort,\\n\\nplease confirm a new email for your user account. Click the following link.",
            "EditVerifyTitle: User account",
            "EditVerifyStatusDone: User account changed. Thank you!",
            "EditChangeSubject: Change user account",
            "EditChangeMessage: Hi @usershort,\\n\\nplease confirm that you want to change your user account. Click the following link.",
            "EditChangeTitle: User account",
            "EditChangeStatusDone: User account changed. Thank you!",
            "EditRemoveSubject: Delete user account",
            "EditRemoveMessage: Hi @usershort,\\n\\nplease confirm that you want to delete your user account. Click the following link.",
            "EditRemoveTitle: User account",
            "EditRemoveStatusDone: User account deleted. Thank you!",
            "EditRecoverSubject: Recover user account",
            "EditRecoverMessage: Hi @usershort,\\n\\nplease confirm that you forgot your password. Click the following link.",
            "EditWelcomeSubject: Welcome",
            "EditWelcomeMessage: Hi @usershort,\\n\\nyour user account has been created. Have fun editing the website.",
            "EditGoodbyeSubject: Goodbye",
            "EditGoodbyeMessage: Hi @usershort,\\n\\nyour user account has been deleted. Take care.",
            "EditAccountTitle: User",
            "EditAccountInformation: You can delete your user account anytime.",
            "EditAccountMore: Read more…",
            "EditAccountStatusNone: Here you can change your user account.",
            "EditAccountStatusInvalid: Please enter a valid email.",
            "EditAccountStatusTaken: Please enter a different email.",
            "EditAccountStatusWeak: Please enter a different password.",
            "EditAccountStatusShort: Please enter a longer password.",
            "EditAccountStatusNext: User account will be changed, please check your emails.",
            "EditQuitTitle: Delete user account",
            "EditQuitStatusNone: Please enter your name to confirm.",
            "EditQuitStatusMismatch: Please enter a different name.",
            "EditQuitStatusNext: User account will be deleted, please check your emails.",
            "EditConfigureTitle: Website",
            "EditConfigureSitename: Name of the website:",
            "EditConfigureAuthor: Name of the webmaster:",
            "EditConfigureEmail: Email of the webmaster:",
            "EditConfigureInformation: The webmaster can approve new user accounts.",
            "EditConfigureStatusNone: Here you can configure your website.",
            "EditConfigureStatusInvalid: Please enter a valid email.",
            "EditUpdateTitle: Updates",
            "EditUpdateStatusNone: Datenstrom Yellow is for people who make small websites.",
            "EditUpdateStatusCheck: Checking for updates…",
            "EditUpdateStatusUpdates: The following updates are available:",
            "EditUpdateStatusOk: Your website is up to date.",
            "EditOkButton: Ok",
            "EditCancelButton: Zrušiť",
            "EditChangeButton: Zmeniť",
            "EditCreateButton: Vytvoriť",
            "EditEditButton: Uložiť",
            "EditDeleteButton: Zmazať",
            "EditUpdateButton: Aktualizovať",
            "EditEdit: Upraviť stránku",
            "EditCreate: +",
            "EditDelete: -",
            "EditKeyboardLabels: Ctrl+, Alt+, Shift+, ⌘, ⌥, ⇧",
            "EditToolbarFormat: Format",
            "EditToolbarHeading: Heading",
            "EditToolbarH1: Heading 1",
            "EditToolbarH2: Heading 2",
            "EditToolbarH3: Heading 3",
            "EditToolbarParagraph: Normal text",
            "EditToolbarPre: Source code",
            "EditToolbarNotice: Notice",
            "EditToolbarQuote: Quote",
            "EditToolbarBold: Bold",
            "EditToolbarItalic: Italic",
            "EditToolbarStrikethrough: Strikethrough",
            "EditToolbarCode: Code",
            "EditToolbarList: List",
            "EditToolbarUl: • Unordered list",
            "EditToolbarOl: 1. Ordered list",
            "EditToolbarTl: ✓ Task list",
            "EditToolbarLink: Link",
            "EditToolbarFile: File",
            "EditToolbarEmoji: Emoji",
            "EditToolbarIcon: Icon",
            "EditToolbarStatus: Status",
            "EditToolbarUndo: Undo",
            "EditToolbarRedo: Redo",
            "EditToolbarPreview: Preview",
            "EditToolbarHelp: Pomoc",
            "EditMailFooter: @sitename",
            "EditDataGenerated: This page is generated automatically.",
            "EditUploadProgress: Uploading file…",
            "EditUserDescription: Editor",
            "EditMenuSettings: Settings",
            "EditMenuHelp: Pomoc",
            "EditMenuLogout: Odhlásiť sa",
            "EditYellowUrl: https://datenstrom.se/yellow/",
            "EditYellowHelpUrl: https://datenstrom.se/yellow/help/",
            "EditYellowNewsUrl: https://datenstrom.se/yellow/help/what-s-new",
            "EmojiDescription: Lots and lots of emoji.",
            "EnglishDescription: English language.",
            "FeedDescription: Feed with recent changes.",
            "FrenchDescription: French language.",
            "GalleryDescription: Image gallery with popup.",
            "GenerateDescription: Vytvorte statickú webovú stránku.",
            "GermanDescription: German language.",
            "GooglecalendarDescription: Embed Google calendar.",
            "GooglemapDescription: Embed Google map.",
            "HelloworldDescription: Make animated text.",
            "HelpDescription: Help for your website.",
            "HighlightDescription: Highlight source code.",
            "HungarianDescription: Hungarian language.",
            "IconDescription: Icons and symbols.",
            "ImageDescription: Add images and thumbnails.",
            "ImageDefaultAlt: Image without description",
            "InstagramDescription: Embed Instagram photos.",
            "InstallTitle: Zdravo",
            "InstallLanguage: Aký je váš jazyk?",
            "InstallExtension: Čo chcete urobiť?",
            "InstallExtensionWebsite: Malá webová stránka",
            "InstallExtensionBlog: Malý blog",
            "InstallExtensionWiki: Malá wiki",
            "InstallButton: Inštalovať",
            "InstallHomeTitle: Home",
            "InstallHomeText: [image photo.jpg Example rounded]\\n\\n[edit - You can edit this page in a web browser] or use a text editor. [Get help](https://datenstrom.se/yellow/help/).",
            "InstallAboutTitle: About",
            "InstallAboutText: [Made with Datenstrom Yellow](https://datenstrom.se/yellow/).",
            "InstallDefaultTitle: Page",
            "InstallDefaultText: This is a new page.",
            "InstallBlogTitle: Blog page",
            "InstallBlogText: This is a new blog page.",
            "InstallWikiTitle: Wiki page",
            "InstallWikiText: This is a new wiki page.",
            "InstallExampleImage: This is an example image",
            "ItalianDescription: Italian language.",
            "JapaneseDescription: Japanese language.",
            "KarlskronaDescription: Karlskrona is a semantic theme.",
            "MarkdownDescription: Text formatting for humans.",
            "MetaDescription: Meta data for humans and machines.",
            "NorwegianDescription: Norwegian language.",
            "ParisDescription: Paris is an elegant theme.",
            "ParsedownDescription: Text formatting for humans.",
            "PolishDescription: Polish language.",
            "PortugueseDescription: Portuguese language.",
            "PreviousnextDescription: Show links to previous/next page.",
            "PreviousnextNavigation: Page",
            "PreviousnextPagePrevious: ← Predchádzajúci: @title",
            "PreviousnextPageNext: Nasledujúci: @title →",
            "PrivateDescription: Support for password-protected pages.",
            "PrivatePageError: Please enter the password.",
            "ProfileDescription: Author profile for blog pages.",
            "PublishDescription: Make and publish extensions.",
            "ReadingtimeDescription: Show estimated reading time for page content.",
            "RussianDescription: Russian language.",
            "SearchDescription: Full-text search.",
            "SearchResultsNone: Hľadaný výraz.",
            "SearchResultsEmpty: Židne výsledky.",
            "SearchSpecialChanges: Posledné zmeny",
            "SearchButton: Hľadať",
            "ServeDescription: Built-in web server.",
            "SitemapDescription: Sitemap with all pages.",
            "SliderDescription: Image gallery with slider.",
            "SlovakDescription: Slovak language.",
            "SpanishDescription: Spanish language.",
            "StockholmDescription: Stockholm is a clean theme.",
            "SwedishDescription: Swedish language.",
            "TocDescription: Table of contents.",
            "TrafficDescription: Create traffic analytics from log files.",
            "TurkishDescription: Turkish language.",
            "UpdateDescription: Udržujte svoj web aktuálny.",
            "UpdateExtensionDefaultDescription: No description available.",
            "UpdateExtensionDeveloper: Developed by @x.",
            "UpdateExtensionDesigner: Designed by @x.",
            "UpdateExtensionTranslator: Translated by @x.",
            "WikiDescription: Wiki for your website.",
            "WikiModified: Posledná aktualizácia dňa",
            "WikiTag: Štítky:",
            "WikiSpecialPages: Vse strani",
            "WikiSpecialChanges: Posledné zmeny",
            "WittstockDescription: Wittstock is a classless theme.",
            "YoutubeDescription: Embed Youtube videos."));
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "sk"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="sk") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
}
