<header id="blackline" role="banner" class="fixed-top">
	<div>
	</div>
</header>

<div class="main-container container">

  <header role="banner" id="page-header">
    <?php if (!empty($logo)): ?>
        <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="logo" />
        </a>
      <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div id="content-container" class="row-fluid">
    <section class="<?php print _bootstrap_content_span($columns); ?> section-container">  
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="sidebar span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  
    
    <div id="content-background" />
  </div>
</div>
<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
