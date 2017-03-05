<?php
namespace me\fru1t\citatsia\template\forum;
use me\fru1t\common\template\Template;
use me\fru1t\common\template\TemplateField;

/**
 * An element that contains a group of post titles.
 */
class ForumBoard extends Template {
  public const FIELD_POSTS = 'posts';

  /**
   * Creates an instance of this class from posts.
   * @param ForumBoardPost[] ...$forumBoardPosts The posts to group.
   * @return ForumBoard A reader-ready object.
   */
  public static function createFrom(array $forumBoardPosts): ForumBoard {
    $postHtml = '';
    foreach ($forumBoardPosts as $forumBoardPost) {
      $postHtml .= $forumBoardPost->render(false, true);
    }
    return ForumBoard::start()->with(self::FIELD_POSTS, $postHtml);
  }

  /**
   * Produces the content this template defines in the form of an HTML string. This method is passed
   * a map with template field names as keys, and values that the content page provides.
   * @param string[] $fields An associative array mapping fields to ContentField objects.
   * @return string
   */
  public static function getTemplateRenderContents_internal(array $fields): string {
    return <<<HTML
<div class="forum-board">
  {$fields[self::FIELD_POSTS]}
</div>
HTML;

  }

  /**
   * Provides the fields this template contains.
   * @return TemplateField[]
   */
  static function getTemplateFields_internal(): array {
    return TemplateField::createFrom(self::FIELD_POSTS);
  }
}
