# PHP 資料處理 datahandling

## 引入
```
require_once __DIR__ . '/vendor/autoload.php';

use Zero\DataHandling\DataHandling;
```

使用方法

```
$array = (object)[
    [
        "zero" => "456"
    ],
    [
        "zero" => "zero"
    ]
];

$result = DataHandling::fill()->transForm($array)->findKeyData("zero");

用key找物件

stdClass Object 
(               
    [0] => 456  
    [1] => zero 
)               

$result2 = DataHandling::fill()->transForm($array)->findValueData("zero");

用value找物件值

stdClass Object 
(               
    [0] => zero 
)
```
                
