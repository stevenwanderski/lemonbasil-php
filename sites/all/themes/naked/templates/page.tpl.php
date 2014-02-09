<header>
  <div class="inner cf">
    <div class="left">
      <a class="logo" href="/">
        <div class="brand-name">lemon&amp;basil</div>
        <div class="tag">Personal Chef Services</div>
      </a>
    </div>

    <nav class="right">
      <a href="/how-it-works">How it Works</a> <a href="/about">About the Chef</a> <a href="/view-menus">View Menus</a> <a class="btn" href="/contact">Contact</a>
    </nav>
  </div>
</header>

<section id="content">
  <div class="inner">
    <?php print $messages; ?>
    <?php print render($page['content']); ?>
  </div>
</section>

<footer>
  <div class="inner cf">
    <div class="col col-lemon">
      <h4>lemon&amp;basil</h4>
      <p>Chicago, IL 60622</p>
      <p>hackett.elizabeth@gmail.com</p>
    </div>
  </div>
</footer>