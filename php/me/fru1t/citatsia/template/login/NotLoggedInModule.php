<?php
namespace me\fru1t\citatsia\template\login;
use me\fru1t\common\template\Template;
use me\fru1t\common\template\TemplateField;

/**
 *
 */
class NotLoggedInModule extends Template {

  /**
   * Produces the content this template defines in the form of an HTML string. This method is passed
   * a map with template field names as keys, and values that the content page provides.
   *
   * @param string[] $fields An associative array mapping fields to ContentField objects.
   * @return string
   */
  public static function getTemplateRenderContents_internal(array $fields): string {
    return <<<HTML
  <div class="header-login-persistent">
    <div class="left">Welcome, Guest</div>
    <img class="right" src="http://www.citatsia.com/forum/style/anonymous.gif" alt="profile"/>
  </div>
  <div class="header-login-hidden-wrapper">
    <div class="header-login-hidden">
      <div class="header-login-form">
        <div class="header-login-form-title">Sign in</div>
        <form action="login/submit?action=login" method="post">
          <input type="text" name="username" placeholder="Username" />
          <input type="password" name="password" placeholder="Password" />
          <div class="spacer content"></div>
          <div class="header-login-form-submit-wrapper">
            <div class="left">
              <button type="submit">Login</button>
            </div>
            <div class="right">
              <a href="#">Forgot Password</a> | <a href="#">Register</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
HTML;

  }

  /**
   * Provides the fields this template contains.
   *
   * @return TemplateField[]
   */
  static function getTemplateFields_internal(): array {
    return [];
  }
}
