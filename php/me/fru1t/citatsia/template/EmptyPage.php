<?php
namespace me\fru1t\citatsia\template;
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
    return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Church of Citatsia - {$fields[self::FIELD_HTML_TITLE]}</title>
	<meta charset="UTF-8" />
	
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="styles.css" />
</head>
<body>
  <header class="global-header">
    <div class="container">
      <div class="header-login-wrapper">
        <div class="header-login-persistent">
          my asdf
        </div>
        <div class="header-login-hidden">
          
        </div>
        <div class="header-login">
          asdf<br />
          asdf<br />
          asdf<br />
          asdf<br />
          asdf<br />
          asdf<br />
          asdf<br />
          asdf<br />
          asdf<br />
          asdf<br />

        </div>
      </div>
      
      <img class="header-logo"
           src="https://s3-us-west-1.amazonaws.com/fm-msc/citatsia/church-banner.png" />
      <ul class="header-links">
        <li>hi</li>
        <li>hi again</li>
      </ul>
    </div>
  </header>
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
