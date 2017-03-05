<?php
namespace me\fru1t\citasia\content;
use me\fru1t\citatsia\template\EmptyPage;

$body = <<<HTML
<div class="spacer content"></div>
<div class="container centered">
  <div class="section-title">Servers</div>
  <div class="spacer section-title"></div>
  
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
  
  <div class="forum-board">
    <div class="forum-board-post">
      <div class="header">
        <div class="title">
          <a href="#">Reminiscing on resigning mod witha super long title becuase we like to break
            things and test that hting won't break when we do because that's ust good QA.</a>
        </div>
        <div class="comments">0</div>
        <div class="date">March 1st, 2017 11:15pm</div>
        <div class="author"><a href="#">GLA3PAC</a></div>
      </div>
      <div class="body">So yeah I'm thinking about resigning. I'm kind of convinced I was never meant to become considering my privileges don't work. I type sm_mute @me test in console than in in game chat it says error than some random ass number so yeah thats it.0
        Signed by GLA|3PAC the true rap god as futom would say</div>
    </div>
    <div class="forum-board-post">
      <div class="header">
        <div class="title"><a href="#">Reminiscing on resigning mod</a></div>
        <div class="comments">0</div>
        <div class="date">September 30th, 2020 12:30pm</div>
        <div class="author"><a href="#">GLA3PAC</a></div>
      </div>
      <div class="body">So yeah I'm thinking about resigning. I'm kind of convinced I was never meant to become considering my privileges don't work. I type sm_mute @me test in console than in in game chat it says error than some random ass number so yeah thats it.0
        Signed by GLA|3PAC the true rap god as futom would say</div>
    </div>

  </div>
</div>

HTML;

EmptyPage::start()
  ->with(EmptyPage::FIELD_HTML_TITLE, "Home")
  ->with(EmptyPage::FIELD_BODY, $body)
  ->render();
