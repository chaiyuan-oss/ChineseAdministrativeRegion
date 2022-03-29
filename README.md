## 2022全网最完整、最新、最全、中国省市区街道sql/json 文件
---
### 原作者地址
https://github.com/gaohuazi/china_regions

由于原作者获取到数据没有行政区划代码 故更改了数据获取地址为高德地图

### 基于高德数据获取中国行政区 需自行到高德开放平台申请key
https://lbs.amap.com/api/webservice/guide/api/district/#limit 高德文档地址

高德key地址
`gaode.class.php line 13`

### 其他说明
省份信息不包含港澳台如需要请在`gaode.class.php` `line 187` 自行添加
省市区县 不含街道 如需街道请在对应位置自行添加或解开注释

街道(乡镇)没有独有的行政区划编码，均继承父类（区县）的

高德数据获取需要输入标准名称 如河北省 输入河北有记录返回河北区 不是标准名称的要注意级别是否为需要的级别
级别
 - country:国家

 - province:省份（直辖市会在province和city显示）

 - city:市（直辖市会在province和city显示）

 - district:区县

 - street:街道

sql 文件需要自行更改为适合自己的

需要go版本请自行到原作者处获取代码

### 目录结构描述
<pre>
├── json                        // json文件目录
│   ├── province.json           // 省
│   ├── city.json               // 市
│   ├── area.json               // 区
│   └── street.json             // 街道
├── sql                         // mysql文件目录
│   ├── province.sql            // 省
│   ├── city.sql                // 市
│   ├── area.sql                // 区
│   ├── street.sql              // 街道
│   └── init.sql                // mysql表结构文件, 需要4张表
├── spider                      // 爬虫源文件目录
│   └── php                     // php版爬虫
│       ├── index.php           // demo入口文件
│       └── gaode.class.php    // 核心类库文件
├── docs                        // github联动效果演示文件，忽略
├── LICENSE                     // MIT
└── Readme.md                   // help
</pre>


### 如何抓取最新数据

##### 1.使用PHP版爬虫
clone项目后 直接执行 `php spider/php/index.php`  耗时约180s


---
执行后会在当前目录生成最新json/sql文件

### 其他说明

```mysql
# 导入sql时报错时可以尝试以下方式导入
mysql -uroot -p --default-character-set=utf8 dbname < /path/community.sql
```
