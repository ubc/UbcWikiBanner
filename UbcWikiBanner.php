<?php

$wgExtensionCredits[$type][] = array(
        'path' => __FILE__,
        'name' => "UBC_WikiBanner",
        'description' => "Allows UBC CLF Header to exsist on Wiki",
//      'descriptionmsg' => "",
        'version' => 1,
        'author' => "Inquisitor Ehrenstein/ CTLT",
        'url' => "http://wiki.ubc.ca",
);


//Explicitly defining global variables

$wgTopBannerCode = '
<!-- UBC Global Utility Menu -->
                <div id="ubc-banner" class="full-width full-width-left">
                <div id="#ubc7-footer-menu"></div>
                <div class="collapse expand" id="ubc7-global-menu">
                        <div id="ubc7-search" class="expand">
                                <div class="container" style="border-left: 1px solid #d7e0e7; border-right: 1px solid #d7e0e7; padding-left: 14px;padding-right: 14px;">
                                        <div id="ubc7-search-box">
                                                <form class="form-search" method="get" action="http://www.ubc.ca/search/refine/" role="search">
                                                        <input type="text" name="q" placeholder="Search UBC websites" class="input-xlarge search-query">
                                                        <input type="hidden" name="label" value="Search UBC" />
                                                        <input type="hidden" name="site" value="wiki.ubc.ca" />
                                                        <button type="submit" class="btn">Search</button>
                                                </form>
                                        </div>
                                </div>
                        </div>
                        <div class="row-fluid">
                                <div id="ubc7-global-header" class="expand">
                                        <!-- Global Utility Header from CDN -->
                                </div>
                        </div>
                </div>
                <!-- End of UBC Global Utility Menu -->
                <!-- UBC Header -->
                <header id="ubc7-header" class="row-fluid expand" role="banner">
                        <div class="container">
                                <div class="span1">
                                        <div id="ubc7-logo">
                                                <a href="http://www.ubc.ca" title="The University of British Columbia (UBC)">The University of British Columbia</a>
                                        </div>
                                </div>
                                <div class="span2">
                                        <div id="ubc7-apom">
                                                <a href="//cdn.ubc.ca/clf/ref/aplaceofmind" title="UBC a place of mind">UBC - A Place of Mind</a>                        
                                        </div>
                                </div>
                                <div class="span9" id="ubc7-wordmark-block">
                                        <div id="ubc7-wordmark">
                                                <a href="http://www.ubc.ca" title="The University of British Columbia (UBC)">The University of British Columbia</a>
                                                <!--<span class="ubc7-campus" id="ubc7-vancouver-campus">Vancouver Campus</span>-->
                                        </div>
                                        <!-- <div id="ubc7-global-utility">
                                                <button type="button" data-toggle="collapse" data-target="#ubc7-global-menu"><span>UBC Search</span></button>
                                                <noscript><a id="ubc7-global-utility-no-script" href="http://www.ubc.ca/" title="UBC Search">UBC Search</a></noscript>
                                        </div> -->
                                </div>
                        </div>
                </header>
                <!-- End of UBC Header -->
                <!-- UBC Unit Identifier -->
            <div id="ubc7-unit" class="row-fluid expand">
                <div class="container">
                        <div class="span12">
                            <div id="ubc7-unit-name" class="ubc7-single-element">
                                <a href="/"><span id="ubc7-unit-faculty"></span><span id="ubc7-unit-identifier">UBC Wiki</span></a>
                            </div>
                        </div>
                        </div>
            </div>
        </div><!-- End of Full Width -->


';

$wgHooks['BeforePageDisplay'][] = 'WikiBanner';
function WikiBanner( OutputPage &$out, Skin &$skin ) {
	global $wgTopBannerCode;

	$out->prependHTML( $wgTopBannerCode );

	return TRUE;
}
