"use strict";
/* let userSay = {
  name: "Alex",
  word: prompt("Что вы хотите сказать?","Ничего"),
  say: function () {
    return console.log(this.name + " сказал " + this.word);
  }
}
userSay.say(); */

/* let arr1 = ["red", "green", "blue"];
console.log(arr1.length);
console.log(arr1[1]);
console.log(arr1);
arr1.push("black");
console.log(arr1);
console.log(arr1.join("|"));
for(let i in arr1) {
  console.log(arr1[i]);
}
 */

/*  let nums = [5,2,4];
 nums[99] = 3;
 let square = []; 
 for (let i in nums) {
   nums[i] *= nums[i];
   square.push(nums[i]); 
 }
 console.log(square); */

 //Создание класса

 /*  function Rectangle (w,h) {
   this.width = w;
   this.height = h;
 } */

 //Создание нового объекта

 /* let r1 = new Rectangle (100, 200);
 console.log(r1.height * r1.width);

 console.log(r1.constructor);

 let r2 = new Rectangle (200,300);
 console.log(r2.width); */

 //Создание констуктора объектов
 function User(f,l,a) {
   this.firstName = f;
   this.lastName = l;
   this.age = a;
 }

 //Добавление свойства в прототип
 User.prototype.fullName = function () {
   return this.firstName + " " +  this.lastName;
};

//Создание нового объекта на основе конструктора
let newUser = new User("Aleks", "Lyashenko", 31);

 console.log(newUser.fullName());
