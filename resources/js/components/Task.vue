<template>
        <tr>
            <td>{{task.id}}</td>
            <td>{{task.title}}</td>
            <td>{{task.priority}}</td>
            <td><button @click="remove" class="btn btn-danger">Remove</button></td>
        </tr>
</template>

<script>
    export default  {
        data() {
            return {

            }
        },
        methods: {
            remove(){
                //named however you want remove or delete
                this.$emit('delete',this.task.id);
                //need a way to listen to it, putting into teh component  task-component
            }
        },
        props: ['task']
    }
</script>

<style scoped>

</style>