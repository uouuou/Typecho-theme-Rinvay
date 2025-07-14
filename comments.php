<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php
function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }

    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
    $depth = $comments->levels +1;

    if ($comments->url) {
        $author = '<a href="' . $comments->url . '"target="_blank"' . ' rel="external nofollow">' . $comments->author . '</a>';
    } else {
        $author = $comments->author;
    }
?>

<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php
if ($depth > 1 && $depth < 3) {
    echo ' comment-child ';
    $comments->levelsAlt('comment-level-odd', ' comment-level-even');
}
else if( $depth > 2){
    echo ' comment-child2';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
}
else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
?>">
    <div id="<?php $comments->theId(); ?>">
        <?php
            $host = 'https://gravatar.o0o.fun';
            $url = '/avatar/';
            $size = '80';
            $default = 'mm';
            $rating = Helper::options()->commentsAvatarRating;
            $hash = md5(strtolower($comments->mail));
            $avatar = $host . $url . $hash . '?s=' . $size . '&r=' . $rating . '&d=' . $default;
        ?>
        <div class="comment-view" onclick="">
            <div class="comment-header">
                <img class="avatar" src="<?php echo $avatar ?>" width="<?php echo $size ?>" height="<?php echo $size ?>" />
                <span class="comment-author<?php echo $commentClass; ?>"><?php echo $author; ?></span>
            </div>
            <div class="comment-content">
                <span class="comment-author-at"><?php getCommentAt($comments->coid); ?></span>
                <?php
                    $ms =  $comments->content;
                    $urlreg = '/[A-Za-z0-9_\-\x{4e00}-\x{9fa5}]+/u';
                    $arureg = '/#\([A-Za-z0-9_\-\x{4e00}-\x{9fa5}]+\)/u';
                    $paopaoreg = '/@\([A-Za-z0-9_\-\x{4e00}-\x{9fa5}]+\)/u';
                    $paopao = gethosturl().'/usr/themes/Rinvay/images/biaoqing/paopao/';
                    $aru = gethosturl().'/usr/themes/Rinvay/images/biaoqing/aru/';
                    $paopaoid = preg_match_all ( $paopaoreg , $ms , $namep );
                    $aruid = preg_match_all ( $arureg , $ms , $namea );
                    $aa = $namep[0];
                    $bb = $namea[0];
                     for ($i=0; $i < sizeof($aa); $i++) {
                        $names = preg_match ( $urlreg , $aa[$i] , $hex );
                        $nameid = preg_match ( $paopaoreg , $aa[$i] , $hexs );
                        $namehex = preg_replace('/%/u','',urlencode($hex[0]));
                        $imgurl = '<img  src="'.$paopao.$namehex.'_2x.png'.'" >';
                        $ms = str_replace($hexs[0],$imgurl,$ms);
                        $content = preg_replace($paopaoreg,$imgurl,$ms);
                     }
                     for ($l=0; $l < sizeof($bb); $l++) {
                        $names = preg_match ( $urlreg , $bb[$l] , $hex );
                        $nameid = preg_match ( $arureg , $bb[$l] , $hexs );
                        $namehex = preg_replace('/%/u','',urlencode($hex[0]));
                        $imgurl = '<img  src="'.$aru.$namehex.'_2x.png'.'" >';
                        $ms = str_replace($hexs[0],$imgurl,$ms);
                        $content = preg_replace($arureg,$imgurl,$ms);
                     }
                    echo $ms;
                ?></p>
            </div>
            <div class="comment-meta">
                <time class="comment-time"><?php $comments->date('M j, Y'); ?></time>
                <span class="comment-reply" data-no-instant><?php $comments->reply('回复'); ?></span>
            </div>
        </div>
    </div>
    <?php if ($comments->children) { ?>
        <div class="comment-children">
            <?php $comments->threadedComments($options); ?>
        </div>
    <?php } ?>
</li>
<?php } ?>

<div id="<?php $this->respondId(); ?>" class="comment-container">
    <div id="comments" class="clearfix">
        <?php $this->comments()->to($comments); ?>
        <?php if($this->allow('comment')): ?>
		<?php if ($this->is('attachment')) : ?>
		<?php else: ?>
        <span class="response">评论<?php if($this->user->hasLogin()): ?> / 尊敬的会员 <a href="<?php $this->options->profileUrl(); ?>" data-no-instant><?php $this->user->screenName(); ?></a>, 你想要 <a href="<?php $this->options->logoutUrl(); ?>" title="Logout" data-no-instant>退出</a> 吗?<?php endif; ?> <?php $comments->cancelReply(' / Cancel Reply'); ?></span>

		<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" class="comment-form" role="form" onsubmit ="getElementById('misubmit').disabled=true;return true;">
            <?php if(!$this->user->hasLogin()): ?>
            <input type="text" name="author" maxlength="12" id="author" class="form-control input-control clearfix" placeholder="称呼 (*)" value="" required>
            <input type="email" name="mail" id="mail" class="form-control input-control clearfix" placeholder="邮箱 (*)" value="" <?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>>
            <input type="url" name="url" id="url" class="form-control input-control clearfix" placeholder="网址 (https://)" value="" <?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?>>
            <?php endif; ?>

            <textarea name="text" id="textarea" class="form-control" placeholder="欢迎您的吐槽和指正~(～￣▽￣)～" required ><?php $this->remember('text',false); ?></textarea>
            <button type="submit" class="submit" id="misubmit">回复</button>
            <?php $security = $this->widget('Widget_Security'); ?>
            <input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>">
			<div class="OwO" data-no-instant></div>
        </form>
		<?php endif; ?>
        <?php else : ?>
            <span class="response">Comments are closed.</span>
        <?php endif; ?>

        <?php if ($comments->have()): ?>

        <?php $comments->listComments(); ?>

        <div class="lists-navigator clearfix">
            <?php $comments->pageNav('←','→','2','...'); ?>
        </div>

        <?php endif; ?>
    </div>
</div>
<?php if ($this->options->pjaxSet == 'disable'): ?>
<!--OωO表情-->
<script data-no-instant>
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
            var owo = new OwO({
                logo: 'OωO',
                container: document.getElementsByClassName('OwO')[0],
                target: document.getElementsByName('text')[0],
                api: '<?php $this->options->themeUrl('js/OwO.json?v20250714'); ?>',
                position: 'down',
                width: '100%;',
                maxHeight: '250px'
            });
        }

    });
</script>
<?php endif; ?>

