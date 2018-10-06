<template>
    <div class="app-component">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task Title</th>
                    <th>Priority Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            <!--@delete from Task.vue method remove with this.$emit('delete',this.task.id);-->
                <task-component v-for="task in tasks" :key="task.id" :task="task" @delete="remove"></task-component>

                <tr>
                    <td><input v-model="task.title" type="text" id="task" class="form-control"></td>
                    <td>
                        <select v-model="task.priority"  id="select" class="form-control">
                            <option>Low</option>
                            <option>Medium</option>
                            <option>High</option>
                        </select>
                    </td>
                    <td><button @click="store" class="btn btn-primary">ADD</button></td>
                </tr>
            </tbody>
        </table>

    </div>
</template>

<script>

    import TaskComponent from "./Task.vue";

    export default  {
        data() {
            return {
                tasks: [],
                task: {title:'',priority:''}
            }
        },

        methods: {
            getTaks() {
                window.axios.get('/api/tasks')
                    .then(({data})=>{
                        data.forEach(task => {
                            this.tasks.push(task);
                        });
                    });
            },
            store(){
                window.axios.post('/api/tasks',this.task).then(savedTask => {
                    this.tasks.push(savedTask.data);
                     this.task.title = '';
                    this.task.priority = '';
                })
            },
            remove() { //Binding from  Task.Vue
                console.log(`I GOT THE DATA ${task.id}`);

            }
        },
        created() {
            this.getTaks();
        },
        components: {TaskComponent}
    }
</script>

<style scoped>

</style>