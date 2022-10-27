<?php
// Hungarian extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/hungarian

class YellowHungarian {
    const VERSION = "0.8.36";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefault($this->getDefault());
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "hu"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="hu") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
    
    // Return default language settings
    public function getDefault() {
        return <<< 'END'
        Language: hu
        LanguageLocale: hu_HU
        LanguageDescription: Magyar
        LanguageTranslator: Ádám Tuba
        BerlinDescription: Berlin is a theme inspired by Dieter Rams.
        BlogDescription: Blog for your website.
        BlogBy: by
        BlogTag: Címke:
        BlogMore: Bővebben…
        BreadcrumbDescription: Breadcrumb navigation.
        BreadcrumbNavigation: Breadcrumb
        BundleDescription: Bundle website files.
        ChineseDescription: Chinese/简体中文 with language 'zh'.
        CommandDescription: Command line of the website.
        ContactDescription: Email contact page.
        ContactName: Név:
        ContactEmail: E-mail:
        ContactMessage: Üzenet:
        ContactConsent: Hozzájárulok, hogy ez a weboldal tárolja az üzenetemet.
        ContactButton: Üzenetemet küldése
        ContactMailSpam: [Spam]
        ContactMailHeader: You have received a message from @sender:
        ContactMailFooter: This email was sent via @sitename - @title
        ContactStatusNone: Szólj hozzánk. Fontos a véleményed.
        ContactStatusIncomplete: Kérlek töltsd ki a mezőket.
        ContactStatusInvalid: Kérlek érvényes e-mail címet adj meg.
        ContactStatusReview: Please remove links from the message.
        ContactStatusDone: Sikeresen elküldted az üzenetet.
        ContactStatusError: A küldés sikertelen volt. Kérlek próbáld meg később.
        CopenhagenDescription: Copenhagen is a beautiful theme.
        CoreDescription: A weboldal alapvető funkciói.
        CoreNavigation: Main
        CorePagination: Page
        CorePaginationPrevious: ← Előző
        CorePaginationNext: Tovább →
        CoreTimeFormatShort: H:i
        CoreTimeFormatMedium: H:i:s
        CoreTimeFormatLong: H:i:s T
        CoreDateFormatShort: Y F
        CoreDateFormatMedium: Y-m-d
        CoreDateFormatLong: Y-m-d H:i
        CoreDatePast: today, yesterday, @x days ago, 1 month ago, @x months ago, 1 year ago, @x years ago, on @x
        CoreDateFuture: soon, tomorrow, in @x days, in 1 month, in @x months, in 1 year, in @x years, on @x
        CoreDateMonthsNominative: Január, Február, Március, Április, Május, Június, Július, Augusztus, Szeptember, Október, November, December
        CoreDateMonthsGenitive: Január, Február, Március, Április, Május, Június, Július, Augusztus, Szeptember, Október, November, December
        CoreDateWeekdays: Hétfő, Kedd, Szerda, Csütörtök, Péntek, Szombat, Vasárnap
        CoreDateWeekstart: Hétfő
        CoreDecimalSeparator: ,
        CoreError404Title: Fájl nem található
        CoreError404Text: A kért fájl nem található. Óh ne...
        CoreError420Title: Page not public
        CoreError420Text: The requested page is not public. [yellow error]
        CoreError430Title: Login failed
        CoreError430Text: The email or password is incorrect. [Please try again](#data-action-login).
        CoreError434Title: Page not found
        CoreError434Text: The requested page was not found. [You can create this page](#data-action-edit).
        CoreError435Title: Page not found
        CoreError435Text: The requested page has been deleted. [You can restore this page](#data-action-restore).
        CoreError450Title: Update error
        CoreError450Text: Can't connect to the update server. An Internet connection is required.
        CoreError500Title: Server error
        CoreError500Text: Something went wrong. [yellow error]
        CzechDescription: Czech/Čeština with language 'cs'.
        DanishDescription: Danish/Dansk with language 'da'.
        DisqusDescription: Show Disqus comments on blog.
        DraftDescription: Support for draft pages.
        DraftPageError: Please log in.
        DutchDescription: Dutch/Nederlands with language 'nl'.
        EditDescription: Szerkessze webhelyét egy böngészőben.
        EditLoginTitle: Üdvözöljük
        EditLoginEmail: E-mail:
        EditLoginPassword: Jelszó:
        EditLoginForgot: Forgot your password?
        EditLoginSignup: Create user account?
        EditLoginButton: Log in
        EditSignupTitle: Create user account
        EditSignupName: Név:
        EditSignupEmail: E-mail:
        EditSignupPassword: Jelszó:
        EditSignupConsent: Hozzájárulok, hogy személyes adataimat ez a weboldal tárolja.
        EditSignupButton: Create
        EditSignupStatusNone: Here you can create a new user account.
        EditSignupStatusIncomplete: Please fill out all fields.
        EditSignupStatusInvalid: Please enter a valid email.
        EditSignupStatusWeak: Please enter a different password.
        EditSignupStatusShort: Please enter a longer password.
        EditSignupStatusNext: User account will be created, please check your emails.
        EditForgotTitle: Forgot your password
        EditForgotEmail: Email:
        EditForgotStatusNone: No problem, you can create a new password.
        EditForgotStatusInvalid: Please enter a valid email.
        EditForgotStatusNext: User account will be recovered, please check your emails.
        EditRecoverTitle: Forgot your password
        EditRecoverPassword: Password:
        EditRecoverStatusPassword: Please enter a new password.
        EditRecoverStatusWeak: Please enter a different password.
        EditRecoverStatusShort: Please enter a longer password.
        EditRecoverStatusDone: User account recovered. Thank you!
        EditConfirmSubject: Confirm user account
        EditConfirmMessage: Hi @usershort,\n\nplease confirm your user account. Click the following link.
        EditConfirmTitle: User account
        EditConfirmStatusDone: User account confirmed and waiting for approval. Thank you!
        EditApproveSubject: Approve user account
        EditApproveMessage: Hi @usershort,\n\nplease approve a new user account for @useraccount. Click the following link.
        EditApproveTitle: User account
        EditApproveStatusDone: User account approved. Thank you!
        EditReactivateSubject: Reactivate user account
        EditReactivateMessage: Hi @usershort,\n\nplease reactivate your user account. There were too many failed login attempts. Click the following link.
        EditReactivateTitle: User account
        EditReactivateStatusDone: User account reactivated. Thank you!
        EditVerifySubject: Change user account
        EditVerifyMessage: Hi @usershort,\n\nplease confirm a new email for your user account. Click the following link.
        EditVerifyTitle: User account
        EditVerifyStatusDone: User account changed. Thank you!
        EditChangeSubject: Change user account
        EditChangeMessage: Hi @usershort,\n\nplease confirm that you want to change your user account. Click the following link.
        EditChangeTitle: User account
        EditChangeStatusDone: User account changed. Thank you!
        EditRemoveSubject: Delete user account
        EditRemoveMessage: Hi @usershort,\n\nplease confirm that you want to delete your user account. Click the following link.
        EditRemoveTitle: User account
        EditRemoveStatusDone: User account deleted. Thank you!
        EditRecoverSubject: Recover user account
        EditRecoverMessage: Hi @usershort,\n\nplease confirm that you forgot your password. Click the following link.
        EditWelcomeSubject: Welcome
        EditWelcomeMessage: Hi @usershort,\n\nyour user account has been created. Have fun editing the website.
        EditGoodbyeSubject: Goodbye
        EditGoodbyeMessage: Hi @usershort,\n\nyour user account has been deleted. Take care.
        EditAccountTitle: User
        EditAccountInformation: You can delete your user account anytime.
        EditAccountMore: Read more…
        EditAccountStatusNone: Here you can change your user account.
        EditAccountStatusInvalid: Please enter a valid email.
        EditAccountStatusTaken: Please enter a different email.
        EditAccountStatusWeak: Please enter a different password.
        EditAccountStatusShort: Please enter a longer password.
        EditAccountStatusNext: User account will be changed, please check your emails.
        EditQuitTitle: Delete user account
        EditQuitStatusNone: Please enter your name to confirm.
        EditQuitStatusMismatch: Please enter a different name.
        EditQuitStatusNext: User account will be deleted, please check your emails.
        EditConfigureTitle: Website
        EditConfigureSitename: Name of the website:
        EditConfigureAuthor: Name of the webmaster:
        EditConfigureEmail: Email of the webmaster:
        EditConfigureInformation: The webmaster can approve new user accounts.
        EditConfigureStatusNone: Here you can configure your website.
        EditConfigureStatusInvalid: Please enter a valid email.
        EditUpdateTitle: Updates
        EditUpdateStatusNone: Datenstrom Yellow is for people who make small websites.
        EditUpdateStatusCheck: Checking for updates…
        EditUpdateStatusUpdates: The following updates are available:
        EditUpdateStatusOk: Your website is up to date.
        EditOkButton: Ok
        EditCancelButton: Mégse
        EditChangeButton: Módosítás
        EditCreateButton: Létrehozás
        EditEditButton: Mentés
        EditDeleteButton: Tötlés
        EditUpdateButton: Update
        EditEdit: Szerkesztés
        EditCreate: +
        EditDelete: -
        EditKeyboardLabels: Ctrl+, Alt+, Shift+, ⌘, ⌥, ⇧
        EditToolbarFormat: Format
        EditToolbarHeading: Heading
        EditToolbarH1: Heading 1
        EditToolbarH2: Heading 2
        EditToolbarH3: Heading 3
        EditToolbarParagraph: Normal text
        EditToolbarPre: Source code
        EditToolbarNotice: Notice
        EditToolbarQuote: Quote
        EditToolbarBold: Bold
        EditToolbarItalic: Italic
        EditToolbarStrikethrough: Strikethrough
        EditToolbarCode: Code
        EditToolbarList: List
        EditToolbarUl: • Unordered list
        EditToolbarOl: 1. Ordered list
        EditToolbarTl: ✓ Task list
        EditToolbarLink: Link
        EditToolbarFile: File
        EditToolbarEmojiawesome: Emoji
        EditToolbarFontawesome: Icon
        EditToolbarStatus: Status
        EditToolbarUndo: Undo
        EditToolbarRedo: Redo
        EditToolbarPreview: Preview
        EditToolbarHelp: Súgó
        EditMailFooter: @sitename
        EditDataGenerated: This page is generated automatically.
        EditUploadProgress: Uploading file…
        EditUserDescription: Editor
        EditMenuSettings: Settings
        EditMenuHelp: Súgó
        EditMenuLogout: Kijelentkezés
        EditYellowUrl: https://datenstrom.se/yellow/
        EditYellowHelpUrl: https://datenstrom.se/yellow/help/
        EmojiawesomeDescription: Lots and lots of emoji.
        EnglishDescription: English/English with language 'en'.
        FeedDescription: Feed with recent changes.
        FontawesomeDescription: Icons and symbols.
        FrenchDescription: French/Français with language 'fr'.
        GalleryDescription: Image gallery with popup.
        GermanDescription: German/Deutsch with language 'de'.
        GooglecalendarDescription: Embed Google calendar.
        GooglemapDescription: Embed Google map.
        HelloworldDescription: Example feature for Datenstrom Yellow.
        HelpDescription: Help for your website.
        HighlightDescription: Highlight source code.
        HungarianDescription: Hungarian/Magyar with language 'hu'.
        ImageDescription: Images and thumbnails.
        ImageDefaultAlt: Image without description
        InstagramDescription: Embed Instagram photos.
        InstallTitle: Helló
        InstallLanguage: Mi a nyelved?
        InstallExtension: Mit akarsz tenni?
        InstallExtensionWebsite: Kis weboldal
        InstallExtensionBlog: Kis blog
        InstallExtensionWiki: Kis wiki
        InstallButton: Telepítés
        InstallHomeTitle: Home
        InstallHomeText: [image photo.jpg Example rounded]\n\n[edit - You can edit this page in a web browser] or use a text editor. [Get help](https://datenstrom.se/yellow/help/).
        InstallAboutTitle: About
        InstallAboutText: [Made with Datenstrom Yellow](https://datenstrom.se/yellow/).
        InstallDefaultTitle: Page
        InstallDefaultText: This is a new page.
        InstallBlogTitle: Blog page
        InstallBlogText: This is a new blog page.
        InstallWikiTitle: Wiki page
        InstallWikiText: This is a new wiki page.
        InstallExampleImage: This is an example image
        ItalianDescription: Italian/Italiano with language 'it'.
        JapaneseDescription: Japanese/日本語 with language 'ja'.
        MarkdownDescription: Text formatting for humans.
        MetaDescription: Meta data for humans and machines.
        NorwegianDescription: Norwegian/Norsk with language 'nb'.
        ParsedownDescription: Text formatting for humans.
        ParisDescription: Paris is an elegant theme.
        PolishDescription: Polish/Polski with language 'pl'.
        PortugueseDescription: Portuguese/Português with language 'pt'.
        PreviousnextDescription: Show links to previous/next page.
        PreviousnextNavigation: Page
        PreviousnextPagePrevious: ← Előző: @title
        PreviousnextPageNext: Tovább: @title →
        PrivateDescription: Support for password-protected pages.
        PrivatePageError: Please enter the password.
        PublishDescription: Make and publish extensions.
        RussianDescription: Russian/Русский with language 'ru'.
        SearchDescription: Full-text search.
        SearchResultsNone: Keresett kifejezés
        SearchResultsEmpty: Nincs találat.
        SearchSpecialChanges: Legutóbbi változások
        SearchButton: Keresés
        ServeDescription: Built-in web server.
        SitemapDescription: Sitemap with all pages.
        SliderDescription: Image gallery with slider.
        SlovakDescription: Slovak/Slovenčina with language 'sk'.
        SoundcloudDescription: Embed Soundcloud audio tracks.
        SpanishDescription: Spanish/Español with language 'es'.
        StockholmDescription: Stockholm is a clean theme.
        SwedishDescription: Swedish/Svenska with language 'sv'.
        TocDescription: Table of contents.
        TrafficDescription: Create traffic analytics from log files.
        TurkishDescription: Turkish/Türkçe with language 'tr'.
        TwitterDescription: Embed Twitter messages.
        UpdateDescription: Tartsa naprakészen a webhelyét.
        UpdateExtensionDefaultDescription: No description available.
        UpdateExtensionDeveloper: Developed by @x.
        UpdateExtensionDesigner: Designed by @x.
        UpdateExtensionTranslator: Translated by @x.
        WikiDescription: Wiki for your website.
        WikiModified: Utolsó frissítés
        WikiTag: Címke:
        WikiSpecialPages: Az összes oldal
        WikiSpecialChanges: Legutóbbi változások
        YoutubeDescription: Embed Youtube videos.
END;
    }
}