<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer id="footer" class="footer <?php if (array_key_exists('archive',unserialize($this->___fields()))): ?>bg-white<?php elseif($this->is('archive')&&($this->options->colorBgPosts == 'defaultColor')): ?>bg-white<?php elseif($this->is('archive')&&($this->options->colorBgPosts == 'customColor')): ?>bg-grey<?php elseif($this->is('single')): ?>bg-white<?php endif; ?>">
	<div class="footer-social">
		<div class="footer-container clearfix">
			<div class="social-list">
			<?php if ($this->options->socialweibo): ?>
				<a class="social weibo" target="blank" href="<?php $this->options->socialweibo(); ?>">WEIBO</a>
			<?php endif; ?>
            <?php if ($this->options->socialzhihu): ?>
                <a class="social zhihu" target="blank" <?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer id="footer" class="footer <?php if (array_key_exists('archive',unserialize($this->___fields()))): ?>bg-white<?php elseif($this->is('archive')&&($this->options->colorBgPosts == 'defaultColor')): ?>bg-white<?php elseif($this->is('archive')&&($this->options->colorBgPosts == 'customColor')): ?>bg-grey<?php elseif($this->is('single')): ?>bg-white<?php endif; ?>">
	<div class="footer-social">
		<div class="footer-container clearfix">
			<div class="social-list">
			<?php if ($this->options->socialweibo): ?>
				<a class="social weibo" target="blank" href="<?php $this->options->socialweibo(); ?>">WEIBO</a>
			<?php endif; ?>
            <?php if ($this->options->socialzhihu): ?>
                <a class="social zhihu" target="blank" href="<?php $this->options->socialzhihu(); ?>">ZHIHU</a>
            <?php endif; ?>
                <a class="social rss" target="blank" href="<?php $this->options->siteUrl(); ?>feed/">RSS</a>
			<?php if ($this->options->socialgithub): ?>
				<a class="social github" target="blank" href="<?php $this->options->socialgithub(); ?>">GITHUB</a>
			<?php endif; ?>
			<?php if ($this->options->socialtwitter): ?>
				<a class="social twitter" target="blank" href="<?php $this->options->socialtwitter(); ?>">TWITTER</a>
			<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="footer-meta">
		<div class="footer-container">
			<div class="meta-item meta-copyright">
				<div class="meta-copyright-info">
                    <a href="<?php $this->options->siteUrl(); ?>" class="info-logo">
                        <?php if($this->options->footerLogoUrl): ?>
                        <img src="<?php $this->options->footerLogoUrl();?>" alt="<?php $this->options->title() ?>" />
                        <?php else : ?>
                        <?php $this->options->title() ?>
                        <?php endif; ?>
                    </a>
					<div class="info-text">	
                    	<p>Theme is <a href="https://www.rinvay.cc/archives/225/" target="_blank">Rinvay</a> by <a href="https://www.rinvay.cc" target="_blank">Rinvay.H</a></p>
						<p>Powered by Typecho V1.2</p>
						<p><?php getBuildTime(); ?></p>
						<p>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></p>
						<p>Loading time <?php echo timer_stop(); ?></p>
						<p id="binft"></p>
					</div>
				</div>
			</div>
			<div class="meta-item meta-posts">
				<h3 class="meta-title">RECENT POSTS</h3>
                <?php getRecentPosts($this,8); ?>
			</div>
            <div class="meta-item meta-comments">
                <h3 class="meta-title">RECENT COMMENTS</h3>
                <?php $this->widget('Widget_Comments_Recent','pageSize=8')->to($comments); ?>
                <?php while($comments->next()): ?>
                <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?> : <?php $comments->excerpt(25, '...'); ?></a></li>
                <?php endwhile; ?>
            </div>
		</div>
	</div>
</footer>

<?php if ($this->options->pjaxSet == 'disable'): ?>
<script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
<script src="https://cdn.bootcss.com/nprogress/0.2.0/nprogress.min.js"></script>
<link href="<?php $this->options->themeUrl('css/nprogress.min.css?v20180720'); ?>" rel="stylesheet">
<script>
console.log('pjax ok!');
$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
	container: '#leus',
	//fragment: '#leus',
	timeout: 8000
	}).on('pjax:send', function() {
		NProgress.start();
		console.log( 'pjax start' );
	}).on('pjax:complete', function() {
		loadMeting();
		<?php if ($this->options->useHighline == 'able'): ?>
		var blocks = document.querySelectorAll('pre code');
		for (var i = 0; i < blocks.length; i++) {
			hljs.highlightBlock(blocks[i]);
		}
		<?php endif; ?>
		NProgress.done();
		console.log( 'pjax end' );
	});
</script>
 <?php endif; ?>
