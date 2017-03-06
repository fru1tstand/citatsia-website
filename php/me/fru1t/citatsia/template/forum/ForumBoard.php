<?php
namespace me\fru1t\citatsia\template\forum;
use me\fru1t\common\language\Preconditions;
use me\fru1t\common\template\Template;
use me\fru1t\common\template\TemplateField;

/**
 * Groups together one or more forum post summaries into a "board". Eg. a News board would contain
 * multiple news headers (post summaries).
 */
class ForumBoard extends Template {
  public const FIELD_POSTS = 'posts';
  public const FIELD_TITLE = 'title';

  /**
   * Creates an instance of this class from posts.
   *
   * @param null|string $title
   * @param ForumPostSummary[] ...$forumBoardPosts The posts to group.
   * @return ForumBoard A reader-ready object.
   */
  public static function createFrom(?string $title, array $forumBoardPosts): ForumBoard {
    $postHtml = '';
    foreach ($forumBoardPosts as $forumBoardPost) {
      $postHtml .= $forumBoardPost->render(false, true);
    }
    return ForumBoard::start()->with(self::FIELD_POSTS, $postHtml)->with(self::FIELD_TITLE, $title);
  }

  /**
   * Produces the content this template defines in the form of an HTML string. This method is passed
   * a map with template field names as keys, and values that the content page provides.
   * @param string[] $fields An associative array mapping fields to ContentField objects.
   * @return string
   */
  public static function getTemplateRenderContents_internal(array $fields): string {
    $titleHtml = '';
    if (!Preconditions::isNullEmptyOrWhitespace($fields[self::FIELD_TITLE])) {
      $titleHtml = <<<HTML
<div class="section-title">{$fields[self::FIELD_TITLE]}</div>
<div class="spacer section-title"></div>
HTML;
    }

    return <<<HTML
<section class="container">
  {$titleHtml}
  <div class="forum-board">
    {$fields[self::FIELD_POSTS]}
  </div>
</section>
HTML;

  }

  /**
   * Provides the fields this template contains.
   * @return TemplateField[]
   */
  static function getTemplateFields_internal(): array {
    return [
        TemplateField::newBuilder()->called(self::FIELD_POSTS)->asRequired()->build(),
        TemplateField::newBuilder()->called(self::FIELD_TITLE)->build()
    ];
  }
}
