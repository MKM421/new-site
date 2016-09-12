<!--<nav role="navigation">

  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
  </ul>

</nav>-->

<ul id="main-nav" class="tabs">
  <li class="tab-link current" data-tab="about">About</li>
  <li class="tab-link" data-tab="work">Work</li>
  <li class="tab-link" data-tab="resume">Resume</li>
</ul>
