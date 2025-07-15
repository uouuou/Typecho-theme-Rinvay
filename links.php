<?php

/**
 * links
 *
 * @package custom
 *
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
    <script type="text/javascript">
        // 当页面加载完成后初始化懒加载
        document.addEventListener("DOMContentLoaded", function () {
            var bLazy = new Blazy({
                selector: '.b-lazy',
                offset: 50,
                successClass: 'b-loaded',
                error: function (ele, msg) {
                    if (msg == 'missing') {
                        console.log('图片懒加载错误: 缺少路径');
                    } else if (msg == 'invalid') {
                        console.log('图片懒加载错误: 无效路径');
                    }
                    // 加载失败时显示一个默认图片
                    ele.src = '<?php $this->options->themeUrl('images/load.gif'); ?>';
                }
            });
        });
    </script>

    <style>.content ul {
            font-size: 0;
            padding: 0;
        }

        @media only screen and (max-width: 767px) {
            .content ul {
                text-align: center;
            }
        }
    </style>
    <article class="main-content page-page">
        <div class="post-header">
            <h1 class="post-title" itemprop="name headline">
                <?php $this->title() ?>
            </h1>
            <div class="post-data">
                <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">Published
                    on <?php $this->date('M j, Y'); ?></time>
            </div>
        </div>

        <div id="content" class="content">

            <?php
            $str = preg_replace('#<a(.*?) href="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>#',
                '<a$1 href="$2$3"$5 target="_blank">', $this->content);

            $str = preg_replace('#<li><p>(.*?)</p></li>#',
                '<li>$1</li>', $str);

            // 获取主题中load.gif的URL
            ob_start();
            $this->options->themeUrl('images/load.gif');
            $loadGifUrl = ob_get_clean();
            $str = preg_replace('#<li><img src="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)><a(.*?) href="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>(.*?)</a></li>#', '<a href="$6$7" target="_blank" >
        <div class="rinvay-links">
            <img class="b-lazy" src="' . $loadGifUrl . '"  data-src="$1$2"$4>
            <p>$10</p>
        </div>
    </a>', $str);

            $str = preg_replace('#<li>([1-9][0-9]{4,})<a(.*?) href="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>(.*?)</a></li>#', '<a href="$3$4" target="_blank">
        <div class="rinvay-links">
        <img class="b-lazy b-loaded" src="https://q.qlogo.cn/g?b=qq&nk=$1&s=100">
            <p>$7</p>
        </div>
    </a>', $str);

            $str = preg_replace('#<li><a href="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>(.*?)</a></li>#', '<a href="$1$2" target="_blank">
        <div class="rinvay-links">  
            <p>$5</p>
        </div>
    </a>', $str);
            echo $str;
            ?>
        </div>
    </article>

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>