<!--底部彩色文字-->
<script>
var binft = function (r) {
    function t() {
        return b[Math.floor(Math.random() * b.length)]
    }

    function e() {
        return String.fromCharCode(94 * Math.random() + 33)
    }

    function n(r) {
        for (var n = document.createDocumentFragment(), i = 0; r > i; i++) {
            var l = document.createElement("span");
            l.textContent = e(), l.style.color = t(), n.appendChild(l)
        }
        return n
    }

    function i() {
        var t = o[c.skillI];
        c.step ? c.step-- : (c.step = g, c.prefixP < l.length ? (c.prefixP >= 0 && (c.text += l[c.prefixP]), c.prefixP++) : "forward" === c.direction ? c.skillP < t.length ? (c.text += t[c.skillP], c.skillP++) : c.delay ? c.delay-- : (c.direction = "backward", c.delay = a) : c.skillP > 0 ? (c.text = c.text.slice(0, -1), c.skillP--) : (c.skillI = (c.skillI + 1) % o.length, c.direction = "forward")), r.textContent = c.text, r.appendChild(n(c.prefixP < l.length ? Math.min(s, s + c.prefixP) : Math.min(s, t.length - c.skillP))), setTimeout(i, d)
    }
    var l = "",
        o = ["我不会PHP、CSS", "我也不会JAVA、JS","我就是单纯的喜欢","博客我是乱写的", "重庆很好玩的说", "一花一世界，一图一故事", "一花一世界，一叶一菩提"].map(function (r) {
            return r + "."
        }),
        a = 2,
        g = 1,
        s = 5,
        d = 75,
        b = ["rgb(110,64,170)", "rgb(150,61,179)", "rgb(191,60,175)", "rgb(228,65,157)", "rgb(254,75,131)", "rgb(255,94,99)", "rgb(255,120,71)", "rgb(251,150,51)", "rgb(226,183,47)", "rgb(198,214,60)", "rgb(175,240,91)", "rgb(127,246,88)", "rgb(82,246,103)", "rgb(48,239,130)", "rgb(29,223,163)", "rgb(26,199,194)", "rgb(35,171,216)", "rgb(54,140,225)", "rgb(76,110,219)", "rgb(96,84,200)"],
        c = {
            text: "",
            prefixP: -s,
            skillI: 0,
            skillP: 0,
            direction: "forward",
            delay: a,
            step: g
        };
    i()
};
binft(document.getElementById('binft'));
</script>

<?php if (($this->options->tableOfContents == 'able') && ($this->is('post'))): ?>
<div id="directory-content" class="directory-content">
    <div id="directory"></div>
