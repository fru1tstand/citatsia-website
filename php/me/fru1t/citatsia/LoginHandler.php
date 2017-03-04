<?php
namespace me\fru1t\citatsia;
use me\fru1t\citatsia\template\login\LoggedInModule;
use me\fru1t\citatsia\template\login\NotLoggedInModule;
use me\fru1t\common\language\Session;

/**
 *
 */
class LoginHandler {
  const SESSION_IS_LOGGED_IN_PARAMETER = "login-is-logged-in";

  /**
   * Renders and returns the correct login module for the current login state.
   * @return string
   */
  public static function getLoginModuleHtml(): string {
    return Session::exists(self::SESSION_IS_LOGGED_IN_PARAMETER)
        ? LoggedInModule::start()->render(false, true)
        : NotLoggedInModule::start()->render(false, true);
  }

  /**
   * Fake login
   */
  public static function login(): void {
    Session::set(self::SESSION_IS_LOGGED_IN_PARAMETER, "true");
  }

  /**
   * Logout
   */
  public static function logout(): void {
    Session::delete(self::SESSION_IS_LOGGED_IN_PARAMETER);
  }
}
