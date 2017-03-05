<?php
namespace me\fru1t\citatsia\template\forum;
use me\fru1t\common\template\Template;
use me\fru1t\common\template\TemplateField;

/**
 * An element within a forum board that shows title, comments, author, post date, and the body of a
 * post.
 */
class ForumBoardPost extends Template {
  public const FIELD_TITLE = "title";
  public const FIELD_POST_URL = "post-url";
  public const FIELD_COMMENTS = "comments";
  public const FIELD_DATE = "date";
  public const FIELD_AUTHOR = "author";
  public const FIELD_AUTHOR_URL = "author-url";
  public const FIELD_BODY = "body";

  /**
   * Produces the content this template defines in the form of an HTML string. This method is passed
   * a map with template field names as keys, and values that the content page provides.
   *
   * @param string[] $fields An associative array mapping fields to ContentField objects.
   * @return string
   */
  public static function getTemplateRenderContents_internal(array $fields): string {
    return <<<HTML
<div class="forum-board-post">
  <div class="header">
    <div class="title"><a href="{$fields[self::FIELD_POST_URL]}">{$fields[self::FIELD_TITLE]}</a></div>
    <div class="comments">{$fields[self::FIELD_COMMENTS]}</div>
    <div class="date">{$fields[self::FIELD_DATE]}</div>
    <div class="author"><a href="{$fields[self::FIELD_AUTHOR_URL]}">{$fields[self::FIELD_AUTHOR]}</a></div>
  </div>
  <div class="body">{$fields[self::FIELD_BODY]}</div>
</div>
HTML;

  }

  /**
   * Provides the fields this template contains.
   *
   * @return TemplateField[]
   */
  static function getTemplateFields_internal(): array {
    return TemplateField::createFrom(self::FIELD_TITLE, self::FIELD_BODY, self::FIELD_AUTHOR,
        self::FIELD_AUTHOR_URL, self::FIELD_COMMENTS, self::FIELD_DATE, self::FIELD_POST_URL);
  }
}