</div>
<script>
var postDirectoryBuild = function() {
    var postChildren = function children(childNodes, reg) {
        var result = [],
            isReg = typeof reg === 'object',
            isStr = typeof reg === 'string',
            node, i, len;
        for (i = 0, len = childNodes.length; i < len; i++) {
            node = childNodes[i];
            if ((node.nodeType === 1 || node.nodeType === 9) &&
                (!reg ||
                isReg && reg.test(node.tagName.toLowerCase()) ||
                isStr && node.tagName.toLowerCase() === reg)) {
                result.push(node);
            }
        }
        return result;
    },
    createPostDirectory = function(article, directory, isDirNum) {
        var contentArr = [],
            titleId = [],
            levelArr, root, level,
            currentList, list, li, link, i, len;
        levelArr = (function(article, contentArr, titleId) {
            var titleElem = postChildren(article.childNodes, /^h\d$/),
                levelArr = [],
                lastNum = 1,
                lastRevNum = 1,
                count = 0,
                guid = 1,
                id = 'directory' + (Math.random() + '').replace(/\D/, ''),
                lastRevNum, num, elem;
            while (titleElem.length) {
                elem = titleElem.shift();
                contentArr.push(elem.innerHTML);
                num = +elem.tagName.match(/\d/)[0];
                if (num > lastNum) {
                    levelArr.push(1);
                    lastRevNum += 1;
                } else if (num === lastRevNum ||
                    num > lastRevNum && num <= lastNum) {
                    levelArr.push(0);
                    lastRevNum = lastRevNum;
                } else if (num < lastRevNum) {
                    levelArr.push(num - lastRevNum);
                    lastRevNum = num;
                }
                count += levelArr[levelArr.length - 1];
                lastNum = num;
                elem.id = elem.id || (id + guid++);
                titleId.push(elem.id);
            }
            if (count !== 0 && levelArr[0] === 1) levelArr[0] = 0;

            return levelArr;
        })(article, contentArr, titleId);
        currentList = root = document.createElement('ul');
        dirNum = [0];
        for (i = 0, len = levelArr.length; i < len; i++) {
            level = levelArr[i];
            if (level === 1) {
                list = document.createElement('ul');
                if (!currentList.lastElementChild) {
                    currentList.appendChild(document.createElement('li'));
                }
                currentList.lastElementChild.appendChild(list);
                currentList = list;
                dirNum.push(0);
            } else if (level < 0) {
                level *= 2;
                while (level++) {
                    if (level % 2) dirNum.pop();
                    currentList = currentList.parentNode;
                }
            }
            dirNum[dirNum.length - 1]++;
            li = document.createElement('li');
            link = document.createElement('a');
            link.href = '#' + titleId[i];
            link.innerHTML = !isDirNum ? contentArr[i] :
                dirNum.join('.') + ' ' + contentArr[i] ;
            li.appendChild(link);
            currentList.appendChild(li);
        }
        directory.appendChild(root);
    };
    createPostDirectory(document.getElementById('post-content'),document.getElementById('directory'), true);
};
postDirectoryBuild();
</script>
<?php endif; ?>
<?php if(($this->is('single')) && ($this->allow('comment'))): ?>
<script>
(function () {
    window.TypechoComment = {
        dom : function (id) {
            return document.getElementById(id);
        },
        create : function (tag, attr) {
            var el = document.createElement(tag);
            for (var key in attr) {
                el.setAttribute(key, attr[key]);
            }
            return el;
        },
        reply : function (cid, coid) {
            var comment = this.dom(cid), parent = comment.parentNode,
                response = this.dom('<?php echo $this->respondId(); ?>'),
                input = this.dom('comment-parent'),
                form = 'form' == response.tagName ? response : response.getElementsByTagName('form')[0],
                textarea = response.getElementsByTagName('textarea')[0];
            if (null == input) {
                input = this.create('input', {
                    'type' : 'hidden',
                    'name' : 'parent',
                    'id'   : 'comment-parent'
                });

                form.appendChild(input);
            }
            input.setAttribute('value', coid);
            if (null == this.dom('comment-form-place-holder')) {
                var holder = this.create('div', {
                    'id' : 'comment-form-place-holder'
                });

                response.parentNode.insertBefore(holder, response);
            }
            comment.appendChild(response);
            this.dom('cancel-comment-reply-link').style.display = '';
            if (null != textarea && 'text' == textarea.name) {
                textarea.focus();
            }
            return false;
        },
        cancelReply : function () {
            var response = this.dom('<?php echo $this->respondId(); ?>'),
            holder = this.dom('comment-form-place-holder'),
            input = this.dom('comment-parent');
            if (null != input) {
                input.parentNode.removeChild(input);
            }
            if (null == holder) {
                return true;
            }
            this.dom('cancel-comment-reply-link').style.display = 'none';
            holder.parentNode.insertBefore(response, holder);
            return false;
        }
    };
})();
<?php if(!$this->user->hasLogin()): ?>
function getCommentCookie(name){
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
    if(arr=document.cookie.match(reg))
        return unescape(decodeURI(arr[2]));
    else
        return null;
}
function addCommentInputValue(){
    document.getElementById('author').value = getCommentCookie('<?php echo md5($this->request->getUrlPrefix()); ?>__typecho_remember_author');
    document.getElementById('mail').value = getCommentCookie('<?php echo md5($this->request->getUrlPrefix()); ?>__typecho_remember_mail');
    document.getElementById('url').value = getCommentCookie('<?php echo md5($this->request->getUrlPrefix()); ?>__typecho_remember_url');
}
addCommentInputValue();
<?php endif; ?>
</script>
<?php endif; ?>
<?php $this->footer(); ?>
<script src="https://cdn.bootcss.com/headroom/0.9.4/headroom.js"></script>
<script src="https://cdn.bootcss.com/headroom/0.9.4/headroom.min.js"></script>
<script src="https://cdn.bootcss.com/emojify.js/1.1.0/js/emojify.min.js"></script>
<script src="<?php $this->options->themeUrl('js/twemoji.js?v20180705'); ?>"></script>
<?php if ($this->options->useHighline == 'able'): ?>
<script src="https://cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
<script src="https://cdn.bootcss.com/highlight.js/9.12.0/languages/autohotkey.min.js"></script>



<?php endif; ?>

<?php if ($this->options->fastClickSet == 'able'): ?>
<script src="https://cdn.bootcss.com/fastclick/1.0.6/fastclick.min.js"></script>
<?php endif; ?>

