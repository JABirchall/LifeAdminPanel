<?php

namespace App\Library;

class SteamInfo
{

    public $steamID64;
    public $nick;
    public $lastLogin;
    public $profileURL;
    public $profilePicture;
    public $profilePictureMedium;
    public $profilePictureFull;
    public $name;
    public $clanID;
    public $createdAt;
    public $countryCode;

    const OPENID_URL = 'https://steamcommunity.com/openid';
    const STEAM_INFO_URL = 'https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=%s&steamids=%s';

    function __construct($data)
    {
        $this->steamID64            = $data["steamid"] ?? null;
        $this->nick                 = $data["personaname"] ?? null;
        $this->lastLogin            = $data["lastlogoff"] ?? null;
        $this->profileURL           = $data["profileurl"] ?? null;
        $this->profilePicture       = $data["avatar"] ?? null;
        $this->profilePictureMedium = $data["avatarmedium"] ?? null;
        $this->profilePictureFull   = $data["avatarfull"] ?? null;
        $this->name                 = $data["realname"] ?? null;
        $this->clanID               = $data["primaryclanid"] ?? null;
        $this->createdAt            = $data["timecreated"] ?? null;
        $this->countryCode          = $data["loccountrycode"] ?? null;
    }

    /**
     * @return mixed
     */
    public function getSteamID64()
    {
        return $this->steamID64;
    }

    /**
     * Converts SteamID64 to SteamID
     * @return string
     */
    public function getSteamID()
    {
        //See if the second number in the steamid (the auth server) is 0 or 1. Odd is 1, even is 0
        $authServer = bcsub($this->steamID64, '76561197960265728') & 1;
        //Get the third number of the steamid
        $authId = (bcsub($this->steamID64, '76561197960265728') - $authServer) / 2;

        //Concatenate the STEAM_ prefix and the first number, which is always 0, as well as colons with the other two numbers
        return "STEAM_0:$authServer:$authId";
    }
}
