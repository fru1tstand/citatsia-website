<?php
namespace me\fru1t\citasia\content;
use me\fru1t\citatsia\FakeData;
use me\fru1t\citatsia\template\EmptyPage;
use me\fru1t\citatsia\template\forum\ForumBoard;

$newsForumBoardHtml = ForumBoard::createFrom(FakeData::getFakeForumBoardPosts())->render(false, true);

$body = <<<HTML
<div class="spacer content"></div>
<div class="container centered">
  <div class="section-title">Servers</div>
  
  <div class="gametracker-wrapper">
    <iframe class="gametracker"
            src="http://cache.gametracker.com/components/html0/?host=162.248.94.109:27016&bgColor=FFFFFF&fontColor=000000&titleBgColor=FFFFFF&titleColor=000000&borderColor=FFFFFF&linkColor=00A001&borderLinkColor=000000&showMap=0&showCurrPlayers=0&showTopPlayers=0&showBlogs=0&width=250"
            frameborder="0"
            scrolling="no"></iframe>
    <a href="steam://connect/162.248.94.109:27016">Join</a>
  </div>
  <div class="gametracker-wrapper">
    <iframe class="gametracker"
            src="http://cache.gametracker.com/components/html0/?host=66.85.14.117:27015&bgColor=FFFFFF&fontColor=000000&titleBgColor=FFFFFF&titleColor=000000&borderColor=FFFFFF&linkColor=00A001&borderLinkColor=000000&showMap=0&showCurrPlayers=0&showTopPlayers=0&showBlogs=0&width=250"
            frameborder="0"
            scrolling="no"></iframe>
    <a href="steam://connect/66.85.14.117:27015">Join</a>
  </div>
  <div class="gametracker-wrapper">
    <iframe class="gametracker"
            src="http://cache.gametracker.com/components/html0/?host=66.150.164.139:27015&bgColor=FFFFFF&fontColor=000000&titleBgColor=FFFFFF&titleColor=000000&borderColor=FFFFFF&linkColor=00A001&borderLinkColor=000000&showMap=0&showCurrPlayers=0&showTopPlayers=0&showBlogs=0&width=250"
            frameborder="0"
            scrolling="no"></iframe>
    <a href="steam://connect/66.150.164.139:27015">Join</a>
  </div>
  <div class="gametracker-wrapper">
    <iframe class="gametracker"
            src="http://cache.gametracker.com/components/html0/?host=208.146.44.122:27015&bgColor=FFFFFF&fontColor=000000&titleBgColor=FFFFFF&titleColor=000000&borderColor=FFFFFF&linkColor=00A001&borderLinkColor=000000&showMap=0&showCurrPlayers=0&showTopPlayers=0&showBlogs=0&width=250"
            frameborder="0"
            scrolling="no"></iframe>
    <a href="steam://connect/208.146.44.122:27015">Join</a>
  </div>
</div>

<div class="spacer content"></div>
<div class="container">
  <div class="section-title">News</div>
  <div class="spacer section-title"></div>
  $newsForumBoardHtml
</div>

HTML;

EmptyPage::start()
  ->with(EmptyPage::FIELD_HTML_TITLE, "Home")
  ->with(EmptyPage::FIELD_BODY, $body)
  ->render();
