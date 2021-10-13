<?php 
# @*************************************************************************@
# @ Software author: Mansur Altamirov (Mansur_TL)                           @
# @ Author_url 1: https://www.instagram.com/mansur_tl                       @
# @ Author_url 2: http://codecanyon.net/user/mansur_tl                      @
# @ Author E-mail: vayart.help@gmail.com                                    @
# @*************************************************************************@
# @ ColibriSM - The Ultimate Modern Social Media Sharing Platform           @
# @ Copyright (c) 2020 - 2021 ColibriSM. All rights reserved.               @
# @*************************************************************************@

if (empty($cl["is_logged"])) {
	cl_redirect("guest");
}
else {
	require_once(cl_full_path("core/apps/home/app_ctrl.php"));

	$cl["app_statics"] = array(
		"styles" => array(
			cl_css_template("statics/js/libs/owl-cr-2-2.3.4/assets/owl.carousel.min"),
			cl_css_template("statics/js/libs/owl-cr-2-2.3.4/assets/owl.theme.default")
		),
		"scripts" => array(
			cl_js_template("statics/js/libs/owl-cr-2-2.3.4/owl.carousel.min")
		)
	);

	$cl["page_title"]    = cl_translate("Homepage");
	$cl["page_desc"]     = $cl["config"]["description"];
	$cl["page_kw"]       = $cl["config"]["keywords"];
	$cl["pn"]            = "home";
	$cl["sbr"]           = true;
	$cl["sbl"]           = true;
	$cl["tl_feed"]       = cl_get_timeline_feed(15);
	$cl["tl_feed_total"] = 15;
	$cl["tl_swifts"]     = cl_timeline_swifts();
	$cl["http_res"]      = cl_template("home/content");
}