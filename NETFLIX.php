<?php
$Transfer_Encoding = 'mypassword';

if (isset($_GET['Transfer_Encoding']) && $_GET['Transfer_Encoding'] === $Transfer_Encoding) {
    echo json_encode(array('data' => '[{"group_title":"NETFLIX","youtube":"no","server":"no","name":"NETFLIX 1","logo":"https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcR7iwj4XHCyg3Z_DI_XI12J_IBK-qAM4UbbrQ\u0026usqp\u003dCAU","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/6362.m3u","user_agent":"NETFLIX 1"},{"group_title":"NETFLIX","youtube":"no","server":"no","name":"NETFLIX 2","logo":"https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcR7iwj4XHCyg3Z_DI_XI12J_IBK-qAM4UbbrQ\u0026usqp\u003dCAU","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/1987.m3u","user_agent":"NETFLIX 2"},{"group_title":"NETFLIX","youtube":"no","server":"no","name":"NETFLIX 3","logo":"https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcR7iwj4XHCyg3Z_DI_XI12J_IBK-qAM4UbbrQ\u0026usqp\u003dCAU","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/2114.m3u","user_agent":"NETFLIX 3"},{"group_title":"NETFLIX","youtube":"no","server":"no","name":"NETFLIX 4","logo":"https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcR7iwj4XHCyg3Z_DI_XI12J_IBK-qAM4UbbrQ\u0026usqp\u003dCAU","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/3205.m3u","user_agent":"NETFLIX 4"},{"group_title":"NETFLIX","youtube":"no","server":"no","name":"NETFLIX 5","logo":"https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcR7iwj4XHCyg3Z_DI_XI12J_IBK-qAM4UbbrQ\u0026usqp\u003dCAU","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/3338.m3u","user_agent":"NETFLIX 5"},{"group_title":"NETFLIX","youtube":"no","server":"no","name":"NETFLIX 6","logo":"https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcR7iwj4XHCyg3Z_DI_XI12J_IBK-qAM4UbbrQ\u0026usqp\u003dCAU","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/3335.m3u","user_agent":"NETFLIX 6"}]'));
} else {
    echo json_encode(array('error' => 'Incorrect password'));
}