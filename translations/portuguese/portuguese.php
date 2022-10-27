<?php
// Portuguese extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/portuguese

class YellowPortuguese {
    const VERSION = "0.8.37";
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
            $this->yellow->system->save($fileName, array("language" => "pt"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="pt") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
    
    // Return default language settings
    public function getDefault() {
        return <<< 'END'
        Language: pt
        LanguageLocale: pt_PT
        LanguageDescription: Português
        LanguageTranslator: Al Garcia
        AntispamDescription: Alternative email address obfuscator.
        AudioDescription: HTML5 audio player.
        BerlinDescription: Berlin is a theme inspired by Dieter Rams.
        BlogDescription: Blog for your website.
        BlogBy: por
        BlogTag: Tags:
        BlogMore: Ler mais…
        BreadcrumbDescription: Breadcrumb navigation.
        BreadcrumbNavigation: Breadcrumb
        BundleDescription: Bundle website files.
        ChineseDescription: Chinese/简体中文 with language 'zh'.
        CodefileDescription: Download code blocks as text file.
        CommandDescription: Command line of the website.
        ContactDescription: Email contact page.
        ContactName: Nome:
        ContactEmail: Email:
        ContactMessage: Mensagem:
        ContactConsent: Eu consinto que este site armazene minha mensagem.
        ContactButton: Enviar minha mensagem
        ContactMailSpam: [Spam]
        ContactMailHeader: You have received a message from @sender:
        ContactMailFooter: This email was sent via @sitename - @title
        ContactStatusNone: Diga olá. O seu feedback é bastante apreciado.
        ContactStatusIncomplete: Por favor, preencha todos os campos.
        ContactStatusInvalid: Por favor insira um email válido.
        ContactStatusReview: Please remove links from the message.
        ContactStatusDone: O seu email foi enviado com sucesso. Obrigado!
        ContactStatusError: O sem email não pôde ser enviado, por favor tente mais tarde!
        CopenhagenDescription: Copenhagen is a beautiful theme.
        CoreDescription: Funcionalidade central do site.
        CoreNavigation: Main
        CorePagination: Page
        CorePaginationPrevious: ← Anterior
        CorePaginationNext: Seguinte →
        CoreTimeFormatShort: H:i
        CoreTimeFormatMedium: H:i:s
        CoreTimeFormatLong: H:i:s T
        CoreDateFormatShort: F Y
        CoreDateFormatMedium: d-m-Y
        CoreDateFormatLong: d-m-Y H:i
        CoreDatePast: today, yesterday, @x days ago, 1 month ago, @x months ago, 1 year ago, @x years ago, on @x
        CoreDateFuture: soon, tomorrow, in @x days, in 1 month, in @x months, in 1 year, in @x years, on @x
        CoreDateMonthsNominative: Janeiro, Fevereiro, Março, Abril, Maio, Junho, Julho, Agosto, Setembro, Outubro, Novembro, Dezembro
        CoreDateMonthsGenitive: Janeiro, Fevereiro, Março, Abril, Maio, Junho, Julho, Agosto, Setembro, Outubro, Novembro, Dezembro
        CoreDateWeekdays: segunda-feira, terça-feira, quarta-feira, quinta-feira, sexta-feira, sábado, domingo
        CoreDateWeekstart: segunda-feira
        CoreDecimalSeparator: ,
        CoreError404Title: Arquivo não encontrado
        CoreError404Text: O arquivo solicitado não foi encontrado. Ah não...
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
        CsvDescription: CSV file parser.
        CzechDescription: Czech/Čeština with language 'cs'.
        DailyDescription: Show daily pages.
        DanishDescription: Danish/Dansk with language 'da'.
        DisqusDescription: Show Disqus comments on blog.
        DraftDescription: Support for draft pages.
        DraftPageError: Please log in.
        DutchDescription: Dutch/Nederlands with language 'nl'.
        EditDescription: Edite seu site em um navegador da web.
        EditLoginTitle: Bem vinda
        EditLoginEmail: Email:
        EditLoginPassword: Senha:
        EditLoginForgot: Esqueceu sua senha?
        EditLoginSignup: Criar conta de usuário?
        EditLoginButton: Entrar
        EditSignupTitle: Criar conta de usuário
        EditSignupName: Nome:
        EditSignupEmail: Email:
        EditSignupPassword: Senha:
        EditSignupConsent: Eu consinto que este site armazene meus dados pessoais.
        EditSignupButton: Criar
        EditSignupStatusNone: Aqui você pode criar uma nova conta de usuário.
        EditSignupStatusIncomplete: Por favor, preencha todos os campos.
        EditSignupStatusInvalid: Por favor digite um email válido.
        EditSignupStatusWeak: Por favor insira uma senha diferente.
        EditSignupStatusShort: Por favor insira uma senha mais longa.
        EditSignupStatusNext: A conta de usuário será criada, por favor, verifique seus e-mails.
        EditForgotTitle: Esqueceu sua senha
        EditForgotEmail: Email:
        EditForgotStatusNone: Nenhum problema, você pode criar uma nova senha.
        EditForgotStatusInvalid: Por favor digite um email válido.
        EditForgotStatusNext: A conta de usuário será recuperada, por favor, verifique seus e-mails.
        EditRecoverTitle: Esqueceu sua senha
        EditRecoverPassword: Senha:
        EditRecoverStatusPassword: Por favor digite uma senha válida.
        EditRecoverStatusWeak: Por favor insira uma senha diferente.
        EditRecoverStatusShort: Por favor insira uma senha mais longa.
        EditRecoverStatusDone: Conta de usuário recuperada. Obrigado!
        EditConfirmSubject: Confirmar conta de usuário
        EditConfirmMessage: Olá @usershort,\n\npor favor confirmar a sua conta de usuário. Clique no link abaixo.
        EditConfirmTitle: Conta de usuário
        EditConfirmStatusDone: Conta de usuário confirmada e à espera de aprovação. Obrigado!
        EditApproveSubject: Aprovar conta de usuário
        EditApproveMessage: Olá @usershort,\n\npor favor, aprovar uma nova conta de usuário para @useraccount. Faça click no link abaixo.
        EditApproveTitle: Conta de usuário
        EditApproveStatusDone: Conta de usuário aprovado. Obrigado!
        EditReactivateSubject: Reactivate user account
        EditReactivateMessage: Hi @usershort,\n\nplease reactivate your user account. There were too many failed login attempts. Click the following link.
        EditReactivateTitle: Conta de usuário
        EditReactivateStatusDone: User account reactivated. Thank you!
        EditVerifySubject: Change user account
        EditVerifyMessage: Hi @usershort,\n\nplease confirm a new email for your user account. Click the following link.
        EditVerifyTitle: Conta de usuário
        EditVerifyStatusDone: User account changed. Thank you!
        EditChangeSubject: Change user account
        EditChangeMessage: Hi @usershort,\n\nplease confirm that you want to change your user account. Click the following link.
        EditChangeTitle: Conta de usuário
        EditChangeStatusDone: User account changed. Thank you!
        EditRemoveSubject: Delete user account
        EditRemoveMessage: Hi @usershort,\n\nplease confirm that you want to delete your user account. Click the following link.
        EditRemoveTitle: Conta de usuário
        EditRemoveStatusDone: User account deleted. Thank you!
        EditRecoverSubject: Recuperar conta de usuário
        EditRecoverMessage: Oi @usershort,\n\npor favor confirme que você esqueceu a sua senha. Clique no seguinte link.
        EditWelcomeSubject: Bem vindo
        EditWelcomeMessage: Oi @usershort,\n\nsua conta de usuário foi criada. Divirta-se na edição do site.
        EditGoodbyeSubject: Goodbye
        EditGoodbyeMessage: Hi @usershort,\n\nyour user account has been deleted. Take care.
        EditAccountTitle: User
        EditAccountInformation: You can delete your user account anytime.
        EditAccountMore: Read more…
        EditAccountStatusNone: Here you can change your user account.
        EditAccountStatusInvalid: Please enter a valid email.
        EditAccountStatusTaken: Please enter a different email.
        EditAccountStatusWeak: Please enter a different password.
        EditAccountStatusShort: Por favor insira uma senha mais longa.
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
        EditCancelButton: Cancelar
        EditChangeButton: Alterar
        EditCreateButton: Criar
        EditEditButton: Gravar
        EditDeleteButton: Apagar
        EditUpdateButton: Atualizar
        EditEdit: Editar página
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
        EditToolbarHelp: Ajuda
        EditMailFooter: @sitename
        EditDataGenerated: This page is generated automatically.
        EditUploadProgress: Uploading file…
        EditUserDescription: Editor
        EditMenuSettings: Configurações
        EditMenuHelp: Ajuda
        EditMenuLogout: Sair
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
        IncludeDescription: Includes page content from other pages.
        InstagramDescription: Embed Instagram photos.
        InstallTitle: Olá
        InstallLanguage: Qual é a sua língua?
        InstallExtension: O que você quer fazer?
        InstallExtensionWebsite: Website pequeno
        InstallExtensionBlog: Blog pequeno
        InstallExtensionWiki: Wiki pequeno
        InstallButton: Instalar
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
        PagesourceDescription: Display Markdown source on pages.
        ParisDescription: Paris is an elegant theme.
        ParsedownDescription: Text formatting for humans.
        PodcastDescription: Web feed optimized for podcast publishing.
        PolishDescription: Polish/Polski with language 'pl'.
        PortugueseDescription: Portuguese/Português with language 'pt'.
        PreviousnextDescription: Show links to previous/next page.
        PreviousnextNavigation: Page
        PreviousnextPagePrevious: ← Anterior: @title
        PreviousnextPageNext: Seguinte: @title →
        PrivateDescription: Support for password-protected pages.
        PrivatePageError: Please enter the password.
        ProfileDescription: Author profile for blog pages.
        PublishDescription: Make and publish extensions.
        RadiobossDescription: Widgets for RadioBoss Cloud.
        RandomDescription: Display random pages.
        ReadingtimeDescription: Show estimated reading time for page content.
        RedirectDescription: Alternative page redirection.
        RussianDescription: Russian/Русский with language 'ru'.
        SearchDescription: Full-text search.
        SearchResultsNone: Introduza um termo de pesquisa.
        SearchResultsEmpty: Não foram encontrados resultados.
        SearchSpecialChanges: Alterações recentes
        SearchButton: Pesquisa
        ServeDescription: Built-in web server.
        SitemapDescription: Sitemap with all pages.
        SliderDescription: Image gallery with slider.
        SlovakDescription: Slovak/Slovenčina with language 'sk'.
        SoundcloudDescription: Embed Soundcloud audio tracks.
        SpanishDescription: Spanish/Español with language 'es'.
        SpoilerDescription: Hide certain page elements.
        StockholmDescription: Stockholm is a clean theme.
        SwedishDescription: Swedish/Svenska with language 'sv'.
        TickerDescription: RSS feed parser.
        TocDescription: Table of contents.
        TrafficDescription: Create traffic analytics from log files.
        TurkishDescription: Turkish/Türkçe with language 'tr'.
        TwitterDescription: Embed Twitter messages.
        UpdateDescription: Mantenha seu site atualizado.
        UpdateExtensionDefaultDescription: No description available.
        UpdateExtensionDeveloper: Developed by @x.
        UpdateExtensionDesigner: Designed by @x.
        UpdateExtensionTranslator: Translated by @x.
        WikiDescription: Wiki for your website.
        WikiModified: Última atualização em
        WikiTag: Tags:
        WikiSpecialPages: Todas as páginas
        WikiSpecialChanges: Alterações recentes
        WittstockDescription: Wittstock is a classless theme.
        YoutubeDescription: Embed Youtube videos.
END;
    }
}
