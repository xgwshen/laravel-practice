#学习laravel之旅
##一、路由
1. 路由简介
2. 基础路由
3. 多请求路由
4. 路由群组
5. 路由参数
6. 路由别名
7. 路由中输出视图

##二、控制器
1. 路由到控制器的映射
2. 控制器到视图 view('路径', array('变量'=> '值')) 
##三、视图
1. 创建视图 info.php info.blade.php
2. 显示变量 {{$name}}
##四、模板
1. app下创建模板
2. 继承Illuminate\Database\Eloquent\Model基类
3. 控制器调用模板 Member::getMember() ..
##五、新建数据表与连接数据库
1. 新建数据库和连接数据库
2. DB facade CURD 原生数据库操作
3. 查询构造器CURD 聚合函数
4. eloquent orm 查询数据
5. Eloquent ORM中新增数据、自定义时间戳及批量赋值的使用
6. Eloquent ORM 删除数据 find() + delete(); destroy(); where()->delete();
##六、 Blade模板引擎简介及模板继承的使用