<script>
<?php if (($this->options->tableOfContents == 'able') && ($this->is('post'))): ?>
var postDirectory = new Headroom(document.getElementById("directory-content"), {
    tolerance: 0,
    <?php if ($this->options->postshowthumb == 'able'): ?>
    offset : 280,<?php else: ?>
    offset : 90,<?php endif; ?>
    classes: {
        initial: "initial",
        pinned: "pinned",
        unpinned: "unpinned"
    }
});
postDirectory.init();
<?php endif; ?>
<?php if($this->is('post')): ?>
var postSharer = new Headroom(document.getElementById("post-bottom-bar"), {
    tolerance: 0,
    offset : 70,
    classes: {
        initial: "animated",
        pinned: "pinned",
        unpinned: "unpinned"
    }
});
postSharer.init();
<?php endif; ?>
var header = new Headroom(document.getElementById("header"), {
    tolerance: 0,
    offset : 70,
    classes: {
      initial: "animated",
      pinned: "slideDown",
      unpinned: "slideUp"
    }
});
header.init();
var navbarSwith = document.getElementById("navbar-mobile-swith");
navbarSwith.onclick = function() {
    navbarSwith.classList.toggle("navbar-mobile-menu-on");
};
<?php if (($this->options->pjaxSet == 'disable') && ($this->options->useHighline == 'able') && ($this->is('post'))): ?>
hljs.initHighlightingOnLoad();
<?php endif; ?>
<?php if ($this->options->fastClickSet == 'able'): ?>
if ('addEventListener' in document) {
    document.addEventListener('DOMContentLoaded', function() {
        FastClick.attach(document.body);
    }, false);
}
<?php endif; ?>
</script>
<?php if ($this->options->useMathjax == 'able'): ?>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
    showProcessingMessages: false,
    messageStyle: "none",
    extensions: ["tex2jax.js"],
    jax: ["input/TeX", "output/HTML-CSS"],
    tex2jax: {
        inlineMath: [ ['$','$'], ["\\(","\\)"] ],
        displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
        skipTags: ['script', 'noscript', 'style', 'textarea', 'pre','code','a'],
        ignoreClass:"comment-content"
    },
    "HTML-CSS": {
        availableFonts: ["STIX","TeX"],
        showMathMenu: false
    }
});
MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
</script>
<script src="//cdn.bootcss.com/mathjax/2.7.4/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<?php endif; ?>
<?php if($this->options->GoogleAnalytics): ?>
<script>
<?php $this->options->GoogleAnalytics(); ?>
</script>
<?php endif; ?>
<?php if ($this->options->pjaxSet == 'able'): ?>
<script data-no-instant>
InstantClick.on('change', function(isInitialLoad){
    <?php if ($this->options->useHighline == 'able'): ?>
    var blocks = document.querySelectorAll('pre code');
    for (var i = 0; i < blocks.length; i++) {
        hljs.highlightBlock(blocks[i]);
    }
    <?php endif; ?>

    if (isInitialLoad === false) {
    <?php if($this->options->GoogleAnalytics): ?>
        if (typeof ga !== 'undefined') ga('send', 'pageview', location.pathname + location.search);
    <?php endif; ?>
    <?php if($this->options->useMathjax == 'able'): ?>
        if (typeof MathJax !== 'undefined'){MathJax.Hub.Queue(["Typeset",MathJax.Hub]);}
    <?php endif; ?>
		if (typeof _hmt !== 'undefined') _hmt.push(['_trackPageview', location.pathname + location.search]);
    }
	loadMeting(); // <-- reload Meting.JS
    $(document).ready(function(){
        //初始化
        var blazy = new Blazy();
    }); 
	$(document).ready(function(){
		if (document.getElementsByName('text')[0] == null)
		{
			console.log('OωO boom!');
			return;
		}else{
			console.log('OωO ok!');
			window['LocalConst'] = {
				BIAOQING_PAOPAO_PATH: '<?php $this->options->themeUrl('images/biaoqing/paopao/'); ?>',
				BIAOQING_ARU_PATH: '<?php $this->options->themeUrl('images/biaoqing/aru/'); ?>',
			};
			//console.log(document.getElementsByName('text')[0]);
			var owo = new OwO({		
				logo: 'OωO',
				container: document.getElementsByClassName('OwO')[0],
				target: document.getElementsByName('text')[0],
				api: '<?php $this->options->themeUrl('js/OwO.json?v20180718'); ?>',
				position: 'down',
				width: '100%;',
				maxHeight: '250px'
			});
		}
		
	});	// <-- 引入表情
	if (document.getElementsByName('rinvaylinks')[0] == null){
		console.log('Links api boom!');
	}else{
		console.log('Links api ok!');
		<?php if ($this->options->links == 'able'): ?>
		var url = "https://storeweb.cn/api/friend_link";
		<?php endif; ?>
		<?php if ($this->options->links == 'disable'): ?>
		var url = "https://oo.o0o.fun/api/friend_link";
		<?php endif; ?>
		var logo_size = 2;
		function get_friend_link_api(timeout) {
			$.ajax({
				type: 'get',
				url: url,
				async: true,
				dataType: 'jsonp',
				data: {
					size: logo_size
				},			
				timeout : 3000,
				success: function (success) {
					if (success['success'] == 1) {
						//console.log(success['data']);
						template_make(success['data']);
						set_storeweb_info(success['information']);
					} else {
						$('.site-friend-link').html(success['info']);
					}
				},
				complete : function(XMLHttpRequest,status){ //请求完成后最终执行参数
					if(status=='timeout'){//超时,status还有success,error等值的情况
						if(timeout==1){
							$('.site-friend-link').html('获取数据超时……请联系个站商店小彦');
						}else {
							var url = "https://cc.rinvay.cc/api/friend_link";
							$('.site-friend-link').html('https 获取数据超时……尝试http获取……');
							get_friend_link_api(1);
						}
					}
				}
			});
		}
		$(function () {
			$('.site-friend-link').html('正在向『个站商店』请求友链数据……');
			get_friend_link_api(0);
		})
		function template_make(data) {
			
			//console.log(data)
			$('.site-friend-link').html('');
			$.each(data, function (key, value) {
				//console.log(value.name);
				var template = $('#links-template').text();
				template = template.replace('%%name%%', value.name);
				template = template.replace('%%logo_cn%%', value.logo_cn);
				template = template.replace('%%intro_link%%', value.intro_link);
				template = template.replace('%%domain%%', 'http://' + value.domain);
				template = template.replace('%%update_count%%', value.update_count);
				if (value.update_count == 0) {
					template = template.replace('%%update_hide%%', 'hide');
				} else {
					template = template.replace('%%update_hide%%','F');
				}
				var template_id = $(template);
				$('.contents').prepend(template_id);
			})
		}
		function set_storeweb_info(information){
			$('.site-friend-link-homepage').attr('href',information['homepage']);
			$('.site-friend-link-project').attr('href',information['project']);
			//$('.site-friend-link-storeweb').attr('href',information['storeweb']);
		}
	}
	
});
InstantClick.init('mousedown');
</script>
<?php endif; ?>
<?php if ($this->options->emoji == 'able'): ?>
<script type="text/javascript">
    emojify.setConfig({
        img_dir: "//cdn.bootcss.com/emojify.js/1.1.0/images/basic",
        blacklist: {
            'ids': [],
            'classes': ['no-emojify'],
            'elements': ['^script$', '^textarea$', '^pre$', '^code$']
        },
    });
    emojify.run();
