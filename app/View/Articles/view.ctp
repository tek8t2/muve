<div class="articles view row" itemscope itemtype="http://schema.org/Article">
	<div class="actions span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
					<li><?php echo $this->Html->link(__('Edit Article'), array('action' => 'edit', $article['Article']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Article'), array('action' => 'delete', $article['Article']['id']), null, __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
		<?php echo $this->element('TwitterShareButton'); echo $this->element('FacebookShareButton'); ?>
	</div>
	<div class="span10">
		<h2 itemprop="name"><?php  echo $article['Article']['title']; ?></h2>
		<p><small>Posted by: <span itemprop="author"><?php echo $article['User']['f_name'] . ' ' . $article['User']['l_name']; ?></span> on: <span itemprop="dateCreated"><?php echo $this->Time->nice($article['Article']['ts_posted']); ?></span></small></p>
		<hr />
		<article itemprop="articleBody">
		<?php echo $article['Article']['title']; ?>
		</article>
	</div>
</div>
