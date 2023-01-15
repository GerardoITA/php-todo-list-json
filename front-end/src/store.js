import { reactive } from 'vue';

export const store = reactive({
    ToDoAPIStore: "http://localhost/todo.php",
    taskList: []
}); 
