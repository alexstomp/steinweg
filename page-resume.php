<?php
/*
Template Name: Resume Page
*/
?>
<?php get_header(); ?>
<div id="sidebar-wrap">
	<a href="<%= about_path %>">ABOUT</a>
	<a href="<%= contact_path %>" class="active">CONTACT INFO</a>
	<a href="#">RESUME</a>
</div>

<div id="right-content">
	<p class="contact-p"><span>E-mail: </span><span class="text"><a href="mailto:steinwe1@illinois.edu">steinwe1@illinois.edu</a></span></p>
	<p class="contact-p"><span>Phone: </span><span class="text">(847) 530-5117</span></p>
	<p class="contact-p"><span>Address: </span><span class="text">205 E. Armory Ave.<br />Champaign, IL<br />61820</span></p>
</div>
<?php get_footer(); ?>