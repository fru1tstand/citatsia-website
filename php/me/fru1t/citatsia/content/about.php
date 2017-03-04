<?php
namespace me\fru1t\citasia\content;
use me\fru1t\citatsia\template\EmptyPage;

$body = <<<HTML
about - GAme servers status, STaff list, teamspeak info, VIP/donating, 
<div style="height: 1000px;"></div>
HTML;

EmptyPage::start()
    ->with(EmptyPage::FIELD_HTML_TITLE, "About")
    ->with(EmptyPage::FIELD_BODY, $body)
    ->render();
