<?php
// Chinese extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/chinese

class YellowChinese {
    const VERSION = "0.8.35";
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
            $this->yellow->system->save($fileName, array("language" => "zh"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="zh") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
    
    // Return default language settings
    public function getDefault() {
        return <<< 'END'
        Language: zh
        LanguageLocale: zh_CN
        LanguageDescription: 简体中文
        LanguageTranslator: Hyson Lee
        BerlinDescription: Berlin是一个漂亮的主题，灵感来自Dieter Rams.
        BlogDescription: 你网站的博客.
        BlogBy: 作者:
        BlogTag: 标签:
        BlogMore: 阅读全文…
        BreadcrumbDescription: Breadcrumb (面包屑)导航插件.
        BundleDescription: Bundle插件捆包CSS文件.
        ChineseDescription: Chinese/简体中文 with language 'zh'.
        CommandDescription: 网站的命令行功能.
        ContactDescription: 邮件联系插件提供联系页面.
        ContactName: 姓名:
        ContactEmail: 邮箱:
        ContactMessage: 信息:
        ContactConsent: 我同意这个网站存储我的信息。
        ContactButton: 发送我的信息
        ContactMailSpam: [Spam]
        ContactMailHeader: You have received a message from @sender:
        ContactMailFooter: 这封邮件发送自 @sitename - @title
        ContactStatusNone: 您好！非常感谢您的反馈
        ContactStatusIncomplete: 请填写完所有栏位
        ContactStatusInvalid: 请输入一个有效的e-mail地址
        ContactStatusReview: 请从邮件中删除链接
        ContactStatusDone: 您的信息已发送。非常感谢！
        ContactStatusError: 信息无法发送，请稍后再试！
        CopenhagenDescription: Copenhagen is a beautiful theme.
        CoreDescription: 网站的核心功能。
        CorePaginationPrevious: ← 上一页
        CorePaginationNext: 下一页 →
        CoreTimeFormatShort: H:i
        CoreTimeFormatMedium: H:i:s
        CoreTimeFormatLong: H:i:s T
        CoreDateFormatShort: F Y
        CoreDateFormatMedium: Y年n月j日
        CoreDateFormatLong: Y-m-d H:i
        CoreDatePast: 今天, 昨天, @x 天前, 1 个月前, @x 个月前, 1 年前, @x 年前, 在 @x 前
        CoreDateFuture: 很快, 明天, 在 @x 天后, 在 1 月后, 在 @x 月后, 在 1 年后, 在 @x 年后, 在 @x 后
        CoreDateMonthsNominative: 一月, 二月, 三月, 四月, 五月, 六月, 七月, 八月, 九月, 十月, 十一月, 十二月
        CoreDateMonthsGenitive: 一月, 二月, 三月, 四月, 五月, 六月, 七月, 八月, 九月, 十月, 十一月, 十二月
        CoreDateWeekdays: 星期一, 星期二, 星期三, 星期四, 星期五, 星期六, 星期日
        CoreDateWeekstart: 星期日
        CoreDecimalSeparator: .
        CoreError404Title: 文件未找到
        CoreError404Text: 找不到请求的文件。 不好了...
        CoreError420Title: Page not public
        CoreError420Text: The requested page is not public. [yellow error]
        CoreError430Title: 登录失败
        CoreError430Text: 邮箱或密码错误。 [请重试](#data-action-login).
        CoreError434Title: 找不到网页
        CoreError434Text: 找不到请求的页面。[你可以创建这个页面](#data-action-edit).
        CoreError435Title: 找不到网页
        CoreError435Text: 所请求的页面已被删除。[您可以还原此页面](#data-action-restore).
        CoreError450Title: Update error
        CoreError450Text: Can't connect to the update server. An Internet connection is required.
        CoreError500Title: 服务器错误
        CoreError500Text: 出错了. [yellow error]
        CzechDescription: 捷克语/Čeština with language 'cs'.
        DanishDescription: 丹麦语/Dansk with language 'da'.
        DisqusDescription: Disqus插件在博客显示评论.
        DraftDescription: Draft插件支持草稿页面.
        DraftStatusEmpty: 未找到草稿。
        DraftPageError: Please log in.
        DutchDescription: 荷兰语/Nederlands with language 'nl'.
        EditDescription: 在网络浏览器中编辑您的网站。
        EditLoginTitle: 欢迎
        EditLoginEmail: 邮箱:
        EditLoginPassword: 密码:
        EditLoginForgot: 忘记密码？
        EditLoginSignup: 创建新帐号？
        EditLoginButton: 登入
        EditSignupTitle: 创建用户帐号
        EditSignupName: 用户名:
        EditSignupEmail: 邮箱:
        EditSignupPassword: 密码:
        EditSignupConsent: 我同意这个网站存储我的个人资料。
        EditSignupButton: 提交注册
        EditSignupStatusNone: 可以创建一个新帐号
        EditSignupStatusIncomplete: 请填写完所有栏位
        EditSignupStatusInvalid: 请输入有效的电子邮件
        EditSignupStatusWeak: 请输入不同的密码
        EditSignupStatusShort: 请输入更长的密码
        EditSignupStatusNext: 新帐号即将创建完成，请查收确认邮件
        EditForgotTitle: 忘了密码
        EditForgotEmail: 邮箱:
        EditForgotStatusNone: 没关系，你可以创建一个新密码
        EditForgotStatusInvalid: 请输入有效的电子邮件
        EditForgotStatusNext: 用户帐号即将重置，请查收确认邮件
        EditRecoverTitle: 忘记密码
        EditRecoverPassword: 密码:
        EditRecoverStatusPassword: 请输入新密码
        EditRecoverStatusWeak: 请输入不同的密码
        EditRecoverStatusShort: 请输入更长的密码
        EditRecoverStatusDone: 用户帐号已重置，谢谢！
        EditConfirmSubject: 确认用户帐号
        EditConfirmMessage: 您好 @usershort,\n\n请验证你的帐号，点击以下链接。
        EditConfirmTitle: 用户帐号
        EditConfirmStatusDone: 您的帐号已验证，谢谢！
        EditApproveSubject: 审批用户帐号
        EditApproveMessage: 您好 @usershort,\n\n请为 @useraccount 批准一个新帐号。点击以下链接。
        EditApproveTitle: 用户帐号
        EditApproveStatusDone: 用户帐号已批准，谢谢！
        EditReactivateSubject: 激活用户帐号
        EditReactivateMessage: 您好 @usershort,\n\n登录尝试失败太多。请点击以下的链接激活您的帐号。
        EditReactivateTitle: 用户帐号
        EditReactivateStatusDone: 用户帐号重新激活，谢谢！
        EditVerifySubject: 更改用户帐号
        EditVerifyMessage: 您好 @usershort,\n\n确定要更改您的用户帐号，请点击以下的链接。
        EditVerifyTitle: 用户帐号
        EditVerifyStatusDone: 用户帐号已更改，谢谢！
        EditChangeSubject: 更改用户帐号
        EditChangeMessage: 您好 @usershort,\n\n确定要更改您的用户帐号，请点击以下的链接。
        EditChangeTitle: 用户帐号
        EditChangeStatusDone: 用户帐号已更改，谢谢！
        EditRemoveSubject: 删除帐号
        EditRemoveMessage: 您好 @usershort,\n\n请确认删除你的帐号。点击以下链接。
        EditRemoveTitle: 用户帐号
        EditRemoveStatusDone: 用户帐号已删除。谢谢！
        EditRecoverSubject: 重置用户帐号
        EditRecoverMessage: 您好 @usershort,\n\n确定忘了密码请点击以下链接。
        EditWelcomeSubject: 欢迎
        EditWelcomeMessage: 您好 @usershort,\n\n你的帐号已创建完毕，建站愉快。
        EditGoodbyeSubject: 再见
        EditGoodbyeMessage: 您好 @usershort,\n\n您的用户帐号已被删除。保重。
        EditAccountTitle: 用户
        EditAccountInformation: 你可以随时删除你的用户帐号。
        EditAccountMore: 了解更多…
        EditAccountStatusNone: 您可以在此处更改您的用户帐户。
        EditAccountStatusInvalid: 请输入有效的电子邮件
        EditAccountStatusTaken: 请输入不同的电子邮件
        EditAccountStatusWeak: 请输入不同的密码
        EditAccountStatusShort: 请输入更长的密码
        EditAccountStatusNext: 用户帐号将被更改，请查看您的电子邮件
        EditQuitTitle: 删除帐号
        EditQuitStatusNone: 请输入用户名以确认。
        EditQuitStatusMismatch: 请输入一个不同的用户名。
        EditQuitStatusNext: 用户帐号将被删除，请查收您的邮件。
        EditConfigureTitle: 网站
        EditConfigureSitename: 网站名:
        EditConfigureAuthor: 管理员:
        EditConfigureEmail: 管理员邮箱:
        EditConfigureInformation: 网站管理员可以批准新的用户帐号。
        EditConfigureStatusNone: 在这里您可以配置您的网站。
        EditConfigureStatusInvalid: 请输入有效的电子邮箱。
        EditUpdateTitle: 更新
        EditUpdateStatusNone: Datenstrom Yellow 适合于制作小型网站的人们。
        EditUpdateStatusCheck: 正在检查更新…
        EditUpdateStatusUpdates：以下更新可用：
        EditUpdateStatusOk: 已是最新版
        EditOkButton: 确定
        EditCancelButton: 取消
        EditChangeButton: 更改
        EditCreateButton: 创建
        EditEditButton: 保存
        EditDeleteButton: 删除
        EditUpdateButton: 更新
        EditEdit: 编辑页面
        EditCreate: + 新建
        EditDelete: - 删除
        EditKeyboardLabels: Ctrl+, Alt+, Shift+, ⌘, ⌥, ⇧
        EditToolbarFormat: 格式
        EditToolbarHeading: 标题
        EditToolbarH1: 标题 1
        EditToolbarH2: 标题 2
        EditToolbarH3: 标题 3
        EditToolbarParagraph: 常规文本
        EditToolbarPre: 源代码
        EditToolbarNotice: 通知
        EditToolbarQuote: 引用
        EditToolbarBold: 粗体
        EditToolbarItalic: 斜体
        EditToolbarStrikethrough: 删除线
        EditToolbarCode: 代码
        EditToolbarList: 列表
        EditToolbarUl: • 无序列表
        EditToolbarOl: 1. 有序列表
        EditToolbarTl: ✓ 任务列表
        EditToolbarLink: 链接
        EditToolbarFile: 文件
        EditToolbarEmojiawesome: 表情符
        EditToolbarFontawesome: 图标
        EditToolbarStatus: 状态
        EditToolbarUndo: 恢复
        EditToolbarRedo: 重做
        EditToolbarPreview: 预览
        EditToolbarHelp: 帮助
        EditMailFooter: @sitename
        EditDataGenerated: 此页面自动生成。
        EditUploadProgress: 文件上传中…
        EditUserDescription: Editor
        EditMenuSettings: 设置
        EditMenuHelp: 帮助
        EditMenuLogout: 登出
        EditYellowUrl: https://datenstrom.se/yellow/
        EditYellowHelpUrl: https://datenstrom.se/yellow/help/
        EmojiawesomeDescription: Emoji插件提供很多很多的表情符号.
        EnglishDescription: 英文/English with language 'en'.
        FeedDescription: Feed插件订阅最近更新的文章.
        FontawesomeDescription: Fa插件提供图标和符号.
        FrenchDescription: 法语/Français with language 'fr'.
        GalleryDescription: 带图片弹窗的相册插件.
        GermanDescription: 德语/Deutsch with language 'de'.
        GooglecalendarDescription: 嵌入Google日历的插件.
        GooglemapDescription: 嵌入Google地图的插件.
        HelpDescription: Help插件提供网站帮助.
        HighlightDescription: 高亮显示源代码的插件.
        HungarianDescription: 匈牙利语/Magyar with language 'hu'.
        ImageDescription: 处理图片和缩略图的插件.
        ImageDefaultAlt: 图片无描述
        InstagramDescription: 嵌入Instagram图片的插件.
        InstallTitle: 你好
        InstallLanguage: 你说什么语言？
        InstallExtension: 打算用来做什么呢？
        InstallExtensionWebsite: 小网站
        InstallExtensionBlog: 小博客
        InstallExtensionWiki: 小维基
        InstallButton: 安装
        InstallHomeTitle: 首页
        InstallHomeText: [image photo.jpg 图片示例 rounded]\n\n[edit - 您可以在网络浏览器中编辑此页面] 或使用文本编辑器。 [得到帮助](https://datenstrom.se/yellow/help/)。
        InstallAboutTitle: 信息
        InstallAboutText: [制作 Datenstrom Yellow](https://datenstrom.se/yellow/)。
        InstallDefaultTitle: 页面
        InstallDefaultText: 这是一个新的页面。
        InstallBlogTitle: 博客页面
        InstallBlogText: 这是一个新的博客页面。
        InstallWikiTitle: 维基页面
        InstallWikiText: 这是一个新的维基页面。
        InstallExampleImage: 这是一个范例图片
        ItalianDescription: 意大利语/Italiano with language 'it'.
        JapaneseDescription: 日语/日本語 with language 'ja'.
        MarkdownDescription: 方便人们阅读的文本格式化插件.
        MetaDescription: 人和机器的元数据.
        NorwegianDescription: 挪威语/Norsk with language 'nb'.
        ParsedownDescription: 方便人们阅读的文本格式化插件.
        ParisDescription: Paris是一个优雅的主题.
        PolishDescription: 波兰语/Polski with language 'pl'.
        PortugueseDescription: 葡萄牙语/Português with language 'pt'.
        PreviousnextDescription: 显示上/下一页面链接的插件.
        PreviousnextPagePrevious: ← 上一页 @title
        PreviousnextPageNext: 下一页 @title →
        PublishDescription: 制作和发布扩展.
        RussianDescription: 俄语/Русский with language 'ru'.
        SearchDescription: 全文搜索.
        SearchResultsNone: 请输入搜索关键字
        SearchResultsEmpty: 搜索查无结果
        SearchSpecialChanges: 最近更改
        SearchButton: 搜索
        ServeDescription: Built-in web server.
        SitemapDescription: 生成网站地图.
        SliderDescription: 带滑动条的图片相册.
        SlovakDescription: 斯洛伐克语/Slovenčina with language 'sk'.
        SoundcloudDescription: 嵌入Soundcloud网站音轨的插件.
        SpanishDescription: 西班牙语/Español with language 'es'.
        StockholmDescription: Stockholm是一个简洁的主题.
        SwedishDescription: 瑞典语/Svenska with language 'sv'.
        TocDescription: 内容目录插件.
        TrafficDescription: 从日志文件创建流量分析.
        TurkishDescription: Turkish/Türkçe with language 'tr'.
        TwitterDescription: 嵌入Twitter推文.
        UpdateDescription: 使您的网站保持最新。
        UpdateExtensionDefaultDescription: No description available.
        UpdateExtensionDeveloper: Developed by @x.
        UpdateExtensionDesigner: Designed by @x.
        UpdateExtensionTranslator: Translated by @x.
        WikiDescription: 您网站的Wiki.
        WikiModified: 最后更新
        WikiTag: 标签:
        WikiSpecialPages: 所有页面
        WikiSpecialChanges: 最近更改
        YoutubeDescription: 嵌入Youtube网站视频.
END;
    }
}
