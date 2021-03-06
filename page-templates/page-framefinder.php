<?php

/*
Template Name: Framefinder
*/
get_header(); ?>

<div class="frameFinder">
  <div class="frameFinder__form">
  <h1>Frame Finder</h1>
  <p>Enter your requirements and we’ll help find the perfect stand for you</p>
  <form>
    <select name="budget">
      <option value="1">£1k</option>
      <option value="2">£1k-£5k</option>
      <option value="3">£5k-£10k</option>
      <option value="4">£10k+</option>
    </select>
    <select name="installation-type">
      <option value="1">I want a stand I can build myself</option>
      <option value="2">I want an installation team</option>
      <option value="3">I don't know yet</option>
    </select>
    <select name="exhibition-size">
      <option value="1">I have a back wall shell scheme</option>
      <option value="2">I have a corner shell scheme</option>
      <option value="3">I have an island stand</option>
      <option value="4">I haveen't booked a stand yet</option>
    </select>
    <button type="submit">Find stand</button>
  </form>
  </div>
</div>

<div class="frameFinder__results">
  <div class="frameFinder__results--image">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/isoframe-custom.jpg">
  </div>
  <div class="frameFinder__results--content">
    <h2>Custom Hire</h2>
    <p>ISOframe Installed Solutions are a range of exhibition stand packages that provide you with options for stand sizes, accessories and support services. Available to hire or buy, Installed Solutions are ideal when you need a quick and easy way to get everything you need for an upcoming exhibition.</p>
    <a href="#" class="button">Find out more</a>
  </div>
</div>

<div class="frameFinder__results">
  <div class="frameFinder__results--image">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wave.jpg">
  </div>
  <div class="frameFinder__results--content">
    <h2>Wave</h2>
    <p>The ISOframe Wave is a portable exhibition system with a display that can be formed into any shape and reduced or extended in size without the need to reprint graphics. The Wave is ideal for shell-schemes or space only events and where you need the flexibility to adapt to different size exhibition spaces.</p>
    <a href="#" class="button">Find out more</a>
  </div>
</div>

<div class="frameFinder__results last">
  <div class="frameFinder__results--image">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/express.jpg">
  </div>
  <div class="frameFinder__results--content">
    <h2>Express pop-up</h2>
    <p>The ISOframe Express Pop-up is a quick to assemble and easy to transport exhbition stand. The Express Pop-up is perfect for shell-scheme exhibition spaces and when your event space is similar at different venues.</p>
    <a href="#" class="button">Find out more</a>
  </div>
</div>

<?php get_template_part( 'template-parts/designer-pull-out', 'designer-pull-out' ); ?>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer();
