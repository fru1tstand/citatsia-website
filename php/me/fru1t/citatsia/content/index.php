<?php
namespace me\fru1t\citasia\content;
use me\fru1t\citatsia\template\EmptyPage;

$body = <<<HTML
<header>
  <img src="/banner.png" />
</header>
HTML;

EmptyPage::start()
  ->with(EmptyPage::FIELD_HTML_TITLE, "Yay")
  ->with(EmptyPage::FIELD_BODY, $body)
  ->render();
