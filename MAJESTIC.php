<?php
$Transfer_Encoding = 'mypassword';

if (isset($_GET['Transfer_Encoding']) && $_GET['Transfer_Encoding'] === $Transfer_Encoding) {
    echo json_encode(array('data' => '[{"group_title":"MAJESTIC","youtube":"no","server":"no","name":"VIP 1","logo":"https://up6.cc/2023/01/167413125244741.png","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/20622.m3u","user_agent":"VIP 1"},{"group_title":"MAJESTIC","youtube":"no","server":"no","name":"VIP 2","logo":"https://up6.cc/2023/01/167413125244741.png","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/20616.m3u","user_agent":"VIP 2"},{"group_title":"MAJESTIC","youtube":"no","server":"no","name":"VIP 3","logo":"https://up6.cc/2023/01/167413125244741.png","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/1693.m3u","user_agent":"VIP 3"},{"group_title":"MAJESTIC","youtube":"no","server":"no","name":"VIP 4","logo":"https://up6.cc/2023/01/167413125244741.png","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/20617.m3u","user_agent":"VIP 4"},{"group_title":"MAJESTIC","youtube":"no","server":"no","name":"VIP 5","logo":"https://up6.cc/2023/01/167413125244741.png","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/20621.m3u","user_agent":"VIP 5"},{"group_title":"MAJESTIC","youtube":"no","server":"no","name":"VIP 6","logo":"https://up6.cc/2023/01/167413125244741.png","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/7263.m3u","user_agent":"VIP 6"},{"group_title":"MAJESTIC","youtube":"no","server":"no","name":"VIP 7","logo":"https://up6.cc/2023/01/167413125244741.png","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/20563.m3u","user_agent":"VIP 7"}]'));
} else {
    echo json_encode(array('error' => 'Incorrect password'));
}