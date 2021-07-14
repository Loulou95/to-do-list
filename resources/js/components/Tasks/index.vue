<template>
    <div class="content">
        <div class="content-left">
            <form method="post" @sumit.prevent="addTask">
                <input type="text" class="input-field" placeholder="insert task name" v-model="newTask.name">
                <button class="task-btn" @click.prevent="addTask">Add</button>
            </form>
        </div>
        <div class="content-right">
            <div class="task-list">
                <p><span class="task-span">#</span>Task</p>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            tasks: [],
            newTask: {
                name: ''
            }
        }
    },

    created() {
        this.getTasks();
    },

    methods: {
        addTask() {
            axios.post("store", this.newTask).then(response => {
               console.log('task created')
            }).catch(error => {
                console.log(error.response)
            });
        },

        getTasks() {
            axios.get("tasks").then(response => {
                this.tasks = response.data.tasks
            }).catch(error => {
                console.log(error.response)
            });
        },
    }
}
</script>
