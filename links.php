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
<!--个站API-->
<?php if ($this->options->pjaxSet == 'disable'): ?>
<script data-no-instant>
	console.log('Links api is ok!');
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
</script>

<?php endif; ?>
<style>.content ul {
    font-size:0;
    padding: 0;}
@media only screen and (max-width:767px){.content ul {text-align: center;}
}
</style>
<article class="main-content page-page"> 
	<div class="post-header">
		<h1 class="post-title" itemprop="name headline">
			<?php $this->title() ?>
		</h1>
		<div class="post-data">
			<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">Published on <?php $this->date('M j, Y'); ?></time>
		</div>
	</div>

<div id="content" class="content">
  <?php

$str = preg_replace('#<a(.*?) href="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>#',
        '<a$1 href="$2$3"$5 target="_blank">', $this->content);

$str = preg_replace('#<li><p>(.*?)</p></li>#',
        '<li>$1</li>', $str);

$str = preg_replace('#<li><img src="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)><a(.*?) href="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>(.*?)</a></li>#','<a href="$6$7" target="_blank" >
        <div class="rinvay-links">
            <img class="b-lazy"
	src="http://172.30.100.212:222/usr/themes/rinvay/images/load.gif"  data-src="$1$2"$4>
            <p>$10</p>
        </div>
    </a>',$str);

$str = preg_replace('#<li>([1-9][0-9]{4,})<a(.*?) href="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>(.*?)</a></li>#','<a href="$3$4" target="_blank">
        <div class="rinvay-links"><img class="b-lazy b-loaded"
	src="https://q.qlogo.cn/g?b=qq&nk=$1&s=100">
            <p>$7</p>
        </div>
    </a>',$str);

$str = preg_replace('#<li><a href="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>(.*?)</a></li>#','<a href="$1$2" target="_blank">
        <div class="rinvay-links">  
            <p>$5</p>
        </div>
    </a>',$str);
 echo $str;
?>


</div>
</div>

<script type="text/javascript">
    (function(){
        //初始化
        var blazy = new Blazy();
    })();
</script>


</article>

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php');?>