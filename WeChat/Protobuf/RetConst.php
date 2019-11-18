<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * RetConst enum
 */
final class RetConst
{
    const MM_OK = 0;
    const ERR_SERVER_FILE_EXPIRED = -5103059;
    const MM_ERR_FORCE_QUIT = -999999;
    const MM_ERR_CLIENT = -800000;
    const MM_ERR_CHATROOM_PARTIAL_INVITE = -2013;
    const MM_ERR_CHATROOM_NEED_INVITE = -2012;
    const MM_ERR_CONNECT_INFO_URL_INVALID = -2011;
    const MM_ERR_CLIDB_ENCRYPT_KEYINFO_INVALID = -2010;
    const MM_ERR_LOGIN_URL_DEVICE_UNSAFE = -2009;
    const MM_ERR_COOKIE_KICK = -2008;
    const MM_ERR_LOGIN_QRCODE_UUID_EXPIRED = -2007;
    const MM_ERR_KEYBUF_INVALID = -2006;
    const MM_ERR_FORCE_REDIRECT = -2005;
    const MM_ERR_QRCODEVERIFY_BANBYEXPOSE = -2004;
    const MM_ERR_SHAKEBANBYEXPOSE = -2003;
    const MM_ERR_BOTTLEBANBYEXPOSE = -2002;
    const MM_ERR_LBSBANBYEXPOSE = -2001;
    const MM_ERR_LBSDATANOTFOUND = -2000;
    const MM_ERR_IMG_READ = -1005;
    const MM_ERR_FACING_CREATECHATROOM_RETRY = -432;
    const MM_ERR_RADAR_PASSWORD_SIMPLE = -431;
    const MM_ERR_REVOKEMSG_TIMEOUT = -430;
    const MM_ERR_FAV_ALREADY = -400;
    const MM_ERR_FILE_EXPIRED = -352;
    const MM_ERR_USER_NOT_VERIFYUSER = -302;
    const MM_ERR_IDC_REDIRECT = -301;
    const MM_ERR_REG_BUT_LOGIN = -212;
    const MM_ERR_UNBIND_MAIN_ACCT = -206;
    const MM_ERR_QQ_OK_NEED_MOBILE = -205;
    const MM_ERR_OTHER_MAIN_ACCT = -204;
    const MM_ERR_NODATA = -203;
    const MM_ERR_UNBIND_MOBILE_NEED_QQPWD = -202;
    const MM_ERR_QQ_BAN = -201;
    const MM_ERR_ACCOUNT_BAN = -200;
    const MM_ERR_QA_RELATION = -153;
    const MM_ERR_NO_QUESTION = -152;
    const MM_ERR_QUESTION_COUNT = -151;
    const MM_ERR_ANSWER_COUNT = -150;
    const MM_ERR_EMAIL_FORMAT = -111;
    const MM_ERR_BLOCK_BY_SPAM = -106;
    const MM_ERR_CERT_EXPIRED = -102;
    const MM_ERR_NO_RETRY = -101;
    const MM_ERR_AUTH_ANOTHERPLACE = -100;
    const MM_ERR_USER_NOT_SUPPORT = -94;
    const MM_ERR_SHAKE_TRAN_IMG_OTHER = -93;
    const MM_ERR_SHAKE_TRAN_IMG_CONTINUE = -92;
    const MM_ERR_SHAKE_TRAN_IMG_NOTFOUND = -91;
    const MM_ERR_SHAKE_TRAN_IMG_CANCEL = -90;
    const MM_ERR_BIZ_FANS_LIMITED = -87;
    const MM_ERR_BIND_EMAIL_SAME_AS_QMAIL = -86;
    const MM_ERR_BINDED_BY_OTHER = -85;
    const MM_ERR_HAS_BINDED = -84;
    const MM_ERR_HAS_UNBINDED = -83;
    const MM_ERR_ONE_BINDTYPE_LEFT = -82;
    const MM_ERR_NOTBINDQQ = -81;
    const MM_ERR_WEIBO_PUSH_TRANS = -80;
    const MM_ERR_NEW_USER = -79;
    const MM_ERR_SVR_MOBILE_FORMAT = -78;
    const MM_ERR_WRONG_SESSION_KEY = -77;
    const MM_ERR_UUID_BINDED = -76;
    const MM_ERR_ALPHA_FORBIDDEN = -75;
    const MM_ERR_MOBILE_NEEDADJUST = -74;
    const MM_ERR_TRYQQPWD = -73;
    const MM_ERR_NICEQQ_EXPIRED = -72;
    const MM_ERR_TOLIST_LIMITED = -71;
    const MM_ERR_GETMFRIEND_NOT_READY = -70;
    const MM_ERR_BIGBIZ_AUTH = -69;
    const MM_FACEBOOK_ACCESSTOKEN_UNVALID = -68;
    const MM_ERR_HAVE_BIND_FACEBOOK = -67;
    const MM_ERR_IS_NOT_OWNER = -66;
    const MM_ERR_UNBIND_REGBYMOBILE = -65;
    const MM_ERR_PARSE_MAIL = -64;
    const MM_ERR_GMAIL_IMAP = -63;
    const MM_ERR_GMAIL_WEBLOGIN = -62;
    const MM_ERR_GMAIL_ONLINELIMITE = -61;
    const MM_ERR_GMAIL_PWD = -60;
    const MM_ERR_UNSUPPORT_COUNTRY = -59;
    const MM_ERR_PICKBOTTLE_NOBOTTLE = -58;
    const MM_ERR_SEND_VERIFYCODE = -57;
    const MM_ERR_NO_BOTTLECOUNT = -56;
    const MM_ERR_NO_HDHEADIMG = -55;
    const MM_ERR_INVALID_HDHEADIMG_REQ_TOTAL_LEN = -54;
    const MM_ERR_HAS_NO_HEADIMG = -53;
    const MM_ERR_INVALID_GROUPCARD_CONTACT = -52;
    const MM_ERR_VERIFYCODE_NOTEXIST = -51;
    const MM_ERR_BINDUIN_BINDED = -50;
    const MM_ERR_NEED_QQPWD = -49;
    const MM_ERR_TICKET_NOTFOUND = -48;
    const MM_ERR_TICKET_UNMATCH = -47;
    const MM_ERR_NOTQQCONTACT = -46;
    const MM_ERR_BATCHGETCONTACTPROFILE_MODE = -45;
    const MM_ERR_NEED_VERIFY_USER = -44;
    const MM_ERR_USER_BIND_MOBILE = -43;
    const MM_ERR_USER_MOBILE_UNMATCH = -42;
    const MM_ERR_MOBILE_FORMAT = -41;
    const MM_ERR_UNMATCH_MOBILE = -40;
    const MM_ERR_MOBILE_NULL = -39;
    const MM_ERR_INVALID_UPLOADMCONTACT_OPMODE = -38;
    const MM_ERR_INVALID_BIND_OPMODE = -37;
    const MM_ERR_MOBILE_UNBINDED = -36;
    const MM_ERR_MOBILE_BINDED = -35;
    const MM_ERR_FREQ_LIMITED = -34;
    const MM_ERR_VERIFYCODE_TIMEOUT = -33;
    const MM_ERR_VERIFYCODE_UNMATCH = -32;
    const MM_ERR_NEEDSECONDPWD = -31;
    const MM_ERR_NEEDREG = -30;
    const MM_ERR_OIDBTIMEOUT = -29;
    const MM_ERR_BADEMAIL = -28;
    const MM_ERR_DOMAINDISABLE = -27;
    const MM_ERR_DOMAINMAXLIMITED = -26;
    const MM_ERR_DOMAINVERIFIED = -25;
    const MM_ERR_SPAM = -24;
    const MM_ERR_MEMBER_TOOMUCH = -23;
    const MM_ERR_BLACKLIST = -22;
    const MM_ERR_NOTCHATROOMCONTACT = -21;
    const MM_ERR_NOTMICROBLOGCONTACT = -20;
    const MM_ERR_NOTOPENPRIVATEMSG = -19;
    const MM_ERR_NOUPDATEINFO = -18;
    const MM_ERR_RECOMMENDEDUPDATE = -17;
    const MM_ERR_CRITICALUPDATE = -16;
    const MM_ERR_NICKNAMEINVALID = -15;
    const MM_ERR_USERNAMEINVALID = -14;
    const MM_ERR_SESSIONTIMEOUT = -13;
    const MM_ERR_UINEXIST = -12;
    const MM_ERR_NICKRESERVED = -11;
    const MM_ERR_USERRESERVED = -10;
    const MM_ERR_EMAILNOTVERIFY = -9;
    const MM_ERR_EMAILEXIST = -8;
    const MM_ERR_USEREXIST = -7;
    const MM_ERR_NEED_VERIFY = -6;
    const MM_ERR_ACCESS_DENIED = -5;
    const MM_ERR_NOUSER = -4;
    const MM_ERR_PASSWORD = -3;
    const MM_ERR_ARG = -2;
    const MM_ERR_SYS = -1;
    const MM_BOTTLE_ERR_UNKNOWNTYPE = 15;
    const MM_BOTTLE_COUNT_ERR = 16;
    const MM_BOTTLE_NOTEXIT = 17;
    const MM_BOTTLE_UINNOTMATCH = 18;
    const MM_BOTTLE_PICKCOUNTINVALID = 19;
    const MMSNS_RET_SPAM = 201;
    const MMSNS_RET_BAN = 202;
    const MMSNS_RET_PRIVACY = 203;
    const MMSNS_RET_COMMENT_HAVE_LIKE = 204;
    const MMSNS_RET_COMMENT_NOT_ALLOW = 205;
    const MMSNS_RET_CLIENTID_EXIST = 206;
    const MMSNS_RET_ISALL = 207;
    const MMSNS_RET_COMMENT_PRIVACY = 208;
    const MM_ERR_SHORTVIDEO_CANCEL = 1000000;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MM_OK' => self::MM_OK,
            'ERR_SERVER_FILE_EXPIRED' => self::ERR_SERVER_FILE_EXPIRED,
            'MM_ERR_FORCE_QUIT' => self::MM_ERR_FORCE_QUIT,
            'MM_ERR_CLIENT' => self::MM_ERR_CLIENT,
            'MM_ERR_CHATROOM_PARTIAL_INVITE' => self::MM_ERR_CHATROOM_PARTIAL_INVITE,
            'MM_ERR_CHATROOM_NEED_INVITE' => self::MM_ERR_CHATROOM_NEED_INVITE,
            'MM_ERR_CONNECT_INFO_URL_INVALID' => self::MM_ERR_CONNECT_INFO_URL_INVALID,
            'MM_ERR_CLIDB_ENCRYPT_KEYINFO_INVALID' => self::MM_ERR_CLIDB_ENCRYPT_KEYINFO_INVALID,
            'MM_ERR_LOGIN_URL_DEVICE_UNSAFE' => self::MM_ERR_LOGIN_URL_DEVICE_UNSAFE,
            'MM_ERR_COOKIE_KICK' => self::MM_ERR_COOKIE_KICK,
            'MM_ERR_LOGIN_QRCODE_UUID_EXPIRED' => self::MM_ERR_LOGIN_QRCODE_UUID_EXPIRED,
            'MM_ERR_KEYBUF_INVALID' => self::MM_ERR_KEYBUF_INVALID,
            'MM_ERR_FORCE_REDIRECT' => self::MM_ERR_FORCE_REDIRECT,
            'MM_ERR_QRCODEVERIFY_BANBYEXPOSE' => self::MM_ERR_QRCODEVERIFY_BANBYEXPOSE,
            'MM_ERR_SHAKEBANBYEXPOSE' => self::MM_ERR_SHAKEBANBYEXPOSE,
            'MM_ERR_BOTTLEBANBYEXPOSE' => self::MM_ERR_BOTTLEBANBYEXPOSE,
            'MM_ERR_LBSBANBYEXPOSE' => self::MM_ERR_LBSBANBYEXPOSE,
            'MM_ERR_LBSDATANOTFOUND' => self::MM_ERR_LBSDATANOTFOUND,
            'MM_ERR_IMG_READ' => self::MM_ERR_IMG_READ,
            'MM_ERR_FACING_CREATECHATROOM_RETRY' => self::MM_ERR_FACING_CREATECHATROOM_RETRY,
            'MM_ERR_RADAR_PASSWORD_SIMPLE' => self::MM_ERR_RADAR_PASSWORD_SIMPLE,
            'MM_ERR_REVOKEMSG_TIMEOUT' => self::MM_ERR_REVOKEMSG_TIMEOUT,
            'MM_ERR_FAV_ALREADY' => self::MM_ERR_FAV_ALREADY,
            'MM_ERR_FILE_EXPIRED' => self::MM_ERR_FILE_EXPIRED,
            'MM_ERR_USER_NOT_VERIFYUSER' => self::MM_ERR_USER_NOT_VERIFYUSER,
            'MM_ERR_IDC_REDIRECT' => self::MM_ERR_IDC_REDIRECT,
            'MM_ERR_REG_BUT_LOGIN' => self::MM_ERR_REG_BUT_LOGIN,
            'MM_ERR_UNBIND_MAIN_ACCT' => self::MM_ERR_UNBIND_MAIN_ACCT,
            'MM_ERR_QQ_OK_NEED_MOBILE' => self::MM_ERR_QQ_OK_NEED_MOBILE,
            'MM_ERR_OTHER_MAIN_ACCT' => self::MM_ERR_OTHER_MAIN_ACCT,
            'MM_ERR_NODATA' => self::MM_ERR_NODATA,
            'MM_ERR_UNBIND_MOBILE_NEED_QQPWD' => self::MM_ERR_UNBIND_MOBILE_NEED_QQPWD,
            'MM_ERR_QQ_BAN' => self::MM_ERR_QQ_BAN,
            'MM_ERR_ACCOUNT_BAN' => self::MM_ERR_ACCOUNT_BAN,
            'MM_ERR_QA_RELATION' => self::MM_ERR_QA_RELATION,
            'MM_ERR_NO_QUESTION' => self::MM_ERR_NO_QUESTION,
            'MM_ERR_QUESTION_COUNT' => self::MM_ERR_QUESTION_COUNT,
            'MM_ERR_ANSWER_COUNT' => self::MM_ERR_ANSWER_COUNT,
            'MM_ERR_EMAIL_FORMAT' => self::MM_ERR_EMAIL_FORMAT,
            'MM_ERR_BLOCK_BY_SPAM' => self::MM_ERR_BLOCK_BY_SPAM,
            'MM_ERR_CERT_EXPIRED' => self::MM_ERR_CERT_EXPIRED,
            'MM_ERR_NO_RETRY' => self::MM_ERR_NO_RETRY,
            'MM_ERR_AUTH_ANOTHERPLACE' => self::MM_ERR_AUTH_ANOTHERPLACE,
            'MM_ERR_USER_NOT_SUPPORT' => self::MM_ERR_USER_NOT_SUPPORT,
            'MM_ERR_SHAKE_TRAN_IMG_OTHER' => self::MM_ERR_SHAKE_TRAN_IMG_OTHER,
            'MM_ERR_SHAKE_TRAN_IMG_CONTINUE' => self::MM_ERR_SHAKE_TRAN_IMG_CONTINUE,
            'MM_ERR_SHAKE_TRAN_IMG_NOTFOUND' => self::MM_ERR_SHAKE_TRAN_IMG_NOTFOUND,
            'MM_ERR_SHAKE_TRAN_IMG_CANCEL' => self::MM_ERR_SHAKE_TRAN_IMG_CANCEL,
            'MM_ERR_BIZ_FANS_LIMITED' => self::MM_ERR_BIZ_FANS_LIMITED,
            'MM_ERR_BIND_EMAIL_SAME_AS_QMAIL' => self::MM_ERR_BIND_EMAIL_SAME_AS_QMAIL,
            'MM_ERR_BINDED_BY_OTHER' => self::MM_ERR_BINDED_BY_OTHER,
            'MM_ERR_HAS_BINDED' => self::MM_ERR_HAS_BINDED,
            'MM_ERR_HAS_UNBINDED' => self::MM_ERR_HAS_UNBINDED,
            'MM_ERR_ONE_BINDTYPE_LEFT' => self::MM_ERR_ONE_BINDTYPE_LEFT,
            'MM_ERR_NOTBINDQQ' => self::MM_ERR_NOTBINDQQ,
            'MM_ERR_WEIBO_PUSH_TRANS' => self::MM_ERR_WEIBO_PUSH_TRANS,
            'MM_ERR_NEW_USER' => self::MM_ERR_NEW_USER,
            'MM_ERR_SVR_MOBILE_FORMAT' => self::MM_ERR_SVR_MOBILE_FORMAT,
            'MM_ERR_WRONG_SESSION_KEY' => self::MM_ERR_WRONG_SESSION_KEY,
            'MM_ERR_UUID_BINDED' => self::MM_ERR_UUID_BINDED,
            'MM_ERR_ALPHA_FORBIDDEN' => self::MM_ERR_ALPHA_FORBIDDEN,
            'MM_ERR_MOBILE_NEEDADJUST' => self::MM_ERR_MOBILE_NEEDADJUST,
            'MM_ERR_TRYQQPWD' => self::MM_ERR_TRYQQPWD,
            'MM_ERR_NICEQQ_EXPIRED' => self::MM_ERR_NICEQQ_EXPIRED,
            'MM_ERR_TOLIST_LIMITED' => self::MM_ERR_TOLIST_LIMITED,
            'MM_ERR_GETMFRIEND_NOT_READY' => self::MM_ERR_GETMFRIEND_NOT_READY,
            'MM_ERR_BIGBIZ_AUTH' => self::MM_ERR_BIGBIZ_AUTH,
            'MM_FACEBOOK_ACCESSTOKEN_UNVALID' => self::MM_FACEBOOK_ACCESSTOKEN_UNVALID,
            'MM_ERR_HAVE_BIND_FACEBOOK' => self::MM_ERR_HAVE_BIND_FACEBOOK,
            'MM_ERR_IS_NOT_OWNER' => self::MM_ERR_IS_NOT_OWNER,
            'MM_ERR_UNBIND_REGBYMOBILE' => self::MM_ERR_UNBIND_REGBYMOBILE,
            'MM_ERR_PARSE_MAIL' => self::MM_ERR_PARSE_MAIL,
            'MM_ERR_GMAIL_IMAP' => self::MM_ERR_GMAIL_IMAP,
            'MM_ERR_GMAIL_WEBLOGIN' => self::MM_ERR_GMAIL_WEBLOGIN,
            'MM_ERR_GMAIL_ONLINELIMITE' => self::MM_ERR_GMAIL_ONLINELIMITE,
            'MM_ERR_GMAIL_PWD' => self::MM_ERR_GMAIL_PWD,
            'MM_ERR_UNSUPPORT_COUNTRY' => self::MM_ERR_UNSUPPORT_COUNTRY,
            'MM_ERR_PICKBOTTLE_NOBOTTLE' => self::MM_ERR_PICKBOTTLE_NOBOTTLE,
            'MM_ERR_SEND_VERIFYCODE' => self::MM_ERR_SEND_VERIFYCODE,
            'MM_ERR_NO_BOTTLECOUNT' => self::MM_ERR_NO_BOTTLECOUNT,
            'MM_ERR_NO_HDHEADIMG' => self::MM_ERR_NO_HDHEADIMG,
            'MM_ERR_INVALID_HDHEADIMG_REQ_TOTAL_LEN' => self::MM_ERR_INVALID_HDHEADIMG_REQ_TOTAL_LEN,
            'MM_ERR_HAS_NO_HEADIMG' => self::MM_ERR_HAS_NO_HEADIMG,
            'MM_ERR_INVALID_GROUPCARD_CONTACT' => self::MM_ERR_INVALID_GROUPCARD_CONTACT,
            'MM_ERR_VERIFYCODE_NOTEXIST' => self::MM_ERR_VERIFYCODE_NOTEXIST,
            'MM_ERR_BINDUIN_BINDED' => self::MM_ERR_BINDUIN_BINDED,
            'MM_ERR_NEED_QQPWD' => self::MM_ERR_NEED_QQPWD,
            'MM_ERR_TICKET_NOTFOUND' => self::MM_ERR_TICKET_NOTFOUND,
            'MM_ERR_TICKET_UNMATCH' => self::MM_ERR_TICKET_UNMATCH,
            'MM_ERR_NOTQQCONTACT' => self::MM_ERR_NOTQQCONTACT,
            'MM_ERR_BATCHGETCONTACTPROFILE_MODE' => self::MM_ERR_BATCHGETCONTACTPROFILE_MODE,
            'MM_ERR_NEED_VERIFY_USER' => self::MM_ERR_NEED_VERIFY_USER,
            'MM_ERR_USER_BIND_MOBILE' => self::MM_ERR_USER_BIND_MOBILE,
            'MM_ERR_USER_MOBILE_UNMATCH' => self::MM_ERR_USER_MOBILE_UNMATCH,
            'MM_ERR_MOBILE_FORMAT' => self::MM_ERR_MOBILE_FORMAT,
            'MM_ERR_UNMATCH_MOBILE' => self::MM_ERR_UNMATCH_MOBILE,
            'MM_ERR_MOBILE_NULL' => self::MM_ERR_MOBILE_NULL,
            'MM_ERR_INVALID_UPLOADMCONTACT_OPMODE' => self::MM_ERR_INVALID_UPLOADMCONTACT_OPMODE,
            'MM_ERR_INVALID_BIND_OPMODE' => self::MM_ERR_INVALID_BIND_OPMODE,
            'MM_ERR_MOBILE_UNBINDED' => self::MM_ERR_MOBILE_UNBINDED,
            'MM_ERR_MOBILE_BINDED' => self::MM_ERR_MOBILE_BINDED,
            'MM_ERR_FREQ_LIMITED' => self::MM_ERR_FREQ_LIMITED,
            'MM_ERR_VERIFYCODE_TIMEOUT' => self::MM_ERR_VERIFYCODE_TIMEOUT,
            'MM_ERR_VERIFYCODE_UNMATCH' => self::MM_ERR_VERIFYCODE_UNMATCH,
            'MM_ERR_NEEDSECONDPWD' => self::MM_ERR_NEEDSECONDPWD,
            'MM_ERR_NEEDREG' => self::MM_ERR_NEEDREG,
            'MM_ERR_OIDBTIMEOUT' => self::MM_ERR_OIDBTIMEOUT,
            'MM_ERR_BADEMAIL' => self::MM_ERR_BADEMAIL,
            'MM_ERR_DOMAINDISABLE' => self::MM_ERR_DOMAINDISABLE,
            'MM_ERR_DOMAINMAXLIMITED' => self::MM_ERR_DOMAINMAXLIMITED,
            'MM_ERR_DOMAINVERIFIED' => self::MM_ERR_DOMAINVERIFIED,
            'MM_ERR_SPAM' => self::MM_ERR_SPAM,
            'MM_ERR_MEMBER_TOOMUCH' => self::MM_ERR_MEMBER_TOOMUCH,
            'MM_ERR_BLACKLIST' => self::MM_ERR_BLACKLIST,
            'MM_ERR_NOTCHATROOMCONTACT' => self::MM_ERR_NOTCHATROOMCONTACT,
            'MM_ERR_NOTMICROBLOGCONTACT' => self::MM_ERR_NOTMICROBLOGCONTACT,
            'MM_ERR_NOTOPENPRIVATEMSG' => self::MM_ERR_NOTOPENPRIVATEMSG,
            'MM_ERR_NOUPDATEINFO' => self::MM_ERR_NOUPDATEINFO,
            'MM_ERR_RECOMMENDEDUPDATE' => self::MM_ERR_RECOMMENDEDUPDATE,
            'MM_ERR_CRITICALUPDATE' => self::MM_ERR_CRITICALUPDATE,
            'MM_ERR_NICKNAMEINVALID' => self::MM_ERR_NICKNAMEINVALID,
            'MM_ERR_USERNAMEINVALID' => self::MM_ERR_USERNAMEINVALID,
            'MM_ERR_SESSIONTIMEOUT' => self::MM_ERR_SESSIONTIMEOUT,
            'MM_ERR_UINEXIST' => self::MM_ERR_UINEXIST,
            'MM_ERR_NICKRESERVED' => self::MM_ERR_NICKRESERVED,
            'MM_ERR_USERRESERVED' => self::MM_ERR_USERRESERVED,
            'MM_ERR_EMAILNOTVERIFY' => self::MM_ERR_EMAILNOTVERIFY,
            'MM_ERR_EMAILEXIST' => self::MM_ERR_EMAILEXIST,
            'MM_ERR_USEREXIST' => self::MM_ERR_USEREXIST,
            'MM_ERR_NEED_VERIFY' => self::MM_ERR_NEED_VERIFY,
            'MM_ERR_ACCESS_DENIED' => self::MM_ERR_ACCESS_DENIED,
            'MM_ERR_NOUSER' => self::MM_ERR_NOUSER,
            'MM_ERR_PASSWORD' => self::MM_ERR_PASSWORD,
            'MM_ERR_ARG' => self::MM_ERR_ARG,
            'MM_ERR_SYS' => self::MM_ERR_SYS,
            'MM_BOTTLE_ERR_UNKNOWNTYPE' => self::MM_BOTTLE_ERR_UNKNOWNTYPE,
            'MM_BOTTLE_COUNT_ERR' => self::MM_BOTTLE_COUNT_ERR,
            'MM_BOTTLE_NOTEXIT' => self::MM_BOTTLE_NOTEXIT,
            'MM_BOTTLE_UINNOTMATCH' => self::MM_BOTTLE_UINNOTMATCH,
            'MM_BOTTLE_PICKCOUNTINVALID' => self::MM_BOTTLE_PICKCOUNTINVALID,
            'MMSNS_RET_SPAM' => self::MMSNS_RET_SPAM,
            'MMSNS_RET_BAN' => self::MMSNS_RET_BAN,
            'MMSNS_RET_PRIVACY' => self::MMSNS_RET_PRIVACY,
            'MMSNS_RET_COMMENT_HAVE_LIKE' => self::MMSNS_RET_COMMENT_HAVE_LIKE,
            'MMSNS_RET_COMMENT_NOT_ALLOW' => self::MMSNS_RET_COMMENT_NOT_ALLOW,
            'MMSNS_RET_CLIENTID_EXIST' => self::MMSNS_RET_CLIENTID_EXIST,
            'MMSNS_RET_ISALL' => self::MMSNS_RET_ISALL,
            'MMSNS_RET_COMMENT_PRIVACY' => self::MMSNS_RET_COMMENT_PRIVACY,
            'MM_ERR_SHORTVIDEO_CANCEL' => self::MM_ERR_SHORTVIDEO_CANCEL,
        );
    }
}
}