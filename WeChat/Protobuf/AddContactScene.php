<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * AddContactScene enum
 */
final class AddContactScene
{
    const MM_ADDSCENE_UNKNOW = 0;
    const MM_ADDSCENE_SEARCH_QQ = 1;
    const MM_ADDSCENE_SEARCH_EMAIL = 2;
    const MM_ADDSCENE_SEARCH_WEIXIN = 3;
    const MM_ADDSCENE_PF_QQ = 4;
    const MM_ADDSCENE_PF_EMAIL = 5;
    const MM_ADDSCENE_PF_CONTACT = 6;
    const MM_ADDSCENE_PF_WEIXIN = 7;
    const MM_ADDSCENE_PF_GROUP = 8;
    const MM_ADDSCENE_PF_UNKNOWN = 9;
    const MM_ADDSCENE_PF_MOBILE = 10;
    const MM_ADDSCENE_PF_MOBILE_EMAIL = 11;
    const MM_ADDSCENE_VIEW_QQ = 12;
    const MM_ADDSCENE_VIEW_MOBILE = 13;
    const MM_ADDSCENE_CHATROOM = 14;
    const MM_ADDSCENE_SEARCH_PHONE = 15;
    const MM_ADDSCENE_CORP_EMAIL = 16;
    const MM_ADDSCENE_SEND_CARD = 17;
    const MM_ADDSCENE_LBS = 18;
    const MM_ADDSCENE_PF_MOBILE_REVERSE = 21;
    const MM_ADDSCENE_PF_SHAKE_PHONE_PAIR = 22;
    const MM_ADDSCENE_PF_SHAKE_PHONE_GROUP = 23;
    const MM_ADDSCENE_PF_SHAKE_PHONE_OPPSEX = 24;
    const MM_ADDSCENE_BOTTLE = 25;
    const MM_ADDSCENE_SHAKE_SCENE1 = 26;
    const MM_ADDSCENE_SHAKE_SCENE2 = 27;
    const MM_ADDSCENE_SHAKE_SCENE3 = 28;
    const MM_ADDSCENE_SHAKE_SCENE4 = 29;
    const MM_ADDSCENE_QRCode = 30;
    const MM_ADDSCENE_FACEBOOK = 31;
    const MM_ADDSCENE_SNS = 32;
    const MM_ADDSCENE_WEB = 33;
    const MM_ADDSCENE_BRAND_QA = 34;
    const MM_ADDSCENE_FUZZY_SEARCH = 35;
    const MM_ADDSCENE_LOGO_WALL = 36;
    const MM_ADDSCENE_TIMELINE_BIZ = 37;
    const MM_ADDSCENE_PROMOTE_MSG = 38;
    const MM_ADDSCENE_SEARCH_BRAND = 39;
    const MM_ADDSCENE_BIZ_CONFERENCE = 40;
    const MM_ADDSCENE_PROMOTE_BIZCARD = 41;
    const MM_ADDSCENE_WEB_PROFILE_URL = 42;
    const MM_ADDSCENE_WEB_OP_MENU = 43;
    const MM_ADDSCENE_LBSROOM = 44;
    const MM_ADDSCENE_SCANIMAGE = 45;
    const MM_ADDSCENE_SHAKETV = 46;
    const MM_ADDSCENE_SCANIMAGE_BOOK = 47;
    const MM_ADDSCENE_RADARSEARCH = 48;
    const MM_ADDSCENE_SCANBARCODE = 49;
    const MM_ADDSCENE_BBM = 50;
    const MM_ADDSCENE_BIZ_PAY = 51;
    const MM_ADDSCENE_REG_ADD_MFRIEND = 52;
    const MM_ADDSCENE_SEARCH_BRAND_SERICE = 53;
    const MM_ADDSCENE_SEARCH_BRAND_SUBSCR = 54;
    const MM_ADDSCENE_RECOMMEND_BRAND = 55;
    const MM_ADDSCENE_INTERESTED_BRAND = 56;
    const MM_ADDSCENE_APPMSG = 57;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MM_ADDSCENE_UNKNOW' => self::MM_ADDSCENE_UNKNOW,
            'MM_ADDSCENE_SEARCH_QQ' => self::MM_ADDSCENE_SEARCH_QQ,
            'MM_ADDSCENE_SEARCH_EMAIL' => self::MM_ADDSCENE_SEARCH_EMAIL,
            'MM_ADDSCENE_SEARCH_WEIXIN' => self::MM_ADDSCENE_SEARCH_WEIXIN,
            'MM_ADDSCENE_PF_QQ' => self::MM_ADDSCENE_PF_QQ,
            'MM_ADDSCENE_PF_EMAIL' => self::MM_ADDSCENE_PF_EMAIL,
            'MM_ADDSCENE_PF_CONTACT' => self::MM_ADDSCENE_PF_CONTACT,
            'MM_ADDSCENE_PF_WEIXIN' => self::MM_ADDSCENE_PF_WEIXIN,
            'MM_ADDSCENE_PF_GROUP' => self::MM_ADDSCENE_PF_GROUP,
            'MM_ADDSCENE_PF_UNKNOWN' => self::MM_ADDSCENE_PF_UNKNOWN,
            'MM_ADDSCENE_PF_MOBILE' => self::MM_ADDSCENE_PF_MOBILE,
            'MM_ADDSCENE_PF_MOBILE_EMAIL' => self::MM_ADDSCENE_PF_MOBILE_EMAIL,
            'MM_ADDSCENE_VIEW_QQ' => self::MM_ADDSCENE_VIEW_QQ,
            'MM_ADDSCENE_VIEW_MOBILE' => self::MM_ADDSCENE_VIEW_MOBILE,
            'MM_ADDSCENE_CHATROOM' => self::MM_ADDSCENE_CHATROOM,
            'MM_ADDSCENE_SEARCH_PHONE' => self::MM_ADDSCENE_SEARCH_PHONE,
            'MM_ADDSCENE_CORP_EMAIL' => self::MM_ADDSCENE_CORP_EMAIL,
            'MM_ADDSCENE_SEND_CARD' => self::MM_ADDSCENE_SEND_CARD,
            'MM_ADDSCENE_LBS' => self::MM_ADDSCENE_LBS,
            'MM_ADDSCENE_PF_MOBILE_REVERSE' => self::MM_ADDSCENE_PF_MOBILE_REVERSE,
            'MM_ADDSCENE_PF_SHAKE_PHONE_PAIR' => self::MM_ADDSCENE_PF_SHAKE_PHONE_PAIR,
            'MM_ADDSCENE_PF_SHAKE_PHONE_GROUP' => self::MM_ADDSCENE_PF_SHAKE_PHONE_GROUP,
            'MM_ADDSCENE_PF_SHAKE_PHONE_OPPSEX' => self::MM_ADDSCENE_PF_SHAKE_PHONE_OPPSEX,
            'MM_ADDSCENE_BOTTLE' => self::MM_ADDSCENE_BOTTLE,
            'MM_ADDSCENE_SHAKE_SCENE1' => self::MM_ADDSCENE_SHAKE_SCENE1,
            'MM_ADDSCENE_SHAKE_SCENE2' => self::MM_ADDSCENE_SHAKE_SCENE2,
            'MM_ADDSCENE_SHAKE_SCENE3' => self::MM_ADDSCENE_SHAKE_SCENE3,
            'MM_ADDSCENE_SHAKE_SCENE4' => self::MM_ADDSCENE_SHAKE_SCENE4,
            'MM_ADDSCENE_QRCode' => self::MM_ADDSCENE_QRCode,
            'MM_ADDSCENE_FACEBOOK' => self::MM_ADDSCENE_FACEBOOK,
            'MM_ADDSCENE_SNS' => self::MM_ADDSCENE_SNS,
            'MM_ADDSCENE_WEB' => self::MM_ADDSCENE_WEB,
            'MM_ADDSCENE_BRAND_QA' => self::MM_ADDSCENE_BRAND_QA,
            'MM_ADDSCENE_FUZZY_SEARCH' => self::MM_ADDSCENE_FUZZY_SEARCH,
            'MM_ADDSCENE_LOGO_WALL' => self::MM_ADDSCENE_LOGO_WALL,
            'MM_ADDSCENE_TIMELINE_BIZ' => self::MM_ADDSCENE_TIMELINE_BIZ,
            'MM_ADDSCENE_PROMOTE_MSG' => self::MM_ADDSCENE_PROMOTE_MSG,
            'MM_ADDSCENE_SEARCH_BRAND' => self::MM_ADDSCENE_SEARCH_BRAND,
            'MM_ADDSCENE_BIZ_CONFERENCE' => self::MM_ADDSCENE_BIZ_CONFERENCE,
            'MM_ADDSCENE_PROMOTE_BIZCARD' => self::MM_ADDSCENE_PROMOTE_BIZCARD,
            'MM_ADDSCENE_WEB_PROFILE_URL' => self::MM_ADDSCENE_WEB_PROFILE_URL,
            'MM_ADDSCENE_WEB_OP_MENU' => self::MM_ADDSCENE_WEB_OP_MENU,
            'MM_ADDSCENE_LBSROOM' => self::MM_ADDSCENE_LBSROOM,
            'MM_ADDSCENE_SCANIMAGE' => self::MM_ADDSCENE_SCANIMAGE,
            'MM_ADDSCENE_SHAKETV' => self::MM_ADDSCENE_SHAKETV,
            'MM_ADDSCENE_SCANIMAGE_BOOK' => self::MM_ADDSCENE_SCANIMAGE_BOOK,
            'MM_ADDSCENE_RADARSEARCH' => self::MM_ADDSCENE_RADARSEARCH,
            'MM_ADDSCENE_SCANBARCODE' => self::MM_ADDSCENE_SCANBARCODE,
            'MM_ADDSCENE_BBM' => self::MM_ADDSCENE_BBM,
            'MM_ADDSCENE_BIZ_PAY' => self::MM_ADDSCENE_BIZ_PAY,
            'MM_ADDSCENE_REG_ADD_MFRIEND' => self::MM_ADDSCENE_REG_ADD_MFRIEND,
            'MM_ADDSCENE_SEARCH_BRAND_SERICE' => self::MM_ADDSCENE_SEARCH_BRAND_SERICE,
            'MM_ADDSCENE_SEARCH_BRAND_SUBSCR' => self::MM_ADDSCENE_SEARCH_BRAND_SUBSCR,
            'MM_ADDSCENE_RECOMMEND_BRAND' => self::MM_ADDSCENE_RECOMMEND_BRAND,
            'MM_ADDSCENE_INTERESTED_BRAND' => self::MM_ADDSCENE_INTERESTED_BRAND,
            'MM_ADDSCENE_APPMSG' => self::MM_ADDSCENE_APPMSG,
        );
    }
}
}