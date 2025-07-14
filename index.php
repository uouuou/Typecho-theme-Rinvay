<?php
/**
 * Rinvay是一款基于pinghsu主题的修改版，📰<a href="https://www.linpx.com/p/more-detailed-pinghsu-theme-set-tutorial.html/comment-page-7" target="_blank">pinghsu</a>,更新详见Github📰<a href="https://github.com/uouuou" target="_blank">Github</a>和我的Blog📰<a href="https://www.rinvay.cc" target="_blank">Rinvay.H</a>
 *
 * @package Rinvay Theme
 * @author Rinvay
 * @version 2.0.5
 *@link https://www.rinvay.cc/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="main-content index-page clearfix <?php if ($this->options->postListSwitch == 'oneList'): ?>onelist-page<?php endif; ?>">
	<div class="post-lists">
		<div class="post-lists-body">
		<?php while($this->next()): ?>
			<?php if ($this->options->postListSwitch == 'threeList'): ?>
			<div class="post-list-item">
				<div class="post-list-item-container">
					<?php if (isset($this->___fields()['thumb'])): ?>
					<div class="item-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (isset($this->___fields()['green'])): ?> bg-green<?php elseif (isset($this->___fields()['red'])): ?> bg-red<?php elseif (isset($this->___fields()['yellow'])): ?> bg-yellow<?php elseif (isset($this->___fields()['blue'])): ?> bg-blue<?php elseif (isset($this->___fields()['purple'])): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php parseFieldsThumb($this);?>);"></div>
            <?php else : ?>
            <?php $thumb = showThumb($this,null,true);?>
            <?php if(!empty($thumb)):?>
            <div class="item-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (isset($this->___fields()['green'])): ?> bg-green<?php elseif (isset($this->___fields()['red'])): ?> bg-red<?php elseif (isset($this->___fields()['yellow'])): ?> bg-yellow<?php elseif (isset($this->___fields()['blue'])): ?> bg-blue<?php elseif (isset($this->___fields()['purple'])): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php echo $thumb;?>);"></div>
        	<?php else : ?>
            <div class="item-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (isset($this->___fields()['green'])): ?> bg-green<?php elseif (isset($this->___fields()['red'])): ?> bg-red<?php elseif (isset($this->___fields()['yellow'])): ?> bg-yellow<?php elseif (isset($this->___fields()['blue'])): ?> bg-blue<?php elseif (isset($this->___fields()['purple'])): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php $this->options->themeUrl('images/thumbs/'.mt_rand(0,9).'.jpg'); ?>);"></div>
            <?php endif; ?>
					<?php endif; ?>
					<a href="<?php $this->permalink() ?>">
	                	<div class="item-desc">
							<p><?php $this->excerpt(75, '...');?></p>
						</div>
					</a>
					<div class="item-slant reverse-slant <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (isset($this->___fields()['green'])): ?> bg-green<?php elseif (isset($this->___fields()['red'])): ?> bg-red<?php elseif (isset($this->___fields()['yellow'])): ?> bg-yellow<?php elseif (isset($this->___fields()['blue'])): ?> bg-blue<?php elseif (isset($this->___fields()['purple'])): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>"></div>
					<div class="item-slant"></div>
					<div class="item-label">
						<div class="item-title"><a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a></div>
						<div class="item-meta clearfix">
							<div class="item-meta-date"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('M j, Y'); ?></time></div>
							<?php if (isset($this->___fields()['book'])): ?>
							<div class="item-meta-ico bg-ico-book" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (isset($this->___fields()['game'])): ?>
							<div class="item-meta-ico bg-ico-game" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (isset($this->___fields()['note'])): ?>
							<div class="item-meta-ico bg-ico-note" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (isset($this->___fields()['chat'])): ?>
							<div class="item-meta-ico bg-ico-chat" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (isset($this->___fields()['code'])): ?>
							<div class="item-meta-ico bg-ico-code" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (isset($this->___fields()['image'])): ?>
							<div class="item-meta-ico bg-ico-image" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (isset($this->___fields()['web'])): ?>
							<div class="item-meta-ico bg-ico-web" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (isset($this->___fields()['link'])): ?>
							<div class="item-meta-ico bg-ico-link" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (isset($this->___fields()['design'])): ?>
							<div class="item-meta-ico bg-ico-design" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (isset($this->___fields()['lock'])): ?>
							<div class="item-meta-ico bg-ico-lock" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php else : ?>
							<div class="item-meta-ico bg-ico-<?php echo randBgIco(); ?>" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
                            <?php endif; ?>
							<div class="item-meta-cat"><?php $this->category(''); ?></div>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if ($this->options->postListSwitch == 'oneList'): ?>
			<div class="post-onelist-item">
				<div class="post-onelist-item-container">
					<a href="<?php $this->permalink(); ?>">
					<?php if (isset($this->___fields()['thumb'])): ?>
						<div class="onelist-item-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (isset($this->___fields()['green'])): ?> bg-green<?php elseif (isset($this->___fields()['red'])): ?> bg-red<?php elseif (isset($this->___fields()['yellow'])): ?> bg-yellow<?php elseif (isset($this->___fields()['blue'])): ?> bg-blue<?php elseif (isset($this->___fields()['purple'])): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php parseFieldsThumb($this);?>);"></div>
            <?php else : ?>
            <?php $thumb = showThumb($this,null,true);?>
            <?php if(!empty($thumb)):?>
            	<div class="onelist-item-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (isset($this->___fields()['green'])): ?> bg-green<?php elseif (isset($this->___fields()['red'])): ?> bg-red<?php elseif (isset($this->___fields()['yellow'])): ?> bg-yellow<?php elseif (isset($this->___fields()['blue'])): ?> bg-blue<?php elseif (isset($this->___fields()['purple'])): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php echo $thumb;?>);"></div>
        	<?php else : ?>
        		<div class="onelist-item-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (isset($this->___fields()['green'])): ?> bg-green<?php elseif (isset($this->___fields()['red'])): ?> bg-red<?php elseif (isset($this->___fields()['yellow'])): ?> bg-yellow<?php elseif (isset($this->___fields()['blue'])): ?> bg-blue<?php elseif (isset($this->___fields()['purple'])): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php $this->options->themeUrl('images/thumbs/'.mt_rand(0,9).'.jpg'); ?>);"></div>
            <?php endif; ?>
					<?php endif; ?>
					</a>
					<div class="onelist-item-info">
						<div class="item-title">
							<a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a>
						</div>
						<div class="item-meta">
							<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"> Published on <?php $this->date('M j, Y'); ?></time> in <?php $this->category(''); ?> </a>
						</div>
						<div class="item-meta-hr <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (isset($this->___fields()['green'])): ?> bg-green<?php elseif (isset($this->___fields()['red'])): ?> bg-red<?php elseif (isset($this->___fields()['yellow'])): ?> bg-yellow<?php elseif (isset($this->___fields()['blue'])): ?> bg-blue<?php elseif (isset($this->___fields()['purple'])): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>"></div>
						<div class="item-content">
							<p><?php $this->excerpt(150, '...');?></p>
						</div>
						<div class="item-readmore">
							<a href="<?php $this->permalink(); ?>"> 阅读全文 → </a>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		<?php endwhile; ?>
		</div>
	</div>
	<div class="lists-navigator clearfix">
    <?php $this->pageNav('←','→','2','...'); ?>
  </div>
</div>

<?php $this->need('footer.php'); ?>