<?php
namespace me\fru1t\citatsia;
use me\fru1t\citatsia\template\forum\ForumPostSummary;

/**
 *
 */
class FakeData {
  public static function getFakeForumBoardPosts(): array {
    return [
        ForumPostSummary::start()
            ->with(ForumPostSummary::FIELD_POST_URL, '#')
            ->with(ForumPostSummary::FIELD_AUTHOR_URL, '#')
            ->with(ForumPostSummary::FIELD_AUTHOR, 'GLA3PAC')
            ->with(ForumPostSummary::FIELD_BODY, 'So yeah I\'m thinking about resigning. I\'m kind of convinced I was never meant to become considering my privileges don\'t work. I type sm_mute @me test in console than in in game chat it says error than some random ass number so yeah thats it. Signed by GLA|3PAC the true rap god as futom would say')
            ->with(ForumPostSummary::FIELD_COMMENTS, '4')
            ->with(ForumPostSummary::FIELD_DATE, 'September 30th, 2020 12:30pm')
            ->with(ForumPostSummary::FIELD_TITLE, 'Reminiscing on resigning mod'),
        ForumPostSummary::start()
            ->with(ForumPostSummary::FIELD_POST_URL, '#')
            ->with(ForumPostSummary::FIELD_AUTHOR_URL, '#')
            ->with(ForumPostSummary::FIELD_AUTHOR, 'A super long author to try to break the styles because obviously this is a really long username')
            ->with(ForumPostSummary::FIELD_BODY, 'So yeah I\'m thinking about resigning. I\'m kind of convinced I was never meant to become considering my privileges don\'t work. I type sm_mute @me test in console than in in game chat it says error than some random ass number so yeah thats it. Signed by GLA|3PAC the true rap god as futom would say')
            ->with(ForumPostSummary::FIELD_COMMENTS, '9999')
            ->with(ForumPostSummary::FIELD_DATE, 'March 1st, 2017 11:15pm')
            ->with(ForumPostSummary::FIELD_TITLE, 'This title is really long intentionally to see how the style looks when a super long title is written. I wonder what the actual limit is on the citats website and database. In any case, we still have to make it look good.'),

        ForumPostSummary::start()
            ->with(ForumPostSummary::FIELD_POST_URL, '#')
            ->with(ForumPostSummary::FIELD_AUTHOR_URL, '#')
            ->with(ForumPostSummary::FIELD_AUTHOR, 'GLA3PAC')
            ->with(ForumPostSummary::FIELD_BODY, 'So yeah I\'m thinking about resigning. I\'m kind of convinced I was never meant to become considering my privileges don\'t work. I type sm_mute @me test in console than in in game chat it says error than some random ass number so yeah thats it. Signed by GLA|3PAC the true rap god as futom would say')
            ->with(ForumPostSummary::FIELD_COMMENTS, '4')
            ->with(ForumPostSummary::FIELD_DATE, 'September 30th, 2020 12:30pm')
            ->with(ForumPostSummary::FIELD_TITLE, 'Reminiscing on resigning mod'),

        ForumPostSummary::start()
            ->with(ForumPostSummary::FIELD_POST_URL, '#')
            ->with(ForumPostSummary::FIELD_AUTHOR_URL, '#')
            ->with(ForumPostSummary::FIELD_AUTHOR, 'GLA3PAC')
            ->with(ForumPostSummary::FIELD_BODY, 'So yeah I\'m thinking about resigning. I\'m kind of convinced I was never meant to become considering my privileges don\'t work. I type sm_mute @me test in console than in in game chat it says error than some random ass number so yeah thats it. Signed by GLA|3PAC the true rap god as futom would say')
            ->with(ForumPostSummary::FIELD_COMMENTS, '4')
            ->with(ForumPostSummary::FIELD_DATE, 'September 30th, 2020 12:30pm')
            ->with(ForumPostSummary::FIELD_TITLE, 'Reminiscing on resigning mod'),

        ForumPostSummary::start()
            ->with(ForumPostSummary::FIELD_POST_URL, '#')
            ->with(ForumPostSummary::FIELD_AUTHOR_URL, '#')
            ->with(ForumPostSummary::FIELD_AUTHOR, 'GLA3PAC')
            ->with(ForumPostSummary::FIELD_BODY, 'So yeah I\'m thinking about resigning. I\'m kind of convinced I was never meant to become considering my privileges don\'t work. I type sm_mute @me test in console than in in game chat it says error than some random ass number so yeah thats it. Signed by GLA|3PAC the true rap god as futom would say')
            ->with(ForumPostSummary::FIELD_COMMENTS, '4')
            ->with(ForumPostSummary::FIELD_DATE, 'September 30th, 2020 12:30pm')
            ->with(ForumPostSummary::FIELD_TITLE, 'Reminiscing on resigning mod'),
    ];
  }
}
