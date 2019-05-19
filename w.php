?php
// script created by : will pratama - facebook.co>

date_default_timezone_set("Asia/Jakarta");
$date = date("H:i:s Y-m-d");
class qriket extends modules
{
        private $BASE_URL = "https://goldcloudblu>

        public function login($email, $password)
        {
                $url = $this->BASE_URL."/app/logi>
                $post = '{"email":"'.$email.'","p>
                $headers = explode("\n", "device->

                $login = $this->curl($url, $post,>
                $obj = json_decode($login);
