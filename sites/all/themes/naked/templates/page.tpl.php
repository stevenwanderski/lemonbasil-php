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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36499930-11', 'lemonandbasil.co');
  ga('send', 'pageview');

</script>