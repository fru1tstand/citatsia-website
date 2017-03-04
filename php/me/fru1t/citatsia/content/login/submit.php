<?php
namespace me\fru1t\citasia\content\login;
use me\fru1t\citatsia\LoginHandler;
use me\fru1t\common\language\Param;

$action = Param::fetchGet("action");
if ($action === 'login') {
  LoginHandler::login();
} else {
  LoginHandler::logout();
}

header("Location: /");
