<?php 

if (isset($_GET['l']) && ($l = $_GET['l']) && file_exist('landingPeaceLabs_'.$l.'.html'))
{

	include('landingPeaceLabs_'.$l.'.html');

}
else
{

        include('landingPeaceLabs.html');

}
