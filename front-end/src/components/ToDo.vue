<script>
const todolist = "http://localhost/todo.php";
import axios from 'axios';

export default {
  name: 'ToDo',
  mounted(){
    axios.get(todolist)
      .then(res =>{
        const data = res.data
        console.log(data)
    });

  },
}
</script>

<template>
  <div class="container">
      <h1>Todo List</h1>
      <div class="list">
        <div class="newTask">
          <div class="newTaskText">

          </div>
          <button>
          </button>
        </div>
        
      </div>
      <div class="input">
        <input id="task" type="text" name="task" placeholder="Enter task...">
        <input id="addTask" type="submit" name="addTask">
      </div>
  </div>
</template>

<style lang="css" scoped>
@import '../meme.css';
</style>
