## Pinghsu Theme

![](https://www.rinvay.cc/usr/themes/Rinvay/screenshot.jpg)

**主题介绍**

Rinvay是一款基于pinghsu主题的修改版，📰<a href="https://www.linpx.com/p/more-detailed-pinghsu-theme-set-tutorial.html/comment-page-7" target="_blank">pinghsu</a>,更新详见Github📰<a href="https://github.com/uouuou" target="_blank">Github</a>和我的Blog📰<a href="https://www.rinvay.cc" target="_blank">Rinvay.H</a>

**下载地址**

https://github.com/uouuou/Typecho-theme-Rinvay

**主题预览**

https://www.rinvay.cc

## 主题亮点
#### 2018/07/16
 - 修复主题发文章内超链接没有下划线，样式不正确。
 - 更改文章内部段落间隙。
 - 根据[Jrotty](https://qqdie.com/archives/typecho-attachments-attachment-address.html "Jrotty")大佬的这个帖子让附件无法评论。
 - 更新部分样式。
#### 2018/07/03新增
 - 优化Emoji显示。
 - 新增图片友情链接，参考[Jrotty](https://qqdie.com/about.html "Jrotty")大佬的方案设计。
 - 新增时间轴页面。
 - 修复部分BUG
#### 2018/06/19新增
 - 增加Emoji设置，可以设置以图片为原型的Emoji 
 - 增加全新的代码高亮，支持AHK等冷门语种（其实是我自己用得上，如果你不需要这么多可以在我Blog去留言，我帮你弄小的）
 - 由于原主题的三栏页面的两个正方形旋转后斜线在css下一直有锯齿，所以这个版本我已经删除这个三角效果并修改图片高度为170PX
 - thumb的图片增加到50组，你也可以使用自己的。
 - 修改主题原有图片居中和图片自动加像素模式以适应Emoji，若需要图片居中，请到[Here](https://www.rinvay.cc/archives/134/)查看
 - 主题的一些其他问题欢迎访问我的Blog反馈[Rinvay.H](https://www.rinvay.cc/archives/134/)
 - 修复主题的一些其他BUG。
#### 曾经的亮点
 - 页面预加载与DNS预解析保证极快访问速度
 - 无JQuery，无前端框架，轻量级
 - 几乎零代码冗余，几乎每句代码都是有意义的
 - HighlightJS代码高亮，支持22种编程代码
 - 响应式设计，支持平板与手机，访问体验甚至优于桌面
 - 支持图片CDN镜像，支持多种文章缩略图设置
 - 支持首页三栏和单栏选择，文章题图和色块
 - 支持文章目录、相关文章与数学公式渲染
 - 支持文章个性化标徽设置，10种标徽选择
 - 支持个人社交按钮，社交分享
 - 主题设置添加XSS检测，评论提交防止触发多次
 - 还有更多亮点等你去发现~


## 主题使用

**注意事项**：目前主题仅在 typecho 开发版，PHP7.0 下测试通过，其他情况未作太多测试

到 Github 下载，点击"Download ZIP"下载，解压后将文件夹改名为`Rinvay`后上传到 `/usr/themes`，并启用主题。

如果需要更新主题，则先下载最新文件，然后覆盖原文件即可完成更新，部分新增加的功能需要到后台开启才会生效

## 外观设置

外观设置主要分为四部分，分别为 logo、icon 的设置，功能开关，社交按钮设置，图片CDN镜像

使用注意事项都在设置里写得比较清楚了，如果遇到不明白的地方，可以给我留言反馈

下面有几点补充

 - CDN设置部分仅仅测试了七牛的，理论上也支持有镜像服务的CDN
 - 创建模板归档页，无论选择了哪个模板都要加上自定义字段`archive`

**独立搜索页**

设置方法看这里：[Here](https://www.linpx.com/p/add-a-separate-search-page-to-the-pinghsu-theme.html)

**文章缩略图**

文章设置缩略图方法有四种，自定义字段`thumb`，文章附件第一张图片，文章内图片，默认缩略图

优先级顺序 ：自定义字段 thumb -> 附件第一张图片 -> 文章图片 -> 默认缩略图 -> 随机图片 -> 无

缩略图尺寸大小，高度至少有250px，宽度大于高度，推荐高度为400px的

**个性化标徽**

个性化标徽出现的地方有首页、分类页，标签页，作者页和相关文章

设置方法是在文章编辑内填写自定义字段，支持的字段如下

`book` 、 `game` 、 `note` 、 `chat` 、 `code` 、 `image` 、 `web` 、 `link` 、 `design` 、 `lock`

**个性化色块**


个性化色块需要到外观设置那开启才能激活使用，色块出现的地方有首页，分类页，标签页，独立搜索页等等

设置方法是在文章编辑内填写自定义字段，支持的字段如下

`blue`、`purple`、`green`、`yellow`、`red`

备注：由于去掉了三栏色块，在主页的色块设置将不被显示
