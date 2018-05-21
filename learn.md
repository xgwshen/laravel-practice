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
##六、 Blade模板引擎
1. Blade模板引擎简介及模板继承的使用
   * 模板继承 section / yield / extends / parent
2. 基础语法及include的使用
   * 模板中输出php变量
   * 模板中调用PHP代码
   * 原样输出
   * 模板中注释
   * include 引入子视图
3. 流程控制
   * if
   * unless （if的取返）
   * foreach
   * for
   * forelse 和foreach类似
4. 模板中的url
   * url() 根据路由的名称生成url
   * action() 根据指定的控制器和方法名生成url
   * route() 根据路由的别名生成url
# laravel表单篇学习
##一、 controller介绍
1. controller 之 Request
    * input() all() method() isMethod() is()
2. Controller 之 Session
    * 存值 put(str|array)-存字符串 push()-存数组 flash()-一次性存
    * 取值 get() pull()-取后删除 all()
    * 判断 has()
    * 删值 forget()单删 flush()全删
3. Controller 之 Response
    * 字符串 echo dd() var_dump
    * 视图 view('path',['key'=>'value'])
    * json Response->json()
    * 重定向
4. Controller 之 Middleware
    * 过滤HTTP请求的作用
    * 1. 创建中间件
      2. 注册中间件
      3. 使用中间件
      4. 前置和后置
##表单
1. 实例演示
ssss
