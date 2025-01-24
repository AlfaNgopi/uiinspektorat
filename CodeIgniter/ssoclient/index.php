<?php
	if (!defined("SSO_CLIENT_ROOT_PATH"))
	{
		echo "File setting tidak ditemukan";
		exit();
	}

	require_once SSO_CLIENT_ROOT_PATH . "/" . SSO_CLIENT_SUPPORT_PATH . "/sso_functions.php";
	require_once SSO_CLIENT_ROOT_PATH . "/" . SSO_CLIENT_SUPPORT_PATH . "/sso_random.php";
	require_once SSO_CLIENT_ROOT_PATH . "/" . SSO_CLIENT_SUPPORT_PATH . "/sso_blowfish.php";
	require_once SSO_CLIENT_ROOT_PATH . "/" . SSO_CLIENT_SUPPORT_PATH . "/sso_aes.php";
?>