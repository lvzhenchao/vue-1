<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <task-app list="{{ $tasks }}"></task-app>
</div>

<template id="task-template">
    <h1 style="text-align: center">My task</h1>
    <div style="text-align: center;">
        <ul class="list-group">
            <li class="list-group-item" v-for="task in list">
                @{{  task.body }}
            </li>
        </ul>

    </div>
</template>
<script src="https://cdn.bootcdn.net/ajax/libs/vue/1.0.14/vue.js"></script>
<script>

    Vue.component('task-app',{
        template: '#task-template',
        props:['list'],
        created:function () {
            this.list = JSON.parse(this.list)
        }
    });
    new Vue({
        el : 'body'
    });

</script>

</body>
</html>
