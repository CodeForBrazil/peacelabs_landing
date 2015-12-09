<?php 

if (isset($_GET['en']) && file_exist('landingPeaceLabs_en.html'))
{

	include('landingPeaceLabs_en.html');

}
else
{

        include('landingPeaceLabs.html');

}
