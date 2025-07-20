<?


function fppApiIkspresSetting(setting){
  $url = 'http://localhost/api/plugin/Ikspres/settings/'.$setting;
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_HTTPGET, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response_json = curl_exec($ch);
  curl_close($ch);
  $response=json_decode($response_json, true); 
  return $response[setting];
}
print_r(fppApiIkspresSetting('IkspresPwm330mA'));

?>
