<?php namespace Maythiwat;

class WalletAPI
{
    /* A function for performing cURL Request */
    public function Request($method = 'GET', $url, $header = false, $data = false, $ua = false) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, (!$ua) ? 'okhttp/3.8.0' : $ua);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, (!$header) ? false : $header);
        curl_setopt($ch, CURLOPT_POSTFIELDS, (!$data) ? false : $data);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    
    /* Auth API */
    public function Login($user, $pass, $type = 'email') {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/signin";
        $header = ["Host: mobile-api-gateway.truemoney.com", "Content-Type: application/json"];
        $data = ["username"=>$user, "password"=>sha1($user.$pass), "type"=>$type];
        return @json_decode($this->Request('POST', $url, $header, json_encode($data)), true);
    }
    public function Logout($token) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/signout/{$token}";
        $header = ["Host: mobile-api-gateway.truemoney.com"];
        return @json_decode($this->Request('POST', $url, $header, false), true);
    }
    public function GetToken($user, $pass, $type = 'email') {
        $res = $this->Login($user, $pass, $type);
        return (isset($res['data']['accessToken'])) ? $res['data']['accessToken'] : null;
    }
    
    /* Profile API */
    public function GetProfile($token) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/profile/{$token}";
        $header = ["Host: mobile-api-gateway.truemoney.com"];
        return @json_decode($this->Request('GET', $url, $header, false), true)['data'];
    }
    public function GetCurrentBalance($token) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/profile/balance/{$token}";
        $header = ["Host: mobile-api-gateway.truemoney.com"];
        return @json_decode($this->Request('GET', $url, $header, false), true)['data'];
    }

    /* Activity/Transaction API */
    public function FetchActivities($token, $start = null, $end = null, $limit = 25) {
        $end = ($end == null) ? date('Y-m-d') : $end;
        $start = ($start == null) ? date('Y-m-d', strtotime('-7 days')) : $start;
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/user-profile-composite/v1/users/transactions/history?start_date={$start}&end_date={$end}&limit={$limit}";
        $header = ["Host: mobile-api-gateway.truemoney.com", "Authorization: {$token}"];
        return @json_decode($this->Request('GET', $url, $header, false), true)['data']['activities'];
    }
    public function FetchTxDetail($token, $id) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/user-profile-composite/v1/users/transactions/history/detail/{$id}";
        $header = ["Host: mobile-api-gateway.truemoney.com", "Authorization: {$token}"];
        return @json_decode($this->Request('GET', $url, $header, false), true)['data'];
    }

    /* Cashcard API */
    public function CashcardTopup($token, $cashcard) {
        $time = time();
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/topup/mobile/{$time}/{$token}/cashcard/{$cashcard}";
        $header = ["Host: mobile-api-gateway.truemoney.com"];
        return @json_decode($this->Request('POST', $url, $header, true), true);
    }
    public function CashcardBuyRequest($token, $mobile, $amount) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/buy/e-pin/draft/verifyAndCreate/{$token}";
        $data = ["recipientMobileNumber"=>$mobile, "amount"=>$amount];
        $header = ["Host: mobile-api-gateway.truemoney.com", "Content-Type: application/json"];
        return @json_decode($this->Request('POST', $url, $header, json_encode($data)), true);
    }
    public function CashcardBuyComfirm($token, $draft, $mobile, $otpString, $otpRefCode) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/buy/e-pin/confirm/{$draft}/{$token}";
        $data = ["mobileNumber"=>$mobile, "otpString"=>$otpString, "otpRefCode"=>$otpRefCode, "timestamp"=>time()];
        $header = ["Host: mobile-api-gateway.truemoney.com", "Content-Type: application/json"];
        return @json_decode($this->Request('PUT', $url, $header, json_encode($data)), true);
    }
    
    /* P2P API */
    public function TransactionDraft($token, $target, $amount) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/transfer/draft-transaction/{$token}";
        $data = ["mobileNumber"=>$target, "amount"=>$amount, "timestamp"=>time()];
        $header = ["Host: mobile-api-gateway.truemoney.com", "Content-Type: application/json"];
        return @json_decode($this->Request('POST', $url, $header, json_encode($data)), true);
    }
    public function TransactionVerify($token, $draft, $message) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/transfer/draft-transaction/{$draft}/send-otp/{$token}";
        $data = ["personalMessage"=>$message, "timestamp"=>time()];
        $header = ["Host: mobile-api-gateway.truemoney.com", "Content-Type: application/json"];
        return @json_decode($this->Request('PUT', $url, $header, json_encode($data)), true);
    }
    public function TransactionConfirm($token, $draft, $sender, $otpString, $otpRefCode) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/transfer/transaction/{$draft}/{$token}";
        $data = ["mobileNumber"=>$sender, "otpString"=>$otpString, "otpRefCode"=>$otpRefCode, "timestamp"=>time()];
        $header = ["Host: mobile-api-gateway.truemoney.com", "Content-Type: application/json"];
        return @json_decode($this->Request('POST', $url, $header, json_encode($data)), true);
    }
    public function TransactionStatus($token, $draft) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/transfer/transaction/{$draft}/{$token}";
        $header = ["Host: mobile-api-gateway.truemoney.com"];
        return @json_decode($this->Request('GET', $url, $header), true);
    }
}
?>