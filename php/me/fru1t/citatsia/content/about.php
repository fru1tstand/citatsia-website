<?php
namespace me\fru1t\citasia\content;
use me\fru1t\citatsia\template\EmptyPage;
use me\fru1t\citatsia\template\prefab\Gametracker;

$gametrackerHtml = Gametracker::start()->render(false, true);

$body = <<<HTML
<section class="container">
  <div class="page-title">About</div>
  <p>Wanna join a great community with great people? Join us in game, on Steam, or in TeamSpeak.</p>
</section>
<ul class="container about-community-links">
  <li><a href="https://steamcommunity.com/groups/churchofcitatsia"
         target="_blank">Steam Community</a></li>
  <li><a href="ts3server://citatsia.com" target="_blank">TeamSpeak</a></li>
</ul>

{$gametrackerHtml}

<section class="container">
  <div class="section-title">Donating/VIP</div>
  <p>Donating gives you special VIP access. Check the benefits below.</p>
</section>
<table class="donate-benefits-table">
  <thead>
    <tr>
      <th>No Donation</th>
      <th>VIP</th>
      <th>VIP+</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Ads</td>
      <td>No Ads</td>
      <td>No Ads</td>
    </tr>
    <tr>
      <td>Standard Joining</td>
      <td>Standard Joining + Slot Reservations</td>
      <td>Standard Joining + Slot Reservations</td>
    </tr>
    <tr>
      <td>Self Mute</td>
      <td>Self Mute + Server Mute</td>
      <td>Self Mute + Server Mute</td>
    </tr>
    <tr>
      <td>No Hats</td>
      <td>15 Hats</td>
      <td>30 Hats</td>
    </tr>
    <tr>
      <td>No Trails</td>
      <td>5 Trails</td>
      <td>10 Trails</td>
    </tr>
    <tr>
      <td>RTV</td>
      <td>RTV + VIP Extend</td>
      <td>RTV + VIP Extend</td>
    </tr>
    <tr>
      <td>Default Rank</td>
      <td>Default Rank + Custom Title</td>
      <td>Default Rank + Custom Title</td>
    </tr>
    <tr>
      <td>No Custom Colors</td>
      <td>14 Colors</td>
      <td>14 Colors</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>-</th>
      <th>1 Month: $5 USD<br />3 Months: $10 USD<br />Permanent: $15 USD</th>
      <th>Permanent: $30 USD</th>
    </tr>
  </tfoot>
</table>
<div class="spacer card"></div>
<div class="container">
  <a href="#" class="donate-button card-link">Donate</a>
</div>
HTML;

EmptyPage::start()
    ->with(EmptyPage::FIELD_HTML_TITLE, "About")
    ->with(EmptyPage::FIELD_BODY, $body)
    ->render();
