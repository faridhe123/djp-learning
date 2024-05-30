<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace core\oauth2\client;

use core\oauth2\client;

use moodle_url;
use moodle_exception;
use stdClass;

/**
 * Class linkedin - Custom client handler to fetch data from linkedin
 *
 * Custom oauth2 client for linkedin as it doesn't support OIDC and has a different way to get
 * key information for users - firstname, lastname, email.
 *
 * @copyright  2021 Peter Dias
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @package    core
 */
class tpportal extends client {
    /**
     * Fetch the user info from the userinfo and email endpoint and map fields back
     *
     * @return array|false
     */
    public function get_userinfo() {
        /*$url = $this->get_issuer()->get_endpoint_url('userinfo');
        if (empty($url)) {
            return false;
        }

        $params = [
            'npwp'=> '3173052203890009'
        ];

        $this->setHeader($this->setHeader('Authorization: +smv/oU0fYA9vrG9JdIdVcbMhIEvNCd+2sIT5kUMYkBNfFFaTNxokEZ3es0xw5ai7UOzAq95OrH8YCoPLN713w=='));*/

//        $info = $this->post($url, $this->build_post_data($params));
//        echo "<pre>",
//        print_r(['token',$this->accesstoken->token]);
//        print_r(['decode',]);

//        print_r(['info',$info]);
//        die();
//        if (!$response) {
//            return false;
//        }
//        $userinfo = $response;
        $userinfo = tpportal::decode($this->accesstoken->token, null, false);
        if (is_null($userinfo)) {
            // Throw an exception displaying the original response, because, at this point, $userinfo shouldn't be empty.
            throw new moodle_exception($userinfo);
        }

        return $this->map_userinfo_to_fields($userinfo);
    }

    public function logoutpage_hook() {
        global $DB, $USER;

        parent::log_out();
        if (!$this->can_autorefresh()) {
            return;
        }
    }

    /*public function map_userinfo_to_fields($userinfo): array
    {
        echo "<pre>",
        $map = $this->get_userinfo_mapping();
        print_r(['$userinfo',$userinfo]);
        print_r(['$map',$map]);
        die('MAPPPPSZ');
        return [];
    }*/

    /**
     * Get the email address of the user from the email endpoint
     *
     * @return array|false
     */
    /*private function get_useremail() {
        $url = $this->get_issuer()->get_endpoint_url('email');

        $response = $this->get($url);
        if (!$response) {
            return false;
        }
        $userinfo = new \stdClass();
        try {
            $userinfo = json_decode($response);
        } catch (\Exception $e) {
            return false;
        }

        return $this->map_userinfo_to_fields($userinfo);
    }*/

    /*
     * START DECODER
     *
     * */

    static $methods = array(
        'HS256' => array('hash_hmac', 'SHA256'),
        'HS512' => array('hash_hmac', 'SHA512'),
        'HS384' => array('hash_hmac', 'SHA384'),
        'RS256' => array('openssl', 'SHA256'),
    );

    /**
     * Decodes a JWT string into a PHP object.
     *
     * @param string      $jwt       The JWT
     * @param string|Array|null $key The secret key, or map of keys
     * @param bool        $verify    Don't skip verification process
     *
     * @return object      The JWT's payload as a PHP object
     * @throws UnexpectedValueException Provided JWT was invalid
     * @throws DomainException          Algorithm was not provided
     *
     * @uses jsonDecode
     * @uses urlsafeB64Decode
     */
    public static function decode($jwt, $key = null, $verify = true)
    {
        $tks = explode('.', $jwt);
        if (count($tks) != 3) {
//            throw new UnexpectedValueException('Wrong number of segments');
            throw new moodle_exception('UnexpectedValueException' . ' ' . 'Wrong number of segments');
        }
        list($headb64, $bodyb64, $cryptob64) = $tks;
        if (null === ($header = tpportal::jsonDecode(tpportal::urlsafeB64Decode($headb64)))) {
//            throw new UnexpectedValueException('Invalid segment encoding');
            throw new moodle_exception('UnexpectedValueException' . ' ' . 'Invalid segment encoding');
        }
        if (null === $payload = tpportal::jsonDecode(tpportal::urlsafeB64Decode($bodyb64))) {
//            throw new UnexpectedValueException('Invalid segment encoding');
            throw new moodle_exception('JWT' . ' ' . 'Invalid segment encoding');
        }
        $sig = tpportal::urlsafeB64Decode($cryptob64);
        if ($verify) {
            if (empty($header->alg)) {
//                throw new DomainException('Empty algorithm');
                throw new moodle_exception('JWT' . ' ' . 'Empty algorithm');
            }
            if (is_array($key)) {
                if(isset($header->kid)) {
                    $key = $key[$header->kid];
                } else {
//                    throw new DomainException('"kid" empty, unable to lookup correct key');
                    throw new moodle_exception('DomainException' . ' ' . '"kid" empty, unable to lookup correct key');
                }
            }
            if (!tpportal::verify("$headb64.$bodyb64", $sig, $key, $header->alg)) {
//                throw new UnexpectedValueException('Signature verification failed');
                throw new moodle_exception('UnexpectedValueException' . ' ' . 'Signature verification failed');
            }
            // Check token expiry time if defined.
            if (isset($payload->exp) && time() >= $payload->exp){
//                throw new UnexpectedValueException('Expired Token');
                throw new moodle_exception('UnexpectedValueException' . ' ' . 'Expired Token');
            }
        }
        return $payload;
    }

