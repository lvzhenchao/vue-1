<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <meta id="token" name="token" value="{{ csrf_token()}}">
</head>
<body>

<div class="container">
    <task-app></task-app>
</div>

<template id="task-template">
    <form class="form-group" @submit="createTask">
        <input type="text" class="form-control" v-model="notes">
        <button type="submit" class="btn btn-success btn-block">Create Task</button>
    </form>

    <h1 style="text-align: center">My task</h1>
    <div style="text-align: center;">
        <ul class="list-group">
            <li class="list-group-item" v-for="task in list | orderBy 'id' -1">
                @{{ task.body }}
                <strong @click="deleteTask(task)">X</strong>
            </li>
        </ul>
    </div>
</template>

<script src="https://cdn.bootcdn.net/ajax/libs/vue/1.0.14/vue.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/vue-resource/0.6.1/vue-resource.min.js"></script>

<script>

    Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
    var resource = Vue.resource('api/tasks/{id}');
    Vue.component('task-app',{
        template: '#task-template',
        props:['list'],
        data:function () {
            return {
                list:[],
                notes:''
            }
        },
        created:function () {
            var vm = this;
            this.$http.get(
                'api/tasks',
                function (data) {
                    vm.list = data;
                    // console.log(data);
                }
            );
        },
        methods:{
            deleteTask:function (task) {
                resource.delete(
                    {id:task.id},
                    function (response) {
                        console.log(response);
                    }
                );
                this.list.$remove(task);
            },
            createTask:function (e) {
                e.preventDefault();
                this.$http.post(
                    'api/tasks',
                    {body: this.notes},
                    function (response){
                        this.list.push(response.task);
                        this.notes = '';
                        // console.log(response);
                    }.bind(this) //或者像上面 定义一个var vm = this;
                );
            }
        }
    });
    new Vue({
        el : 'body'
    });

</script>

</body>
</html>
