<script>
import axios from 'axios';
import { store } from '../store'

export default {
 name: 'ToDo',
 data() {
   return {
     store,
     ToDoList: []
   }
 },
 methods: {
   getJson() {
     let ToDoAPI = store.ToDoAPIStore;
     axios
       .get(ToDoAPI)
       .then(res => {
         store.taskList = res.data;
         console.log(store.taskList);
       });
   },
   addTask() {
     console.log(store.newTask)
     let NewTaskAPI = store.NewTaskAPIStore;
     const params = { params: {
       'newTodo' : store.newTask
     }};
     axios
       .get(NewTaskAPI, params)
       .then(res => {
         const data = res.data; 
         console.log(data);
       });
   }  
 },
 mounted() {
   this.getJson()
 }

}
</script>

<template>
 <div class="container">
     <h1>Todo List</h1>
     <div class="list">
       <div class="newTask" v-for="task in store.taskList ">
         <div class="newTaskText">
           {{ task.text }}
         </div>
       </div> 
     </div>
     <div class="input">
       <input v-model="store.newTask" id="task" type="text" name="task" placeholder="Enter task...">
       <input id="addTask" type="submit" name="addTask" @click="addTask()">
     </div>
 </div>
</template>

<style lang="css" scoped>
@import '../meme.css';
</style>



<!-- 
 [
   {
       "text": "Task 1",
       "completed": false

   },
   {
       "text": "Task 2",
       "completed": false
   },
   {
       "text": "Task 3",
       "completed": false
   }
   


]
-->