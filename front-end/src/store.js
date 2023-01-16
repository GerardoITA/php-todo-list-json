import { reactive } from 'vue';

export const store = reactive({
    ToDoAPIStore: "http://localhost/todo.php",
    NewTaskAPIStore: "http://localhost/newtask.php",
    taskList: [],
    newTask: '',
    newTaskObject: ''
}); 