</script>
<?php endif; ?>
</body>

</html>
<?php if ($this->options->htmlCompress == 'able'): $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); endif; ?>href="<?php $this->options->socialzhihu(); ?>">ZHIHU</a>
            <?php endif; ?>
                <a class="social rss" target="blank" href="<?php $this->options->siteUrl(); ?>feed/">RSS</a>
			<?php if ($this->options->socialgithub): ?>
				<a class="social github" target="blank" href="<?php $this->options->socialgithub(); ?>">GITHUB</a>
			<?php endif; ?>
			<?php if ($this->options->socialtwitter): ?>
				<a class="social twitter" target="blank" href="<?php $this->options->socialtwitter(); ?>">TWITTER</a>
			<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="footer-meta">
		<div class="footer-container">
			<div class="meta-item meta-copyright">
				<div class="meta-copyright-info">
                    <a href="<?php $this->options->siteUrl(); ?>" class="info-logo">
                        <?php if($this->options->footerLogoUrl): ?>
                        <img src="<?php $this->options->footerLogoUrl();?>" alt="<?php $this->options->title() ?>" />
                        <?php else : ?>
                        <?php $this->options->title() ?>
                        <?php endif; ?>
                    </a>
					<div class="info-text">	
                    	<p>Theme is <a href="https://www.rinvay.cc/archives/225/" target="_blank">Rinvay</a> by <a href="https://www.rinvay.cc" target="_blank">Rinvay.H</a></p>
						<p>Powered by <a href="http://typecho.org/" target="_blank">Typecho</a></p>
						<p><?php getBuildTime(); ?></p>
						<p>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></p>
						<p id="binft"></p>
					</div>
				</div>
			</div>
			<div class="meta-item meta-posts">
				<h3 class="meta-title">RECENT POSTS</h3>
                <?php getRecentPosts($this,8); ?>
			</div>
            <div class="meta-item meta-comments">
                <h3 class="meta-title">RECENT COMMENTS</h3>
                <?php $this->widget('Widget_Comments_Recent','pageSize=8')->to($comments); ?>
                <?php while($comments->next()): ?>
                <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?> : <?php $comments->excerpt(25, '...'); ?></a></li>
                <?php endwhile; ?>
            </div>
		</div>
	</div>
</footer>

<?php if ($this->options->pjaxSet == 'disable'): ?>
<script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
<script src="https://cdn.bootcss.com/nprogress/0.2.0/nprogress.min.js"></script>
<link href="<?php $this->options->themeUrl('css/nprogress.min.css?v20180720'); ?>" rel="stylesheet">
<script>
console.log('pjax ok!');
$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
	container: '#leus',
	//fragment: '#leus',
	timeout: 8000
	}).on('pjax:send', function() {
		NProgress.start();
		console.log( 'pjax start' );
	}).on('pjax:complete', function() {
		loadMeting();
		<?php if ($this->options->useHighline == 'able'): ?>
		var blocks = document.querySelectorAll('pre code');
		for (var i = 0; i < blocks.length; i++) {
			hljs.highlightBlock(blocks[i]);
		}
		<?php endif; ?>
		NProgress.done();
		console.log( 'pjax end' );
	});
</script>
 <?php endif; ?>
