# PHP 資料處理

## 引入
```
require_once __DIR__ . '/vendor/autoload.php';

use Zero\Handling\DataProcessing;
```

## 使用方法

```
input: 

$array = (object)[
    [
        'zero' => '456'
    ],
    [
        'zero' => 'zero'
    ]
];

$result = DataProcessing::get()->transForm($array)->findKeyData('zero');// 用key找陣列/物件資料

output: 

stdClass Object 
(               
    [0] => 456  
    [1] => zero 
)               

$result = DataProcessing::get()->transForm($array)->findValueData('zero');// 用value找陣列/物件資料值

output :

stdClass Object 
(               
    [0] => zero 
)
```
```
input: 

$array = [
    [
       'zero'=>'1','2','4'
    ],
    [
       'zero'=>'1','2','4'
    ]
];

$result = DataProcessing::get()->transForm($array)->sortData('desc');// 資料排序 asc/desc方式

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