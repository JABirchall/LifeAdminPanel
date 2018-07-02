<?php

use App\Library\LightOpenID;
use App\Library\SteamInfo;

/**
 * @RoutePrefix("/auth")
 */
class AuthController extends \Phalcon\Mvc\Controller
{
    protected $steamId;
    protected $steamInfo;

    public function initialize()
    {
        $this->view->disable();
    }

    public function loginAction()
    {
        if ($this->session->has('steamID')) {
            return $this->response->redirect();
        }

        $openid = new LightOpenID($this->config->application->siteUrl);
        $openid->identity = SteamInfo::OPENID_URL;

        if (!$openid->mode) {
            return $this->response->redirect($openid->authUrl(), true, 302);
        }

        if (!$openid->validate()) {
            return $this->response->redirect($openid->authUrl(), true, 302);
        }

        preg_match("/^https:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/", $openid->identity, $matches);
        $this->getUserInfo($matches[1]);

        $this->session->avatarUrl = $this->steamInfo->profilePictureMedium;
        $this->session->steamID = $this->steamInfo->steamID64;
        $this->session->name = $this->steamInfo->nick;
        $this->session->player = Players::findFirstByPlayerid($this->steamInfo->steamID64);

        return $this->response->redirect();
    }

    public function logoutAction()
    {
        $this->session->destroy(true);
        return $this->response->redirect();
    }


    protected function getUserInfo($id)
    {
        $steamInfo = $this->cache->get('steam_info_' . $id);
        if ($steamInfo === null) {
            $json = file_get_contents(sprintf(SteamInfo::STEAM_INFO_URL, $this->config->steamApiKey, $this->steamId));
            $json = json_decode($json, true);
            $steamInfo = new SteamInfo($json["response"]["players"][0]);
        }

        $this->steamInfo = $steamInfo;
    }
}
