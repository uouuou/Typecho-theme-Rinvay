## Rinvay Theme

![](https://www.rinvay.cc/usr/themes/Rinvay/screenshot.jpg)

### 本项目 CDN 加速及安全防护由 Tencent EdgeOne 赞助

[亚洲最佳 CDN、边缘和安全解决方案 - Tencent EdgeOne](https://edgeone.ai/zh?from=github)
![](https://edgeone.ai/media/34fe3a45-492d-4ea4-ae5d-ea1087ca7b4b.png)

**主题介绍**

Rinvay 是一款基于 pinghsu 主题的修改版，📰<a href="https://www.linpx.com/p/more-detailed-pinghsu-theme-set-tutorial.html/comment-page-7" target="_blank">pinghsu</a>,更新详见 Github📰<a href="https://github.com/uouuou" target="_blank">Github</a>和我的 Blog📰<a href="https://www.rinvay.cc" target="_blank">Rinvay.H</a>

**下载地址**

https://github.com/uouuou/Typecho-theme-Rinvay

**主题预览**

https://www.rinvay.cc

**注意事项**

请配合表情插件[Rinvay][1]从而实现文章输入表情以及实现 ALT+C 直接插入代码，请移步[Github][2]下载。

## 主题亮点

#### 2025/07/15
- 发布v2.0.7
- 修复了部分样式问题
- 修复了部分 BUG
- 修复了部分图片懒加载问题
- 修改X的部分信息

#### 2025/07/14

-   跟进 pinghsu 的部分修改
-   优化懒加载的部分能力，优化 links 页面的能力，解决第一次进入不加载图片的问题
-   解决 TOC 部分的定位问题
-   优化一些其他问题，删除个站支持
-   npm install -g clean-css-cli 安装压缩 css 文件
-   cleancss -o css/style.min.css css/style.css 压缩 css 文件

#### 2018/09/11

-   更新预览图。
-   更新可以设置备案号。
-   移除最近评论列表中博主的评论。

#### 2018/09/02

-   更新微信二维码接口。
-   修复一些样式问题。
-   修复移动版本按钮问题。

#### 2018/07/27

-   全局支持表情输入，包含文章输入，回复输入等。
-   添加新的表情插件[Rinvay][1]，请移步[Github][2]下载。
-   本插件修复了在手机发布文章时候的输入的功能条异常，同时手机端也支持表情插入。
-   输入的时候支持 ALT+C 直接插入代码。
-   提示，若不安装本插件，将可能带来一部分 BUG，请使用主题务必安装本插件。

#### 2018/07/25

-   全面抛弃不够迅速的 JS 加载图片，采用 PHP 后台图片加载。
-   增加 blazy.min.js 实现友链加载效果。
-   抛弃第二个 JSON，只保留一个核心库。
-   优化加载性能。

#### 2018/07/24

-   更新支持多种表情格式，原生`OwO`回复或者使用自定义格式前端渲染输出也可以选择`img`标签输出。
-   修复一些样式错误。
-   更新个站 API 功能。
-   全新贴吧表情。
-   全面修复 InstantClick 兼容性，所有现有功能全面兼容。

#### 2018/07/20

-   更新个站 API 支持 InstantClick。
-   更新主题支持表情回复，使用[OwO](https://github.com/DIYgod/OwO 'OwO')支持。
-   目前 pjax 关闭是开启 jq pajx 开启是使用 InstantClick，请酌情选择。

#### 2018/07/17

-   全球第一个支持个站友链项目<a style="color:#FA8072" href="http://storeweb.cn" target="_blank">『小红帽友链』</a>的主题，若需要支持请跳转大小红帽友链注册并设置你关注站点为友链即可实现，具体设置参照下方设置方法。
-   新增个站 API 选择

#### 2018/07/16

-   修复主题发文章内超链接没有下划线，样式不正确。
-   更改文章内部段落间隙。
-   根据[Jrotty](https://qqdie.com/archives/typecho-attachments-attachment-address.html 'Jrotty')大佬的这个帖子让附件无法评论。
-   更新部分样式。

#### 2018/07/03 新增

-   优化 Emoji 显示。
-   新增图片友情链接，参考[Jrotty](https://qqdie.com/about.html 'Jrotty')大佬的方案设计。
-   新增时间轴页面。
-   修复部分 BUG

#### 2018/06/19 新增

-   增加 Emoji 设置，可以设置以图片为原型的 Emoji
-   增加全新的代码高亮，支持 AHK 等冷门语种（其实是我自己用得上，如果你不需要这么多可以在我 Blog 去留言，我帮你弄小的）
-   由于原主题的三栏页面的两个正方形旋转后斜线在 css 下一直有锯齿，所以这个版本我已经删除这个三角效果并修改图片高度为 170PX
-   thumb 的图片增加到 50 组，你也可以使用自己的。
-   修改主题原有图片居中和图片自动加像素模式以适应 Emoji，若需要图片居中，请到[Here](https://www.rinvay.cc/archives/134/)查看
-   主题的一些其他问题欢迎访问我的 Blog 反馈[Rinvay.H](https://www.rinvay.cc/archives/134/)
-   修复主题的一些其他 BUG。

#### 曾经的亮点

-   页面预加载与 DNS 预解析保证极快访问速度
-   无 JQuery，无前端框架，轻量级
-   几乎零代码冗余，几乎每句代码都是有意义的
-   HighlightJS 代码高亮，支持 22 种编程代码
-   响应式设计，支持平板与手机，访问体验甚至优于桌面
-   支持图片 CDN 镜像，支持多种文章缩略图设置
-   支持首页三栏和单栏选择，文章题图和色块
-   支持文章目录、相关文章与数学公式渲染
-   支持文章个性化标徽设置，10 种标徽选择
-   支持个人社交按钮，社交分享
-   主题设置添加 XSS 检测，评论提交防止触发多次
-   还有更多亮点等你去发现~

## 主题使用

**注意事项**：目前主题仅在 typecho 开发版，PHP7.0 下测试通过，其他情况未作太多测试

到 Github 下载，点击"Download ZIP"下载，解压后将文件夹改名为`Rinvay`后上传到 `/usr/themes`，并启用主题。

如果需要更新主题，则先下载最新文件，然后覆盖原文件即可完成更新，部分新增加的功能需要到后台开启才会生效

## 外观设置

外观设置主要分为四部分，分别为 logo、icon 的设置，功能开关，社交按钮设置，图片 CDN 镜像

使用注意事项都在设置里写得比较清楚了，如果遇到不明白的地方，可以给我留言反馈

下面有几点补充

-   CDN 设置部分仅仅测试了七牛的，理论上也支持有镜像服务的 CDN
-   创建模板归档页，无论选择了哪个模板都要加上自定义字段`archive`

**友情链接**
创建新界面的时候选择 link 页为模板，然后按照如下方式输入即可完成友情链接创建。

```php
- ![Rinvay][211][Rinvay][112]
[112]: https://www.rinvay.cc/
[211]: https://pic.leus.cc/images/9a48573151fb54e21a4112a0a0226e7f.md.png
```

**独立搜索页**

设置方法看这里：[Here](https://www.linpx.com/p/add-a-separate-search-page-to-the-pinghsu-theme.html)

**文章缩略图**

文章设置缩略图方法有四种，自定义字段`thumb`，文章附件第一张图片，文章内图片，默认缩略图

优先级顺序 ：自定义字段 thumb -> 附件第一张图片 -> 文章图片 -> 默认缩略图 -> 随机图片 -> 无

缩略图尺寸大小，高度至少有 250px，宽度大于高度，推荐高度为 400px 的

**个性化标徽**

个性化标徽出现的地方有首页、分类页，标签页，作者页和相关文章

设置方法是在文章编辑内填写自定义字段，支持的字段如下

`book` 、 `game` 、 `note` 、 `chat` 、 `code` 、 `image` 、 `web` 、 `link` 、 `design` 、 `lock`

**个性化色块**

个性化色块需要到外观设置那开启才能激活使用，色块出现的地方有首页，分类页，标签页，独立搜索页等等~~

设置方法是在文章编辑内填写自定义字段，支持的字段如下

`blue`、`purple`、`green`、`yellow`、`red`

备注：由于去掉了三栏色块，在主页的色块设置将不被显示
