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

        public static function dataFilter($string = ""): string {
			$string = strip_tags($string);
			$string = stripslashes($string);
			$string = htmlspecialchars($string);
			$string = trim($string);
			return $string;
        }
        
        public static function verifyHEXstr($hex = '', $str_len = 64): bool {
			if(strlen($hex) != $str_len || !ctype_xdigit($hex)) {
				return false;
			} else {
				return true;
			}
		}

        public function parseLink(): string {
            $address = self::dataFilter($_GET['address']);
            if($address == '') {
                return "empty address given";
            }
            if(! self::verifyHEXstr($address)) {
                return "invalid address given";
            }
            return 'https://crypton.life/CRP/' . $this->addressEncode($address);
        }

        public function parseDataForQR(): string {
            $addressShort = self::dataFilter($_GET['address']);
            $address = $this->addressDecode($addressShort);
            return $address;
        }
    }