<!--底部彩色文字-->
<script>
var binft = function (r) {
    function t() {
        return b[Math.floor(Math.random() * b.length)]
    }

    function e() {
        return String.fromCharCode(94 * Math.random() + 33)
    }

    function n(r) {
        for (var n = document.createDocumentFragment(), i = 0; r > i; i++) {
            var l = document.createElement("span");
            l.textContent = e(), l.style.color = t(), n.appendChild(l)
        }
        return n
    }

    function i() {
        var t = o[c.skillI];
        c.step ? c.step-- : (c.step = g, c.prefixP < l.length ? (c.prefixP >= 0 && (c.text += l[c.prefixP]), c.prefixP++) : "forward" === c.direction ? c.skillP < t.length ? (c.text += t[c.skillP], c.skillP++) : c.delay ? c.delay-- : (c.direction = "backward", c.delay = a) : c.skillP > 0 ? (c.text = c.text.slice(0, -1), c.skillP--) : (c.skillI = (c.skillI + 1) % o.length, c.direction = "forward")), r.textContent = c.text, r.appendChild(n(c.prefixP < l.length ? Math.min(s, s + c.prefixP) : Math.min(s, t.length - c.skillP))), setTimeout(i, d)
    }
    var l = "",
        o = ["我不会PHP、CSS", "我也不会JAVA、JS","我就是单纯的喜欢","博客我是乱写的", "重庆很好玩的说", "一花一世界，一图一故事", "一花一世界，一叶一菩提"].map(function (r) {
            return r + "."
        }),
        a = 2,
        g = 1,
        s = 5,
        d = 75,
        b = ["rgb(110,64,170)", "rgb(150,61,179)", "rgb(191,60,175)", "rgb(228,65,157)", "rgb(254,75,131)", "rgb(255,94,99)", "rgb(255,120,71)", "rgb(251,150,51)", "rgb(226,183,47)", "rgb(198,214,60)", "rgb(175,240,91)", "rgb(127,246,88)", "rgb(82,246,103)", "rgb(48,239,130)", "rgb(29,223,163)", "rgb(26,199,194)", "rgb(35,171,216)", "rgb(54,140,225)", "rgb(76,110,219)", "rgb(96,84,200)"],
        c = {
            text: "",
            prefixP: -s,
            skillI: 0,
            skillP: 0,
            direction: "forward",
            delay: a,
            step: g
        };
    i()
};
binft(document.getElementById('binft'));
</script>

<?php if (($this->options->tableOfContents == 'able') && ($this->is('post'))): ?>
<div id="directory-content" class="directory-content">
    <div id="directory"></div>
</div>
<script>
var postDirectoryBuild = function() {
    var postChildren = function children(childNodes, reg) {
        var result = [],
            isReg = typeof reg === 'object',
            isStr = typeof reg === 'string',
            node, i, len;
        for (i = 0, len = childNodes.length; i < len; i++) {
            node = childNodes[i];
            if ((node.nodeType === 1 || node.nodeType === 9) &&
                (!reg ||
                isReg && reg.test(node.tagName.toLowerCase()) ||
                isStr && node.tagName.toLowerCase() === reg)) {
                result.push(node);
            }
        }
        return result;
    },
    createPostDirectory = function(article, directory, isDirNum) {
        var contentArr = [],
            titleId = [],
            levelArr, root, level,
            currentList, list, li, link, i, len;
        levelArr = (function(article, contentArr, titleId) {
            var titleElem = postChildren(article.childNodes, /^h\d$/),
                levelArr = [],
                lastNum = 1,
                lastRevNum = 1,
                count = 0,
                guid = 1,
                id = 'directory' + (Math.random() + '').replace(/\D/, ''),
                lastRevNum, num, elem;
            while (titleElem.length) {
                elem = titleElem.shift();
                contentArr.push(elem.innerHTML);
                num = +elem.tagName.match(/\d/)[0];
                if (num > lastNum) {
                    levelArr.push(1);
                    lastRevNum += 1;
                } else if (num === lastRevNum ||
                    num > lastRevNum && num <= lastNum) {
                    levelArr.push(0);
                    lastRevNum = lastRevNum;
                } else if (num < lastRevNum) {
                    levelArr.push(num - lastRevNum);
                    lastRevNum = num;
                }
                count += levelArr[levelArr.length - 1];
                lastNum = num;
                elem.id = elem.id || (id + guid++);
                titleId.push(elem.id);
            }
            if (count !== 0 && levelArr[0] === 1) levelArr[0] = 0;

            return levelArr;
        })(article, contentArr, titleId);
        currentList = root = document.createElement('ul');
        dirNum = [0];
        for (i = 0, len = levelArr.length; i < len; i++) {
            level = levelArr[i];
            if (level === 1) {
                list = document.createElement('ul');
                if (!currentList.lastElementChild) {
                    currentList.appendChild(document.createElement('li'));
                }
                currentList.lastElementChild.appendChild(list);
                currentList = list;
                dirNum.push(0);
            } else if (level < 0) {
                level *= 2;
                while (level++) {
                    if (level % 2) dirNum.pop();
                    currentList = currentList.parentNode;
                }
            }
            dirNum[dirNum.length - 1]++;
            li = document.createElement('li');
            link = document.createElement('a');
            link.href = '#' + titleId[i];
            link.innerHTML = !isDirNum ? contentArr[i] :
                dirNum.join('.') + ' ' + contentArr[i] ;
            li.appendChild(link);
            currentList.appendChild(li);
        }
        directory.appendChild(root);
    };
    createPostDirectory(document.getElementById('post-content'),document.getElementById('directory'), true);
};
postDirectoryBuild();
</script>
<?php endif; ?>
<?php if(($this->is('single')) && ($this->allow('comment'))): ?>
<script>
(function () {
    window.TypechoComment = {
        dom : function (id) {
            return document.getElementById(id);
        },
        create : function (tag, attr) {
            var el = document.createElement(tag);
            for (var key in attr) {
                el.setAttribute(key, attr[key]);
            }
            return el;
        },
        reply : function (cid, coid) {
            var comment = this.dom(cid), parent = comment.parentNode,
                response = this.dom('<?php echo $this->respondId(); ?>'),
                input = this.dom('comment-parent'),
                form = 'form' == response.tagName ? response : response.getElementsByTagName('form')[0],
                textarea = response.getElementsByTagName('textarea')[0];
            if (null == input) {
                input = this.create('input', {
                    'type' : 'hidden',
                    'name' : 'parent',
                    'id'   : 'comment-parent'
                });

                form.appendChild(input);
            }
            input.setAttribute('value', coid);
            if (null == this.dom('comment-form-place-holder')) {
                var holder = this.create('div', {
                    'id' : 'comment-form-place-holder'
                });

                response.parentNode.insertBefore(holder, response);
            }
            comment.appendChild(response);
            this.dom('cancel-comment-reply-link').style.display = '';
            if (null != textarea && 'text' == textarea.name) {
                textarea.focus();
            }
            return false;
        },
        cancelReply : function () {
            var response = this.dom('<?php echo $this->respondId(); ?>'),
            holder = this.dom('comment-form-place-holder'),
            input = this.dom('comment-parent');
            if (null != input) {
                input.parentNode.removeChild(input);
            }
            if (null == holder) {
                return true;
            }
            this.dom('cancel-comment-reply-link').style.display = 'none';
            holder.parentNode.insertBefore(response, holder);
            return false;
        }
    };
})();
<?php if(!$this->user->hasLogin()): ?>
function getCommentCookie(name){
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
    if(arr=document.cookie.match(reg))
        return unescape(decodeURI(arr[2]));
    else
        return null;
}
function addCommentInputValue(){
    document.getElementById('author').value = getCommentCookie('<?php echo md5($this->request->getUrlPrefix()); ?>__typecho_remember_author');
    document.getElementById('mail').value = getCommentCookie('<?php echo md5($this->request->getUrlPrefix()); ?>__typecho_remember_mail');
    document.getElementById('url').value = getCommentCookie('<?php echo md5($this->request->getUrlPrefix()); ?>__typecho_remember_url');
}
addCommentInputValue();
<?php endif; ?>
</script>
<?php endif; ?>
<?php $this->footer(); ?>
<script src="https://cdn.bootcss.com/headroom/0.9.4/headroom.js"></script>
<script src="https://cdn.bootcss.com/headroom/0.9.4/headroom.min.js"></script>
<script src="https://cdn.bootcss.com/emojify.js/1.1.0/js/emojify.min.js"></script>
<script src="<?php $this->options->themeUrl('js/twemoji.js?v20180705'); ?>"></script>
<?php if ($this->options->useHighline == 'able'): ?>
<script src="https://cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
<script src="https://cdn.bootcss.com/highlight.js/9.12.0/languages/autohotkey.min.js"></script>



