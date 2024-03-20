<?php
// English extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/english

class YellowEnglish {
    const VERSION = "0.8.44";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefaults(array(
            "Language: en",
            "LanguageLocale: en_GB",
            "LanguageDescription: English",
            "LanguageTranslator: Mark Seuffert",
            "AnchorDescription: Show anchor links next to headings.",
            "BacktotopDescription: Back-to-top link.",
            "BacktotopLabel: Back to top",
            "BerlinDescription: Berlin is a theme inspired by Dieter Rams.",
            "BlogDescription: Blog for your website.",
            "BlogBy: by",
            "BlogTag: Tags:",
            "BlogMore: Read more…",
            "BreadcrumbDescription: Breadcrumb navigation.",
            "BreadcrumbNavigation: Breadcrumb",
            "BundleDescription: Bundle website files.",
            "CatalanDescription: Catalan language.",
            "CheckDescription: Find broken links.",
            "ChineseDescription: Chinese language.",
            "ContactDescription: Email contact page.",
            "ContactName: Name:",
            "ContactEmail: Email:",
            "ContactMessage: Message:",
            "ContactConsent: I agree that my message will be stored by this website.",
            "ContactButton: Send my message",
            "ContactMailSpam: [Spam]",
            "ContactMailHeader: You have received a message from @sender:",
            "ContactMailFooter: This email was sent via @sitename - @title",
            "ContactStatusNone: Say hello. Your feedback is very welcome.",
            "ContactStatusIncomplete: Please fill out all fields.",
            "ContactStatusInvalid: Please enter a valid email.",
            "ContactStatusReview: Please remove links from the message.",
            "ContactStatusDone: You have sent an email. Thank you!",
            "ContactStatusError: Email could not be sent, please try again later!",
            "CopenhagenDescription: Copenhagen is a beautiful theme.",
            "CoreDescription: Core functionality of your website.",
            "CoreNavigation: Main",
            "CorePagination: Page",
            "CorePaginationPrevious: ← Previous",
            "CorePaginationNext: Next →",
            "CoreTimeFormatShort: H:i",
            "CoreTimeFormatMedium: H:i:s",
            "CoreTimeFormatLong: H:i:s T",
            "CoreDateFormatShort: F Y",
            "CoreDateFormatMedium: Y-m-d",
            "CoreDateFormatLong: Y-m-d H:i",
            "CoreDatePast: today, yesterday, @x days ago, 1 month ago, @x months ago, 1 year ago, @x years ago, on @x",
            "CoreDateFuture: soon, tomorrow, in @x days, in 1 month, in @x months, in 1 year, in @x years, on @x",
            "CoreDateMonthsNominative: January, February, March, April, May, June, July, August, September, October, November, December",
            "CoreDateMonthsGenitive: January, February, March, April, May, June, July, August, September, October, November, December",
            "CoreDateWeekdays: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday",
            "CoreDateWeekstart: Monday",
            "CoreDecimalSeparator: .",
            "CoreError404Title: File not found",
            "CoreError404Text: The requested file was not found. Oh no...",
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
            "EditDescription: Edit your website in a web browser.",
            "EditLoginTitle: Welcome",
            "EditLoginEmail: Email:",
            "EditLoginPassword: Password:",
            "EditLoginForgot: Forgot your password?",
            "EditLoginSignup: Create user account?",
            "EditLoginButton: Log in",
            "EditSignupTitle: Create user account",
            "EditSignupName: Name:",
            "EditSignupEmail: Email:",
            "EditSignupPassword: Password:",
            "EditSignupConsent: I agree that my personal data will be stored by this website.",
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
            "EditCancelButton: Cancel",
            "EditChangeButton: Change",
            "EditCreateButton: Create",
            "EditEditButton: Save",
            "EditDeleteButton: Delete",
            "EditUpdateButton: Update",
            "EditEdit: Edit page",
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
            "EditToolbarHelp: Help",
            "EditMailFooter: @sitename",
            "EditDataGenerated: This page is generated automatically.",
            "EditUploadProgress: Uploading file…",
            "EditUserDescription: Editor",
            "EditMenuSettings: Settings",
            "EditMenuHelp: Help",
            "EditMenuLogout: Logout",
            "EditYellowUrl: https://datenstrom.se/yellow/",
            "EditYellowHelpUrl: https://datenstrom.se/yellow/help/",
            "EditYellowNewsUrl: https://datenstrom.se/yellow/help/what-s-new",
            "EmojiDescription: Lots and lots of emoji.",
            "EnglishDescription: English language.",
            "FeedDescription: Feed with recent changes.",
            "FrenchDescription: French language.",
            "GalleryDescription: Image gallery with popup.",
            "GenerateDescription: Generate a static website.",
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
            "InstallTitle: Hello",
            "InstallLanguage: What's your language?",
            "InstallExtension: What do you want to make?",
            "InstallExtensionWebsite: Small website",
            "InstallExtensionBlog: Small blog",
            "InstallExtensionWiki: Small wiki",
            "InstallButton: Install",
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
            "PreviousnextPagePrevious: ← Previous: @title",
            "PreviousnextPageNext: Next: @title →",
            "PrivateDescription: Support for password-protected pages.",
            "PrivatePageError: Please enter the password.",
            "ProfileDescription: Author profile for blog pages.",
            "PublishDescription: Make and publish extensions.",
            "ReadingtimeDescription: Show estimated reading time for page content.",
            "RussianDescription: Russian language.",
            "SearchDescription: Full-text search.",
            "SearchResultsNone: Enter a search term.",
            "SearchResultsEmpty: No results found.",
            "SearchSpecialChanges: Recent changes",
            "SearchButton: Search",
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
            "UpdateDescription: Keep your website up to date.",
            "UpdateExtensionDefaultDescription: No description available.",
            "UpdateExtensionDeveloper: Developed by @x.",
            "UpdateExtensionDesigner: Designed by @x.",
            "UpdateExtensionTranslator: Translated by @x.",
            "WikiDescription: Wiki for your website.",
            "WikiModified: Last updated on",
            "WikiTag: Tags:",
            "WikiSpecialPages: All pages",
            "WikiSpecialChanges: Recent changes",
            "WittstockDescription: Wittstock is a classless theme.",
            "YoutubeDescription: Embed Youtube videos."));
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "en"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="en") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
}
