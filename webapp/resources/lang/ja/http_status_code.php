<?php

return [
  '400' => [
    'title'   => '400 Bad Request',
    'heading' => '400 Bad Request',
    'description'  => 'このレスポンスは、構文が無効であるためサーバーがリクエストを理解できないことを示します。',
  ],
  '401' => [
    'title'   => '401 Unauthorized',
    'heading' => '401 Unauthorized',
    'description'  => 'リクエストされたリソースを得るために認証が必要です。',
  ],
  '403' => [
    'title'   => '403 Forbidden',
    'heading' => 'あなたにはアクセス権がありません',
    'description'  => 'クライアントがコンテンツへのアクセス権を持たず、サーバーが適切な応答への返信を拒否していることを示します。',
  ],
  '404' => [
    'title'   => '404 Not Found',
    'heading' => '404 Not Found',
    'description'  => 'お探しのページは見つかりませんでした。大変恐れ入りますが、トップページより再度画面をご確認下さい。',
  ],
  '500' => [
    'title'   => '500 Internal Server Error',
    'heading' => '500 Internal Server Error',
    'description'  => 'プログラムに文法エラーがあったり、設定に誤りがあった場合などに返されます。管理者へ連絡してください。',
  ],
  '503' => [
    'title'   => '503 Service Unavailable',
    'heading' => '503 Service Unavailable',
    'description'  => 'サービスが一時的に過負荷やメンテナンスで使用不可能な状態です。',
  ],
];