    /**
     * Converts and signs a PHP object or array into a JWT string.
     *
     * @param object|array $payload PHP object or array
     * @param string       $key     The secret key
     * @param string       $algo    The signing algorithm. Supported
     *                              algorithms are 'HS256', 'HS384' and 'HS512'
     *
     * @return string      A signed JWT
     * @uses jsonEncode
     * @uses urlsafeB64Encode
     */
    public static function encode($payload, $key, $algo = 'HS256', $keyId = null)
    {
        $header = array('typ' => 'JWT', 'alg' => $algo);
        if($keyId !== null) {
            $header['kid'] = $keyId;
        }
        $segments = array();
        $segments[] = tpportal::urlsafeB64Encode(tpportal::jsonEncode($header));
        $segments[] = tpportal::urlsafeB64Encode(tpportal::jsonEncode($payload));
        $signing_input = implode('.', $segments);

        $signature = tpportal::sign($signing_input, $key, $algo);
        $segments[] = tpportal::urlsafeB64Encode($signature);

        return implode('.', $segments);
    }

    /**
     * Sign a string with a given key and algorithm.
     *
     * @param string $msg          The message to sign
     * @param string|resource $key The secret key
     * @param string $method       The signing algorithm. Supported algorithms
     *                               are 'HS256', 'HS384', 'HS512' and 'RS256'
     *
     * @return string          An encrypted message
     * @throws DomainException Unsupported algorithm was specified
     */
    public static function sign($msg, $key, $method = 'HS256')
    {
        if (empty(self::$methods[$method])) {
//            throw new DomainException('Algorithm not supported');
            throw new moodle_exception('DomainException' . ' ' . 'Algorithm not supported');
        }
        list($function, $algo) = self::$methods[$method];
        switch($function) {
            case 'hash_hmac':
                return hash_hmac($algo, $msg, $key, true);
            case 'openssl':
                $signature = '';
                $success = openssl_sign($msg, $signature, $key, $algo);
                if(!$success) {
//                    throw new DomainException("OpenSSL unable to sign data");
                    throw new moodle_exception('DomainException' . ' ' . 'OpenSSL unable to sign data');
                } else {
                    return $signature;
                }
        }
    }

    /**
     * Verify a signature with the mesage, key and method. Not all methods
     * are symmetric, so we must have a separate verify and sign method.
     * @param string $msg the original message
     * @param string $signature
     * @param string|resource $key for HS*, a string key works. for RS*, must be a resource of an openssl public key
     * @param string $method
     * @return bool
     * @throws DomainException Invalid Algorithm or OpenSSL failure
     */
    public static function verify($msg, $signature, $key, $method = 'HS256') {
        if (empty(self::$methods[$method])) {
//            throw new DomainException('Algorithm not supported');
            throw new moodle_exception('DomainException' . ' ' . 'OpenSSL unable to sign data');
        }
        list($function, $algo) = self::$methods[$method];
        switch($function) {
            case 'openssl':
                $success = openssl_verify($msg, $signature, $key, $algo);
                if(!$success) {
//                    throw new DomainException("OpenSSL unable to verify data: " . openssl_error_string());
                    throw new moodle_exception('DomainException' . ' ' . "OpenSSL unable to verify data: " . openssl_error_string());
                } else {
                    return $signature;
                }
            case 'hash_hmac':
            default:
                $hash = hash_hmac($algo, $msg, $key, true);
                $len = min(strlen($signature), strlen($hash));

                $status = 0;
                for ($i = 0; $i < $len; $i++) {
                    $status |= (ord($signature[$i]) ^ ord($hash[$i]));
                }
                $status |= (strlen($signature) ^ strlen($hash));

                return ($status === 0);
        }
    }

