<?php
namespace me\fru1t\citatsia\template;
use me\fru1t\citatsia\LoginHandler;
use me\fru1t\common\template\Template;
use me\fru1t\common\template\TemplateField;

/**
 *
 */
class EmptyPage extends Template {
  const FIELD_HTML_TITLE = "html-title";
  const FIELD_BODY = "body";


  /**
   * Produces the content this template defines in the form of an HTML string. This method is passed
   * a map with template field names as keys, and values that the content page provides.
   *
   * @param string[] $fields An associative array mapping fields to ContentField objects.
   * @return string
   */
  public static function getTemplateRenderContents_internal(array $fields): string {
    $loginModuleHtml = LoginHandler::getLoginModuleHtml();
    return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Church of Citatsia - {$fields[self::FIELD_HTML_TITLE]}</title>
	<meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
  <link rel="icon" href="http://www.citatsia.com/forum/style/pepper.ico">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="styles.css" />
</head>
<body>
  <header class="global-header">
    <img class="header-logo"
         src="https://s3-us-west-1.amazonaws.com/fm-msc/citatsia/church-banner.png" />
    
    <div class="header-login-wrapper">
      $loginModuleHtml
    </div>
  </header>
  <div class="global-header-nav">
    <ul class="header-links">
      <li><a href="/">Home</a></li>
      <li><a href="about">About</a></li>
      <li><a href="forum">Forum</a></li>
      <li><a href="members">Members</a></li>
      <li><a href="sourcebans">SourceBans</a></li>
    </ul>
  </div>
  
	{$fields[self::FIELD_BODY]}
</body>
</html>
HTML;
  }

  /**
   * Provides the fields this template contains.
   *
   * @return TemplateField[]
   */
  static function getTemplateFields_internal(): array {
    return TemplateField::createFrom(self::FIELD_HTML_TITLE, self::FIELD_BODY);
  }
}
