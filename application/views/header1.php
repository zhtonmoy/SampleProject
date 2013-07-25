<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="http://stuweb.cms.gre.ac.uk/~bm340/css/mystyle.css" type="text/css">
    </head>
    <body>
        <div class="centeredBox" ><h1></h1></p>
        <div class="banner" ><img src="http://stuweb.cms.gre.ac.uk/~bm340/img/slogan.png"/></div>
        <div class="topAdd" ><h1>Advertisement</h1></div>
        <hr>
        <div class="leftAds">
        <div class="categories"><div class="leftAdLabel">Category list</div>
        <ul>
        <li><a  href="<?php echo base_url();?>DisplayAdController/search_laptop">Laptop and Accessories</a></li>
        <li><a  href="<?php echo base_url();?>DisplayAdController/search_mobile">Mobile and Accessories</a></li>
        <li><a  href="<?php echo base_url();?>DisplayAdController/search_house">House and Flats</a></li>
        <li><a  href="<?php echo base_url();?>DisplayAdController/search_books">Books and Magazines</a></li>
        <li><a  href="<?php echo base_url();?>DisplayAdController/search_games">Games</a></li>
        <li><a  href="<?php echo base_url();?>DisplayAdController/search_homeApp">Home Appliance</a></li>
        <li><a  href="<?php echo base_url();?>DisplayAdController/search_jobs">Jobs</a></li>
        <li><a  href="<?php echo base_url();?>DisplayAdController/search_medical">Medical</a></li>
        <li><a  href="<?php echo base_url();?>DisplayAdController/search_sports">Sports</a></li>
        <li><a  href="<?php echo base_url();?>DisplayAdController/search_tolet">To Let</a></li>
        <li><a  href="<?php echo base_url();?>DisplayAdController/search_tutor">Tutor</a></li>
        </ul>
        </div>
        <hr>
        <div class="recentAds"><div class="leftAdLabel">Recent Ads</div>
		<?php
            $rec=$this->session->userdata('LatestRec');
            $i=0;
            $recArr=array();;
            foreach($rec->result() as $v){
            //echo $v->productName.'<br>';
            $recArr[]=$v;
            $i=$i+1;
            if($i==5)
                    break;
            //echo '<hr>';
            }
            echo '<ul>';
            echo '<li><a href='.base_url().'DisplayAdController/RecentAd1>'.$recArr[0]->productName.'<a></li>';
            echo '<li><a href='.base_url().'DisplayAdController/RecentAd2>'.$recArr[1]->productName.'<a></li>';
            echo '<li><a href='.base_url().'DisplayAdController/RecentAd3>'.$recArr[2]->productName.'<a></li>';
            echo '<li><a href='.base_url().'DisplayAdController/RecentAd4>'.$recArr[3]->productName.'<a></li>';
            echo '<li><a href='.base_url().'DisplayAdController/RecentAd5>'.$recArr[4]->productName.'<a></li>';
            ?>
		
		<li><a href="<?php echo base_url();?>DisplayAdController/search_latest">Click for Recent Ads</a></li>
		</ul>
		</div>
        <hr>
        <div class="communityAds"><div class="leftAdLabel">Community Ads</div>
		<ul>
		<li><a href="<?php echo base_url();?>community_ad_controller">Community Ads options</a></li>
		<li><a href="<?php echo base_url();?>display_comm_ads/view_ads">View Community Ads</a></li>
		</ul></div>
        </div>
		