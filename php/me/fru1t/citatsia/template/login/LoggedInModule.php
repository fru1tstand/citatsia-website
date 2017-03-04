<?php
namespace me\fru1t\citatsia\template\login;
use me\fru1t\common\template\Template;
use me\fru1t\common\template\TemplateField;

/**
 *
 */
class LoggedInModule extends Template {

  /**
   * Produces the content this template defines in the form of an HTML string. This method is passed
   * a map with template field names as keys, and values that the content page provides.
   *
   * @param string[] $fields An associative array mapping fields to ContentField objects.
   * @return string
   */
  public static function getTemplateRenderContents_internal(array $fields): string {
    return <<<HTML
Not implemented yet. <a href="/login/submit">Logout</a>
HTML;

  }

  /**
   * Provides the fields this template contains.
   *
   * @return TemplateField[]
   */
  static function getTemplateFields_internal(): array {
    return [];
  }
}
