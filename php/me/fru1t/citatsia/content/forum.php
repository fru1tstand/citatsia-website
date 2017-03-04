<?php
namespace me\fru1t\citasia\content;
use me\fru1t\citatsia\template\EmptyPage;

$body = <<<HTML
forum - (General | General, introductions, suggestions), (applications | jr, sr, admin), (reports | bugs, players, staff, appeals), 
<div style="height: 1000px;"></div>
HTML;

EmptyPage::start()
    ->with(EmptyPage::FIELD_HTML_TITLE, "Forum")
    ->with(EmptyPage::FIELD_BODY, $body)
    ->render();
