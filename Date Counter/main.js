const month = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

const day = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

//Selecting Element

let countNum = document.getElementById("count");
let stepNum = document.getElementById("step");
let outputArea = document.querySelector(".output");
let addCount = document.querySelector(".addcount");
let subCount = document.querySelector(".subcount");
let addStep = document.querySelector(".addstep");
//Calendar Variables

let itsNow = new Date();
let getCurrentDate = new Date(itsNow);
let currentDate = getCurrentDate.getDate();
let getcurrentMonth = getCurrentDate.getMonth();
let currentMonth = month[getcurrentMonth];
let getCurrentDay = getCurrentDate.getDay();
let currentDay = day[getCurrentDay];
let currentYear = getCurrentDate.getFullYear();
let count = 0;
let step = 1;

addStep.addEventListener("click", function () {
  step += 1;
  stepNum.innerHTML = step;
});

addCount.addEventListener("click", function () {
  count += step;
  countNum.innerHTML = count;
  getCurrentDate.setDate(getCurrentDate.getDate() + step);
  currentDay = day[getCurrentDate.getDay()];
  currentDate = getCurrentDate.getDate();
  currentMonth = month[getCurrentDate.getMonth()];
  currentYear = getCurrentDate.getFullYear();
  outputArea.innerText = `${
    count + " Days"
  } from Today is ${currentDay} ${currentDate} ${currentMonth} ${currentYear}`;
});

subCount.addEventListener("click", function () {
  count -= step;
  countNum.innerHTML = count;
  getCurrentDate.setDate(getCurrentDate.getDate() - step);
  currentDay = day[getCurrentDate.getDay()];
  currentDate = getCurrentDate.getDate();
  currentMonth = month[getCurrentDate.getMonth()];
  currentYear = getCurrentDate.getFullYear();
  outputArea.innerText = `${
    count + " ago"
  } from Today is ${currentDay} ${currentDate} ${currentMonth} ${currentYear}`;
});
