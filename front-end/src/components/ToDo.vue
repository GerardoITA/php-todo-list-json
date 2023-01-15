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
            a
          </div>
        </div>
       <!--  <div class="newTask">
          <div class="newTaskText">

          </div>
          <button>
          </button>
        </div> -->
        
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
