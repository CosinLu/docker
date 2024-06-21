<?php
phpinfo();

// Redis 测试代码
$redis = new Redis();
$redis->connect('redis', 6379);
$redis->set('test', 'Hello, Redis!');
echo '<p>' . $redis->get('test') . '</p>';

phpinfo();