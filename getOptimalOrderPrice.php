<?php
$tradeType   = isset($_REQUEST["type"]) ? $_REQUEST["type"] : "BUY";
$totalAmount = isset($_REQUEST["amount"]) ? $_REQUEST["amount"] : "1000";

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL            => "https://c2c.binance.com/gateway-api/v1/private/c2c/order-match/getOptimalOrderPrice",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING       => "",
    CURLOPT_MAXREDIRS      => 10,
    CURLOPT_TIMEOUT        => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST  => "POST",
    CURLOPT_POSTFIELDS     => "{\"asset\":\"USDT\",\"fiatUnit\":\"VND\",\"tradeType\":\"$tradeType\",\"channel\":\"c2c\",\"buyType\":\"BY_AMOUNT\",\"payType\":\"BANK\",\"totalAmount\":\"1000\"}",
    CURLOPT_HTTPHEADER     => [
        "authority: c2c.binance.com",
        "pragma: no-cache",
        "cache-control: no-cache",
        "x-trace-id: 35bb0720-5079-4e2a-a704-4d948b8de02d",
        "c2ctype: c2c_merchant",
        "dnt: 1",
        "csrftoken: f95732b19a763d5207404a50cdbdb102",
        "x-ui-request-trace: 35bb0720-5079-4e2a-a704-4d948b8de02d",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36",
        "content-type: application/json",
        "lang: vn",
        "fvideo-id: 31d3427091bda65a961f2521d43eb52618dcaec7",
        "device-info: eyJzY3JlZW5fcmVzb2x1dGlvbiI6Ijg2NCwxNTM2IiwiYXZhaWxhYmxlX3NjcmVlbl9yZXNvbHV0aW9uIjoiODI0LDE1MzYiLCJzeXN0ZW1fdmVyc2lvbiI6IldpbmRvd3MgMTAiLCJicmFuZF9tb2RlbCI6InVua25vd24iLCJzeXN0ZW1fbGFuZyI6InZpLVZOIiwidGltZXpvbmUiOiJHTVQrNyIsInRpbWV6b25lT2Zmc2V0IjotNDIwLCJ1c2VyX2FnZW50IjoiTW96aWxsYS81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV09XNjQpIEFwcGxlV2ViS2l0LzUzNy4zNiAoS0hUTUwsIGxpa2UgR2Vja28pIENocm9tZS84MS4wLjQwNDQuMTM4IFNhZmFyaS81MzcuMzYiLCJsaXN0X3BsdWdpbiI6IkNocm9tZSBQREYgUGx1Z2luLENocm9tZSBQREYgVmlld2VyLE5hdGl2ZSBDbGllbnQiLCJjYW52YXNfY29kZSI6IjUwNjZkN2VlIiwid2ViZ2xfdmVuZG9yIjoiR29vZ2xlIEluYy4iLCJ3ZWJnbF9yZW5kZXJlciI6IkFOR0xFIChJbnRlbChSKSBVSEQgR3JhcGhpY3MgRGlyZWN0M0QxMSB2c181XzAgcHNfNV8wKSIsImF1ZGlvIjoiMTI0LjA0MzQ0ODg0Mzk1Njg3IiwicGxhdGZvcm0iOiJXaW4zMiIsIndlYl90aW1lem9uZSI6IkFzaWEvU2FpZ29uIiwiZGV2aWNlX25hbWUiOiJDaHJvbWUgVjgxLjAuNDA0NC4xMzggKFdpbmRvd3MpIiwiZmluZ2VycHJpbnQiOiJkYmE0MjA3MzhkZDk2MzE4MmQ3YjUwYjhlYjU2N2MzNSIsImRldmljZV9pZCI6IiIsInJlbGF0ZWRfZGV2aWNlX2lkcyI6IjE2MTA5NDk1MjQzMDgxMks4Z0k3bG5ra3Vtb3pNRjRCIn0=",
        "bnc-uuid: 170299d9-9b92-4fce-98e3-2689979efda5",
        "clienttype: web",
        "accept: */*",
        "origin: https://c2c.binance.com",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: cors",
        "sec-fetch-dest: empty",
        "referer: https://c2c.binance.com/vn/quickTrade/buy/USDT/VND",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5,zh-CN;q=0.4,zh;q=0.3",
        "cookie: homepage-ab-test=A; bnc-uuid=170299d9-9b92-4fce-98e3-2689979efda5; campaign=www.binance.com; source=referral; userPreferredCurrency=VND_USD; sys_mob=no; noticeCache={\"EUR\":true}; common_fiat=VND; fiat-user-save-currency=VND; fiat-prefer-currency=VND; BNC_FV_KEY=31d3427091bda65a961f2521d43eb52618dcaec7; BNC_FV_KEY_EXPIRE=1611025329843; s9r1=BDDF3AC58A66518D45EE86CD8F053D92; cr00=418127451B54DF9B79C2DA43899AC0F9; d1og=web.18627906.C447DD59E1FA50B4449DFF35CA460CAF; r2o1=web.18627906.6B10403B62F569CE3149913D6ACCD1BE; f30l=web.18627906.5F9DBD2C746B7885EE54F6B3D0D6FFDD; isAccountsLoggedIn=y; logined=y; __BINANCE_USER_DEVICE_ID__={\"dc073c0d1ec7a650611948a2649c520f\":{\"date\":1610949523804,\"value\":\"161094952430812K8gI7lnkkumozMF4B\"}}; p20t=web.18627906.0A4455E41AA6FC65A85F0C8688CDEC74; lang=vn; sensorsdata2015jssdkcross=%7B%22distinct_id%22%3A%2218627906%22%2C%22first_id%22%3A%22176ff993783ea-0e5dd3f39c6c17-3962420d-1327104-176ff9937842d6%22%2C%22props%22%3A%7B%22%24latest_traffic_source_type%22%3A%22%E7%9B%B4%E6%8E%A5%E6%B5%81%E9%87%8F%22%2C%22%24latest_search_keyword%22%3A%22%E6%9C%AA%E5%8F%96%E5%88%B0%E5%80%BC_%E7%9B%B4%E6%8E%A5%E6%89%93%E5%BC%80%22%2C%22%24latest_referrer%22%3A%22%22%7D%2C%22%24device_id%22%3A%22176ff993783ea-0e5dd3f39c6c17-3962420d-1327104-176ff9937842d6%22%7D",
    ],
]);

$response = curl_exec($curl);

curl_close($curl);

header('Content-Type: application/json');

echo json_encode($response);
