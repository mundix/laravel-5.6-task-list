<template>
    <div class="app-component">
        <table class="table">
            <thead>
                <tr>
                    <th>Task Title</th>
                    <th>Priority Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <task-component></task-component>

                <tr>
                    <td><input type="text" id="task" class="form-control"></td>
                    <td>
                        <select  id="select" class="form-control">
                            <option>Low</option>
                            <option>Medium</option>
                            <option>High</option>
                        </select>
                    </td>
                    <td><button class="btn btn-primary">ADD</button></td>
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
                message: "Hello we are here"
            }
        },
        components: {TaskComponent}
    }
</script>

<style scoped>

</style>