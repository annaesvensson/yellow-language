<?php
// Turkish extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/turkish

class YellowTurkish {
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
            $this->yellow->system->save($fileName, array("language" => "tr"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="tr") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
    
    // Return default language settings
    public function getDefault() {
        return <<< 'END'
        Language: tr
        LanguageLocale: tr_TR
        LanguageDescription: Türkçe
        LanguageTranslator: Osman Kars
        BerlinDescription: Berlin, Dieter Rams'tan esinlenen güzel bir temadır.
        BlogDescription: Websiteniz için blog.
        BlogBy: tarafından
        BlogTag: Etiketler:
        BlogMore: Devamını Oku…
        BreadcrumbDescription: Breadcrumb navigasyonu.
        BreadcrumbNavigation: Breadcrumb
        BundleDescription: Websitesindeki dosyaları grupla.
        ChineseDescription: Çince/简体中文 with language 'zh'.
        CommandDescription: Websitesi komut satırı.
        ContactDescription: Email iletişim sayfası.
        ContactName: Adınız:
        ContactEmail: Email:
        ContactMessage: Mesajınız:
        ContactConsent: Bu web sitesinin mesajımı saklamasına izin veriyorum.
        ContactButton: Mesajımı gönder
        ContactMailSpam: [Spam]
        ContactMailHeader: You have received a message from @sender:
        ContactMailFooter: Bu e-posta, @sitename - @title aracılığıyla gönderildi.
        ContactStatusNone: Merhaba. Görüşleriniz bizim için çok değerli.
        ContactStatusIncomplete: Lütfen tüm alanları doldurun.
        ContactStatusInvalid: Lütten geçerli bir mail adresi yazın.
        ContactStatusReview: Lütfen iletideki bağlantıları kaldırın.
        ContactStatusDone: E-postanız gönderildi. Teşekkürler!
        ContactStatusError: E-posta gönderilemedi, lütfen daha sonra tekrar deneyin!
        CopenhagenDescription: Copenhagen is a beautiful theme.
        CoreDescription: Web sitesinin temel işlevi..
        CoreNavigation: Ana yönlendirici
        CorePagination: Sayfa gezinme
        CorePaginationPrevious: ← Önceki
        CorePaginationNext: Sonraki →
        CoreTimeFormatShort: H:i
        CoreTimeFormatMedium: H:i:s
        CoreTimeFormatLong: H:i:s T
        CoreDateFormatShort: F Y
        CoreDateFormatMedium: Y-m-d
        CoreDateFormatLong: Y-m-d H:i
        CoreDatePast: bugün, dün, @x gün önce, 1 ay önce, @x ay önce, 1 yıl önce, @x yıl önce, on @x
        CoreDateFuture: yakında, yarın, içinde @x gün, 1 ay içinde, @x ay içinde, in 1 year, in @x years, on @x
        CoreDateMonthsNominative: Ocak, Şubat, Mart, Nisan, Mayıs, Haziran, Temmuz, Ağustos, Eylül, Ekim, Kasım, Aralık
        CoreDateMonthsGenitive: Ocak, Şubat, Mart, Nisan, Mayıs, Haziran, Temmuz, Ağustos, Eylül, Ekim, Kasım, Aralık
        CoreDateWeekdays: Pazartesi, Salı, Çarşamba, Perşembe, Cuma, Cumartesi, Pazar
        CoreDateWeekstart: Pazartesi
        CoreDecimalSeparator: ,
        CoreError404Title: Dosya Bulunamadı
        CoreError404Text: Aradığınız sayfa bulunamadı.
        CoreError420Title: Sayfa herkese açık değil
        CoreError420Text: İstenen sayfa herkese açık değil. [yellow error]
        CoreError430Title: Hatalı giriş.
        CoreError430Text: E-posta veya şifre yanlış. [Lütfen Tekrar Deneyin](#data-action-login).
        CoreError434Title: Page not found
        CoreError434Text: İstenen sayfa bulunamadı. [Bu sayfayı oluşturabilirsiniz](#data-action-edit).
        CoreError435Title: Page not found
        CoreError435Text: İstenen sayfa silindi. [Bu sayfayı geri yükleyebilirsiniz](#data-action-restore).
        CoreError450Title: Update error
        CoreError450Text: Can't connect to the update server. An Internet connection is required.
        CoreError500Title: Sunucu Hatası
        CoreError500Text: Birşeyler Ters Gitti [yellow error]
        CzechDescription: Czech/Čeština with language 'cs'.
        DanishDescription: Danish/Dansk with language 'da'.
        DisqusDescription: Blogda Disqus yorumlarını göster.
        DraftDescription:Taslak sayfalar için destek..
        DraftStatusEmpty: Hiç taslak bulunamadı.
        DraftPageError: Lütfen giriş yapın.
        DutchDescription: Dutch/Nederlands with language 'nl'.
        EditDescription: Web sitenizi bir web tarayıcısında düzenleyin..
        EditLoginTitle: Hoşgeldin
        EditLoginEmail: E-Posta:
        EditLoginPassword: Şifre:
        EditLoginForgot: Parolanızı mı unuttunuz?
        EditLoginSignup: Kullanıcı hesabı oluştur?
        EditLoginButton: Oturum aç
        EditSignupTitle: Kullanıcı hesabı oluşturun
        EditSignupName: İsim:
        EditSignupEmail: E-Posta:
        EditSignupPassword: Şifre:
        EditSignupConsent: Bu web sitesinin kişisel verilerimi saklamasına izin veriyorum.
        EditSignupButton: Oluştur
        EditSignupStatusNone: Burada yeni bir kullanıcı hesabı oluşturabilirsiniz.
        EditSignupStatusIncomplete: Lütfen tüm alanları doldurunuz.
        EditSignupStatusInvalid: Plütfen geçerli eposta adresini giriniz.
        EditSignupStatusWeak: Lütfen farklı bir şifre girin.
        EditSignupStatusShort: Lütfen daha uzun bir şifre girin.
        EditSignupStatusNext: Kullanıcı hesabı oluşturulacak, lütfen e-postalarınızı kontrol edin.
        EditForgotTitle: Parolanızı mı unuttunuz
        EditForgotEmail: E-Posta:
        EditForgotStatusNone: Sorun değil, yeni bir şifre oluşturabilirsiniz.
        EditForgotStatusInvalid: Lütfen geçerli eposta adresini giriniz.
        EditForgotStatusNext: Kullanıcı hesabı kurtarılacak, lütfen e-postalarınızı kontrol edin.
        EditRecoverTitle: Parolanızı mı unuttunuz
        EditRecoverPassword: Şifre:
        EditRecoverStatusPassword: Lütfen yeni bir şifre girin.
        EditRecoverStatusWeak: Lütfen farklı bir şifre girin.
        EditRecoverStatusShort: Lütfen daha uzun bir şifre girin.
        EditRecoverStatusDone: Kullanıcı hesabı kurtarıldı. Teşekkür ederim!
        EditConfirmSubject: Kullanıcı hesabını onaylayın
        EditConfirmMessage: Merhaba @usershort,\n\nlütfen kullanıcı hesabınızı onaylayın. Aşağıdaki bağlantıya tıklayın.
        EditConfirmTitle: Kullanıcı Hesabı
        EditConfirmStatusDone: Kullanıcı hesabı onaylandı ve onay bekleniyor. Teşekkür ederim!
        EditApproveSubject: Kullanıcı hesabını onaylayın
        EditApproveMessage: Merhaba @usershort,\n\nlütfen @useraccount için yeni kullanıcı hesabını onaylayın. Aşağıdaki bağlantıya tıklayın.
        EditApproveTitle: Kullanıcı hesabı
        EditApproveStatusDone: Kullanıcı hesabı onaylandı. Teşekkür ederim!
        EditReactivateSubject: Kullanıcı hesabını yeniden aktif et
        EditReactivateMessage: Merhaba @usershort,\n\nlütfen kullanıcı hesabınızı yeniden etkinleştirin. Çok fazla başarısız oturum açma denemesi vardı. Aşağıdaki bağlantıya tıklayın.
        EditReactivateTitle: Kullanıcı hesabı
        EditReactivateStatusDone: Kullanıcı hesabı yeniden etkinleştirildi. Teşekkür ederim!
        EditVerifySubject: Kullanıcı hesabını değiştir
        EditVerifyMessage: Merhaba @usershort,\n\nlütfen kullanıcı hesabınız için yeni bir e-postayı onaylayın. Aşağıdaki bağlantıya tıklayın.
        EditVerifyTitle: Kullanıcı hesabı
        EditVerifyStatusDone: Kullanıcı hesabı değişti. Teşekkür ederim!
        EditChangeSubject: Kullanıcı hesabını değiştir
        EditChangeMessage: Merhaba @usershort,\n\nlütfen kullanıcı hesabınızı değiştirmek istediğinizi onaylayın. Aşağıdaki bağlantıya tıklayın.
        EditChangeTitle: Kullanıcı hesabı
        EditChangeStatusDone: Kullanıcı hesabı değişti. Teşekkür ederim!
        EditRemoveSubject: Kullanıcı hesabını sil
        EditRemoveMessage: Merhaba @usershort,\n\nlütfen kullanıcı hesabınızı silmek istediğinizi onaylayın. Aşağıdaki bağlantıya tıklayın.
        EditRemoveTitle: Kullanıcı hesabı
        EditRemoveStatusDone: Kullanıcı hesabı silindi. Teşekkür ederim!
        EditRecoverSubject: Kullanıcı hesabını kurtar
        EditRecoverMessage: Merhaba @usershort,\n\nlütfen şifrenizi unuttuğunuzu onaylayın. Aşağıdaki bağlantıya tıklayın.
        EditWelcomeSubject: Hoş Geldin
        EditWelcomeMessage: Merhaba @usershort,\n\nkullanıcı hesabınız oluşturulmuştur. Web sitesini düzenlerken iyi eğlenceler.
        EditGoodbyeSubject: Güle Güle
        EditGoodbyeMessage: Merhaba @usershort,\n\nkullanıcı hesabınız silinmiştir. Kendinize iyi bakın.
        EditAccountTitle: Kullanıcı
        EditAccountInformation: Kullanıcı hesabınızı istediğiniz zaman silebilirsiniz.
        EditAccountMore: Devamı…
        EditAccountStatusNone: Burada kullanıcı hesabınızı değiştirebilirsiniz.
        EditAccountStatusInvalid: Lütfen geçerli eposta adresini giriniz.
        EditAccountStatusTaken: Lütfen farklı bir e-posta girin.
        EditAccountStatusWeak: Lütfen farklı bir şifre girin.
        EditAccountStatusShort: Lütfen daha uzun bir şifre girin.
        EditAccountStatusNext: Kullanıcı hesabı değiştirilecek, lütfen e-postalarınızı kontrol edin.
        EditQuitTitle: Kullanıcı hesabını silin
        EditQuitStatusNone: Lütfen onaylamak için adınızı girin.
        EditQuitStatusMismatch: Lütfen farklı bir isim girin.
        EditQuitStatusNext: Kullanıcı hesabı silinecek, lütfen e-postalarınızı kontrol edin.
        EditConfigureTitle: Website
        EditConfigureSitename: Website Adı:
        EditConfigureAuthor: Webmaster Adı:
        EditConfigureEmail: Webmater E-Posta :
        EditConfigureInformation: Webmaster yeni kullanıcı hesaplarını onaylayabilir.
        EditConfigureStatusNone: Burada web sitenizi yapılandırabilirsiniz.
        EditConfigureStatusInvalid: Please enter a valid email.
        EditUpdateTitle: Updates
        EditUpdateStatusNone: Datenstrom Yellow, küçük web siteleri yapan kişiler içindir.
        EditUpdateStatusCheck: Güncellemeler kontrol ediliyor…
        EditUpdateStatusUpdates: Aşağıdaki güncellemeler mevcuttur:
        EditUpdateStatusOk: Web siteniz güncel.
        EditOkButton: Tamam
        EditCancelButton: İptal
        EditChangeButton: Değiştir
        EditCreateButton: Oluştur
        EditEditButton: Kaydet
        EditDeleteButton: Sil
        EditUpdateButton: Güncelle
        EditEdit: Sayfayı düzenle
        EditCreate: +
        EditDelete: -
        EditKeyboardLabels: Ctrl+, Alt+, Shift+, ⌘, ⌥, ⇧
        EditToolbarFormat: Format
        EditToolbarHeading: Başlık
        EditToolbarH1: Başlık 1
        EditToolbarH2: Başlık 2
        EditToolbarH3: Başlık 3
        EditToolbarParagraph: Normal yazı
        EditToolbarPre: Kaynak Kodu
        EditToolbarNotice: Farkına varmak
        EditToolbarQuote: Quote
        EditToolbarBold: Kalın
        EditToolbarItalic: Italic
        EditToolbarStrikethrough: Üstü çizili
        EditToolbarCode: Code
        EditToolbarList: Liste
        EditToolbarUl: • Sırasız liste
        EditToolbarOl: 1. Sıralı list
        EditToolbarTl: ✓ Görev listesi
        EditToolbarLink: Bağlantı
        EditToolbarFile: Dosya
        EditToolbarEmojiawesome: Emoji
        EditToolbarFontawesome: Icon
        EditToolbarStatus: Durum
        EditToolbarUndo: Geri alma
        EditToolbarRedo: Yeniden yap
        EditToolbarPreview: Ön izleme
        EditToolbarHelp: Yardım
        EditMailFooter: @sitename
        EditDataGenerated: Bu sayfa otomatik olarak oluşturulur.
        EditUploadProgress: Dosya yükleniyor…
        EditUserDescription: Editor
        EditMenuSettings: Ayarlar
        EditMenuHelp: Yardım
        EditMenuLogout: Çıkış
        EditYellowUrl: https://datenstrom.se
        EditYellowHelpUrl: https://datenstrom.se/yellow/help/
        EmojiawesomeDescription: Bir sürü emoji.
        EnglishDescription: English/English with language 'en'.
        FeedDescription: Son değişikliklerle besleyin.
        FontawesomeDescription: Simgeler ve semboller.
        FrenchDescription: French/Français with language 'fr'.
        GalleryDescription: Açılır pencereli resim galerisi.
        GermanDescription: German/Deutsch with language 'de'.
        GooglecalendarDescription: Google takvimini yerleştirin.
        GooglemapDescription: Google haritasını yerleştirin.
        HelloworldDescription: Example feature for Datenstrom Yellow.
        HelpDescription: Web siteniz için yardım.
        HighlightDescription: Kaynak kodunu vurgulayın.
        HungarianDescription: Hungarian/Magyar with language 'hu'.
        ImageDescription: Görüntüler ve küçük resimler.
        ImageDefaultAlt: Açıklama olmayan resim
        InstagramDescription: Instagram fotoğraflarını yerleştirin.
        InstallTitle: Merhaba
        InstallLanguage: Dilin nedir?
        InstallExtension: Ne Yapmak İstiyorsunuz?
        InstallExtensionWebsite: Küçük website
        InstallExtensionBlog: Küçük blog
        InstallExtensionWiki: Küçük wiki
        InstallButton: Yükle
        InstallHomeTitle: Ana Sayfa
        InstallHomeText: [image photo.jpg Misal rounded]\n\n[edit - Bu sayfayı bir web tarayıcısında düzenleyebilir] veya bir metin düzenleyici kullanabilirsiniz. [Yardım almak](https://datenstrom.se/yellow/help/).
        InstallAboutTitle: Bilgi
        InstallAboutText: [Datenstrom Yellow ile yapılmıştır](https://datenstrom.se/yellow/).
        InstallDefaultTitle: Sayfa
        InstallDefaultText: Bu yeni bir sayfadır.
        InstallBlogTitle: Blog sayfası
        InstallBlogText: Bu yeni bir blog sayfasıdır.
        InstallWikiTitle: Wiki sayfası
        InstallWikiText: Bu yeni bir wiki sayfasıdır.
        InstallExampleImage: Bu bir örnek resim
        ItalianDescription: Italian/Italiano with language 'it'.
        JapaneseDescription: Japanese/日本語 with language 'ja'.
        MarkdownDescription: İnsanlar için metin biçimlendirme.
        MetaDescription: İnsanlar ve makineler için meta veriler.
        NorwegianDescription: Norwegian/Norsk with language 'nb'.
        ParsedownDescription: İnsanlar için metin biçimlendirme.
        ParisDescription: Paris zarif bir temadır.
        PolishDescription: Polish/Polski with language 'pl'.
        PortugueseDescription: Portuguese/Português with language 'pt'.
        PreviousnextDescription: Önceki / sonraki sayfaya bağlantıları göster.
        PreviousnextNavigation: Sayfa gezinme
        PreviousnextPagePrevious: ← Önceki: @title
        PreviousnextPageNext: Sonraki: @title →
        PublishDescription: Uzantıları oluşturun ve yayınlayın.
        RussianDescription: Russian/Русский with language 'ru'.
        SearchDescription: Tam metin araması.
        SearchResultsNone: Bir arama terimi girin.
        SearchResultsEmpty: Hiç sonuç bulunamadı.
        SearchSpecialChanges: Son değişiklikler
        SearchButton: Ara
        ServeDescription: Built-in web server.
        SitemapDescription: Site Haritası
        SliderDescription: Slider içeren resim galerisi.
        SlovakDescription: Slovak/Slovenčina with language 'sk'.
        SoundcloudDescription: Soundcloud ses parçalarını yerleştirin.
        SpanishDescription: Spanish/Español with language 'es'.
        StockholmDescription: Stockholm temiz bir tema.
        SwedishDescription: Swedish/Svenska with language 'sv'.
        TocDescription: İçerik Tablosu.
        TrafficDescription: Günlük dosyalarından trafik analitiği oluşturun.
        TurkishDescription: Turkish/Türkçe with language 'tr'.
        TwitterDescription: Twitter mesajı göm.
        UpdateDescription: Websitenizi güncel tutunuz.
        UpdateExtensionDefaultDescription: No description available.
        UpdateExtensionDeveloper: Developed by @x.
        UpdateExtensionDesigner: Designed by @x.
        UpdateExtensionTranslator: Translated by @x.
        WikiDescription: Websiteniz için wiki.
        WikiModified: Son Değişiklik
        WikiTag: Etiketler:
        WikiSpecialPages: Tüm Tayfalar
        WikiSpecialChanges: Son Değişiklikler
        YoutubeDescription: Youtube videosu göm.
END;
    }
}
