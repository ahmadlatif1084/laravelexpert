<?php
namespace App\SocialMedia;

class Facebook{
    public $client_id;
    protected $client_secret;
    private $redirect;

    public function __construct($facebook){
        $this->client_id=$facebook['client_id'];
        $this->client_secret=$facebook['client_secret'];
        $this->redirect=$facebook['redirect'];
    }
//        public function setFacebookCrud($facebook){
//            $this->client_id=$facebook['client_id'];
//            $this->client_secret=$facebook['client_secret'];
//            $this->redirect=$facebook['redirect'];
//        }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @return mixed
     */
    public function getSecretKey()
    {
        return $this->client_secret;
    }

    /**
     * @return mixed
     */
    public function getRedirect()
    {
        return $this->redirect;
    }
}
?>