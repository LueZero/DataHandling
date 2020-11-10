# PHP 資料處理 datahandling

## 引入
```
require_once __DIR__ . '/vendor/autoload.php';

use Zero\DataHandling\DataHandling;
```

## 使用方法

```
$array = (object)[
    [
        "zero" => "456"
    ],
    [
        "zero" => "zero"
    ]
];

$result = DataHandling::fill()->transForm($array)->findKeyData("zero");// 用key找陣列/物件資料

output:

stdClass Object 
(               
    [0] => 456  
    [1] => zero 
)               

$result = DataHandling::fill()->transForm($array)->findValueData("zero");// 用value找陣列/物件資料值

output :

stdClass Object 
(               
    [0] => zero 
)


$array = [
    [
       "zero"=>"1","2","4"
    ],
    [
       "zero"=>"1","2","4"
    ]
];

$result = DataHandling::fill()->transForm($array)->sequenceData("desc");// 資料排序 asc/desc方式

output:

Array                       
(                           
    [0] => Array      
      (             
          [0] => 4  
          [1] => 2  
          [2] => 1  
      )             
                    
    [1] => Array      
      (             
          [0] => 4  
          [1] => 2  
          [2] => 1  
      )                          
                            
)                           
```
                
