<?php

use App\Library\LightOpenID;
use App\Library\SteamInfo;

/**
 * @RoutePrefix("/auth")
 */
class AuthController extends ControllerBase
{
    protected $steamId;
    protected $steamInfo;

    public function initialize()
    {

    }

    public function loginAction()
    {
        return $this->view->pick('auth');
    }

    public function dologinAction()
    {
        $this->view->disable();
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
        $this->session->player = Players::findFirstBypid($this->steamInfo->steamID64);

        $this->response->redirect('/');
    }

    public function logoutAction()
    {
        $this->view->disable();
        $this->session->destroy(true);
        return $this->response->redirect('/login');
    }

    protected function getUserInfo($id)
    {
        $json = file_get_contents(sprintf(SteamInfo::STEAM_INFO_URL, $this->config->application->steamApiKey, $id));
        $json = json_decode($json, true);
        $steamInfo = new SteamInfo($json["response"]["players"][0]);

        $this->steamInfo = $steamInfo;
    }
}
