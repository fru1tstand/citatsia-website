<?php
namespace me\fru1t\citatsia\template\prefab;
use me\fru1t\common\template\Template;
use me\fru1t\common\template\TemplateField;

/**
 * Static html for the gametracker widgets.
 */
class Gametracker extends Template {
  /**
   * Produces the content this template defines in the form of an HTML string. This method is passed
   * a map with template field names as keys, and values that the content page provides.
   * @param string[] $fields An associative array mapping fields to ContentField objects.
   * @return string
   */
  public static function getTemplateRenderContents_internal(array $fields): string {
    return <<<HTML
<section class="container centered">
  <div class="section-title">Servers</div>
  <div class="gametracker-wrapper">
    <iframe class="gametracker"
            src="http://cache.gametracker.com/components/html0/?host=162.248.94.109:27016&bgColor=FFFFFF&fontColor=000000&titleBgColor=FFFFFF&titleColor=000000&borderColor=FFFFFF&linkColor=00A001&borderLinkColor=000000&showMap=0&showCurrPlayers=0&showTopPlayers=0&showBlogs=0&width=250"
            frameborder="0"
            scrolling="no"></iframe>
    <a class="card-link" href="steam://connect/162.248.94.109:27016">Join</a>
  </div>
  <div class="gametracker-wrapper">
    <iframe class="gametracker"
            src="http://cache.gametracker.com/components/html0/?host=66.85.14.117:27015&bgColor=FFFFFF&fontColor=000000&titleBgColor=FFFFFF&titleColor=000000&borderColor=FFFFFF&linkColor=00A001&borderLinkColor=000000&showMap=0&showCurrPlayers=0&showTopPlayers=0&showBlogs=0&width=250"
            frameborder="0"
            scrolling="no"></iframe>
    <a class="card-link" href="steam://connect/66.85.14.117:27015">Join</a>
  </div>
  <div class="gametracker-wrapper">
    <iframe class="gametracker"
            src="http://cache.gametracker.com/components/html0/?host=66.150.164.139:27015&bgColor=FFFFFF&fontColor=000000&titleBgColor=FFFFFF&titleColor=000000&borderColor=FFFFFF&linkColor=00A001&borderLinkColor=000000&showMap=0&showCurrPlayers=0&showTopPlayers=0&showBlogs=0&width=250"
            frameborder="0"
            scrolling="no"></iframe>
    <a class="card-link" href="steam://connect/66.150.164.139:27015">Join</a>
  </div>
  <div class="gametracker-wrapper">
    <iframe class="gametracker"
            src="http://cache.gametracker.com/components/html0/?host=208.146.44.122:27015&bgColor=FFFFFF&fontColor=000000&titleBgColor=FFFFFF&titleColor=000000&borderColor=FFFFFF&linkColor=00A001&borderLinkColor=000000&showMap=0&showCurrPlayers=0&showTopPlayers=0&showBlogs=0&width=250"
            frameborder="0"
            scrolling="no"></iframe>
    <a class="card-link" href="steam://connect/208.146.44.122:27015">Join</a>
  </div>
</section>
HTML;

  }

  /**
   * Provides the fields this template contains.
   * @return TemplateField[]
   */
  static function getTemplateFields_internal(): array {
    return [];
  }
}
