<?php
// French extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/french

class YellowFrench {
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
            $this->yellow->system->save($fileName, array("language" => "fr"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="fr") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
    
    // Return default language settings
    public function getDefault() {
        return <<< 'END'
        Language: fr
        LanguageLocale: fr_FR
        LanguageDescription: Français
        LanguageTranslator: Juh Nibreh
        BerlinDescription: Berlin is a theme inspired by Dieter Rams.
        BlogDescription: Blog pour votre site web.
        BlogBy: par
        BlogTag: Tags:
        BlogMore: Lire la suite…
        BreadcrumbDescription: Breadcrumb navigation.
        BreadcrumbNavigation: Breadcrumb
        BundleDescription: Bundle website files.
        ChineseDescription: Chinese/简体中文 with language 'zh'.
        CommandDescription: Ligne de commande du site web.
        ContactDescription: Email contact page.
        ContactName: Nom:
        ContactEmail: Email:
        ContactMessage: Message:
        ContactConsent: Je consens à ce que ce site stocke mon message.
        ContactButton: Envoyer mon message
        ContactMailSpam: [Spam]
        ContactMailHeader : Vous avez reçu un message de @sender:
        ContactMailFooter: Cet email a été envoyé via @sitename - @title
        ContactStatusNone: Dites bonjour ! Vos commentaires sont les bienvenus.
        ContactStatusIncomplete: S'il vous plaît, veuillez remplir tous les champs.
        ContactStatusInvalid: S'il vous plaît, veuillez entrer une adresse email valide.
        ContactStatusReview: S'il vous plaît, veuillez supprimer les liens du message.
        ContactStatusDone: Votre message a bien été envoyé. Merci !
        ContactStatusError: Votre message n'a pas pu être envoyé, réessayez plus tard s'il vous plaît !
        CopenhagenDescription: Copenhagen is a beautiful theme.
        CoreDescription: Fonctionnalité principale du site web.
        CoreNavigation: Principale
        CorePagination: Page
        CorePaginationPrevious: ← Précédent
        CorePaginationNext: Suivant →
        CoreTimeFormatShort: H:i
        CoreTimeFormatMedium: H:i:s
        CoreTimeFormatLong: H:i:s T
        CoreDateFormatShort: F Y
        CoreDateFormatMedium: d/m/Y
        CoreDateFormatLong: d/m/Y H:i
        CoreDatePast: aujourd'hui, hier, il y a @x jours, il ya 1 mois, il y a @x mois, il y a 1 an, il y a @x ans, le @x
        CoreDateFuture: bientôt, demain, dans @x jours, en 1 mois, dans @x mois, en 1 an, dans @x ans, le @x
        CoreDateMonthsNominative: janvier, février, mars, avril, mai, juin, juillet, août, septembre, octobre, novembre, décembre
        CoreDateMonthsGenitive: janvier, février, mars, avril, mai, juin, juillet, août, septembre, octobre, novembre, décembre
        CoreDateWeekdays: lundi, mardi, mercredi, jeudi, vendredi, samedi, dimanche
        CoreDateWeekstart: lundi
        CoreDecimalSeparator: ,
        CoreError404Title: Fichier non trouvé
        CoreError404Text: Le fichier demandé n'a pas été trouvé. Oh non…
        CoreError420Title: Page non publique
        CoreError420Text: La page demandée n'est pas publique. [yellow error]
        CoreError430Title: La connexion a échoué
        CoreError430Text: L'email ou le mot de passe est incorrect. [Veuillez réessayer](#data-action-login).
        CoreError434Title: Page non trouvé
        CoreError434Text: La page demandée n'a pas été trouvée. [Vous pouvez créer cette page](#data-action-edit).
        CoreError435Title: Page non trouvé
        CoreError435Text: La page demandée a été supprimée. [Vous pouvez restaurer cette page](#data-action-restore).
        CoreError450Title: Update error
        CoreError450Text: Can't connect to the update server. An Internet connection is required.
        CoreError500Title: Erreur du serveur
        CoreError500Text: Une erreur s'est produite. [yellow error]
        CzechDescription: Czech/Čeština with language 'cs'.
        DanishDescription: Danish/Dansk with language 'da'.
        DisqusDescription: Show Disqus comments on blog.
        DraftDescription: Support for draft pages.
        DraftPageError: Veuillez vous connecter.
        DutchDescription: Dutch/Nederlands with language 'nl'.
        EditDescription: Modifiez votre site web dans un navigateur web.
        EditLoginTitle: Bienvenue
        EditLoginEmail: Email:
        EditLoginPassword: Mot de passe:
        EditLoginForgot: Mot de passe oublié ?
        EditLoginSignup: Créer un compte utilisateur ?
        EditLoginButton: Se connecter
        EditSignupTitle: Créer un compte utilisateur
        EditSignupName: Nom:
        EditSignupEmail: Email:
        EditSignupPassword: Mot de passe:
        EditSignupConsent: Je consens à ce que ce site web stocke mes données personnelles.
        EditSignupButton: Créer
        EditSignupStatusNone: Ici, vous pouvez créer un nouveau compte utilisateur.
        EditSignupStatusIncomplete: Veuillez remplir tous les champs.
        EditSignupStatusInvalid: S'il vous plaît, veuillez entrer une adresse email valide.
        EditSignupStatusWeak: S'il vous plaît, choisissez un mot de passe différent.
        EditSignupStatusShort: S'il vous plaît, choisissez un mot de passe plus long.
        EditSignupStatusNext: Votre compte a été créé, vérifiez vos emails.
        EditForgotTitle: Mot de passe oublié
        EditForgotEmail: Email:
        EditForgotStatusNone: Pas de problème, vous pouvez créer un nouveau mot de passe.
        EditForgotStatusInvalid: S'il vous plaît, veuillez entrer une adresse email valide.
        EditForgotStatusNext: Votre compte est à nouveau disponible, vérifiez vos emails.
        EditRecoverTitle: Mot de passe oublié
        EditRecoverPassword: Mot de passe:
        EditRecoverStatusPassword: S'il vous plaît, choisissez un nouveau mot de passe.
        EditRecoverStatusWeak: S'il vous plaît, choisissez un mot de passe différent.
        EditRecoverStatusShort: S'il vous plaît, choisissez un mot de passe plus long.
        EditRecoverStatusDone: Compte utilisateur restauré. Merci !
        EditConfirmSubject: Confirmation d'un compte utilisateur
        EditConfirmMessage: Bonjour @usershort,\n\nveuillez confirmer votre compte utilisateur. Cliquez sur le lien suivant.
        EditConfirmTitle: Compte d'utilisateur
        EditConfirmStatusDone: Votre compte utilisateur est confirmé et en attente d'approbation. Merci !
        EditApproveSubject: Approuver un nouvel utilisateur
        EditApproveMessage: Bonjour @usershort,\n\nveuillez approuver la création d'un nouveau compte utilisateur pour @useraccount. Cliquez sur le lien suivant.
        EditApproveTitle: Compte d'utilisateur
        EditApproveStatusDone: Compte utilisateur approuvé. Merci !
        EditReactivateSubject: Réactivation d'un compte utilisateur
        EditReactivateMessage: Bonjour @usershort,\n\nveuillez réactivér votre compte utilisateur. Il y a eu trop de tentatives de connexion échouées. Cliquez sur le lien suivant.
        EditReactivateTitle: Compte d'utilisateur
        EditReactivateStatusDone: Compte d'utilisateur réactivé. Merci !
        EditVerifySubject: Changement d'un compte utilisateur
        EditVerifyMessage: Bonjour @usershort,\n\nveuillez confirmer une nouvelle adresse email pour votre compte utilisateur. Cliquez sur le lien suivant.
        EditVerifyTitle: Compte d'utilisateur
        EditVerifyStatusDone: Compte utilisateur changé. Merci !
        EditChangeSubject: Changement d'un compte utilisateur
        EditChangeMessage: Bonjour @usershort,\n\nveuillez confirmer que vous souhaitez modifier votre compte utilisateur. Cliquez sur le lien suivant.
        EditChangeTitle: Compte d'utilisateur
        EditChangeStatusDone: Compte utilisateur changé. Merci !
        EditRemoveSubject: Supprimer le compte d'utilisateur
        EditRemoveMessage: Bonjour @usershort,\n\nveuillez confirmer que vous souhaitez supprimer votre compte d'utilisateur. Cliquez sur le lien suivant.
        EditRemoveTitle: Compte d'utilisateur
        EditRemoveStatusDone: Compte d'utilisateur supprimé. Merci !
        EditRecoverSubject: Restauration d'un compte utilisateur
        EditRecoverMessage: Bonjour @usershort,\n\nveuillez confirmer que vous avez oublié votre mot de passe. Cliquez sur le lien suivant.
        EditWelcomeSubject: Bienvenue
        EditWelcomeMessage: Bonjour @usershort,\n\nvotre compte utilisateur a bien été créé. Amusez-vous bien en éditant le site web.
        EditGoodbyeSubject: Au revoir
        EditGoodbyeMessage: Bonjour @usershort,\n\nvotre compte utilisateur a bien été supprimé. Prends soin.
        EditAccountTitle: Utilisateur
        EditAccountInformation: Vous pouvez supprimer votre compte d'utilisateur.
        EditAccountMore: Lire la suite…
        EditAccountStatusNone: Ici, vous pouvez changer votre compte utilisateur.
        EditAccountStatusInvalid: S'il vous plaît, veuillez entrer une adresse email valide.
        EditAccountStatusTaken: S'il vous plaît, veuillez entrer une adresse email différent.
        EditAccountStatusWeak: S'il vous plaît, choisissez un mot de passe différent.
        EditAccountStatusShort: S'il vous plaît, choisissez un mot de passe plus long.
        EditAccountStatusNext: Votre compte a été changé, vérifiez vos emails.
        EditQuitTitle: Supprimer le compte d'utilisateur
        EditQuitStatusNone: S'il vous plaît entrez votre nom pour confirmer.
        EditQuitStatusMismatch: S'il vous plaît entrer un nom différent.
        EditQuitStatusNext: Votre compte sera supprimé, vérifier vos emails.
        EditConfigureTitle: Site web
        EditConfigureSitename: Nom du site:
        EditConfigureAuthor: Nom du webmaster:
        EditConfigureEmail: Email du webmaster:
        EditConfigureInformation: Le webmaster peut approuver les nouveaux comptes d'utilisateurs.
        EditConfigureStatusNone: Ici, vous pouvez configurer votre site web.
        EditConfigureStatusInvalid: S'il vous plaît, veuillez entrer une adresse email valide.
        EditUpdateTitle: Mises à jour
        EditUpdateStatusNone: Datenstrom Yellow est fait pour les gens qui font de petits sites web.
        EditUpdateStatusCheck: Vérification des mises à jour…
        EditUpdateStatusUpdates: Les mises à jour suivantes sont disponibles:
        EditUpdateStatusOk: Votre site web est à jour.
        EditOkButton: Ok
        EditCancelButton: Annuler
        EditChangeButton: Modifier
        EditCreateButton: Créer
        EditEditButton: Sauvegarder
        EditDeleteButton: Supprimer
        EditUpdateButton: Mettre à jour
        EditEdit: Éditer page
        EditCreate: +
        EditDelete: -
        EditKeyboardLabels: Ctrl+, Alt+, Maj+, ⌘, ⌥, ⇧
        EditToolbarFormat: Format
        EditToolbarHeading: Titre
        EditToolbarH1: Titre 1
        EditToolbarH2: Titre 2
        EditToolbarH3: Titre 3
        EditToolbarParagraph: Texte normal
        EditToolbarPre: Code source
        EditToolbarNotice: Avis
        EditToolbarQuote: Citation
        EditToolbarBold: Gras
        EditToolbarItalic: Italique
        EditToolbarStrikethrough: Barré
        EditToolbarCode: Code
        EditToolbarList: Liste
        EditToolbarUl: • Liste à puces
        EditToolbarOl: 1. Liste numérotée
        EditToolbarTl: ✓ Liste des tâches
        EditToolbarLink: Lien
        EditToolbarFile: Fichier
        EditToolbarEmojiawesome: Emoji
        EditToolbarFontawesome: Icone
        EditToolbarStatus: Statut
        EditToolbarUndo: Annuler
        EditToolbarRedo: Refaire
        EditToolbarPreview: Aperçu
        EditToolbarHelp: Aide
        EditMailFooter: @sitename
        EditDataGenerated: Cette page est créée automatiquement.
        EditUploadProgress: Téléchargement du fichier…
        EditUserDescription: Editor
        EditMenuSettings: Paramètres
        EditMenuHelp: Aide
        EditMenuLogout: Déconnexion
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
        ImageDefaultAlt: Image sans description
        InstagramDescription: Embed Instagram photos.
        InstallTitle: Bonjour
        InstallLanguage: Quelle langue parles-tu ?
        InstallExtension: Que voulez-vous faire ?
        InstallExtensionWebsite: Petit site web
        InstallExtensionBlog: Petit blog
        InstallExtensionWiki: Petit wiki
        InstallButton: Installer
        InstallHomeTitle: Accueil
        InstallHomeText: [image photo.jpg Exemple rounded]\n\n[edit - Vous pouvez modifier cette page dans un navigateur web] ou utiliser un éditeur de texte. [Obtenir de l'aide](https://datenstrom.se/yellow/help/).
        InstallAboutTitle: À propos
        InstallAboutText: [Fabriqué avec Datenstrom Yellow](https://datenstrom.se/yellow/).
        InstallDefaultTitle: Page
        InstallDefaultText: Ceci est une nouvelle page.
        InstallBlogTitle: Page de blog
        InstallBlogText: Ceci est une nouvelle page de blog.
        InstallWikiTitle: Page de wiki
        InstallWikiText: Ceci est une nouvelle page de wiki.
        InstallExampleImage: Ceci est un exemple d'image
        ItalianDescription: Italian/Italiano with language 'it'.
        JapaneseDescription: Japanese/日本語 with language 'ja'.
        MarkdownDescription: Formatage de texte pour les humains.
        MetaDescription: Meta data for humans and machines.
        NorwegianDescription: Norwegian/Norsk with language 'nb'.
        ParsedownDescription: Formatage de texte pour les humains.
        ParisDescription: Paris is an elegant theme.
        PolishDescription: Polish/Polski with language 'pl'.
        PortugueseDescription: Portuguese/Português with language 'pt'.
        PreviousnextDescription: Afficher les liens vers la page précédente/suivante.
        PreviousnextNavigation:Page
        PreviousnextPagePrevious: ← Précédent: @title
        PreviousnextPageNext: Suivant: @title →
        PrivateDescription: Prise en charge des pages protégées par un mot de passe.
        PrivatePageError: Veuillez entrer le mot de passe.
        PublishDescription: Make and publish extensions.
        RussianDescription: Russian/Русский with language 'ru'.
        SearchDescription: Full-text search.
        SearchResultsNone: Entrez un mot dans le champ de recherche.
        SearchResultsEmpty: Pas de résultats.
        SearchSpecialChanges: Changements récents
        SearchButton: Rechercher
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
        UpdateDescription: Gardez votre site web à jour.
        UpdateExtensionDefaultDescription: No description available.
        UpdateExtensionDeveloper: Developed by @x.
        UpdateExtensionDesigner: Designed by @x.
        UpdateExtensionTranslator: Translated by @x.
        WikiDescription: Wiki pour votre site web.
        WikiModified: Dernière mise à jour le
        WikiTag: Tags:
        WikiSpecialPages: Toutes les pages
        WikiSpecialChanges: Changements récents
        YoutubeDescription: Embed Youtube videos.
END;
    }
}