<?php endif; ?>

<?php if ($this->options->fastClickSet == 'able'): ?>
<script src="https://cdn.bootcss.com/fastclick/1.0.6/fastclick.min.js"></script>
<?php endif; ?>

<script>
<?php if (($this->options->tableOfContents == 'able') && ($this->is('post'))): ?>
var postDirectory = new Headroom(document.getElementById("directory-content"), {
    tolerance: 0,
    <?php if ($this->options->postshowthumb == 'able'): ?>
    offset : 280,<?php else: ?>
    offset : 90,<?php endif; ?>
    classes: {
        initial: "initial",
        pinned: "pinned",
        unpinned: "unpinned"
    }
});
postDirectory.init();
<?php endif; ?>
<?php if($this->is('post')): ?>
var postSharer = new Headroom(document.getElementById("post-bottom-bar"), {
    tolerance: 0,
    offset : 70,
    classes: {
        initial: "animated",
        pinned: "pinned",
        unpinned: "unpinned"
    }
});
postSharer.init();
<?php endif; ?>
var header = new Headroom(document.getElementById("header"), {
    tolerance: 0,
    offset : 70,
    classes: {
      initial: "animated",
      pinned: "slideDown",
      unpinned: "slideUp"
    }
});
header.init();
<?php if (($this->options->pjaxSet == 'disable') && ($this->options->useHighline == 'able') && ($this->is('post'))): ?>
hljs.initHighlightingOnLoad();
<?php endif; ?>
<?php if ($this->options->fastClickSet == 'able'): ?>
if ('addEventListener' in document) {
    document.addEventListener('DOMContentLoaded', function() {
        FastClick.attach(document.body);
    }, false);
}
<?php endif; ?>
</script>
<?php if ($this->options->useMathjax == 'able'): ?>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
    showProcessingMessages: false,
    messageStyle: "none",
    extensions: ["tex2jax.js"],
    jax: ["input/TeX", "output/HTML-CSS"],
    tex2jax: {
        inlineMath: [ ['$','$'], ["\\(","\\)"] ],
        displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
        skipTags: ['script', 'noscript', 'style', 'textarea', 'pre','code','a'],
        ignoreClass:"comment-content"
    },
    "HTML-CSS": {
        availableFonts: ["STIX","TeX"],
        showMathMenu: false
    }
});
MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
</script>
<script src="//cdn.bootcss.com/mathjax/2.7.4/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<?php endif; ?>
<?php if($this->options->GoogleAnalytics): ?>
<script>
<?php $this->options->GoogleAnalytics(); ?>
</script>
<?php endif; ?>
<?php if ($this->options->pjaxSet == 'able'): ?>
<script data-no-instant>
InstantClick.on('change', function(isInitialLoad){
    <?php if ($this->options->useHighline == 'able'): ?>
    var blocks = document.querySelectorAll('pre code');
    for (var i = 0; i < blocks.length; i++) {
        hljs.highlightBlock(blocks[i]);
    }
    <?php endif; ?>

    if (isInitialLoad === false) {
    <?php if($this->options->GoogleAnalytics): ?>
        if (typeof ga !== 'undefined') ga('send', 'pageview', location.pathname + location.search);
    <?php endif; ?>
    <?php if($this->options->useMathjax == 'able'): ?>
        if (typeof MathJax !== 'undefined'){MathJax.Hub.Queue(["Typeset",MathJax.Hub]);}
    <?php endif; ?>
		if (typeof _hmt !== 'undefined') _hmt.push(['_trackPageview', location.pathname + location.search]);
    }
	//loadMeting(); // <-- reload Meting.JS
    $(document).ready(function(){
        //初始化
        var blazy = new Blazy();
    });  
	$(document).ready(function(){
		if (document.getElementsByName('text')[0] == null)
		{
			console.log('OωO boom!');
			return;
		}else{
			console.log('OωO ok!');
			window['LocalConst'] = {
				BIAOQING_PAOPAO_PATH: '<?php $this->options->themeUrl('images/biaoqing/paopao/'); ?>',
				BIAOQING_ARU_PATH: '<?php $this->options->themeUrl('images/biaoqing/aru/'); ?>',
			};
			//console.log(document.getElementsByName('text')[0]);
			var owo = new OwO({		
				logo: 'OωO',
				container: document.getElementsByClassName('OwO')[0],
				target: document.getElementsByName('text')[0],
				api: '<?php $this->options->themeUrl('js/OwO.json?v20180718'); ?>',
				position: 'down',
				width: '100%;',
				maxHeight: '250px'
			});
		}
		
	});	// <-- 引入表情
	if (document.getElementsByName('rinvaylinks')[0] == null){
		console.log('Links api boom!');
	}else{
		console.log('Links api ok!');
		<?php if ($this->options->links == 'able'): ?>
		var url = "https://storeweb.cn/api/friend_link";
		<?php endif; ?>
		<?php if ($this->options->links == 'disable'): ?>
		var url = "https://oo.o0o.fun/api/friend_link";
		<?php endif; ?>
		var logo_size = 2;
		function get_friend_link_api(timeout) {
			$.ajax({
				type: 'get',
				url: url,
				async: true,
				dataType: 'jsonp',
				data: {
					size: logo_size
				},			
				timeout : 3000,
				success: function (success) {
					if (success['success'] == 1) {
						//console.log(success['data']);
						template_make(success['data']);
						set_storeweb_info(success['information']);
					} else {
						$('.site-friend-link').html(success['info']);
					}
				},
				complete : function(XMLHttpRequest,status){ //请求完成后最终执行参数
					if(status=='timeout'){//超时,status还有success,error等值的情况
						if(timeout==1){
							$('.site-friend-link').html('获取数据超时……请联系个站商店小彦');
						}else {
							var url = "https://cc.rinvay.cc/api/friend_link";
							$('.site-friend-link').html('https 获取数据超时……尝试http获取……');
							get_friend_link_api(1);
						}
					}
				}
			});
		}
		$(function () {
			$('.site-friend-link').html('正在向『个站商店』请求友链数据……');
			get_friend_link_api(0);
		})
		function template_make(data) {
			
			//console.log(data)
			$('.site-friend-link').html('');
			$.each(data, function (key, value) {
				//console.log(value.name);
				var template = $('#links-template').text();
				template = template.replace('%%name%%', value.name);
				template = template.replace('%%logo_cn%%', value.logo_cn);
				template = template.replace('%%intro_link%%', value.intro_link);
				template = template.replace('%%domain%%', 'http://' + value.domain);
				template = template.replace('%%update_count%%', value.update_count);
				if (value.update_count == 0) {
					template = template.replace('%%update_hide%%', 'hide');
				} else {
					template = template.replace('%%update_hide%%','F');
				}
				var template_id = $(template);
				$('.contents').prepend(template_id);
			})
		}
		function set_storeweb_info(information){
			$('.site-friend-link-homepage').attr('href',information['homepage']);
			$('.site-friend-link-project').attr('href',information['project']);
			//$('.site-friend-link-storeweb').attr('href',information['storeweb']);
		}
	}
	
});
InstantClick.init('mousedown');
</script>
<?php endif; ?>
<?php if ($this->options->emoji == 'able'): ?>
<script type="text/javascript">
    emojify.setConfig({
        img_dir: "//cdn.bootcss.com/emojify.js/1.1.0/images/basic",
        blacklist: {
            'ids': [],
            'classes': ['no-emojify'],
            'elements': ['^script$', '^textarea$', '^pre$', '^code$']
        },
    });
    emojify.run();
</script>
<?php endif; ?>
</body>

</html>
<?php if ($this->options->htmlCompress == 'able'): $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); endif; ?>