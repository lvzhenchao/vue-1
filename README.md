# 1 数据双向绑定 v-model
- 意味着当你更改 JavaScript 中的数据时，UI（用户界面）会自动更新
- 同样，当 UI 更改（例如，用户输入）时，数据模型也会自动更新
- 极大地简化了界面和逻辑之间的交互。

# 2、简单好用的v-show
- v-show 是 Vue.js 中用于条件性地切换一个元素是否可见的指令。
- 它通过简单地切换元素的 CSS display 属性来控制元素的显示与隐藏。
- 原理基本就是在style当中使用display:none来实现的

# 3、事件处理
- v-on绑定事件
- @ = v-on简写

# 4、组件是开发：其实就是自定义的标签
- Vue.component 常用属性和方法

# 5、computed的应用场景:需要处理代码的逻辑输出
- 处理一些逻辑复杂的数据输出的时候有很大的用处

# 6、处理列表数据
- v-for循环
- :class

# 7、开发todo应用
- 记得将list绑定到vue里面；否则出现的是字符串

# 8、后端接口
- 创建模型：php artisan make:mode Task -m
- 创建工厂：php artisan make:factory TaskFactory --model=Task
- 创建种子方法：php artisan make:seeder TaskSeeder
- 生成假数据：php artisan db:seed --class=TaskSeeder 

# 9、Vue resource插件使用
- 是解决Vue应用的ajax请求方面的很好解决方案

## 9-1、使用Vue的resource路由
- 资源组路由
- 引入resource
- 结合laravel的resource路由，实现创建任务和删除任务，让todo应用更加完善

## 10、彩蛋
- BootCDN可获取各CDN的静态资源，引入相关的静态资源
- 添加vue工具









