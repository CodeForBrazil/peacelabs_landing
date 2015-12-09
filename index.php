<?php 

if (isset($_GET['en']) && file_exists('landingPeaceLabs_en.html'))
{

	include('landingPeaceLabs_en.html');

}
else
{

        include('landingPeaceLabs.html');

}