    /**
     * Decode a JSON string into a PHP object.
     *
     * @param string $input JSON string
     *
     * @return object          Object representation of JSON string
     * @throws DomainException Provided string was invalid JSON
     */
    public static function jsonDecode($input)
    {
        if (version_compare(PHP_VERSION, '5.4.0', '>=') && !(defined('JSON_C_VERSION') && PHP_INT_SIZE > 4)) {
            /* In PHP >=5.4.0, json_decode() accepts an options parameter, that allows you to specify that large ints (like Steam
             * Transaction IDs) should be treated as strings, rather than the PHP default behaviour of converting them to floats.
             */
            $obj = json_decode($input, false, 512, JSON_BIGINT_AS_STRING);
        } else {
            /* Not all servers will support that, however, so for older versions we must manually detect large ints in the JSON
             * string and quote them (thus converting them to strings) before decoding, hence the preg_replace() call.
             */
            $max_int_length = strlen((string) PHP_INT_MAX) - 1;
            $json_without_bigints = preg_replace('/:\s*(-?\d{'.$max_int_length.',})/', ': "$1"', $input);
            $obj = json_decode($json_without_bigints);
        }

        if (function_exists('json_last_error') && $errno = json_last_error()) {
            tpportal::_handleJsonError($errno);
        } else if ($obj === null && $input !== 'null') {
//            throw new DomainException('Null result with non-null input');
            throw new moodle_exception('DomainException' . ' ' . 'Null result with non-null input');
        }
        return $obj;
    }

    /**
     * Encode a PHP object into a JSON string.
     *
     * @param object|array $input A PHP object or array
     *
     * @return string          JSON representation of the PHP object or array
     * @throws DomainException Provided object could not be encoded to valid JSON
     */
    public static function jsonEncode($input)
    {
        $json = json_encode($input);
        if (function_exists('json_last_error') && $errno = json_last_error()) {
            tpportal::_handleJsonError($errno);
        } else if ($json === 'null' && $input !== null) {
//            throw new DomainException('Null result with non-null input');
            throw new moodle_exception('DomainException' . ' ' . 'Null result with non-null input');
        }
        return $json;
    }

    /**
     * Decode a string with URL-safe Base64.
     *
     * @param string $input A Base64 encoded string
     *
     * @return string A decoded string
     */
    public static function urlsafeB64Decode($input)
    {
        $remainder = strlen($input) % 4;
        if ($remainder) {
            $padlen = 4 - $remainder;
            $input .= str_repeat('=', $padlen);
        }
        return base64_decode(strtr($input, '-_', '+/'));
    }

    /**
     * Encode a string with URL-safe Base64.
     *
     * @param string $input The string you want encoded
     *
     * @return string The base64 encode of what you passed in
     */
    public static function urlsafeB64Encode($input)
    {
        return str_replace('=', '', strtr(base64_encode($input), '+/', '-_'));
    }

    /**
     * Helper method to create a JSON error.
     *
     * @param int $errno An error number from json_last_error()
     *
     * @return void
     */
    private static function _handleJsonError($errno)
    {
        $messages = array(
            JSON_ERROR_DEPTH => 'Maximum stack depth exceeded',
            JSON_ERROR_CTRL_CHAR => 'Unexpected control character found',
            JSON_ERROR_SYNTAX => 'Syntax error, malformed JSON'
        );
//        throw new DomainException(
//            isset($messages[$errno])
//                ? $messages[$errno]
//                : 'Unknown JSON error: ' . $errno
//        );
        throw new moodle_exception('DomainException' . ' ' .
        isset($messages[$errno])
            ? $messages[$errno]
            : 'Unknown JSON error: ' . $errno);
    }

}
