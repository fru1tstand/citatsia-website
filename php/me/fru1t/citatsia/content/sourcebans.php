<?php
namespace me\fru1t\citasia\content;
use me\fru1t\citatsia\template\EmptyPage;

$body = <<<HTML
sourcebans
<div style="height: 1000px;"></div>
HTML;

EmptyPage::start()
    ->with(EmptyPage::FIELD_HTML_TITLE, "sourcebans")
    ->with(EmptyPage::FIELD_BODY, $body)
    ->render();
