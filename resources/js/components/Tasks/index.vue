<template>
    <div class="content-left">
        <form method="post" @sumit.prevent="addTask">
            <input type="text" class="input-field" placeholder="insert task name" v-model="newTask.name">
            <button class="task-btn" @click.prevent="addTask">Add</button>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                newTask: {
                    name: ''
                }
            }
        },

        methods: {
            addTask() {
                axios.post("store", this.newTask).then(response => {
                    this.newTask.name = "";
                   console.log('task created')
                }).catch(error => {
                    console.log(error.response)
                });
            },

        }
    }
</script>
