const endTime = new Date("2024-02-16 09:15").getTime();

setInterval(() => {
  const nowTime = new Date().getTime();
  console.log(endTime);
  const days = Math.floor(
    endTime / (1000 * 60 * 60 * 24) - nowTime / (1000 * 60 * 60 * 24)
  );
  const hours = Math.floor(
    (endTime / (1000 * 60 * 60) - nowTime / (1000 * 60 * 60)) % 24
  );
  const minutes = Math.floor(
    (endTime / (1000 * 60) - nowTime / (1000 * 60)) % 60
  );
  const seconds = Math.floor((endTime / 1000 - nowTime / 1000) % 60);
  document.querySelector("span.days").textContent = days;
  document.querySelector("span.hours").textContent = hours;
  document.querySelector("span.minutes").textContent = minutes;
  document.querySelector("span.seconds").textContent = seconds;
}, 1000);

let time = 0;
let active = false;
let intervalId;

const timer = () => {
  if (!active) {
    btnStart.textContent = "Pauza";
    active = !active;
    intervalId = setInterval(startStoper, 10);
  } else {
    btnStart.textContent = "Start";
    active = !active;
    clearInterval(intervalId);
  }
};
const startStoper = () => {
  time++;
  div.textContent = (time / 100).toFixed(2);
};

const reset = () => {
  if (!active) {
    div.textContent = "0:00";
  }
  console.log("Click");
};

const btnStart = document.querySelector(".start");
const btnReset = document.querySelector(".reset");

const div = document.querySelector(".time p");
btnReset.addEventListener("click", reset);
btnStart.addEventListener("click", timer);

const removeTask = (e) => {
  // e.target.parentNode.remove();
  e.target.parentNode.style.textDecoration = "line-through";
  e.target.remove();
};

document
  .querySelectorAll("li button")
  .forEach((item) => item.addEventListener("click", removeTask));

const input = document.querySelector("#wyszukiwarka input");
const ul = document.querySelector("#wyszukiwarka ul");
const liElements = document.querySelectorAll("#wyszukiwarka li");

const search = (e) => {
  const searchText = e.target.value.toLowerCase();
  let tasks = [...liElements];
  tasks = tasks.filter((task) =>
    task.textContent.toLocaleLowerCase().includes(searchText)
  );
  ul.textContent = "";
  tasks.forEach((task) => ul.appendChild(task));
};

input.addEventListener("input", search);

console.log("input", input);
console.log("input", ul);
console.log("input", liElements);

const inputTask = document.querySelector("#todolist input");
const ulTask = document.querySelector("#todolist ul");
const liTask = document.getElementsByClassName("task");
const btnToDoList = document.querySelector(".add");
const tasksInfo = document.querySelector("h1 span");
let counter = 0;

const searchTasks = (e) => {
  const searchText = e.target.value.toLowerCase();
  let tasks = [...liTask];
  tasks = tasks.filter((task) =>
    task.textContent.toLocaleLowerCase().includes(searchText)
  );
  ulTask.textContent = "";
  tasks.forEach((task) => ulTask.appendChild(task));
};

const addToList = (e) => {
  e.preventDefault();
  const titleTask = inputTask.value;
  if (titleTask === "") return;
  const task = document.createElement("li");
  task.innerHTML = titleTask + "<button> Usuń</button>";
  task.className = "task";
  ulTask.appendChild(task);
  inputTask.value = "";
  tasksInfo.textContent = liTask.length;
  task.querySelector("button").addEventListener("click", removeTask);
};

inputTask.addEventListener("input", searchTasks);
btnToDoList.addEventListener("click", addToList);
