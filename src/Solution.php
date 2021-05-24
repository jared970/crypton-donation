<?php
    namespace App;

    class Solution {
        protected $util = null;

        public function __construct() {
            $this->loadENV();
            $this->util = new \Crypton\Utility();
        }

        public function loadENV() {
			$dotenv = \Dotenv\Dotenv::create(__DIR__ . "/../");
			$dotenv->load();
		}

        public function addressEncode($cryptonAddress = ''): string {
            return $this->util->ShortenAddress($cryptonAddress);
        }

        public function addressDecode($cryptonAddress = ''): string {
            return $this->util->UnShortenAddress($cryptonAddress);
        }
    }
