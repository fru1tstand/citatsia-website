<?php
namespace me\fru1t\citasia\content;
use me\fru1t\citatsia\FakeData;
use me\fru1t\citatsia\template\EmptyPage;
use me\fru1t\citatsia\template\forum\ForumBoard;
use me\fru1t\citatsia\template\prefab\Gametracker;

$newsForumBoardHtml = ForumBoard::createFrom('News', FakeData::getFakeForumBoardPosts())
    ->render(false, true);
$gametrackerHtml = Gametracker::start()->render(false, true);

$body = <<<HTML
<section class="container">
  <div class="page-title">Home</div>
  <p>Welcome to the Church of Citatsia website.</p>
</section>

{$gametrackerHtml}

{$newsForumBoardHtml}

HTML;

EmptyPage::start()
  ->with(EmptyPage::FIELD_HTML_TITLE, "Home")
  ->with(EmptyPage::FIELD_BODY, $body)
  ->render();
